// Menú móvil
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');

menuToggle.addEventListener('click', function() {
    mobileMenu.classList.toggle('active');
});

// Cerrar menú al hacer clic en un enlace
document.querySelectorAll('.mobile-menu a').forEach(link => {
    link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
    });
});

// Calculadora
function calcular() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operacion = document.getElementById('operacion').value;
    let resultado;
    
    if (isNaN(num1) || isNaN(num2)) {
        document.getElementById('resultado').innerText = 'Por favor ingresa números válidos';
        return;
    }
    
    switch(operacion) {
        case 'suma':
            resultado = num1 + num2;
            break;
        case 'resta':
            resultado = num1 - num2;
            break;
        case 'multiplicacion':
            resultado = num1 * num2;
            break;
        case 'division':
            if (num2 === 0) {
                resultado = 'No se puede dividir por cero';
            } else {
                resultado = num1 / num2;
            }
            break;
        default:
            resultado = 'Operación no válida';
    }
    
    document.getElementById('resultado').innerText = `Resultado: ${resultado}`;
}

// Login Modal
const loginBtn = document.getElementById('loginBtn');
const mobileLoginBtn = document.getElementById('mobileLoginBtn');
const loginModal = document.getElementById('loginModal');
const closeModal = document.getElementById('closeModal');

// Elementos de los formularios
const loginFormContainer = document.getElementById('loginFormContainer');
const recoveryFormContainer = document.getElementById('recoveryFormContainer');
const registerFormContainer = document.getElementById('registerFormContainer');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const registerLink = document.getElementById('registerLink');
const backToLoginFromRecovery = document.getElementById('backToLoginFromRecovery');
const backToLoginFromRegister = document.getElementById('backToLoginFromRegister');

// Abrir modal desde desktop o móvil
[loginBtn, mobileLoginBtn].forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        showLoginForm();
        loginModal.style.display = 'block';
    });
});

// Cerrar modal
closeModal.addEventListener('click', function() {
    loginModal.style.display = 'none';
});

// Cerrar al hacer clic fuera del modal
window.addEventListener('click', function(e) {
    if (e.target === loginModal) {
        loginModal.style.display = 'none';
    }
});

// Mostrar formulario de recuperación
forgotPasswordLink.addEventListener('click', function(e) {
    e.preventDefault();
    showRecoveryForm();
});

// Mostrar formulario de registro
registerLink.addEventListener('click', function(e) {
    e.preventDefault();
    showRegisterForm();
});

// Volver al login desde recuperación
backToLoginFromRecovery.addEventListener('click', function(e) {
    e.preventDefault();
    showLoginForm();
});

// Volver al login desde registro
backToLoginFromRegister.addEventListener('click', function(e) {
    e.preventDefault();
    showLoginForm();
});

// Funciones para cambiar entre formularios
function showLoginForm() {
    loginFormContainer.style.display = 'block';
    recoveryFormContainer.style.display = 'none';
    registerFormContainer.style.display = 'none';
}

function showRecoveryForm() {
    loginFormContainer.style.display = 'none';
    recoveryFormContainer.style.display = 'block';
    registerFormContainer.style.display = 'none';
}

function showRegisterForm() {
    loginFormContainer.style.display = 'none';
    recoveryFormContainer.style.display = 'none';
    registerFormContainer.style.display = 'block';
}

// Manejo de envío de formularios
document.getElementById('mainLoginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Lógica de autenticación
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Validación básica (deberías implementar autenticación real)
    if(username && password) {
        showMessage('Inicio de sesión exitoso (simulado)', 'success');
        setTimeout(() => {
            loginModal.style.display = 'none';
        }, 1500);
    } else {
        showMessage('Por favor complete todos los campos', 'error');
    }
});

document.getElementById('recoveryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('recoveryEmail').value;
    
    if(email) {
        showMessage('Se han enviado instrucciones a tu correo (simulado)', 'success');
        setTimeout(() => {
            showLoginForm();
        }, 1500);
    } else {
        showMessage('Por favor ingrese su correo electrónico', 'error');
    }
});

document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const password = document.getElementById('regPassword').value;
    const confirmPassword = document.getElementById('regConfirmPassword').value;
    
    if(password !== confirmPassword) {
        showMessage('Las contraseñas no coinciden', 'error');
        return;
    }
    
    // Validación básica
    showMessage('Registro exitoso (simulado)', 'success');
    setTimeout(() => {
        showLoginForm();
    }, 1500);
});

// Función para mostrar mensajes
function showMessage(text, type) {
    // Eliminar mensajes anteriores
    const oldMessages = document.querySelectorAll('.message');
    oldMessages.forEach(msg => msg.remove());
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${type}-message`;
    messageDiv.textContent = text;
    
    const currentForm = document.querySelector('.modal-content [style*="display: block"]');
    currentForm.insertBefore(messageDiv, currentForm.firstChild);
    
    // Eliminar el mensaje después de 3 segundos
    setTimeout(() => {
        messageDiv.remove();
    }, 3000);
}

// Manejo de envío de formularios con AJAX
document.getElementById('mainLoginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    fetch('/RapiExpress/assets/includes/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            showMessage(data.message, 'success');
            setTimeout(() => {
                loginModal.style.display = 'none';
                // Redirigir o actualizar la interfaz según el rol del usuario
                window.location.href = 'dashboard.html'; // Crear esta página
            }, 1500);
        } else {
            showMessage(data.message, 'error');
        }
    })
    .catch(error => {
        showMessage('Error en la conexión', 'error');
    });
});

document.getElementById('recoveryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('recoveryEmail').value;
    
    fetch('/RapiExpress/assets/includes/recuperar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            email: email
        })
    })
    .then(response => response.json())
    .then(data => {
        showMessage(data.message, data.success ? 'success' : 'error');
        if(data.success) {
            setTimeout(() => {
                showLoginForm();
            }, 1500);
        }
    })
    .catch(error => {
        showMessage('Error en la conexión', 'error');
    });
});

document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const password = document.getElementById('regPassword').value;
    const confirmPassword = document.getElementById('regConfirmPassword').value;
    
    if(password !== confirmPassword) {
        showMessage('Las contraseñas no coinciden', 'error');
        return;
    }
    
    const formData = {
        nombre: document.getElementById('regName').value,
        email: document.getElementById('regEmail').value,
        usuario: document.getElementById('regUsername').value,
        contrasena: password
    };
    
    fetch('/RapiExpress/assets/includes/registro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        showMessage(data.message, data.success ? 'success' : 'error');
        if(data.success) {
            setTimeout(() => {
                showLoginForm();
            }, 1500);
        }
    })
    .catch(error => {
        showMessage('Error en la conexión', 'error');
    });
});