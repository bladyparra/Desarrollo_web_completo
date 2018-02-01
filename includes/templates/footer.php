    
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
    </footer>



    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if ($pagina == "invitados" || $pagina == "index") {
        echo '<script src="js/jquery.colorbox-min.js"></script>';
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
    </body>
</html>