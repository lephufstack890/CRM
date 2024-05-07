@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách quyền</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên quyền</th>
                    </tr>
                </thead>
                <tbody>           
                    @php
                        $t = 0;
                    @endphp
                    @foreach ($permissions as $permission)
                        @if($permission->parent_id != 0)
                            @php
                                $t++;
                            @endphp
                            <tr>
                                <td>{{$t}}</td>
                                <td>{{$permission->name}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection