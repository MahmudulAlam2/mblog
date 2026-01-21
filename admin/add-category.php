<?php include('partials/header.php'); ?>



    <main class="form__section">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            <div class="alert__message error">
                <p>This is an error messageads</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" required>  
                <textarea class="textarea" rows="6" placeholder="Description"></textarea>              
                <button type="submit" name="submit">Add Category</button>
            </form>
        </div>
    </main>




<?php include('../partials/footer.php'); ?>