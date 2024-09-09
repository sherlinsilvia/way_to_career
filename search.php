<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<style>
  body{
    background-image: url('bg.gif');
    background-size: cover;
    
    
    
    height: 100vh;
    padding:0;
    margin:0;
}
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:grey;
}
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
  }
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
h3{
  color:white;
}
</style>
<body>
    <img src="bg13.jpg.png" class="img-circle" alt="logo image" width="200" height="136"> 
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="signin.php">sign Up</a></li>
      <li><a href="login.php">Login</a></li>
          </ul><br><br>
          <form class="d-flex">
             <input class="form-control me-2" type="text" placeholder="Search">
             <button class="btn btn-primary" type="button">Search</button>
             </form><br><br>
             <img src="elon.jpg" alt="elon musk" width="300" height="236">
             <img src="sundhar.jpg" alt="sundhar pichai" width="300" height="236">
             <img src="lynn.jpg" alt="sundhar pichai" width="300" height="236">
             <img src="nadella.jpg" alt="satya nadella" width="300" height="236"> 
             <img src="ellen.jpg" alt="Ellen" width="300" height="236"> 
             <br>
             <h3>ELON MUSK.......................SUNDAR PICHAI...................... LYNN CONWAY ............SATYA NADELLA...........ellen ochoa</h3><br><br>
            <div class="row">
    <div class="col-sm-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dKqkpqT3gps"></iframe>
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YPE2dO5sII0"></iframe>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/C31rj-bZ7dA"></iframe>
          </div>
          </div>
          <div class="col-sm-6">
      <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2H4z1g-eHyU"></iframe>
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7E-cwdnsiow"></iframe>
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cOIJGGgaSIY"></iframe>
          </div>
          </div>
          <div class="col-sm-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h89uOvUDVO4"></iframe>
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/womOfwmu3uY"></iframe>
          </div>
          </div>
</body>
</html>

