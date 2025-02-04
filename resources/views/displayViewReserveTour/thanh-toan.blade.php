@extends('layout1.app')

@section('content')
<div class="section section-gray">
    <div class="container tim-container">

        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Đơn Tour Của Bạn</h4>
            </div>

             <form action="{{ route('reserveTour.update', $hoadon->idHoaDon) }}" method="post">
                 @csrf
                 @method('PUT')
            <div class="col-md-10 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th></th>
                            <th class="text-right"><p class="btn btn-link btn-default">Giá / Người</p></th>
                            <th class="text-right"><p class="btn btn-link btn-default">Số Lượng Người</p></th>
                            <th class="text-right"><p class="btn btn-link btn-default">Thành Tiền</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="{{ URL::to($hoadon->anhTour) }}" alt="Agenda">
                                </div>
                            </td>
                            <td class="td-product">
                                <strong>{{ $hoadon->nameTour }} </strong>
                                <br>
                                <strong>(Số Chỗ Còn Lại : <p class="btn btn-danger btn-round">{{ $hoadon->soLuongNguoi }}</p> )</strong>
                                <p>
                                    Ngày Khởi Hành: {{ $hoadon->ngayKhoiHanh }}
                                </p>
                                <p>
                                 Ngày Kết Thúc: {{ $hoadon->ngayKetThuc }}
                                </p>
                            </td>

                            <td class="td-price">

                            </td>
                            <td class="td-number td-quantity">

                            </td>
                            <td class="td-number">

                            </td>
                        </tr>
                        <tr>
                             <td>
                                <div class="img-container">

                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Số Lượng Người Lớn</strong>
                                <p>Vui Lòng Điền Số Lượng Người</p>
                            </td>

                            <td class="td-number">
                                {{number_format($hoadon->giaNguoiLon , 0, ".",".")}} VNĐ
                            </td>
                            <td class="td-number td-quantity">
                                <div class="text-center">
                                    <input type="hidden" name="so-nguoiLon" value="{{ $soNguoiLon }}">
                                    <p class="btn btn-danger btn-round">{{ $soNguoiLon }}</p>
                                </div>
                            </td>

                            <td class="td-number">
                                {{number_format($soTienNguoiLon , 0, ".",".")}} VNĐ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-container">

                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Số Lượng Trẻ Em (>10 tuổi)</strong>
                                <p>Trẻ Em (<10 tuổi Không Mất Phí ) Gia Đình Tự Quản</p>
                            </td>

                            <td class="td-number">
                                {{number_format($hoadon->giaTreEm , 0, ".",".")}} VNĐ
                            </td>
                            <td class="td-number td-quantity">

                                <div class="text-center">
                                    <input type="hidden" name="so-treEm" value="{{ $soTreEm }}">
                                    <p class="btn btn-danger btn-round">{{ $soTreEm }}</p>
                                </div>
                            </td>

                            <td class="td-number">
                                {{number_format($soTienTreEm , 0, ".",".")}} VNĐ
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td class="td-total">
                               Tổng Số Tiền:
                            </td>

                            <td class="td-total">
                                <input type="hidden" name="tong-tien" value="{{ $soTienTong }}">
                                {{number_format($soTienTong, 0, ".",".")}} VNĐ
                            </td>

                        </tr>
                        <tr class="tr-actions">
                           <td colspan="3"></td>
                           <td colspan="2" class="text-right">
                               <input type="hidden" name="id-tour" value="{{ $hoadon->idTour }}">

                           </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12">
                    <h4 class="title">Thông Tin Khách Đặt Tour</h4>
                </div>



                <!---Thông Tin Khách Đặt Tour ---->
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th></th>
                            <th class="text-right"></th>
                            <th class="text-right"></th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-container">

                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Họ Tên :</strong>
                            </td>

                            <td class="td-price">
                                <input type="text" name="ho-ten" value="{{ $khachhang->nameKhachHang }}" class="form-control" id="tenKhachHang">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-tenKhachHang">Vui Lòng Điền Tên Vào !</span>
                            </td>
                            <td class="td-number td-quantity">

                            </td>
                            <td class="td-number">

                            </td>
                        </tr>
                        <tr>
                             <td>
                                <div class="img-container">

                                </div>
                            </td>
                            <td class="td-product">
                                <strong>SĐT</strong>

                            </td>

                            <td class="td-number">
                                <input type="text" name="sdt" value="{{ $khachhang->sdt }}" class="form-control" placeholder="Điền Số Điện Thoại" id="SDT">
                                <span style="color: rgb(240, 12, 12);display: none" id="error-SDT">Vui Lòng Điền SĐT Vào !</span>
                            </td>
                            <td class="td-number td-quantity">
                                <div class="text-center">


                                </div>
                            </td>
                            <td class="td-number">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-container">

                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Ghi Chú</strong>
                                <p>( Vui Lòng Điền Tên Các Thành Viên Khác )</p>
                            </td>

                            <td class="td-number">
                               <textarea name="ghi-chu"  cols="40" rows="5" class="form-control" id="ghichu"></textarea>
                               <span style="color: rgb(240, 12, 12);display: none" id="error-ghichu">Vui Lòng Điền thông tin Vào !</span>
                            </td>
                            <td class="td-number td-quantity">

                                <div class="text-center">


                                </div>
                            </td>
                            <td class="td-number">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td class="td-total">

                            </td>
                            <td class="td-total">

                            </td>

                        </tr>
                        <tr class="tr-actions">
                           <td colspan="3"></td>
                           <td colspan="2" class="text-right">
                               <button onclick="return kiemTraThanhToan();" class="btn btn-danger btn-lg">Xác Nhận<i class="fa fa-chevron-right"></i></button>
                           </td>
                        </tr>
                    </tbody>
                </table>
                <!---------------------->


                </div>

            </div>
            </form>


        </div>

    </div>
</div>
@endsection
