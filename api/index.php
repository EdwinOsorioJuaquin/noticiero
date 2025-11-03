<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIARIO EL HOCICÓN</title>
    <link rel="icon" href="logonoticieron.png">

    <!-- Bootstrap moderno -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f5f7;
        color: #212529;
      }

      .blog-header {
        border-bottom: 4px solid #0d6efd;
        background-color: #ffffff;
        padding: 1rem 0;
        margin-bottom: 2rem;
      }

      .blog-header-logo {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #0d6efd;
        text-decoration: none;
        letter-spacing: 1px;
      }

      .jumbotron {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        border-radius: 12px;
        color: #fff;
        padding: 3rem 2rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      }

      .card {
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.2s ease-in-out;
      }
      .card:hover {
        transform: scale(1.02);
      }

      .card-body h3 a {
        text-decoration: none;
      }

      footer {
        background-color: #0d6efd;
        color: white;
        text-align: center;
        padding: 1.5rem 0;
        margin-top: 3rem;
      }

      footer a {
        color: #ffc107;
        text-decoration: none;
      }

      footer a:hover {
        text-decoration: underline;
      }

      img.card-img-left {
        width: 200px;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <header class="blog-header text-center">
        <a class="blog-header-logo" href="#">NOTICIAS SON NOTICIAS 2025</a>
      </header>

      <?php
        // PORTADA
        $portada = [
          "titulo" => "OSORIO JUAQUIN EDWIN",
          "resumen" => "Ingeniero de Sistemas y periodista tecnológico que combina la innovación, el humor y la verdad en cada titular. Bienvenido al Diario El Hocicón, donde las noticias se cuentan... ¡sin pelos en la lengua!"
        ];
      ?>

      <div class="jumbotron text-center">
        <h1 class="display-4 fw-bold"><?php echo $portada["titulo"]; ?></h1>
        <p class="lead my-3"><?php echo $portada["resumen"]; ?></p>
      </div>

      <!-- Fila 1: INTERNACIONAL y NACIONAL -->
      <?php
        $internacional = [
          "titulo" => "REAL MADRID GOLEA AL BARCELONA",
          "autor" => "Edwin Osorio",
          "resumen" => "El Club de Fútbol Real Madrid sorprende con una paliza histórica de 9-0 al Barcelona en la final de la Champions League 2026. Los hinchas celebran una noche inolvidable en el Santiago Bernabéu.",
          "imagen" => "https://upload.wikimedia.org/wikipedia/commons/9/98/Real_Madrid_CF.svg"
        ];

        $nacional = [
          "titulo" => "PERÚ LOGRA RÉCORD EN TECNOLOGÍA Y EDUCACIÓN DIGITAL",
          "autor" => "Edwin Osorio",
          "resumen" => "El Gobierno del Perú lanza la mayor iniciativa de transformación digital en universidades públicas, impulsando la educación híbrida con inteligencia artificial y software libre.",
          "imagen" => "https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Peru.svg"
        ];
      ?>

      <div class="row mb-4">
        <!-- Internacional -->
        <div class="col-md-6 mb-3">
          <div class="card shadow-sm flex-md-row h-100">
            <?php if (!empty($internacional["imagen"])): ?>
              <img class="card-img-left d-none d-md-block" 
                   src="<?php echo htmlspecialchars($internacional["imagen"]); ?>" 
                   alt="Imagen Internacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
                <h3 class="mb-2">
                  <a class="text-dark fw-bold" href="#">
                    <?php echo htmlspecialchars($internacional["titulo"]); ?>
                  </a>
                </h3>
                <div class="text-muted mb-2">
                  <?php echo htmlspecialchars($internacional["autor"]); ?>
                </div>
                <p class="card-text">
                  <?php echo htmlspecialchars($internacional["resumen"]); ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Nacional -->
        <div class="col-md-6 mb-3">
          <div class="card shadow-sm flex-md-row h-100">
            <?php if (!empty($nacional["imagen"])): ?>
              <img class="card-img-left d-none d-md-block" 
                   src="<?php echo htmlspecialchars($nacional["imagen"]); ?>" 
                   alt="Imagen Nacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <strong class="d-inline-block mb-2 text-danger">Nacional</strong>
                <h3 class="mb-2">
                  <a class="text-dark fw-bold" href="#">
                    <?php echo htmlspecialchars($nacional["titulo"]); ?>
                  </a>
                </h3>
                <div class="text-muted mb-2">
                  <?php echo htmlspecialchars($nacional["autor"]); ?>
                </div>
                <p class="card-text">
                  <?php echo htmlspecialchars($nacional["resumen"]); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <p>© 2025 Diario El Hocicón — Creado por <strong>Edwin Osorio Juaquin</strong></p>
        <p>
          <a href="#">Volver arriba ↑</a>
        </p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
