
<html>
<head>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <title>Login</title>

</head>
<body>
<div class="container">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
</body>
</html>