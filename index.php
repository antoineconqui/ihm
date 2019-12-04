<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Pilot Tester Platform</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h1>Pilot Tester Platform</h1>
        </div>
        <div class="row">
            <form action="platform.php" method="post">
                <label for="prenom">Prénom</label>
                <br>
                <input type="text" name="prenom" id="prenom" required>
                <br><br>
                <label for="nom">Nom</label>
                <br>
                <input type="text" name="nom" id="nom" required>
                <br><br><br>
                <button type="submit">Démarrer</button>
            </form>
        </div>
    </div>

    <!-- <script src="script.js"></script> -->

</body>
</html>
