@extends('admin.layouts.layout')

@push('css')
<!-- Custom styles for this page -->
<link href="{!! url('public/admin/vendor/datatables/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">
<style type="text/css">
.services {
    background: transparent linear-gradient(
      90deg, #5698EC 0%, #94C3FF 100%) 0% 0% no-repeat padding-box;
}
.ds-icon-worker {
    background: transparent linear-gradient(
      94deg, #E40027 0%, #F2677F 100%) 0% 0% no-repeat padding-box;
}
.ds-icon-business {
    background: transparent linear-gradient(
91deg, #FFAF10 0%, #FEC85F 100%) 0% 0% no-repeat padding-box;
}
.section {
    position: relative;
    z-index: 1;
}
</style>
@endpush

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div> -->
<section class="section">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="ds-icon-block d-flex justify-content-between align-content-center brd-5 p-3 services">
            <div class="text">
                <h4>Active User</h4>
                
                <h2></h2>
            </div>
          <div class="image">
            <a href="javascript:void()">
              <!-- <img alt="image" width="40" height="50" src="https://staging.helajob.com/img/services.svg"> -->
              <!-- <i class="fas fa-user-plus fa-2x"></i> -->
              <i class="fas fa-user-check fa-2x"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="ds-icon-block ds-icon-worker d-flex justify-content-between align-content-center brd-5 p-3 services">
          <div class="text">
            <h4>Inactive User</h4>

            <h2></h2>
          </div>
          <div class="image">
            <a href="javascript:void()">
              <!-- <img alt="image" width="40" height="50" src="https://staging.helajob.com/img/workers.svg"> -->
              <!-- <i class="fas fa-users-slash fa-2x"></i> -->
              <i class="fas fa-user-slash fa-2x"></i>
              
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="ds-icon-block ds-icon-business d-flex justify-content-between align-content-center brd-5 p-3 services">
          <div class="text">
            <h4>Total User</h4>
            <h2></h2>
          </div>
          <div class="image">
            <a href="javascript:void()">
              <!-- <img alt="image" width="40" height="50" src="https://staging.helajob.com/img/business.svg"> -->
                <i class="fas fa-users fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
</div>
<!-- /.container-fluid -->

@endsection

