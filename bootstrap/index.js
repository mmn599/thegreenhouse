$(document).ready(function () {
    
    $('#submit_btn').click(function(e){
      e.preventDefault();

	    var xmlhttp;
	    if(window.XMLHttpRequest) {
	    	xmlhttp = new XMLHttpRequest();
	    }
	    else {
	    	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
      
	    var name = $('#submit_name').val();
	    var email = $('#submit_email').val();
	    var description = $('#submit_description').val();

	    xmlhttp.open("POST","submitcontent.php",true);
	    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

	    var msg = "name="+name+"&description="+description+"&email="+email;
	    xmlhttp.send(msg);

	});

});
