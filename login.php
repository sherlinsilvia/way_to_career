<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST') {
    include 'base.php';
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM career WHERE name='$name' AND password='$password'";
    $result=mysqli_query($con,$sql);
    if($result) {
        $num=mysqli_num_rows($result);
        if($num>0) {
          $row=mysqli_fetch_assoc($result);
          $name=$row['name'];
          $email=$row['email'];
          $DOB=$row['DOB'];
            $logged=1;
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['DOB']=$DOB;
            header('location:way_to_career.php');
                }
                else{
                    $invalid=1;
                }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function formValidation() {
let x = document.forms["form1"]["name"].value;
if (x == '') { //if the field is empty
alert("Name must be filled out");
return false;
}
}
function newFunction(){
document.getElementById("Form1").reset(); // used to access the id
}
</script>
    <title>Document</title>
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
</head>
<body>
<?php
    if($logged)
    {
      echo'<div class="alert alert-success">
      <strong>Success!</strong><p>login successfully.</p></div>';
    }
    ?>
    <?php
    if($invalid)
    {
      echo'<div class="alert alert-danger">
      <strong>Error!</strong><p>Invalid username.</p></div>';
    }
    ?>
    <img src="bg13.jpg.png" class="img-circle" alt="logo image" width="200" height="136"> 
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signin.php">sign Up</a></li>
      <li><a href="login.php">Login</a></li>
  </ul><br><br>
      <div class="container">
      <form action="login.php" method="post" id="Form1" name="form1" onSubmit="return formValidation()">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div><br>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><br>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div><br>
    <div class="form-group">
      <label for="DOB">DOB:</label>
      <input type="date" class="form-control" id="DOB" placeholder="Enter DOB" name="DOB">
    </div><br>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div><br>
    <input type="submit" value="submit">
  </form>
</div>
  </body>
  </html>
