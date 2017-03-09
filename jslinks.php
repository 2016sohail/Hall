<script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="vendor/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="vendor/retina.min.js"></script>
<script type="text/javascript" src="assets/js/min/responsivetable.min.js"></script>
<script type="text/javascript" src="assets/js/min/countnumbers.min.js"></script>
<script type="text/javascript" src="assets/js/min/main.min.js"></script>
<script src="js/zabuto_calendar.js"></script>


<script>
  $(document).ready(function(){
   $("#main-navbar ul li a").click(function(){
    $("#main-navbar ul li a").removeClass("my-active");
    $(this).addClass("my-active");
  });
 });

  $(document).ready(function(){
   $(".slide-icon").click(function(){
    $("#slide-search").slideToggle();
  });
 }); 		
</script>