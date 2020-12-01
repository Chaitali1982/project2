<?php 
 include 'connect1.php';




if(isset($_POST['btn_submit'])){
    $sql= "update department set name ='".$_POST['txt_name']."',
    locationID ='".$_POST['txt_locationID']."',
    
    where id1 =' ".$_POST['txt_id1']."'";
    if(mysqli_query($con,$sql)){
        header('Location:dept.php');
    }
    else{
        echo "Error" .mysqli_error($con);
    }
}
$id1 ='';
$name ='';
$locationID = '';


if(isset($_GET['id1'])){
    $sql = "select id1,name,locationID from department where id1 =".$_GET['id1'];
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $id1 = $row['id1'];
        $name = $row['name'];
        $locationID = $row['locationID'];
       
    }
}
?>

<h2>Add user</h2>
<form action =" " method="post">
<table>
<tr>
<td>Name</td>
<td><input name ="txt_name" value="<?=$name?>" ></td>
</tr>
<td>Location</td>
<td><input name ="txt_locationID" value="<?=$locationID?>" ></td>
</tr>

<tr>
<td><input type="hidden" name="txt_id1"value="<?=$id1?>"></td>
<td><input type="submit" name="btn_submit" ></td>
</tr>
</table>
</form>
