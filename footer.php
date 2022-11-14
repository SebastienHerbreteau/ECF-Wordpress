<?php
wp_footer();

?>

<footer>
    <div class="container-logo-footer">
        <div class="logo-footer">
            <img class="logo" src="<?= get_template_directory_uri() ?>/img/logo.png">
            <p>dhalem</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>

    <nav id="info">
        <p>Useful links</p>
        <?php wp_nav_menu(['theme_location' => 'footer']); ?>
    </nav>

    <ul class="info">
        <p>Get in touch</p>
        <li><img class="logo-footer" src="<?= get_template_directory_uri() ?>/img/place.png">123 Anywhere Street, Any City, 12345 ST, Babylone</li>
        <li><img class="logo-footer" src="<?= get_template_directory_uri() ?>/img/phone.png">+123 456 789</li>
        <li><img class="logo-footer" src="<?= get_template_directory_uri() ?>/img/mail.png">hello@dhalem</li>
    </ul>

    <form class="newsletter" action="">
        <p>NewsLetter</p>
        <?php echo do_shortcode('[contact-form-7 id="100" title="Formulaire de contact 1"]'); ?>
    </form>
</footer>


</body>

</html>