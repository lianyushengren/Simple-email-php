<?php
    /*
    require "sendmail.class.php";
    $email = new  sendmail();
    $email->setServer("pop.163.com", "18804038158@163.com", "515266zhai", 25);
    $email->setFrom("zsl");
    $email->setReceiver('1002832816@qq.com');
    $subject = "email test";
    $body = "hello world";
    $email->setMail($subject, $body);
    $email->sendMail();
    // echo "$email->error";
    */
    
    require "smtp.php";
    $smtpserver = "smtp.163.com";
    $smtpserverport = 25;
    $smtpusermail = "18804038158@163.com";
    $smtpemailto = "1002832816@qq.com";
    $smtpuser = "18804038158";
    $smtppass = "515266zhai";
    $mailsubject = "测试邮件发送";
    $mailbody = "PHP+MySQL";
    $mailtype = "TXT";
    $smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);
    $smtp->debug = true;
    $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
