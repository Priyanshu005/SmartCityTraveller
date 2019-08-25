    </div>
        <!-- Page Area End Here -->
</div>
    <!-- jquery-->
    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="<?=base_url()?>assets/js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- Full Calender Js -->
    <script src="<?=base_url()?>assets/js/fullcalendar.min.js"></script>
    <!-- Chart Js -->
    <script src="<?=base_url()?>assets/js/Chart.min.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url()?>assets/js/main.js"></script>
    
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    function search(text)
    {
         $('table tbody tr').hide();
         var len = $('table tbody tr:not(.notfound) td:contains("'+text+'")').length;
         if(len > 0)
         {
            // Searching text in columns and show match row
          $('table tbody tr:not(.notfound) td:contains("'+text+'")').each(function()
            {
                $(this).closest('tr').show();
            });
         }
         else
         {
            $('.notfound').show();
         }
    }

    // Case-insensitive searching (Note - remove the below script for Case sensitive search )
    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});
    </script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2019 14:28:25 GMT -->
</html>