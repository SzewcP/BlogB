<head>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
<title>Edit</title>

</head>
<?php foreach ($viewmodel as $item) : ?>
<body>
    <div class="container">
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" value="<?php echo $item['title']; ?>">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <textarea type="text" class="form-control" name="body"><?php echo $item['body']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="tags" value="<?php echo $item['tags']; ?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="<?php echo ROOT_URL;?>home">Back</a>

</form>

    </div>
</body>
<?php endforeach; ?>
</html>