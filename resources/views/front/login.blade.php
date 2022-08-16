@extends('front.staticPagesLayout.base')
@section('content')

<div class="login-page-new-outer login-only-page-new-outer">
   <div class="lgn-only-hdr">
      <div class="container container-1320">
            <figure class="lgn-only-hdr-logo">
                <a href="{{url('/')}}"><img src="{{asset('logo.svg')}}" alt="" /></a>
          </figure>
      </div>
   </div>
    <div class="login-page-new-wrap">
    <div class="login-page-new-right">
        <div class="login-page-new-right-bx">
            <div class="login-page-new-bx-in">
                    <div class="inn-steps">
                       @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert"></button> 
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                       <div class="step1">
                          <h2>Sign in</h2>
                          
                          <form id="step1Form" method="POST">
                           
                          
                             <div class="form-group">
                                <input type="email" class="form-control" name="email" id="emailbox" placeholder="Email" >

                                <span class="invalid-feedback" role="alert" id="emailboxErr"></span>
                                
                                
                             </div>
                             <div class="form-group">
                                <input type="password" class="form-control" name="password" id="passwordbox" placeholder="Password" >

                               <span class="invalid-feedback" role="alert" id="passwordboxErr"></span>
                             </div>
                            <p><a href="{{url('user-forgot-password')}}">Forgot Password ?</a> </p>
                            <div class="text-right">
                                <input type="submit" value="Submit" class="pro-btn-1" id="submitBtn">
                            </div>
                          </form>
                       </div>
                    </div>
                 </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  // $( document ).ready(function() {
  //   setTimeout(function () {
  //     $('.alert-block').css('display','none');
  //   }, 5000);
  // });
  //login check
  $('#step1Form').on('submit',function(e){
        e.preventDefault();
        email = $('#emailbox').val();
        password = $('#passwordbox').val();
        $.ajax({
          url: "{{ url('userlogin') }}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            email:email,
            password:password,
          },
          success:function(response){
            console.log(response); 
            if(response.success == false){

              if (response.errors['email']) {

                  $('#emailboxErr').css('display', 'block')
                  $('#emailboxErr').html(response.errors['email'][0])
              }
              if(response.errors['email']){
                  $('#passwordboxErr').css('display', 'block')
                  $('#passwordboxErr').html(response.errors['password'][0])
              }
             
            }else{

               $('.step1').hide();
               $('.step2').show();

            }
          },

          error: function(response) {
              console.log(response); 
           }

         });
  });

  

  // $('#step1Form').validate({
  //    rules: {
  //         email: {
  //            required: true
  //        },
  //        password: {
  //            required: true
  //        },
  //    },
  //    messages: {
  //         email: {
  //            required: "Please enter email"
  //        },
  //        password: {
  //            required: "Please enter password"
  //        },
  //    },
  //    submitHandler: function (form) {
  //     console.log(form);
  //        $('<form action="userlogin" method="POST" style="display:none">'+
  //            '{{csrf_field()}}'+
  //            '<input type="text" name="email" value="'+$('#emailbox').val()+'">'+
  //            '<input type="text" name="password" value="'+$('#passwordbox').val()+'">'+
  //        '</form>').appendTo('body').submit();
  //    }
  // });
</script>
@endsection