<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiNetCloud</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ServiNetCloud</h1>
        <p class="contact">Contáctanos: 924243374</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.jpg" width="100px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link active" href="#inicio">Inicio</a>
                    <a class="nav-item nav-link" href="#quien_soy">Quien soy</a>
                    <a class="nav-item nav-link" href="#cursos">Cursos</a>
                    <a class="nav-item nav-link" href="#contacto">Contacto</a>
                    <a class="nav-item nav-link" href="#blog">Blog</a>
                    <a class="nav-item nav-link" href="login.php">Iniciar sesion</a>

                </div>
            </div>
        </div>
    </nav>
    

    <section>
        <figure>
            <img src="img/banner.jpg" class="banner-img" alt="Banner">
        </figure>
    </section>
    
    <section class="carousel-container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carrusel/collage-fondo-programacion_23-2149901789.avif" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel/carrusel2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel/carrusel3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

    <section class="section-content container" id="quien_soy">
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h2>¿Por qué conmigo?</h2>
                <ul>
                    <li>Serás protagonista de tu aprendizaje</li>
                    <li>Conecto con tus necesidades</li>
                    <li>Adapto el contenido a tu perfil y conocimientos</li>
                    <li>Los ejemplos son casos prácticos en ámbitos profesionales y laborales</li>
                    <li>Te acompaño en tu camino con prácticas tutorializadas</li>
                    <li>No hay teoría, solo practicar, practicar</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="cursos">
        <div class="special-offer">
            <p>Recibe un mini tutorial y aprovecha la oferta</p>
            <button>Consigue el tutorial</button>
        </div>

        <div class="services-section container mt-5">
            <div class="row text-center">
                <div class="col-md-3">OFIMÁTICA</div>
                <div class="col-md-3">HERRAMIENTAS EN LA NUBE</div>
                <div class="col-md-3">HERRAMIENTAS DE PRODUCTIVIDAD</div>
                <div class="col-md-3">PRESENCIA ONLINE</div>
            </div>
        </div>

        <div class="team-section container mt-5">
            <div class="row">
                <div class="col-md-3">Leonardo Torres</div>
                <div class="col-md-3">Santiago Ormeño</div>
                <div class="col-md-3">Arturo Vidal</div>
            </div>
        </div>
    </section>

    <section class="contact-form-section mt-5" id="contacto">
        <div class="container">
            <h2>CONTACTA CONMIGO</h2>
            <p>Recibe un mini tutorial en videos y aprovecha Office Online. Recibirás el mini tutorial y las novedades del blog. Nada de spam, te lo aseguro.</p>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Ingrese correo" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" placeholder="Tu mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Consigue el tutorial</button>
            </form>
        </div>
    </section>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <ul class="list-group" id="edit-cuadro">
                    <li class="list-group-item disabled text-center" style="background-color: #60c9ec;">SIGUE ESTA RECOMENDACIONES</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Me interesa el curso por Ig</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">No tengo conocimiento de ordenadores ¿crees que deba de aprender?</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Que necesito para hacer las clases por Skype</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Cómo me enseñas por Skype</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Las clases de dónde son</li>
                </ul>
            </div>
            <div class="col-md-6 mb-3">
                <ul class="list-group" style="background-color: #30a3c9; color: #FFFFFF;">
                    <li class="list-group-item disabled text-center" style="background-color: #60c9ec;">SIGUE ESTA RECOMENDACIONES</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Y los videos como funcionan</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">¿Hay un límite en la reproducción de videos?</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Funcionan los tutoriales por email?</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">Cómo se paga</li>
                    <li class="list-group-item" style="background-color: #30a3c9;">No tengo conocimientos de ordenadores, ¿qué necesito?</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="container mt-5" id="blog">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="p-3 text-center" style="background-color: #30a3c9; color: #FFFFFF;">
                    <h3>Acerca de mí</h3>
                    <p>Soy Mauro, enseño a sacar provecho de las nuevas tecnologías a quienes quieren mejorar o reciclar sus conocimientos para llevar adelante sus proyectos.</p>
                </div>
            </div>
    
            <div class="col-md-4 mb-3">
                <div class="p-3 text-center" style="background-color: #30a3c9; color: #FFFFFF;">
                    <h3>Contacto</h3>
                    <p>• 056 945683071</p>
                    <p>• jluque@senati.pe</p>
                    <p>• <a href="https://www.servinetcloud.com" style="color: #FFFFFF;">https://www.servinetcloud.com</a></p>
                </div>
            </div>
    
            <div class="col-md-4 mb-3">
                <div class="p-3 text-center" style="background-color: #30a3c9; color: #FFFFFF;">
                    <h3>Noticias</h3>
                    <img src="URL_DE_LA_IMAGEN" alt="Noticias" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
