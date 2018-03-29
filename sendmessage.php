<?php session_start(); 
if(!isset($_SESSION[department])){
header( "location:portal.php");
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
<title>Send Message</title>
</head>

<body>
	<nav  class= 'cyan lighten-1'>
                        <div class="nav-wrapper">
                          <a href="#!" class="brand-logo"><img src="images/amsley.jpg" width='63'></a>
                          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                          <ul class="right hide-on-med-and-down">
                            <li><a href="human_resources.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                            <li><a href="mymessages.php">View Message</a></li>
                             <li><a href="sendmessage.php">Send message</a></li>
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                          <ul class="side-nav" id="mobile-demo">
                              <li><a href="human_resources.php">Home</a></li>
                             <li><a href="viewdocuments.php">Documents</a></li>
                              <li><a href="sendmessage.php">Send message</a></li>
                              <li><a href="mymessages.php">View Message</a></li>
                             <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </div>
                  </nav>	

	<div class="container">


	  <div class="row">
                    		<div class="col s12 m12">
                               <br/><br/><br/>
                            	<h6 class=" center-align">Send Message </h6>
                                
                                
                                
                                
                                  
                                   
                                      <div class="row">
                                          <div class="input-field col s12">
                                            <textarea id="textarea" name="message" class="materialize-textarea" length="500" ></textarea>
                                            <label for="textarea">Comment About the message(500 characters Maximum) </label>
                                          </div>
                                    </div>
                                    <div class="row">
                                    <div class="col s12 m12">
                                     <h6 class="center-align">Staff </h6>
                                     <div ></div>
                                     
                                       
                                 
                                     </div>
                                     </div>
                         <div class="col s12 m4">
                         <label for="departmentt">Department </label>
                                <input type="text" class="validate materialize-input" name="department" placeholder="Enter department" id="departmentt" >
                               </div>
                                
                                <div class="col s12 m4">
                               
                               
                           
                                 <label for="staff">Staff name </label>
                                <input type="text" class="validate materialize-input" name="firstname" placeholder="Enter staff name " id="firstnamee" >
                               </div>
                                <div class="col s12 m4">
                                <br/><br/>                               
                                <button class="btn waves-effect waves-light" name="searchh" id="check"> <i class="material-icons right ">search</i>
                                      
                                      </button>
                         </div>
                            <div class="col s12 m12" id ="result" style="color:green;">
                              </div>
                             <div class="col s12 m12" id ="errorrr" style="color:red;">
                             </div>
                            
                          
                            <input type="text" name="id" id="parsedid" class="hide">
                                <div class="col s12 m12 " >
                                     <button class="btn waves-effect waves-light" id='sendmessage' name="sendmessage">Send message
                                        <i class="material-icons right">send</i>
                                      </button>
                                 </div>     
                                    
                                  </form>
        
                            </div>          

 </div>
  </div>
  
  <?php include_once('footer.php'); ?>
</body>
</html>