<?php
     require './send_mail.php';
    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){
        $name=htmlentities($_POST['name']);
        $email=htmlentities($_POST['email']);
        $message=htmlentities($_POST['message']);
        $to="contact@fortressboxes.tech";
        $subject="Contact Us Form";
        $header="From:".$email;
        $done=send_mail($to,$name,$subject,"from : ".$email." .\n".$message);
        if($done){header('location:./index.php?res=1#contact');}
        else{header('location:./index.php?res=2#contact');}
    }
?>