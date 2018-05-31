<link rel="stylesheet" href="../public/css/bootstrap.css">
<div class="container">

    <?php foreach ($viewmodel as $item) : ?>
        <div>
            <h2><?php echo $item['title']; ?> </h2><br/>
            <?php echo $item['body']; ?>
            <?php echo $item['tags']; ?><br/>
            <?php echo $item['created_data']; ?>
        </div>
    <?php endforeach; ?>
</div>