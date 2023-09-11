<?php
if(isset($_POST["generatebtn"])){
    $userName = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $courseName =$_POST["courseName"];
    $password =$_POST["password"];
    $batch =$_POST["batch"];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="plan">
		<div class="inner">
			
			<p class="title">Student Infromation</p>
			<ul class="features">
				<li>
					
					<span>Name:<?php if(isset($userName)){
                        echo $userName;
                    } ?></span>
				</li>
				<li>
					
					<span>CourseName: <?php if(isset($courseName)){
                        echo $courseName;
                    }?></span>
				</li>
				<li>
					
					<span>Phone: <?php if(isset($phone)){
                        echo $phone;
                    }?></span>
				</li>
				<li>
					
					<span>Email: <?php if(isset($email)){
                        echo $email;
                    }?></span>
				</li>
				<li>
					
					<span>Password: <?php if(isset($password)){
                        echo $password;
                    }?></span>
				</li>
				<li>
					
					<span>Batch No: <?php if(isset($batch)){
                        echo $batch;
                    }?></span>
				</li>
		
			</ul>
		
			</div>
		</div>
	</div>
</body>
</html>