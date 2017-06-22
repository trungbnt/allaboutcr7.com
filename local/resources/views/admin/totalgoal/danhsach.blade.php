@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê loại bàn thắng
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
                                <th>Chân trái</th>
                                <th>Chân phải</th>
                                <th>Đánh đầu</th>
                                <th>Bộ phận khác</th>
                                <th>Trong vòng cấm</th>
                                <th>Ngoài vòng cấm</th>
                                <th>Đá phạt</th>
                                <th>Chấm 11m</th>
                                <th>Tổng số</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($totalgoal as $tg)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tg->id}}</td>
                                <td>{{$tg->leftFoot}}</td>
                                <td>{{$tg->rightFoot}}</td>
                                <td>{{$tg->header}}</td>
                                <td>{{$tg->other}}</td>
                                <td>{{$tg->inside}}</td>
                                <td>{{$tg->outside}}</td>
                                <td>{{$tg->freekick}}</td>
                                <td>{{$tg->pen}}</td>
                                <td>{{$tg->total}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/totalgoal/sua/{{$tg->id}}"> Sửa</a></td>
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