@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê chung
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
                                <th>Tên đội bóng</th>
                                <th>Mùa giải</th>
                                <th>Giải đấu</th>
                                <th>Loại thống kê</th>
                                <th>Số trận</th>
                                <th>Bàn thắng</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statistic as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->id}}</td>
                                <td>{{$s->nameTeam}}</td>
                                <td>{{$s->season}}</td>
                                <td>{{$s->typeLeague->nameTypeLeague}}</td>
                                <td>{{$s->typeStatistic->nameTypeStatistics}}</td>
                                <td>{{$s->game}}</td>
                                <td>{{$s->goal}}</td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/statistic/xoa/{{$s->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/statistic/sua/{{$s->id}}"> Sửa</a></td>
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