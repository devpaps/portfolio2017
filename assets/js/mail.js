function _(a){return document.getElementById(a)}function submitForm(){_("mybtn").disabled=!0,_("status").innerHTML="Please wait ...";var a=new FormData;a.append("name",_("name").value),a.append("email",_("email").value),a.append("message",_("message").value);var b=new XMLHttpRequest;b.open("POST","contact_send_mail.php"),b.onreadystatechange=function(){4===b.readyState&&200===b.status&&("success"===b.responseText?_("status").innerHTML="<p>Thank you <strong>"+_("name").value+"</strong>, your message has been sent.</p>":(_("status").innerHTML=b.responseText,_("mybtn").disabled=!1))},b.send(a)}
