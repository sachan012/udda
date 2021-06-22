<!DOCTYPE html>
<html lang="en">
<head>
    <title>UDDA | Redeem Swag</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php include 'styles.php';?> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/lightbox/jquery.fancybox.min.css" />
    <style type="text/css">
        .form-error { color: #e74c3c;}
        #signInform{width:100%;}
		.tabvideo{ margin-top: 40%;}       
		.tabvideo h1 {
			font-size: 1.03rem;
			font-weight: bold;		
			padding: 2%;
			font-family: "Montserrat", sans-serif;
		}      
    </style>    
</head>
<body>
    <!-------FirstDiv start--------->
    <div class="container-fluid banner_firstDiv">
        <div class="row">
            <div class="col-sm-12 text-center txt-cntr">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url();?>assets/images/11.jpg.png" class="sticker">
                        <div class="paddingHomeTopDiv tabvideo">
                            <a data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=MG4FIcVaiH0" target="_blank"><img src="<?php echo base_url();?>assets/images/video_thumb_in_tab.png" class="img-fluid video-class"></a>
							<h1>See How It Works</h1>
                        </div>
                    </div>
                    <div class="col-md-4 paddingHomeTopDiv">
                        <div>
                            <img class="img-fluid mx-auto logo" src="<?php echo base_url();?>assets/images/UDDA_Logo.png" alt="">
                            <h2>Download the app to get started!</h2>
                            <p class="appStoreDiv">
                                <a href="https://apps.apple.com/us/app/udda-sports/id1484047531" target="_blank"
                                    rel="noopener"><img class="alignnone size-full wp-image-49"
                                        src="<?php echo base_url();?>assets/images/app-download.png" alt=""
                                        width="136" height="50"></a>
                                <a href="https://play.google.com/store/apps/details?id=com.uddaapp.gaming"
                                    target="_blank" rel="noopener"><img class="alignnone size-full wp-image-61"
                                        src="<?php echo base_url();?>assets/images/google-play.png" alt=""
                                        width="137" height="50"></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 secondColTopDiv paddingHomeTopDiv commingSoon">
                        <h1 class="soonText color-red mb-0">NOW LIVE!</h1>
                        <h1>UDDA Redemption Portal</h1>
                        <h1 class="secondH2">Trade in UDDA Bucks for Exclusive UDDA Swag</h1>
						<?php if($this->session->flashdata('error_msg')){?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong><?php echo $this->session->flashdata('error_msg');?>!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<?php }?>
                        <button type="button" class="btn blue-bg signInBtn" data-toggle="modal" data-target="#signUpModal">Sign In</button>
                            <div class="imageCommingSoonDiv">
                                <img src="<?php echo base_url();?>assets/images/bottle_udda.png" class="img-fluid" style="width:15%">
                                <img src="<?php echo base_url();?>assets/images/speaker.png" class="img-fluid">
                                <img src="<?php echo base_url();?>assets/images/hat.png" class="img-fluid">
                                <img src="<?php echo base_url();?>assets/images/tshirt.png" class="img-fluid">
                            </div>
                    </div>
                    <div class="col-md-1 faqText"><a href="<?php echo base_url('frequently-asked-questions');?>" class="text-white">FAQ</a></div>
                </div>
            </div>
        </div>
    </div>
    <!------- FirstDiv End--------->

    <!-------SecondDiv start--------->
    <div class="container-fluid text-center">
        <div class="row secondDivRow">
            <div class="col-md-3">
                <div class="vc_column-inner">
                    <img class="vc_single_image-img" src="<?php echo base_url();?>assets/images/new-phone-255x195.png" alt="new-phone" title="new-phone" />
                    <h3>FREE TO PLAY PEER-TO-PEER <br> HOUSE SPORTS BETTING</h3>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="vc_column-inner">
                    <img class="vc_single_image-img" src="<?php echo base_url();?>assets/images/phone-2-255x195.png" alt="phone-2" title="phone-2" />
                    <h3>PUBLIC & PRIVATE CONTESTS <br> DAILY, WEEKLY OR MONTHLY</h3>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="vc_column-inner">
                    <img class="vc_single_image-img"
                        src="<?php echo base_url();?>assets/images/phone-3-255x195.png" alt="phone-3" title="phone-3" />
                    <h3>WIDE VARIETY OF SPORTS <br> TO CHOOSE FROM</h3>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="vc_column-inner">
                    <img class="vc_single_image-img" src="<?php echo base_url();?>assets/images/phone-4-1-255x195.png" alt="phone-4-1-255x195" title="phone-4-1-255x195" />
                    <h3>Create Custom Bets, Pool Bets, <br> Football Squares & More</h3>
                </div>
            </div>
        </div>
    </div>
    <!-------SecondDiv end--------->

    <!-------thirdDiv start--------->
    <div class="container-fluid">
        <div class="row get-started">
            <div class="col-md-6 px-0 imgHeightFull">
                <img class="img-fluid imgFullWidth" src="<?php echo base_url();?>assets/images/get-start.png">
            </div>
            <div class="col-md-6 colPadding blue-bg text-center">
                <h1>GETTING STARTED</h1>
                <p>
                    <span class="free-to-play">
                        <img src="<?php echo base_url();?>assets/images/free-1.png" class="imgLine" />
                    </span>
                </p>
                <div class="get-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>REGISTER
                            <img style="float: right;" src="<?php echo base_url();?>assets/images/i.jpg" alt=""></h2>
                    </div>
                </div>
                <p>Download the UDDA App and Sign in with your email/social media account.</p>
                <div class="get-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>PLAY
                            <img style="float: right;" src="<?php echo base_url();?>assets/images/ii.jpg" alt=""></h2>
                    </div>
                </div>
                <p>Choose your favorite sport and start betting. Join a contest or create your own to play amongst
                    friends.</p>
                <div class="get-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>WIN
                            <img style="float: right;" src="<?php echo base_url();?>assets/images/win-icon-2.png" alt=""></h2>
                    </div>
                </div>
                <p>Rack up big points that you can redeem for incredible&nbsp;virtual prizes.</p>
            </div>
        </div>

    </div>
    <!-------thirdDiv end--------->

    <!-------footerDiv start--------->
    <div class="footer mrgnboth">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="footer_h1">BET A FRIEND.BET A STRANGER.</h1>
                    <p>UDDA (as in " UDDA MAN ") is a FREE-TO-PLAY social sports gaming app that allows users to bet on sports and win virtual prizes.</p>
                </div>
                <div class="col-md-4 txt-cntr app">
                    <a href="https://apps.apple.com/us/app/udda-sports/id1484047531" target="_blank" rel="noopener"><img src="<?php echo base_url();?>assets/images/app-download.png" alt="" class="udda_content"></a>

                    <a href="https://play.google.com/store/apps/details?id=com.uddaapp.gaming" target="_blank" rel="noopener"><img src="<?php echo base_url();?>assets/images/google-play.png" alt="" class="google_play"></a>
                </div>

            </div>


            <div class="col-xs-12">
                <hr class="green_border"> <br>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="Stay_Connected">Stay Connected</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <a href="https://twitter.com/UDDA_WINNER" target="_blank" class="udda_Winner"><img src="<?php echo base_url();?>assets/images/Twitter.png" class="udda_YouTube"></a>

                    <a href="https://www.facebook.com/UDDAWinner/" target="_blank" class="udda_Winner"><img src="<?php echo base_url();?>assets/images/Facebook.png" class="udda_YouTube"></a>

                    <a href="https://www.instagram.com/udda_winner/" target="_blank" class="udda_Winner"><img src="<?php echo base_url();?>assets/images/Instagram.png" class="udda_YouTube"></a>

                    <a href="https://www.youtube.com/channel/UCvUKIFV3EML9mhh8wbqCfiQ/" target="_blank" class="udda_Winner"><img src="<?php echo base_url();?>assets/images/YouTube.png" class="udda_YouTube"></a>

                    <a href="https://sided.co/udda " target="_blank" class="udda_Winner">
                        <img src="<?php echo base_url();?>assets/images/Sided.png" class="udda_YouTube" style="border-radius: 10px;"></a>
                </div>               
            </div>

            <div class="clearfix"></div>
            <hr class="green_bottom">

            <div class="footer-end-content">
                <p class="rights_Reserved">© <?php echo date('Y');?> All rights reserved. UDDA Sports</p>
                <p class=" tercondition text-center "><a href="<?php echo base_url('term-and-condition');?>" class="text-dark">Terms & Conditions</a></p>
            </div>
        </div>
    </div>
    <!-------footerDiv end--------->   
    <!--================= Modals For Phone &  OTP Starts Here  ===================-->

    <!-- The Modal -->
    <div class="modal fade align-middle" id="signUpModal" data-backdrop="static">
        <div class="modal-dialog signInModal modal-dialog-centered">           
            <div class="modal-content">
               <div class="modal-body container-fluid pt-0 pb-0">
                    <button type="button" class="close" id="close1" data-dismiss="modal">×</button>
                    <div class="row">
                        <div class="col-md-6 modalCol banner_firstDiv">
                            <img class="img-fluid mx-auto logo" src="<?php echo base_url()?>assets/images/UDDA_Logo.png" alt="" />
                            <div class="rotateDiv blue-bg">
                                <h5 class="text1 py-2 px-3">UDDA Redemption Portal</h5>
                            </div>
                            <h5>Trade in UDDA Bucks for Exclusive UDDA Swag</h5>
                        </div>
                        <div class="col-md-6 modalCol container-fluid">
                            <h6 class="blue-color txt-cntr">SIGN IN</h6>
                            <?php echo form_open('login/verify_phone', 'id="signInform"');?>
                            <div class="form-group formMarginStyle">
                                <?php 
                                    $data = array(
                                            'name'          => 'phone',
                                            'id'            => 'phone_number',
                                            'class'         => 'form-control formInputStyle',
                                            'placeholder'   => 'Enter Registered Phone No.',
                                    );
                                    echo form_input($data);
                                ?>
                                <span id="phone_no_error" class="text-danger text-center"></span>
                            </div> 
                            
                            <button type="submit" class="btn blue-bg signInBtn">Sign In</button>
                            <?php echo form_close();?>
                            <div class="separator">or Continue with</div>
                            <div class="row lstBtnDiv">
                                <div class="col-md-6 mb-3">
                                <a href="<?php echo $facebook_login_url;?>" class="fa fa-facebook contentProperty"><span>Sign in With Facebook</span></a>
                                </div>
                                <div class="col-md-6 mb-3">
                                <a href="<?php echo $google_login_button;?>" class="fa fa-google contentProperty" ><span>Sign in With Google</span></a>
                                </div>
                                <div class="col-md-6 mb-3">
                                <a href="<?php echo $twitterUrl;?>" class="fa fa-twitter contentProperty"><span>Sign in With Twitter</span></a>
                                </div>
                                <!-- <div class="col-md-6 mb-3">
                                    <a href="#" class="fa fa-apple contentProperty"><span>Sign in With Apple</span></a>
                                </div> -->
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The OTP Modal -->
    <div class="modal fade align-middle" id="OTPModal" data-backdrop="static">
        <div class="modal-dialog signInModal modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body container-fluid pt-0 pb-0">
                    <button type="button" class="close" id="close2" data-dismiss="modal">×</button>
                    <div class="row">
                        <div class="col-md-6 modalCol banner_firstDiv">
                            <img class="img-fluid mx-auto logo" src="<?php echo base_url();?>/assets/images/UDDA_Logo.png" alt="" />
                            <div class="rotateDiv blue-bg">
                                <h5 class="text1 py-2 px-3">UDDA Redemption Portal</h5>
                            </div>
                            <h5>Trade in UDDA Bucks for Exclusive UDDA Swag</h5>
                        </div>
                        <div class="col-md-6 modalCol container-fluid">
                            <h6 class="blue-color txt-cntr">Verify OTP</h6>
                            <p class="text-center">An OTP has been sent to your registered mobile number</p>
							<p class="text-center text-info" id="new_otp_msg"></p>
                            <?php echo form_open('login/verify_otp',array('name'=>'otpform','id'=>'otpform','class'=>'otpform'))?> 
                            
                            <div class="form-group formMarginStyle">
                                <?php echo form_input(
                                    array(
                                        'name'=>'phone',
                                        'id'=>'phone_otp',
                                        'class'=>'form-control formInputStyle phone',
                                        'readonly' =>''
                                    ));
                                ?>                              
                            </div>
                            <div>
                                <h6 class="blue-color txt-cntr otptxt">OTP</h6>
								 <p id="otp_error_msg" class="text-danger"></p>
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                    <?php 
                                        for($i=1;$i<=4;$i++){
                                        echo form_input(array(
                                            'type'  => 'text',
                                            'id'  => 'codeBox'.$i,
                                            'name'  => 'otpBox'.$i,                                            
                                            'onkeyup'  => 'onKeyUpEvent('.$i.',event)',
                                            'onfocus'  => 'onFocusEvent(1)',
                                            'class'  => 'form-control otpInputBorderStyle border-0 text-center mr-2',
                                            'required' => '',
                                            'size' =>1,
                                            'maxlength'=>1,
                                            'autocomplete'=>'off'
                                        ));
                                    }       
                                    ?>                                     
                                    </div>
                                </div>
                                <h6 class="red-color txt-cntr resendOtpTxt"><a href="javascript:void(0);" id="resendOtp">Resend OTP<a></h6>
                            </div>
                            <button type="submit" class="btn blue-bg signInBtn" name="submit">Sign In</button>                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!--================= Modals For Phone &  OTP Ends Here  ===============-->
    <!--=================================== Page Scripts=====================-->
    <?php include 'scripts.php';?>
	<script src="<?php echo base_url();?>assets/plugins/lightbox/jquery.fancybox.min.js"></script>
	
        <script type="text/javascript">
        $(document ).ready(function() {            
            $('#signInform').on('submit', function (e) {
                e.preventDefault();               
                var phone=$("#phone_number").val();                
                var datastring='phone='+phone;                           
                $.ajax({
                        //url: '<?php echo base_url('login/verify_phone');?>',
						url : '/login/verify_phone',
                        type: "POST",                    
                        data: datastring,                                                        
                        success: function(response) {  
                            //console.log(response);                           
                            if(response.status == 'error'){
                                //alert(response.phone_no_error);
                                $("#phone_no_error").html(response.phone_no_error);
                            }else{                           
                                if(response.message=='success'){
                                //alert(response.data.phone);
                                $("#signUpModal").modal('hide');
                                $("#OTPModal").modal('show');
                                var phone= response.data.phone;  
									phone = phone.substring(1);									
                                $("#phone_otp").val(phone);
                            }else{
                                var msg = 'The phone number you have entered is not a registered number.';
                                $("#phone_no_error").html(msg);
                            }      
                        }                                 
                    }
                });
            });        
        });
    </script>   
    <script type="text/javascript">
        $('#signUpModal').on('hidden.modal', function () {
            $(this).find('form').trigger('reset');
            $('#signUpModal').remove();
            // $("#loading-image").hide();
        });
    </script>
    <script>
        function getCodeBoxElement(index) {
            return document.getElementById('codeBox' + index);
        }
        function onKeyUpEvent(index, event) {
            const eventCode = event.which || event.keyCode;
            if (getCodeBoxElement(index).value.length === 1) {
                if (index !== 4) {
                    getCodeBoxElement(index + 1).focus();
                } else {
                    getCodeBoxElement(index).blur();
                    // Submit code
                    console.log('submit code ');
                }
            }
            if (eventCode === 8 && index !== 1) {
                getCodeBoxElement(index - 1).focus();
            }
        }
        function onFocusEvent(index) {
            for (item = 1; item < index; item++) {
                const currentElement = getCodeBoxElement(item);
                if (!currentElement.value) {
                    currentElement.focus();
                    break;
                }
            }
        }
    </script>
	<script type="text/javascript">
        $(document ).ready(function() {            
            $('#otpform').on('submit', function (e) {                
                e.preventDefault();                 
                var datastring=$("#otpform").serialize();                            
                $.ajax({
                        //url: '<?php echo base_url('login/verify_otp');?>',
						url : '/login/verify_otp',
                        type: "POST",                    
                        data: datastring,
                        dataType: 'json',
                        success: function(response) {
                            //console.log(response);                            
                            if(response.error==1000){
                                //alert(response.message);
                                 $('#otp_msg').addClass('display','none');
                                 let msg = response.message;
                                 $('#otp_error_msg').html(msg);
                            }else{
                                $('#otp_error_msg').css('display','none');
                                //window.location.href = "<?php echo base_url('dashboard/productList');?>";
								window.location.href = '/dashboard/productList';
								
                            }                                                 
                    }
                });
            });        
        });
    </script>
	<script type="text/javascript">
        $(document ).ready(function() {            
            $('#resendOtp').on('click', function (e) {				
                e.preventDefault();               
                var phone=$("#phone_number").val();               
                var datastring='phone='+phone;                             
                $.ajax({
                        //url: '<?php echo base_url('login/otp_resend');?>',
						url : '/login/otp_resend',
                        type: "POST",                    
                        data: datastring,
                        dataType: 'json',                                                      
                        success: function(response) {
                            //console.log(response.message); 
                            if(response.message=='success'){
                                 $('#otp_msg').css('display','none');
                                var msg = 'New OTP has been sent to your number.';
                                $("#new_otp_msg").html(msg);
                            }else{
                                $('#new_otp_msg').css('display','none');
                            }                            
                    }
                });
            });        
        });
    </script> 
    <script>
        $('.modal').on('hidden.bs.modal', function (e) {
            $(this)
                .find("input,textarea,select")
                .val('')
                .end()
				.find(".text-danger")
                .text('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end();
            })    
    </script>
	<script>
		$('.signInBtn').click(function () {
		  var btn = $(this);
		  $(btn).buttonLoader('start');
		  setTimeout(function () {
			$(btn).buttonLoader('stop');
		  }, 2000);
		});
	</script>
</body>

</html>