<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>404 Page Not Found</title>

    <style>
        .container {
            width: 500px;
            margin: 100px auto;
        }

        .img-error {
            width: 300px;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div>
                <img class="img-error" src="<?= base_url() ?>/assets/img/errors/error-404-monochrome.svg" />
                <p align="center">This requested URL was not found on this server.</p>
            </div>
        </div>
    </main>
</body>

</html>