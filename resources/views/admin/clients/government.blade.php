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
        <h4 class="m-0 font-weight-bold text-primary">Add Government Agency</h4>
        <a href="{{ route('researchlist') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Government agency list</a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <form class="user" method="post" action="{{ route('agencySave') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="exampleName" placeholder="First Name" value="{{ old('firstname') }}" >

                  @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="exampleInputEmail" placeholder="Last Name" value="{{ old('lastname') }}" >

                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                
                  <select class="form-control @error('region') is-invalid @enderror" name="region" id="region">

                    <option value="" >Region</option>
                    @foreach($assistance_region as $region)
                      <option value="{{ $region->id }}">{{ $region->region }}</option>
                    @endforeach
                   
                  </select>

                  @error('region')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" name="comHeading" class="form-control @error('comHeading') is-invalid @enderror" id="exampleInputcomHeading" placeholder="Expertise" value="{{ old('comHeading') }}" >

                  @error('comHeading')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
               {{-- <div class="col-sm-6">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}" >

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>--}}
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="exampleCompany" placeholder="Company Name" value="{{ old('company') }}" >
                  @error('company')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="exampleAddress" placeholder="Address" value="{{ old('address') }}" >
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="affiliate" class="form-control @error('affiliate') is-invalid @enderror" id="exampleAffiliate" placeholder="Affiliate" value="{{ old('affiliate') }}" >
                    @error('affiliate')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              {{-- <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="password" placeholder="Enter Password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password" aria-describedby="confirm_password" placeholder="Confirm Password Here...">

                    @error('confirm_password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>--}}
              <div class="form-group" id="text_editor" >
                  <textarea class="getdata" name="about_company" id="getdata">
                  
                  </textarea>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="file" name="image" class="form-control inputfile @error('image') is-invalid @enderror" id="image" placeholder="Upload Image">
                  <label for="image">Upload Image</label>

                  @error('occupation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6 text-center">
                  <img src="{{ url('public/uploads/profile/dummyimage.png') }}" id="staffPreviewImage" height="100px" width="100px">
                </div>
              </div>
              <div class="alert alert-danger" id="about_chk_vid_ext" style="display: none;">
                  Please Upload Only MP4 Video File !!
              </div>
              <div class="alert alert-danger" id="about_chk_vid_Size" style="display: none;">
                  Video File Size must be less then 2MB!!
              </div>

              <div class="form-group">
                  <span class="video-btn"> 
                    <input type="file" accept="video/mp4" name="txtabout" id="txtabout">
                    <img src="public/images/video-icon.png"  alt="" class="img-fluid " /><br>
                  </span>
                  <br>Max: 3mb 
                  <br>Format : mp4                   
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
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc" type="text/javascript"></script>

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

  try{
            tinymce.init({
                selector: '.getdata',
                height: 300,
                plugins: 'visualblocks',
                branding: false,
                statusbar: false,
                // content_css: [
                //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                //     '//www.tinymce.com/css/codepen.min.css'
                // ],
                style_formats: [{
                        title: 'Headers',
                        items: [{
                                title: 'h1',
                                block: 'h1'
                            },
                            {
                                title: 'h2',
                                block: 'h2'
                            },
                            {
                                title: 'h3',
                                block: 'h3'
                            },
                            {
                                title: 'h4',
                                block: 'h4'
                            },
                            {
                                title: 'h5',
                                block: 'h5'
                            },
                            {
                                title: 'h6',
                                block: 'h6'
                            }
                        ]
                    },
                    {
                        title: 'Blocks',
                        items: [{
                                title: 'p',
                                block: 'p'
                            },
                            {
                                title: 'div',
                                block: 'div'
                            },
                            {
                                title: 'pre',
                                block: 'pre'
                            }
                        ]
                    },
                    {
                        title: 'Containers',
                        items: [{
                                title: 'section',
                                block: 'section',
                                wrapper: true,
                                merge_siblings: false
                            },
                            {
                                title: 'article',
                                block: 'article',
                                wrapper: true,
                                merge_siblings: false
                            },
                            {
                                title: 'blockquote',
                                block: 'blockquote',
                                wrapper: true
                            },
                            {
                                title: 'hgroup',
                                block: 'hgroup',
                                wrapper: true
                            },
                            {
                                title: 'aside',
                                block: 'aside',
                                wrapper: true
                            },
                            {
                                title: 'figure',
                                block: 'figure',
                                wrapper: true
                            }
                        ]
                    }
                ],
                visualblocks_default_state: true,
                end_container_on_empty_block: true,
                forced_root_block: ''
            });
    }catch(err){
        
    }

    $('#txtabout').on('change', function () {
        // alert('jsdghdg');
        setTimeout(function () {
            $("#about_chk_vid_ext").fadeOut('slow');
            $("#about_chk_vid_Size").fadeOut('slow');
        }, 2000);
        var ext = $('#txtabout').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['mp4']) === -1) {
            $('#about_chk_vid_ext').show();
            $('#txtabout').val('');
            return false;
        } else {
            var vid_size = $('#txtabout')[0].files[0].size;
            // alert(vid_size);
            if (vid_size > 10000000 || vid_size < 2000000) {
               $('#about_chk_vid_Size').show().text('Video File Size must be greater then 2MB and less then or equal 10MB!!');
                $('#txtabout').val('');
                return false;
            }
        }

    });
</script>

@endpush