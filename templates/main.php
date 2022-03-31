<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyGames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>
    <header>
        <?php include __DIR__ . '/navbar.php' ?>


    </header>

    <div class="container mt-5 bg-light" style="border-radius: 10px;" id="products">

        <h1 style="font-weight: bold"> Game List:</h1>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <form method="POST" action="index.php" class="form-inline">

                    <li><input type="submit" class="dropdown-item" name="asc" value="A-Z"></button></li>
                    <li><input type="submit" class="dropdown-item" name="desc" value="Z-A"></button></li>

                </form>
            </ul>
        </div>

        <div class="row">
            <?php

            foreach ($game_id as $game) :
                include 'card.php';
            endforeach;
            ?>


        </div>




    </div>
</body>

</html>