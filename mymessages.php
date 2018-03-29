<?php session_start(); 
if(!isset($_SESSION[department])){
header( "location:portal.php");
}
require_once('viewmessages.php'); ?>
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
<title>Message </title>
</head>

<body>
    
       <div class="wrapper">
       		<nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
                          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                          <ul class="right hide-on-med-and-down">
                            <li><a href="ict.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                            <li><a href="mymessages.php">View Message</a></li>
                             <li><a href="sendmessage.php">Send message</a></li>
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                          <ul class="side-nav" id="mobile-demo">
                              <li><a href="ict.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                              <li><a href="sendmessage.php">Send message</a></li>
                              <li><a href="mymessages.php">View Message</a></li>
                             <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </div>
                  </nav>	
        
                    <div class="container">
                       		<h3 class="center-align">Messages</h3>
                            <?php echo $result; ?>
                            
                            <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
                    	<div class="row">
                        	<div class=" col s12 m12">
                            
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                  <span class="card-title">Sender:<?php echo $row['sender']; ?></span>
                                  <p><?php echo $row['message']; ?></p><br/><br/>
                                  <p>Date sent:<?php echo $row['datesent']; ?></p>
                                  <p>Time sent:<?php echo $row['timesent']; ?></p>
                                </div>
                                <div class="card-action">
                                 
                                 
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                           	
                            </div>
                            
                            
                            
                        </div>
                    
                       <?php  } }  ?>
                    
                    
                    
                    
                    </div>
              
              
              
            <?php include_once('footer.php');?>
       
       
        </div>


</body>
</html>