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
  </style>
@endpush

@section('content')

<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Edit Client</h4>
        <a href="{{ route('client.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Clients List</a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <form class="user" method="post" action="{{ route('client.update', $client->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="exampleName" placeholder="First Name" value="{{  isset($client['userDetail']['firstName'])?$client['userDetail']['firstName']:'' }}" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="exampleName" placeholder="Last Name" value="{{   isset($client['userDetail']['lastName'])?$client['userDetail']['lastName']:'' }}" >

                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
               <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="examplePhone" placeholder="Phone Number" value="{{ isset($client['userDetail']['phone'])?$client['userDetail']['phone']:'' }}" >

                </div>
                <div class="col-sm-6">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address" value="{{ $client->email }}" >

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="exampleCompany" placeholder="Company" value="{{ isset($client['userDetail']['company'])?$client['userDetail']['company']:'' }}" >
                </div>
                <div class="col-sm-6">
                  <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleAddress" placeholder="Address" value="{{ isset($client['userDetail']['address'])?$client['userDetail']['address']:'' }}" >
                </div>
              </div>
             
                
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="file" name="image" class="form-control inputfile @error('image') is-invalid @enderror" id="image" placeholder="Upload Image">
                  <label for="image">Upload Profile Image</label>

                  @error('occupation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6 text-center">
                  @if($client->userImg)
                    <img src="{{ url('public/'.$client->userImg) }}" id="staffPreviewImage" height="100px" width="100px">
                  @else
                    <img src="{{ url('public/uploads/profile/dummyimage.png')}}" id="staffPreviewImage" height="100px" width="100px">                  
                  @endif
                </div>
              </div>
              {{-- <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary btn-block">
                Update
              </button>
            </form>
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

<script>
  $(document).ready(function() {
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#staffPreviewImage').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#image").change(function() {
      readURL(this);
    });

    
  });
</script>

@endpush