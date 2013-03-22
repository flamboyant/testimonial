<?php include("Liabraries/function.php");
$countrys = country();
$products = product();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testimonial Form</title>
	
	<meta charset="utf-8">


	<link href="css/structure.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
	<link href="css/rating/starrating.css" rel="stylesheet" type="text/css" media="screen" />

	<script src="./scripts/rating/jquery.min.js" type="text/javascript"></script>
	<script src="scripts/rating/rating_js.js" type="text/javascript"></script>
	<script src="scripts/rating/starrating.js" type="text/javascript"></script>
	<script src="scripts/qh_jequery.js"></script>
	<script type='text/javascript'>
	function refreshCaptcha()
	{
		var img = document.images['captchaimg'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
	</script>
</head>


<body id="public">
	<div id="container" class="ltr">
		<h1 id="logo"> <a href="http://www.quickheal.com" title="Powered by quickheal">Quick Heal</a> </h1>
		<header id="header" class="info">
			<div class="powertiny"> <a href="http://quickheal.com/" title="Powered by quickheal"> <span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block; visibility:visible; text-indent:-9000px; position:static; overflow:auto; width:80px; height:80px "></span> </a> </div>
				<h2>Testimonial Form</h2>
			<div>Please let us know what you think.</div>
		</header>
		<form method="post" name="qhtestimonial" class="quickheal topLabel page" autocomplete="off" action="./Liabraries/testimonial.php" onSubmit="return chk(this);" >
		<ul class="ul1">
        <li id="foli1"> <div class="imp"> Fields marked as a * are mandatory.  </div> </li>
			<li id="foli1">
				<fieldset>
					<label id="title1" class="desc">Which product did you buy? <em class="imp">*</em></label>
					<?php echo $products; ?>
				</fieldset>
			</li>

			<li id="foli18">
			  <div>
					<label class="desc" id="q1" > Give your opinion about the product <em class="imp">*</em> </label>
					<textarea name="textarea_comment" id="textarea_comment" spellcheck="true" rows="10" cols="60" tabindex="12" ></textarea>
			  </div>
			</li>

			<li>
				<div class="formrow requiredRow">
					<label for="txt_FirstName" id="FirstName-ariaLabel" name="FirstName-ariaLabel" > <strong>First Name </strong><em class="imp">*</em></label>
					<input id="txt_FirstName" name="txt_FirstName" type="text" onkeypress =" return NoNumbers(event) " class="required" title="First Name. This is a required field">
				</div>
			</li>

			<li>
				<div class="formrow requiredRow">
					<label for="txt_LastName" id="LastName-ariaLabel" ><strong>Last Name</strong><em class="imp">*</em></label>
					<input id="txt_LastName" name="txt_LastName" onkeypress =" return NoNumbers(event)  " type="text"  class="required" title="Last Name. This is a required field">
				</div>
			</li>

			<li>
				<div class="formrow requiredRow">
					<label for="EmailID" id="EmailID-ariaLabel"><strong>Email ID</strong> <em class="imp">*</em> </label>
					<input id="EmailID" name="EmailID" type="email" aria-labelledby="EmailID-ariaLabel" class="required" title="Email ID. This is a required field">
				</div>
			</li>

			

			<li>
				<div class="formrow requiredRow">
					<label for="sel_Country" id="Country-ariaLabel"><strong>Country</strong><em class="imp">*</em></label>
					<?php echo $countrys; ?>
				</div>
			</li>
			<li>
				<div class="formrow requiredRow">
					<label for="txt_StateProvinceRegion" id="StateProvinceRegion-ariaLabel"><strong>State / Province / Region</strong><em class="imp">*</em></label>
					<input id="txt_StateProvinceRegion" name="txt_StateProvinceRegion" onkeypress =" return NoNumbers(event)" type="text" aria-labelledby="StateProvinceRegion-ariaLabel" class="required" title="State / Province / Region. This is a required field">
				</div>
			</li>

			<li>
					<div class="formrow requiredRow">
						<label for="txt_StateProvinceRegion" id="StateProvinceRegion-ariaLabel"><strong>Give Rating to Our Product</strong><em class="imp">*</em></label>
					</div>
			</li>
			
			<li>
				<div class="formrow requiredRow">
					<input type="radio" name="rating" id="rating1" onClick="output1()" value="1"/>1
					<input type="radio" name="rating"  id="rating2" onClick="output2()" value="2"/>2
					<input type="radio" name="rating" id="rating3" onClick="output3()" value="3"/>3
					<input type="radio" name="rating" id="rating4" onClick="output4()" value="4"/>4
					<input type="radio" name="rating" id="rating5" onClick="output5()" value="5"/>5
				</div>
			</li>
			<li>
				<div class="formrow requiredRow">
				
					<label for="EmailID" id="EmailID-ariaLabel"><input type="checkbox" name="notify" id="notify" value="1" > <strong> Notify me of future offers </strong> </label>
				</div>
			</li>
            
			<li>
				<div>
					<table width="400" border="0" align="left" cellpadding="5" cellspacing="1" class="table" >
					<?php if(isset($msg)){?>
						<tr>
							<td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
						</tr>
					<?php } ?>
						<tr>
							<td align="right" valign="top">Validation code:<em class="imp">*</em></td>
							<td><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg'><br>
							<label for='message'>Enter the code above here :</label>
							<br>
							<input id="6_letters_code" name="letters_code" type="text">
							<br>
							Can't read the image? click<a href='javascript:refreshCaptcha();'>here</a>to refresh
							</td>
						</tr>
					</table>
				</div>
			</li>
		
			<li>
				<div align="center">
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="reset" />
				</div>
			</li>
			
			<li>
				<div align="center" class="bottom">Quick Heal Technologies Pvt Lmt</div>
			</li>
		</ul>
	</form>
	</div>
	</body>
</html>




