@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê trận đấu
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
                                <th>Ngày thi đấu</th>
                                <th>Giải đấu</th>
                                <th>Đội nhà</th>
                                <th>Tỉ số</th>
                                <th>Đối khách</th>
                                <th>Bàn thắng</th>
                                <th>Thẻ vàng</th>
                                <th>Thẻ đỏ</th>
                                <th>Chú thích</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($goal as $g)
                            <tr class="odd gradeX" align="center">
                                <td>{{$g->id}}</td>
                                <td>{{$g->matchday}}</td>
                                <td>{{$g->nameLeague}}</td>
                                <td>{{$g->nameClub}}</td>
                                <td>{{$g->result}}</td>
                                <td>{{$g->nameCompertitor}}</td>
                                <td>{{$g->goal}}</td>
                                <td>{{$g->yellow}}</td>
                                <td>{{$g->red}}</td>
                                <td>{{$g->info}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/goal/xoa/{{$g->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/goal/sua/{{$g->id}}"> Sửa</a></td>
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