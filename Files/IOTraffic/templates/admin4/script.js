function checkForm()
{
//fetching values from all input fields and storing them in variables
    var camera_id = document.getElementById("camera_id").value;
    var camera_location_name = document.getElementById("camera_location_name").value;
    var camera_url = document.getElementById("camera_url").value;
    var camera_ip = document.getElementById("camera_ip").value;

//Check input Fields Should not be blanks.
    if (camera_id == '' || camera_location_name == '' || camera_url == '' || camera_ip == '' )
    {
        alert("Fill All Fields");
    }

    else
    {

	//Notifying error fields
	var camera_id1 = document.getElementById("username");
    var camera_location_name1 = document.getElementById("password");
    var camera_url1 = document.getElementById("email");
    var camera_ip1 = document.getElementById("website");

	//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (camera_id1.innerHTML == 'Must be Numbers' || camera_location_name1.innerHTML == 'Must be 8+ letters' || camera_url1.innerHTML == 'Must be 8+ letters' || camera_ip1.innerHTML == 'Must be Numbers')
        {
            alert("Fill Valid Information");
        }
        else
        {
		//Submit Form When All values are valid.
            document.getElementById("myForm").submit();
        }
    }
}

//AJAX Code to check  input field values when onblur event triggerd.
function validate(field, query)
{
	var xmlhttp;

if (window.XMLHttpRequest)
  {// for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).innerHTML = "Validating..";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        }
        else
        {
            document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
        }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
}
