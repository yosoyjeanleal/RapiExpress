<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapiExpress - Servicios de Courier y Paquetería</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Estilos adicionales para la página de inicio */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #FECD0A;
            color: #223E92;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #223E92;
            color: white;
            transform: translateY(-3px);
        }
        
        .features-section {
            padding: 4rem 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            color: #223E92;
            margin-bottom: 3rem;
            font-size: 2rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1.5rem;
        }
        
        .feature-title {
            color: #223E92;
            margin-bottom: 1rem;
        }
        
        .about-section {
            padding: 4rem 0;
            background-color: #f8f9fa;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 3rem;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        
        .about-image img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .testimonials-section {
            padding: 4rem 0;
            background-color: white;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            position: relative;
        }
        
        .testimonial-quote {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: #223E92;
        }
        
        .contact-section {
            padding: 4rem 0;
            background-color: #223E92;
            color: white;
        }
        
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
        }
        
        .submit-button {
            background-color: #FECD0A;
            color: #223E92;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .submit-button:hover {
            background-color: white;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-image {
                order: -1;
            }
        }
    </style>
</head>
<body>
<header>
    <!-- Tu header existente -->
</header>

<main>
    <!-- Sección Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Soluciones Logísticas Confiables en Todo Ecuador</h1>
                <p class="hero-subtitle">Envíos rápidos, seguros y económicos con seguimiento en tiempo real</p>
                <a href="#contacto" class="cta-button">Contáctanos Hoy</a>
            </div>
        </div>
    </section>
    
    <!-- Sección de Características -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="assets/img/icon-paqueteria.png" alt="Paquetería" class="feature-icon">
                    <h3 class="feature-title">Paquetería 4x4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
                </div>
                <div class="feature-card">
                    <img src="assets/img/icon-categoria-c.png" alt="Categoría C" class="feature-icon">
                    <h3 class="feature-title">Categoría C</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
                </div>
                <div class="feature-card">
                    <img src="assets/img/icon-importacion.png" alt="Importación" class="feature-icon">
                    <h3 class="feature-title">Importación a Consumo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección Sobre Nosotros -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Sobre RapiExpress</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere.</p>
                    <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet.</p>
                </div>
                <div class="about-image">
                    <img src="assets/img/about-team.jpg" alt="Equipo RapiExpress">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Testimonios -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Lo que dicen nuestros clientes</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula."</p>
                    <p class="testimonial-author">- Juan Pérez, Guayaquil</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-quote">"Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum."</p>
                    <p class="testimonial-author">- María González, Quito</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-quote">"Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui."</p>
                    <p class="testimonial-author">- Carlos Rodríguez, Cuenca</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Contacto -->
    <section class="contact-section" id="contacto">
        <div class="container">
            <h2 class="section-title">Contáctanos</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p><strong>Dirección:</strong> Av. Principal 123, Guayaquil, Ecuador</p>
                    <p><strong>Teléfono:</strong> (04) 123-4567</p>
                    <p><strong>Email:</strong> info@rapiexpress.com</p>
                    <p><strong>Horario:</strong> Lunes a Viernes 8:00 - 18:00</p>
                </div>
                <div class="contact-form">
                    <h3>Envíanos un Mensaje</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="modern-footer">
    <!-- Tu footer existente -->
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>