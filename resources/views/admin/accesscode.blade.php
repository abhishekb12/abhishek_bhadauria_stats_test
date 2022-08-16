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
        <h4 class="m-0 font-weight-bold text-primary">Access Codes</h4>
       
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
              <th>Access Code</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Access Code</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse($users as $key => $staff)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $staff->name }}</td>
              <td>{{ $staff->email }}</td>
              <td>{{  $staff->accessCode }}</td>
              <td> 
               {{-- route('admin.sendcode',$staff->id) --}}
                <a href="Javascript:void(0)" class="btn btn-primary faIconsInList sendCode" title="Send Code" id="{{ $staff->id }}" >
                  <i class="fas fa-envelope"></i>
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
    $('#staffList').on('click', '.sendCode', function() {
      var id = $(this).attr('id');
      $.ajax({
        url: '{{ url('admin/send-code') }}',
        type: 'POST',
        data: {
          id: id,
          _token: "{{ csrf_token() }}"
        },
        success: function(resp) {
          console.log(resp);
          if (resp=="success") {
            toastr.success('Access code send successfully');
          }else{
            toastr.error('Access code not send');
          }
          //console.log(resp);
        }
      });
    });
  });
  $(document).on('click', '.applicants li', function() {
    var id = $(this).attr('rel');
    $.ajax({
      url: '{{ url('applicant') }}' + '/' + id,
      success: function(resp) {
        $('#currentChatId').val(id);
        //$('#project_name').text(resp.project);
        $('.single-user-chat').html(resp.html);
        scroll();
        clearInterval(interval);
        interval = setInterval(function(){
          FetchMessages() 
        }, 3000);
      }
    });
  });
</script>

@endpush