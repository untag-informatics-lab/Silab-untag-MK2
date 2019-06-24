
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
                            <a href="#" class="breadcrumb-item">Course</a>
                            <span class="breadcrumb-item active">Create Course</span>
                            
						</div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>List Laboratory</span></a>
						</div>
					</div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">            
                                
				<!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Create New Course</h5>						
					</div>

					<div class="card-body">
						<p class="mb-4">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, exercitationem atque cupiditate tempora reiciendis molestias reprehenderit velit porro quia molestiae. Placeat beatae animi fugit repellat aspernatur quas provident excepturi reiciendis?
                        </p>

						<form action="#" method="POST" enctype="multipart/form-data">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">make sure you're fill in all required fields</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Course Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="course-name" placeholder="ex: Desain Komputer" required>
									</div>
								</div>
                                <button type="submit" class="btn btn-success"><i class="icon-floppy-disk mr-2"></i>Save</button>
                                <button type="reset" class="btn btn-default"><i class="icon-trash mr-2"></i>Discard</button>
							</fieldset>
                        </form>
                    </div>
                </div>
                
            </div>
            <!-- /content area -->
            
            @include('administrator._core.footer')

        </div>
        <!-- /main content -->

@endsection