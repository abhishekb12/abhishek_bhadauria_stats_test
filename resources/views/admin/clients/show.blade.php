@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">client Detail</h4>
        <a href="{{ route('client.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Back</a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-5">
          <div class="card" style="width: 18rem;">
            @if($staff->userImg)
              <img class="card-img-top" src="{{ url('public/'.$staff->userImg) }}" alt="Staff Image">
            @else
              <img class="card-img-top" src="{{ url('public/dummyImage.png') }}" alt="Card image cap">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $staff->name }}</h5>
              <p class="card-text">{{ $staff->email }}</p>
              <p class="card-text">{{ $staff->contact }}</p>
              
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="row">
            <div class="col-md-4">
              <strong>Name : </strong>
            </div>
            <div class="col-md-8">
              {{  $staff->name }}
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <strong>Company : </strong>
            </div>
            <div class="col-md-8">
              {{  ucfirst(@$staff->userDetail->company) }}
            </div>
          </div>
          

          <div class="row">
            <div class="col-md-4">
              <strong>Address : </strong>
            </div>
            <div class="col-md-8">
              {{ @$staff->userDetail->address }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Phone Number : </strong>
            </div>
            <div class="col-md-8">
              {{ @$staff->userDetail->phone }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Status : </strong>
            </div>
            <div class="col-md-8">
              {{ ucfirst(@$staff->status) }}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection

@push('script')

<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

@endpush