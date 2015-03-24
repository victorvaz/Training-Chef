<?php include_once './core/SiteConfig.php'; ?>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +55 31 9133-3767</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php print SiteConfig::$LOGOTIPO_HORIZONTAL; ?>" alt="logo" height="30">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <?php for ($i = 0; $i < count(SiteConfig::$MENU_PAGINAS); $i++) : ?>
                    <li <?php if ($_SERVER['PHP_SELF'] == SiteConfig::$PREFIXO_ENDERECO . SiteConfig::$MENU_PAGINAS[$i]['href']) : ?>class="active"<?php endif; ?>>
                        <a href="<?php print SiteConfig::$MENU_PAGINAS[$i]['href']; ?>">
                            <?php print SiteConfig::$MENU_PAGINAS[$i]['desc']; ?>
                        </a>
                    </li>
                    <?php endfor; ?>                        
                </ul>
            </div>
        </div>
    </nav>
</header>