function authenticate() {
	var uname =  	'';
}
$(document).ready(function(){
	var hallname,username, email, password,	confirmpass, contact, description, city, state, landmark, area,	pincode, 	price, decoration, capacity;
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
	$("#hallreg").submit(function(e) {
		e.preventDefault();
	});
	$('#registerdata').on('click',function(){
		console.log('firstname');
		 hallname = $("[name='hallname']").val();
		 username = $("[name='username']").val();
		 password=$("[name='password']").val();
		 confirmpass=$("[name='confirmpass']").val();
		 email=$("[name='email']").val();
		 contact=$("[name='contact']").val();
		 state=$("[name='state']").val();
		 city=$("[name='city']").val();
		 area=$("[name='area']").val();
		 pincode=$("[name='pincode']").val();
		 landmark=$("[name='landmark']").val();
		 description=$("[name='description']").val();
		//  photo=$("[name='photo']").val();
		 capacity=$("[name='capacity']").val();
		 price=$("[name='price']").val();
		 // decoration=$("input[type=radio][name='decoration']").val();
		
		//  decoration = $("#hallreg input[name='decoration']:checked").val();
		
		//  decoration = $('input[name=decoration]:checked').val();
		// console.log(hallname,username,password,email,contact,state,city,area,pincode,landmark,description,capacity,price,decoration);
		if(hallname  != '' && email!='' && username!='' && password!=''  && state!='' && city!='' && area!='' && pincode!='' && capacity!='' && decoration!=''){
			validate();

			/*$.ajax({
				url:'index.php',
				type: 'post',
				
				data: {'hallname':hallname,'username':username,'email':email,'password':password,'contact':contact,'state':state,'city':city,'area':area,'pincode':pincode,'capacity':capacity,'price':price,'decoration':decoration,'photos':photo,'landmark':landmark,'description':description,'action':'register'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});*/

			
		}


	});
	$('input[type=radio][name=decoration]').on('change',function() {
		decoration = this.value;
		console.log(decoration);
	});

	$("input").blur(function(){
		var namefield = $(this).attr('name');
		switch(namefield){
			case 'hallname':
				hallname = $(this).val();
				if(hallname.length <= 5){
					console.log('length');
					$('#showError').text('hallname too short');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
			case 'username':
				var username = $(this).val();
				if(username.match(/\s+/g)  ){
					$('#showError').text('username cannot have space');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
			case 'password':
				password = $(this).val();
				if(password.length < 6){
					$('#showError').text('password too short');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
			case 'confirmpass':
				confirmpass = $(this).val();
				if(password != confirmpass){
					$('#showError').text('password does not match');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
			case 'contact':
				contact = $(this).val();
				if(contact.length != 10 && !contact.match(/\d+/g) ){
					$('#showError').text('not a valid number');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
			case 'pincode':
				pincode = $(this).val();
				if(pincode.length != 6 && !pincode.match(/\d+/g) ){
					$('#showError').text('not a valid pincode');
					$(this).focus();
				}else{
					$('#showError').text('');
				}
				break;
		}
		console.log($(this).attr('name'));
	});
	$('input[name="username"]').keyup(function(event){
		console.log('keyUp',event.keyCode);
		if(event.keyCode == 32){
			$(this).val($(this).val().trim());
			$('#showError').text('space');
		}
	})
	function validate(){
		console.log(password,confirmpass);
		if(password != confirmpass){
			$('#showError').text('password');
		}
		// if()
		console.log(hallname,username,password,email,contact,state,city,area,pincode,landmark,description,capacity,price,decoration);
		$.ajax({
				url:'admin2/index.php',
				type: 'post',
				
				data: {'hallname':hallname,'username':username,'email':email,'password':password,'contact':contact,'state':state,'city':city,'area':area,'pincode':pincode,'capacity':capacity,'price':price,'decoration':decoration,'landmark':landmark,'description':description,'action':'register'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});
	}

});


