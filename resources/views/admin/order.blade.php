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
        <h4 class="m-0 font-weight-bold text-primary">Add Order</h4>
        
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <form class="user" method="post" action="" enctype="multipart/form-data">
              @csrf
              @method('post')


              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="channel" class="form-control @error('name') is-invalid @enderror" id="channel" placeholder="Channel" value="" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" name="coupon" class="form-control @error('name') is-invalid @enderror" id="coupon" placeholder="Coupon" value="" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-sm-6">
                  <input type="number" placeholder="Phone Number" name="phone_number" id="phone_number" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="number" placeholder="Quantity" name="quantity" id="quantity" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>


              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="text" placeholder="Ship To Name" max="31" name="ship_to_name" id="ship_to_name" class="form-control @error('name') is-invalid @enderror" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="Ship To Company" name="ship_to_company" id="ship_to_company" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" placeholder="Ship To Contact" name="ship_to_contact" id="ship_to_contact" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="Ship To Address" name="ship_to_address" id="ship_to_address" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="text" placeholder="Ship To Address1" name="ship_to_address1" id="ship_to_address1" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="Ship To City" name="ship_to_city" id="ship_to_city" class="form-control white-shadow-input" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="text" placeholder="Ship To State" name="ship_to_state" id="ship_to_state" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="Ship To Postal Code" name="ship_to_postal_code" id="ship_to_postal_code" class="form-control white-shadow-input" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>

               <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="text" placeholder="Ship To Country" name="ship_to_country" id="ship_to_country" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="profile" name="ship_to_postal_code" id="ship_to_postal_code" class="form-control white-shadow-input" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>

                                     

              <button type="submit" class="btn btn-primary btn-block">
                Submit
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