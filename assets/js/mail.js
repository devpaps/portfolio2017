
var $contactForm = $('#my_form');

$contactForm.submit(function(e) {
	e.preventDefault();
	var $submit = $('input:submit', $contactForm);
	var defaultSubmitText = $submit.val();

	$.ajax({
		url: 'https://formspree.io/info@jamtwebb.se',
		method: 'POST',
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {
			//$contactForm.append('<div class="alert alert--loading">Sending message…</div>');
			$submit.attr('disabled', true).val('Skickar meddelandet…');
		},
		success: function(data) {
			//$contactForm.append('<div class="alert alert--success">Message sent!</div>');
			$submit.val('Meddelandet skickat!');
			setTimeout(function() {
				//$('.alert--success').remove();
				$submit.attr('disabled', false).val(defaultSubmitText);
			}, 3000);
				$submit.addClass('animated tada');
		},
		error: function(err) {
			//$contactForm.find('.alert--loading').hide();
			//$contactForm.append('<div class="alert alert--error">Ops, there was an error.</div>');
			$submit.val('Oj, det blev error.');
			setTimeout(function() {
				//$('.alert--error').remove();
				$submit.attr('disabled', false).val(defaultSubmitText);
			}, 5000);
				$submit.addClass('animated shake');
		}
	});
	$('#my_form')[0].reset();
});