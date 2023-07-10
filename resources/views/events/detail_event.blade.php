@extends('layuot.master')
@section('content')
    <p class="page-title tilte-custom" style=" font-family: Comic Sans MS;
">{{ $event->name }}</p>
    <div class="d-flex justify-content-center align-items-center content-container">
        <div class="row w-75 mt-5">
            <div id="detail_event">
                <div class="row">
                    <div class="col-4 card p-2" style="background: none; border: none">
                        <img src="{{ $event->img}}" class="card-img-top rounded-3" width="100%">
                        <p class="card-text mt-3 mb-0" style="font-size: 1.1rem"><i class='bx bxs-calendar' style='color:#ffa71b'  ></i>
                            {{ date('d/m/Y', strtotime($event->time_start)) }} - {{ date('d/m/Y', strtotime($event->time_end)) }}</p>
                        <p class="card-text fs-6 my-0">{{ $event->location }}</p>
                        <p class="card-text fs-3 mt-0  fw-bold" style="color: orange">{{ number_format($event->price, 0, ',', '.') }}
                            VNĐ
                        </p>
                    </div>
                    <div class="col-7 p-3">{{ $event->detail }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection