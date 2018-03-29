$( document ).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	 $("#uploadpic").click(function( q){
		    q.preventDefault();
			var file=$('#sitepicture').get(0).files[0];
			var img=file.type;
			var match1=['image/jpeg','image/png','image/jpg','image/gif'];
			if((img==match1[0])||(img==match1[1])||(img==match1[2])||(img==match1[3])){
				$.ajax({
					url:"siteupload.php",
					data:new FormData($('#sitepic')[0]),
					type:'POST',
					processData:false,
					contentType:false,
					success: function(data){
						
							
							Materialize.toast(data,5000,'blue');
						 
					}
				})
			}
	}
)
	
	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  
   $("#senddoc").click(function( e){
		    e.preventDefault();
			var file=$('#docfile').get(0).files[0];
							$.ajax({
					url:"documentupload.php",
					data:new FormData($('#documentform')[0]),
					type:'POST',
					processData:false,
					contentType:false,
					success: function(data){
						
							
							Materialize.toast(data,5000,'blue');
						 
					}
				})
			}
	
)
	 
	 
	$("#addstafff").click(function( x){
		x.preventDefault();
		var firstname= $("#first_name").val();
		var lastname=$("#last_name").val();
		var surname=$("#surname").val();
		var age=$("#age").val();
		var department=$("#department").val();
		var address=$("#address").val();
		var localgovt=$("#local_govt").val();
		var stateoforigin=$("#state_of_origin").val();
		var email =$("#email").val();
		var bvn=$("#bvn").val();
		var bankname=$("#bank_name").val();
		var accountnum=$("#account_number").val();
		var dateofemployement=$("#date").val();
		var phone=$("#phone_number").val();
		var password=$("#password").val();
		
		if (firstname==""){
		  	 Materialize.toast('Please fill in firstname', 4000,'red rounded');
		}
		else if (lastname==""){
		  	 Materialize.toast('Please fill in lastname', 4000,'red rounded');
		}
		else if (surname==""){
		  	 Materialize.toast('Please fill in surname', 4000,'red rounded');
		}
		else if (age==""){
		  	 Materialize.toast('Please fill in age', 4000,'red rounded');
		}
		else if (department==""){
		  	 Materialize.toast('Please fill in department', 4000,'red rounded');
		}
		else if (address==""){
		  	 Materialize.toast('Please fill in address', 4000,'red rounded');
		}
		else if (localgovt==""){
		  	 Materialize.toast('Please fill in local goverment', 4000,'red rounded');
		}
		else if (stateoforigin==""){
		  	 Materialize.toast('Please fill in state of origin', 4000,'red rounded');
		}
		else if (localgovt==""){
		  	 Materialize.toast('Please fill in local goverment', 4000,'red rounded');
		}
		else if (password==""){
		  	 Materialize.toast('Please fill in password', 4000,'red rounded');
		}
		else if (phone==""){
		  	 Materialize.toast('Please fill in phone number', 4000,'red rounded');
		}
		else if (bankname==""){
		  	 Materialize.toast('Please fill in  bank name', 4000,'red rounded');
		}
		else if (accountnum==""){
		  	 Materialize.toast('Please fill in   account number', 4000,'red rounded');
		}
		else if (bvn==""){
		  	 Materialize.toast('Please fill in bvn number', 4000,'red rounded');
		}
		else if (dateofemployement==""){
		  	 Materialize.toast('Please fill in  date of employement', 4000,'red rounded');
		}
		
		else if (email==""){
		  	 Materialize.toast('Please fill in  Email Address ', 4000,'red rounded');
		}
		
		  else{
		  
		  var data = $("#staffform").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "staff_add.php",
		   data : data,
			  
		   success: function(data){
			    $("#addstafff").html('Staff added');
				
			   Materialize.toast(data, 4000,'blue rounded');
			
		   },
		   beforeSend:function()
		   {
			
			/* $("#errorr").fadeOut();*/
    $("#addstafff").html('<i class="material-icons">loop</i> &nbsp; sending ...');   
		   }
		   
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
		
		
		
		
		
		
		
		
	
		
	   /* var datastring = $("#staffform").serialize(true);

		$.ajax({
		method: 'POST',
		url: 'staff_add.php',
		data: datastring
		}).done(function(res){
		var res = $.trim(res); //the ajax response. you can alert it or whatever...
		alert("done");
		 Materialize.toast(res, 4000,'blue rounded');
		 
		 
		 
		 
		 
		});*/
		
		
	
	
	
	
	//email check if it already exists in the database 
		$("#email").blur(function(){
		
		var emailllll=$("#email").val();
		$.post("email_check.php", {email: emailllll} ,{})
			.done(function(data){
				
					
					Materialize.toast(data, 4000,'blue rounded');
				
			});
	
	});
	
	//confirm password
	$("#password2").blur(function(){
		
		var passs1=$("#password").val();
		var passs2=$("#password2").val();
		
		
		
		
		
			$.post("password_validation.php", {pass1: passs1,pass2:passs2} ,{})
			.done(function(data){
				
					
					 Materialize.toast(data, 5000,"blue");
				
			});
	
	});
	
	
	$("#contactuss").click(function(a){
		 a.preventDefault();
		var namee=$('#name').val();
		var emaill=$('#emailllll').val();
		var telephonee=$('#icon_telephone').val();
		var messagee=$('#textarea1').val();
		var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		var numbermatch=/\d{11}/;
		var numbercheck=telephonee.match(numbermatch);
		var emailcheck=emaill.match(pattern);
		
		if(numbercheck==null){
			Materialize.toast("Enter a valid Phone number", 5000,"red");
		}
		
		
		else if(emailcheck==null){
		   	 Materialize.toast("Enter a valid email address", 5000,"red");
		}
		
		   
		   else if(namee==""){
			  Materialize.toast("Enter name", 5000,"red"); 
		   }
		   else if(emaill==""){
			    Materialize.toast("Enter your email  ", 5000,"red"); 
		   }
		   
		    else if(telephonee==""){
			    Materialize.toast("Enter your phone number   ", 5000,"red"); 
		   }
		     else if(messagee==""){
			    Materialize.toast("Enter your message ", 5000,"red"); 
		   }
		else{
		
		
		
			$.post("customermessage.php", {message: messagee,email:emaill,telephone:telephonee,name:namee} ,{})
			.done(function(data){
				
				
						Materialize.toast(data, 5000,"blue");
			
					
			});
			
			
			 }
	
	});
	
	$('.slider').slider({full_width: true,indicators: false}); //this is to activate the siider
	$(".button-collapse").sideNav(); //this is to activate the mobile button side nav
	
	//this is for sending message from the customer
	
	
	
	
	
	
	
	//this is for sending message to staffs
	$("#sendmessage").click(function(g){
		 g.preventDefault();
		var messagee=$('#textarea').val();
		var idd=$('#parsedid').val();
		   if(messagee==""){
			  Materialize.toast("Enter message", 5000,"red"); 
		   }
		   else if(idd==""){
			    Materialize.toast("Search for staff before sending  ", 5000,"red"); 
		   }
		else{
		
		
		
			$.post("messagesender.php", {message: messagee,id:idd} ,{})
			.done(function(data){
				
				
						Materialize.toast(data, 5000,"blue");
			
					
			});
			
			
			 }
	
	});

	
	
	
	
	
	
	
	//This is for changing site comment 
	$("#changecomment").click(function(h){
		 h.preventDefault();
		var commentt=$('#newcomment').val();
		var idd=$('#commentid').val();
		   if(commentt==""){
			  Materialize.toast("Enter comment", 5000,"red"); 
		   }
		else{
		
		
		
			$.post("updatesitecomment.php", {comment: commentt,id:idd} ,{})
			.done(function(data){
				
				
						Materialize.toast(data, 5000,"blue");
			
					
			});
			
			
			 }
	
	});

	
	
	
	
	
	/*this is for updating site pictures*/
	 $("#updatepicc").click(function( i){
		    i.preventDefault();
			var file=$('#newpic').get(0).files[0];
			var img=file.type;
			var match1=['image/jpeg','image/png','image/jpg','image/gif'];
			if((img==match1[0])||(img==match1[1])||(img==match1[2])||(img==match1[3])){
				$.ajax({
					url:"siteupdatepic.php",
					data:new FormData($('#picupdate')[0]),
					type:'POST',
					processData:false,
					contentType:false,
					success: function(data){
						
							
							Materialize.toast(data,5000,'blue');
						 
					}
					
				})
			}
			
			else{
				Materialize.toast("File chosen is invalid or file is not a picture ",5000,'red');
			}
	}
)
	
	
	
	
	
	
	
	/*this is for searching for staff before the document is sent */
	 $("#check").click(function(f){
		      f.preventDefault();
				var departmentttt =$('#departmentt ').val();
		        var firstnameeee=$('#firstnamee').val();
				var searchfordoc="hi";
			if (departmentttt ==""){
			  $("#errorrr").text("Please enter staff department!! ");	
			}
			else if(firstnameeee==""){
			  	 $("#errorrr").text("Please enter staff Name!! ");
			}
			else{	
				
			$.get("search_staff_doc.php", {department: departmentttt,firstname:firstnameeee,searchfordoc:searchfordoc} ,{})
			.done(function(data){
				//$("#confirmbook").html(data);
				try {   //to check whether response from server is a jason object .
                  json = $.parseJSON(data);
				  var obj = JSON.parse(data)
			    var j=obj[0];
				var result= j.surname+" "+j.first_name;
			
				
		
				$("#result").text("Staff name is "+result +" and staff department is "+j.department+" Click the send button below to send  to the staff");
				$("#parsedid").val(j.id);
				
				  
             } catch (e) {
             // not json

				  	 $("#errorrr").text(data);
               }
				 
			
			});

			}
	
	
	
	
	
	
	
	//This is for sending of document 
	
//this is for  scrolling to the top


	
	
	
	
	
	
	
	
	


	
	
	

	});
	
	
	
	//This is for updating the staffs 
	
	
		 $("#staffupdating").click(function( z){
		z.preventDefault();
		var firstnamee= $("#first_name").val(); 
		var lastnamee=$("#last_name").val();
		var surnamee=$("#surname").val();
		var agee=$("#age").val();
		var departmentt=$("#department").val();
		var addresss=$("#address").val();
		var localgovtt=$("#local_govt").val();
		var stateoforiginn=$("#state_of_origin").val();
		var emaill =$("#email").val();
		var bvnn=$("#bvn").val();
		var banknamee=$("#bank_name").val();
		var accountnumm=$("#account_numberr").val();
		var dateofemployementt=$("#date").val();
		var phonee=$("#phone_number").val();
		var passwordd=$("#password").val();
		var idd=$("#identifier").val();
		var patternn = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		var emailcheckk=emaill.match(patternn);
		var numbermatchh=/\d{11}/;
		var numbercheckkk=phonee.match(numbermatchh);
		
		if (firstnamee==""){
		  	 Materialize.toast('Please fill in firstname', 4000,'red rounded');
		}
		else if(emailcheckk==null){
		   	 Materialize.toast("Enter a valid email address", 5000,"red");// to verify email input 
		}
		else if(numbercheckkk==null){
		   	 Materialize.toast("Enter a valid phone number ", 5000,"red");// to verify phone number input 
		}
		else if (lastnamee==""){
		  	 Materialize.toast('Please fill in lastname', 4000,'red rounded');
		}
		else if (surnamee==""){
		  	 Materialize.toast('Please fill in surname', 4000,'red rounded');
		}
		else if (agee==""){
		  	 Materialize.toast('Please fill in age', 4000,'red rounded');
		}
		else if (departmentt==""){
		  	 Materialize.toast('Please fill in department', 4000,'red rounded');
		}
		else if (addresss==""){
		  	 Materialize.toast('Please fill in address', 4000,'red rounded');
		}
		else if (localgovtt==""){
		  	 Materialize.toast('Please fill in local goverment', 4000,'red rounded');
		}
		else if (stateoforiginn==""){
		  	 Materialize.toast('Please fill in state of origin', 4000,'red rounded');
		}
		else if (localgovtt==""){
		  	 Materialize.toast('Please fill in local goverment', 4000,'red rounded');
		}
		else if (passwordd==""){
		  	 Materialize.toast('Please fill in password', 4000,'red rounded');
		}
		else if (phonee==""){
		  	 Materialize.toast('Please fill in phone number', 4000,'red rounded');
		}
		else if (banknamee==""){
		  	 Materialize.toast('Please fill in  bank name', 4000,'red rounded');
		}
		else if (accountnumm==""){
		  	 Materialize.toast('Please fill in   account number', 4000,'red rounded');
		}
		else if (bvnn==""){
		  	 Materialize.toast('Please fill in bvn number', 4000,'red rounded');
		}
		else if (dateofemployementt==""){
		  	 Materialize.toast('Please fill in  date of employement', 4000,'red rounded');
		}
		
		else if (emaill==""){
		  	 Materialize.toast('Please fill in  Email Address ', 4000,'red rounded');
		}
		else{
		
	    //var datastring = $("#updateestaff").serialize(true);
		
		
		$.post("staffupdate.php", {firstname:firstnamee,lastname:lastnamee,surname:surnamee,Age:agee,department:departmentt,address:addresss,localgovt:localgovtt,stateoforigin:stateoforiginn,email:emaill,bvn:bvnn,bankname:banknamee,accountnumber:accountnumm,dateofemployement:dateofemployementt,phone:phonee,password:passwordd, id:idd} ,{})
			.done(function(data){
				//alert(data);
				//var $toastContent = $('<span>Login Successful</span>');
						Materialize.toast(data, 5000,'blue rounded');
		
			});
		
		}});
	
	
	

	
	
	

});
	
	
	  