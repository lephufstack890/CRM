@extends('layouts.admin')

@section('content')

<div id="content" class="container-fluid">
    <div class="card-header font-weight-bold">
        Cập nhật thông tin người dùng
    </div>
    <div class="card-body">
        <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input class="form-control" type="text" value="{{ $user->name }}" name="name" id="name" placeholder="Nhập tên user">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" value="{{ $user->email }}" name="email" id="email" placeholder="Nhập email">
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="email">Vai trò</label>
                        <select id="role_id" class="form-control" name="role_id" required>
                            <option value="">Select role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $user->roles->contains('id', $role->id) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            <button type="submit" name="btn-add" value="Thêm mới" class="ml-3 btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

@endsection