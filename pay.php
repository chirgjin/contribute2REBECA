<?php
  //This script receives data from front end and processes it to the instamojo payment gateway

  $product_name = "REBECA 2018 Collection";  //$_GET["product_name"];
  $price = $_GET["amount"];
  $name = $_GET["name"];
  $phone = $_GET["phone"];
  $email = $_GET["email"];


  include 'src/instamojo.php';

  //keys are changed
  $api = new Instamojo\Instamojo('ebe26cfa317f3b9adef35adf7a76cd35', 'e2b6ad21a4870c2648b6007839c33f96','https://www.instamojo.com/api/1.1/');

  try {
      $response = $api->paymentRequestCreate(array(
          "purpose" => $product_name,
          "amount" => $price,
          "buyer_name" => $name,
          "phone" => $phone,
          "send_email" => true,
          "send_sms" => true,
          "email" => $email,
          'allow_repeated_payments' => false,
          "redirect_url" => "http://rebeca2k18.com/contribute/thankyou.php",
          "webhook" => "http://rebeca2k18.com/contribute/webhook.php"
          ));
      //print_r($response);

      $pay_ulr = $response['longurl'];

      //Redirect($response['longurl'],302); //Go to Payment page

      header("Location: $pay_ulr");
      exit();

  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
?>
