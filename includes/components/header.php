<header class="nav">
    <div class="container-xxl">
        <div class="nav-brand">
            <a href="#">
                <img src="public/white-logo.png" alt="">
            </a>
        </div>

        <div class="nav-toggle">
            <div class="hamburger"></div>
        </div>

        <ul class="nav-items">
            <li><a <?php echo $pageId == 'home' ? 'class="active"' : ''?> href="index"> Home </a></li>
            <li><a <?php echo $pageId == 'about-us' ? 'class="active"' : ''?> href="sobre-nos"> Sobre nós </a></li>
            <li class="dropdown-link">
                <a <?php echo $pageId == 'single-service' ? 'class="active"' : ''?> href="servicos"> Produtos </a>

                <ul class="dropdown-items">
                    <li><a href="fabricacao-de-moveis-personalizados"> Fabricação de móveis personalizados </a></li>
                    <li><a href="venda-de-moveis-prontos-em-madeira"> Venda de móveis prontos em madeira </a></li>
                    <li><a href="fabricaçao-de-portas-e-janelas-e-estruturas"> Fabricação de portas e janelas e estruturas  </a></li>
                </ul>
            </li>
            <li><a <?php echo $pageId == 'contact' ? 'class="active"' : ''?> href="contato"> Contato </a></li>
        </ul>
    </div>
</header>

<main>