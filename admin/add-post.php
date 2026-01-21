<?php include('partials/header.php'); ?>


    <main class="form__section">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            <div class="alert__message error">
                <p>This is an error messageads</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" required> 
                <select>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                </select>
                <textarea class="textarea" rows="10" placeholder="Body"></textarea>  
                <div class="form__control" id="inline">
                    <input type="checkbox" id="is_featured inlineinput" checked>
                    <label for="is_featured" checked>Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>            
                <button type="submit" name="submit">Add Post</button>
            </form>
        </div>
    </main>
    



<?php include('../partials/footer.php'); ?>