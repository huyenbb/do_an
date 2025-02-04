@extends('layout.app')

@section('content')
    <br>

    <!--- form tìm kiếm --->


    <!------------------>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <form method="post" action="{{ route('position.store') }}">
                                    @csrf
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            THÊM CHỨC VỤ
                                        </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Tên Chức Vụ</label>
                                            <input type="text" placeholder="Tên Vị Trí" class="form-control" name="name-position">
                                        </div>                                             
                                            <button type="submit" class="btn btn-fill btn-info">THÊM</button>                                   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <button class="btn btn-wd btn-warning btn-fill btn-magnify">TÌM KIẾM</button>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" value="{{ $search }}" name="search" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">DANH SÁCH CHỨC VỤ</h4>
                            {{-- <p class="category">Information here</p> --}}
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">STT</th>
                                        <th class="text-center">TÊN VỊ TRÍ</th>
                                        <th class="text-center" colspan="2">CHỨC NĂNG</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($listPosition as $position)
                                    <tr>
                                        <td class="text-center">{{ $position->idQuyen }}</td>
                                        <td class="text-center">{{ $position->nameQuyen }}</td>
                                        <td class="td-actions text-center"><a href="{{ route('position.edit',$position->idQuyen) }}"><button class="btn btn-sm btn-fill">CẬP NHẬT</button></a></td>
                                        <td class="td-actions text-center">
                                            <form action="{{ route('position.destroy', $position->idQuyen) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm btn-fill">XÓA</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
<div class="text-center">
    {{ $listPosition->appends(['search'=>$search])-> links() }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


