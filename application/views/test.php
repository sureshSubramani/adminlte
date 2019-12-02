<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href='assets/dist/css/bootstrap.min.css' rel='stylesheet'>
    <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='assets/dist/css/recuritment.css' rel='stylesheet'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script src='assets/dist/js/recuritment.js'></script>
</head>
<body>
    
    <!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Teaching Staff Recuritment</strong></h2>
                <hr/>
                <?php echo base_url().'recruitment/register_staff'; ?>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" method='post' action='' enctype='multipart/form-data'>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="user"><strong>Check User</strong></li>
                                <li id="personal"><strong>Personal Information</strong></li>
                                <li id="communication"><strong>Communication Information</strong></li>
                                <li id="education"><strong>Education Information</strong></li>
                                <li id="experience"><strong>Experience Information</strong></li>
                                <li id="achivement"><strong>Achivements Information</strong></li>
                                <li id="joining"><strong>Joining Information</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset id='user'>                                
                                <div class="form-card">
                                    <h2 class="fs-title">Check User</h2> 
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="email" id='email_id' name="email_id" class='form-control col-md-4' placeholder="Email" required /> 
                                            <input type="text" id='phone_no' name="phone_no" class='form-control col-md-4' maxlength='10' placeholder="+91" required/> 
                                        </div>                                                                     
                                    </div>
                                </div>
                                <input type='button' name="next" id='next' class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> 
                                    <div class="row">
                                    <div class="col-12">
                                        <input type="text" class='col-sm-5 col-md-5' name="fname" placeholder="First Name" /> 
                                        <input type="text" class='col-sm-5 col-md-5' name="lname" placeholder="Last Name" /> 
                                    </div>                                                                     
                                    </div>
                                    <div class="row">
                                    <div class="col-12">
                                        <input type="text" class='col-sm-5 col-md-5' name="dob" placeholder="DOB" />  
                                        <label>Nationality*</label>                                          
                                        <input type="radio" class='col-sm-1 col-md-1' name="gender" value='Male' /> Male
                                        <input type="radio" class='col-sm-1 col-md-1' name="gender" value='Femail' /> Female
                                        </div>
                                    </div>   
                                    <div class="row">
                                    <div class="col-12">
                                    <input type="text" class='col-sm-5 col-md-5' name="fname" placeholder="Father/Husband Name" />
                                    <label>Married Status* :</label>
                                    <input type="radio" class='col-sm-1 col-md-1' name="gender" value='Married' /> Married
                                    <input type="radio" class='col-sm-1 col-md-1' name="gender" value='Un-Married' /> Un-Married
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class='col-sm-5 col-md-5' name="focc" placeholder="Father/Husband Occupation" />
                                            <label>Nationality*</label>
                                            <select class="list-dt" class='form-control' id='nationality' name='nationality'>
                                                <option>---Select---</option>
                                                <option value='Indian'>Indian</option>
                                            </select>
                                        </div>
                                    </div>                                           
                                    <div class="row">
                                    <div class="col-12">
                                    <input type="email" id='email' class='col-sm-5 col-md-5' name="email" placeholder="Email Id" />                                    
                                    <input type="text" id='phone' class='col-sm-5 col-md-5' name="phone" maxlength='10' placeholder="+91" />
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-12">
                                    <input type="text" class='col-sm-5 col-md-5' name="phno_2" placeholder="Alternate Contact No." />
                                    </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> <input type="button" name="next" class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Communication Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select> <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> </div>
                                    </div>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> <input type="button" name="next" class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>

$('#next').on('click', function(event){

    event.preventDefault();
        var email = $("#email_id").val();
        var phone = $("#phone_no").val();
        var dataString = '&email='+ email + '&phone='+ phone;
        alert(email+' '+phone);

    var form_data = $(this).serialize();
    $.ajax({
        url: "<?php echo base_url(); ?>recruitment/register",
        method: "POST",
        data: form_data,
        dataType: "json", 
        success:function(data){
            alert(data);
            console.log(data);
        }
    });
});

// $("#next").click(function(){
        
//         var email = $("#email_id").val();
//         var phone = $("#phone_no").val();
//         var dataString = '&email='+ email + '&phone='+ phone;
//         alert(email+' '+phone);
//         if(email=='' || phone=='')
//         {
//             alert("Please Fill All Fields");
//         }
//         else
//         {
//             alert(email+' '+phone);
//             // AJAX Code To Submit Form.
//             $.ajax({
//                 type: 'POST',
//                 url: '<?php echo base_url(); ?>recruitment/register',
//                 //dataType: 'json',
//                 data: {'email': email, 'phone': phone},
//                 cache: false,
//                 success: function(data){
//                     alert(data);
//                     console.log(data);
//                 }
//             });
//         }
//         //return false;
//     });

</script>
</body>
</html>