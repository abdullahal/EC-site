<?php

	require_once("connection.php");


			// grab data from User input form.  
			
			$f_name =$_POST['first_name'];
			$l_name =$_POST['last_name'];
			$email =$_POST['email'];
			$password =$_POST['pass'];
			$password = md5($password); // password encript with md5 function  
			$phone_number =$_POST['phone'];

//echo $f_name.'</br>'.$l_name.'</br>'.$email.'</br>'.$password.'</br>'.$phone_number; 

// create sql insert connction

	$reg_sql_insert="INSERT INTO `user`(`First_name`, `Last_name`, `Email`, `Phone_number`, `Password`) 
					VALUES ('$f_name','$l_name','$email','$password','$phone_number')"; // values are set by grabbed variable from line number L-8 to L-13

// compile the query 						

	$reg_query = mysqli_query($con,$reg_sql_insert);
	
	
	/*
	if($reg_query){
			echo "<script type='javascript/text'>";
			echo "alert('Registration Successfully done');";
			echo "window.location.href = 'index.php';";
			echo "</script>";

	}
	else
	{
			echo "<script type='javascript/text'>";
			echo "alert('Registration no successfully');";
			echo "window.location.href ='register.php';";
			echo "</script>";
	
	}*/
	
if($reg_query) header("location:index.php");
else header("location:register.php");

?>