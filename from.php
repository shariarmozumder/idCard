<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h1 class="header">Create Your Virtual ID Card</h1>
 
  <form action="id.php" method="POST">
    <div class="user-box">
      <input type="text" name="username" required="" >
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="number" name="phone" required="">
      <label>Phone</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
      <div class="user-box">
      <input type="text" name="courseName" required="">
      <label>Course Name</label>
    </div>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div><center>
    <div class="user-box">
      <input type="number" name="batch" required="">
      <label>Batch No:</label>
    </div>
    
    <a href="#" name="btn" >
    <input type="submit" class="buton" value="GENERATE ID" name="generatebtn">
       <span></span>
    </a>
</center>
  </form>
</div>
</body>
</html>