 @extends('layout.app')

 @section('content')
     <br>
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6">
                 <div class="card">
                     <div class="row">
                         <div class="col-md-12">
                             <form method="post" action="{{ route('plane.store') }}" enctype="multipart/form-data">
                                 @csrf
                                 <div class="card-header">
                                     <h4 class="card-title">
                                         THÊM CHUYẾN BAY
                                     </h4>
                                 </div>
                                 <div class="card-content">
                                     <div class="form-group">
                                         <label>TÊN MÁY BAY</label>
                                         <input type="text" placeholder="Tên Máy Bay" class="form-control"
                                             name="ten-maybay" id="tenMayBay">
                                         <div class="form-group">
                                             <span style="color: rgb(240, 12, 12);display: none" id="error-tenMayBay">Chưa
                                                 Thêm Tên Máy Bay !</span>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label>Giới Thiệu</label>
                                         <textarea name="gioi-thieu" cols="20" rows="5" class="form-control" id="gioiThieuMayBay"></textarea>
                                     </div>
                                     <div class="form-group">
                                         <span style="color: rgb(240, 12, 12);display: none" id="error-gioiThieuMayBay">Chưa
                                             Điền Thêm Giới Thiệu !</span>
                                     </div>
                                     <div class="row">
                                         <div class="col-sm-12">
                                             <select class="selectpicker" data-style="btn btn-danger btn-block"
                                                 title="Hãng Máy Bay" data-size="7" name="hang-maybay" id="chonMayBay">
                                                 <option value="VietName-Airline">VietName-Airline</option>
                                                 <option value="VietJet-Airline">VietJet-Airline</option>
                                                 <option value="SkyViet-Airline">SkyViet-Airline</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <span style="color: rgb(240, 12, 12);display: none" id="error-chonMayBay">Chưa
                                             Chọn
                                             hãng Máy Bay !</span>
                                     </div>
                                     <div class="row">
                                         <div class="col-sm-12">
                                             <p class="btn btn-danger btn-fill btn-wd">Chọn Ảnh
                                                 <input type="file" name="image" id="AnhMayBay">
                                             </p>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <span style="color: rgb(240, 12, 12);display: none" id="error-AnhMayBay">Chưa
                                             Chọn
                                             Ảnh Máy Bay !</span>
                                     </div>
                                     <div class="form-group">
                                         <label class="checkbox">
                                             <input type="checkbox" data-toggle="checkbox" value="" checked>
                                             Vui Lòng Điền Đầy Đủ Thông Tin và Chọn file Ảnh
                                         </label>
                                     </div>
                                     <button onclick="return kiemTraMayBay();" type="submit"
                                         class="btn btn-fill btn-info">THÊM</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="content">
         <div class="container-fluid">
             <!--- form tìm kiếm --->
             <div class="row">
                 <div class="col-md-12">
                     <form class="navbar-form navbar-left navbar-search-form" role="search">
                         <button class="btn btn-wd btn-warning btn-fill btn-magnify">Tìm Kiếm</button>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-search"></i></span>
                             <input type="text" value="{{ $search }}" name="search" class="form-control"
                                 placeholder="Tên Máy Bay">
                         </div>
                     </form>
                 </div>
             </div>
             <!------------------>
             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">DANH SÁCH MÁY BAY</h4>
                             {{-- <p class="category">Information here</p> --}}
                         </div>
                         <div class="card-content table-responsive table-full-width">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th class="text-center">ID MÁY BAY</th>
                                         <th class="text-center">TÊN MÁY BAY</th>
                                         <th class="text-center">Hãng Airline</th>
                                         <th class="text-center">Image</th>
                                         <th class="text-center" colspan="2">CHỨC NĂNG</th>
                                     </tr>
                                 </thead>
                                 @foreach ($maybay as $mayBay)
                                     <tbody>
                                         <tr>
                                             <td class="text-center">{{ $mayBay->idMayBay }}</td>
                                             <td class="text-center">{{ $mayBay->nameMayBay }}</td>
                                             <td class="text-center">{{ $mayBay->hangMayBay }}</td>
                                             <td class="text-center"><img src="{{ $mayBay->anh }}" width="100px"></td>
                                             <td class="text-center"><a href="{{ route('plane.edit', $mayBay->idMayBay) }}"
                                                     class="btn btn-sm btn-fill">CẬP NHẬT</a></td>
                                             <td class="text-center">
                                                 <form action="{{ route('plane.destroy', $mayBay->idMayBay) }}"
                                                     method="post">
                                                     @method('DELETE')
                                                     @csrf
                                                     <button class="btn btn-sm btn-fill">XÓA</button>
                                                 </form>
                                             </td>
                                         </tr>

                                     </tbody>
                                 @endforeach
                             </table>
                         </div>

                         <div class="text-center">
                             {{ $maybay->appends(['search' => $search])->links() }}
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
