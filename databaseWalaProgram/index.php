<html>
<head>
<style>
div {
	align:center;
	width:400px;
	height:300px;
border: solid black;
background-color:orange;
 
padding: 20px;
}
 
</style>
</head>
<body>
<div>
<h1>Enter data for Student</h1>
<form  method="post">
Name:<br />
<input type="text" name="name"/><br />
Roll number:<br />
<input type="text" name="rno"/><br />

Branch:<br />
<input type="text" name="branch"/><br />

Semester:<br />
<input type="text" name="semester"/>

<br><br>
<input type="submit" name="OK" />

</form>
<?php  
$con=mysqli_connect("localhost","root","","student");
if(isset($_POST['OK'])){
$name =$_POST['name'];
$rno =$_POST['rno'];   
$branch=$_POST['branch'];
$semester= $_POST['semester'];

$sql=mysqli_query($con,"INSERT INTO `students`(`name`, `rno`, `branch`, `semester`) VALUES ('$name','$rno','$branch','$semester')");

}
?> 
</div>
</body>
 
</html>