<?php 
	$name = "";
	$email = "";
	$username = "";
	$password = "";
	$confirmPass = "";
	$birthDate = "";
	$gender = "";
	$martial = "";
	$address = "";
	$city = "";
	$postal = "";
	$homePhone = "";
	$mobilePhone = "";
	$cardNum = "";
	$cardExp = "";
	$salary = "";
	$url = "";
	$gpa = "";


	$errors = [];
	$post = $_SERVER["REQUEST_METHOD"]=="POST";
	if ($post) {

		$name = isset($_POST["name"]) ? $_POST["name"] : "";
		$email = isset($_POST["email"]) ? $_POST["email"] : "";
		$username = isset($_POST["username"]) ? $_POST["username"] : "";
		$password = isset($_POST["password"]) ? $_POST["password"] : "";
		$confirmPass = isset($_POST["confirmPass"]) ? $_POST["confirmPass"] : "";
		$birthDate = isset($_POST["birthDate"]) ? $_POST["birthDate"] : "";
		$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
		$martial = isset($_POST["martial"]) ? $_POST["martial"] : "";
		$address = isset($_POST["address"]) ? $_POST["address"] : "";
		$city = isset($_POST["city"]) ? $_POST["city"] : "";
		$postal = isset($_POST["postal"]) ? $_POST["postal"] : "";
		$homePhone = isset($_POST["homePhone"]) ? $_POST["homePhone"] : "";
		$mobilePhone = isset($_POST["mobilePhone"]) ? $_POST["mobilePhone"] : "";
		$cardNum = isset($_POST["cardNum"]) ? $_POST["cardNum"] : "";
		$cardExp = isset($_POST["cardExp"]) ? $_POST["cardExp"] : "";
		$salary = isset($_POST["salary"]) ? $_POST["salary"] : "";
		$url = isset($_POST["url"]) ? $_POST["url"] : "";
		$gpa = isset($_POST["gpa"]) ? $_POST["gpa"] : "";

		if($gpa)
			$gpa = round($gpa, 2);


		!preg_match("/.{2,}/", $name) ? $errors[] = "name" : "";
		!filter_var($email, FILTER_VALIDATE_EMAIL) ? $errors[] = "email" : "";
		!preg_match("/.{5,}/", $username) ? $errors[] = "username" : "";
		!preg_match("/(?=\w{6,10})(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})\D*\d.*/", $password) ? $errors[] = "password" : "";
		$password != $confirmPass ? $errors[] = "confirmPass" : "";
		!preg_match("/([0-2][0-9]|(3)[0-1])(\.)(((0)[0-9])|((1)[0-2]))(\.)\d{4}/", $birthDate) ? $errors[] = "birthDate" : "";
		!preg_match("/(Male|Female)/", $gender) ? $errors[] = "gender" : "";
		!preg_match("/(Single|Married|Divorced|Widowed)/", $martial) ? $errors[] = "martial" : "";
		!$address ? $errors[] = "address" : "";
		!$city ? $errors[] = "city" : "";
		!preg_match("/\d{6}/", $postal) ? $errors[] = "postal" : "";
		!preg_match("/97 \d{7}/", $homePhone) ? $errors[] = "homePhone" : "";
		!preg_match("/97 \d{7}/", $mobilePhone) ? $errors[] = "mobilePhone" : "";
		!preg_match("/\d{4} \d{4} \d{4} \d{4}/", $cardNum) ? $errors[] = "cardNum" : "";
		!preg_match("/([0-2][0-9]|(3)[0-1])(\.)(((0)[0-9])|((1)[0-2]))(\.)\d{4}/", $cardExp) ? $errors[] = "cardExp" : "";
		!preg_match("/UZS \d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})/", $salary) ? $errors[] = "salary" : "";
		!preg_match("/(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?/", $url) ? $errors[] = "url" : "";


		if(!$gpa && ($gpa > 4.5 || $gpa < 0))
			$errors[] = "gpa";


	}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>

		<form action="index.php" method="post">
			<h1>Registration Form</h1>
			<p>
				This form validates user input and then displays "Thank You" page.
			</p>
			<hr />
	

			<?php if($post): ?>
				<?php if(count($errors)): ?>
					<h2>Please, fill below fields correctly</h2>
				<?php else: ?>
					<h2>Great, no errors</h2>
				<?php endif; ?>
			<?php endif; ?>

			<dl>
				<dt>Name</dt>
				<dd><input type="text" name="name" value="<?= $name ?>"></dd>
				<dt>Email</dt>
				<dd><input type="text" name="email" value="<?= $email ?>"></dd>
				<dt>Username</dt>
				<dd><input type="text" name="username" value="<?= $username ?>"></dd>
				<dt>Password</dt>
				<dd><input type="text" name="password" value="<?= $password ?>"></dd>
				<dt>Confirm password</dt>
				<dd><input type="text" name="confirmPass" value="<?= $confirmPass ?>"></dd>
				<dt>Date of birth</dt>
				<dd><input type="text" name="birthDate" value="<?= $birthDate ?>"></dd>
				<dt>Gender</dt>
				<dd><input type="text" name="gender" value="<?= $gender ?>"></dd>
				<dt>Martial status</dt>
				<dd><input type="text" name="martial" value="<?= $martial ?>"></dd>
				<dt>Address</dt>
				<dd><input type="text" name="address" value="<?= $address ?>"></dd>
				<dt>City</dt>
				<dd><input type="text" name="city" value="<?= $city ?>"></dd>
				<dt>Postal code</dt>
				<dd><input type="text" name="postal" value="<?= $postal ?>"></dd>
				<dt>Home phone</dt>
				<dd><input type="text" name="homePhone" value="<?= $homePhone ?>"></dd>
				<dt>Mobile phone</dt>
				<dd><input type="text" name="mobilePhone" value="<?= $mobilePhone ?>"></dd>
				<dt>Credit Card Number</dt>
				<dd><input type="text" name="cardNum" value="<?= $cardNum ?>"></dd>
				<dt>Credit Card Expire Date</dt>
				<dd><input type="text" name="cardExp" value="<?= $cardExp ?>"></dd>
				<dt>Salary</dt>
				<dd><input type="text" name="salary" value="<?= $salary ?>"></dd>
				<dt>Web Site url</dt>
				<dd><input type="text" name="url" value="<?= $url ?>"></dd>
				<dt>Overall GPA</dt>
				<dd><input type="text" name="gpa" value="<?= $gpa ?>"></dd>
				<dt>&nbsp;</dt>
				<dd><input type="submit" value="Register"></dd>
			</dl>

		</form>

		

		

	</body>
</html>