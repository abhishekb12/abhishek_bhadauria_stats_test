@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
  @endif
  @if(Session::has('error'))
  <div class="alert alert-danger" role="alert">
    {{ Session::get('error') }}
  </div>
  @endif
  <!-- Page Heading -->
 

  <!-- Content Row -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Contacts</h4>
      </div>
     
    </div>
    <div class="card-body" id="staffList">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse($contacts as $key => $contacts)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $contacts->name }}</td>
              <td>{{ $contacts->email }}</td>
              <td>{{ $contacts->phone }}</td>
              <td>{{  ucfirst($contacts->status) }}</td>
              <td> 
               
                 <a href="{{ route('contact.show', $contacts->id) }}" class="btn btn-primary faIconsInList" title="View">
                  <i class="fas fa-eye"></i>
                </a>
               
              </td>
            </tr>
            @empty
              <p>No Record Found</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- delete modal -->
  @include('admin.components.delete-modal')
  <!-- end delete modal -->
  <!-- end delete modal -->
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