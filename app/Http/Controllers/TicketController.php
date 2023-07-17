<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Ticket;
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;
class TicketController extends Controller
{

    public function index(Request $request)
    {
        $ticket = Ticket::all();
        // $order = Order::with('id_tickets')->get();
        return view('index',compact('ticket'));
    }

    public function pay(Request $request)
    {
        $ticket = Ticket::find($request->ticket);
        $order = Order::all();
        // dd($ticket);
        $request->validate([
            "quantity" => 'required|integer|min:1',
            "date_order" => 'required|date|date_format:Y-m-d|after_or_equal:' . date('Y-m-d'),
            "sdt" => ['required', 'regex:/(0[3|5|7|8|9])+([0-9]{8})/', 'size:10'],
            "name" => 'required',
            "email" => 'required'

        ], [
            'quantity.required'=>'không được để trống số lượng',
            'date_order.required'=>'không được để trống ngày',
            'sdt.required'=>'không được để trống số điện thoại',
            'name.required'=>'không được để trống tên',
            'email.required'=>'không được để trống email',
            'quantity.min' => 'Số vé phải > 0',
            'date_order.after_or_equal' => 'Ngày đặt phải từ hôm nay trở đi',
            'sdt.regex' => 'Số điện thoại không đúng định dạng',
            'sdt.size' => 'Số điện thoại phải có 10 số'
        ]);

        $total_price = $ticket->price * $request->quantity;
        // dd( $total_price);
        //* get total price for order

        //* prepare data
        $data = [
            'id_ticket' => $ticket->id,
            'name_ticket' => $ticket->name,
            'total_price' => $total_price,
            'quantity' => $request->quantity,
            'date_order' => $request->date_order,
            'name' => $request->name,
            'sdt' => $request->sdt,
            'email' => $request->email,
            // 'total_price' => $total_price,
        ];

        return view('pay')->with('data', $data);
    }
    public function success (Request $request){
        // dd($request->vnp_TxnRef);
        // dd(session()->get('data1'));
        $order = new Order();
        $order->total_price = $request->query('total_price');
        $order->date_order = $request->query('date_order');
        $order->quantity = $request->query('quantity');
        $order->name = $request->query('name');
        $order->sdt = $request->query('sdt');
        $order->email = $request->query('email');
        $order->session_id = $request->query('vnp_TxnRef');
        $order->save();




        $order_detail = new Order_detail();
        $order_detail->id_ticket = $request->query('id_ticket');
        $order_detail->id_order = $order->id;
        $order_detail->save();

        $ticket = Ticket::find( $order_detail->id_ticket);

        
        return  view('pay_success',['data'=>$order,'ticket'=>$ticket]);
        // dd( $request);
        // return view('success');
    }
    public function pay_success(){

    }

    public function checkout(Request $request){
        
        // $ticket = Ticket::select('price','name')->first();
        $ticket = Ticket::find($request->id_ticket);
        // dd($request);
        $total_price = $ticket->price * $request->quantity;

        $data = [

            'name_ticket' => $ticket->name,
            'total_price' => $total_price,
            'quantity' => $request->quantity,
            'date_order' => $request->date_order,
            'name' => $request->name,
            'sdt' => $request->sdt,
            'email' => $request->email,
            // 'total_price' => $total_price,
        ];

        session()->put('data1',$data);
       
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('success')."?name_ticket={ $ticket->name}&total_price={$total_price}&quantity={$request->quantity}&date_order={$request->date_order}&name={$request->name}
        &sdt={$request->sdt}&email={$request->email}&id_ticket={$ticket->id}";   
        $vnp_TmnCode = "2EWGHJHA";//Mã website tại VNPAY 
        $vnp_HashSecret = "ILBRBNXSAZJBALGKUZWGTAEJSOVAHBDF"; //Chuỗi bí mật

        $vnp_TxnRef = strtoupper(uniqid());
        // return $key;
        // $randomKey = generateRandomKey(10);

        $vnp_OrderInfo = 'thanh toán';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total_price * 100; 
        // $_POST['amount'] * 100
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
              
                echo json_encode($returnData);
            }
    
        
             
                
        }
          
       
        public function save(Request $request)
        {
            $order = DB::table('orders')->where('session_id', $request->session_id)->first();
            $orderDetail = DB::table('order_detail')->where('id_order', $order->id)->first();
            $ticket_name = DB::table('tickets')->where('id', $orderDetail->id_ticket)->first()->name;
    
    
            if (isset($_POST['mail'])) {
                Mail::to($order->email)->send(new ThankYouMail( $order->name,$order->email,$order->total_price, $order->date_order, $order->quantity, $ticket_name, $request->session_id));
                return redirect()->route('index');
            }
    
    
    
            if (isset($_POST['save'])) {
                $data = [
                    'name' => $order->name,
                    'email' => $order->email,
                    'price' => number_format($order->total_price, 0, ',', '.'),
                    'date_order' => date('d/m/Y', strtotime($order->date_order)),
                    'quantity' => $order->quantity,
                    'ticket_name' => $ticket_name,
                    'session_id' => $order->session_id
                ];
    
                $pdf = Pdf::loadView('email.export', $data)
            ->setPaper('a4', 'portrait');

        return $pdf->stream();
            }
        }
   
}
