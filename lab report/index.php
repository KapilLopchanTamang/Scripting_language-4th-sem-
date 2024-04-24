<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Work Form</title>
</head>
<body>
    <h2>Lab Work Form</h2>
    <form action="process_form.php" method="post">
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" maxlength="40" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" pattern="[a-zA-Z]+[0-9]+" title="Username must start with a letter followed by numbers" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" minlength="8" required><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
