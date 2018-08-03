
    <footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informaion">
          <h3>Sobre <span>GDLWebCamp</span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem suscipit ab facere dolor optio voluptas porro nobis expedita repellendus commodi. Consequuntur dolor placeat ad praesentium, eligendi tenetur soluta perferendis esse!</p>
        </div>
        <div class="ultimos-tweets">
          <h3>Últimos <span>Tweets</span></h3>
          <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quod architecto, rem distinctio quos tempore obcaecati nostrum asperiores nisi necessitatibus quia quasi sapiente corrupti laborum debitis iste eos.</li>
            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas praesentium qui maxime eaque similique, neque quo eligendi?</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolore mollitia earum, eum dicta repellat facilis beatae totam.</li>
          </ul>
        </div>
        <div class="menu">
          <h3>Redes <span>Sociales</span></h3>
          <nav class="redes-sociales">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </nav><!--redes-sociales-->
        </div>
      </div>
      <p class="copyright">Todos los Derechos Reservados &copy; GDLWEBCAMP 2018</p>

      <!-- Begin MailChimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
      <style type="text/css">
      	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
      	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
      	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div style="display:none;">
        <div id="mc_embed_signup">
          <form action="https://ipproyectosysoluciones.us9.list-manage.com/subscribe/post?u=6a66cbd4fe4327559e5148567&amp;id=6ad156ad9b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
          	<h2>Suscribete a Newsletter y no te pierdas nada de este evento</h2>
          <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
          <div class="mc-field-group">
          	<label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
          </label>
          	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6a66cbd4fe4327559e5148567_6ad156ad9b" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
          </form>
        </div>
      </div>

      <!--End mc_embed_signup-->
    </footer>

  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>


    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if ($pagina == "invitados" || $pagina == "index") {
        echo '<script src="js/jquery.colorbox-min.js"></script>';
        echo '<script src="js/jquery.waypoints.min.js"></script>';
      }
      else if ($pagina == "conferencia") {
        echo '<script src="js/lightbox.js"></script>';
      }
    ?>

    <script src="js/main.js"></script>
    <!-- Google-Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKnTI3FoPfA40zuQkjsw2lTDDditpO0z4&callback=initMap" async
    defer></script>



    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->

    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us9.list-manage.com","uuid":"6a66cbd4fe4327559e5148567","lid":"6ad156ad9b"}) })</script>
    </body>
</html>
