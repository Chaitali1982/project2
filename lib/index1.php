<?php include'connect.php' ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</br>
</br>
<a href ="index.php">Home</a><br/><br/>

<a href ="add.php">Add new</a><br/><br/>
<a href ="try1.php">Search</a><br/><br/>

</br>
</br>

<table border ="1" cellspacing="0" cellpadding="5px">
<tr>
<th>id</th>
<th>First Name</th>


<th>Action</th>
<th>Action</th>

</tr>

<?php
$results_per_page = 10;
$sql='SELECT * FROM records';
$result = mysqli_query($con, $sql);

$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {

  $page = 1;

} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$sql ="select id, first FROM  records LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
  
    while($row = mysqli_fetch_assoc($result)){

        ?>
<tr>
<td><?=$row['id']?></td>
<td><?=$row['first']?></td>




<td><a href ="edit.php?id=<?=$row['id']?>">Edit</a></td>
<td><a href ="delete.php?id=<?=$row['id']?>">Delete</a></td>

</tr>

<?php



    }
}

for ($page=1;$page<=$number_of_pages;$page++) {
 
  echo '<a href="index1.php?page=' . $page . '">' . $page . '</a> ';
 }

?>
</table>


