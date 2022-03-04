<?php
require 'db1c.php';
$query='select * from class';?>
<html>
    <body>
        <table border="1"><tr><th>Name</th><th>Roll No</th><th>Email</th></tr>
<?php
if($is_query_run=mysqli_query($con,$query))
{
         while($query_execute=mysqli_fetch_assoc($is_query_run))
        {?>
<tr><td><?php echo $query_execute['name'];?></td>
             <td><?php echo $query_execute['rollno'];?></td>
            <td><?php echo $query_execute['mail id'];?></td></tr>
   <?php }
}
else
{
    echo "query not executed";
}
?>
</table>
</body>
</html>