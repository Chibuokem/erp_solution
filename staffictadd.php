<?php
session_start();
if($_SESSION[department] !=='ict'){
header( "location:index.php");	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="class.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="materialize/js/jquery-3.1.1.min.js" type="text/javascript" ></script>

<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
<script src="project.js"></script>
<title>Ict </title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>

<body>
	<div class="wrapper">
    	<nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a>               
                          <ul class="right hide-on-med-and-down">
                            <li><a href="ict.php">Home</a></li>
                            <li><a href="badges.html">Upload</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                              <li><a href="sendmessage.php">Send Message</a></li>
                            <li><a href="mymessages.php">View Messages</a></li>
                             <li><a href="staffictadd.php">Add staff</a></li>
                            <li><a href="sitepictures.php">Edit Civil pictures</a></li>
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                          <ul class="side-nav" id="mobile-demo">
                            <li><a href="ict.php">Home</a></li>
                            <li><a href="badges.html">Upload</a></li>
                            
                            <li><a href="viewdocuments.php">Documents</a></li>
                             <li><a href="sendmessage.php">Send Message</a></li>
                             <li><a href="mymessages.php">View Message</a></li>
                          <li><a href="sitepictures.php">Edit Civil pictures</a></li>
                            <li><a href="staffictadd.php">Add staff</a></li>
                           <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </div>
               </nav>
    	<div class="container">
        
        <div class="row">
        <h5 class="center-align">Welcome <?php echo $_SESSION[name]; ?></h5>		 
        </div>          
                  
    <div class="row">
     <h6 class="center-align">Add Staff</h6>
    <form class="col s12 m12"  id="staffform" action='javascript;'>
      <div class="row">
        <div class="input-field col s12 m4">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='first_name' required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="last_name" type="text" class="validate" name='last_name' required>
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="surname" type="text" class="validate" name='surname' required>
          <label for="surname">Surname</label>
        </div>
        
      </div>
      
       <div class="row">
        <div class="input-field col s12 m4">
          <input id="age" type="number" class="validate" name='Age' required>
          <label for="age">Age</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="department" type="text" class="validate" name='department' required>
          <label for="department">Department</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="address" type="text" class="validate" name='address' required>
          <label for="department">Address</label>
        </div>
        
        
      </div>
      
       <div class="row">
        <div class="input-field col s12 m4">
          <input id="local_govt" type="text" class="validate" name='local_govt' required>
          <label for="localgovt">Local goverment</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="state_of_origin" type="text" class="validate" name='stateoforigin' required>
          <label for="state_of_origin">State of Origin</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="email" type="email" class="validate" name='email' required>
          <label for="email">Email</label>
        </div>
        
        
      </div>
      
     <div class="row">
        <div class="input-field col s12 m4">
          <input id="bvn" type="text" class="validate" name='bvn' required>
          <label for="bvn">Bvn </label>
        </div>
         <div class="input-field col s12 m4">
          <input id="bank_name" type="text" class="validate" name='bankname' required>
          <label for="bank_name">Bank Name</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="account_number" type="text" class="validate" name='accountnumber' required>
          <label for="account_number">Account Number</label>
        </div>
        
        
      </div> 
      
      
      
      
      
     
      <div class="row">
        
      </div>
      <div class="row">
        <div class="input-field col s12 m4">
          
          <input type="date" class="datepicker" name="date_of_employement" id="date" required>
        
          <label for="date">Date of Employement</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="phone_number" type="tel" class="validate" name='phone' required>
          <label for="phone_number">Phone number</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="password" type="password" class="validate" name='password' required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="password2" type="password" class="validate" name='passwordd' required>
          <label for="password">Confirm Password</label>
        </div>
      </div>
      
      <button class="btn waves-effect waves-light" id='addstafff' >Add staff
                                        <i class="material-icons right">send</i>
     </button>
     
    </form>
     
    
  </div>
        
                  
                  
        
        
        
        
        
        
        
        
        
        </div>
    
    
    
    
    
    
    
    
    
    <?php include_once('footer.php'); ?>
    
    
    
    
    
    
    
    
    
    
    
    </div>




</body>
</html>