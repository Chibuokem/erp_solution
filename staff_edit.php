<?php require_once('displaystaff.php');  ?>
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
<title>ICT </title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>
</head>

<body>
	<div class="wrapper">
    
    	  <ul id="dropdown1" class="dropdown-content" style="background-color">
             <li><a href="customers_message.php">customers</a></li>
              <li><a href="mymessages.php">Personal</a></li>
               <li><a href="sendmessage.php">Send</a></li>
             <!-- <li class="divider"></li>
              <li><a href="#!">three</a></li>-->
            </ul>
    	  <nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                        <!-- Dropdown Structure -->
            
                        
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>               
                          <ul class="right hide-on-med-and-down">
                            <li><a href="ict.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                             
                           
                             <li><a href="staffictadd.php">Add staff</a></li>
                            <li><a href="sitepictures.php">Edit Civil pictures</a></li>
                            <li><a href="#" class="dropdown-button" data-activates="dropdown1">Messages</a></li>
                             
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                          <ul class="side-nav" id="mobile-demo">
                            <li><a href="ict.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                             <li><a href="sendmessage.php">Send Message</a></li>
                             <li><a href="mymessages.php">View Message</a></li>
                          <li><a href="sitepictures.php">Edit Civil pictures</a></li>
                           <li><a href="customers_message.php">Messages(contact us)</a></li>
                            <li><a href="staffictadd.php">Add staff</a></li>
                           <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </div>
               </nav>
    	<div class="container">
        
        <div class="row">
        <h5 class="center-align">ICT</h5>		 
        </div>          
                  
    <div class="row">
     <h6 class="center-align">Edit Staff</h6>
     <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
    <form class="col s12 m12" id="updateestaff" method='post'>
      <div class="row">
       <input type='text' value=" <?php echo $row['id']; ?> " class='hide' name='id' id="identifier">
        <div class="input-field col s12 m4">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" value='<?php  echo $row['first_name'];  ?>' name='firstname'>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="last_name" type="text" class="validate" value='<?php  echo $row['last_name'];  ?>' name='lastname'>
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="surname" type="text" class="validate" name='surname' value='<?php  echo $row['surname'];  ?>'>
          <label for="surname">Surname</label>
        </div>
        
      </div>
      
       <div class="row">
        <div class="input-field col s12 m4">
          <input id="age" type="number" class="validate" name='Age' value='<?php  echo $row['Age'];  ?>'>
          <label for="age">Age</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="department" type="text" class="validate" name='department' value='<?php  echo $row['department'];  ?>'>
          <label for="department">Department</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="address" type="text" class="validate" name='address' value='<?php  echo $row['address'];  ?>'>
          <label for="department">Address</label>
        </div>
        
        
      </div>
      
       <div class="row">
        <div class="input-field col s12 m4">
          <input id="local_govt" type="text" class="validate" name='localgovt' value='<?php  echo $row['localgovt'];  ?>'>
          <label for="local_govt">Local goverment</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="state_of_origin" type="text" class="validate" name='stateoforigin' value='<?php  echo $row['stateoforigin'];  ?>'>
          <label for="state_of_origin">State of Origin</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="email" type="email" class="validate" name='email' value='<?php  echo $row['email'];  ?>'>
          <label for="email">Email</label>
        </div>
        
        
      </div>
      
     <div class="row">
        <div class="input-field col s12 m4">
          <input id="bvn" type="text" class="validate" name='bvn' value='<?php  echo $row['bvn'];  ?>'>
          <label for="bvn">Bvn </label>
        </div>
         <div class="input-field col s12 m4">
          <input id="bank_name" type="text" class="validate" name='bankname' value='<?php  echo $row['bankname'];  ?>'>
          <label for="bank_name">Bank Name</label>
        </div>
         <div class="input-field col s12 m4">
          <input id="account_numberr" type="text" name='accountnumber' class="validate" name='accountnumber' value='<?php  echo $row['accountnumber'];  ?>' >
          <label for="account_numberr">Account Number</label>
        </div>
        
        
      </div> 
      
      
      
      
      
     
      <div class="row">
        
      </div>
      <div class="row">
        <div class="input-field col s12 m4">
          
          <input type="date" class="datepicker" name="dateofemployement" id="date" value='<?php  echo $row['dateofemployement'];  ?>' >
        
          <label for="date">Date of Employement</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="phone_number" type="tel" class="validate" name='phone' value='<?php  echo $row['phone'];  ?>'>
          <label for="phone_number">Phone number</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="password" type="password" class="validate"  required  value='<?php  echo $row['password'];  ?>' name='password'>
          <label for="password">Password</label>
        </div>
      </div>
      
      
      <button class="btn waves-effect waves-light" id="staffupdating">Update
                                        <i class="material-icons right">send</i>
     </button>
    </form>
   
  </div>
       
                  
                  
        
        
        
        
        
        
        
        
        
        </div>
    
    
     <?php } }?> 
    
    
    
    </div>
   
    
    
    <?php include_once("footer.php"); ?>
    
    
    
    
    
    
    
    
    
    
    
    </div>




</body>
</html>