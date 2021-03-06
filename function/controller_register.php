<?php

include_once("core/init.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require 'vendor/autoload.php';


// validasi register
if(isset($_POST['submit']) ){
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $tgl_lahir =$_POST['tgl_lahir'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $profesi = $_POST['profesi'];
    $perusahaan = $_POST['perusahaan'];
    $bagian = $_POST['bagian'];
  
    if($bagian=='hustler'){
    $keahlian = $_POST['keahlian_hustler'];
    }
    else if($bagian =='hacker'){    
    $keahlian = $_POST['keahlian_hacker'];
    }else if($bagian =='hipster'){
    $keahlian = $_POST['keahlian_hipster'];
    }else{
        $keahlian = $_POST['other'];
    }
    $instagram = $_POST['instagram'];
    $linkedln = $_POST['linkedln'];
    $facebook = $_POST['facebook'];

    $hash = md5( rand(0,1000) );
    $active = 0;
    $foto = 0;
    date_default_timezone_set("Asia/Bangkok");
    $time = new DateTime();
    $join_date = $time->format('d-m-Y h:i:s');
    // verifikasi_email($email);
    if( !empty(trim($nama)) && !empty(trim($email)) ){
        if(register_cek_email($email)){
        // cek register ke database
          if (register_user($nama, $pass, $gender, $tgl_lahir, $kota, $email, $no_hp, $profesi, $perusahaan, $bagian, $keahlian, $instagram, $linkedln, $facebook, $hash, $active, $foto, $join_date)){
                   $mail = new PHPMailer;
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            //Set the hostname of the mail server
            $mail->Host = 'tls://smtp.gmail.com:587';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "info@bandungdigitalvalley.com";
            //Password to use for SMTP authentication
            $mail->Password = "Pass@w0rd26";
            //Set who the message is to be sent from
            $mail->setFrom('info@bandungdigital.com', 'Email Verification');

            //Set who the message is to be sent to
            $mail->addAddress($email, 'BDV');
            //Set the subject line
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = trim("Signup | Verification");
            $blank = ' ';
            $message = '<html>
<head>
<style>
.tombol {
    padding: 10px;
    background: #2ca8e0;
    border-radius: 5px;
    text-decoration:none;
    color:white;
}
table {
    border-top: 1px solid #2ca8e0;
border-bottom: 1px solid #2ca8e0;
border-left: 1px solid #2ca8e0;
border-right: 1px solid #2ca8e0;
padding: 10px;
}

</style>
</head>
<body style="font-family:calibri">
      <center> <table width="400">
        <tr>
          <td style="text-align:right"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw9mvNpXW3bhoWauYmDj7bGMFYJgUwQe-cBl5k0nbgCdtKclIh" height="80"> </td>
        </tr>
        <tr>
            <td style="padding-bottom:20px;">
            <h4> Thank You, ' .$nama. '! </h4>
            <p> Please confirm your registration in BDV by clicking the link below.</p> <br>
            <a class="tombol" href="http://riset.bandungdigitalvalley.com/konfirm.php?email=' .$email. '&hash=' .$hash. '"> Confirm Registration </a>
        </tr>
        <tr>
          <td style=" height:50; text-align:center"> <a style="text-decoration:none; color:#2ca8e0;" href="http://bandungdigitalvalley.com/"> www.bandungdigitalvalley.com </a> </td>
        </tr>
      </table> </center>
</body>
    </html>'; // Our message above including the link
            $mail->MsgHTML($message);
             // Send our email
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                header("Location: check_email.php");
            }

          } else {
            echo "<script>alert('Gagal daftar')</script>";
        }
      } else {
           echo "<script>alert('Email Anda sudah ada, anda tidak bisa daftar!')</script>";
        }
    } else {
      echo "<script>alert('Email Tidak boleh kosong')</script>";
    }
}
