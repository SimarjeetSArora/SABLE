<?php require_once('./config.php') ?>

<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
<?php require_once('inc/topBarNav.php') ?>

<body class="hold-transition">
    <script>
        start_loader()
    </script>
  
    <div class="container" style="margin-left: auto; margin-right: auto;">
    <br><br>
        <div class="d-flex justify-content-center align-items-center w-100 h-100">
            <div class="card card-outline card-primary col-12 rounded-0 shadow">
                <div class="card-header text-center">
                    <a href="./register.php" class="h1"><b>Create an Account</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form id="cregister-frm" action="" method="post">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="firstname" class="control-label">First Name</label>
                                <input type="text" id="firstname" autofocus name="firstname" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middlename" class="control-label">Middle Name</label>
                                <input type="text" id="middlename" name="middlename" class="form-control form-control-sm form-control-border" placeholder="optional">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lastname" class="control-label">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender" class="control-label">Gender</label>
                                <select type="text" id="gender" name="gender" class="form-control form-control-sm form-control-border select2" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact" class="control-label">Contact</label>
                                <input type="text" id="contact" name="contact" class="form-control form-control-sm form-control-border" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="address" class="control-label">Address</label>
                                <textarea rows="3" id="address" name="address" class="form-control form-control-sm rounded-0" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email" class="control-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-sm form-control-border" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password" class="control-label">Password</label>
                                <div class="input-group input-group-sm">
                                    <input type="password" id="password" name="password" class="form-control form-control-sm form-control-border" required>
                                    <div class="input-group-append bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                        <span class="input-group-text bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                            <a href="javascript:void(0)" class="text-reset text-decoration-none pass_view"> <i class="fa fa-eye-slash"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpassword" class="control-label">Confirm Password</label>
                                <div class="input-group input-group-sm">
                                    <input type="password" id="cpassword" class="form-control form-control-sm form-control-border" required>
                                    <div class="input-group-append bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                        <span class="input-group-text bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                            <a href="javascript:void(0)" class="text-reset text-decoration-none pass_view"> <i class="fa fa-eye-slash"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group col-md-6" style="margin-left:22px;">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" required>
                                I agree to <a href="#" id="privacy">Privacy Policy</a>.
                            </label>
                        </div>
                        <div class="input-group col-md-6" style="margin-left:22px;">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" required>
                                I agree to <a href="#" id="terms">Terms and Conditions</a>.
                            </label>
                        </div>
                        <br>
                        <div class="row align-item-end">
                            <div class="col-8">
                                <a href="<?= base_url.'./vendor/register.php' ?>">NGO Register</a>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Create Account</button>
                            </div>
                            <div class="col-12 text-center">
                            <a href="<?= base_url.'./login.php' ?>">Already have an Account</a>
                            </div>
                        <!-- /.col -->
                        </div>
                    </form>
                    <!-- /.social-auth-links -->

                    <!-- <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p> -->
                    
                </div>
                    <!-- /.card-body -->
            </div>
        </div>
            
    </div>
