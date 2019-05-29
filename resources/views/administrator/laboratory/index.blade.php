
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
							<span class="breadcrumb-item active">Laboratories</span>
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
                
                <!-- Inner container -->
                <div class="d-flex align-items-start flex-column flex-md-row">

                    {{-- Do Foreach Here --}}
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <h6 class="card-title">Desain Komputer</h6>                           
                            </div>
        
                            <div class="card-img-actions">
                                <img class="img-fluid" src="{{ url('pictures/laboratory_logo/Daskom.jpg') }}" alt="">
                                <div class="card-img-actions-overlay">                                    
                                    <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
                                        Change
                                    </a>
                                    <a href="#"  class="btn btn-outline bg-white text-white border-white border-2 ml-2">
                                        Delete
                                    </a>
                                    <a href="#"  class="btn btn-outline bg-white text-white border-white border-2 ml-2">
                                        Lab Detail
                                    </a>
                                </div>
                            </div>                                    
        
                            <div class="card-footer">
                                <p align="center">Graha Wiyata lt.2 </p>
                            </div>
                        </div>                        
                    </div>
                    {{-- End Foreach Here --}}

                </div>
                <!-- /inner container -->
                
            </div>
            <!-- /content area -->
            
            @include('administrator._core.footer')

        </div>
        <!-- /main content -->

@endsection