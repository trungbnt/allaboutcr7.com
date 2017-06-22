@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Profile
                            <small>{{$profile->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err) 
                                {{$err}}
                                @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/profile/sua/{{$profile->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên" value="{{$profile->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="date" class="form-control" name="dob" placeholder="Nhập ngày sinh" value="{{$profile->dob}}" />
                            </div>
                            <div class="form-group">
                                <label>Nơi sinh</label>
                                <input class="form-control" name="pob" placeholder="Nhập nơi sinh" value="{{$profile->pob}}" />
                            </div>
                            <div class="form-group">
                                <label>Chiều cao</label>
                                <input class="form-control" name="height" placeholder="Nhập chiều cao" value="{{$profile->height}}" />
                            </div>
                            <div class="form-group">
                                <label>Cân nặng</label>
                                <input class="form-control" name="weight" placeholder="Nhập cân nặng" value="{{$profile->weight}}" />
                            </div>
                            <div class="form-group">
                                <label>Vị trí thi đấu</label>
                                <input class="form-control" name="position" placeholder="Nhập vị trí" value="{{$profile->position}}" />
                            </div>
                            <div class="form-group">
                                <label>Chân thuận</label>
                                <input class="form-control" name="foot" placeholder="Nhập chân thuận" value="{{$profile->foot}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection