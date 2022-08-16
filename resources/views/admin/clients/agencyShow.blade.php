@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">



  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Client Detail</h4>
        <button onclick="history.back()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-create fa-sm text-white-50"></i>Back</button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-5">
          <div class="card" style="width: 18rem;">
            @if($staff->userImg)
              <img class="card-img-top" src="{{ url('public/'.$staff->userImg) }}" alt="Staff Image">
            @else
              <img class="card-img-top" src="{{ url('public/dummyImage.png') }}" alt="Card image cap">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $staff->firstName.' '. $staff->lastName }}</h5>
              <p class="card-text">{{ $staff->email }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="row">
            <div class="col-md-4">
              <strong>Name : </strong>
            </div>
            <div class="col-md-8">
              {{ $staff->firstName.' '. $staff->lastName }}
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <strong>Company : </strong>
            </div>
            <div class="col-md-8">
              {{  ucfirst(@$staff->company) }}
            </div>
          </div>
          

          <div class="row">
            <div class="col-md-4">
              <strong>Address : </strong>
            </div>
            <div class="col-md-8">
              {{ @$staff->location }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>status : </strong>
            </div>
            <div class="col-md-8">
              {{ @$staff->status }}
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <strong>About : </strong>
            </div>
            <div class="col-md-8">
              {{ ucfirst(@$staff->about) }}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
        <div class="col-md-12">

          @if(!empty($staff->video_link))
            <div class="profile_text_content position-relative profile_services_content">
                <div class="pro_logos_content">
                    
                    <div class="pro_logos_details d-inline-block">
                        <p class="job_sector_preview"></p>
                        @if(!empty($staff->video_link))
                            <video class="border-0 preview_video job_preview_video" controls>
                                <source src="{{ URL('public/uploads/profile/about_videos') }}/{{$staff->video_link}}" type="video/mp4">
                            </video>
                        @else
                            <h3>No Video</h3>    
                        @endif
                        <div class="job_preview_video">
                        </div>
                    </div>
                </div>
            </div>
          @endif
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