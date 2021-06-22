<?php
    $file = file_get_contents('./data.json');
    $dataJSON = json_decode($file, true);
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>History</title>
</head>
<body>
    <p><font color="red">Page 1 [History]</font></p>
    <p><font color="red">Conversion Site</font></p>
    <nav>
        <a href="./page1.php">1. Home</a>
        <a href="./page2.php">2. Conversion Rate</a>
        <a href="./page3.php">3. History</a>
    </nav>
    <br/>
    <p><font color="red">Conversion History</font></p>
    <table border="1px">
        <?php
            foreach($dataJSON as $row)
            {
                echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['type']."</td>
                <td>".$row['val1']."</td>
                <td>".$row['val2']."</td>
            </tr>";
            }
        ?>
    </table>
</body>
</html>