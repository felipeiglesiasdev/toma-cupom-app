// app.js
// Espera o conteúdo da página carregar completamente
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona o elemento do cabeçalho
    const header = document.querySelector('.header');
    // Define uma "distância de gatilho" para a mudança de estilo. 
    // O header mudará de cor após rolar 50 pixels para baixo.
    const scrollTrigger = 50;
    // Função que verifica a posição da rolagem
    const handleScroll = () => {
        // window.scrollY retorna o número de pixels que a página foi rolada verticalmente
        if (window.scrollY > scrollTrigger) {
            // Se a rolagem for maior que o gatilho, adiciona a classe 'scrolled'
            header.classList.add('scrolled');
        } else {
            // Caso contrário, remove a classe 'scrolled'
            header.classList.remove('scrolled');
        }
    };
    // Adiciona um "ouvinte de evento" que chama a função handleScroll toda vez que o usuário rola a página
    window.addEventListener('scroll', handleScroll);
});

// Espera o conteúdo da página carregar completamente
document.addEventListener('DOMContentLoaded', function() {
    
    // ... seu código de scroll do header já existente ...
    const header = document.querySelector('.header');
    if (header) { // Verifica se o header existe
        const scrollTrigger = 50;
        const handleScroll = () => {
            if (window.scrollY > scrollTrigger) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll);
    }

    // --- LÓGICA DO MENU MOBILE ---
    const hamburgerBtn = document.getElementById('hamburger-button');
    const closeBtn = document.getElementById('close-button');
    const offcanvasMenu = document.getElementById('offcanvas-menu');
    const overlay = document.getElementById('overlay');
    const body = document.body;

    const openMenu = () => {
        hamburgerBtn.classList.add('is-active');
        offcanvasMenu.classList.add('is-open');
        overlay.classList.add('is-visible');
        body.classList.add('no-scroll'); // Trava o scroll da página
    };

    const closeMenu = () => {
        hamburgerBtn.classList.remove('is-active');
        offcanvasMenu.classList.remove('is-open');
        overlay.classList.remove('is-visible');
        body.classList.remove('no-scroll'); // Libera o scroll
    };

    if (hamburgerBtn && offcanvasMenu && overlay && closeBtn) {
        hamburgerBtn.addEventListener('click', openMenu);
        closeBtn.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu); // Fecha o menu ao clicar fora
    }
});