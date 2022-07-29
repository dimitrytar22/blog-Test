
    <span class="article">
        <a class="title"><?= $title ?></a>
        <a class="text"><?= $text ?></a>
        <a class="date"><?= $date ?></a>

        <? if(isset($_SESSION['admin']) && $_SESSION['admin'] === 1 && $_SERVER['REQUEST_URI'] === "/admin/articles/articles.php"): ?>
            <span class="id">ID:<?= $id ?></span>
            <form action="/admin/actions/delete.php" method="post">
                <button name="id" type="submit" value="<?= $id ?>"><a class="delete">Delete</a></button>
            </form>
            <form action="/admin/actions/edit.php" method="get">
                <button name="id" type="submit" value="<?= $id ?>"><a class="edit">Edit</a></button>
            </form>

        <? endif; ?>

    </span>