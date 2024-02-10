<form method="post">
    <div>
        <h5>Reset Password</h5>
    </div>
    <div>
    <label for="">Email Address</label>    
<input type="text" name="email" value="">
    </div>
    <div>
        <button type="submit" name="password_reset_link" class="">Send Password Reset Link</button>
    </div>
</form>
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;  
require 'vendor/autoload.php';

function send_password_reset($userName, $email, $token, $id){
$mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    // $mail->SMTPDebug = 2;
    $mail->Host="smtp.gmail.com";
    $mail->Username="jlimbu539@gmail.com";
    $mail->Password="gxys faab ljte ngjs";
    $mail->SMTPSecure="tls";
    $mail->Port=587;
    $mail->setFrom($email, $userName);
    $mail->addAddress("icejan181@gmail.com");
    $mail->isHTML(true);
    $mail->Subject="Reset Password Notification";
    $email_template="<h2>Password Reset</h2>
    <a href='http://localhost/college/usermgmtsys/reset_password_form.php?token=$token&email=$email'>Click Me</a>
    ";
    $mail->Body=$email_template;
    $mail->send();

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo "Mail was sent successfully";
        $_SESSION['id']=$id;
        $_SESSION['tokenactivated']=TRUE;

    }
}

include("connection.php");
if(isset($_POST['password_reset_link'])){
$email=$_POST['email'];
$token=md5(rand());
$fetch_email="SELECT id,email, userName from user WHERE email='$email' LIMIT 1";
$fetch=mysqli_query($conn, $fetch_email);

if(mysqli_num_rows($fetch)>0){
$row=mysqli_fetch_array($fetch);
$id=$row['id'];
$email=$row['email'];
$userName=$row['userName'];
$update_token="UPDATE user SET token='$token' WHERE email='$email'";
$update_token_query=mysqli_query($conn, $update_token);
if($update_token_query){
  send_password_reset($userName, $email,$token,$id);

}else{
    print_r("failed");

}

}else{
    echo "email not found";
}


}


?>