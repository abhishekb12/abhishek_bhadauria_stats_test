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
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Settings</h4>
        
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <form class="user" method="post" action="{{ route('admin.addSettings') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="exampleFacebook" placeholder="Facebook" value="{{ isset($getData->facebook)?$getData->facebook:'' }}" >

                  @error('facebook')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <input type="hidden" name="setting_id" value="{{isset($getData->id)?$getData->id:'' }}">
                <div class="col-sm-6">
                  <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" id="exampleLinkedin" placeholder="Linkedin" value="{{ isset($getData->linkedin)?$getData->linkedin:'' }}" >

                  @error('linkedin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="exampleTwitter" placeholder="Twitter" value="{{ isset($getData->twitter)?$getData->twitter:'' }}" >

                  @error('twitter')
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