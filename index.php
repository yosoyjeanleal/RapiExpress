<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapiExpress</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <div class="container header-container">
        <a href="#" class="logo">
            <img src="assets/img/logo.png" alt="Logo RapiExpress" class="logo-img">
            <span>RapiExpress</span>
        </a>
        
        <!-- Menú desktop -->
        <ul class="desktop-menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="/RapiExpress/assets/includes/servicios.php">Servicios</a></li>
            <li><a href="#nosotros">Sobre Nosotros</a></li>
            <li><a href="/assets/includes/servicios.html">Calculadora</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#" id="loginBtn">Login</a></li>
        </ul>
        
        <!-- Botón para móvil -->
        <button class="menu-toggle" id="menuToggle">☰</button>
    </div>
    
    <!-- Menú móvil -->
    <ul class="mobile-menu" id="mobileMenu">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#nosotros">Sobre Nosotros</a></li>
        <li><a href="#calculadora">Calculadora</a></li>
        <li><a href="#contacto">Contacto</a></li>
        <li><a href="#" id="mobileLoginBtn">Login</a></li>
    </ul>
</header>

<!-- Modal de Login -->
<div class="login-modal" id="loginModal">
    <div class="modal-content">
        <span class="close-modal" id="closeModal">&times;</span>
        <div id="loginFormContainer">
            <h2>Iniciar Sesión</h2>
            <form class="login-form" id="mainLoginForm">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" placeholder="Ingrese su contraseña" required>
                </div>
                <button type="submit" class="login-button">Ingresar</button>
                <div class="login-links">
                    <a href="#" id="forgotPasswordLink">¿Olvidaste tu contraseña?</a>
                    <a href="#" id="registerLink">Registrarse</a>
                </div>
            </form>
        </div>
        
        <!-- Formulario de Recuperación de Contraseña -->
        <div id="recoveryFormContainer" style="display: none;">
            <h2>Recuperar Contraseña</h2>
            <form class="login-form" id="recoveryForm">
                <div class="form-group">
                    <label for="recoveryEmail">Correo Electrónico</label>
                    <input type="email" id="recoveryEmail" placeholder="Ingrese su correo" required>
                </div>
                <button type="submit" class="login-button">Enviar Instrucciones</button>
                <div class="login-links">
                    <a href="#" id="backToLoginFromRecovery">Volver a Iniciar Sesión</a>
                </div>
            </form>
        </div>
        
        <!-- Formulario de Registro -->
        <div id="registerFormContainer" style="display: none;">
            <h2>Registrarse</h2>
            <form class="login-form" id="registerForm">
                <div class="form-group">
                    <label for="regName">Nombre Completo</label>
                    <input type="text" id="regName" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="regEmail">Correo Electrónico</label>
                    <input type="email" id="regEmail" placeholder="Ingrese su correo" required>
                </div>
                <div class="form-group">
                    <label for="regUsername">Usuario</label>
                    <input type="text" id="regUsername" placeholder="Cree un nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="regPassword">Contraseña</label>
                    <input type="password" id="regPassword" placeholder="Cree una contraseña" required>
                </div>
                <div class="form-group">
                    <label for="regConfirmPassword">Confirmar Contraseña</label>
                    <input type="password" id="regConfirmPassword" placeholder="Repita su contraseña" required>
                </div>
                <button type="submit" class="login-button">Registrarse</button>
                <div class="login-links">
                    <a href="#" id="backToLoginFromRegister">Volver a Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>

<main>
    <!-- Sección Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Soluciones Logísticas Confiables en Todo Ecuador</h1>
                <p class="hero-subtitle">AHORA TUS COMPRAS ONLINE LLEGÁN A TI MÁS RÁPIDO... MÁS SEGURO.</p>
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
    

</main>

<footer class="modern-footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="assets/img/logo.png" alt="RapiExpress" class="footer-logo-img">
        </div>
        
        <div class="social-links">
            <a href="#" class="social-link" aria-label="Facebook">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                </svg>
            </a>
            <a href="#" class="social-link" aria-label="Instagram">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="#" class="social-link" aria-label="Twitter">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
            </a>
            <a href="#" class="social-link" aria-label="LinkedIn">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
        </div>
        
        <div class="footer-links">
            <a href="#inicio">Inicio</a>
            <a href="#servicios">Servicios</a>
            <a href="#nosotros">Sobre Nosotros</a>
            <a href="#contacto">Contacto</a>
            <a href="#">Política de Privacidad</a>
            <a href="#">Términos de Servicio</a>
        </div>
        
        <div class="copyright">
            <p>&copy; 2025 RapiExpress. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>