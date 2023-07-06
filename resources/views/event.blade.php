{{-- @extends('layout.layout')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Little&Little</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

</head>

<body>
    <div class="container-fluid">

        <nav class="row m-0">
            <div class="col-3 d-flex flex-row-reverse">
                <img src="https://res.cloudinary.com/dpobeimdp/image/upload/v1688358524/Little_Little_Logo_ngang_1_tpifr4.svg"
                    alt="logo" width="50%">
            </div>
            <div class="col-6 d-flex justify-content-evenly align-items-center">
                <a href="/" class="active link-custom">Trang chủ</a>
                <a href="/event" class="link-custom">Sự kiện</a>
                <a href="/contact" class="link-custom">Liên hệ</a>
            </div>
            <div class="col-3 d-flex align-items-center">
                <p class="mb-0 fw-bold">
                    <i class='bx bxs-phone'>0363008204</i>
                </p>
            </div>
        </nav>
        <div class="main-content">

        <div class="row infomation-form-container">
            <p id="event-name">Sự kiện nổi bật</p>
        </div>
        <div class="row d-flex justify-content-center" id="box-event">
            <div class="card" style="width: 18rem;">
                <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688393475/Rectangle_3_p0nit6.svg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Sự kiện 1</h3>
                    <p class="card-text">Đầm sen Park</p>
                    <p><i class='bx bx-calendar' style="color: #FFB809"></i>06/07/2023 - 30/07/2023</p>
    
                    <p class="card-price">25.000 VNĐ</p>
                    <a href="/event-detail/{id}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688393475/Rectangle_3_p0nit6.svg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Sự kiện 1</h3>
                    <p class="card-text">Đầm sen Park</p>
                    <p><i class='bx bx-calendar' style="color: #FFB809"></i>06/07/2023 - 30/07/2023</p>
                    <p class="card-price">25.000 VNĐ</p>
                    <a href="/event-detail/{id}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688393475/Rectangle_3_p0nit6.svg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Sự kiện 1</h3>
                    <p class="card-text">Đầm sen Park</p>
                    <p><i class='bx bx-calendar' style="color: #FFB809"></i>06/07/2023 - 30/07/2023</p>
                    <p class="card-price">25.000 VNĐ</p>
                    <a href="/event-detail/{id}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688393475/Rectangle_3_p0nit6.svg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Sự kiện 1</h3>
                    <p class="card-text">Đầm sen Park</p>
                    <p><i class='bx bx-calendar' style="color: #FFB809"></i>06/07/2023 - 30/07/2023</p>
                    <p class="card-price">25.000 VNĐ</p>
                    <a href="/event-detail/{id}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>
   
