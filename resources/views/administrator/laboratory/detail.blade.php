
@extends('administrator._core.base')

@section('title')
  Dashboard
@endsection

@section('corejs')
    <script src="{{ url('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
@endsection


@section('content')

    @include('administrator._core.navbar')

    <!-- Main Content-->
    <div class="page-content">

        @include('administrator._core.sidebar')   

        <!-- Content area-->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">          

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
							<a href="{{ url('') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> {{ config('app.name') }}</a>
                            <a href="#" class="breadcrumb-item">Laboratory</a>
                            <span class="breadcrumb-item active">Desain Komputer</span>
                            
						</div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float text-default"><i class="icon-book text-primary"></i><span>Create Course</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bowtie text-primary"></i><span>Add Assistant</span></a>
						</div>
					</div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">            
                                
				<!-- Inner container -->
				<div class="d-md-flex align-items-md-start">

					<!-- Left sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Navigation -->
							<div class="card">
								<div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="../../../../global_assets/images/demo/users/face11.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay rounded-circle">
											<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
												<i class="icon-plus3"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
												<i class="icon-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="font-weight-semibold mb-0">Victoria Davidson</h6>
						    		<span class="d-block opacity-75">Head of UX</span>

					    			<div class="list-icons list-icons-extended mt-3">
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Github"><i class="icon-github"></i></a>
			                    	</div>
						    	</div>

								<div class="card-body p-0">
									<ul class="nav nav-sidebar mb-2">
										<li class="nav-item-header">Navigation</li>
										<li class="nav-item">
											<a href="#notebook" class="nav-link active" data-toggle="tab">
												<i class="icon-bookmark"></i>
												 Notebook
											</a>
										</li>
										<li class="nav-item">
											<a href="#review" class="nav-link" data-toggle="tab">
												<i class="icon-reading"></i>
												Student Review												
											</a>
										</li>										
										<li class="nav-item">
											<a href="#class" class="nav-link" data-toggle="tab">
												<i class="icon-spinner4"></i>
												Active Class
												<span class="badge bg-success badge-pill ml-auto">16</span>
											</a>
										</li>										
									</ul>
								</div>
							</div>
							<!-- /navigation -->


							<!-- Active Assistant -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Active Assistant</span>
									<div class="header-elements">
										<span class="badge bg-success badge-pill">4</span>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Aldion Amirrul E.</a>
												<div class="font-size-sm text-muted">Sukodono, Sidoarjo.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Aditiya Nanda U.</a>
												<div class="font-size-sm text-muted">Tulangan, Sidoarjo.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Ade Prasetyo</a>
												<div class="font-size-sm text-muted">Gubeng, Surabaya.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">M. Arif</a>
												<div class="font-size-sm text-muted">Buduran, Sidoarjo.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>										
									</ul>
								</div>								
							</div>
							<!-- /Active Assistant -->							


							<!-- Inactive Assistant -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Inactive Assistant</span>
									<div class="header-elements">
										<span class="badge bg-danger badge-pill">3</span>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">									
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Yuan Eko</a>
												<div class="font-size-sm text-muted">Gubeng, Surabaya.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Ikko P.</a>
												<div class="font-size-sm text-muted">Keputih, Surabaya.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/demo/users/face1.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Ericko Lim</a>
												<div class="font-size-sm text-muted">Dukuh Kupang, Surabaya.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Inactive Assistant -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /left sidebar component -->


					<!-- Right content -->
					<div class="tab-content w-100 overflow-auto">
						<div class="tab-pane fade active show" id="notebook">

							<!-- Sales stats -->
							<div class="card">
								<div class="card-header header-elements-sm-inline">
									<h6 class="card-title">Laboratory's Notebook</h6>
									<div class="header-elements">
										<span><i class="icon-history mr-2 text-success"></i> Updated 3 hours ago</span>

										<div class="list-icons ml-3">
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="chart-container">
										{{-- Do Foreach Here --}}
										<div class="card mb-2">
											<div class="card-header">
												<h6 class="card-title">
													<a class="text-default collapsed" data-toggle="collapse" href="#question1">
														<i class="icon-plus-circle2 mr-2 text-slate"></i> Surat pindah kelas Atas Nama Aditiya Tri Ardiansyah, tolong di FollUp ke Kalab.
													</a>
												</h6>
											</div>
			
											<div id="question1" class="collapse">
												<div class="card-body">
													Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi tempora temporibus sunt animi, doloribus itaque quia blanditiis debitis! Obcaecati dolorum corrupti asperiores ipsum repudiandae ad laboriosam ab error officiis consequatur.
												</div>
			
												<div class="card-footer bg-transparent d-sm-flex align-items-sm-center border-top-0 pt-0">
													<span class="text-muted">Latest update: May 25, 2015</span>																
												</div>
											</div>
										</div>
										{{-- End Foreach Here --}}
									</div>
								</div>
							</div>
							<!-- /sales stats -->																					

					    </div>

					    <div class="tab-pane fade" id="review">

				    		<!-- Available hours -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Students Review</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="chart-container">
										{{-- Do Foreach Here, Max 10 Loop --}}
										<div class="card card-body">
											<div class="media align-items-center align-items-md-start flex-column flex-md-row">
												<a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
													<i class="icon-envelop3 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
												</a>
						
												<div class="media-body text-center text-md-left">
													<h6 class="media-title font-weight-bold">Muhammad Syahrul Rohmadoni - 1461600155</h6>
													Laboratorium nya kotor, seperti kandang sapi.
												</div>
											</div>
										</div>
										{{-- End Foreach Here --}}
									</div>
								</div>
							</div>
							<!-- /available hours -->						
				    	</div>

				    	<div class="tab-pane fade" id="class">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">OnGoing Class</h6>
									<div class="header-elements">
										<div class="list-icons">
											<a class="list-icons-item" data-action="collapse"></a>
											<a class="list-icons-item" data-action="reload"></a>
											<a class="list-icons-item" data-action="remove"></a>
										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="chart-container">
										<div class="row">
											{{-- Do Foreach Here --}}
											<div class="col-lg-4">
												<div class="card">
													<div class="card-body text-center">
													<i class="icon-book icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
														<h5 class="card-title">A1</h5>
														<a href="#" class="btn bg-success-400">Class Detail</a>
													</div>
												</div>
											</div>
											{{-- End Foreach Here --}}
										</div>
									</div>
								</div>
							</div>
						</div>
                        
					</div>
                    <!-- /right content -->

				</div>
                <!-- /inner countainer -->

            </div>
            <!-- /content area -->
            
            @include('administrator._core.footer')

        </div>
        <!-- /main content -->

@endsection