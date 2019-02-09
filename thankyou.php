<!--Developed by Soham Zemse | 3rd Year | WhatsApp 8334025944 | my LinkedIn profile https://linkedin.com/in/zemse/ -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>REBECA 80 - the 80th edition</title>
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
  <table width="100%" height="100%" style="background:#fff">
    <tr>
      <td align="right" valign="top">
        <div class="nav-link"><a href="http://rebeca2k18.com">Homepage</a></div>
      </td>
    </tr>
    <tr>
      <td align="center" valign="middle">
        <div class="container">
          <p>Your payment is successful. Thank you for the generous contribution.</p>
          <?php
            include 'src/instamojo.php';
            $api = new Instamojo\Instamojo('a6b780fd931945321ccd42f768a2fbb8', '9fd4995f7e5cddbf0d15d911da7732ac','https://test.instamojo.com/api/1.1/');
            $payid = $_GET["payment_request_id"];


            try {
              $response = $api->paymentRequestStatus($payid);

              echo "<pre>";
                echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
                echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
                echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
              echo "</pre>";

              echo "<pre>";
                print_r($response);
              echo "</pre>";

              echo "Please keep a note of the above information.";

            }
            catch (Exception $e) {
              print('Error: ' . $e->getMessage());
            }
          ?>

        </div>

      </td>
    </tr>
    <tr>
      <td align="center" valign="middle">
        <p>The 80th REBECA - the legacy still continues because of all BEings</p>
        <p class="small">You can pay by Cards / Net Banking / Wallets / UPI</p>
      </td>
    </tr>
  </table>

  <script src="src/js/jquery.min.js"></script>
  <script src="src/js/popper.min.js"></script>
  <script src="src/js/bootstrap.min.js"></script>
  <script src="src/js/script.js" charset="utf-8"></script>

</body>

</html>
