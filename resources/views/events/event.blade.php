@extends('layuot.master')
@section('content')
<div class="main-content">
    <img src="https://res.cloudinary.com/dbgqqupsw/image/upload/v1688568499/Frame_entzej.svg" alt=""
    style="position: absolute; top: 10%; left: 0;width:30%">
    <img src="https://res.cloudinary.com/dbgqqupsw/image/upload/v1688568500/Frame2_hrfrrk.svg" alt=""
    style="position: absolute; top: 2%; right: 0;width:30%">
    <div class="row infomation-form-container">
        <p id="event-name">Sự kiện nổi bật</p>
    </div>
    <div class="row d-flex justify-content-center" id="box-event">
        @foreach ($event as $item)
        <div class="card" style="width: 18rem;">           
            <img src="{{ $item->img}}"class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">{{ $item->name }}</h3>
                <p class="card-text">{{ $item->location }}</p>
                <p><i class='bx bxs-calendar' style='color:#ffa71b'  ></i>{{ date('d/m/Y', strtotime($item->time_start))}} - {{ date('d/m/Y', strtotime($item->time_end))  }}</p>

                <p class="card-price">{{  number_format($item->price, 0, ',', '.')}} VNĐ</p>
                <a href="{{ route('event.show', $item->id) }}" class="btn btn-primary">Xem chi tiết</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection