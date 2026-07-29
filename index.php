<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proces.php" method="POST">
        <label for="">employee name</label>
        <input type="text" name="name" id=""><br>

        <label for="">hourly rate</label>
        <select name="hr" id="">
            <option value="">500</option>
            <option value="">650</option>
            <option value="">800</option>
        </select><br>
        <label for="">hourworked</label>
        <input type="number" name="hw" id=""><br>
        <label for="">hoursOvertime</label>
        <input type="number" name="ho" id=""> <br>
        <button type="submit">sumbit</button>
        
    </form>
</body>
</html>

