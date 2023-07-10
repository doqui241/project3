@extends('layuot.master')
@section('content')
   <div style="height: 500px">
        <div class="infomation-form-container mt-2">
            <p id="event-name">Liên hệ</p>
        </div>
        <div class="row form-contact ">
            <div class="col-8 m-0">
                <div class="row p-2" id="content-form">
                    <form action="" method="post" class="p-3">
                        <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis
                            justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </label>
                        <div class="row mb-3 mt-3">
                            <div class="col-4"><input type="text" class="form-control" placeholder="Tên"></div>
                            <div class="col-8"><input type="text" class="form-control" placeholder="Email"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4"><input type="text" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="col-8"><input type="text" class="form-control" placeholder="Địa chỉ"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea name="" class="form-control" placeholder="Nhập lời nhắn" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center w-50 m-auto">
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Gửi liên hệ
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="form-item mb-4">
                    <div class="row m-auto" id="event-contact">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688441213/Group2_gkojbw.svg"
                                alt="">
                        </div>
                        <div class="col-9">
                            <p class="fw-bold">Địa chỉ:</p>
                            <p>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
                <div class="form-item mb-4 ">
                    <div class="row m-auto" id="event-contact">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688441212/Group_gewlcr.svg"
                                alt="">
                        </div>
                        <div class="col-9">
                            <p class="fw-bold">Email:</p>
                            <p>doqui241@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <div class="row m-auto" id="event-contact">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="https://res.cloudinary.com/dvgudlkak/image/upload/v1688441212/Group3_ury12n.svg"
                                alt="">
                        </div>
                        <div class="col-9">
                            <p class="fw-bold">Điện thoại:</p>
                            <p>0829613815</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection