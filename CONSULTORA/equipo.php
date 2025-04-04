    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Equipo - Conexión Estratégica</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body {
                background-color: #f4f7fa; /* Fondo más claro para contrastar con las tarjetas */
            }
            .team-img {
                width: 150px;
                height: 150px;
                object-fit: cover;
                border: 4px solid #0d6efd;
            }
            .card {
                border: none;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;
                min-height: 320px;
            }
            .card:hover {
                transform: scale(1.03);
            }
            h2 {
                color: #0d6efd;
                font-weight: bold;
            }
            p.subtext {
                color: #28a745;
                font-weight: bold;
            }
            .collapse-content {
                transition: max-height 0.4s ease-in-out;
            }
            .btn-outline-warning {
                border: 2px solid #0d6efd;
                color: #0d6efd;
            }

            .btn-outline-warning:hover {
                background-color: #0d6efd;
                color: #fff;
            }
            .about-us img {
                width: 100%;
                max-width: 400px; /* Ancho máximo */
                height: 300px; /* Altura fija */
                object-fit: cover; /* Ajuste de la imagen */
                border-radius: 12px;
            }
            .about-us {
                background-color: #f8f9fa; /* Fondo claro */
                color: #333; /* Texto oscuro */
                padding: 50px 20px;
                border-left: 5px solid #0d6efd; /* Borde azul al lado izquierdo */
                border-radius: 10px;
                margin-bottom: 50px; /* Separa del pie de página */
            }
            .zoom-image {
                transition: transform 0.3s ease-in-out;
                cursor: pointer;
            }

            .zoom-image:hover {
                transform: scale(1.1); /* Aumenta un 10% */
            }
            .zoomed-image {
                max-width: 90vw; /* 90% del ancho de la pantalla */
                max-height: 90vh; /* 90% del alto de la pantalla */
            }
            .navbar-brand img {
                height: 60px; /* Ajusta este valor según lo que consideres adecuado */
            }
            .navbar {
            background-color: #343a40;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #ffffff !important; 
            text-decoration: underline;
        }
        .navbar-brand img {
            height: 60px; 
        }
        .nav-item {
            padding: 0 15px;
        }
        .navbar-nav .nav-link {
            transition: transform 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
        }

        /* 🔥 Estilo para la opción activa en el menú */
        .navbar-nav .nav-link.active {
            background-color: #ffffff33; /* Color de fondo para resaltar */
            border-radius: 8px;
            color: yellow !important;
        }

        /* Añadir un poco de padding a los elementos */
        .nav-item {
            padding: 0 15px;
        }

        /* Agregar una animación suave */
        .navbar-nav .nav-link {
            transition: transform 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="inicio.php"><img src="Logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link active" href="equipo.php">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="container text-center my-5">
            <h2>Conoce a nuestros facilitadores</h2>
            <p class="subtext">Un equipo de expertos listos para guiarte a la mejora continua</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./fo.png" class="card-img-top rounded-circle team-img mx-auto" alt="Edwin Bautista">
                        <h5>Edwin Bautista</h5>
                        <p>Especialista en Innovación y Soluciones Tecnológicas</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoEdwin" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoEdwin">
                            <p style="text-align:left;">Experto en desarrollo de software, metodologías ágiles y soluciones innovadoras para empresas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./ericka.png" class="card-img-top rounded-circle team-img mx-auto" alt="Ericka Alejo">    
                        <h5>Ericka Alejo</h5>
                        <p>CEO y Estratega Empresarial</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoEricka" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoEricka">
                            <p style="text-align:left;">Más de 2 años liderando estrategias empresariales y expansión de negocios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./kenia.png" class="card-img-top rounded-circle team-img mx-auto" alt="Kenia Ascencio">
                        <h5>Kenia Ascencio</h5>
                        <p>Gestión Empresarial</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoKenia" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoKenia">
                            <p style="text-align:left;">Especialista en gestión de recursos, planificación y mejora de procesos organizacionales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./mireira.png" class="card-img-top rounded-circle team-img mx-auto" alt="Mireira Osorio">
                        <h5>Mireira Osorio</h5>
                        <p>Optimización de Procesos</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoMireira" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoMireira">
                            <p style="text-align:left;">Experiencia en eficiencia operativa, automatización de procesos y calidad empresarial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./yessenia.png" class="card-img-top rounded-circle team-img mx-auto" alt="Yessenia Jorge">
                        <h5>Yessenia Jorge</h5>
                        <p>Transformación Digital</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoYessenia" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoYessenia">
                            <p style="text-align:left;">Especialista en digitalización de negocios y adopción de nuevas tecnologías.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 shadow">
                        <img src="./luis.png" class="card-img-top rounded-circle team-img mx-auto" alt="Luis Orellana">
                        <h5>Luis Orellana</h5>
                        <p>Gestión de Proyectos</p>
                        <button class="btn btn-outline-warning rounded-circle p-2 position-absolute bottom-0 end-0 m-2" data-bs-toggle="collapse" data-bs-target="#infoLuis" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="bi bi-plus-circle" style="font-size: 24px;"></i></button>
                        <div class="collapse mt-2 collapse-content" id="infoLuis">
                            <p style="text-align:left;">Amplia experiencia en gestión de proyectos, planificación y ejecución de estrategias empresariales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sección sobre nosotros centrada -->
    <div class="container d-flex justify-content-center">
        <div class="about-us text-center">
            <h3 style="text-align:left;">Sobre Nosotros</h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p style="text-align:left;">En Conexión Estratégica, nos especializamos en brindar asesoramiento integral a empresas para optimizar sus procesos, implementar tecnologías innovadoras y mejorar su competitividad. Nuestro equipo multidisciplinario está formado por profesionales apasionados y con experiencia en distintas áreas clave, lo que nos permite ofrecer soluciones adaptadas a las necesidades específicas de cada cliente.</p>
                    <p style="text-align:left;">Nos enfocamos en ayudar a nuestros clientes a superar retos y a transformar sus operaciones, generando un impacto positivo en su crecimiento y eficiencia empresarial.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="imagen grupal.jpeg" class="img-fluid rounded shadow-lg zoom-image" alt="Equipo Conexión Estratégica" data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Modal para expandir imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="imagen grupal.jpeg" class="img-fluid rounded" alt="Equipo Conexión Estratégica">
                </div>
            </div>
        </div>
    </div>

    <section class="container text-center my-5">
    <div class="row">
        <!-- Tarjeta Misión -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <div class="card-body">
                    <h5 class="card-title text-primary">Misión</h5>
                    <p class="card-text">Nuestra misión es proporcionar soluciones tecnológicas de calidad que ayuden a las empresas a mejorar sus procesos y alcanzar sus objetivos estratégicos.</p>
                </div>
            </div>
        </div>

        <!-- Tarjeta Visión -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <div class="card-body">
                    <h5 class="card-title text-primary">Visión</h5>
                    <p class="card-text">Aspiramos a ser líderes en innovación tecnológica, brindando servicios de alta calidad que transformen el futuro empresarial y contribuyan al desarrollo sostenible.</p>
                </div>
            </div>
        </div>

        <!-- Tarjeta Valores -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow">
                <div class="card-body">
                    <h5 class="card-title text-primary">Valores</h5>
                    <ul class="list-unstyled">
                        <li> Integridad</li>
                        <li> Compromiso</li>
                        <li> Excelencia</li>
                        <li> Trabajo en equipo</li>
                    </ul>
                </div>
            </div>
    </div>
</section>

        <footer class="bg-primary text-white text-center py-3">
            <p>&copy; 2025 Conexión Estratégica. Todos los derechos reservados.</p>
        </footer>

        <!-- 🚀 Script para activar la opción del menú actual -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const currentPage = window.location.pathname.split("/").pop(); // Obtiene el nombre del archivo actual
            document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
                if (link.getAttribute("href") === currentPage) {
                    link.classList.add("active"); // Aplica la clase 'active' automáticamente
                }
            });
        });
    </script>
    </body>
    </html>