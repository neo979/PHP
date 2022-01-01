<html>
    <head></head>
    <body>
<?php
include "config.php";
$find=$_GET["search"];
$sql="SELECT * FROM storage WHERE id=$find";
$output=$conn->query($sql);
if($output->num_rows>0)
{
    while($row=$output->fetch_assoc())
    {
        echo $row["sno"];   }
}
else
{
    echo"not found";
}
?>
</body>
</html>
