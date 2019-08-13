<?php

if ($_POST["submit"]) {

      
      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
     
     
     if (!$_POST['phone']) {
     
      $error.="<br /> Please enter your phone number";
     
     }
     
      
     if (!$_POST['message']) {

       $error.="<br />Please enter a message";

     }
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }
     
      
     if ($error) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {


      /* THE EMAIL WHERE YOU WANT TO RECIEVE THE CONTACT MESSAGES */
 if (mail("info@youremailaddress.com", "Message from Your Website Name",
  
 
"Name: ".$_POST['name']."
Email: ".$_POST['email']."
Phone: ".$_POST['phone']." 
Message: ".$_POST['message'])) {
$result='<div class="alert alert-success"> <strong> Thank
you!</strong> We\'ll get back to you shortly.</div>';
} else {
$result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contato
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nome é obrigatório">
					<input class="input100" type="text" name="name" placeholder="Nome Completo">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Email válido é obrigatório: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Mensagem é obrigatória.">
					<textarea class="input100" name="message" placeholder="Sua Mensagem"></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
					<label class="label-checkbox100" for="ckb1">
						Enviar cópia para meu email
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar Email
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
