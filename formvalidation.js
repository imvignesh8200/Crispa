	
		
	var nameError = document.getElementById('name-error');
	var emailError = document.getElementById('email-error');
	var passwordError = document.getElementById('password-error');
	var password2Error = document.getElementById('password2-error');
	var submitError = document.getElementById('submit-error');
		
	form.addEventListener('submit',e =>{
//		e.preventDefault();
		formvalidation();
	})
	
	
	function validateName(){
		var name = document.getElementById('username').value;
		
		if(name.length == 0){
			nameError.innerHTML = 'Name is Required';
			return false;
		}
		if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
			nameError.innerHTML = 'Invalid Name';
			return false;
		}
		nameError.innerHTML = '<i class="fa-sharp fa-solid fa-circle-check"></i>';
		return true;
	}
	
	function validateEmail(){
		var email = document.getElementById('useremail').value;
		
		if(email.length == 0){
			emailError.innerHTML = 'Email is Required';
			return false;
		}
		if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
			emailError.innerHTML = 'Email Invalid'
			return false;
		}
		
		emailError.innerHTML = '<i class="fa-sharp fa-solid fa-circle-check"></i>';
		return true;
	}
		
	function validatePassword(){
		var password = document.getElementById('userpassword').value;
		var confmPassword = document.getElementById('userpassword2').value;
		
		if(password.length == ""){
			passwordError.innerHTML = 'Password is Required';
			return false;
		}
		
		if(password.length < 8) {
    		passwordError.innerHTML = 'Password must be 8 characters';
			return false;
  		} 
		
		else{
			passwordError.innerHTML = '<i class="fa-sharp fa-solid fa-circle-check"></i>';
		}
	}
		
	function cnfmPassword(){
		var password = document.getElementById('userpassword').value;
		var confmPassword = document.getElementById('userpassword2').value;
		
		if(confmPassword.length == ""){
			password2ErrorError.innerHTML = 'ConfirmPassword is Required';
			return false;
		}
		
		if(password != confmPassword){
			password2Error.innerHTML = 'Password did not match';
			return false;
		}
		
		else{
			password2Error.innerHTML = '<i class="fa-sharp fa-solid fa-circle-check"></i>';
		}
	}

	function formvalidation(){
		if(!validateName() || !validateEmail() || !validatePassword || !cnfmPassword)
		{
			submitError.innerHTML = 'Please fix error to submit';
			submitError.style.display = 'block';
			setTimeout(function(){submitError.style.display = 'none'}, 3000);
			return false;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
