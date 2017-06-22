@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                        <h1 class="page-header">Kỉ lục
                    <small>{{$record->nameRecord}}</small>
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
                <form action="admin/record/sua/{{$record->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Kỉ lục</label>
                        <input class="form-control" name="nameRecord" placeholder="Nhập tên đội  bóng" value="{{$record->nameRecord}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mùa giải</label>
                        <input class="form-control" name="season" placeholder="Nhập mùa giải" value="{{$record->season}}"/>
                    </div>
                    <div class="form-group">
                        <label>Loại Kỉ lục</label>
                        <select class="form-control" name="TypeRecord">
                            @foreach ($typerecord as $tr)
                            <option 
                            @if($record->idTypeRecord == $tr->id)
                            {{"Selected"}}
                            @endif
                            value="{{$tr->id}}">{{$tr->nameTypeRecord}}</option>
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