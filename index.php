<?php
    include("database.php");
?>

<html lang="en">
<head>
    <script src="script.js" defer></script>
    <meta name=""viewport content="width=device-width, intial-scale=2.0">
    <link rel="stylesheet" href="style.css">
    <title>Project</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" required><br>
        <label for="discription">Discription:</label><br>
        <input type="text" name="discription" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>