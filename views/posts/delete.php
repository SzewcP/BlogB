<link rel="stylesheet" href="../public/css/bootstrap.css">

<div class="container">
    <h1 class="text-center">Are you Sure to delete</h1>
<br/>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
        <?php foreach ($viewmodel as $item) : ?>
        <h2 class="text-center"><?php echo $item['title']; ?> </h2><br/>
        <?php endforeach; ?>
<button type="submit" name="submit" class="btn btn-danger btn-block">YES</button>
<a href="<?php echo ROOT_URL ?>" class="btn btn-primary btn-block">NO</a>

</div>
</div>