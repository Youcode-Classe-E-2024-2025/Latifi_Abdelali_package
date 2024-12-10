<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des auteurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-cyan-700 mb-6">Tableaux des Auteurs</h1>
        
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-cyan-600 text-white">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nom de l'Auteur</th>
                        <th class="px-4 py-2 text-left">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'connexion.php';
                    $requete = 'SELECT * FROM authors';
                    $query = mysqli_query($con, $requete);
                    while($rows = mysqli_fetch_assoc($query)){
                        $id = $rows['id'];
                        echo "<tr class='border-t border-gray-200 hover:bg-cyan-50'>";
                        echo "<td class='px-4 py-2'>" . $rows['id'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $rows['author_name'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $rows['email'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
