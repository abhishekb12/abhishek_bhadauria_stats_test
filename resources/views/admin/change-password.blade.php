@extends('admin.layouts.layout')

@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div> --}}

  <!-- Content Row -->

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Change Password</h1>

  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12 d-none d-lg-block"></div>
            <div class="col-lg-12">
              <div class="p-5">
                <form class="user" method="POST" action="{{ route('admin.changePassword') }}">
                  @csrf
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('current_password') is-invalid @enderror" name="current_password" id="current_password" aria-describedby="current_password" placeholder="Enter Current Password" required>

                    @error('current_password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('new_password') is-invalid @enderror" name="new_password" id="new_password" aria-describedby="new_password" placeholder="Enter New Password" required>

                    @error('new_password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('new_confirm_password') is-invalid @enderror" name="new_confirm_password" id="new_confirm_password" aria-describedby="new_confirm_password" placeholder="Confirm Password Here..." required>

                    @error('new_confirm_password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                </form>
                <hr>
                {{--<div class="text-center">
                  <a class="small" href="register.html">Create an Account!</a>
                </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Content Row -->

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