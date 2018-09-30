


$(document).ready(function () 
	{ 
	
		$('#sendwa').click(function(){
			var email= $(".emailwa").val();
						
				$.ajax({
					type:'get',
					dataType: 'html',
					url: '/resend',
					data: "email=" + email,			
					success: function (response)
						{
							$('#testdiv').html(response); 
							// alert('lasun sent')
						}
				});
			
			
			
		});
	
	});
