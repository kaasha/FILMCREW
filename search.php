<table>
<?php
    // Insert query as per database
    $sql=$db->prepare('SELECT * FROM mytable WHERE fname=:category OR lname=:category OR loc=:category OR race=:category OR bio=:category'  );
    $sql->execute(array(':category'=>$_REQUEST[searchcategory]));

    while ($row=$sql->fetch())
    {
       
       echo "<tr><td>$row[fname]</td><td>$row[lname]</td><td>$row[bio]</td></tr>";
    }
?>
</table>