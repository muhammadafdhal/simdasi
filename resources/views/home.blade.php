@extends('layouts.app')

@section('content')

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dashboard </h2>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->
<div class="ecommerce-widget">

    <div class="row">
        <!-- ============================================================== -->
        <!-- four widgets   -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total views   -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Data Kelahiran</h5>
                        <h2 class="mb-0"> {{$total_lahir}}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                        <i class="fa fa-child fa-fw fa-sm text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total views   -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total followers   -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Data Domisili</h5>
                        <h2 class="mb-0"> {{$total_domisili}}</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                        <i class="fa fa-people-carry fa-fw fa-sm text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total followers   -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- partnerships   -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end total earned   -->
        <!-- ============================================================== -->
    </div>

</div>

@endsection
