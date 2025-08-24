<header class="header">
    <div class="header-container">
        {{-- Logo continua igual --}}
        <a href="{{ url('/') }}" class="header-logo">
            <img src="{{ asset('images/logos/logo-fundo-branco.webp') }}" alt="Toma Cupom Logo Branco" class="logo-white">
            <img src="{{ asset('images/logos/logo-fundo-preto.webp') }}" alt="Toma Cupom Logo Preto" class="logo-black">
        </a>

        {{-- Itens do Desktop (serão escondidos no mobile) --}}
        <div class="desktop-items">
            <div class="search-container">
                <input type="text" placeholder="Buscar lojas ou categorias..." class="search-input">
                <button type="submit" class="search-button"><i class="bi bi-search"></i></button>
            </div>
            <nav class="header-nav">
                <a href="{{ url('/') }}" class="nav-item">Início</a>
                <a href="{{ url('/lojas') }}" class="nav-item">Lojas</a>
                <a href="{{ url('/categorias') }}" class="nav-item">Categorias</a>
                <a href="{{ url('/contato') }}" class="nav-item">Contato</a>
            </nav>
        </div>

        {{-- Botão Hamburger (só aparece no mobile) --}}
        <button class="hamburger-button" id="hamburger-button" aria-label="Abrir menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>

    {{-- Menu Off-Canvas (começa escondido) --}}
    <div class="offcanvas-menu" id="offcanvas-menu">
        <div class="offcanvas-header">
            <h4>Menu</h4>
            <button class="close-button" id="close-button" aria-label="Fechar menu">&times;</button>
        </div>
        <div class="offcanvas-content">
            {{-- Barra de busca para o mobile --}}
            <div class="search-container-mobile">
                <input type="text" placeholder="Buscar..." class="search-input">
                <button type="submit" class="search-button"><i class="bi bi-search"></i></button>
            </div>
            {{-- Navegação para o mobile --}}
            <nav class="offcanvas-nav">
                <a href="{{ url('/') }}" class="nav-item">Início</a>
                <a href="{{ url('/lojas') }}" class="nav-item">Lojas</a>
                <a href="{{ url('/categorias') }}" class="nav-item">Categorias</a>
                <a href="{{ url('/contato') }}" class="nav-item">Contato</a>
            </nav>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
</header>