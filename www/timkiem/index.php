<?php
if($_SERVER['REQUEST_METHOD']==='POST')
    $name=$_POST['name'];
?>
<form action="index.php" method="post">
    Ten : <input type="text" name="name">
    <input type="submit" name ="submit">
</form>
