<?php include('partials/header.php'); ?>




     <section class="dashboard">
        <div class="container dashboard__container manage_user">
            <button id="show__sidebar-btn" class="sidebar__toggle sidebar-overlay" aria-label="Show sidebar" ><i class="fa-solid fa-arrow-left"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle sidebar-overlay" aria-label="Hide sidebar"><i class="fa-solid fa-arrow-right"></i></button>
            <aside class="sidebar">
                <ul>
                    <li>
                        <a href="add-post.php"><i class="fas fa-plus-circle"></i> <h5>Add Post</h5></a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fas fa-edit"></i><h5>Manage Posts</h5></a>
                    </li>
                    <li>
                        <a href="add-user.php"><i class="fas fa-user-plus"></i> <h5>Add User</h5></a>
                    </li>
                    <li>
                        <a href="manage-users.php"><i class="fas fa-users-cog"></i><h5>Manage Users</h5></a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="fas fa-folder-plus"></i> <h5>Add Category</h5></a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="fas fa-folder-open"></i> <h5>Manage Categories</h5></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-cog"></i><h5>Settings</h5></a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Usersname</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rakin</td>
                            <td>Rakin@gmail.com</td>
                            <td><a href="edit-category.php">Edit</a></td>
                            <td><a href="delete-category.php" class="danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Rakin</td>
                            <td>Rakin@gmail.com</td>
                            <td><a href="edit-category.php">Edit</a></td>
                            <td><a href="delete-category.php" class="danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
     </section>
 

 

<?php include('../partials/footer.php'); ?>