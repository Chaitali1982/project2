<?php 
include 'connect.php';



if(isset($_POST['btn_submit'])){
    $sql= "update records set first ='".$_POST['txt_first']."',
    lastN ='".$_POST['txt_lastN']."',
    job ='".$_POST['txt_job']."',
    email ='".$_POST['txt_email']."',
    dID ='".$_POST['txt_dID']."',
    dept ='".$_POST['txt_dept']."',
    visit ='".$_POST['txt_visit']."',
    place ='".$_POST['txt_place']."'
    where id =' ".$_POST['txt_id']."'";
    if(mysqli_query($con,$sql)){
        header('Location:index1.php');
    }
    else{
        echo "Error" .mysqli_error($conn);
    }
}
$id ='';
$first ='';
$lastN = '';
$job = '';
$email = '';
$dID = '';
$dept = '';
$visit = '';
$place = '';

if(isset($_GET['id'])){
    $sql = "select id,first,lastN,job,email,dID,dept,visit,place from records where id =".$_GET['id'];
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $first = $row['first'];
        $lastN = $row['lastN'];
        $job = $row['job'];
        $email = $row['email'];
        $dID = $row['dID'];
        $dept = $row['dept'];
        $visit = $row['visit'];
        $place = $row['place'];
    }
}
?>

<h2>Add user</h2>
<form action =" " method="post">
<table>
<tr>
<td>Firstname</td>
<td><input name ="txt_first" value="<?=$first?>" ></td>
</tr>
<td>Lastname</td>
<td><input name ="txt_lastN" value="<?=$lastN?>" ></td>
</tr>
<tr>
<td>jobTitle</td>
<td><input name="txt_job" value="<?=$job?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input name="txt_email" value="<?=$email?>"></td>
</tr>
<tr>
<td>Department ID</td>
<td><input name="txt_dID" value="<?=$dID?>"></td>
</tr>
<tr>
<td>Department</td>
<td><input name="txt_dept" value="<?=$dept?>"></td>
</tr>
<tr>
<td>Location ID</td>
<td><input name="txt_visit" value="<?=$visit?>"></td>
</tr>
<tr>
<td>Place</td>
<td><input name="txt_place" value="<?=$place?>"></td>
</tr>
<tr>
<td><input type="hidden" name="txt_id"value="<?=$id?>"></td>
<td><input type="submit" name="btn_submit" ></td>
</tr>
</table>
</form>
