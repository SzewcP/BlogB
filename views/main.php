<html>
<head>
    <title>ShareBoard</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1>BlogB</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL;?>"><h4>Home</h4><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL;?>posts"><h4>Posts</h4><span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php if(isset($_SESSION['is_logged'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="#">welcome <?php echo $_SESSION['user_data']['name'];?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL;?>user/logout">Log out<span class="sr-only">(current)</span></a>
            </li>
        <?php else:?>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL;?>user/login"><h4>Login</h4><span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php endif; ?>
    </div>
</nav>
    <div class="container">
    <div class="row">
        <?php require ($view); ?>
    </div>
    </div>

</body>
</html>