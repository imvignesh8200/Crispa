


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="profilestyle.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/80e346b275.js" crossorigin="anonymous"></script>
</head>
<body>
	
    <div class="container">
        <img src="image/logo.png" alt="logo" class="logo">
        <div class="header">
            <div id = "loginBtn" class = "btn-sign active-btn"> Login </div>
            <div id = "signupBtn" class = "btn-sign"> Sign Up </div>
        </div>
		<div class="form" id="form">
        <form class="loginForm" id="loginForm" action="loginData.php" method="POST">
            <div class="form-control">
                <label for="email">Email address</label>
                <input type="email" placeholder="Enter your email" name="useremail">
                
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" placeholder="Enter your password" name="userpassword">
                
            </div>
			<button type="submit" name="submit">Submit</button>
        </form>

        <form class="signupForm" id="signupForm" method="POST" action="signupData.php">
			
            <div class="form-control">
                <label for="username">Full name</label>
                <input type="text" placeholder="Enter your Fullname" id="username" name="username" onKeyUp="validateName()" required>
				<span id="name-error"></span>
            </div>
			
            <div class="form-control">
                <label for="useremail">Email address</label>
                <input type="email" placeholder="Enter your email" id="useremail" name="useremail" onKeyUp="validateEmail()" required>
				<span id="email-error"></span>
            </div>
			
            <div class="form-control">
                <label for="userpassword">Password</label>
                <input type="password" placeholder="Enter your password" id="userpassword" name="userpassword" onKeyUp="validatePassword()" required>
				<span id="password-error"></span>
            </div>
			
            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" placeholder="Re-enter your password" id="userpassword2" onKeyUp="cnfmPassword()" required>
				<span id="password2-error"></span>
            </div>
			
			<button type="submit" id="submit" name="submit">Submit</button>
            
			<span id="submit-error"></span>
        </form>
		</div>
    </div>
	
	<script src="formvalidation.js"></script>
	<script src="profilejs.js"></script>
</body>
</html>