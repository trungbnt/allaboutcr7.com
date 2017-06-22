@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tên Kỉ lục
                            <small>Danh sách</small>
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
                                <th>ID</th>
                                <th>Tên Kỉ lục</th>
                                <th>Mùa giải</th>
                                <th>Loại Kỉ lục</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record as $r)
                            <tr class="odd gradeX" align="center">
                                <td>{{$r->id}}</td>
                                <td>{{$r->nameRecord}}</td>
                                <td>{{$r->season}}</td>
                                <td>{{$r->typerecord->nameTypeRecord}}</td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/record/xoa/{{$r->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/record/sua/{{$r->id}}"> Sửa</a></td>
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