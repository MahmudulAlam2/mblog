<?php include('partials/header.php'); ?>



    <main class="form__section">
        <div class="container form__section-container">
            <h2>Edit Category</h2>
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
                    <label for="is_featured" >Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>            
                <button type="submit" name="submit">Update Post</button>
            </form>
        </div>
    </main>

 

<?php include('../partials/footer.php'); ?>