function authenticate() {
	var uname =  	'';
}
$(document).ready(function(){
	console.log('inside');	
	$('#submitlogin').on('click',function(){
		var username = $("[name='username']").val();
		var password = $("[name='password']").val();
		if(username != '' && password != ''){
			$.ajax({
				url: 'index.php',
				type: 'post',
				data: {'username':username,'password':password,'action':'authenticate'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});
		}
	});
	
	$('#registercust').on('click',function(){
		console.log('firstname');
		var firstname = $("[name='firstname']").val();
		var lastname = $("[name='lastname']").val();
		var username = $("[name='username']").val();
		var password=$("[name='password']").val();
		var email=$("[name='email']").val();
		var contact=$("[name='contact']").val();
		var avatar=$("[name='avatar']").val();
		if(firstname  != '' && lastname  != '' && email!='' && username!='' && password!=''  && avatar!='' && contact!= ''){

			$.ajax({
				url:'admin2/index.php',
				type: 'post',
				
				data: {'firstname':firstname,'lastname':lastname,'username':username,'email':email,'password':password,'contact':contact,'avatar':avatar,'action':'custregister'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});

			
		}
	});

});


