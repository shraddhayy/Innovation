   <?php
include("header.php");
?>
<div class="container-fluid">
<h1 align=center> our courses</h1>
<div class="row">
<?php
include("connection.php");
$rs=mysqli_query($a,"select from course");
$i=O;
while($a=mysqli_fetch_array($rs))
{
extract($a);
?>
<div class="col-md-4">
<div class="thumbnail">
<a href="images/<?php echo $photo;?>" target="_blank">
<img src="images/<?php echo $photo;?>"class="img-responsive">
<div class="caption">
<h3><?php echo $coursename;?></h3>
<b><?php echo $duration; ?></b>
<big>$<?php echo $fees;?></big>
</div>
</a>
</div>
</div>

<?php
$i++;
if($i==3)
{
echo"</div><div class=row>";
$i=O;
}
}
?>
</div>

<?php
include("footer.php");
?>