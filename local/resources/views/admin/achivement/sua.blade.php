@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <h1 class="page-header">Danh hiệu
                        <small>{{$achivement->nameLeague}}</small>
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
                    <form action="admin/achivement/sua/{{$achivement->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên đội bóng</label>
                            <input class="form-control" name="nameTeam" placeholder="Nhập tên đội  bóng" value="{{$achivement->nameTeam}}"/>
                        </div>
                        <div class="form-group">
                            <label>Giải đấu</label>
                            <input class="form-control" name="nameLeague" placeholder="Nhập tên giải đấu" value="{{$achivement->nameLeague}}"/>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <p>
                                <img src="upload/achivement/{{$achivement->hinh}}" alt="">
                            </p>
                            <input type="file" class="form-control" name="hinh" value="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Mùa giải</label>
                            <input class="form-control" name="season" placeholder="Nhập mùa giải" value="{{$achivement->season}}"/>
                        </div>
                        <div class="form-group">
                            <label>Loại danh hiệu</label>
                            <select class="form-control" name="TypeAchivement">
                                @foreach ($typeachivement as $ta)
                                <option 
                                @if($achivement->idTypeAchivement == $ta->id)
                                {{"Selected"}}
                                @endif
                                value="{{$ta->id}}">{{$ta->nameTypeAchivement}}</option>
                                @endforeach
                            </select>
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