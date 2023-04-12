<nav class="breadcrumb-custom" aria-label="breadcrumb">
    <div class="container-xxl">

        <div class="breadcrumb-box">
            <h1><?= $breadcrumbTitle ?></h1>
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="index" title="<?= $title2 ?>">
                        <span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <span>/</span>
                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
                    <a itemprop="item" href="<?= $url ?>" title="<?= $pageKeyword ?>">
                        <span itemprop="name"><?= $breadcrumbTitle ?></span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
</nav>