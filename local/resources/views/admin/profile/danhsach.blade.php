@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin cá nhân
                    <small>Thông tin</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Nơi sinh</th>
                        <th>Chiều cao</th>
                        <th>Cân nặng</th>
                        <th>Vị trí</th>
                        <th>Chân thuận</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profile as $p)
                    <tr class="odd gradeX" align="center">
                        <td>{{$p->name}}</td>
                        <td>{{$p->dob}}</td>
                        <td>{{$p->pob}}</td>
                        <td>{{$p->height}}</td>
                        <td>{{$p->weight}}</td>
                        <td>{{$p->position}}</td>
                        <td>{{$p->foot}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/profile/sua/{{$p->id}}"> Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection