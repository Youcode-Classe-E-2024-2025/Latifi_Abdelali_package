<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php include 'add.php'?>
<?php include 'add_author.php'?>
    <header class="flex justify-between bg-cyan-300 p-7">
    <div>
    <h1 class="font-extrabold text-3xl" >Mypackages</h1>
    </div>
    <div class="flex text-xl justify-between text-cyan-900	">
        <a href="aff_allpckg.php"><h3 class="px-3 font-bold text-lg">allpackages</h3></a>
        <a href="aff_authors.php"><h3 class="px-3 font-bold text-lg">Authors</h3></a>
        <a href="aff_pckg_author.php"><h3 class="px-3 font-bold text-lg">packages/authors</h3></a>
        <a href="aff_version.php"><h3 class="px-3 font-bold text-lg">versions</h3></a>
        <a href="aff_pckg_version.php"><h3 class="px-3 font-bold text-lg">package/versions</h3></a>
    </div>
    </header>
    <section class="flex justify-center gap-20 p-6">
    <div class="border-4 border-solid border-cyan-700 rounded-lg p-6 max-w-lg w-full">
        <label class="block text-xl font-semibold text-cyan-700 mb-4">Add Package</label>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="author_name" class="block text-sm font-medium text-cyan-700">author Name</label>
                <input type="text" name="author_name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>
            <div>
                <label for="packagename" class="block text-sm font-medium text-cyan-700">Package Name</label>
                <input type="text" name="packagename" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>
            <div>
                <label for="packagedescreption" class="block text-sm font-medium text-cyan-700">Package Description</label>
                <textarea name="packagedescreption" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
            </div>
            <div>
                <label for="created_at" class="block text-sm font-medium text-cyan-700">Created At</label>
                <input type="date" name="created_at" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>
            <div>
                <button type="submit" name="submit" class="w-full py-2 bg-cyan-500 hover:bg-cyan-600 text-white font-bold rounded-md border-2 border-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">Submit</button>
            </div>
        </form>
    </div>

    <div class="border-4 border-solid border-cyan-700 rounded-lg p-6 max-w-lg w-full">
        <label class="block text-xl font-semibold text-cyan-700 mb-4">Add Authors</label>
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="authorname" class="block text-sm font-medium text-cyan-700">Author Name</label>
                <input type="text" name="authorname" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-cyan-700">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>
            <div>
                <button type="submit" name="submit2" class="w-full py-2 bg-cyan-500 hover:bg-cyan-600 text-white font-bold rounded-md border-2 border-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">Submit</button>
            </div>
        </form>
    </div>
    <div class="border-4 border-solid border-cyan-700 rounded-lg p-6 max-w-lg w-full">
    <label class="block text-xl font-semibold text-cyan-700 mb-4">Add version</label>
    <form action="add_version.php" method="post" class="space-y-4">
        <div>
            <label for="Package_Name" class="block text-sm font-medium text-cyan-700">Package Name</label>
            <select name="Package_Name" id="Package_Name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                <?php
                require 'connexion.php';
                $requete = 'SELECT package_name FROM allpackages'; 
                $query = mysqli_query($con, $requete);
                while ($rows = mysqli_fetch_assoc($query)) {
                    echo "<option value='" . $rows['package_name'] . "'>" .$rows['package_name']. "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="version" class="block text-sm font-medium text-cyan-700">Version</label>
            <input type="text" name="version" id="version" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
        </div>
        <div>
            <button type="submit" class="w-full py-2 bg-cyan-500 hover:bg-cyan-600 text-white font-bold rounded-md border-2 border-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-500">Submit</button>
        </div>
    </form>
</div>

</section>

    
    
</body>
</html>