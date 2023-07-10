@extends('layuot.master')
@section('content')
<img src="https://res.cloudinary.com/dpobeimdp/image/upload/v1688358523/image_2_mzjbow.svg" id="damsen-logo">
    <p id="damsen-name" class="tilte-custom">Đầm sen <br> park</p>
    <div class="row infomation-form-container">
        
        <div class="col-8 infomation-item">
            
            <div id="index-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. 
                    Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. <br> <br>

                    Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>


            </div>
        </div>
        <div class="col-4 form-item">
            <form action="{{route('pay')}}" method="post" id="index-form">
                @csrf
                <div class="form-caption-container form-caption-container-index">
                    <div class="form-caption text-center p-2 text-white">Vé của bạn</div>
                </div>

                <select name="ticket" id="ticket" class="form-control mt-3">
                    @foreach ($ticket as $item)
                        <option value="">{{$item->name}}</option>
                    @endforeach           
                </select>
                <div class="row">
                    <div class="col-5">
                        <input class="form-control mt-3 pe-0" placeholder="Số lượng vé" type="number" name="quantity"
                            id="quantity" required>
                    </div>
                    <div class="col-7 ps-0">
                        <input class="form-control mt-3" placeholder="Ngày đặt vé" type="date" name="date_order"
                            id="date_order" required>
                      
                    </div>
                </div>
                <input class="form-control mt-3" placeholder="Họ và tên" type="text" name="name" id="name"
                    required>
                <input class="form-control mt-3" placeholder="Số điện thoại" type="text" name="sdt" id="phone"
                    required>
              
                <input class="form-control mt-3" placeholder="Email" type="email" name="email" id="email" required>
                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary mt-3" type="submit">Đặt vé</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/checkDateIndex.js') }}"></script>
@endsection