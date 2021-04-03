<?php
$firstname= $_POST['firstname'];
$lasttname= $_POST['lastname'];
$email= $_POST['emailid'];
$phone= $_POST['phno'];
$tub= $_POST['tb'];
$date= $_POST['date'];

 if (!empty($firstname) || !empty($lastname) || !empty($emailid) || !empty($phone) || !empty($date)){
		$host="localhost";
		$dbUsername="root";
		$dbPassword="";
		$dbname="miva";
		
		//create connectioin
		$conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		} else {
			$SELECT = "SELECT email from booking where email = ? Limit 1";
			$INSERT = "INSERT Into booking (firstname, lastname, email, phone, tub, date) values(?, ?, ?, ?, ?, ?)";
			
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum==0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssss", $firstname, $lastname, $email, $phone, $tub, $date);
				$stmt->execute();
				echo "New record inserted sucessfully";
			} else {
				echo "someone already registered using this mail";
			}
			$stmt->close();
			$conn->close();
		}
 } else {
	echo"All fields are required";
	die();
 }
?>