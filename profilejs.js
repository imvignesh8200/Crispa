//Log in & Sign up Button

document.getElementById("loginBtn").addEventListener("click",function(){
	document.getElementById("loginBtn").classList.add("active-btn");
	document.getElementById("signupBtn").classList.remove("active-btn");
	document.getElementById("loginForm").style.display = "block";
	document.getElementById("signupForm").style.display = "none";
}, false);

document.getElementById("signupBtn").addEventListener("click",function(){
	document.getElementById("loginBtn").classList.remove("active-btn");
	document.getElementById("signupBtn").classList.add("active-btn");
	document.getElementById("loginForm").style.display = "none";
	document.getElementById("signupForm").style.display = "block";
}, false);



















