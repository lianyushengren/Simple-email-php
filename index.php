<?php

    require "sendmail.class.php";
    $email = new  sendmail();
    $email->setServer("smtp.163.com", "18804038158@163.com", "515266zhai", 25);
    $email->setFrom("zsl");
    $email->setReceiver('1002832816@qq.com');
    $subject = "email test";
    $body = "hello world";
    $email->setMail($subject, $body);
    $email->sendMail();
