$(document).ready(function(){

	$(".button").click(function() {
		$(".nav1 ul").slideToggle();
	});
/*
Выключить этот скрипт, если включить кнопку submit
Jquery отправить форму без нажатия кнопки отправки
http://qaru.site/questions/4721633/jquery-submit-form-without-clicking-submit-button
https://ruseller.com/jquery?id=154
});
*/

$('#contact-form1 input').on('change', function(){
    $('#contact-form1').submit();
});
$('#contact-form1 select').on('change', function(){
    $('#contact-form1').submit();
});
});
