@extends('layout1.app')

@section('content')
<div class="section section-gray">
    <div class="container tim-container">
        
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Giỏ Hàng Của Bạn</h4>
            </div>
            
            @foreach ($datTour as $DatTour)
            <form action="{{ route('reserveTour.index') }}" method="get">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th></th>
                            <th class="text-right"><p class="btn btn-link btn-default">Giá / Người</p></th>
                            <th class="text-right"><p class="btn btn-link btn-default">Số Lượng Người</p></th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="{{ URL::to($DatTour->anhTour) }}" alt="Agenda">
                                </div>
                            </td>
                            <td class="td-product">
                                <strong>{{ $DatTour->nameTour }} </strong> 
                                <br>                           
                                <strong>(Số Chỗ Còn Lại : <p class="btn btn-danger btn-round">{{ $DatTour->soLuongNguoi }}</p> )</strong>
                                <p>
                                    Ngày Khởi Hành: {{ $DatTour->ngayKhoiHanh }} 
                                </p>
                                <p>
                                 Ngày Kết Thúc: {{ $DatTour->ngayKetThuc }}
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
                                 {{number_format($DatTour->giaNguoiLon , 0, ".",".")}} VNĐ
                            </td>
                            <td class="td-number td-quantity">
                                <input type="hidden" id="soLuongNguoiConLai" value="{{ $DatTour->soLuongNguoi }}">
                                <div class="btn-group">
                                    <input type="number" class="btn btn-danger btn-round" value="0" min="1" max="20" name="so-nguoiLon" id="soLuongNguoiLon">
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
                                <strong>Số Lượng Trẻ Em (>10 tuổi)</strong>
                                <p>Trẻ Em (<10 tuổi Không Mất Phí ) Gia Đình Tự Quản</p>
                            </td>

                            <td class="td-number">
                                {{number_format($DatTour->giaTreEm , 0, ".",".")}} VNĐ
                            </td>
                            <td class="td-number td-quantity">
                                
                                <div class="btn-group">
                                    <input type="number" class="btn btn-danger btn-round" value="0" min="0" max="20" name="so-treEm" id="soLuongTreEm">
                                </div>
                            </td>
                            <td class="td-number">
                                
                            </td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td colspan="4">  <h4 style="color: red;display: none" id="thongBaoLoi">Số Lượng Đặt Vượt Quá Mức Cho Phép</h4> </td>
                            <td class="td-total" >
                                
                            </td>
                            <td class="td-total">
                            
                            </td>

                        </tr>
                        <tr class="tr-actions">
                           <td colspan="3" class="text-right">
                         
                            <input type="hidden" name="id-hoadon" value="{{ $DatTour->idHoaDon }}">
                            <input type="hidden" name="id-tour" value="{{ $DatTour->idTour }}">
                            <button class="btn btn-danger btn-lg" onclick="return kiemTraSoLuongNguoi();">Thanh Toán<i class="fa fa-chevron-right"></i></button>     
                            </td>
                        </form>
                           <td colspan="2" class="text-right">
                            <form action="{{ route('reserveTour.destroy', $DatTour->idHoaDon) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger btn-lg">Xóa Tour </button>
                            </form>
                           </td>
                        </tr>
                    </tbody>
                </table>
                </div>

            </div> 
            @endforeach
            

           
        </div>
        

      
    </div>
</div>
<script src="{{ asset('assets1') }}/js/kiemTraSoLuongNguoiGioHang.js"></script>
@endsection