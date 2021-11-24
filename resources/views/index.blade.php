


<!DOCTYPE html>
<html>

<!-- Mirrored from portwallet.globalskills.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Nov 2021 08:45:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Portwallet | Global Skills Development Agency</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
<!--[if IE 8]>     <html class="ie8"> <![endif]-->
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 content">
      <div class="row">
        <div class="col-xs-12"><img src="{{asset('images/logo_globalskills.png')}}" alt="Global Skills Development Agency"></div>
      </div>
      <div class="clearfix"></div>
      <div class="rechargeText">
      <p>Please enter certificate name, email & valid 11 digit contact number, organization, designation & choose interested training and put desired amount, Press 'Pay Now' to proceed to the payment confirmation page.</p>
      </div>
      <div class="intro_text">
        <div class="col-md-12">
          <form class="rankstel_form form-horizontal" action="{{route('payment')}}" method="post"  data-toggle="validator" >
            @csrf

            <div id="hasErrorAmount" class="form-group">
                          </div>
            <div id="hasErrorAmount" class="form-group">
              <label class="error" id="cp_error_msg"></label>
              <label for="recharge_labbel"  class="col-xs-4 control-label lableclass">Full Name</label>
              <div class="col-sm-4 col-xs-8  mobile_other mobile_data">
                <input type="text" name="name" class="form-control" id="customer_phone" required placeholder="Enter your full name" data-error="Enter your full Name." autocomplete="off" value="" >
                <div id="cp-error" class="help-block with-errors"></div>
              </div>
            </div>

            <div class="form-group">
              <label class="error" id="email_error_msg"></label>
              <label for="recharge_labbel" class="col-xs-4 control-label lableclass">Email</label>
              <div class="col-xs-8 col-sm-4">
                <input type="email" name="email" class="form-control"  autocomplete="off" id="emailid" placeholder="Enter your email address" data-error="Please give a correct e-mail address." value="" >
              </div>
            </div>
            <div id="hasErrorAmount" class="form-group">
              <label class="error" id="amount_error_msg"></label>
              <label for="recharge_labbel"  class="col-xs-4 control-label lableclass amount-lbl">Mobile Number</label>
              <div class="col-sm-4 col-xs-8  mobile_other mobile_data">
                <input name="number" class="form-control" id="mobile_number" required placeholder="01XXXXXXXXX" data-error="Please enter mobile number."  autocomplete="off" value="" type="phone">
                <div id="mobile-error" class="help-block with-errors"></div>
              </div>
            </div>



            <div id="hasErrorAmount" class="form-group">
              <label class="error" id="cp_error_msg"></label>
              <label for="recharge_labbel"  class="col-xs-4 control-label lableclass">Select Course</label>
              <div class="col-sm-4 col-xs-8  mobile_other mobile_data">
                <select class="form-control" id="exampleFormControlSelect1" name="course">
			      <option>Membership</option>
			      <option>ITIL® v3 Foundation</option>
			      <option>ITIL® v3 Practitioners</option>
			      <option>ITIL® v3 Service Strategy</option>
			      <option>ITIL® v3 Service Design</option>
			      <option>ITIL® v3 Service Transition</option>
			      <option>ITIL® v3 Service Operation</option>
			      <option>ITIL® v3 Continual Service Improvement</option>
			      <option>ITIL® Expert</option>
			      <option>ITIL® 4 Foundation</option>
			      <option>ITIL® 4 Specialist: Create, Deliver and Support (CDS)</option>
			      <option>ITIL® 4 Specialist: Drive Stakeholder Value (ITIL 4 DSV)</option>
			      <option>ITIL® 4 Specialist: High Velocity IT (HVIT)</option>
			      <option>ITIL® 4 Managing Professional (MP)</option>
			      <option>ITIL® 4 Leader: Digital and IT Strategy (DITS)</option>
			      <option>ITIL® 4 Strategist Direct Plan and Improve (ITIL 4 DPI)</option>
			      <option>ITIL® 4 Strategic Leader (SL)</option>
			      <option>TOGAF</option>
			      <option>PMP</option>
			      <option>PRINCE2® Foundation</option>
			      <option>PRINCE2® Practitioners</option>
			      <option>PRINCE2® Foundation Exam Voucher</option>
			      <option>AWS Solutions Architect Associate</option>
			      <option>CCC Big Data Foundation</option>
			      <option>Internet of Things (IoT) Foundation</option>
			      <option>Hadoop Administration</option>
			      <option>COBIT® 5 Foundation</option>
			      <option>COBIT® 5 Implementation</option>
			      <option>EXIN Agile Scrum Foundation</option>
			      <option>EXIN Agile Scrum Master</option>
			      <option>ISO/IEC 20000 for IT Service Management</option>
			      <option>ISO/IEC 27001 Information Security Foundation</option>
			      <option>ISO/IEC 27001 Lead Auditor for Information Security</option>
			      <option>ISO/IEC 27001 Lead Implementer</option>
			      <option>ISEO/IEC 20000 Practitioners</option>
			      <option>CISA</option>
			      <option>CISM</option>
			      <option>CISSP</option>
			      <option>DevOps Master</option>
			      <option>DevOps Foundation</option>
			      <option>Certified Agile Service Manager</option>
			      <option>Certified Agile Process Owner</option>
			      <option>Certified Six Sigma Yellow Belt</option>
			      <option>Certified Six Sigma Green Belt</option>
			      <option>Certified Six Sigma Black Belt</option>
			      <option>Employee Relationship Fundamental</option>
			      <option>Employee Relationship Labor law compliance</option>
			      <option>Employee relationship How to do negotiation</option>
			      <option>Sound is magic (Communication)</option>
			      <option>Step by Step Leadership Skills</option>
			      <option>MS Excel</option>
			      <option>Digital Marketing</option>
			      <option>SEO</option>
			      <option>Web development (WordPress)</option>
			      <option>Professional video editor | Techsmith Camtasia Studio 9</option>
			      <option>Book</option>
			      <option>Java SE</option>
			      <option>Java EE</option>
			      <option>Android</option>
			      <option>Certified Ethical Hacking (CEH)</option>
			      <option>Take2 Fee</option>


			      <!--<option>Road to Leadership (Event)</option>-->
			    </select>
				<div id="cp-error" class="help-block with-errors"></div>
              </div>
            </div>

              <div class="clearfix"></div>
            <div id="hasErrorAmount" class="form-group">
              <label class="error" id="amount_error_msg"></label>
              <label for="recharge_labbel"  class="col-xs-4 control-label lableclass amount-lbl">Amount (Taka)</label>
              <div class="col-sm-4 col-xs-8  mobile_other mobile_data">
                <input type="number" name="amount" step="0.01" class="form-control" id="amountToRecharge" required placeholder="Put desired amount" data-error="Put desired amount"  autocomplete="off" >
                <div id="amount-error" class="help-block with-errors"></div>
              </div>
            </div>

            <div class="form-group ">
              <div class="col-xs-offset-4 col-xs-8 button_sub">
                <button type="submit" name="submit" id="submit-btn" class="btn btn-success recharge" disabled>Pay Now</button>
              </div>
            </div>
          </form>
        </div>
        <p>By clicking pay now, I accept Global Skills Development Agency<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Terms & Conditions.</a></p>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4>Terms &amp; Conditions</h4>
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>If you want to make any change regarding your training, please inform us as 3 days before.</li>
                  <li>If you have accidentally chosen the wrong training name just send us email to <b>info@globalskills.com.bd</b> & we are here to support you. </li>
                  <li>Once paid, no refund in allowed, you can only reschedule the training.</li>
                  <li>Please feel free to contact us if you need any further information. Contact No: <b>01766343434</b>,<b>01309004240</b>,<b>01711958556</b>.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="logo_bank row">
        <div class="bankCard col-md-6 col-xs-7">
          <ul>
            <li><img src="images/all-bank-img.png" alt="visa"></li>
          </ul>
        </div>
        <div class="logoBottom col-md-6 text-right"> <a href="http://www.portwallet.com/" target="_blank"><img src="{{asset('images/powered-by-portwallet.png')}}" alt="PortWallet"></a> </div>
        <p>Need help? Email us at <a href="mailto:info@globalskills.com.bd">info@globalskills.com.bd</a>.</p>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('code.jquery.com/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/validator.min.js')}}"></script>
