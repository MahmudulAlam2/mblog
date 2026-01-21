<?php include('partials/header.php'); ?>



    <main class="form__section">
        <div class="container form__section-container">
            <h2>Edit Category</h2>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" required>  
                <textarea class="textarea" rows="6" placeholder="Description"></textarea>              
                <button type="submit" name="submit">Update Category</button>
            </form>
        </div>
    </main>

 

<?php include('../partials/footer.php'); ?>