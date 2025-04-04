<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Conexión Estratégica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f7fa; /* Fondo más claro para contrastar con las tarjetas */
        }
        .service-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
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
            <a class="navbar-brand" href="inicio.php">
                <img src="Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="servicios.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="equipo.php">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container text-center my-5">
        <h2 class="text-primary fw-bold">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="./Consultoria estrategica.jpg" class="service-img" alt="Consultoría Estratégica">
                    <h5 class="mt-3">Consultoría Estratégica</h5>
                    <p>Diseño de estrategias empresariales personalizadas para el crecimiento y expansión.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="./Optimizacion de procesos.jpg" class="service-img" alt="Optimización de Procesos">
                    <h5 class="mt-3">Optimización de Procesos</h5>
                    <p>Implementación de metodologías Lean y Six Sigma para maximizar la eficiencia.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="Expansión internacional.jpg" class="service-img" alt="Expansión Internacional">
                    <h5 class="mt-3">Expansión Internacional</h5>
                    <p>Asesoramiento en comercio exterior y alianzas estratégicas globales.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="Innovacion y tecnologia.jpeg" class="service-img" alt="Innovación y Tecnología">
                    <h5 class="mt-3">Innovación y Tecnología</h5>
                    <p>Integración de tecnologías emergentes para mejorar la competitividad del negocio.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="Analisis financiero.png" class="service-img" alt="Análisis Financiero">
                    <h5 class="mt-3">Análisis Financiero</h5>
                    <p>Evaluación de riesgos y oportunidades para optimizar la rentabilidad empresarial.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4 shadow">
                    <img src="Formacion empresarial.jpg" class="service-img" alt="Formación Empresarial">
                    <h5 class="mt-3">Formación Empresarial</h5>
                    <p>Capacitación y mentoría para potenciar el liderazgo y gestión empresarial.</p>
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
