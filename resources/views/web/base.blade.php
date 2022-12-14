<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Suchitwa Mission</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Suchitwa Mission">
		<meta name="author" content="cybernetics.me">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ public_path().'/web/img/sm/favicon.png' }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/bootstrap/css/bootstrap.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/fontawesome-free/css/all.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/animate/animate.compat.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/simple-line-icons/css/simple-line-icons.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/owl.carousel/assets/owl.carousel.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/owl.carousel/assets/owl.theme.default.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/vendor/magnific-popup/magnific-popup.min.css' }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ public_path().'/web/css/theme.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/css/theme-elements.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/css/theme-blog.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/web/css/theme-shop.css' }}">

		<link rel="stylesheet" href="{{ public_path().'/admin/css/dataTables.min.css' }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ public_path().'/web/css/skins/default.css' }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ public_path().'/web/css/custom.css' }}">

		<!-- Head Libs -->
		<script src="{{ public_path().'/web/vendor/modernizr/modernizr.min.js' }}"></script>

	</head>
	<body data-plugin-page-transition onload="Resize()">
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-default border-bottom-0 bg-color-primary">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">													
												<li class="nav-item av-item-anim-icon">														
													<a class="nav-link ps-0 text-light opacity-7" href="about-us.html"><i class="fas fa-phone"></i> 0471 2319831</a>
												</li>												
												<li class="nav-item av-item-anim-icon">														
													<a class="nav-link text-light opacity-7 pe-0" href="contact-us.html"><i class="fas fa-envelope"></i> sanitation.sm@kerala.gov.in</a>
												</li>											
											</ul>										
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
											<li class="social-icons-facebook"><a href="https://www.facebook.com/SuchitwaMissionKerala" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="https://twitter.com/MissionSuchitwa" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCnMXjCBTfTsg8achlj_7dng" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row custom">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Suchitwa Mission" src="{{ public_path().'/web/img/sm/sm_logo.png' }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-square header-nav-main-font-alternative header-nav-main-effect-2 header-nav-main-sub-effect-1 text-primary">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/">
															HOME
														</a>														
													</li>													
													@foreach($main_menu as $key => $value)
														@php $submenu = DB::table('menus')->where('parent', $value->id)->get(); @endphp
														<li class="{{ (count($submenu)>0 && $value->menu_category == 'mega') ? 'dropdown dropdown-mega' : 'dropdown' }}">
															<a class="dropdown-item dropdown-toggle" href="{{ (count($submenu)>0) ? '#' : $value->page_url }}">
															{{ $value->menu_item_name }}
															</a>
															@if($submenu && $value->menu_category == 'mega')
																<ul class="dropdown-menu">
																	<li>
																		<div class="dropdown-mega-content">
																			<div class="row">
																				@foreach($submenu as $skey => $sval)
																					@php 
																					$nextmenu = DB::table('menus')->where('parent', $sval->id)->get();
																					$slug = DB::table('pages')->where('id', $sval->page_id)->value('slug'); @endphp
																					<div class="col-lg-3">
																						<span class="dropdown-mega-sub-title"><a href="{{ ($sval->page_id == 0) ? '/'.$sval->page_url : '/web/'.$slug.'/' }}">{{ $sval->menu_item_name }}</a></span>
																						@if(!empty($nextmenu))
																							<ul class="dropdown-mega-sub-nav">
																							@forelse($nextmenu as $key => $next)
																								@php $nextslug = DB::table('pages')->where('id', $next->page_id)->value('slug'); @endphp
																									<li><a class="dropdown-item smenuitem" href="{{ ($next->page_id == 0) ? '/'.$next->page_url : '/web/'.$nextslug.'/' }}">{{ $next->menu_item_name }}</a></li>
																								@empty
																							@endforelse
																							</ul>
																						@endif
																					</div>
																				@endforeach
																			</div>
																		</div>
																	</li>
																</ul>
															@elseif($submenu && $value->menu_category == 'single')
																<ul class="dropdown-menu">
																	@foreach($submenu as $skey => $sval)
																		@php 															
																		$slug = DB::table('pages')->where('id', $sval->page_id)->value('slug');
																		 @endphp
																		<li><a class="dropdown-item" href="{{ ($sval->page_id == 0) ? $sval->page_url : '/web/'.$slug.'/' }}">{{ $sval->menu_item_name }}</a></li>
																	@endforeach
																</ul>
															@endif
														</li>
													@endforeach
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit">
															<i class="fas fa-search header-nav-top-icon"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@yield("content")

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 pb-1">ABOUT US</h5>
							<p class="text-justify">Suchitwa Mission is the Technical Support Group (TSG) in Waste Management sector under the Local Self Government Department, Government of Kerala. The Mission is also the Nodal agency for implementing Swachh Bharat Mission (Urban), Swachh Bharat Mission (Rural) and Communication and Capacity Development Unit (CCDU) in the State</p>
						</div>
						<div class="col-md-6 mb-4 mb-lg-0">
							<div class="row pt-3">
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">Quick Links</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/frequently-asked-questions">FAQs</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/state-rules">Acts & Rules</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/government-orders">Court Orders</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/right-to-information">RTI</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/contact-us">Feedback</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">Useful Links</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="/">Home</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/profile">About Us</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://empanel.suchitwamission.com" target="_blank">Empanel</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://dashboard.suchitwamission.com" target="_blank">Schemes</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" target="_blank" href="/sitemap/">Sitemap</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/contact-us">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">IEC</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/downloads/1" target="_blank">Publications</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/web/power-point-presentations" target="_blank">Presentations</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/downloads/4" target="_blank">Press Release</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/web/documents" target="_blank">Documents</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/photo-gallery" target="_blank">Photo Gallery</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/web/videos" target="_blank">Video Gallery</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a href="https://sweb.suchitwamission.com/downloads/5" target="_blank">News In Media</a></li>
									</ul>
								</div>
								<div class="col-6 col-lg-3 mb-4 mb-lg-0">
									<h5 class="text-3 mb-3">Downloads</h5>
									<ul class="list list-icons list-icons-sm mb-0">
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/downloads/1">Publications</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/power-point-presentations">Presentations</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/activity-reports">Activity Reports</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/annual-reports">Annual Reports</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/documents">Documents</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/policies-and-guidelines">Policies & Guidelines</a></li>
										<li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="https://sweb.suchitwamission.com/web/minutes">Minutes</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3 pb-1">CONTACT INFO</h5>
							<p class="text-3 text-color-light font-weight-bold">SUCHITWA MISSION</p>							
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="mb-2">4th Floor, Revenue Tower Public Office Compound, Trivandrum, Kerala, India. PIN - 695 033</p>
								<li class="mb-1"><i class="fa fa-phone text-color-primary"></i><p class="m-0">0471-2319831, 0471-2312730</p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:sanitation.sm@kerala.gov.in">sanitation.sm@kerala.gov.in</a></p></li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:iec.sm@kerala.gov.in">iec.sm@kerala.gov.in</a></p></li>
							</ul>
							<ul class="footer-social-icons social-icons mt-4">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/SuchitwaMissionKerala" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
								<li class="social-icons-twitter"><a href="https://twitter.com/MissionSuchitwa" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
								<li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCnMXjCBTfTsg8achlj_7dng" target="_blank" title="Youtube"><i class="fab fa-youtube text-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-1">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<!--<a href="index.html" class="logo pe-0 pe-lg-3">
									<img alt="Porto Website Template" src="{{ public_path().'/web/img/sm/sm_logo.png' }}" class="" height="32">
								</a>-->
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li>?? Copyright {{ date('Y') }}. All Rights Reserved.</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{ public_path().'/web/vendor/plugins/js/plugins.min.js' }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ public_path().'/web/js/theme.js' }}"></script>
		<script src="{{ public_path().'/web/js/examples/examples.lightboxes.js' }}"></script>
		<script src="{{ public_path().'/admin/bundles/dataTables.bundle.js' }}"></script>

		<!-- Theme Custom -->
		<script src="{{ public_path().'/web/js/custom.js' }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ public_path().'/web/js/theme.init.js' }}"></script>

	</body>
</html>