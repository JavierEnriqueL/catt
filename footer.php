<footer class="py-5">
        <div class="container pt-5 pb-3">
          <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="text-center text-capitalize pb-3">Contacto</h4>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7">
                  <?php if( get_field('direccion','option') ): ?>
                      <div class="d-flex w-100 align-items-center py-4"><div class="icon"> <i class="fas fa-map-marker-alt"></i></div><div class="text"> <?php the_field('direccion','option'); ?></div></div>
                      <?php endif ?>
                      <div class="d-flex w-100 align-items-center py-4"><div class="icon"> <i class="fab fa-whatsapp"></i></div><div class="text"> <?php the_field('telefono','option'); ?></div></div>
                      <?php if( get_field('telefono_fijo','option') ): ?>
                      <div class="d-flex w-100 align-items-center py-4"><div class="icon"> <i class="fas fa-phone"></i></div><div class="text"> <?php the_field('telefono_fijo','option'); ?></div></div>
                      <?php endif ?>
                      <div class="d-flex w-100 align-items-center py-4"><div class="icon"> <i class="fas fa-envelope"></i></div><div class="text"> <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></div></div>                    
                      <div class="social d-flex justify-content-center  align-items-center py-4 w-100">
                      <?php 
      if( have_rows('redes_sociales','option') ):
      while( have_rows('redes_sociales','option') ): the_row(); ?>
                        <a href="<?php the_sub_field('url_red'); ?>" target="_new"><i class="fab fa-<?php the_sub_field('nombre_red'); ?>"></i></a>
                        <?php endwhile; ?>
      <?php endif; ?>    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pt-5 pt-lg-0">
                <h4 id="contacto" class="text-center text-capitalize pb-3">Escríbenos</h4>
                <?php echo do_shortcode('[contact-form-7 id="21" title="Formulario de contacto 1"]'); ?>
            </div>
          </div>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="<?php bloginfo('template_url'); ?>/js/animatd-scroll.js"></script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "277450539758624", // Facebook page ID
            whatsapp: "+51921132920", // WhatsApp number
            call_to_action: "Escríbenos", // Call to action
            button_color: "#decc4d", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
  </body>
<?php wp_footer(); ?>
</html>