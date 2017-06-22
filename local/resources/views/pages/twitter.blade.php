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
<!-- END #fh5co-hero -->
<div class="container-fluid social-network">
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding-top: 100px">
				<a href="https://www.facebook.com/Cristiano/" style="color: #3b5998; text-align: center;"><i class="icon-facebook"></i> /Cristiano Ronaldo</a>
				<div class="fb-page" data-href="https://www.facebook.com/Cristiano/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cristiano/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cristiano/">Cristiano Ronaldo</a></blockquote></div>
			</div>
			<div class="col-md-9" style="padding-top: 100px">
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Cristiano">Tweets by Cristiano</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>		
			</div>
		</div>		
	</div>
</div>
@endsection
