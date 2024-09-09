?php
$HOSTNAME='localhost';
$USERNAME='mlb13';
$PASSWORD='mlb13';
$DATABASE='mlb13';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "Connection successful";
}
else{
    die(mysqli_error($con));
}
?>
