@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                        <h1 class="page-header">Thống kê chung
                    <small>{{$statistic->nameTeam}}</small>
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
                <form action="admin/statistic/sua/{{$statistic->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên CLB</label>
                        <input class="form-control" name="nameTeam" placeholder="Nhập tên CLB" value="{{$statistic->nameTeam}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mùa giải</label>
                        <input class="form-control" name="season" placeholder="Nhập mùa giải" value="{{$statistic->season}}"/>
                    </div>
                    <div class="form-group">
                        <label>Giải đấu</label>
                        <select class="form-control" name="TypeLeague">
                            @foreach ($typeleague as $tl)
                            <option 
                            @if($statistic->idTypeLeague == $tl->id)
                            {{"Selected"}}
                            @endif
                            value="{{$tl->id}}">{{$tl->nameTypeLeague}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại thống kê</label>
                        <select class="form-control" name="TypeStatistic">
                            @foreach ($typestatistic as $ts)
                            <option 
                            @if($statistic->idTypeStatistic == $ts->id)
                            {{"Selected"}}
                            @endif
                            value="{{$ts->id}}">{{$ts->nameTypeStatistics}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số trận</label>
                        <input class="form-control" name="game" placeholder="Nhập số trận" value="{{$statistic->game}}"/>
                    </div>
                    <div class="form-group">
                        <label>Bàn thắng</label>
                        <input class="form-control" name="goal" placeholder="Nhập số Bàn thắng" value="{{$statistic->goal}}"/>
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