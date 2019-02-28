<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>HarrisonHighSchool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{asset('css/backend_css/school_page_style.css')}}">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="HarrisonHighSchool" style="background-image: url({{asset('assets/images/frontend_images/logo_school.png')}});width: 221px;
					height: 234px;
					display: block;
					cursor: pointer;
					margin: 0 auto -82px;
					text-indent: -9999em;
					position: relative;
					z-index: 3;">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<div >
					<li><a href="events.html">Events</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li class="current"><a href="events.html">Home</a></li>
 				</ul>

				<ul>
					<li><a href="gallery.html">Vision</a></li>
					<li><a href="gallery.html">Join us</a></li>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
   				</ul>
			</nav>

			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">

			<div class="main-content">
				<h1>Upcoming events</h1>
				<section class="posts-con">
					@foreach($events as $event)
						<article>
							<div class="current-date">
								<p>{{$event->month}}</p>
								<p class="date">{{$event->day}}</p>
							</div>
							<div class="info">
								<h3>{{$event->heading}}</h3>
								<p class="info-line"><span class="time">{{$event->time}}</span><span class="place">{{$event->place}}</span></p>
								<p>{{$event->description}}</p>
							</div>
						</article>
					@endforeach

					{{--<article>--}}
						{{--<div class="current-date">--}}
							{{--<p>April</p>--}}
							{{--<p class="date">17</p>--}}
						{{--</div>--}}
						{{--<div class="info">--}}
							{{--<h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>--}}
							{{--<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>--}}
							{{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
						{{--</div>--}}
					{{--</article>--}}
					{{--<article>--}}
						{{--<div class="current-date">--}}
							{{--<p>April</p>--}}
							{{--<p class="date">25</p>--}}
						{{--</div>--}}
						{{--<div class="info">--}}
							{{--<h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>--}}
							{{--<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>--}}
							{{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
						{{--</div>--}}
					{{--</article>--}}
					{{--<article class="last">--}}
						{{--<div class="current-date">--}}
							{{--<p>April</p>--}}
							{{--<p class="date">29</p>--}}
						{{--</div>--}}
						{{--<div class="info">--}}
							{{--<h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>--}}
							{{--<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>--}}
							{{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
						{{--</div>--}}
					{{--</article>--}}
				</section>
			</div>
			
			<aside id="sidebar">
				<div class="widget clearfix calendar">
					<h2>Event calendar</h2>
					<div class="head">
						<a class="prev" href="#"></a>
						<a class="next" href="#"></a>
						<h4>April 2014</h4>
					</div>
					<div class="table">
						<table>
							<tr>
								<th class="col-1">Mon</th>
								<th class="col-2">Tue</th>
								<th class="col-3">Wed</th>
								<th class="col-4">Thu</th>
								<th class="col-5">Fri</th>
								<th class="col-6">Sat</th>
								<th class="col-7">Sun</th>
							</tr>
							<tr>
								<td class="col-1 disable"><div>31</div></td>
								<td class="col-2"><div>1</div></td>
								<td class="col-3"><div>2</div></td>
								<td class="col-4"><div>3</div></td>
								<td class="col-5 archival"><div>4</div></td>
								<td class="col-6"><div>5</div></td>
								<td class="col-7"><div>6</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>7</div></td>
								<td class="col-2"><div>8</div></td>
								<td class="col-3 archival"><div>9</div></td>
								<td class="col-4"><div>10</div></td>
								<td class="col-5"><div>11</div></td>
								<td class="col-6"><div>12</div></td>
								<td class="col-7"><div>13</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>14</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis initial-scalete natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>15</div></td>
								<td class="col-3"><div>16</div></td>
								<td class="col-4 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>16</div></td>
								<td class="col-5"><div>18</div></td>
								<td class="col-6"><div>19</div></td>
								<td class="col-7"><div>20</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>21</div></td>
								<td class="col-2"><div>22</div></td>
								<td class="col-3"><div>23</div></td>
								<td class="col-4"><div>24</div></td>
								<td class="col-5 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>25</div></td>
								<td class="col-6"><div>26</div></td>
								<td class="col-7"><div>27</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>28</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>29</div></td>
								<td class="col-3"><div>30</div></td>
								<td class="col-4 disable"><div>1</div></td>
								<td class="col-5 disable"><div>2</div></td>
								<td class="col-6 disable"><div>3</div></td>
								<td class="col-7 disable"><div>4</div></td>
							</tr>
						</table>
					</div>
					<div class="note">
						<p class="upcoming-note">Upcoming event</p>
						<p class="archival-note">Archival event</p>
					</div>
				</div>
				<div class="widget list">
					<h2>Photo gallery</h2>
					<ul>
						<li><a href="#"><img src="images/4.png" alt=""></a></li>
						<li><a href="#"><img src="images/4_2.png" alt=""></a></li>
						<li><a href="#"><img src="images/4_3.png" alt=""></a></li>
						<li><a href="#"><img src="images/4_4.png" alt=""></a></li>
						<li><a href="#"><img src="images/4_5.png" alt=""></a></li>
						<li><a href="#"><img src="images/4_6.png" alt=""></a></li>
					</ul>
					<div class="btn-holder">
						<a class="btn blue" href="#">Show more photos</a>
					</div>
				</div>
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
	
