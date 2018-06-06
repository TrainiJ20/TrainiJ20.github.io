<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	function let($str) {
		return preg_replace("/[^a-zA-Z]/", "", $str);
	}

	function letNum($str) {
		return preg_replace("/[^a-zA-Z0-9]/", "", $str);
	}

	$fname = "";
	$lname = "";
	$address = "";
	$suburb = "";
	$email = "";
	$password = "";
	$confirm = "";
	$errors = [];
	$con = mysqli_connect('localhost', 'root', '', 'pro');
	date_default_timezone_set('Australia/Sydney');

  ################# SIGNUP #################

	if (isset($_POST['signup'])) {

		$fname = let($_POST['fname']);
		$lname = let($_POST['lname']);
		$address = $_POST['address'];
		//$suburb = $_POST['suburb'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];

    if (empty($fname)) { $errors[] = "First name is required"; }
		if (empty($lname)) { $errors[] = "Last name is required"; }
		if (empty($address)) { $errors[] = "Address is required"; }
		//if (empty($type)) { $errors[] = "Type is required"; }
		if (empty($email)) { $errors[] = "Email is required"; }
    if (empty($password)) { $errors[] = "Password is required"; }

		if ($email != filter_var($email, FILTER_SANITIZE_EMAIL)) {
			$errors[] = "Email is invalid";
			$email = "";
		}

		if ($password != $confirm) {
			$errors[] = "Passwords do not match";
		}

    $query = "SELECT id FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con, $query);
    if($result->num_rows != 0) {
      $errors[] = "Email already in use";
			$email = "";
    }

		if (count($errors) == 0) {

			$password = password_hash($password, PASSWORD_BCRYPT);
			$fname = mysqli_real_escape_string($con, $fname);
			$lname = mysqli_real_escape_string($con, $lname);
			$address = mysqli_real_escape_string($con, $address);
			$suburb = mysqli_real_escape_string($con, $suburb);
			$email = mysqli_real_escape_string($con, $email);
			$password = mysqli_real_escape_string($con, $password);
			$date = date('d/m/Y H:i:s');

			$query = "INSERT INTO users (created, fname, lname, address, suburb, email, password)
					  VALUES('$date', '$fname', '$lname', '$address', '$suburb', '$email', '$password')";
			mysqli_query($con, $query);

			$query = "SELECT id FROM users WHERE email='$email' LIMIT 1";
			$results = mysqli_query($con, $query);
			$row = mysqli_fetch_array($results,MYSQLI_BOTH);
			$id = $row["id"];

			$_SESSION['id'] = $id;
			//header('location: http://gtn/index.php');
			die();

			// ################### IMAGE UPLOAD #################
			// $target_dir = "dp/";
			// $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
			// $target_file = "dp/".$_SESSION['id']."2.".$imageFileType;
			// $uploadOk = 1;
			// // Check if image file is a actual image or fake image
			// if(isset($_POST["submit"])) {
			//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			//     if($check == false) {
			//         $errors[] = "File is not an image.";
			//         $uploadOk = 0;
			//     }
			// }
			//
			// // Allow certain file formats
			// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			//     $errors[] = "Sorry, only JPG, JPEG & PNG files are allowed.";
			//     $uploadOk = 0;
			// }
			// // Check if $uploadOk is set to 0 by an error
			// if ($uploadOk == 0) {
			//     $errors[] = "Sorry, your file was not uploaded.";
			// // if everything is ok, try to upload file
			// } else {
			//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//         $errors[] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			//     } else {
			//         $errors[] = "Sorry, there was an error uploading your file.";
			//     }
			// }
			// ##################################################
		}

	}

  ################# LOGIN #################

	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if (empty($email)) {
			$errors[] = "Email is required";
		}
		if (empty($password)) {
			$errors[] = "Password is required";
		}

		if (count($errors) == 0) {

			$query = "SELECT id, password FROM users WHERE email='$email' LIMIT 1";
			$results = mysqli_query($con, $query);
			$hash = "";
			$row = mysqli_fetch_array($results,MYSQLI_BOTH);
			$id = $row["id"];
			$hash = $row["password"];
			$date = date('d/m/Y H:i:s');

			if (password_verify($password, $hash)) {
				$query = "UPDATE users SET last_login='$date' WHERE id = '$id'";
		    $result = mysqli_query($con, $query);
				$_SESSION['id'] = $id;
				header('location: http://gtn/index.php');
			}else {
				$errors[] = "Wrong email/password combination";
			}
		}
	}

?>
