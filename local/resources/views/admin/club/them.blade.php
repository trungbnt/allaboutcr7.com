@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Câu lạc bộ
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
                <form action="admin/club/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên CLB</label>
                        <input class="form-control" name="nameClub" placeholder="Nhập tên CLB"/>
                    </div>
                    <div class="form-group">
                        <label>Mùa giải</label>
                        <input class="form-control" name="season" placeholder="Nhập mùa giải" />
                    </div>
                    <div class="form-group">
                        <label>Số áo</label>
                        <input class="form-control" name="clotherNumber" placeholder="Nhập số áo" />
                    </div>
                    <div class="form-group">
                        <label>Loại CLB</label>
                        <select class="form-control" name="TypeClub">
                        @foreach ($typeclub as $tc)
                            <option value="{{$tc->id}}">{{$tc->nameTypeClub}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm</button>
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