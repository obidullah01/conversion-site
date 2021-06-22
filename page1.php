<!DOCTYPE html>
<html>
<head>
    
    <title>Home</title>
</head>
<body>
    <p><font color="red">Page 1 [Home]</font></p>
    <p><font color="red">Conversion Site</font></p>
    <nav>
        <a href="./page1.php">1. Home</a>
        <a href="./page2.php">2. Conversion Rate</a>
        <a href="./page3.php">3. History</a>
    </nav>
    <br/>
    <p><font color="red">Converter</font></p>
    <form action="./process.php" method="POST">
        <select name="option">
            <option value="f2i">feet to inch</option>
            <option value="i2f">inch to feet</option>
            <option value="f2c">feet to centimeter</option>
            <option value="c2f">centimeter to feet</option>
            <option value="i2c">inch to centimeter</option>
        </select>
        <br/>
        <br/>
        Value:<input type="text" name="inputval"/>
        <br/>
        <br/>
        Result:<input type="text"/>
        <input type="submit"/>
    </form>
</body>
</html>