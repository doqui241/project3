@extends('layuot.master')
@section('content')
<div class="infomation-form-container mt-2">
    <p id="event-name">Thanh toán</p>
</div>
<form action="" method="post" class="row infomation-form-container " style="top:200px;">
    @csrf
    <div class="col-8 infomation-item">
        <div id="index-content" class="bfp-p">
            <div class="form-caption-container form-caption-container1">
                <div class="form-caption text-center p-2 text-white"></div>
            </div>
            <div class="row">
                <div class="mb-3 col-5">
                    <label for="total_price" class="form-label">Số tiền thanh toán</label>
                    <input readonly type="text" class="form-control" name="total_price" id="total_price"
                        value="">
                </div>
                <div class="mb-3 col-2">
                    <label for="quantity" class="form-label">Số vé</label>
                    <input readonly type="text" class="form-control" name="quantity" id="quantity"
                        value="{{ $data['quantity'] }}">
                </div>
                <div class="mb-3 col-5">
                    <label for="date_order" class="form-label">Ngày sử dụng</label>
                    <input readonly type="date" class="form-control" name="date_order" id="date_order"
                        value="{{ $data['date_order'] }}">
                </div>
            </div>



            <div class="mb-3">
                <label for="name" class="form-label">Thông tin liên hệ</label>
                <input readonly type="text" class="form-control" name="name" id="name"
                    value="{{ $data['name'] }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Điện thoại</label>
                <input readonly type="text" class="form-control" name="phone" id="phone"
                    value="{{ $data['sdt'] }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input readonly type="email" class="form-control" name="email" id="email"
                    value="{{ $data['email'] }}">
            </div>
        </div>
    </div>
    <div class="col-4 form-item">
        <div id="index-form">
            <div class="form-caption-container form-caption-container2">
                <div class="form-caption text-center p-2 text-white">Thông tin thanh toán</div>
            </div>
            <div class="mb-3">
                <label for="card_id" class="form-label">Số thẻ</label>
                <input type="text" class="form-control" name="" id="card_id">
            </div>
            <div class="mb-3">
                <label for="card_owner_name" class="form-label">Họ tên chủ thẻ</label>
                <input type="text" class="form-control" name="" id="card_owner_name">
            </div>
            <div class="mb-3">
                <label for="card_end_date" class="form-label">Ngày hết hạn</label>
                <input type="date" class="form-control" name="" id="card_end_date">
            </div>
            <div class="mb-3">
                <label for="card_cvv_cvc" class="form-label">CVV/CVC</label>
                <input type="password" class="form-control" name="" id="card_cvv_cvc">
            </div>
            <div class="d-flex align-items-center justify-content-center pb-2">
                <button class="btn btn-primary" type="submit">Thanh
                    toán</button>
            </div>
        </div>
    </div>
    </div>
</form>
@endsection