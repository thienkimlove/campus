@extends('frontend')

@section('content')

    <!-- what esc-->
    <section id="campus-block1" class="blockrows bgblock">
        <div class="inner-page">
            <div class="videoWrapper" id="bxvideo">
                <iframe width="560" height="315" src="{{config('constants.VIDEO_URL')}}" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="listcontrol">
                <li>
                    <div class=" contblock bgorang"> <img src="{{url('frontend/images/icon-4.png')}}">
                        <h2>Kết nối</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock"> <img src="{{url('frontend/images/icon-5.png')}}">
                        <h2>chơi</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock"> <img src="{{url('frontend/images/icon-6.png')}}">
                        <h2>dẩn dắt</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock bgorang"> <img src="{{url('frontend/images/icon-7.png')}}">
                        <h2>trưởng thành</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Tím kiếm cau lac bộ-->

    <section id="searchclb" class="blockrows">
        <div class="inner-page">
            <h2 class="title">Tìm kiếm câu lạc bộ</h2>
            <p class="discript">Hãy tìm kiếm thông tin về câu lạc bộ trong các trường đại học ở việt nam</p>
            <div class="bxsClb bxcol">
                <div class="bxleft">
                    <div class="accordion ">
                        <div class="accordion-section"> <a class="accordion-section-title" href="#hanoi">Hà Nội</a>
                            <div id="hanoi" class="accordion-section-content">
                                <ul class="listunv">
                                    <li><a href="#">ĐH Ngoài Thương (FTU) </a></li>
                                    <li><a href="#">ĐH KTQD (NEU) </a></li>
                                    <li><a href="#">ĐH Bách Khoa (HUST) </a></li>
                                    <li><a href="#">ĐH Y (HMU) </a></li>
                                    <li><a href="#">ĐH Dược (HUP) </a></li>
                                </ul>
                            </div>
                            <!--end .accordion-section-content-->
                        </div>
                        <div class="accordion-section"> <a class="accordion-section-title" href="#hue">TP.Huế</a>
                            <div id="hue" class="accordion-section-content">
                                <ul class="listunv">
                                    <li><a href="#">ĐH Ngoài Thương (FTU) </a></li>
                                    <li><a href="#">ĐH KTQD (NEU) </a></li>
                                    <li><a href="#">ĐH Bách Khoa (HUST) </a></li>
                                    <li><a href="#">ĐH Y (HMU) </a></li>
                                    <li><a href="#">ĐH Dược (HUP) </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-section"> <a class="accordion-section-title" href="#vinh">TP Vinh</a>
                            <div id="vinh" class="accordion-section-content">
                                <ul class="listunv">
                                    <li><a href="#">ĐH Ngoài Thương (FTU) </a></li>
                                    <li><a href="#">ĐH KTQD (NEU) </a></li>
                                    <li><a href="#">ĐH Bách Khoa (HUST) </a></li>
                                    <li><a href="#">ĐH Y (HMU) </a></li>
                                    <li><a href="#">ĐH Dược (HUP) </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-section"> <a class="accordion-section-title" href="#danang">Đà Nẵng</a>
                            <div id="danang" class="accordion-section-content">
                                <ul class="listunv">
                                    <li><a href="#">ĐH Ngoài Thương (FTU) </a></li>
                                    <li><a href="#">ĐH KTQD (NEU) </a></li>
                                    <li><a href="#">ĐH Bách Khoa (HUST) </a></li>
                                    <li><a href="#">ĐH Y (HMU) </a></li>
                                    <li><a href="#">ĐH Dược (HUP) </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-section"> <a class="accordion-section-title" href="#hcm">HCM</a>
                            <div id="hcm" class="accordion-section-content">
                                <ul class="listunv">
                                    <li><a href="#">ĐH Ngoài Thương (FTU) </a></li>
                                    <li><a href="#">ĐH KTQD (NEU) </a></li>
                                    <li><a href="#">ĐH Bách Khoa (HUST) </a></li>
                                    <li><a href="#">ĐH Y (HMU) </a></li>
                                    <li><a href="#">ĐH Dược (HUP) </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rowbt"> <a href="#" class="bt">Đăng ký câu lạc bộ mới</a> </div>
                </div>
                <div class="bxright">
                    <div class="midcont">
                        <h2 class="acticle">Đại học Ngoại Thương (FTU)</h2>
                        <p class="discript">CLB: Tài Năng Esports</p>
                        <div>
                            <h6><img src="{{url('frontend/images/img.jpg')}}"></h6>
                            <div> CLB Tài Năng Esports của Đại Học Ngoại Thương được thành lập ngày 20/06/2016. Trong suốt 3 tháng hoạt động, chúng tôi đã tổ chức được hàng chục giải đấu lớn nhỏ, từ cấp trường tới cấp quốc tế. Chúng tôi đã giành được giải vô địch quốc gia LMHT và FO3 dành cho sinh viên năm 2015 và đang hướng tới giải quốc tế sinh viên trong năm 2016.<br>
                                - Thông tin liên lạc: Mr. Azir - M: 01661900100<br>
                                - Địa chỉ: P.104 - Nhà H - ĐH Ngoại Thương - 91 chùa Láng - Hà Nội </div>
                            <div class="rowbt"> <a href="#" class="bt mb20px">Ghé thăm chúng tôi</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Câu hỏi thường gập-->

    <section id="question" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">Câu hỏi thường gặp<br>
                (FAQ)</h2>
            <div class="bxquest bxcol">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#question1"> Tôi muốn thành lập CLB mới. Tôi phải làm gì ?</a> </h4>
                        <div id="question1" class="panel-collapse collapse in">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.<br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.<br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div>
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#question2"> Vietnam Esports có hỗ trợ tiền bạc hoặc quảng bá các sự kiện của chúng tôi không?</a> </h4>
                        </div>
                        <div id="question2" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#question3"> Vietnam Esports có công việc sau khi ra trường không?</a> </h4>
                        <div id="question3" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#question4">CLB của chúng tôi có giới hạn số lượng thành viên tham gia hay không?</a> </h4>
                        <div id="question4" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
@endsection