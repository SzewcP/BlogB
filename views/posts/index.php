<div class="container">
    <?php if(isset($_SESSION['is_logged'])): ?>
        <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/add">Add</a>
    <?php endif; ?>
    <?php foreach ($viewmodel as $item) : ?>
        <div>
            <h2><?php echo $item['title']; ?> </h2><br/>
            <?php echo $item['body']; ?>
            <?php echo $item['tags']; ?><br/>
            <?php echo $item['created_data']; ?>
            <?php if(isset($_SESSION['is_logged'])): ?>
                <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/edit?id=<?php echo $item['id']; ?>">Edit</a>
                <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/delete?id=<?php echo $item['id']; ?>">Delete</a><br/>

            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>