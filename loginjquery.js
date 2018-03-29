// JavaScript Document
$(document).ready(function(e) {
    	//jquery login code starts here 
	 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		 var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "loginpdo.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 	 $("#success").html("Login sucessful  <i class='material-icons'>done</i>.. redirecting  ");
			$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "login_redirect.php"; ',4000);
			 
			}
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").html(' Login Failed &nbsp; <i class="material-icons">report_problem</i> ');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").html('<i class="material-icons">loop</i> &nbsp; sending ...');   
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	
	//jquery logincode ends here 
	
	
	
});