<!-- Privacy Modal -->
    <div class="modal fade" id="privacymodal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Privacy Policy</h3>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
      
                <!-- Modal body -->
                <div class="modal-body">
                    <p>
                    This Privacy Policy describes how Sable ("we", "us", or "our") collects, uses, and shares information when you register as a user on our ecommerce platform. Sable is committed to protecting your privacy and ensuring the security of your personal information.

                    <h4><b>1. Information We Collect:</b></h4>
                    <b>Registration Information:</b> When you register as a user on Sable, we collect personal information such as your name, email address, shipping address, and other contact details.
                    <br><b>Profile Information:</b> You may choose to provide additional information such as your gender, date of birth, and preferences to enhance your user experience on our platform.
                    <br><b>Transaction Information:</b> We collect information related to your purchases, including the products you buy, payment details, and shipping information.
                    <br><b>Communication Information:</b> We may collect information related to your communication with us, including emails, messages, and feedback.

                    <br><br><h4><b>2. How We Use Your Information:</b></h4>
                    <b>Provide Services:</b> We use the information you provide to register you as a user, process your orders, and deliver products to you.
                    <br><b>Personalization:</b> We use your information to personalize your experience on our platform, including recommending products based on your preferences and purchase history.
                    <br><b>Communication:</b> We may use your contact information to communicate with you about your orders, account updates, promotions, and other relevant information.
                    <br><b>Analytics:</b> We analyze user data to improve our platform, enhance user experience, and optimize our marketing strategies.

                    <br><br><h4><b>3. Sharing of Information:</b></h4>
                    <b>Third-Party Service Providers:</b> We may share your information with trusted third-party service providers who assist us in providing services such as payment processing, order fulfillment, and customer support.
                    <br><b>Legal Compliance:</b> We may disclose your information in response to legal requests, court orders, or legal processes, or to establish or exercise our legal rights or defend against legal claims.
                    <br><b>Business Transfers:</b> In the event of a merger, acquisition, or sale of assets, your information may be transferred to the acquiring entity.

                    <br><br><h4><b>4. Data Security:</b></h4>
                    We implement security measures to protect your personal information from unauthorized access, misuse, or alteration.
                    <br>We use encryption, secure server infrastructure, and other industry-standard security practices to safeguard your data.

                    <br><br><h4><b>5. Your Choices:</b></h4>
                    You can update or modify your account information by accessing your account settings on our platform.
                    <br>You can opt out of receiving promotional emails by following the instructions provided in the email or contacting us directly.

                    <br><br><h4><b>6. Changes to This Privacy Policy:</b></h4>
                    We reserve the right to update or modify this Privacy Policy at any time. We will notify you of any changes by posting the revised Privacy Policy on our website.

                    <br><br><h4><b>8. Contact Us:</b></h4>
                    If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at <a href="mailto:sableforspeciallyabled@gmail.com">sableforspeciallyabled@gmail.com</a> or<a href="tel:+917566262222">+91 7566262222</a>.

                    <br><br>By registering as a user on Sable, you consent to the collection, use, and sharing of your information as described in this Privacy Policy.</p>
                </div>           
            </div>
        </div>
    </div>




<!-- Terms Modal -->
<div class="modal fade" id="termsmodal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Terms and Conditions</h3>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <p> 
        Welcome to Sable! These Terms and Conditions govern your use of our ecommerce platform and services. By registering as a user on Sable, you agree to comply with these terms and conditions. Please read them carefully.

        <h4><b>1. User Registration:</b></h3>
        <li>To access certain features of our platform, including purchasing products created by specially abled individuals, you must register as a user.
        <li>You agree to provide accurate, current, and complete information during the registration process and to update such information as necessary to keep it accurate, current, and complete.

        <h4><b>2. User Account:</b></h4>
        <li>You are responsible for maintaining the confidentiality of your account credentials and for any activities that occur under your account.
        <li>You agree to notify us immediately of any unauthorized use of your account or any other breach of security.

        <h4><b>3. Product Listings:</b></h4>
        <li>Sable provides a platform for specially abled individuals to sell their products. We strive to ensure the accuracy and quality of product listings, but we do not guarantee the accuracy, completeness, or reliability of any product information.
        <li>You acknowledge that the products listed on our platform may vary in appearance, size, and other attributes due to their handmade nature and the individual abilities of the creators.

        <h4><b>4. Ordering and Payment:</b></h4>
        <li>When you place an order on Sable, you agree to pay the specified price for the products, including any applicable taxes, shipping fees, and other charges.
        <li>We accept various payment methods, and you agree to provide accurate and valid payment information.

5. **Shipping and Delivery:**
   - We strive to process and ship orders in a timely manner. However, delivery times may vary depending on factors such as product availability, shipping destination, and carrier delays.
   - Sable is not responsible for any delays, damages, or lost shipments caused by third-party carriers.

