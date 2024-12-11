<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="flex justify-between bg-cyan-300 p-7">
    <div>
    <h1 class="font-extrabold text-3xl" >Mypackages</h1>
    </div>
    <div class="flex text-xl justify-between text-cyan-900	">
        <a href="index.php"><h3 class="px-3 font-bold">home</h3></a>
        <a href="aff_authors.php"><h3 class="px-3 font-bold">Authors</h3></a>
        <h3 class="px-3 font-bold">packages/authors</h3>
    </div>
    </header>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-cyan-700 mb-6">All Packages</h1>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-cyan-600 text-white">
                        <th class="px-4 py-2 text-left">Nom du Package</th>
                        <th class="px-4 py-2 text-left">Description du Package</th>
                        <th class="px-4 py-2 text-left">Date de Création</th>
                        <th class="px-4 py-2 text-left">name author</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'connexion.php';
                    $requete = 'SELECT * FROM allpackages';
                    $query = mysqli_query($con, $requete);
                    while($rows = mysqli_fetch_assoc($query)){
                        $id = $rows['id'];
                        echo "<tr class='border-t border-gray-200 hover:bg-cyan-50'>";
                        echo "<td class='px-4 py-2'>" . $rows['package_name'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $rows['packages_descreption'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $rows['created_at'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $rows['author_name'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
