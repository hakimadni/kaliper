<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Kaliper - @yield('title')</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Kaliper &amp; Portal" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('media/loho.png')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/custom.scss')}}" rel="stylesheet" type="" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-kt-aside-minimize="on" class=" aside-enabled aside-fixed">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid ">
				
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html">
							<img alt="Logo" src="{{asset('media/Kaliper sticker.png')}}" class="h-25px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid z-index-3">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu-item">
								<div class="menu-content pb-2">
									@if (auth()->user() != null)
									<span class="menu-section text-muted text-uppercase fs-8 ls-1"><h2 class="text-light menu-title">Hi, {{ auth()->user()->name }}</h2></span>
									@else
									<span class="menu-section text-muted text-uppercase fs-8 ls-1"><h2 class="text-light menu-title">Login first </h2></span>
									@endif
								</div>
							</div>
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/index.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Default</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/dashboards/no-toolbar.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
													<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
													<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">No Toolbar</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/dashboards/light-aside.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Light Aside</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/dashboards/only-header.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black" />
													<path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Only Header</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/landing.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Landing Page</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<div class="separator mx-1 my-4"></div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../demo1/dist/documentation/getting-started/changelog.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black" />
													<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Changelog v8.0.25</span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
						<a href="../../demo1/dist/documentation/getting-started.html" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
							<span class="btn-label">Docs &amp; Components</span>
							<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
							<span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Col-->
					<div class="position-relative">
						<div class="position-absolute z-index-2 row w-100 ms-sm-1 mt-3">
							<div class="col col-xl-11">
							  <!--begin::Aside mobile toggle-->
								<div class="btn btn-icon w-40px h-40px w-md-50px h-md-50px ms-3 w-xl-75px h-xl-75px start-0 top-0 d-lg-none" id="kt_aside_mobile_toggle">
								  <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
									<!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
									<path d="M61.1 224C45 224 32 211 32 194.9c0-1.9 .2-3.7 .6-5.6C37.9 168.3 78.8 32 256 32s218.1 136.3 223.4 157.3c.5 1.9 .6 3.7 .6 5.6c0 16.1-13 29.1-29.1 29.1H61.1zM144 128c0-8.8-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16s16-7.2 16-16zm240 16c8.8 0 16-7.2 16-16s-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16zM272 96c0-8.8-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16s16-7.2 16-16zM16 304c0-26.5 21.5-48 48-48H448c26.5 0 48 21.5 48 48s-21.5 48-48 48H64c-26.5 0-48-21.5-48-48zm16 96c0-8.8 7.2-16 16-16H464c8.8 0 16 7.2 16 16v16c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V400z"/>
								  </svg>
								  <!--end::Svg Icon-->
								</div>
							  <!--end::Aside mobile toggle-->
							</div>
							<div class="col-auto">
							  <!--begin::User-->

							@if (auth()->user() == null)
							<div class="w-40px h-40px w-md-50px h-md-50px end-0 top-0" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-40px symbol-md-50px symbol-xl-75px ms-3 me-xl-10" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								  <img src="{{asset('media/avatars/blank.png')}}" alt="user" />
								</div>
  
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
								  <!--begin::Menu item-->
								  <div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3  overflow-hidden">
									  <!--begin::Avatar-->
									  <div class="symbol symbol-50px me-5">
										<img alt="Logo" src="{{asset('media/avatars/blank.png')}}" />
									  </div>
									  <!--end::Avatar-->
									  <!--begin::Username-->
									  <div class="d-flex flex-column">
										<div class="fw-bolder d-flex align-items-center fs-5">
											Login?
										</div>
									  </div>
									  <!--end::Username-->
									</div>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu separator-->
								  <div class="separator my-2"></div>
								  <!--end::Menu separator-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<a href="/login" class="menu-link px-5">Login</a>
								  </div>
								  <!--end::Menu item-->
								</div>
								<!--end::Menu-->
  
								<!--end::Menu wrapper-->
							  </div>
							@else
							<div class="w-40px h-40px w-md-50px h-md-50px end-0 top-0" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-40px symbol-md-50px symbol-xl-75px ms-3 me-xl-10" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								  <img src="{{asset('media/avatars/blank.png')}}" alt="user" />
								</div>
  
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
								  <!--begin::Menu item-->
								  <div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3  overflow-hidden">
									  <!--begin::Avatar-->
									  <div class="symbol symbol-50px me-5">
										<img alt="Logo" src="{{asset('media/avatars/blank.png')}}" />
									  </div>
									  <!--end::Avatar-->
									  <!--begin::Username-->
									  <div class="d-flex flex-column">
										<div class="fw-bolder d-flex align-items-center fs-5">
										  {{ auth()->user()->name }}
										</div>
											<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()?->email }}</a>
										</div>
									  <!--end::Username-->
									</div>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu separator-->
								  <div class="separator my-2"></div>
								  <!--end::Menu separator-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<a href="/profile" class="menu-link px-5">My Profile</a>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<a href="../../demo1/dist/pages/projects/list.html" class="menu-link px-5">
									  <span class="menu-text">My Order</span>
									  <span class="menu-badge">
										<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
									  </span>
									</a>
								  </div>
								  <!--end::Menu item-->
								  
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									  <a href="../../demo1/dist/pages/projects/list.html" class="menu-link px-5">
										<span class="menu-text">My Transaction</span>
										<span class="menu-badge">
										  <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
										</span>
									  </a>
									</div>
									<!--end::Menu item-->
  
								  <!--begin::Menu item-->
								  <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
									<a href="#" class="menu-link px-5">
									  <span class="menu-title">My Subscription</span>
									  <span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu separator-->
									  <div class="separator my-2"></div>
									  <!--end::Menu separator-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<div class="menu-content px-3">
										  <label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
											<span class="form-check-label text-muted fs-7">Notifications</span>
										  </label>
										</div>
									  </div>
									  <!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My Statements</a>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu separator-->
								  <div class="separator my-2"></div>
								  <!--end::Menu separator-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
									<a href="#" class="menu-link px-5">
									  <span class="menu-title position-relative">Language
									  <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
									  <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
										<span class="symbol symbol-20px me-4">
										  <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
										</span>English</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
										  <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
										</span>Spanish</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
										  <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
										</span>German</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
										  <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
										</span>Japanese</a>
									  </div>
									  <!--end::Menu item-->
									  <!--begin::Menu item-->
									  <div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
										  <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
										</span>French</a>
									  </div>
									  <!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5 my-1">
									<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
								  </div>
								  <!--end::Menu item-->
								  <!--begin::Menu separator-->
								  <div class="separator my-2"></div>
								  <!--end::Menu separator-->
								  <!--begin::Menu item-->
								  <div class="menu-item px-5">
									<div class="menu-content px-5">
									  <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
										<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo1/dist/index.html" />
										<span class="pulse-ring ms-n1"></span>
										<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
									  </label>
									</div>
								  </div>
								  <!--end::Menu item-->
								</div>
								<!--end::Menu-->
  
								<!--end::Menu wrapper-->
							  </div>
							@endif
							
							
							<!--end::User -->
							</div>
						</div>
						    <!--begin::Container-->
    						
					
					
