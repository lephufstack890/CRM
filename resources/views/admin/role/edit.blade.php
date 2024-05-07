@extends('layouts.admin')

@section('content')

<div id="content" class="container-fluid">
    <div class="card-header font-weight-bold">
        Cập nhật vai trò
    </div>
    <div class="card-body">
        <form action="{{route('role.update', $role->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Tên vai trò</label>
                        <input class="form-control" type="text" value="{{ $role->name }}" name="name" id="name" placeholder="Nhập tên vài trò">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        @foreach($permissionsParents as $permissionsParentItem)
                            <div class="card border-primary mb-3 col-md-12">
                                <div class="card-header">
                                    <label>
                                        <input type="checkbox" value="" class="checkbox_parent">
                                    </label>
                                    {{ $permissionsParentItem->name }}
                                </div>
                                <div class="row">
                                    @foreach($permissionsParentItem->permissionsChildrent as $permissionsParent)
                                        <div class="card-body text-primary col-md-3">
                                            <h5 class="card-title">
                                                <label>
                                                    <input type="checkbox" 
                                                            class="checkbox_childrent" 
                                                            name="permission_id[]" 
                                                            value="{{ $permissionsParent->id }}"
                                                            {{ $permissionsChecked->contains('id', $permissionsParent->id) ? 'checked' : ''}}
                                                    >
                                                </label>
                                                {{ $permissionsParent->name }}
                                            </h5>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

@endsection