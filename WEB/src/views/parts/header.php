<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutch Cuisine Guide</title>
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="container navbar-container">
            <a href="index.php" class="navbar-brand">Dutch Cuisine</a>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-menu">
                <a href="../views/index.php">Home</a>
                <div class="dropdown">
                    <a href="recipes.php">Recipes ▼</a>
                    <div class="dropdown-content">
                        <a href="stroopwafel.php">Stroopwafel</a>
                        <a href="huzarensalade.php">Huzarensalade</a>
                        <a href="stamppot.php">Stamppot</a>
                        <a href="hachee.php">Hachee</a>
                    </div>
                </div>
                <a href="../views/ingredients.php">Ingredients</a>
                <a href="../views/culture.php">Culture</a>
            </div>
        </div>
    </nav>
    <script src="script.js"></script>
</body>
</html>
