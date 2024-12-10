<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <header class="flex justify-between bg-cyan-300 p-7">
    <div>
    <h1 class="font-extrabold text-3xl" >Mypackages</h1>
    </div>
    <div class="flex text-xl justify-between text-cyan-900	">
        <a href="affichage.php"><h3 class="px-3 font-bold">allpackages</h3></a>
        <h3 class="px-3 font-bold">authors</h3>
        <h3 class="px-3 font-bold">packages/authors</h3>
    </div>
    </header>
    <section>
        <div class="border-solid border-cyan-700 border-2 rounded" >
        <label for="">add package</label>
        <form action="add.php" method="post">
            <label for="">packagename</label><br>
            <input type="text" name="packagename"><br>
            <label for="">packagedescreption</label><br>
            <textarea name="packagedescreption"></textarea><br>
            <label for="">created at</label><br>
            <input type="date" name="created_at"><br>
            <button class="bg-cyan-300 border-cyan-800 border-2 rounded font-bold" type="submit">submit</button>
        </form>
        </div>
        <br>

        <label for="">add authors</label>
        <form action="">
            <label for="">authorname</label><br>
            <input type="text"><br>
            <label for="">email</label><br>
            <input type="text">
        </form>
    </section>

    
    
</body>
</html>