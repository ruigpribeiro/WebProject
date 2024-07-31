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
            <?php include 'partials/skills.php'; ?>
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

    <!-- Modal Form -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Me</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  id="name" placeholder="Enter your name" required >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="6" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark" id="message2-toast">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Send Message -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="img/logo/logo.png" style="width: 15px;" class="rounded me-2" alt="Main Logo">
          <strong class="me-auto">Message Sent</strong>
          <small>now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Your message has been sent.
        </div>
      </div>
    </div>

    <!-- Toast Submit -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="img/logo/logo.png" style="width: 15px;" class="rounded me-2" alt="Main Logo">
            <strong class="me-auto">Message Sent</strong>
            <small>now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Your message has been sent.
          </div>
        </div>
      </div>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- O meu JavaScript -->
    <script src="js/main.js"></script>

    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/91711b3836.js" crossorigin="anonymous"></script>
</body>
</html>