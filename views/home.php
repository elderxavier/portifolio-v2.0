<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br"> <!--<![endif]-->
    <?php $this->loadViewInTemplate('blocks/block_head', $viewData);?>
    <body>
        <!-- This section is for Splash Screen -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- End of Splash Screen -->
        <!-- Homepage Slider -->
        <div id="home-slider">	
            <div class="overlay"></div>
            <div class="slider-text">
                <div id="slidecaption"></div>
            </div>   
            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>
                <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
        </div>
        <!-- End Homepage Slider -->
        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
                <div id="logo">
                    <a id="goUp" href="#home-slider" title="Logo Elder Xavier">
                        <img id="img-logo" src="<?php echo BASE; ?>/assets/img/logo-ex.png" alt="Logo Elder Sergio Xavier">
                    </a>
                </div>
                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider">Home</a></li>
                        <li><a href="#work">Utimos Projetos</a></li>
                        <li><a href="#about">Especialidades</a></li>
                        <li><a href="#contact">Contato</a></li>
                        <!--<li><a href="blog/blog.html" class="external" target="_blank">Blog</a></li>-->
                    </ul>
                </nav>
            </div>
        </header>        
        
        <?php 
        //$this->loadViewInTemplate($viewName, $viewData);
            $this->loadView('home/projetos');
            $this->loadView('home/especialidades');
            $this->loadView('home/contato');
            
        ?>
        <!-- Github feed -->
        <div id="github-feed" class="page-alternate">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="follow">
                            <a href="https://github.com/elderxavier" title="Veja os meus repositorios no Github" target="_blank"><div id="img-github"></div></a>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End Github feed -->
        <!-- Socialize -->
        <div id="social-area" class="page">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <nav id="social">
                            <ul>
                                <li><a href="javascript:void(0)" title="Siga-me no Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                                <li><a href="javascript:void(0)" title="Siga-me no Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>        
        <?php $this->loadViewInTemplate('blocks/block_footer', $viewData);?>
</body>
</html>