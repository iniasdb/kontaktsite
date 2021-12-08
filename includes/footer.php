<footer>
    <div id="contact">
        <h1>Contacteer ons</h1>
        <?php include($base."includes/database/getAdres.php");?>
        <?php getFooter();?>
    </div>
    <div id="sitemap">
        <h1>Sitemap</h1>
        <?php include($base."includes/navLinks.php");?>
    </div>
    <div id="socials">
        <h1>Social media</h1>
        <?php include($base."includes/database/getSocials.php");?>
    </div>
    <div id="copy">
        <p>&copy; <?php echo date("Y");?> - Chiro Kontakt Boom</p>
    </div>
</footer>