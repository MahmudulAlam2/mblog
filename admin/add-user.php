<?php include('partials/header.php'); ?>





    <main class="form__section">
        <div class="container form__section-container">
            <h2>Add User</h2>
            <div class="alert__message error">
                <p>This is an error message</p>
            </div>
            <form action="signup.php" method="POST" enctype="multipart/form-data">
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Create Password" required>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                <select>
                    <option value="1">Admin</option>
                    <option value="0">Auther</option>
                </select>
                <div class="form__control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" id="avatar" name="avatar" accept="image/*">
                </div>
                <button type="submit" name="submit">Add User</button>
            </form>
            <p>Already have an account? <a href="signin.php">Sign in</a></p>
        </div>
    </main>


<?php include('../partials/footer.php'); ?>