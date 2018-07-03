<?php
include'php_connect.php';
extract($_POST);

if(isset($submit))
{ 
	$sub=$_POST["subject"];
	$name=$_POST['name'];
    $color=$_POST['color'];

	$sql="insert into students(subject,name,color) VALUES('$sub','$name','$color')";
    
	$result=mysql_query($sql);
 	if($result)
 		echo "Inserted";
 	else
 		echo "Not Inserted";

}

if($name!="" && $color!="")
{
if($query1)
{
echo "Updated successfully!";
}
else
{
echo "there is a problem in Databse";
}
}
else
{
echo "Please fill all details";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>final php file</title>
</head>
<body>
<form method="post" action="">
	
	<label >Please Select Subject</label>
 
 <select name="subject">
 <option>---Select Subject--</option>
 <option value="Android">Android</option>
 <option value="PHP">PHP</option>
 <option value="Java">Java</option>
 <option value="JavaScript">JavaScript</option>
 <option value="Maths">Maths</option>
 
 </select>
 Which Color your like most?
Name:<input type="text" name="name" />
<input type="radio" name="color" value="Red" />Red
<input type="radio" name="color" value="Green" />Green
<input type="radio" name="color" value="Black" />Black
<input type="radio" name="color" value="White" />White
<br/>

 <button type="submit" name="submit" >Submit</button>
 
 </form>
</body>
</html>
