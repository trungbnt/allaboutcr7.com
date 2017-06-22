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
					<p class="animate-box"><a href="https://www.youtube.com/watch?v=h7slnGnGTeU" class="btn btn-outline popup-vimeo btn-video"><i class="icon-play2"></i> Xem video</a> <a href="#honours" class="btn btn-primary move-to">Danh hiệu</a></p>
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
<!-- END #fh5co-hero -->

<section id="fh5co-profile">
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-lead animate-box">Thông tin</h2>
			</div>
		</div>
		<div class="col-md-4 col-md-push-8">
			<figure class="fh5co-feature-image animate-box" data-animate-effect="fadeInRight">
				<img src="images/cr7-8.png" alt="Thông tin cơ bản của Cristiano Ronaldo" max-width="100%">
			</figure>
		</div>
		<div class="col-md-6 col-md-pull-4">
			<div class="table-responsive animate-box" data-animate-effect="fadeInLeft">
				<table class="table table-hover" style="font-size: 20px;">	
					<tbody>
						<tr align="center">
							@foreach ($profile as $p)
							<td>Tên đầy đủ</td><td>{{$p->name}}</td>							
						</tr>
						<tr align="center">							
							<td>Ngày sinh</td><td>{{date('d / m / Y', strtotime($p->dob))}}</td>							
						</tr>
						<tr align="center">							
							<td>Nơi sinh</td><td>{{$p->pob}}</td>							
						</tr>
						<tr align="center">							
							<td>Chiều cao</td><td>{{$p->height}}</td>							
						</tr>
						<tr align="center">							
							<td>Cân nặng</td><td>{{$p->weight}}</td>							
						</tr>
						<tr align="center">							
							<td>Vị trí</td><td>{{$p->position}}</td>							
						</tr>
						<tr align="center">							
							<td>Chân thuận</td><td>{{$p->foot}}</td>
							@endforeach
						</tr>                       
					</tbody>
				</table>
			</div>

			<div class="fh5co-counters animate-box" data-stellar-background-ratio="0.5" id="counter-animate" data-animate-effect="fadeInLeft">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-12 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="857" data-speed="5000" data-refresh-interval="50" style="color: #85919d"></span>
							<span class="fh5co-counter-label" style="color: #85919d"><i class="flaticon-football-field-in-perspective"></i> Tổng số trận</span>
						</div>
						<div class="col-md-12 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="603" data-speed="5000" data-refresh-interval="50" style="color: #85919d"></span>
							<span class="fh5co-counter-label" style="color: #85919d"><i class="flaticon-flaming-football"></i> Tổng số bàn thắng</span>
						</div>
						<div class="col-md-12 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="205" data-speed="5000" data-refresh-interval="50" style="color: #85919d"></span>
							<span class="fh5co-counter-label" style="color: #85919d"><i class="flaticon-football-player-kicking-ball-1"></i> Tổng số kiến tạo</span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- END #fh5co-profile -->

<section id="goal-statistic">
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-lead animate-box">Bàn thắng</h2>
			</div>
		</div>
		<ul id="filters" class="clearfix animate-box" data-animate-effect="fadeInLeft">
			<li><span id="button-club">Câu lạc bộ</span></li>
			<li><span id="button-national">Đội tuyển</span></li>
			<li><span id="button-all">Toàn bộ sự nghiệp</span></li>
		</ul>
		<div id="stats-club" style="padding: 0 0 100px 0;"></div>
		<div id="goal-body"></div>
		<div id="goal-area"></div>
		<div id="goal-type"></div>
	</div>
</section>
<!-- END #goal-statistic -->

<section id="honours">
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-lead animate-box">Danh hiệu</h2>
				<p class="fh5co-sub-lead animate-box">Thống kê danh hiệu ở cấp CLB, cấp đội tuyển và cá nhân </p>
			</div>
		</div>
		<div class="row" class="animate-box">
			@foreach ($achivement as $a)
			<div class="fh5co-text" id="tab-season">
				<h2>{{$a->season}}</h2>
			</div>
			<div class="col-md-4 col-sm-6 col-xxs-12 animate-box" id="achivement-season">	
				<a href="#" class="fh5co-project-item image-popup">
					<img src="upload/achivement/{{$a->hinh}}" alt="Image" class="img-responsive" style="max-height: 70px;margin: 10px auto;">
					<div class="fh5co-text">
						<h2>{{$a->nameLeague}}</h2>
						<p>{{$a->nameTeam}}</p>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END #fh5co-projects -->

