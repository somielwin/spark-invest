<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>SparkInvest | Home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/style.css" media="all"/>
<style type="text/css">
	.pace {
		  -webkit-pointer-events: none;
		  -moz-pointer-events: none;
		  -ms-pointer-events: none;
		  pointer-events: none;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  -webkit-transition: all 0.5s ease;
		  -moz-transition: all 0.5s ease;
		  -ms-transition: all 0.5s ease;
		  -o-transition: all 0.5s ease;
		  transition: all 0.5s ease;
		  background: #f6fcf8; }

		.pace-inactive {
		  opacity: 0;
		  filter: alpha(opacity=0); }

		.pace .pace-progress {
		  z-index: 2000;
		  position: fixed;
		  top: 0;
		  right: 100%;
		  width: 100%;
		  height: 2px;
		  background: rgba(255, 255, 255, 0.8); }
		  @media (max-width: 767px) {
		    .pace .pace-progress {
		      display: none;
		      opacity: 0;
		      visibility: hidden; } }

		.pace-done #main-container { opacity: 1; }
</style>
<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
<script src="js/html5.js"></script>
<script src="js/lib/modernizr-2.8.3.min.js"></script>
<script src="js/pace.min.js"></script>

</head>
<body>
<section id="main-container">
	<div class="popup-wrap" id="error-message">
		<div class="popup-content">
			<a href="#" class="closepop"><span class="spark-icon icon-X"></span></a>
			<h4>Error Message</h4>
			<div class="popup-content-text">
				<h6>Error Title</h6>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
		</div>
	</div>
	<section id="main-wrapper">
		<div class="survey-header">
			<div class="logo"><a href="#"><img src="images/logo-new.svg" alt=""></a></div>
		</div>
		<div class="survey-wrap">
			<div class="container">
				<div class="survey-title">
					<h1>SparkInvest’s Rookie Investor Questionnaire</h1>
					<p>So you want to become a Rookie Investor? Don’t worry, SparkInvest got you! This survey will help us get to know you, your goals, and how we can help you achieve them. This way, we can spark those goals better, faster, together! <br> <strong>Ready?</strong></p>
				</div>
				<form id="survey-form" class="active" action="" method="POST">
					<div class="wavy-loader">
						<span></span><span></span><span></span>
					</div>
					<div class="input-wrap" id="required-field">
						<label for="">How old are you? <span class="required">*</span></label>
						<input id="survey-age" type="tel" name="question1" value="" maxLength="2" placeholder="Your Answer">
						<div class="required-field text-left"><p>This is a required question</p></div>
					</div>
					<div id="q1-wrap" class="input-wrap">
						<label for="">1. Without thinking about it too much, do you have a definite goal in mind for the near future? A car? A Eurotrip? Your first house?</label>
						<div class="custom-radio">
							<input type="radio" id="radio01" name="r-q1" value="Yes."/>
							<label for="radio01"><span></span>Yes.</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio02" name="r-q1" value="Not really."/>
							<label for="radio02"><span></span>Not really.</label>
						</div>
					</div>
					<div id="q2-wrap" class="input-wrap">
						<label for="">2. Tell us about them! (Don't be shy. You can check more than one box!)</label>
						<div class="wing-checkbox">
							<input type="checkbox" id="c-house" value="House"/>
							<label for="c-house">House</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="c-car" value="Car"/>
							<label for="c-car">Car</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="c-travel" value="Travel"/>
							<label for="c-travel">Travel</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="c-busines" value="Business"/>
							<label for="c-busines">Business</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="c-future" value="Future life events"/>
							<label for="c-future">Future life events</label>
						</div>
					</div>
					<div id="q3-wrap" class="input-wrap">
						<label for="">3. How much per month would you be willing to invest to help reach your goals?</label>
						<div class="wing-checkbox">
							<input type="checkbox" id="a-options1" value="Php 2,000 or below"/>
							<label for="a-options1">Php 2,000 or below</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="a-options2" value="Php 5,000"/>
							<label for="a-options2">Php 5,000</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="a-options3" value="Php 10,000"/>
							<label for="a-options3">Php 10,000</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="a-options4" value="Php 15,000 or higher"/>
							<label for="a-options4">Php 15,000 or higher</label>
						</div>
					</div>
					<div id="q4-wrap" class="input-wrap">
						<label for="">4. How much would you be willing to invest with SparkInvest for starters?</label>
						<input type="text" name="" value="" placeholder="Your Answer">
					</div>
					<div id="q5-wrap" class="input-wrap">
						<label for="">5. How exactly do you plan to achieve your goals?</label>
						<div class="wing-checkbox">
							<input type="checkbox" id="i-options1" value="Save money in a bank."/>
							<label for="i-options1">Save money in a bank.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="i-options2" value="Take out a loan."/>
							<label for="i-options2">Take out a loan.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="i-options3" value="Invest."/>
							<label for="i-options3">Invest.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="i-options4" value="Run a business."/>
							<label for="i-options4">Run a business.</label>
						</div>
						<div class="i-others">
							<div class="wing-checkbox">
								<input type="checkbox" id="i-options-other" value="Others"/>
								<label for="i-options-other">Others</label>
							</div>
							<input type="text" id="" name="" />
						</div>
					</div>
					<div id="q6-wrap" class="input-wrap">
						<label for="">6. If you're aware of investing as a means for growing your wealth, what's keeping you from trying it? (You can check more than one.)</label>
						<div class="wing-checkbox">
							<input type="checkbox" id="m-options1" value="I don’t think I have enough money."/>
							<label for="m-options1">I don’t think I have enough money.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="m-options2" value="I think it’s risky."/>
							<label for="m-options2">I think it’s risky.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="m-options3" value="I don't have the time to explore it."/>
							<label for="m-options3">I don't have the time to explore it.</label>
						</div>
						<div class="wing-checkbox">
							<input type="checkbox" id="m-options4" value="I feel like staying updated on the market is a big hassle."/>
							<label for="m-options4">I feel like staying updated on the market is a big hassle.</label>
						</div>
						<div class="i-others">
							<div class="wing-checkbox">
								<input type="checkbox" id="m-options-other" value="Others"/>
								<label for="m-options-other">Others</label>
							</div>
							<input type="text" name="radio" value="" />
						</div>
					</div>
					<div id="q7-wrap" class="input-wrap">
						<label for="">7. (Refer to Q# 6) Do you feel that if these issues are addressed, you'll try investing?</label>
						<div class="custom-radio">
							<input type="radio" id="radio03" name="r-q7" value="Definitely. Why not?"/>
							<label for="radio03"><span></span>Definitely. Why not?</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio04" name="r-q7" value="Nope. Not right now."/>
							<label for="radio04"><span></span>Nope. Not right now.</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio05" name="r-q7" value="I don't know enough to have an answer."/>
							<label for="radio05"><span></span>I don't know enough to have an answer.</label>
						</div>
					</div>
					<div id="q8-wrap" class="input-wrap">
						<label for="">8. Do you pay for anything using your phone?</label>
						<div class="custom-radio">
							<input type="radio" id="radio07" name="r-q8" value="Yes, with Paypal, banking apps, and the like."/>
							<label for="radio07"><span></span>Yes, with Paypal, banking apps, and the like.</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio08" name="r-q8" value="Never! What if my phone gets stolen?"/>
							<label for="radio08"><span></span>Never! What if my phone gets stolen?</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio09" name="r-q8" value="No, I just haven't bothered trying yet."/>
							<label for="radio09"><span></span>No, I just haven't bothered trying yet.</label>
						</div>
					</div>
					<div id="q9-wrap" class="input-wrap">
						<label for="">9. How open would you be to using an investing app?</label>
						<div class="custom-radio">
							<input type="radio" id="radio10" name="r-q9" value="Investing just isn't in my plans right now." />
							<label for="radio10"><span></span>Investing just isn't in my plans right now.</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio11" name="r-q9" value="That would be great. I’m very interested."/>
							<label for="radio11"><span></span>That would be great. I’m very interested.</label>
						</div>
						<div class="custom-radio">
							<input type="radio" id="radio12" name="r-q9" value="I'm interested in investing, but that sounds risky."/>
							<label for="radio12"><span></span>I'm interested in investing, but that sounds risky.</label>
						</div>
					</div>

					<div class="input-wrap text-center">
						<input class="btn btn-orange" type="submit" name="" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</section>
</section>

<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/jquery-ui.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		var mOptions = false;
		var iOptions = false;

		$('#m-options-other').change(function() {
			if($(this).is(':checked')) {
	       		$(this).closest('.i-others').find('input[type="text"]').css({'visibility' : 'visible', 'opacity' : '1'});
	       		mOptions = true;
	       	} else {
	       		$(this).closest('.i-others').find('input[type="text"]').css({'visibility' : 'hidden', 'opacity' : '0'});
	       	}
		});

		$('#i-options-other').change(function() {
			if($(this).is(':checked')) {
	       		$(this).closest('.i-others').find('input[type="text"]').css({'visibility' : 'visible', 'opacity' : '1'});
	       		iOptions = true;
	       	} else {
	       		$(this).closest('.i-others').find('input[type="text"]').css({'visibility' : 'hidden', 'opacity' : '0'});
	       	}
		});


       	$('#survey-form').submit(function(e){
	        e.preventDefault();
	        $('#required-field:not(.no-error)').addClass('error');

			if( !$('#survey-age').val() == '') {
	            $('#survey-age').closest('#required-field').removeClass('error');
	            isvalidate = true;
	        } else {
	            isvalidate = false;
	        }

			if(!$('#survey-age').val() == '') {
				var age = $('#survey-age').val();
				$('#survey-form').addClass('active');

				var q1 = $('#q1-wrap  input[type="radio"]:checked, #q1-wrap  input[type="checkbox"]:checked').val();

				var q2 = [];
				$('#q2-wrap  input[type="radio"]:checked, #q2-wrap  input[type="checkbox"]:checked').each(function () {
					var mOptions2 = $(this).val();
					q2.push(mOptions2);
				});

				var q3 = [];
				$('#q3-wrap  input[type="radio"]:checked, #q3-wrap  input[type="checkbox"]:checked').each(function () {
					var mOptions3 = $(this).val();
					q3.push(mOptions3);
				});

				var q4 = $('#q4-wrap input[type="text"]').val();
				var q5 = [];
				$('#q5-wrap  input[type="radio"]:checked, #q5-wrap  input[type="checkbox"]:checked').each(function () {
					if ($(this).val() == "Others") {
						var mOptions5 = $(this).val()+': '+$('#q5-wrap input[type="text"]').val();
					} else {
						var mOptions5 = $(this).val();
					}
					q5.push(mOptions5);
				});
				var q6 = [];
				$('#q6-wrap  input[type="radio"]:checked, #q6-wrap  input[type="checkbox"]:checked').each(function () {
					if ($(this).val() == "Others") {
						var mOptions6 = $(this).val()+': '+$('#q6-wrap input[type="text"]').val();
					} else {
						var mOptions6 = $(this).val();
					}
					q6.push(mOptions6);
				});
				var q7 = $('#q7-wrap  input[type="radio"]:checked, #q7-wrap  input[type="checkbox"]:checked').val();
				var q8 = $('#q8-wrap  input[type="radio"]:checked, #q8-wrap  input[type="checkbox"]:checked').val();
				var q9 = $('#q9-wrap  input[type="radio"]:checked, #q9-wrap  input[type="checkbox"]:checked').val();

				var _data = {
					'1': age,
					'2': q1,
					'3': q2,
					'4': q3,
					'5': q4,
					'6': q5,
					'7': q6,
					'8': q7,
					'9': q8,
					'10': q9,
				};



				$.ajax({
					url: 'form-process/submit.php',
					type: "POST",
					data: _data,
					success: function(response) {
						if (response == 1) {
							$('#survey-form').hide();
							$('.survey-title p').html('Thank you for taking the time to answer the SparkInvest’s Rookie Investor Questionnaire!  We hope that by answering this survey, you were able to understand your #lifegoals better! We sure did!');
						} else {
							$('#error-message').addClass('active');
						}
					}
				});

			} else {
				e.preventDefault();
				$('html,body').animate({
				   scrollTop: $("#survey-form").offset().top
				});

	            return false;
			}
		});

		$('#error-message .closepop').click(function(){
			$('#survey-form').show(300);
			$('#survey-form').removeClass('active');
		});
	});

</script>
</body>
</html>
