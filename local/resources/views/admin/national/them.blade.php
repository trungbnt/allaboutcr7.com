@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sự nghiệp Quốc tế
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
                        <form action="admin/national/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên Giải đấu</label>
                                <input class="form-control" name="nameNational" placeholder="Nhập tên Giải đấu" />
                            </div>
                            <div class="form-group">
                                <label>Mùa giải</label>
                                <input class="form-control" name="season" placeholder="Nhập Mùa giải" />
                            </div>
                            <div class="form-group">
                                <label>Số áo</label>
                                <input class="form-control" name="clotherNumber" placeholder="Nhập Số áo" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Giải đấu Quốc tế</button>
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