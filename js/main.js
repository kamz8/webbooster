	var validate = false;


if ( ($(window).height() + 500) < $(document).height() ) {
	
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}

function filter(val)
{
		var pattern = /[\t\r\n\f]/;
		var s = /[ ]{2,}/;
		
		val = val.replace(pattern, "");
		val = val.replace(s, " ")
		val = val.replace(/^\s+|\s+$/g, "");
		
		
		return val;
}


function scrollToId()
{
  $('a[href^="#"]').on('click', function(event) {
   
   var target = $( $(this).attr('href') );
   
   if( target.length ) {
	 event.preventDefault();
	 $('html, body').animate({
	 	scrollTop: target.offset().top
	 }, 1000);
	 }
   });	
}

function ContactFormValid()
{
	var form = '#contact-form '
	var submitBtn = $('#submit');
	var maxLenth = 800;

	$('#submit').removeAttr('disabled');

	
	$('#contact-form input[name=name]').on('blur', function() {	
	
		var input = $('#contact-form input[name=name]');
		var inputSelector = '#contact-form div:eq(0)';
		var val =  input.val();
		var validateVal =  /^[a-zA-Ż]{2,}\s[a-zA-Ż]{2,}$/;
		input.val(filter(val));
		console.log(val);
		
		$(inputSelector).removeClass('has-error');
		$('#contact-form div:eq(0) span').remove();
			
		if(val.length <= 5 || validateVal.test(input.val()) == false) 
		{
			console.log(val.length);
			validate = false;
			$(inputSelector).toggleClass('has-error');
			$(inputSelector).append('<span class="error" aria-hidden="true">Podaj swoje imie i nazwisko.</span>');
			
		}else 
		{
			$(inputSelector).removeClass('has-error');
			$('#contact-form div:eq(0) span').remove();
			
			validate = true;	
		
		}
		
					if(validate == true) $('#submit').removeAttr('disabled','');
				else $('#submit').attr('disabled','');
	});
	
		$('#email').on('blur', function() {	
	
		var input = $('#email');
		var inputSelector = '#contact-form div:eq(1)';
		var val =  input.val();
		var validateVal =  /^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/;
		input.val(filter(val));
		val =  input.val();
		console.log(val);
			
		$(inputSelector).removeClass('has-error');
		$('#contact-form div:eq(1) span').remove();
			
		if(val.length <9 /*|| validateVal.test(val) == false*/) 
		{
			console.log(val.length);
			
			$(inputSelector).toggleClass('has-error');
			$(inputSelector).append('<span class="error" aria-hidden="true">Podaj telefon, odezwiemy się.</span>');
			validate = false;
		}else 
		{
			$(inputSelector).removeClass('has-error');
			$('#contact-form div:eq(1) span').remove();
			
			validate = true;	
			console.log(validate);
		}
		
					if(validate == true) $('#submit').removeAttr('disabled','');
				else $('#submit').attr('disabled','');
	});	
	
		$('#phone').on('blur', function() {	
	
		var input = $('#phone');
		var inputSelector = '#contact-form div:eq(2)';
		var val =  input.val();
		var validateVal =  /^\d+$/;
		input.val(filter(val));
		val =  input.val();
		console.log(val);
		
		$(inputSelector).removeClass('has-error');
		$('#contact-form div:eq(2) span').remove();
		
		if(val.length <9 || validateVal.test(val) == false) 
		{
			console.log(val.length);
			
			$(inputSelector).toggleClass('has-error');
			$(inputSelector).append('<span class="error" aria-hidden="true">Podaj telefon, odezwiemy się.</span>');
			validate = false;
		}else 
		{
			$(inputSelector).removeClass('has-error');
			$('#contact-form div:eq(2) span').remove();
			
			validate = true;	
		
		}
		
					if(validate == true) $('#submit').removeAttr('disabled','');
				else $('#submit').attr('disabled','');
	
	});
	
	$('#message').on('blur', function() {	
	
		var input = $('#message');
		var inputSelector = '#contact-form div:eq(3)';
		var val =  input.val();
				
		val =  input.val();
		//console.log(val);
		
		$(inputSelector).removeClass('has-error');
		$('#contact-form div:eq(3) span').remove();
		
		if(val.length == 0 || val.length > maxLenth) 
		{
			console.log(val.length);
			
			$(inputSelector).toggleClass('has-error');
			$(inputSelector).append('<span class="error" aria-hidden="true">Napisz w jakiej sprawie piszesz. (maks. 800 znaków) </span>');
			validate = false;
			
		}else 
		{
			$(inputSelector).removeClass('has-error');
			$('#contact-form div:eq(3) span').remove();
			
			validate = true;	
				
		}
		var input = $('#message');
		$('#contact-form div:eq(3) label').remove();	
		$('#contact-form div:eq(3)').append('<label class="floatLeft">'+input.val().length +'/'+maxLenth+' &nbsp;</label>');
			if(validate == true) $('#submit').removeAttr('disabled','');
				else $('#submit').attr('disabled','');
				//console.log('is it validate? ' + validate);
	});
	
		console.log('is it validate? ' + validate);
	if(validate) 
	{
		$('#submit').removeAttr('disabled');
		console.log('wysyłaj');
	}else $('#submit').attr('disabled','');	
	

	$('#message').on('keypress', function() {
		
			var input = $('#message');
		$('#contact-form div:eq(3) label').remove();	
	$('#contact-form div:eq(3)').append('<label class="floatLeft">'+input.val().length +'/'+maxLenth+' &nbsp;</label>');
	});

		$('#message').on('click', function() {
		
			var input = $('#message');
		$('#contact-form div:eq(3) label').remove();	
	$('#contact-form div:eq(3)').append('<label class="floatLeft">'+input.val().length +'/'+maxLenth+' &nbsp;</label>');
	});
	

		
}	

$(document).ready(function(e) {
    
	//validate contact form function
	ContactFormValid();
	//scrolling to content 
	scrollToId();


		
});