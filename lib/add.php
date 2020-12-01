<?php 
include 'connect.php';



if(isset($_POST['btn_submit'])){
    $sql= "insert into records(first,lastN,job,email,dID,dept,visit,place) values('".$_POST['txt_first']."','".$_POST['txt_lastN']."','".$_POST['txt_job']."','".$_POST['txt_email']."','".$_POST['txt_dID']."','".$_POST['txt_dept']."','".$_POST['txt_visit']."','".$_POST['txt_place']."')";
    if(mysqli_query($con,$sql)){
        header('Location:index1.php');
    }
    else{
        echo "Error" .mysqli_error($conn);
    }
}
?>

<h2>Add user</h2>
<form action =" " method="post">
<table>
<tr>
<td>Firstname</td>
<td><input name="txt_first" ></td>
</tr>
<tr>
<td>Lastname</td>
<td><input name="txt_lastN"></td>
</tr>
<tr>
<td>jobtitle</td>
<td><input name="txt_job"></td>
</tr>
<tr>
<td>Email</td>
<td><input name="txt_email"></td>
</tr>
<tr>
<td>Department ID</td>
<td><input name="txt_dID"></td>
</tr>
<tr>
<td>Department </td>
<td><input name="txt_dept"></td>
</tr>
<tr>
<td>Location </td>
<td><input name="txt_visit"></td>
</tr>
<tr>
<td>Location ID</td>
<td><input name="txt_place"></td>
</tr>
<tr>

<td><input type="submit" name="btn_submit" ></td>
</tr>
</table>
</form>
