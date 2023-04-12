<section class="about-section">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="public/about.png" alt="">
                </div>
            </div>

            <div class="col-lg-6 wow bounceInUp" data-wow-duration="2s">
                <h2 class="main-title">O que nós <span>fazemos</span></h2>

                <p class="main-text">
                    Com anos de experiência na indústria da madeira, a MDecor oferece serviços especializados em fabricação e venda de produtos de alta qualidade para atender às necessidades dos nossos clientes. Oferecemos uma ampla variedade de serviços, desde a produção de móveis personalizados até revestimentos e acabamentos de madeira, para ajudá-lo a criar um ambiente elegante e funcional para sua casa ou empresa.
                </p>

                <?php if ($pageId == 'home') : ?>

                    <div class="about-ico">
                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-worker.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Móveis criados profissionalmente pelos melhores
                                </h3>
                            </div>
                        </div>
                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-tools.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Os melhores montadores do mercado
                                </h3>
                            </div>
                        </div>
                    </div>

                    <a href="sobre-nos" class="standard-button">
                        <span>Saiba mais</span>
                    </a>

                <?php else : ?>

                    <p class="main-text">
                        Além disso, na MDecor, nos orgulhamos de nossa atenção aos detalhes e compromisso com a excelência. Utilizamos apenas madeira de alta qualidade e técnicas de produção avançadas para garantir que nossos produtos tenham a durabilidade e o desempenho desejados. Acreditamos que cada projeto é único e trabalhamos em estreita colaboração com nossos clientes para entender suas necessidades e transformar suas ideias em realidade.
                    </p>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ($pageId == 'about-us') : ?>
    <section class="vantages-section">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-title">As vantagens da <span>MDecor</span></h2>
                </div>

                <div class="col-lg-6 wow bounceInLeft" data-wow-duration="2s">
                    <div class="about-ico">
                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-worker.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Móveis criados profissionalmente pelos melhores
                                </h3>
                            </div>
                        </div>

                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-tools.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Os melhores montadores do mercado
                                </h3>
                            </div>
                        </div>

                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-product.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Produtos personalizados para sua necessidade específica.
                                </h3>
                            </div>
                        </div>

                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-material.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Materiais de alta qualidade e durabilidade.
                                </h3>
                            </div>
                        </div>

                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-solution.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Soluções funcionais e elegantes para seus espaços.
                                </h3>
                            </div>
                        </div>

                        <div class="about-ico-item">
                            <div class="ico">
                                <img src="public/icons/ico-project.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="main-subtitle">
                                    Projetos únicos e exclusivos para sua empresa.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="vantages-img w-100">
                        <img class="w-100 img-fluid" src="public/vantages.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info-cards-section">
        <div class="container-xxl">
            <div class="row position-relative">
                <div class="info-cards-img-left">
                    <img src="public/mission.png" alt="">
                </div>

                <div class="offset-lg-3 col-lg-3">
                    <div class="info-cards-item wow bounceInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h3 class="main-subtitle">Missão</h3>
                        <p class="main-text">
                            Fabricar produtos de madeira de alta qualidade e oferecer serviços personalizados, superando as expectativas dos clientes e entregando soluções elegantes e duráveis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-cards-item wow bounceInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <h3 class="main-subtitle">Visão</h3>
                        <p class="main-text">
                            Ser reconhecida como referência em produtos de madeira de alta qualidade, entregando soluções personalizadas e inovadoras para nossos clientes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-cards-item wow bounceInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <h3 class="main-subtitle">Valores</h3>
                        <p class="main-text">
                            Na MDecor, nosso compromisso é fornecer excelência, qualidade e inovação em cada projeto, com respeito, ética e responsabilidade social
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>