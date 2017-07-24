  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versiunea</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://hargaz.ro/">Hargaz</a>.</strong> Toate drepturile rezervate. Dezvoltat de <a href="http://www.webinacci.com">Webinacci</a>
  </footer>

</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/Chart.js/Chart.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="dist/js/demo.js"></script>
<script>
	$(function(){
	  var path = location.pathname;
	  if ( path.length > 1 ) {
	    $('ul.sidebar-menu a[href*="' + path + '"]').addClass('active');
	  }
	});
</script>