<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spartan_life
 */

?>

    </div><!-- #content -->
 
    <footer id="colophon" class="site-footer" role="contentinfo">
        <a href="#masthead" class="page_up"></a>
        <p>&#169; Spartan Life <span id="current_year"></span></p>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
    var date = new Date().getFullYear();
    document.getElementById("current_year").innerHTML = date;

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61263294-2', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
