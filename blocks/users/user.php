<div class="user">
        <span class="id-user">ID: <b><?=$id_user?></b></span>
        <span class="username">Username: <b><?=$username?></b></span>
        <span class="password">Password: <b><?=$password?></b></span>
        <span class="password">Email: <b><?=$email?></b></span>
        <span class="admin">Is admin: <b><?=$admin?></b></span>
        <form action="/admin/actions/delete_user.php" method="post">
                <input type="hidden" name="id_user" value="<?=$id_user?>">
                <button class="delete-user" name="delete" type="submit"><a>Delete</a></button>
        </form>
        <form action="/admin/actions/edit_user.php" method="post">
                <input type="hidden" name="id_user" value="<?=$id_user?>">
                <button class="edit-user" name="edit" type="submit"><a>Edit</a></button>
        </form>
</div>