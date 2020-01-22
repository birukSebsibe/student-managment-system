
<?php  

$connect = mysqli_connect("localhost","root","","phplearning");
$input = filter_input_array(INPUT_POST);

$username = mysqli_real_escape_string($connect, $input["username"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$gender = mysqli_real_escape_string($connect, $input["gender"]);
$pnum = mysqli_real_escape_string($connect, $input["pnum"]);
$assignedClass = mysqli_real_escape_string($connect, $input["assignedClass"]);
$date = mysqli_real_escape_string($connect, $input["date"]);

if($input["action"] === 'edit')
{
$query = "
UPDATE teacher 
SET username = '".$username."', 
email = '".$email."' ,
gender = '".$gender."' ,
pnum = '".$pnum."' ,
assignedClass = '".$assignedClass."' ,
date = '".$date."' ,
WHERE id = '".$input["id"]."'
";

mysqli_query($connect, $query);
 header('location:admint.php'); 

}
if($input["action"] === 'delete')
{
$query = "
DELETE FROM teacher
WHERE id = '".$input["id"]."'
";
mysqli_query($connect, $query);
  header('location:admint.php'); 
}

echo json_encode($input);

?>