<!DOCTYPE html>
<html>
<head>
    <title>Liste des Utilisateurs</title>
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Utilisateurs</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Récupérez le contenu du fichier CSV
                $lines = file('http://bienvu.net/misc/customers.csv');

                // Parcourez chaque ligne du fichier
                foreach ($lines as $line) {
                    // Découpez la ligne en utilisant la virgule comme délimiteur
                    $data = explode(',', $line);
                    echo '<tr>';
                    foreach ($data as $field) {
                        echo '<td>' . trim($field) . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Inclure Bootstrap JS (facultatif) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>