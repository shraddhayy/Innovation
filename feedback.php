<?php
include("header.php");
?>
<div class="container-fluid">
<h1 align=center> valuable feedback </h1>
<?php
include("connection.php");
$rs=mysqli_query($cn,"select* from feedback");
$i=0;
while($a=mysqli_fetch_array($rs))
{
extract($a);
?>
<div class="row">
<div class="col-md-12">
<div class="thumbnail">
<div class="caption">
<h3><?php echo $emailid;?></h3>
<b><?php echo $details;?></b>
</div>
</a>
</div>
</div>
</div>
<?php
}
?>
</div>
<?php
include("footer.php");
?>