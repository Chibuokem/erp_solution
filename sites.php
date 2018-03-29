<?php  require_once('viewpictures.php');?>
<!doctype html>
<html>
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="project.css" type="text/css" rel="stylesheet"/>
<link href="class.css" type="text/css" rel="stylesheet"/>
<link href="responsive_project.css" type="text/css" rel="stylesheet"/>
<script src="materialize/js/jquery-3.1.1.min.js" type="text/javascript" ></script>
<script src="project.js"></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
<meta charset="utf-8">
<title>Amsley sites </title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>

<body>
	<div class="wrapper">
    		 <!-- start of navigation bar -->
                   
            		 <nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a>               
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
               <!--End of navigation links -->
               
               
               <div class="row">
                    <div class="col s12 m12">
                     <h3 class="center-align">Amsley Sites</h3>
                     
                    </div>
               </div>
               
              <div class="container">
              <?php echo $result; ?>
               <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
              			 <div class="row">
        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">
               <img src="<?php echo $row['picturename']; ?>" width="100">
              <span class="card-title">About the site </span>
            </div>
            <div class="card-content">
              <p><?php echo $row['comment']; ?></p>
            </div>
            <div class="card-action">
             <!-- <a href="#">This is a link</a>-->
            </div>
          </div>
        </div>
      </div>
           <?php  }} ?>        
              
              
              
              </div>
            
            
            
            
            
            
            
            
           <?php include_once('footer.php'); ?>
            
    </div>
</body>
</html>