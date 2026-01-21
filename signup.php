<?php include('partials/header.php'); ?>

<main class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>

        <?php
        $errors = $_SESSION['signup_errors'] ?? [];
        $old = $_SESSION['signup_old'] ?? [];
        unset($_SESSION['signup_errors'], $_SESSION['signup_old']);
        ?>

        <form action="<?= ROOT_URL ?>signup-logic.php" method="POST" enctype="multipart/form-data">

            <input type="text" name="firstname" placeholder="First Name" value="<?= htmlspecialchars($old['firstname'] ?? '') ?>">
            <?php if(isset($errors['firstname'])): ?>
                <div class="alert__message error"><p><?= $errors['firstname'] ?></p></div>
            <?php endif; ?>

            <input type="text" name="lastname" placeholder="Last Name" value="<?= htmlspecialchars($old['lastname'] ?? '') ?>">
            <?php if(isset($errors['lastname'])): ?>
                <div class="alert__message error"><p><?= $errors['lastname'] ?></p></div>
            <?php endif; ?>

            <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($old['username'] ?? '') ?>">
            <?php if(isset($errors['username'])): ?>
                <div class="alert__message error"><p><?= $errors['username'] ?></p></div>
            <?php endif; ?>

            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($old['email'] ?? '') ?>">
            <?php if(isset($errors['email'])): ?>
                <div class="alert__message error"><p><?= $errors['email'] ?></p></div>
            <?php endif; ?>

            <input type="password" name="createpassword" placeholder="Create Password">
            <?php if(isset($errors['password'])): ?>
                <div class="alert__message error"><p><?= $errors['password'] ?></p></div>
            <?php endif; ?>

            <input type="password" name="confirmpassword" placeholder="Confirm Password">
            <?php if(isset($errors['confirm'])): ?>
                <div class="alert__message error"><p><?= $errors['confirm'] ?></p></div>
            <?php endif; ?>

            <div class="form__control">
                <label>User Avatar</label>
                <input type="file" name="avatar" accept="image/*">
            </div>
            <?php if(isset($errors['avatar'])): ?>
                <div class="alert__message error"><p><?= $errors['avatar'] ?></p></div>
            <?php endif; ?>

            <button type="submit" name="submit">Sign Up</button>
        </form>

        <p>Already have an account? <a href="<?= ROOT_URL ?>signin.php">Sign in</a></p>
    </div>
</main>

<?php include('partials/footer.php'); ?>
