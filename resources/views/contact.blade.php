@extends('layuot.master')
@section('content')
   <div style="height: 500px">
    <img src="https://res.cloudinary.com/dpobeimdp/image/upload/v1688372713/Alex_AR_Lay_Do_shadow_1_fv9ypm.svg"
    style="position: absolute; bottom: 10%; left:-10px; z-index: 999; width: 14%">
        <div class="infomation-form-container mt-2">
            <p id="event-name">Liên hệ</p>
        </div>
        <div class="row form-contact ">
            <div class="col-8 m-0">
                <div class="row p-2" id="content-form">
                    <form action="/guilienhe" method="post" class="p-3">
                        @csrf
                        <label for="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis
                            justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </label>
                        <div class="row mb-3 mt-3">
                            <div class="col-4"><input type="text" class="form-control" name="ten" placeholder="Tên"></div>
                            <div class="col-8"><input type="text" class="form-control" name="email" placeholder="Email"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4"><input type="text" class="form-control" name="sdt" placeholder="Số điện thoại">
                            </div>
                            <div class="col-8"><input type="text" class="form-control" name="diachi" placeholder="Địa chỉ"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                {{-- <textarea class="form-control" placeholder="Nhập lời nhắn" name="nd" rows="4"></textarea> --}}
                                <textarea class="col-md-9 form-control" name="nd" rows="4" placeholder="Nhập lời nhắn"></textarea>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center w-50 m-auto">
                            <button type="submit" class="btn btn-primary mt-3" data-bs-toggle="modal"
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
    @if(isset($adminEmail))

    <div class="tb-lh ">
        <button> <span id="close" onclick="this.parentNode.parentNode.remove(); return false;">x</span></button>
        
        <div class="alert alert-info p-3 h2 text-center" style="z-index: 99999">
          
           
            <p> Gửi liên hệ thành công.
                Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!</p>
           
        </div>
        <div class="lh">

        </div>
    </div>

                      
                            @endif
@endsection