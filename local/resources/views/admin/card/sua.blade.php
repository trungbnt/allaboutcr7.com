@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê thẻ phạt
                            <small>{{$card->matchday}}</small>
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
                        <form action="admin/card/sua/{{$card->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Ngày thi đấu</label>
                                <input type="datetime" class="form-control" name="matchday" placeholder="Nhập tên Giải đấu" value="{{$card->matchday}}" />
                            </div>
                            <div class="form-group">
                                <label>Đội bóng</label>
                                <input class="form-control" name="nameClub" placeholder="Nhập tên Đội bóng" value="{{$card->nameClub}}" />
                            </div>
                            <div class="form-group">
                                <label>Đối thủ</label>
                                <input class="form-control" name="nameCompertitor" placeholder="Nhập tên Đối thủ" value="{{$card->nameCompertitor}}" />
                            </div>
                            <div class="form-group">
                                <label>Giải đấu</label>
                                <input class="form-control" name="nameLeague" placeholder="Nhập tên Giải đấu" value="{{$card->nameLeague}}" />
                            </div>
                            <div class="form-group">
                                <label>Loại thẻ</label>
                                <input class="form-control" name="card" placeholder="Nhập thể loại thẻ" value="{{$card->card}}" />
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