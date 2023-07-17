@extends('layuot.master')
@section('content')
    <style>
        #bfp-context {
            width: 12%;
            position: absolute;
            bottom: 60px;
            z-index: 1000;
            left: 0;
        }

        .contact-form-item {    
       
            background-color: #fff6d4;
            border-radius: 10px;
            border: 3px dashed #ffb489;
            min-height: 400px;
            padding: 10px;
           
        }
        .form-item{    
       
            margin-top: 150px
           
        }
        .card{
            border: 0px;
            border-radius: 15px;
        }
    </style>
    <p class="page-title tilte-custom">Thanh toán thành công</p>
    <img src="https://res.cloudinary.com/dpobeimdp/image/upload/v1688357585/Alvin_Arnold_Votay1_1_jxd9rr.svg"
        id="bfp-context">
    <div class="d-flex justify-content-center align-items-center content-container mt-5">
        <div class="row w-75">
            <div class="col-12 form-item">
                <div class="contact-form-item row m-auto">
                    @for ($i = 1; $i <= ((int) $data['quantity'] > 4 ? 4 : (int) $data['quantity']); $i++)
                        <div class='col-3'>
                            <div class="card" style="height: 350px">
                                <div class="card-body text-center">
                                    {!! QrCode::generate($data['session_id']) !!}
                                    <p class="fw-bold fs-4 mt-2">{{ $data['session_id'] }}</p>
                                    <p class="fw-bold fs-5" style="color: orange">{{ $ticket->name }}</p>
                                    <p>---</p>
                                    <p class="fs-6 mt-2">Ngày sử dụng: {{ $data['date_order'] }}</p>
                                    <p><i class='bx bxs-badge-check' style='color:#38ff00' style="width:50px;"></i></p>
                                </div>
                            </div>
                        </div>                       
                    @endfor
                    <p class="mt-3">Số lượng vé: {{ $data['quantity'] }}</p>
                </div>              
            </div>
           
            <form action="{{ route('save') }}" method="post">
                @csrf
                {{-- <input type="hidden" name="session_id" value="{{ $_GET['session_id'] }}"> --}}
                <input type="hidden" name="session_id" value="{{ $data['session_id'] }}">
                <div class="d-flex align-items-center justify-content-center mt-3">
                    <div class="w-25 row">
                        <button class="btn btn-primary col" name="save" type="submit" style="margin-right:15px;">Tải vé</button>
                        <button class="btn btn-primary col me-1" name="mail" type="submit">Gửi mail</button>
                    </div>
                </div>
            </form>
        </div>


    @endsection