6. **Returns and Refunds:**
   - We want you to be satisfied with your purchase. If you are not completely satisfied with a product, you may be eligible for a return or refund in accordance with our Return Policy.

7. **Intellectual Property:**
   - All content and materials on the Sable platform, including product listings, images, logos, and trademarks, are owned or licensed by Sable or its affiliates and are protected by intellectual property laws.
   - You agree not to reproduce, distribute, modify, or create derivative works of any content on our platform without prior written consent from Sable.

8. **User Conduct:**
   - You agree to use our platform in a lawful and responsible manner and to comply with all applicable laws, regulations, and policies.
   - You agree not to engage in any activities that may disrupt, damage, or impair the operation of our platform or interfere with other users' access to our services.

9. **Modification of Terms:**
   - Sable reserves the right to modify or update these Terms and Conditions at any time without prior notice. The most current version of the Terms and Conditions will be posted on our website.

10. **Termination:**
    - We reserve the right to suspend or terminate your account and access to our platform if we believe you have violated these Terms and Conditions or engaged in any fraudulent or unlawful activities.

11. **Governing Law:**
    - These Terms and Conditions shall be governed by and construed in accordance with the laws of [jurisdiction], without regard to its conflict of law provisions.

12. **Contact Us:**
    - If you have any questions or concerns about these Terms and Conditions or our services, please contact us at [contact email or address].

By registering as a user on Sable, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.
        </p>
      </div>
      
      
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
$("#privacy").click(function(){
  $("#privacymodal").modal();
});
});
</script>

<script>
$(document).ready(function(){
$("#terms").click(function(){
  $("#termsmodal").modal();
});
});
</script>


<!-- jQuery -->
<script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script> -->
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>

<script>
    function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
	        	$('#cimg').attr('src', '<?= validate_image('') ?>');
        }
	}
  $(function(){
    end_loader();
    $('body').height($(window).height())
    $('.select2').select2({
        placeholder:"Please Select Here",
        width:'100%'
    })
    $('.select2-selection').addClass("form-border")
    $('.pass_view').click(function(){
        var _el = $(this).closest('.input-group')
        var type = _el.find('input').attr('type')
        if(type == 'password'){
            _el.find('input').attr('type','text').focus()
            $(this).find('i.fa').removeClass('fa-eye-slash').addClass('fa-eye')
        }else{
            _el.find('input').attr('type','password').focus()
            $(this).find('i.fa').addClass('fa-eye-slash').removeClass('fa-eye')

        }
    })

    $('#cregister-frm').submit(function(e){
        e.preventDefault();
        var _this = $(this)
            $('.err-msg').remove();
        var el = $('<div>')
            el.addClass("alert err-msg")
            el.hide()
        if(_this[0].checkValidity() == false){
            _this[0].reportValidity();
            return false;
        }
        if($('#password').val() != $('#cpassword').val()){
            el.addClass('alert-danger').text('Password does not match.')
            _this.append(el)
            el.show('slow')
            $('html,body').scrollTop(0)
            return false;
        }
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Users.php?f=save_client",
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            dataType: 'json',
            error:err=>{
                console.error(err)
                el.addClass('alert-danger').text("An error occured");
                _this.prepend(el)
                el.show('.modal')
                end_loader();
            },
            success:function(resp){
                if(typeof resp =='object' && resp.status == 'success'){
                    location.href= './login.php';
                }else if(resp.status == 'failed' && !!resp.msg){
                    el.addClass('alert-danger').text(resp.msg);
                    _this.prepend(el)
                    el.show('.modal')
                }else{
                    el.text("An error occured");
                    console.error(resp)
                }
                $("html, body").scrollTop(0);
                end_loader()

            }
        })
    })
  })
</script>
</body>
</html>
<?php require_once('inc/footer.php') ?>
