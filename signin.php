<?php include('partials/header.php'); ?>

<main class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        <?php if(isset($_SESSION['signup_success'])): ?> <div class="alert__message success">
             <p><?= $_SESSION['signup_success']; unset($_SESSION['signup_success']); ?></p> 
            </div> 
        <?php endif; ?>
        <?php
        if (isset($_SESSION['signin_success'])) {
            echo '<div class="alert__message success"><p>'.$_SESSION['signin_success'].'</p></div>';
            unset($_SESSION['signin_success']);
        }
        if (isset($_SESSION['signin_error'])) {
            echo '<div class="alert__message error"><p>'.$_SESSION['signin_error'].'</p></div>';
            unset($_SESSION['signin_error']);
        }
        ?>

        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Sign In</button>
        </form>

        <p>Don't have an account yet? <a href="<?= ROOT_URL ?>signup.php">Sign Up</a></p>
    </div>
</main>

<?php include('./partials/footer.php'); ?>
