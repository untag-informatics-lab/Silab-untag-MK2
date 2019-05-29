
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
							<span class="breadcrumb-item active">Laboratory</span>
						</div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>


					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-add text-primary"></i><span>Create Laboratory</span></a>							
						</div>
					</div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">            
                {{-- Write Your Content Here --}}
                Hello World ;))
            </div>
            <!-- /content area -->
            
            @include('administrator._core.footer')

        </div>
        <!-- /main content -->

@endsection