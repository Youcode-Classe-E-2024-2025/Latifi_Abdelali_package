<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="flex justify-between bg-cyan-300 p-7 max-lg:block">
<div>
    <h1 class="font-extrabold text-3xl" >Mypackages</h1>
    </div>
    <div class="flex text-xl justify-between text-cyan-900 max-lg:mt-2.5 max-md:block">
        <a href="index.php"><h3 class="px-3 font-bold max-lg:text-base">home</h3></a>
        <a href="aff_authors.php"><h3 class="px-3 font-bold max-lg:text-base">Authors</h3></a>
        <a href="aff_pckg_author.php"><h3 class="px-3 font-bold max-lg:text-base">packages/authors</h3></a>
        <a href="aff_version.php"><h3 class="px-3 font-bold max-lg:text-base">versions</h3></a>
        <a href="aff_pckg_version.php"><h3 class="px-3 font-bold text-lg max-lg:text-base">package/versions</h3></a>
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
                        <th class="px-4 py-2 text-left text-center">delete</th>

                    </tr>
                </thead>
                <div>

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
                        echo "<td class='flex justify-center items-center'><a href='delete.php?id=" . $id . "'><button class='bg-red-600 text-white font-bold text-xl px-2 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300 ease-in-out transform hover:scale-105'>-</button></a></td>";                        echo "</tr>";
                    }
                    ?>
                </div>
            </table>
        </div>
    </div>
</body>
</html>
