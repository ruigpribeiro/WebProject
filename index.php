<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Icon no separador do site -->
    <link rel="icon" href="img/logo/logo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- O meu CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- header -->
    <?php include 'partials/header.php'; ?>

    <!-- Conteúdo da Página -->
    <main>
        <!-- Landing Page -->
        <section class="container hero d-flex text-center align-items-center justify-content-center" id="home">
            <?php include 'partials/landing.php'; ?>
        </section>
        
        <!-- About Me -->
        <section id="about-me" class="about bg-light py-5">
            <?php include 'partials/about.php'; ?>
        </section>

        <!-- Profile & Skills -->
        <sec class="profile my-5" id="about">
            <?php include 'partials/profile.php'; ?>
            <?php include 'partials/about.php'; ?>
        </section>

        <!-- Projects -->
        <section id="portfolio" class="container-fluid my-5 py-5 bg-light">
            <?php include 'partials/projects.php'; ?>
        </section>

        <!-- Contact me -->
        <section id="contact" class="container-fluid mb-3">
            <?php include 'partials/contact.php'; ?>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- O meu JavaScript -->
    <script src="js/main.js"></script>

    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/91711b3836.js" crossorigin="anonymous"></script>
</body>
</html>