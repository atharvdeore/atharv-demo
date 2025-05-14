<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select subject</title>
</head>

<body>
    <h2>select subject></h2>
    <form action="display.php" method="POST">
        <label for="subjects">Choose subjects:</label><br>
        <select id="subjects" name="subjects[]" multiple size="5">
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="English">English</option>
            <option value="History">History</option>
            <option value="Computer Science">Computer Science</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>