@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <style>
    .inputfile {
      width: 0.1px;
      height: 0.1px;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      z-index: -1;
    }

    .inputfile + label {
      font-size: 1.25em;
      font-weight: 700;
      color: white;
      background-color: #4e73df;
      border-color: #4e73df;
      display: inline-block;
      padding: 5px 8px;
    }

    #staffPreviewImage {
      border: 1px solid gray;
      box-shadow: 2px 3px 5px;
    }

    .inputfile + label {
      cursor: pointer; /* "hand" cursor */
    }

    .inputfile:focus + label {
      outline: 1px dotted green;
      outline: -webkit-focus-ring-color auto 5px;
    }
   /* .invalid-feedback {
      
      width: 100%;
      margin-top: .25rem;
      font-size: 80%;
      color: #e74a3b;
    }*/
  </style>
@endpush

@section('content')

<div class="container-fluid">



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Contact</h4>
        <a href="{{ route('contact.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Back</a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        

        <div class="col-md-7">
        	<div class="container">
        		<form class="user" method="post" action="{{ route('contact.comment') }}" enctype="multipart/form-data">
        			@csrf
        			<div class="form-group">
                <input type="hidden" name="contact_id" value="{{ $id }}">
        				<label for="comment">Comment:</label>
        				<textarea class="form-control" rows="5" name="comment" id="comment" style="width: 150%;height: 200px;"></textarea>
        			</div>
              @error('comment')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
        			<div>
        				<input type="submit" value="Submit">
        			</div>
        		</form>
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