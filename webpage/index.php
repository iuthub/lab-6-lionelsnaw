
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 <head> 
  <title>Validating Forms</title> 
  <link href="style.css" type="text/css" rel="stylesheet" /> 
 </head> 
 <body> 
  <?php if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
  <h1>Registration Form</h1> 
 
  <p> 
   This form validates user input and then displays "Thank You" page. 
  </p> 
   
  <hr /> 
   
  <h2>Please, fill below fields correctly</h2> 
  <form action="index.php"> 
   Name: <input type="text" name="name"> <br> 
   Email: <input type="text" name="email"> <br> 
   Username: <input type="text" name="username"> <br> 
   Password: <input type="text" name="password"> <br> 
   Confirm Password: <input type="text" name="confirm-password"> <br> 
   Date of Birth: <input type="text" name="dofb"> <br> 
   Gender: <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="female"> Female <br> 
   Merital Status: <input type="radio" name="mstatus" value="Single"> Single <input type="radio" name="mstatus" value="Married"> Married <input type="radio" name="mstatus" value="Divorced"> Divorced <input type="radio" name="mstatus" value="Widowed"> Widowed <br> 
   Address: <input type="text" name="address"> <br> 
   City: <input type="text" name="city"> <br> 
   Postal Code: <input type="text" name="postal-code"> <br> 
   Home Phone: <input type="text" name="home-phone"> <br>
   Mobile Phone: <input type="text" name="mobile-phone"> <br>
   Credit Card Number: <input type="text" name="credit-card"> <br>
   Credit Card Expiry Date: <input type="text" name="credit-card-expiry"> <br>
   Monthly Salary: <input type="text" name="monthly-salary"> <br>
   Web Site URL: <input type="text" name="web-site"><br>
   Overall GPA: <input type="text" name="gpa"><br>
   <input type="submit" name="Register" value="Reigster">
  </form> 
   
  <div> 
  
  </div> 
  <?php } else {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$pass = $_POST["password"];
			$pass2 = $_POST["pass_conf"];
			$date = $_POST["date"];
			$gender = $_POST["gender"];
			$status = $_POST["status"];
			$address = $_POST["address"];
			$city = $_POST["city"];
			$postal = $_POST["p_code"];
			$home = $_POST["h_number"];
			$mobile = $_POST["m_number"];
			$credit = $_POST["credit"];
			$expiry = $_POST["expiry"];
			$salary = $_POST["salary"];
			$url = $_POST["url"];
			$gpa = $_POST["gpa"];
			$res = "Validation error";
			if (preg_match("/^[[:alpha:]]{2,}$/i", $name))
			if (preg_match("/^[[:alnum:]]+@[[:alnum:]]+\.[[:alpha:]]{1,3}$/i", $email))
			if (preg_match("/^.{5,}$/i", $user))
			if (preg_match("/^(?=\w{6,10}$)(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})(?=\D*\d)/i", $pass))
			if ($pass == $pass2)
			if (preg_match("/^\d{2}\.\d{2}\.\d{4}$/i", $date))
			if (preg_match("/^(Male|Female)$/i", $gender))
			if (preg_match("/^(Single|Married|Divorced|Widowed)$/i", $status))
			if (preg_match("/^.+$/i", $address))
			if (preg_match("/^[[:alpha:]]+$/i", $city))
			if (preg_match("/^[0-9]{6}$/i", $postal))
			if (preg_match("/^[0-9]{9}$/i", $mobile))
			if (preg_match("/^[0-9]{9}$/i", $home))
			if (preg_match("/^[0-9]{16}$/i", $credit))
			if (preg_match("/^\d{2}\.\d{2}\.\d{4}$/i", $expiry))
			if (preg_match("/^UZS( +|)[\d,\.]+$/i", $salary))
			if (preg_match("/^(http|https):\/\/(www|).+$/i", $url))
			if (preg_match("/^([0-3]{1}(\.[0-9]{1,2}|)|4(\.[0-5]{1}[0-9]{0,1}|))$/i", $gpa))
				$res = "Thank you for registration!";
		?>
			<h1><?=$res?></h1>
		<?php } ?>
 </body> 
</html>