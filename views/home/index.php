<html>
<div class="container">
    <h1 class="text-center">Welcome</h1>
    <div class="row">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    </div><br/>
    <h2 class="text-center">Posts</h2>
    <div class="container">
        <?php if(isset($_SESSION['is_logged'])): ?>
            <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/add">Add</a>
        <?php endif; ?>
        <?php foreach ($viewmodel as $item) : ?>
            <div>
                <h2><?php echo $item['title']; ?> </h2><br/>
                <?php echo substr($item['body'],0,500); ?><a href="<?php echo ROOT_URL;?>home/post?id=<?php echo $item['id']; ?>">...Read more</a> <br/>
                <?php echo $item['tags']; ?><br/>
                <?php echo $item['created_data']; ?>
                <br/>
                <?php if(isset($_SESSION['is_logged'])): ?>
                    <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/edit?id=<?php echo $item['id']; ?>">Edit</a>
                    <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>posts/delete?id=<?php echo $item['id']; ?>">Delete</a><br/>
                <?php endif; ?>
            </div><br/><br/>
        <?php endforeach; ?>
    </div>

</html>