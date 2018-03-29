<?php  require_once('viewpictureselected.php');?>
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
<script src="project.js"></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
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
                            <li><a href="civil.php">Home</a></li>
                            <li><a href="#upload">Upload</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                              <li><a href="sendmessage.php">Send Message</a></li>
                            <li><a href="mymessages.php">View Message</a></li>
                           <li><a href="logout.php">Logout</a></li>
                          </ul>
                          <ul class="side-nav" id="mobile-demo">
                            <li><a href="civil.php">Home</a></li>
                            <li><a href="#upload">Upload</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                              <li><a href="sendmessage.php">Send Message</a></li>
                            <li><a href="mymessages.php">View Message</a></li>
                           <li><a href="logout.php">Logout</a></li>
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
                        <div class="file-field input-field">
                                      <div class="btn">
                                        <span>Upload pic</span>
                                         <form id="picupdate">
                                        <input type="file" name="picture" id="newpic">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                      </div>
                                    </div>
                                     <input type="text" name="id" value="<?php echo $row['id']; ?>" class="hide">
                                    <button class="btn waves-effect waves-light "  name="action" id="updatepicc">Update  
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
            <form id="commentupdate">  
               <textarea id="newcomment" class="materialize-textarea" length="200" required name="comment" placeholder="Enter new comment here"></textarea>
                                            <label for="textarea1">Comment About the Site(200 characters Maximum) </label>
            </div>
            <div class="card-action">
          <input type="text" name="commentid" value="<?php echo $row['id']; ?>" id="commentid" class="hide" >
           
              <button class="btn waves-effect waves-light " name="action" id="changecomment">Change comment 
          <i class="material-icons right">send</i>
         </button> 
            </div>
          </div>
        </div>
            
           
            
            
            
            
            
            
            
           </form> 
            </div>
            
          <?php  }} ?>  
            
            
            
            
           <?php include_once('footer.php'); ?>
            
        	
        
        </div>




</body>
</html>