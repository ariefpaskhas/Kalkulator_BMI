<!DOCTYPE html>
<html lang="en">
<head>
	<title>KalkulatorBMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<form  action=index.php method=post>

	<div class="bg-contact100" style="background-image: url('images/appetite-bowl-centimeter-1332189.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/Lambang_Korpaskhas.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form">
					<span class="contact100-form-title">
						KALKULATOR BMI
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="berat" placeholder="Berat Anda (Kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="tinggi" placeholder="Tinggi Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-child" aria-hidden="true"></i>
						</span>
					</div>



					<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div> -->

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit" name="hitung" value="hitung" >
							Hitung
						</button>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit" name="hitung" value="hitung" > Hasil
						</form>

<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];

			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   

			    $bmi = bmi($berat,$tinggi);

			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }

			    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
			    echo "$output";
			}
			?>
							
						</button>

				

			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
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
