<?php include ('partials/header.php'); ?>






<!-- ================= MAIN CONTENT ================= -->
<main>
    <!-- FEATURED POST SECTION -->
    <section class="featured">
        <div class="container featured__container">

            <!-- Featured post image and time -->
            <div class="post__thumbail">
                <img src="./Image/2ef34a12-1144-4288-b75b-8dabc73b8844.jpg" alt="Featured post image">
                <div class="post__datetime">June 10, 2022 - 07:23</div>
            </div>

            <!-- Featured post details -->
            <div class="post__info">
                <a href="category.php?category=Wild Life" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit...
                    <a href="post.php" class="read-more">Read More...</a>
                </p>
                <!-- Post author info -->
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./Image/3a40d879-c9db-4b18-bd41-3c2130fcc473.jpg" alt="Jane Doe">
                    </div>
                    <div class="post__author-info">
                        <h5><a href="author.php?author=Jane Doe">By: Jane Doe</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF FEATURED SECTION -->

    <!-- MULTIPLE BLOG POSTS SECTION -->
    <section class="post">
        <div class="container posts__container">

            <!-- Example Post Article (repeated for multiple posts) -->
            <article class="post">
                <!-- Post thumbnail and date -->
                <div class="post__thumbail">
                    <img src="./Image/2ef34a12-1144-4288-b75b-8dabc73b8844.jpg" alt="Post image">
                    <div class="post__datetime">June 10, 2022 - 07:23</div>
                </div>

                <!-- Post content info -->
                <div class="post__info">
                    <a href="category.php?category=Wild Life" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                        <a href="post.php" class="read-more">Read More...</a>
                    </p>

                    <!-- Post author -->
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./Image/3a40d879-c9db-4b18-bd41-3c2130fcc473.jpg" alt="Jane Doe">
                        </div>
                        <div class="post__author-info">
                            <h5><a href="author.php?author=Jane Doe">By: Jane Doe</a></h5>
                        </div>
                    </div>
                </div>
            </article>

            <!-- (Other posts follow the same structure as above) -->
            <!-- Each post has image, date, title, excerpt, read-more link, and author -->
        </div>
    </section>
    <!-- END OF POSTS SECTION -->

    <!-- CATEGORY BUTTONS SECTION -->
    <section class="category__buttons">
        <div class="container category-buttons-container">
            <!-- Links to category-specific pages -->
            <a href="category.php?category=Art" class="category__button">Art</a>
            <a href="category.php?category=Wild Life" class="category__button">Wild Life</a>
            <a href="category.php?category=Travel" class="category__button">Travel</a>
            <a href="category.php?category=Science & Technology" class="category__button">Science & Technology</a>
            <a href="category.php?category=Food" class="category__button">Food</a>
            <a href="category.php?category=Music" class="category__button">Music</a>
        </div>
    </section>
    <!-- END OF CATEGORY BUTTONS -->
</main>
<!-- ================= END OF MAIN CONTENT ================= -->







<?php include('./partials/footer.php'); ?>