<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Upload de ficheiros</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="tratar.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="file" class="form-control">
                    </div>

                    <div class="text-end">
                        <input type="submit" value="Carregar ficheiro" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>