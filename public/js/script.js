// Confirmação de exclusão
function confirmDelete() {
    return confirm('Tem certeza que deseja excluir este produto? Esta ação não pode ser desfeita.');
}

// Sistema de partículas dinâmico - CORRIGIDO
class ParticleSystem {
    constructor() {
        this.particles = [];
        this.container = document.querySelector('.animated-background');
        this.init();
    }

    init() {
        this.createParticles();
        this.animate();
    }

    createParticles() {
        const particleCount = 6;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'dynamic-particle';
            
            const size = Math.random() * 60 + 20;
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${posX}%`;
            particle.style.top = `${posY}%`;
            particle.style.opacity = Math.random() * 0.2 + 0.1;
            particle.style.animationDuration = `${Math.random() * 30 + 20}s`;
            particle.style.animationDelay = `${Math.random() * 10}s`;
            
            this.container.appendChild(particle);
            this.particles.push(particle);
        }
    }

    animate() {
        requestAnimationFrame(() => this.animate());
    }
}

// Validação de formulário em tempo real
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar sistemas de partículas
    new ParticleSystem();

    // Efeito de digitação no título
    const title = document.querySelector('.header-title');
    const subtitle = document.querySelector('.header-subtitle');
    
    if (title) {
        // Reiniciar animação para garantir que funcione
        title.style.animation = 'none';
        setTimeout(() => {
            title.style.animation = '';
        }, 10);
    }

    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required], select[required]');
            let valid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    showInputError(input, 'Este campo é obrigatório');
                } else {
                    clearInputError(input);
                }
            });
            
            if (!valid) {
                e.preventDefault();
                showMessage('Por favor, preencha todos os campos obrigatórios', 'error');
            }
        });
    });
    
    // Efeitos visuais nos inputs
    const inputs = document.querySelectorAll('input, select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });

    // CORREÇÃO: Prevenir qualquer scroll horizontal
    window.addEventListener('scroll', () => {
        if (window.scrollX !== 0) {
            window.scrollTo(0, window.scrollY);
        }
    });
    
    // CORREÇÃO: Garantir que as animações do fundo funcionem
    const background = document.querySelector('.animated-background');
    if (background) {
        background.style.animationPlayState = 'running';
    }
});

// [Restante do JavaScript permanece igual...]

function showInputError(input, message) {
    clearInputError(input);
    input.style.borderColor = '#ef4444';
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'input-error';
    errorDiv.style.color = '#ef4444';
    errorDiv.style.fontSize = '0.8rem';
    errorDiv.style.marginTop = '0.25rem';
    errorDiv.textContent = message;
    
    input.parentNode.appendChild(errorDiv);
}

function clearInputError(input) {
    input.style.borderColor = '';
    const existingError = input.parentNode.querySelector('.input-error');
    if (existingError) {
        existingError.remove();
    }
}

function showMessage(message, type) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message message-${type}`;
    messageDiv.textContent = message;
    messageDiv.style.position = 'fixed';
    messageDiv.style.top = '20px';
    messageDiv.style.right = '20px';
    messageDiv.style.zIndex = '1000';
    messageDiv.style.maxWidth = '300px';
    
    document.body.appendChild(messageDiv);
    
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}

// Animações de entrada melhoradas
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.products-table tr, .form-group, .btn, .actions-bar > *');
    
    elements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, index * 100);
    });
});

// CORREÇÃO: Garantir que não há overflow horizontal
document.addEventListener('DOMContentLoaded', function() {
    // Forçar scroll horizontal para 0
    window.scrollTo(0, 0);
    
    // Monitorar e prevenir qualquer scroll horizontal
    let lastScrollX = 0;
    window.addEventListener('scroll', function() {
        if (window.scrollX !== 0) {
            window.scrollTo(0, window.scrollY);
        }
        lastScrollX = window.scrollX;
    });
});