<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$cardname = mysqli_real_escape_string($link, $_REQUEST['cardname']);
$cardnumber = mysqli_real_escape_string($link, $_REQUEST['cardnumber']);
$expmonth = mysqli_real_escape_string($link, $_REQUEST['expmonth']);
$expyear = mysqli_real_escape_string($link, $_REQUEST['expyear']);
$cvv = mysqli_real_escape_string($link, $_REQUEST['cvv']);
$amt = mysqli_real_escape_string($link, $_REQUEST['amt']);


// Attempt insert query execution
$sql = "INSERT INTO bill (firstname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv, amt) VALUES ('$firstname', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv','$amt' )";
if(mysqli_query($link, $sql)){
    echo "<script>
    alert('Congratulation your order placed sucessfully');
                 
    window.location.href='index.php';
    </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>