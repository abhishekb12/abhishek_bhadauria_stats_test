@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
 

  <!-- Content Row -->

  <!-- DataTales Example -->
  
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
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Admins List</h4>
        <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Add Admin</a>
         
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
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse($staffList as $key => $staff)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $staff->name }}</td>
              <td>{{ $staff->email }}</td>
              <td>{{  ucfirst($staff->status) }}</td>
              <td> 
               
                 <a href="{{ route('users.show', $staff->id) }}" class="btn btn-primary faIconsInList" title="View">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('users.edit', $staff->id) }}" class="btn btn-warning faIconsInList" title="Edit">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="Javascript:void(0)" class="btn btn-danger faIconsInList openDeleteModal" title="Delete" data-deleteMOdalText="Are you sure you want to delete this admin?" data-deleteUrl="{{ route('users.destroy', $staff->id) }}">
                  <i class="fas fa-trash"></i>
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

<script>
  $(document).ready(function() {
    $('#staffList').on('click', '.openDeleteModal', function() {
      var deleteModalText = $(this).attr('data-deleteMOdalText');
      var deleteUrl = $(this).attr('data-deleteUrl');
      $('#deleteWarningText').text(deleteModalText);
      $('#delete-form').attr('action', deleteUrl);
      $('#deleteModal').modal('show');
    });
  });
</script>

@endpush