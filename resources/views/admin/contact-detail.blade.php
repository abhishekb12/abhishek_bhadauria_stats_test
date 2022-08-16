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
        <h4 class="m-0 font-weight-bold text-primary">Contact Detail</h4>
        <div class="row">
          <a href="{{ route('contact.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-right: 10px;"><i class="fas fa-create fa-sm text-white-50"></i>Back</a>
          <a href="{{ route('contact.reply',$contact->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Reply</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        

        <div class="col-md-7">
          
          <div class="row">
            <div class="col-md-4">
              <strong>Name : </strong>
            </div>
            <div class="col-md-8">
              {{ ucfirst(@$contact->name) }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Email : </strong>
            </div>
            <div class="col-md-8">
              {{ @$contact->email }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Phone : </strong>
            </div>
            <div class="col-md-8">
              {{ @$contact->phone }}
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <strong>Company : </strong>
            </div>
            <div class="col-md-8">
              {{ @$contact->company }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Question : </strong>
            </div>
            <div class="col-md-8">
              {{ @$contact->question }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Status : </strong>
            </div>
            <div class="col-md-8">
              {{ ucfirst(@$contact->status) }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>Contacted On : </strong>
            </div>
            <div class="col-md-8">
              {{ @$contact->created_at }}
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