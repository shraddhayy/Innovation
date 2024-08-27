<?php
include("header.php");
?>
<div class="container-fluid">
<h1 align=center>Recent Admissions</h1>
<hr>
<table class="table table-bordered">
<thead>
<tr>
<th>
Email Id </th><th>Qualification</th><th>course</th><th>Address</th>
</tr>
</thead>
<tbody>
<?php
include("../connection.php");
$rs=mysqli_query($cn,"select*from admission");
while($a=mysqli_fetch_array($rs))
{
extract($a=mysqli_fetch_array($rs))
{
extract($a);
echo "<tr><td>$emailid</td><td>$qualification</td><td>$course</td><td>$address</td></tr>";
}
?>
</tbody>
</table>
</div>

<?php
include("footer.php");
?>