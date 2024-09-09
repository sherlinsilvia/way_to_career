<?php
$logged =0;
$invalid =0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server.php';
  $name=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM table1 WHERE email='$name' AND password='$password'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $logged=1;
      session_start();
      $session['name']=$name;
      header('location:signup.php');
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
  <title>cakes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function formValidation(){
    let x=document.forms["form1"]["email"].value;
    if (x==''){
      alert("Email must be filled out");
      return false;
    }
  function newFunction(){
    document.getElementById("form1").result();
  }
}
</script>
</head>
<body> <?php
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
    <strong>Error!</strong><p>Invalid username.</p></div>';}?>
<div class="container mt-3">
  <h2>LOGIN</h2>
  <form action='login.php' method="POST" id="form1" name="form1" onSubmit="return formValidation()">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
