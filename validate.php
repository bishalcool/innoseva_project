<?php
if ( ! empty($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}

if ( ! empty($_POST['lastname'])){
    $lastname = $_POST['lastname'];
}


if ( ! empty($_POST['phone'])){
    $phone = $_POST['phone'];
}

if ( ! empty($_POST['address'])){
    $address = $_POST['address'];
}

$search      = $firstname.",".$lastname.",".$phone.",".$address;
$lines       = file('records.csv');
$line_number = false;

while (list($key, $line) = each($lines) and !$line_number) {

   $line_number = (strpos($line, $search) !== FALSE);

}


?>

<html>
<head>
<title>Authenticate Result</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="row" style="text-align:center;">

<?php
if($line_number){

   echo "<h2>Welcome to website " .$firstname."</h2>";

}

else{
   echo "<h2>Sorry we dont recognise you</h2>";
}
?>

</div>
</body>
</html>