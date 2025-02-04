<nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="500">
    <div class="container">
        <div class="navbar-translate">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('displayInformation') }}">Travel Tour</a>
            </div>
            <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('maybay.index') }}" data-scroll="true" href="javascript:void(0)">Vé May Bay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('khachsan.index') }}" data-scroll="true" href="javascript:void(0)">Khách Sạn</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Tour</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                        <a class="dropdown-item" href="{{ route('diadiem.index') }}"><i class="nc-icon nc-tile-56"></i>&nbsp; Địa Điểm</a>
                        <a class="dropdown-item" href="{{ route('tour.index') }}"><i class="nc-icon nc-settings"></i>&nbsp; Tất Cả Tour</a>
                        <a class="dropdown-item" href="{{ route('baiviet.index') }}"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Bài Viết</a>
                    </ul>
                </li>


                @if (Session::exists('idUSER'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Tài Khoản</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                        <a class="dropdown-item" href="{{ route('profile') }}"><i class="nc-icon nc-tile-56"></i>&nbsp; Trang Cá Nhân</a>
                        <a class="dropdown-item" href="{{ route('logoutUSER') }}"><i class="nc-icon nc-tile-56"></i>&nbsp; Đăng Xuất</a>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginUSER') }}" data-scroll="true" href="javascript:void(0)">Đăng Nhập</a>
                </li>
                @endif
                
               
                <li class="nav-item">
                    <a class="btn btn-round btn-danger" href="{{ route('tour.index') }}">
                        <i class="fa fa-search" aria-hidden="true"></i> Tìm Tour
                    </a>
                </li>
                @if (Session::get('idUSER'))
                <li class="nav-item">
                    <a class="btn btn-round btn-danger" href="{{ route('reserveTour.show', Session()->get('idUSER')) }}">
                        <i class="nc-icon nc-cart-simple"></i> Giỏ Hàng Tour
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-warning btn-round" href="{{ route('tinNhanCustomer.index') }}">
                        <i class="nc-icon nc-chat-33"></i> Chat
                    </a>
                </li>
                @endif
                
            </ul>
        </div>
    </div>
</nav>