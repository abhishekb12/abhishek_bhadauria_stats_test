@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ url('public/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">

  <!-- Content Row -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">{{$data['type']}}</h4>
       
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>
      </div>
     
    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form id="createList" method="POST" action="{{url('/admin/createlist')}}">        
           @csrf
          <div class="modal-body">
            <input type="text" class="form-control" id="modal_text" name="modal_text" value="" placeholder="Add here">
            <input type="hidden" name="type" value="{{$data['type']}}">
           
          </div>
        </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="javascript:void(0)" class="btn btn-primary" id="saveBtn" >Save</a>
            <!-- onclick="event.preventDefault();document.getElementById('createList').submit();" -->
          </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
    <div class="card-body" id="addList">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>

           
            @forelse($data['data'] as $key => $staff)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $staff->name }}</td>
              <td>{{  $staff->status }}</td>
              <td>               
               
                  <i class="fas fa-trash"></i>
            
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
 
  <!-- end delete modal -->
</div>
<!-- /.container-fluid -->

@endsection

@push('script')

<!-- Page level plugins -->
<script src="{{ url('public/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('public/admin/js/demo/datatables-demo.js') }}"></script>

<script>
  $(document).ready(function() {
    $('#staffList').on('click', '.openDeleteModal', function() {
      var deleteModalText = $(this).attr('data-deleteMOdalText');
      var deleteUrl = $(this).attr('data-deleteUrl');
      $('#deleteWarningText').text(deleteModalText);
      $('#delete-form').attr('action', deleteUrl);
      // $('#deleteModal').modal('show');
    });

  });

  $('#saveBtn').click(function(){
     if($('#modal_text').val() != ''){      
        document.getElementById('createList').submit();
     }else{
        $('#modal_text').next().html('<p>Field can not be empty</p>');
     }
  })
</script>

@endpush