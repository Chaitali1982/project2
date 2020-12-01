<?php include'connect.php' ?>

<h2>Company Directory</h2>

<a href ="index.php">Home</a><br/><br/>


</br>
</br>
<form method="post">
<label>Search By ID: </label>
<input type="text" name="search">

<input type="submit" name="submit">
	
</form>
<table border ="1" cellspacing="0" cellpadding="5px">
<tr>
<th>id</th>
<th>First Name</th>


<th>Last Name</th>
<th>Job</th>
<th>email</th>
<th>Department ID</th>
<th>Department </th>
<th>Location ID</th>
<th>Place</th>
</tr>


<?php
if (isset($_POST["submit"])) {
$str = $_POST["search"];

$sql ="select id,first ,lastN,job,email,dID,dept,visit,place  from records WHERE id = $str " ;
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        ?>
<tr>
<td><?=$row['id']?></td>
<td><?=$row['first']?></td>
<td><?=$row['lastN']?></td>

<td><?=$row['job']?></td>
<td><?=$row['email']?></td>
<td><?=$row['dID']?></td>
<td><?=$row['dept']?></td>
<td><?=$row['visit']?></td>
<td><?=$row['place']?></td>



</tr>


<?php



}
}
}

?>


</table>


