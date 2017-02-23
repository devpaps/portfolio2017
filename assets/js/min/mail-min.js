

function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
    formdata.append("name", _("name").value);
    formdata.append("email", _("email").value);
    formdata.append("message", _("message").value);
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "contact_send_mail.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "Skickat!"){
				_("status").innerHTML = '<p>Tack <strong>'+_("name").value+'</strong>, ditt meddelande har skickats.</p>';
        _("my_form").reset();
        _("mybtn").disabled = false;
			} else {
				_("status").innerHTML = ajax.responseText;
			}
		}
	}
	ajax.send( formdata );
};


