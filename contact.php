<?php
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */


if($_POST['name'] != "") {
       
    $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
    if ((!empty($name)) && (preg_match('/^[a-z\s]$/i', $name)) && (strlen($name) <= 50)) {
        $nametrim = $name;
    }
    else {
        $errors[] =
        'You may have forgot to enter your name or gone over our max 30 characters.';
    }

}

if($_POST['email'] != "") {
        
	$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
	if ((!empty($email)) || (!filter_Var($email, FILTER_VALIDATE_EMAIL))) {
		$errors[] = 'You forgot to enter your email address';
		$errors[] = 'or your email format is incorrect.';
		
	}

}

if($_POST['comment'] != "") {
        
    $comment = filter_var( $_POST['comment'], FILTER_SANITIZE_STRING);
    if ((!empty($comment)) && (preg_match('/^[a-zA-Z0-9\s\.\,\-]$/i', $comment)) && (strlen($comment) <= 3000)) {
        $commenttrim = $comment;
    }
    else {
        $errors[] =
        'You may have forgot to enter your message or gone over our max 3000 characters.';
    }


}

	$from_add = "info@4seasonsbrasserie.co.uk"; 

	$to_add = "bookings@4seasonsbrasserie.co.uk"; //<-- put your yahoo/gmail email address here

	$subject = "Message For 4 Seasons Brasserie";
	$message = "You have received a new email from $name at $email. The message reads: \r\n \r\n $comment.";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $email \r\n";
	$headers .= "Return-Path: $email\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		echo "<script>alert ('Thank you for contacting us. We will be in touch shortly.'); window.location ='contact.php';</script>;";
	} 
	else 
	{
        echo "<script>alert('We are sorry but the email did not go through.') </script>;";
	}
}






?>
<!DOCTYPE html>
<HTML Lang="en">
	<head  profile="http://www.w3.org/2005/10/profile">
	<link rel="icon" 
      type="image/png" 
      href="images/favicon.ico">
		<title> 4Seasons </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="4seasons.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	
	<body>
		<div class="wrapper fade-in">
			
			<div class="jumbotron jumbotron-fluid" id="header">
				<nav class="navbar navbar-expand-md navbar-toggleable-md" id="navigation">
				<button class="navbar-toggler navbar-toggler-right custom-nav-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon "></span>
					 
				  </button>
				  <img class="justify-content-end d-block d-sm-block d-md-none" src="images/lgsml.png"  width="70" height="35" alt="logo">
				   <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item active fade-in homeni">
							<a href="index.html">HOME</a>
						</li>
						<li class="nav-item fade-in menuni">
							<a href="menu.html">MENU</a>
						</li>
						<li class="nav-item fade-in eventni">
							<a href="event.html">EVENTS</a>
						</li>
						<li class="nav-item fade-in partiesni">
							<a href="parties.html">PARTIES</a>
						</li>
						<li class="nav-item fade-in galleryni">
							<a href="g1.html">GALLERY</a>
						</li>
						<li class="nav-item fade-in harbournightsni">
							<a href="construction.html">HARBOUR NIGHTS<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item fade-in contactni">
							<a href="contact.php">CONTACT</a>
						</li>
				  </ul>
				  <ul class="navbar-nav justify-content-end">
				  <li class="nav-item d-none d-md-block d-xl-block logohidden">
				  <img src="images/lgsml.png"  width="70" height="35" alt="logo">
				  </li>
				  </ul>
				</div>
			 
			</nav>
				<div class="row logorow float-left">
					<div class="col-12 logoholder">
						<div class="container logoimage ">
							<img src="images/LogoAlpha.png" id="logotext" >
						</div>
					</div>
			
		</div>
		</div>

		
		<div class="container title">
			<h1 class="photobannerad"> CONTACT US</h1>
		</div>
		<div class="container-fluid" id="contactbackground">
			<div class="row align-items-center" id="contactrow">
				<div class="col-md-5 col-lg-5 align-self-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.009140474719!2d0.32411641574386074!3d50.793939179524216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df73060fc790b3%3A0x871ce55846403dcc!2s3+The+Waterfront%2C+Eastbourne+BN23+5UZ!5e0!3m2!1sen!2suk!4v1520897447292" width="600" height="450" frameborder="0" style="border:0" id="googlemaps" allowfullscreen></iframe>
					<h1 class="bannertext" id="phonenumber" >01323 470704</h1>
				</div>
				<div class="col-md-7 col-lg-7">
					<div class="container-fluid  " id="contactus">
						<br>
						<form name="frmContact" id="sendform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="form-group">
								<label for="name">YOUR NAME</label>
								<input type="text" class="form-control" name="name" id="name" pattern="[a-zA-Z][a-zA-Z\s\-\']*" maxlength="50" placeholder="Enter your name"  required />
							</div>
							<div class="form-group">
								<label for="email">EMAIL ADDRESS</label>
								<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" maxlength="60" placeholder="Enter your email"  required />
							</div>
							<div class="form-group">
								<label for="comment">YOUR MESSAGE</label>
								<textarea class="form-control" id="comment" rows="6" name="comment" pattern="[a-zA-Z0-9][a-zA-Z0-9\s\.\,\-]*" maxlength="3000" placeholder="Enter your message"  required></textarea>
								<small id="emailHelp" class="form-text text-muted">WE'LL NEVER SHARE YOUR DETAILS WITH ANYONE ELSE</small>
							</div>
							<div class="btn-container">
							<button type="submit" id="submit" name="submit" class="btn btn-primary btn-custom">SEND MESSAGE</button><br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		</div>


		<div class="container-fluid" id="footer">
			<div class="row">
				<div class="col-6">
					<h1 class="footertext"> 3 The Waterfront </h1>
					<h1 class="footertext"> Eastbourne</h1>
					<h1 class="footertext">BN23 5UZ </h1>
					<h1 class="footertext"> England</h1>

				</div>
				<div class="col-6">
					<h1 class="footertext"> 01323 470704 </h1>
					<br>
					<a class="footerlink" href="https://www.illy.com">
						Illy Coffee Partners </a><br>
					<a class="footerlink" href=""> Our Policy</a>
				</div>
			</div>
		</div>
		

	
<script>


window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navigation");
var sticky = navbar.offsetTop;


function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky","brown","logohidden");
	indexcards.ClassList.add("")
	
  } else {
    navbar.classList.remove("sticky","brown","logohidden");
	
  }
  
}


    
    

</script>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="4seasons.js"></script>
		
	</body>
</html>

