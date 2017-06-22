@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê bàn thắng
                            <small>{{$goal->matchday}}</small>
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
                        <form action="admin/goal/sua/{{$goal->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Ngày thi đấu</label>
                                <input type="datetime" class="form-control" name="matchday" placeholder="Nhập tên Giải đấu" value="{{$goal->matchday}}" />
                            </div>
                            <div class="form-group">
                                <label>Giải đấu</label>
                                <input class="form-control" name="nameLeague" placeholder="Nhập tên Giải đấu" value="{{$goal->nameLeague}}" />
                            </div>
                            <div class="form-group">
                                <label>Đội bóng</label>
                                <input class="form-control" name="nameClub" placeholder="Nhập tên Đội bóng" value="{{$goal->nameClub}}" />
                            </div>
                            <div class="form-group">
                                <label>Tỉ số</label>
                                <input class="form-control" name="result" placeholder="Nhập Tỉ số" value="{{$goal->result}}"/>
                            </div>
                            <div class="form-group">
                                <label>Đối thủ</label>
                                <input class="form-control" name="nameCompertitor" placeholder="Nhập tên Đối thủ" value="{{$goal->nameCompertitor}}" />
                            </div>
                            <div class="form-group">
                                <label>Bàn thắng</label>
                                <input class="form-control" name="goal" placeholder="Nhập số Bàn thắng" value="{{$goal->goal}}" />
                            </div>
                            <div class="form-group">
                                <label>Thẻ vàng</label>
                                <input class="form-control" name="yellow" placeholder="Nhập số Thẻ vàng" value="{{$goal->yellow}}" />
                            </div>
                            <div class="form-group">
                                <label>Thẻ đỏ</label>
                                <input class="form-control" name="red" placeholder="Nhập số Thẻ đỏ" value="{{$goal->red}}" />
                            </div>
                            <div class="form-group">
                                <label>Chú thích</label>
                                <input class="form-control" name="info" placeholder="Nhập Chú thích" value="{{$goal->info}}" />
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