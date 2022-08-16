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
        <h4 class="m-0 font-weight-bold text-primary">Edit Profile</h4>
        
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <form class="user" method="post" action="" enctype="multipart/form-data">
              @csrf
              @method('PUT')


              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <select class="form-control" name="ethnicity" id="ethnicity">
                        <option value="">- Select Ethnicity -</option>
                        <option value="East Asian">East Asian</option>
                        <option value="African American">African American</option>
                        <option value="Latino (e.g. Mexican, Peruvian, Colombian)">Latino (e.g. Mexican, Peruvian, Colombian)</option>
                        <option value="White or European">White or European</option>
                        <option value="Native American">Native American</option>
                        <option value="Other">Other</option>
                        <option value="Sub-Saharan African">Sub-Saharan African</option>
                        <option value="Ashkenazi Jewish">Ashkenazi Jewish</option>
                        <option value="Middle Eastern (eg. Arab, Turkish, Persian, or Non-Ashkenazi Jewish)">Middle Eastern (eg. Arab, Turkish, Persian, or Non-Ashkenazi Jewish)</option>
                        <option value="Central Asian (e.g. Kazakh, Kyrgyz, Afghan)">Central Asian (e.g. Kazakh, Kyrgyz, Afghan)</option>
                        <option value="South Asian (e.g. Indian, Pakistani, Bangladeshi, Nepali)">South Asian (e.g. Indian, Pakistani, Bangladeshi, Nepali)</option>
                        <option value="Southeast Asian (e.g. Indonesian, Thai, Khmer)">Southeast Asian (e.g. Indonesian, Thai, Khmer)</option>
                        <option value="Filipino, Polynesian (including Hawaiian), or Malagasy">Filipino, Polynesian (including Hawaiian), or Malagasy</option>
                        <option value="Melanesian (e.g. Indigenous Australian, Papuan, Fijian)">Melanesian (e.g. Indigenous Australian, Papuan, Fijian)</option>
                  </select>

                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <select class="form-control" name="sex" id="sex">
                          <option value="">- Sex -</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>  
                  </select>

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="number" placeholder="Birth Day" max="31" name="birth_day" id="birth_day" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>


              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="number" placeholder="Birth Month" max="31" name="birth_month" id="birth_month" class="form-control @error('name') is-invalid @enderror" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="number" placeholder="Birth Year" name="birth_year" id="birth_year" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <select class="form-control" name="is_v2" id="is_v2">
                                        <option value="false">False</option>
                                        <option value="true">True</option>  
                                </select>

                  @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="email" placeholder="Email" name="email" id="email" class="form-control @error('name') is-invalid @enderror" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="number" placeholder="height" name="height" id="height" class="form-control" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="number" placeholder="Weight" name="weight" id="weight" class="form-control white-shadow-input" >
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </div>
                       

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