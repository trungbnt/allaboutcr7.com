@extends('admin.layout.index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tên Danh hiệu
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
                                <th>Tên giải đấu</th>
                                <th>Hình danh hiệu</th>
                                <th>Mùa giải</th>
                                <th>Loại danh hiệu</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($achivement as $a)
                            <tr class="odd gradeX" align="center">
                                <td>{{$a->id}}</td>
                                <td>{{$a->nameTeam}}</td>
                                <td>{{$a->nameLeague}}</td>
                                <td><img src="upload/achivement/{{$a->hinh}}" alt=""></td>
                                <td>{{$a->season}}</td>
                                <td>{{$a->typeachivement->nameTypeAchivement}}</td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/achivement/xoa/{{$a->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/achivement/sua/{{$a->id}}"> Sửa</a></td>
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