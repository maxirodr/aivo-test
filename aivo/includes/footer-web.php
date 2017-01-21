</div><!--wrap-->
</div><!--sb-site-->

<?php if($_GET['go']=="login") { ?>
    <footer class="footer" style="position: fixed; bottom: 0; left: 0;">
    	<div class="bottom-reg">
        	<p>¿No tenés cuenta? <a href="#">Registrate</a></p>
        </div><!-- bottom-reg -->
    </footer><!-- footer -->
<?php } ?>
<div class="loading no-show">Cargando&#8230;</div>
<script src="<?="http://".$url_web?>/js/jquery.min.js"></script>
<script src="<?="http://".$url_web?>/js/bootstrap.min.js"></script>
<script src="<?="http://".$url_web?>/js/slidebars.min.js"></script>
<script type="text/javascript">
(function (window, $) {
  
  $(function() {
    
    
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);

  (function($) {
    $(document).ready(function() {
      var mySlidebars = new $.slidebars();
	  <?php if($_GET['toggle']=="1") {?>
	  mySlidebars.slidebars.toggle('left');
	  <?php } ?>
    });
  }) (jQuery);
  
  
  /*LOADING SCREEN?/*
   * 
   */
$('.loadingscreen').click(function(){
  $('#loadid').show();
});
</script>
<style>
	#loadingScreen {
		background: url(<?="http://".$url_web?>/images/loading.gif) no-repeat 5px 8px;
		padding-left: 25px;
	}
	/* hide the close x on the loading screen */
	.loadingScreenWindow .ui-dialog-titlebar-close {
		display: none;
	}
</style>
</body>
</html>