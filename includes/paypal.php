<?php
  require 'paypal/autoload.php';

  define('URL_SITIO', 'http://localhost:8000');

  $apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
      'AY162_VvFFD7ZDo-KXtmVgv5Qx39hL8NELlvAw5lpF7PQIhaTM1mRgoroK6rjoo2aQk0TuRstRgZ0xeA', // Cliente ID
      'EP1I4eIbWoNPa7hxooJ-7hsXhqSqh0e9kfw-6VapCyw7LQziDYRKMCJ1Ar-OmZGBMvGHPvsBl4TjYMue' // Secret
    )
  );

 ?>
