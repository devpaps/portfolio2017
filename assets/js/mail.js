function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'Please wait ...';
	var formdata = new FormData();
	formdata.append( "name", _("name").value );
	formdata.append( "email", _("email").value );
	formdata.append( "message", _("message").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "contact_send_mail.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState === 4 && ajax.status === 200) {
			if(ajax.responseText === "success"){
				_("status").innerHTML = '<p>Thank you <strong>'+_("name").value+'</strong>, your message has been sent.</p>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	};
	ajax.send( formdata );
}
