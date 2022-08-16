@extends('front.staticPagesLayout.base')
@section('content')

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head>
<style type="text/css">
    .dropdown-blc .select2-container {
        width: 100% !important;
    }

    .dropdown-blc .select2-container--default .select2-selection--multiple {
        background-color: #f6f7f7;
        border: 1px solid #f6f7f7;
        padding: 0px 0 5px !important;
        padding-bottom: 0;
        min-height: 44px;
    }

    .dropdown-blc .select2-container--default .select2-selection--multiple .select2-selection__choice {
        margin-top: 5px;
        margin-bottom: 0;
    }

    .dropdown-blc .select2-container .select2-search--inline .select2-search__field {
        margin-top: 8px;
        height: 24px;
    }

    [title]:before {
        color: red;
        font-size: 16px;


    }
    span.required-symbol {
        color: red;
    }


    /*this following custom class need to add with "form-group" div 
"dropdown-blc"*/

    /*job-post Page Dropdown style  */

    /*.dropdown-blc.dropdown-blc2
  .select2-container--default
  .select2-selection--multiple {
  background-color: #f6f7f7;
  border: 1px solid #f6f7f7;
  padding: 0px 0 5px !important;
  padding-bottom: 0;
  min-height: 44px;
}*/
</style>

<body>
    <div class="step-wrapper">

        <div class="container step-container">
            <div class="step-row d-flex">
                
                <div class="step-rt-col flex-fill d-flex flex-column">
                    <div class="step-block card border-0 shadow-none rounded-0 register_content visible step1">
                        <div class="step-sidebar">
                    <h2>Time to get your deets registered!</h2>
                    
                </div>

                        <div class="step-block-hd d-flex align-items-center text-right">
                            <div class="question-mark-icon-only qstep-1 ml-auto"><img src="{{asset('images/question-mark-help.svg')}}" alt="" /></div>
                            <a href="{{url('/')}}" class="ml-auto hd-icn">
                                <img class="img-fluid" src="{{ 'public/images/logo-icon.svg' }}" alt="Logo Icon" />
                            </a>
                        </div>
                        <form class="step1" id="r_step1">
                            <span class="invalid-feedback" role="alert" id="successMsg"></span>
                            <div class="form-group">
                                <label>Name<span class="required-symbol">*</span></label>
                                <input type="text" placeholder="Enter here" name="name" id="name" class="form-control white-shadow-input" required="">
                                <!-- <span class="d-block text-danger mt-1">This Feild is Required.</span> -->
                                <span class="invalid-feedback" role="alert" id="nameboxErr"></span>

                            </div>
                            <div class="form-group">
                                <label>Ethnicity<span class="required-symbol">*</span></label>
                                
                                <select class="form-control" name="ethnicity" id="ethnicity">
                                        <option value="">- select -</option>
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
                                <span class="invalid-feedback" role="alert" id="ethnicityboxErr"></span>

                            </div>

                            <div class="form-group">
                                <label>Gender<span class="required-symbol">*</span></label>
                                <select class="form-control" name="sex" id="sex">
                                        <option value="">- select -</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>  
                                </select>
                        
                                <span class="invalid-feedback" role="alert" id="sexboxErr"></span>

                            </div>

                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="text" placeholder="Enter here" name="birth_day" id="datetimepicker" class="form-control white-shadow-input" autocomplete="false">
                        
                                <span class="invalid-feedback" role="alert" id="birthDayboxErr"></span>

                            </div>

                                                        
                            <div class="form-group">
                                <label for="email">Email Address<span class="required-symbol">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Enter here" class="form-control white-shadow-input" >
                                <span class="invalid-feedback" role="alert" id="emailboxErr"></span>
                            </div>

                            <div class="form-group">
                                <label>Height (cm)</label>
                                <input type="number" placeholder="Enter here" name="height" id="height" class="form-control white-shadow-input" >
                                <span class="invalid-feedback" role="alert" id="heightboxErr"></span>

                            </div>

                            <div class="form-group">
                                <label>Weight (kg)</label>
                                <input type="number" placeholder="Enter here" name="weight" id="weight" class="form-control white-shadow-input" >
                        
                                <span class="invalid-feedback" role="alert" id="weightboxErr"></span>

                            </div>
    
                            <div class="step-form-btn text-right">
                                <a href="javascript:void(0);" class="btn btn-primary rounded-0 shadow-none get-start submit_registration" data-value="tab1">Submit </a>
                            </div>
                        </form>
                    </div>

                   
                </div>
                </div>
            </div>
        </div>
        @endsection

        @section('js')

        <!-- <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <script type="text/javascript">
            $(function() {
               $('#datetimepicker').datetimepicker({
                    format: 'DD/MM/YYYY'
                }).on('change', function(){
                    $('#datetimepicker').hide();
                });
            });




            $(document).ready(function() {


                $('.submit_registration').on('click', function(e) {
                    var name = $("#name").val();
                    var ethnicity = $("#ethnicity").val();
                    var sex = $("#sex").val();
                    var birth_day = $('#datetimepicker').val();
                    var email = $('#email').val();
                    var height = $('#height').val();
                    var weight = $('#weight').val();
                    console.log(birth_day);
                    e.preventDefault();

                    $.ajax({
                        url: "{{ url('submit_profile') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            name: name,
                            ethnicity: ethnicity,
                            sex: sex,
                            birth_day: birth_day,
                            email: email,
                            height: height,
                            weight: weight,
                        },
                        success: function(response) {
                            console.log(response.errors);

                            if (response.success == false) {
                                if (response.errors['name']) {

                                    $('#nameboxErr').css('display', 'block')
                                    $('#nameboxErr').html(response.errors['name'][0])
                                }
                                if (response.errors['ethnicity']) {

                                    $('#ethnicityboxErr').css('display', 'block')
                                    $('#ethnicityboxErr').html(response.errors['ethnicity'][0])
                                }
                                if (response.errors['birth_year']) {

                                    $('#birthYearboxErr').css('display', 'block')
                                    $('#birthYearboxErr').html(response.errors['birth_year'][0])
                                }
                                if (response.errors['birth_month']) {

                                    $('#birthMonthboxErr').css('display', 'block')
                                    $('#birthMonthboxErr').html(response.errors['birth_month'][0])
                                }
                                if (response.errors['birth_day']) {

                                    $('#birthDayboxErr').css('display', 'block')
                                    $('#birthDayboxErr').html(response.errors['birth_day'][0])
                                }
                                if (response.errors['height']) {

                                    $('#heightboxErr').css('display', 'block')
                                    $('#heightboxErr').html(response.errors['height'][0])
                                }
                                if (response.errors['weight']) {

                                    $('#weightboxErr').css('display', 'block')
                                    $('#weightboxErr').html(response.errors['weight'][0])
                                }

                            } else {

                               swal('success!', 'Profile Create Successfully', 'success');

                            }
                        },

                        error: function(response) {
                            console.log(response);
                        }

                    });
                });


            });
           

           
           
        </script>
        @endsection