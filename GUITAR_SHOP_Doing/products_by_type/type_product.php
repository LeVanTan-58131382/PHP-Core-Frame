<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>


<div class="ad-part-content">
    <h2>Loại sản phẩm</h2>
    <ul>
        <!-- display links for all categories -->
        <?php
        require_once('model/database.php');
        require_once('model/category_db.php');

        foreach ($categories as $category) :
            $name = $category['categoryName'];
            $id = $category['categoryID'];
            $url = $app_path . 'catalog?category_id=' . $id;
        ?>
            <li>
                <a href="<?= $url; ?>">
                    <?= htmlspecialchars($name); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
</div>