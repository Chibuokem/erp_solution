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
<script src="loginjquery.js" type="text/javascript"></script>
<!--<script src="project.js"></script>-->
<title>Amsley</title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>

<body>
	<div class="wrapper">
    
            <div class="navbar-fixed">
                 <nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>               
                          <ul class="right hide-on-med-and-down">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#aboutus">About us </a></li>
                             <li><a href="index.php#services">Services</a></li>
                              <li><a href="index.php#contactus">Contact us</a></li>
                            <li class="active"><a href="portal.php">Staff</a></li>
                          </ul>
                          
                          <ul class="side-nav" id="mobile-demo">
                              <li><a href="index.php">Home</a></li>
                            <li><a href="#aboutus">About us </a></li>
                             <li><a href="index.php#services">Services</a></li>
                              <li><a href="index.php#contactus">Contact us</a></li>
                            <li><a href="portal.php">Staff</a></li>
                          </ul>
                        </div>
               </nav>
            </div>
    
       
          
        <div class="row">
          
              <div class="container">
                    <div class='col s12 m12'>
                    <h5 class='text-cyan lighten-1-text'>Welcome to Amsley Portal</h5>
                    </div>
                     <div class='form'>
                    
                    <div id='errorr' style='color:red;'></div>
                     <div id='success' style='color:green;'></div>
                    <form class="col s12 m12"  method="POST" id="login-form">
                      <div class="row">
                        <div class="input-field col s12 ">
                          <input id="email" type="email" class="validate" name='email' required>
                          <label for="email">Email</label>
                        </div>
                      </div>
                       <div id='confirmlogin' style='color:red;'></div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate" name='password' required>
                          <label for="password">Password</label>
                        </div>
                      </div>
          <button class="btn waves-effect waves-light" id="btn-login">Login</button>
                    </form>
                    
                  
                 </div> 
                    
                  
            </div>
    </div>
        
        </div>
    
    
    
    
    
     
     
    </div>
       
     <?php include_once('footer.php'); ?>
</body>
</html>