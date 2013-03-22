<!-- Only Character validatoin -->
function NoNumbers(e)
{
 var key;
 var keychar;

 if (window.event)
   key = window.event.keyCode;
 else if (e)
   key = e.which;
 else
   return true;
 keychar = String.fromCharCode(key);
 // control keys
 if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) || (key==32) )
 {
   return true;
 }
 else if ((("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ").indexOf(keychar) > -1))
 {
   return true;   
 }
 else
 {   
   return false;
 }
}
<!-- End Of Character Validation-->


<!-- Form Validation  -->
function chk(qhtestimonial)
	{
//var exp=/^[A-Z,a-z]+$/
if(qhtestimonial.product.value=="")
		{
			alert("Select The Product");
				document.qhtestimonial.product.focus();
			return false;			
		}
		if(qhtestimonial.textarea_comment.value=="")
		{

			alert("Enter Comment");
				document.qhtestimonial.textarea_comment.focus();
			return false;
		}
		if(qhtestimonial.txt_FirstName.value=="")
		{
			alert("Enter First Name");
				document.qhtestimonial.txt_FirstName.focus();
			return false;
		}		
		if(qhtestimonial.txt_LastName.value=="")
		{
			alert("Enter Last Name");
				document.qhtestimonial.txt_LastName.focus();
			return false;
		}	
		if(qhtestimonial.EmailID.value=="")
		{
			alert("Enter Email-ID");
				document.qhtestimonial.EmailID.focus();
			return false;
		}	
		if(qhtestimonial.sel_Country.value=="")
		{
			alert("Select the Country");
				document.qhtestimonial.sel_Country.focus();
			return false;			
		}
		if(qhtestimonial.txt_StateProvinceRegion.value=="")
		{
			alert("Enter State / Province / Region");
				document.qhtestimonial.txt_StateProvinceRegion.focus();
			return false;
		}
		if(qhtestimonial.rating.value=="")
		{
			alert("give Us Rating");
				document.qhtestimonial.rating.focus();
			return false;
		}
		if(qhtestimonial.letters_code.value=="")
		{
			alert("Type the Above Code");
				document.qhtestimonial.letters_code.focus();
			return false;
		}
	
		
	}
<!-- End Of Form Validation-->
<!-- Reting validation-->
function output1()
{
alert("Bad");
}
function output2()
{
alert("Avrage");
}
function output3()
{
alert("Good");
}
function output4()
{
alert("VeryGood");
}
function output5()
{
alert("Excellent");
}
<!-- End of Rating validation -->

<!-- email imp if -->

    function checkUncheck() { 
    $('#notify').click(function() {
        if (this.checked) {
            $(".imp").show();
        } else {
            $(".imp").hide();
        }
    }); 
}
<!-- -->
