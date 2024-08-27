<?php
include(header.php);
?>
<div class="container">
<h1 align=center> Register here </h1>
<hr>

<form method=POST>
<div class="form-group">
<label for="name"> Name:</label>
<input type="text" class="form-control" id="name" name="nm">
</div>

<div class="form-group">
<label for="contact"> contact:</label>
<input type="text" class="form-control" id="contact" name="con">
</div>
<div class="form-group">
<label for="email"> email address:</label>
<input type="email" class="form-control" id="email" name="em">
</div>
<div class="form-group">
<label for="pwd"> password:</label>
<input type="password" class="form-control" id="pwd" name="ps">
</div>

<button name=btnsub type="submit" class=btn btn-primary"> Submit </button>
</form>
</div>
<?php

include("footer.php");
if(isset($_POST['btnsub']))
{
include("connection.php");
extract($_POST);
$q="insert into registration value ('$nm','$con','$ps')";
if(mysqli_query($cn,$q))
echo<script>alert('registrstion successful');window.location='login.php'</script>
else
echo"<script>alert('problem occured')</script>";
mysqli_close($cn);
}
?>