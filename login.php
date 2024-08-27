<?php
session_start();
include("header.php");
?>

<div class="container">
<h1 align=center>login here</h1>
<hr>
<form method=POST>
<div class="form-group">
 <label for="email">Email address:</lable>
<input type="email" class="form-control"id="email" name="em">
</div>

<div class="form-group">
<label for="pwd">Email password:</lable>
<input type="password" class="form-control"id="pwd" name="ps">
</div>

<button name=btnsub type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
include("connection.php");
extract($_POST);
$q="select* from registration where emailid='$em' and password='$ps'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
$_SESSION['emailid']=$em;
echo"<script>window.location='user/index.php'</script>";
}
else
echo"<font color=red>incorrect user name or password </font>";
mysqli_close($cn);
}
?>
