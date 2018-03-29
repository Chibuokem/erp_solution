<?php session_start(); require_once('showdocuments.php'); ?>
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
<title>Documents </title>
</head>

<body>
    
       <div class="wrapper">
        
                    <div class="container">
                       		<h3 class="center-align">Documents</h3>
                            <?php echo $result; ?>
                            
                            <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
                    	<div class="row">
                        	<div class=" col s12 m12">
                            
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                  <span class="card-title">Sender:<?php echo $row['sender']; ?></span>
                                  <p><?php echo $row['comment']; ?></p><br/><br/>
                                  <p>Date sent:<?php echo $row['datesent']; ?></p>
                                  <p>Time sent:<?php echo $row['timesent']; ?></p>
                                </div>
                                <div class="card-action">
                                  <a href="<?php echo $row['filename']; ?>" download>Download file </a>
                                 
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