<section id="records">
	<div class="container">
		<div class="row text-center row-bottom-padded-md">
			<div class="col-md-8 col-md-offset-2">
				<figure class="fh5co-devices animate-box"><img src="images/cr7-9.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></figure>
				<h2 class="fh5co-lead animate-box">Kỉ lục</h2>
				<p class="fh5co-sub-lead animate-box">Những kỉ lục vô tiền khoán hậu của Cristiano Ronaldo.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-flaming-football"></i>
					</div>
					<h3>96 bàn</h3>
					<p>Cầu thủ ghi nhiều bàn thắng nhất tại đấu trường châu Âu (cấp CLB).</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-football-championship-trophy-variant"></i>
					</div>
					<h3>Manchester United & Real Madird</h3>
					<p>Cầu thủ duy nhất giành tất cả danh hiệu tại 2 câu lạc bộ khác nhau.</p>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-football-fans-group"></i>
					</div>
					<h3>8 lần</h3>
					<p>Cầu thủ xuất hiện nhiều lần nhất trong FIFPro World XI.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-football-glove-of-archer"></i>
					</div>
					<h3>2010-2016</h3>
					<p>Cầu thủ duy nhất trong lịch sử ghi 50 bàn trở lên trong 6 mùa giải liên tiếp.</p>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-sports-badge-recognition"></i>
					</div>
					<h3>4 lần</h3>
					<p>Danh hiệu Chiếc giày vàng châu Âu nhiều lần nhất.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
				<div class="fh5co-feature">
					<div class="fh5co-icon">
						<i class="flaticon-inflatable-cheerer"></i>
					</div>
					<h3>355 trận</h3>
					<p>Cầu thủ ghi 350 bàn nhanh nhất cho một CLB.</p>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
		</div>
	</div>
</section>
<!-- END #fh5co-features -->

<div id="fh5co-counters">
	<div class="fh5co-counters animate-box" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate-1">
		<div class="fh5co-narrow-content animate-box">
			<div class="row" >
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="49" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"><i class="flaticon-football-medal-hanging-of-a-ribbon-in-black-shaped"></i> Danh hiệu cá nhân</span>
				</div>
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"><i class="flaticon-soccer-cup-trophy-black-shape"></i> Danh hiệu tập thể</span>
				</div>
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="60" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label"><i class="flaticon-football-glove-of-archer"></i> Kỉ lục</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END #fh5co-counters -->

<section id="fh5co-testimonials" style="background-image: url(images/cr7-14.png);">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-6 col-md-offset-3 text-center">
				<!-- <div class="fh5co-label animate-box">Nhận xét</div> -->
				<h2 class="fh5co-lead animate-box">Những nhận xét thú vị về Cristiano Ronaldo</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center animate-box">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<blockquote>
								<p><span class="quote">“</span>Chỉ có một vài người được coi là George Best mới trong vài năm trở lại đây, nhưng với Ronaldo, đó thực sự là một vinh dự của tôi.<span class="quote">”</span></p>
								<p><cite>&mdash; George Best</cite></p>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p><span class="quote">“</span>Với tôi, cậu ấy luôn là người xuất sắc nhất. Đó là một cỗ máy ghi bàn. Sẽ không bao giờ có một cầu thủ nào khác giống cậu ấy. Tuy nhiên, một vấn đề duy nhất với Ronaldo là cậu ấy nghĩ mình biết mọi thứ, và cho rằng các HLV không đủ trình độ thể giúp cậu ấy phát triển hơn.<span class="quote">”</span></p>
								<p><cite>&mdash; Jose Mourinho</cite></p>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p><span class="quote">“</span>Khi Ronaldo có bóng, việc bạn cần làm là cứ để mặc cậu ấy với nó. Cậu ấy sẽ đánh bại từng cầu thủ một và ghi bàn.<span class="quote">”</span></p>
								<p><cite>&mdash; Ryan Giggs</cite></p>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p><span class="quote">“</span>Theo tôi nghĩ, anh ấy còn giỏi hơn George Best và Denis Law, hai cầu thủ xuất sắc và vĩ đại nhất trong lịch sử United.<span class="quote">”</span></p>
								<p><cite>&mdash; Johan Cruyff</cite></p>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<p><span class="quote">“</span>Cái cách mà Cristiano chơi bóng đủ để nói lên rằng thế nào cậu ta cũng sẽ trở thành cầu thủ vĩ đại nhất trong lịch sử câu lạc bộ.<span class="quote">”</span></p>
								<p><cite>&mdash; Denis Law</cite></p>
							</blockquote>
						</li>
					</ul>
				</div>
				<div class="flexslider-controls">
					<ol class="flex-control-nav">
						<li class="animate-box"><img src="images/person4.jpg" alt="Nhận xét về Cristiano Ronaldo"></li>
						<li class="animate-box"><img src="images/person2.jpg" alt="Nhận xét về Cristiano Ronaldo"></li>
						<li class="animate-box"><img src="images/person3.jpg" alt="Nhận xét về Cristiano Ronaldo"></li>
						<li class="animate-box"><img src="images/person4.jpg" alt="Nhận xét về Cristiano Ronaldo"></li>
						<li class="animate-box"><img src="images/person2.jpg" alt="Nhận xét về Cristiano Ronaldo"></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END #fh5co-testimonials -->

<section id="fh5co-subscribe">
	<div class="container">

		<h3 class="animate-box"><label for="email">Đăng ký nhận tin mới nhất</label></h3>
		<form action="#" method="post" class="animate-box">
			<i class="fh5co-icon icon-paper-plane"></i>
			<input type="email" class="form-control" placeholder="Điền email của bạn" id="email" name="email">
			<input type="submit" value="Đăng ký" class="btn btn-primary">
		</form>

	</div>
</section>
<!-- END #fh5co-subscribe -->
<!-- end Page Content -->
@endsection

