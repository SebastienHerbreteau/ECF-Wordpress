<?php
wp_footer();
?>
<footer>
    <img src="img/logo.jpg">
    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    <div class="ensemble-footer">
        <nav class="nav-footer">
            <p>Useful links</p>
            <?php wp_nav_menu(['theme_location' => 'menu-footer']); ?>
        </nav>
        <ul>
            <p>Get in touch</p>
            <li>123 ANywhere Street, Any City, 12345 ST, Babylone</li>
            <li> +123 456 789</li>
            <li>hello@dhalem</li>
        </ul>
    </div>
    <form class="newsletter" action="">
        <p>NewsLetter</p>
        <input type="text" class="text">
        <input type="submit" class="submit">
    </form>
</footer>


</body>

</html>