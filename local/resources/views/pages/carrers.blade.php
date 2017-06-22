@extends('layout.index')
@section('content')
<!-- Page Content -->
<section id="fh5co-hero" class="js-fullheight" style="background-image: url(images/hero_bg-2.png);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">
                <div class="fh5co-left-position">
                    <h2 class="animate-box">Mọi thông tin về Cristiano Ronaldo</h2>
                    <p class="animate-box"><a href="https://www.youtube.com/watch?v=KOrqZn-BfIU" class="btn btn-outline popup-vimeo btn-video"><i class="icon-play2"></i> Xem video</a> <a href="#" class="btn btn-primary move-to">Danh hiệu</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">Khám phá thông tin</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row table-responsive" style="margin: 0 auto">
            <div class="col-lg-12">
                <div class="col-md-6">
                    <h1 class="page-header">Thống kê trận đấu
                        <small>Danh sách</small>
                    </h1>                            
                </div>
                <div class="col-md-6">
                    <div class="countdown" style="text-align: center">                        
                        <div>
                            Trận đấu tiếp theo còn: 
                            <span id="clock"></span>
                        </div>
                        <div>
                            <img src="images/russia-logo.png" alt=""> <span>22:00 - 21/06/2017 </span> 
                            <img src="images/portugal-logo.png" alt="">
                        </div>
                        <div>
                            Confederations Cup
                        </div>                            
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <table class="display responsive" cellspacing="0" width="100%" id="dataTables-example">
                <thead>
                    <tr align="center">
                     <th>STT</th>
                     <th>Ngày</th>
                     <th>Giải đấu</th>
                     <th>Đội nhà</th>
                     <th>Tỉ số</th>
                     <th>Đội khách</th>
                     <th><i class="flaticon-football-ball"></i> Bàn th&#7855;ng</th>
                     <th><i class="flaticon-football-card-with-cross-mark" style="color: yellow"></i> Th&#7867; vàng</th>
                     <th><i class="flaticon-football-card-with-cross-mark" style="color: red"></i> Th&#7867; &#273;&#7887;</th>
                 </tr>
             </thead>
             <tbody>
                @foreach ($match as $m)
                <tr class="odd gradeX" align="center">
                 <td>{{$m->id}}</td>
                 <td>{{date('d/m/Y', strtotime($m->matchday))}}</td>
                 <td>{{$m->nameLeague}}</td>
                 <td>{{$m->nameClub}}</td>
                 <td>{{$m->result}}</td>
                 <td>{{$m->nameCompertitor}}</td>
                 <td>{{$m->goal}}</td>
                 <td>{{$m->yellow}}</td>
                 <td>{{$m->red}}</td>
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
