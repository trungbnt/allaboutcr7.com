@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê loại bàn thắng
                            <small>Thêm</small>
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
                        <form action="admin/totalgoal/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Chân trái</label>
                                <input class="form-control" name="leftFoot" placeholder="Nhập số bàn ghi bằng chân trái" />
                            </div>
                            <div class="form-group">
                                <label>Chân phải</label>
                                <input class="form-control" name="rightFoot" placeholder="Nhập số bàn ghi bằng chân phải" />
                            </div>
                            <div class="form-group">
                                <label>Đánh đầu</label>
                                <input class="form-control" name="header" placeholder="Nhập số bàn ghi bằng đầu" />
                            </div>
                            <div class="form-group">
                                <label>Bộ phân khác</label>
                                <input class="form-control" name="other" placeholder="Nhập số bàn ghi bằng bộ phân khác" />
                            </div>
                            <div class="form-group">
                                <label>Trong vòng cấm</label>
                                <input class="form-control" name="inside" placeholder="Nhập số bàn ghi trong vòng cấm" />
                            </div>
                            <div class="form-group">
                                <label>Ngoài vòng cấm</label>
                                <input class="form-control" name="outside" placeholder="Nhập số bàn ghi ngoài vòng cấm" />
                            </div>
                            <div class="form-group">
                                <label>Đá phạt</label>
                                <input class="form-control" name="freekick" placeholder="Nhập số bàn ghi bằng đá phạt" />
                            </div>
                            <div class="form-group">
                                <label>Chấm 11m</label>
                                <input class="form-control" name="pen" placeholder="Nhập số bàn ghi bằng đá 11m" />
                            </div>
                            <div class="form-group">
                                <label>Tổng số bàn thắng</label>
                                <input class="form-control" name="total" placeholder="Nhập tổng số bàn thắng" />
                            </div>

                            <button type="submit" class="btn btn-default">Thêm bàn thắng</button>
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