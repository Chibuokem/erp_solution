<?php
session_start();
if($_SESSION[department] !=='ict'){
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
<script src="project.js"></script>
<script src="materialize/js/materialize.min.js" type="text/javascript"></script>
<title>Ict </title>
<link rel="icon" 
      type="image/jpg" 
      href="images/amsley.jpg">
</head>

<body>
        

			<div class="wrapper">
            	
                <ul id="dropdown1" class="dropdown-content">
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
                            <div class="col s12 m12">
                            <h5 class="center-align">Welcome <?php echo $_SESSION[name]; ?> </h5>
                            </div>
                            
                            
                    </div>
                    
                    <div class="row">
                    		<div class="col s12 m12">
                            	<h6 class=" center-align">Site Picture Upload</h6>
                                  <form  method="post" id="sitepic" >
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>Site pic</span>
                                        <input type="file" name="picture" required id="sitepicture">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name='picture'>
                                      </div>
                                    </div>
                                      <div class="row">
                                          <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" length="200" required name="comment"></textarea>
                                            <label for="textarea1">Comment About the Site(200 characters Maximum) </label>
                                          </div>
                                    </div>
                                    
                                     <button class="btn waves-effect waves-light"  name="action" id='uploadpic' >Upload
                                        <i class="material-icons right">send</i>
                                      </button>
                                    
                                  </form>
        
                            </div>
                   
                   
                   
                    <div class="row">
                    		<div class="col s12 m12">
                               <br/><br/><br/>
                            	<h6 class=" center-align">Send document </h6>
                                
                                
                                
                                
                                  
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>Document</span>
                            

                                        
                                        
                                     <!--<p>Form for file begins</p>-->
                                     
                                        <form action="#" id='documentform'>
                                        <input type="file" name="document" id='docfile' >
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" >
                                      </div>
                                    </div>
                                      <div class="row">
                                          <div class="input-field col s12">
                                            <textarea id="textarea" name="comment" class="materialize-textarea" length="200"></textarea>
                                            <label for="textarea">Comment About the document(200 characters Maximum) </label>
                                          </div>
                                    </div>
                                    <div class="row">
                                    <div class="col s12 m12">
                                     <label>Staff</label>
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
                                     <button class="btn waves-effect waves-light" id='senddoc' name="senddoc">Send doc
                                        <i class="material-icons right">send</i>
                                      </button>
                                 </div>     
                                    
                                  </form>
        
                            </div>
                   
                   
                       <div class="row">
                       <h6 class="center-align">Search for staff</h6>
                            <?php require_once('searchstaff.php'); ?>
                            
                             <form method="GET"  >
                               <div class="col s12 m4">
                             
                               		
                                <label for="department">Department </label>
                                <input type="text" class="validate materialize-input" name="department" placeholder="Enter department" id="department" required  >
                               </div>
                                
                                <div class="col s12 m4">
                               
                               
                           
                                 <label for="staff">Staff name </label>
                                <input type="text" class="validate materialize-input" name="firstname" placeholder="Enter staff name " id="value" required >
                               </div>
                                <div class="col s12 m4">
                                <br/><br/>
                               
                                <button class="btn waves-effect waves-light" type="submit" name="searchstaff" > <i class="material-icons right ">search</i>
                                      
                                      </button>
                                   
                                  </form>
                              
                               </div>
                               <div id='searchresult' class='search_result col s12 m12 '>
                               <?php echo $result; ?>
                               <?php if(isset($rows)){ foreach ($rows as $row ){  ?>
                               <form method='get' action='staff_edit.php' >
                                <label for="department">Department </label>
                              <input type='text' value=' <?php echo $row['department']; ?>' id="department"><br/>                               
                               <label for="firstname">Firstname</label>
                              <input type='text' value=' <?php echo $row['first_name']; ?>' id='firstname'>
                               <label for="surname">Surname</label>
                              <input type='text' value=' <?php echo $row['surname']; ?>' id='surname'>
                               <label for="lastname">Lastname</label>
                              <input type='text' value=' <?php echo $row['last_name']; ?>' id='lastname'>
                                <input type='text' value=" <?php echo $row['id']; ?> " class='hide' name='id'>
							    <input type="submit" class='btn waves-effect waves-light' value='See Staff'>
                                     </form><br/><br/>
                                     <?php  } }?>
                                     
                               </div>
                             
                       </div>
                   
                   
                   
                   
                   
                    </div>
                    
                    
                    
               
               </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          
         </div>   
        <?php include_once('footer.php'); ?>
            
            
            
            
            </div>




</body>
</html>