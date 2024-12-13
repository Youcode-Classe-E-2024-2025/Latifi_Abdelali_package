<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des auteurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="flex justify-between bg-cyan-300 p-7">
    <div>
        <h1 class="font-extrabold text-3xl" >Mypackages</h1>
    </div>
    <div class="flex text-xl justify-between text-cyan-900">
        <a href="index.php"><h3 class="px-3 font-bold">home</h3></a>
        <a href="aff_allpckg.php"><h3 class="px-3 font-bold">allpackages</h3></a>
        <a href="aff_authors.php"><h3 class="px-3 font-bold">Authors</h3></a>
        <a href="aff_version.php"><h3 class="px-3 font-bold">versions</h3></a>
        <a href="aff_pckg_version.php"><h3 class="px-3 font-bold text-lg">package.versions</h3></a>
    </div>
</header>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold text-cyan-700 mb-6">packages/authors</h1>
    
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-cyan-600 text-white">
                    <th class="px-4 py-2 text-left">Nom de l'Auteur</th>
                    <th class="px-4 py-2 text-left">Package Name</th>
                </tr>
            </thead>
            <div>
        <?php
             require 'connexion.php';
             
             $requete = 'SELECT authors.id, authors.author_name, authors.email, allpackages.package_name
                         FROM authors 
                         inner JOIN allpackages ON authors.author_name = allpackages.author_name';  
             
             $query = mysqli_query($con, $requete);
             
             while ($row = mysqli_fetch_assoc($query)) {
                 echo "<tr class='border-t border-gray-200 hover:bg-cyan-50'>";
                 echo "<td class='px-4 py-2'>" . $row['author_name'] . "</td>";  
                 echo "<td class='px-4 py-2'>" . $row['package_name'] . "</td>";  
                 echo "</tr>";
             }
        ?>
</div>
</table>
</div>
</div>
</body>
</html>
