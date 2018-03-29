

// JavaScript Document

$( document ).ready(function() {
  // Handler for .ready() called.
  
  $("#test").click(function(){
				var department =$('#department ').val();
		        var firstname=$('#firstname').val();
				var searchfordoc="hi";
			$.get("search_staff_doc.php", {department: department,firstname:firstname,searchfordoc:searchfordoc} ,{})
			.done(function(data){
				//$("#confirmbook").html(data);
				var obj = JSON.parse(data)
			    var j=obj[0];
				alert (j.surname);
			
			});
	}
  
)});
