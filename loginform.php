<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

   $password_hash = md5($password);

    if(!empty($email) &&!empty($password)){
        $query = "SELECT 'id' FROM admins WHERE 'email' = '$email' and password = '$password_hash'";
        if ($query_run = mysqli_query($conn, $query)) {
            $query_num_row = mysqli_num_rows($query_run);
            if ($query_num_row==0){
                echo 'invalid email/password combination';
            }else if($query_num_row==1){
                $admin_id = mysqli_result($query_run, 0, 'id');
                  $_SESSION['admin_id'] = admin_id;
                      header('location: adminhome.php');
            }
        }
    }else {
        echo 'you must supply an email and password';
    }
}
    
?>

<form action="<?php echo $current_file; ?>" method="POST">
<table>
    <tr height="30">
	    <td>email:</td>
		<td><input type="email" name="email" placeholder="enter your email"></td>
	</tr>
    <tr>
	    <td>password:</td>
		<td><input type="password" name="password" placeholder="password"></td>
	</tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="login" name="login">   
        </td>
    </tr>
</table>
</form>