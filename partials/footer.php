
<!-- ================= FOOTER SECTION ================= -->
<footer>
    <!-- Social media icons section -->
    <div class="footer__socials">
        <a href="https://www.youtube.com" target="_blank" aria-label="Visit our YouTube page">
            <i class="fab fa-youtube" style="color: red;"></i>
        </a>
        <a href="https://www.facebook.com" target="_blank" aria-label="Visit our Facebook page">
            <i class="fab fa-facebook-f" style="color: rgb(13, 69, 223);"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" aria-label="Visit our Instagram page">
            <i class="fab fa-instagram" style="color: rgb(25, 191, 224);"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank" aria-label="Visit our Twitter page">
            <i class="fab fa-twitter" style="color: rgb(0, 0, 0);"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank" aria-label="Visit our LinkedIn page">
            <i class="fab fa-linkedin-in" style="color: rgb(14, 69, 179);"></i>
        </a>
    </div>

    <!-- Footer links grouped by category -->
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="category.php?category=Art">Art</a></li>
                <li><a href="category.php?category=Wild Life">Wild Life</a></li>
                <li><a href="category.php?category=Travel">Travel</a></li>
                <li><a href="category.php?category=Music">Music</a></li>
                <li><a href="category.php?category=Food">Food</a></li>
                <li><a href="category.php?category=Science & Technology">Science & Technology</a></li>
            </ul>
        </article>

        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="support.php?type=online">Online Support</a></li>
                <li><a href="support.php?type=call">Call Number</a></li>
                <li><a href="support.php?type=email">Emails</a></li>
                <li><a href="support.php?type=social">Social Support</a></li>
                <li><a href="support.php?type=location">Location</a></li>
            </ul>
        </article>

        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="blog.php?filter=safety">Safety</a></li>
                <li><a href="blog.php?filter=repair">Repair</a></li>
                <li><a href="blog.php?filter=recent">Recent</a></li>
                <li><a href="blog.php?filter=popular">Popular</a></li>
                <li><a href="blog.php?filter=categories">Categories</a></li>
            </ul>
        </article>

        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="<?php echo ROOT_URL ?>index.php">Home</a></li>
                <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?php echo ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?php echo ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li>
            </ul>
        </article>
    </div>

    <!-- Footer copyright -->
    <div class="footer__copyright">
        <small>Copyright &copy; 10 October 2025 Mahmudul Alam</small>
    </div>
</footer>
<!-- ================= END OF FOOTER ================= -->

<!-- JavaScript file for menu toggle and interactivity -->
<script src="<?php echo ROOT_URL ?>js/main.js"></script>
</body>
</html>