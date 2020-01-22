
<?php  

$connect = mysqli_connect("localhost","root","","phplearning");
$input = filter_input_array(INPUT_POST);

$username = mysqli_real_escape_string($connect, $input["username"]);
$dept = mysqli_real_escape_string($connect, $input["dept"]);
$class = mysqli_real_escape_string($connect, $input["class"]);
$classinst= mysqli_real_escape_string($connect, $input["classinst"]);
$maths = mysqli_real_escape_string($connect, $input["maths"]);
$english = mysqli_real_escape_string($connect, $input["english"]);
$physics = mysqli_real_escape_string($connect, $input["physics"]);
$chem = mysqli_real_escape_string($connect, $input["chem"]);
$biology = mysqli_real_escape_string($connect, $input["biology"]);
$history = mysqli_real_escape_string($connect, $input["history"]);
$geo = mysqli_real_escape_string($connect, $input["geo"]);
$eco = mysqli_real_escape_string($connect, $input["eco"]);
$ict = mysqli_real_escape_string($connect, $input["ict"]);
$hpe = mysqli_real_escape_string($connect, $input["hpe"]);
$conduct = mysqli_real_escape_string($connect, $input["conduct"]);
$average = mysqli_real_escape_string($connect, $input["average"]);
$rank = mysqli_real_escape_string($connect, $input["rank"]);
if($input["action"] === 'edit')
{
$query = "
UPDATE asses
SET username = '".$username."', 
email = '".$email."' ,
gender = '".$gender."' ,
pnum = '".$pnum."' ,
cnum = '".$cnum."' ,
cid = '".$cid."' ,
WHERE id = '".$input["id"]."'
";

mysqli_query($connect, $query);
 header('location:adminfam.php'); 

}
if($input["action"] === 'delete')
{
$query = "
DELETE FROM asses
WHERE id = '".$input["id"]."'
";
mysqli_query($connect, $query);
  header('location:adminfam.php'); 
}

echo json_encode($input);

?>