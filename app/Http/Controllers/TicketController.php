<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $ticket = Ticket::all();
        $order = Order::all();
        // dd($ticket);
        // $request->validate([
        //     "quantity" => 'required',
        //     "date_order" => 'required',
        //     "sdt" => 'required',
        // ]);

        // $total_price = $ticket->price * $order->quantity;
        //* get total price for order

        //* prepare data
        $data = [
        
            'quantity' => $request->quantity,
            'date_order' => $request->date_order,
            'name' => $request->name,
            'sdt' => $request->sdt,
            'email' => $request->email,
            // 'total_price' => $total_price,
        ];

        return view('pay')->with('data', $data);
    }

   
}
