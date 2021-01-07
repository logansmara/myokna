<?php
$this->title = 'Qwerty';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	.hidden1 {
		animation: display 2s 1 ease-in-out;
	}
	@keyframes display {
		from {opacity: 0;}
		to {opacity: 1;}
	}
</style>
<div style="height: 30px;">
<button class="hidden1">Кнопка</button>
</div>

<p>
	Если в браузере пользователя javascript отключен, то кнопка не исчезнет ($('.hidden1').hide();).
</p>
<p>
	Если javascript не отключен, кнопка исчезнет. Чтобы она не появлялась в начале загрузки страницы, применяем @keyframes.
</p>
<p>
	Кнопка обернута в div с height: 30px , чтобы текст, находившийся под кнопкой, не прыгал.
</p>
<?php
$js = <<< JS
$(function() {
$('.hidden1').hide();
})(jQuery);
JS;
$this->registerJs($js);
?>