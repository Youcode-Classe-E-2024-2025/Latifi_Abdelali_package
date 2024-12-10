<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    s
    <title>Document</title>
</head>
<body>
    <h1>tableaux</h1>
    <table>
        <tr>
            <th>id</th>
            <th>package name</th>
            <th>package descreption</th>            
            <th>created at</th>
        </tr>
    <?php
    require 'connexion.php';
    $requete = 'SELECT * FROM allpackages';
    $query = mysqli_query($con,$requete);
    while($rows = mysqli_fetch_assoc($query)){
        $id = $rows['id'];
        echo "<tr>";
        echo "<td>". $rows['id']."</td>";
        echo "<td>". $rows['package_name']."</td>";
        echo "<td>". $rows['packages_descreption']."</td>";
        echo "<td>". $rows['created_at']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>