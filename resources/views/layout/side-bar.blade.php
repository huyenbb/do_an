<div class="sidebar" data-background-color="brown" data-active-color="danger">

    <div class="logo">
        <a href="" class="simple-text logo-mini">
            CT
        </a>

        <a href="" class="simple-text logo-normal">
            TRAVEL TOUR
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!-- phần đầu side-bar -->
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/face-2.jpg" />
            </div>
            <div class="info">
                <a href="" class="collapsed">
                    <span>
                        {{ Session::get('nameADMIN') }}
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!------------------------------------------>


        <ul class="nav">
            <li>
                <a href="{{ route('position.index')}}">
                    <i class="ti-panel"></i>
                    <p>Vị Trí</p>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">
                    <i class="ti-panel"></i>
                    <p>Nhân Viên</p>
                </a>
            </li>

            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="ti-panel"></i>
                    <p>Khách Hàng</p>
                </a>
            </li>

            <li>
                <a href="{{ route('manageTour.index') }}">
                    <i class="ti-panel"></i>
                    <p>Quản Lý Tour</p>
                </a>
            </li>
            <li>
                <a href="{{ route('imageDetail.index') }}">
                    <i class="ti-panel"></i>
                    <p>Ảnh Tour</p>
                </a>
            </li>
            <li>
                <a href="{{ route('plane.index') }}">
                    <i class="ti-panel"></i>
                    <p>Chuyến Bay</p>
                </a>
            </li>
            <li>
                <a href="{{ route('hotel.index') }}">
                    <i class="ti-panel"></i>
                    <p>Khách Sạn</p>
                </a>
            </li>
            <li>
                <a href="{{ route('destination.index') }}">
                    <i class="ti-panel"></i>
                    <p>Địa Điểm</p>
                </a>
            </li>
            <li>
                <a href="{{ route('contract.index') }}">
                    <i class="ti-panel"></i>
                    <p>Hóa Đơn</p>
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <i class="ti-panel"></i>
                    <p>Bài Viết</p>
                </a>
            </li>
           

            <li>
                <a data-toggle="collapse" href="#thongke">
                    <i class="ti-view-list-alt"></i>
                    <p>
                        Thống Kê
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="thongke">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('profit.index') }}">
                                <i class="ti-panel"></i>
                                <p>Thống Kê 1</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nhapNamThongKeTourNhieuNhat')}}">
                                <i class="ti-panel"></i>
                                <p>Tour Đặt Nhiều Nhất</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nhapNamThongKeNhieuNhat')}}">
                                <i class="ti-panel"></i>
                                <p>Thống Kê Doanh Thu</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>






            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="ti-view-list-alt"></i>
                    <p>
                        Bình Luận Khách Hàng
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('binhLuanChuaDuyet.index')}}">
                                <span class="sidebar-mini">RT</span>
                                <span class="sidebar-normal">Bình Luận Chưa Duyệt</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('binhLuanDaDuyet.index')}}">
                                <span class="sidebar-mini">ET</span>
                                <span class="sidebar-normal">Bình Luận Đã Duyệt</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a data-toggle="collapse" href="#tinNhan">
                    <i class="ti-view-list-alt"></i>
                    <p>
                        Tin Nhắn Khách Hàng
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tinNhan">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('tinNhanStaff.index')}}">
                                <span class="sidebar-mini">RT</span>
                                <span class="sidebar-normal">Tin Nhắn</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('tinNhanStaffChuaDoc.index')}}">
                                <span class="sidebar-mini">RT</span>
                                <span class="sidebar-normal">Tin Nhắn Đã Đọc</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
