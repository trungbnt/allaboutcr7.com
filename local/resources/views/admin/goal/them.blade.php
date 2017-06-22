@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê trận đấu
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
                        <form action="admin/goal/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Ngày thi đấu</label>
                                <input type="date" class="form-control" name="matchday" placeholder="Nhập ngày thi đấu" />
                            </div>
                            <div class="form-group">
                                <label>Giải đấu</label>
                                <input class="form-control" name="nameLeague" placeholder="Nhập tên Giải đấu" />
                            </div>
                            <div class="form-group">
                                <label>Đội nhà</label>
                                <input class="form-control" name="nameClub" placeholder="Nhập tên Đội nhà" />
                            </div>
                            <div class="form-group">
                                <label>Tỉ số</label>
                                <input class="form-control" name="result" placeholder="Nhập Tỉ số" />
                            </div>
                            <div class="form-group">
                                <label>Đối khách</label>
                                <input class="form-control" name="nameCompertitor" placeholder="Nhập tên Đối khách" />
                            </div>
                            <div class="form-group">
                                <label>Bàn thắng</label>
                                <input class="form-control" name="goal" placeholder="Nhập số Bàn thắng" />
                            </div>
                            <div class="form-group">
                                <label>Thẻ vàng</label>
                                <input class="form-control" name="yellow" placeholder="Nhập số Thẻ vàng" />
                            </div>
                            <div class="form-group">
                                <label>Thẻ đỏ</label>
                                <input class="form-control" name="red" placeholder="Nhập số Thẻ đỏ" />
                            </div>
                            <div class="form-group">
                                <label>Chú thích</label>
                                <input class="form-control" name="info" placeholder="Nhập Chú thích"/>
                            </div>

                            <button type="submit" class="btn btn-default">Thêm trận đấu</button>
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