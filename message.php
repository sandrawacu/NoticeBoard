<?php
session_start();
      include ('dbconnect.php');
      $message="";
      $to="";
      if(isset($_POST['send']))
      {
      $msg=$_POST['message'];
      $to=$_POST['to'];
          
        $message =$msg;
        $sender_id = '254sms'; //Default senderId
        $phone = $to; //for multiple concatinate with comma(,)
        $apikey = 'Y2JkMGRhZTY4YTI2YWI4ZTg3YTVhNm'; // Check under HTTP API in 254sms.com
        $username= 'Wacu'; // Your 254sms.com Username
        $url = 'http://api.254sms.com/version1/sendsms';
        $data = array(
            'username' => $username,
            'api_key' => $apikey,
            'sender_id' => $sender_id,
            'phone' => $phone,
            'message' => $message  
        );
        $payload = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result;
        $_SESSION['messagesuccess'] =$result;
        header('location: sendmessage.php');
      }
?>