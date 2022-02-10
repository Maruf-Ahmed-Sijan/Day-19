<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-19</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Word Count</a></li>

        </ul>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto  py-5">
                <div class="card card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-4">Input </label>
                            <div class="col-md-8">
                                <input type="text" name="input-value" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-4">Result </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="<?php echo isset($result) ? $result : ''?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-4"> </label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-outline-success btn-block" value="Get Result" name="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="asset/js/jquery-3.6.0.min.js"></script>
<script src="asset/js/bootstrap.js"></script>
</body>
</html>