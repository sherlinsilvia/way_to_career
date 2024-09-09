<?php
$registered=0;
$userexist=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'base.php';
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $DOB=$_POST['DOB'];
    $sql="SELECT * FROM career WHERE name='$name'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $userexist=1;
        }
        else{
            $sql="INSERT INTO career (name,password,email,DOB) VALUES ('$name','$password','$email','$DOB')";
            $result=mysqli_query($con,$sql);
            if($result)
        {
            $registered=1;
        }
        else{
            die(mysqli_error($con));
        }
       }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:black;
}

li {
  float: left;
}

li a {
  display: block;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:grey;
}
div.formstyle{
margin: 8px;
border: 1px solid grey;
padding-inline: 50px;
box-shadow: 0 2px 10px black;
padding: 20px;;
}
</style>
<title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    function formValidation()
    {
      let x = document.forms["form2"]["name"].value;
    
      if(x=='')
      {
        alert("Name must be filled out");
        return false;
      }
      function newFunction()
      {
        document.getElementById("form2").reset();
      }
    }</script>
   
    
</head>
<body>
<?php
  if($userexist)
  {
    echo'<div class="alert alert-danger">
    <strong>Error</strong><p>User already exists.</p></div>';
  }
  ?>
<?php
  if($registered)
  {
    echo'<div class="alert alert-success">
    <strong>Success!</strong><p>Registerd Successfully</p></div>';}?>
<center>
<img src="bg13.jpg.png" class="img-circle" alt="logo image" width="200" height="136"> 
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signin.php">sign Up</a></li>
      <li><a href="login.php">Login</a></li>
  </ul><br><br>
      <div class="container">
      <form action="signin.php" method="post" id="form2" name="form2" onSubmit="return formValidation()">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div><br>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div><br>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><br>
    <div class="form-group">
      <label for="DOB">DOB:</label>
      <input type="date" class="form-control" id="DOB" placeholder="Enter DOB" name="DOB">
    </div><br>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div><br>
    <button type="submit" class=btn btn-primary>SignUp</button>
  </form>
  </center>
</div>
  </body>
  </html>
