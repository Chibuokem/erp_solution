<?php session_start();

 //if($_SESSION[department] !=='civil'){
//header( "location:portal.php");	
//}
  require_once('viewpictures.php');?>
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
<title>Civil </title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>

<body>
		<div class="wrapper">
        	 <nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>              
                          <ul class="right hide-on-med-and-down">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#aboutus">About us </a></li>
                             <li><a href="index.php#services">Services</a></li>
                              <li><a href="index.php#contactus">Contact us</a></li>
                            <li><a href="portal.php">Staff</a></li>
                          </ul>
                          
                          <ul class="side-nav" id="mobile-demo">
                             <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#aboutus">About us </a></li>
                             <li><a href="index.php#services">Services</a></li>
                              <li><a href="index.php#contactus">Contact us</a></li>
                            <li><a href="portal.php">Staff</a></li>
                          </ul>
                        </div>
               </nav>
            <div class="row">
         
            
            <h4 class="center-align">Pictures uploaded from Civil department </h4>
            <?php echo $result; ?>
              <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
            		<div class="col s12 m7 card">
                      <div class="card medium">
                            <div class="card-image">
                              <img src="<?php echo $row['picturename']; ?>" width="100">
                              <span class="card-title">Site Picture</span>
                            </div>
                        <div class="card-content">
                          <p>SITE NAME </p>
                        </div>
                        <div class="card-action">
                                  <form action="edit_civil_pictures.php" method="get">
                                  <input type="text" name="id" value="<?php echo $row['id']; ?>" class="hide">
                                    <button class="btn waves-effect waves-light " type="submit" name="action" >Edit Site  
                                      <i class="material-icons right">send</i>
                                     </button>
                                     </form>
                        </div>
                      </div>
                      
                      
                      
                </div>		
            
            
            
            <div class="col s12 m5">
          <div class="card blue-grey darken-1 medium">
            <div class="card-content white-text">
              <span class="card-title">COMMENT ABOUT THE SITE</span>
              <p><?php echo $row['comment']; ?> </p>
            </div>
            <div class="card-action">
            </div>
          </div>
        </div>
            
           
            
            </div>
            
          <?php  }} ?>  
            
            
            
            
            <?php include_once('footer.php'); ?>
            
        	
        
        </div>




</body>
</html>