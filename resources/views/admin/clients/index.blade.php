@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">



  <!-- Content Row -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Client List</h4>
        <a href="{{ route('client.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Add Client</a>
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
            @forelse($clientList as $key => $client)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $client->name }}</td>
              <td>{{ $client->email }}</td>
              <td>{{  $client->status }}</td>
              <td> 
               
              <a href="{{ route('client.show', $client->id) }}" class="btn btn-primary faIconsInList" title="View">
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ route('client.edit', $client->id) }}" class="btn btn-warning faIconsInList" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
              <a href="Javascript:void(0)" class="btn btn-danger faIconsInList openDeleteModal" title="Delete" data-deleteMOdalText="Are you sure you want to delete this client?" data-deleteUrl="{{ route('client.destroy', $client->id) }}">
                <i class="fas fa-trash"></i>
              </a> 
              @php
              $message='';
              if(isset($client->verify_at)){
                $message= "Are you sure you want to unverify this client?";
                $class="btn btn-success faIconsInList openVerifiedModal";
              }else{
                $message= "Are you sure you want to verify this client?";
                $class= "btn btn-danger faIconsInList openVerifiedModal";
              }
              @endphp

              <a href="Javascript:void(0)" class="{{ $class }}" title="Verified" data-type= "{{ isset($client->verify_at)?'Verified':'Not verified' }}" data-id="{{ $client->id }}" data-verifiedMOdalText="{{ $message }}" data-verifiedUrl="{{ route('client.verified') }}">{{ isset($client->verify_at)?"Verified":"Not verified" }}
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
   @include('admin.components.verify-modal')
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
      // alert(deleteUrl);
      $('#deleteWarningText').text(deleteModalText);
      $('#delete-form').attr('action', deleteUrl);
      $('#deleteModal').modal('show');
    });
  });

  $(document).ready(function() {
    $('#staffList').on('click', '.openVerifiedModal', function() {
      var verifyModalText = $(this).attr('data-verifiedMOdalText');
      var verifyUrl = $(this).attr('data-verifiedUrl');
      var id= $(this).attr('data-id');
      var type= $(this).attr('data-type');

      // alert(verifyUrl);
      $('#verifyWarningText').text(verifyModalText);
      $('#verify-form').attr('action', verifyUrl);
      //$('#verify-form').attr('verified_id', '13');
      $("#type").val(type);
      $("#verified_id").val(id);
      $('#verifyModal').modal('show');
    });
  });
</script>

@endpush