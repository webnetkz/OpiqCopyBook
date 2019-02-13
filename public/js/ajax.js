$(document).ready(function() {

	$('form').submit(function(event) {
		var json;
		event.preventDefault(); // Функция отмены отправки в браузере. 
	
		$.ajax({

			type: $(this).attr('method'),
			url: $(this).attr('action'), // URL-адрес, по которому будет отправлен запрос.
			data: new FormData(this), // Данные, которые будут отправлены на сервер. 
			contentType: false, // Ожидаемый тип данных, которые пришлет сервер в ответ на запрос.
			cache: false,
			processData: false,

			success: function(result){
					if(result == 'Sign Up Ip') {
						window.location.href = '../../app/cabinetIp.php';
					}
					
					if(result == 'Sign Up Too') {
						window.location.href = '../../app/cabinetToo.php';
					}

					if(result == 'Sign In Ip') {
						window.location.href = '../../app/cabinetIp.php';
					}

					if(result == 'Sign In Too') {
						window.location.href = '../../app/cabinetToo.php';
					}		
			},
			

		});

	});

});