<!DOCTYPE html>
<html>
<head>
    <title>Login Formular</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css_stylesheets/index.css">
</head>
<body>
<?php include '../html_docs/navbar.php'; ?>

    <h2>Login</h2>
    <form action="/login" method="post">
        <label for="username">Benutzername:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
