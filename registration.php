<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Registration</h1>
        <form action="submit.php" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="user_email" placeholder="Email" required>
            <input type="password" name="user_password" placeholder="Password" required>

            <?php $currentDate = date('Y-m-d'); ?>
            <input type="date" name="date" required min="<?php echo $currentDate; ?>">

            <div class="checkbox-group">
                <input type="checkbox" name="checkbox" id="java" value="Java">
                <label for="java">Java</label>
                <input type="checkbox" name="checkbox" id="python" value="Python">
                <label for="python">Python</label>
                <input type="checkbox" name="checkbox" id="dotnet" value=".NET">
                <label for="dotnet">.NET</label>
            </div>

            <div class="radio-group">
                <input type="radio" name="year-level" id="year1" value="1" required>
                <label for="year1">1</label>
                <input type="radio" name="year-level" id="year2" value="2" required>
                <label for="year2">2</label>
                <input type="radio" name="year-level" id="year3" value="3" required>
                <label for="year3">3</label>
                <input type="radio" name="year-level" id="year4" value="4" required>
                <label for="year4">4</label>
            </div>

            <input type="submit" value="Click Me">
            <input type="reset" value="Reset">
        </form>
    </main>
</body>
</html>