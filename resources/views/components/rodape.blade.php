<footer class="footer">
    <div class="footer-container">

        <div class="footer-column about">
            <a href="{{ url('/') }}" class="footer-logo">
                <img src="{{ asset('images/logos/logo-fundo-preto.webp') }}" alt="Toma Cupom Logo">
            </a>
            <p class="footer-disclaimer">
                O Toma Cupom não é o site oficial das lojas mencionadas. Divulgamos cupons e ofertas que encontramos e, em alguns casos, podemos receber comissões por meio de plataformas de afiliados, sem custo algum para você.
            </p>
        </div>

        <div class="footer-column links">
            <h4>Navegação</h4>
            <nav class="footer-nav">
                <a href="{{ url('/') }}">Início</a>
                <a href="{{ url('/lojas') }}">Lojas</a>
                <a href="{{ url('/categorias') }}">Categorias</a>
                <a href="{{ url('/contato') }}">Contato</a>
                <a href="{{ url('/politica-de-privacidade') }}">Política de Privacidade</a>
            </nav>
        </div>

        <div class="footer-column social">
            <h4>Siga-nos</h4>
            <p>Fique por dentro das melhores ofertas!</p>
            <div class="social-icons">
                <a href="#" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" target="_blank" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="#" target="_blank" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>

    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Toma Cupom. Todos os direitos reservados.</p>
    </div>
</footer>