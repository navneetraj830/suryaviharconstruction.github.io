<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
  header("Location: http://sashaktvihar.com");
  exit();
}
?>

<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151393624-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-151393624-1');
  </script>
  <title>Thank you!</title>

  <style>
    h1 {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      font-weight: bold;
    }
    label,
    a,
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 12px;
    }
  </style>
  <!-- a helper script for vaidating the form-->
  <meta http-equiv="refresh" content="3;URL='http://sashaktvihar.com/'" />
</head>
<body>
  <h1>Thank you!</h1>
  Thank you for submitting the form. We will contact you soon!
</body>
</html>