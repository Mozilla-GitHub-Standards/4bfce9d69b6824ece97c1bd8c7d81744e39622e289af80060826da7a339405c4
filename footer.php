  	<!-- footer -->
  	<footer class="footer">
  		<!-- social
  		<div class="social">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 margin-bottom-20">
  						<h4 class="title no-margin-top">Acompanhe-nos:</h4>
  						<div class="btn-group">
  							<a href="#" class="btn btn-facebook" title="Facebook" target="_blank" rel="publisher"><i class="fa fa-facebook"></i></a>
  							<a href="#" class="btn btn-twitter" title="Twitter" target="_blank" rel="publisher"><i class="fa fa-twitter"></i></a>
  							<a href="#" class="btn btn-google-plus" title="Google+" target="_blank" rel="publisher"><i class="fa fa-google-plus"></i></a>
  							<a href="#" class="btn btn-flickr" title="Flickr" target="_blank" rel="publisher"><i class="fa fa-flickr"></i></a>
  							<a href="#" class="btn btn-github" title="GitHub" target="_blank" rel="publisher"><i class="fa fa-github"></i></a>
  							<a href="#" class="btn btn-rss" title="RSS" target="_blank" rel="publisher"><i class="fa fa-rss"></i></a>
  						</div>
  					</div>

  					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 margin-bottom-20">
  						<h4 class="title no-margin-top">Receba nossas atualizações</h4>
							<form method="post" action="" class="row" id="newsletter-form" role="form">
								<div class="col-lg-12">
									<div class="input-group">
										<input type="email" name="news_email" id="email_newsletter" class="form-control" placeholder="Digite o seu e-mail">
										<span class="input-group-btn"><button type="submit" id="submit-button-newsletter" class="btn btn-orange"><i class="fa fa-paper-plane"></i></button></span>
									</div>
								</div>
							</form>
  					</div>

		  		</div>
		  	</div>
  		</div>
  		 //social -->

			<!-- widget -->
  		<div class="widget padding-top-20 padding-bottom-20">
  			<div class="container">
  				<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<h3 class="title margin-bottom-20">Mozilla Brasil no Facebook</h3>

							<div class="recent-posts">
                  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmozillabrasil&amp;width=500&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=435972309796449" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:258px;" allowTransparency="true"></iframe>
							</div>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<h3 class="title margin-bottom-20">Mozilla Brasil em Fotos</h3>
							<div id="nanoGallery"></div>
						</div>
  				</div>
  			</div>
  		</div>
  		<!-- //widget -->

			<!-- copyleft -->
  		<div class="copyleft">
  			<div class="container">
  				<div class="row">
		  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<p class="no-margin-bottom"><small>Comunidade Mozilla na CPBR8 <br> Fazer o bem está em nosso código!</small></p>
		  			</div>
		  		</div>
		  	</div>
  		</div>
  		<!-- //copyleft -->
  	</footer>
  	<!-- //footer -->

  	<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/nicescroll.min.js"></script>

    <?php if(isset($popover)){ ?>

      <script>$( document ).ready(function() {$('[data-toggle="tooltip"]').tooltip();});</script>

    <?php } ?>

    <?php if(isset($socialheight)){ ?>

      <script>$( document ).ready(function() {
        if(($('body').width() >= 768) && ($('.rsocial .content').height() <= $('.rsocial .photo').height())){
          $('.rsocial .content').height( $('.rsocial .photo').height() );
        } else if ($('.rsocial .content').height() > $('.rsocial .photo').height()){
          diference = ($('.rsocial .content').height() - $('.rsocial .photo').height()) / 2;
          $('.rsocial .photo').css({"margin-top": diference})
        }
      });</script>

    <?php } ?>

    <?php

      if(array_pop(explode("/", $_SERVER['REQUEST_URI'])) == "apps"){

        echo '<script src="assets/js/jquery.tablesorter.min.js"></script>
        <script>

        $(document).ready(function() { 
            $(".table").tablesorter({ 
                sortList: [[0,0],[2,0]] 
            }); 
        }); 

        </script>';

}

    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.2.3/jquery.nanogallery.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
