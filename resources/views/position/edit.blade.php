@extends('layout.app')

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="post" action="{{ route('position.update', $position->idQuyen) }}">
                    @method('PUT')
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">
                            UPDATE POSITION
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label>Name Position</label>
                            <input type="hidden" name="id-position" value="{{ $position->idQuyen }}">
                            <input type="text" placeholder="Tên Vị Trí" class="form-control" value="{{ $position->nameQuyen }}" name="update-position">
                        </div>
                        <button type="submit" class="btn btn-fill btn-info">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection