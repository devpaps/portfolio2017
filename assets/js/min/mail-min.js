function _(e){return document.getElementById(e)}function submitForm(){_("mybtn").disabled=!0,_("status").innerHTML="vänligen vänta...";var e=new FormData;e.append("name",_("name").value),e.append("email",_("email").value),e.append("message",_("message").value);var t=new XMLHttpRequest;t.open("POST","contact_send_mail.php"),t.onreadystatechange=function(){4==t.readyState&&200==t.status&&("success"==t.responseText?(_("status").innerHTML='<p class="alert alert-success alert-dismissable">Tack <strong>'+_("name").value+'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>, ditt meddelande har skickats.</p>',_("my_form").reset(),_("mybtn").disabled=!1):_("status").innerHTML=t.responseText)},t.send(e)}