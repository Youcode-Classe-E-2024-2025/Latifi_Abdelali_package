<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tableaux</h1>
    <table>
        <tr>
            <th>ID</th> 
            <th>author name</th>            
            <th>email</th>
        </tr>
    <?php
    require 'connexion.php';
    $requete = 'SELECT * FROM authors';
    $query = mysqli_query($con,$requete);
    while($rows = mysqli_fetch_assoc($query)){
        $id = $rows['id'];
        echo "<tr>";
        echo "<td>". $rows['id']."</td>";
        echo "<td>". $rows['author_name']."</td>";
        echo "<td>". $rows['email']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>