<script>
	$("#amountToRecharge").on('keyup', function(){
		var amount = parseFloat($(this).val());

		if(amount < 10){
			 $("#amount-error").html('<p style="color:#008BD3">The minimum pay amount limit is BDT 10.</p>');
			$("#submit-btn").attr("disabled",true);
		}else if(amount>500001){
			 $("#amount-error").html('<p style="color:#008BD3">Highest payment amount is BDT 500000 in a single transaction.</p>');
			$("#submit-btn").attr("disabled",true);
			return false;
		}
		else{
		  $("#amount-error").html('');
		  $("#submit-btn").attr("disabled",false);
		}

	})

  $("#mobile_number").on('keyup', function(){
    var cp = $(this).val();
    if(cp != ''){
      if(cp.length>10){
        $("#mobile-error").html('');
      } else {
         $("#mobile-error").html('');
      }
    } else {
        $("#mobile-error").html('<p style="color:#008BD3">Enter your mobile number</p>');
    }
  })


  //check name
  var yourInput = $("#customer_phone");
  yourInput.keyup(function() {
        yourInput.val((yourInput.val().replace(/[0-9]/g,'')))
    })


	$(document).ready(function () {
	  //called when key is pressed in textbox
	  $("#amountToRecharge").keypress(function (e) {
	     //if the letter is not digit then display error and don't type anything
	     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
	        //display error message
	        $("#amount-error").html("Digits Only").show();
	               return false;
	    }
	   });
	});

</script>

</body>

<!-- Mirrored from portwallet.globalskills.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Nov 2021 08:45:34 GMT -->
</html>
