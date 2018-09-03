<?php $projetos = $viewData['projetosModel'];?>
<div id="work" class="page">
    <div class="container">

        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Projetos</h2>
                    <h3 class="title-description">Veja os últimos projetos em destaque. <br>                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span3">                
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Projetos</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Todos</a></li>
                        <li><a href="#filter" data-option-value=".web">Web</a></li>
                        <li><a href="#filter" data-option-value=".app">Apps</a></li>
                        <li><a href="#filter" data-option-value=".ecommerce">E-Commerce</a></li>                        
                        <li><a href="#filter" data-option-value=".desktop">Desktop</a></li>                           
                    </ul>
                </nav>                
            </div>
            <div class="span9">
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs">
                            <?php                            
                            print( $projetos->getItemPortifolio( 'Eater Chef', 'app', 'eater-chef', 'Aplicativo para cadastro de Chefs de cozinha e pratos do Eater', 'https://play.google.com/store/apps/details?id=br.com.eaterchef.eaterchef') ); 
                            print( $projetos->getItemPortifolio( 'Eater', 'app', 'eater', 'Aplicativo para pedir comida', 'https://play.google.com/store/apps/details?id=br.com.eaterchef.eater_client') ); 
                            print( $projetos->getItemPortifolio( 'CIS SEO', 'web', 'cis-seo', 'CMS para desenvolvimento e adinistração de sistemas online', 'http://fisautocenter.com.br') ); 
                            print( $projetos->getItemPortifolio( 'Box de Humanas', 'web ecommerce', 'box-de-humanas', 'Sistema para assinatura de box de livros', 'http://boxdehumanas.upper.rocks') );                             
                            print( $projetos->getItemPortifolio( 'Autos Lances', 'app web', 'autos-lances', 'Aplicativo para compra e venda de veiculos', 'https://www.autoslances.com.br/') ); 
                            print( $projetos->getItemPortifolio( 'CRM Web', 'web', 'crm-web', 'CRM para adiminstração de Call Center do Jornal Estadão', 'http://crmweb.estadao.com.br/') );                             
                            print( $projetos->getItemPortifolio( 'Cade Vaga', 'app', 'cadevagasapp', 'Aplicativo para localização de vagas de estacionamento', 'https://www.cadevaga.com.br') ); 
                            print( $projetos->getItemPortifolio( 'Assine', 'web ecommerce', 'assine', 'Sistema de vendas para o Jornal Estadão', 'http://assine.estadao.com.br') );                                                         
                            print( $projetos->getItemPortifolio( 'Fichas Medicas', 'app', 'fichas_medicas', 'O aplicativo Fichas Médicas é composto pelo modulos de "Acompanhamentos" do Sistema Next 2 de uso exclusivo das empresas do Grupo BEM Emergências Médicas', 'http://www.grupobem.com.br/') );                             
                            print( $projetos->getItemPortifolio( 'E-SERVICE', 'web', 'e-service', 'Sistema de controle de garantia e prestação de serviços', 'http://www.cisti.com.br') ); 
                            print( $projetos->getItemPortifolio( 'Mercode', 'app', 'mercode', 'Aplicativo para compra de produtos de supermecados', 'http://mercode.com.br') ); 
                            print( $projetos->getItemPortifolio( 'E-LOJA', 'web ecommerce app', 'eloja', 'Sistema de vendas B2B para vendedores', 'http://www.cisti.com.br') ); 
                            print( $projetos->getItemPortifolio( 'CISERP', 'web desktop', 'ciserp', 'Modulo HTML5 do ERP CISERP', 'http://www.cisti.com.br') ); 
                            //antigos
                            print( $projetos->getItemPortifolio( 'Portal Prefeitura de Taboao da Serra', 'web', 'portal-taboao', 'Desenvolvimento do Portal para Prefeitura de Taboao da Serra - São Paulo','http://ts.sp.gov.br') ); 
                            print( $projetos->getItemPortifolio( 'Mundo Sindical App','app','app-mundo-sindical', 'App para leitores da revista Mundo Sindical, disponível na Google Play','play.google.com/store/apps/details?id=br.com.easysystem.mundosindical') ); 
                            print( $projetos->getItemPortifolio( 'Modulo de Controle de Patrimonio','desktop','tontos', 'Modulo de Controle de Patrimonio para ERP desenvolvido em Java') ); 
                            print( $projetos->getItemPortifolio( 'Easy Coop App','app','app-easycoop', 'App para leitores da revista Easy Coop, disponível na Google Play', 'play.google.com/store/apps/details?id=br.com.easysystem.easycoop470201') ); 
                            print( $projetos->getItemPortifolio( 'La Vie Est Belle','web ecommerce','la-vie-est-belle', 'Lançamento da campanha da Lancome para o perfume La Vie Est Belle', 'https://www.lancome.com.br/la-vie-est-belle-eau-de-parfum/p') ); 
                            print( $projetos->getItemPortifolio( 'Garnier','web ecommerce','garnier-fructis', 'Desenvolvimento e manuntenção do e-Commerce, landpages e materiais de marketing', 'https://www.garnier.com.br') ); 
                            print( $projetos->getItemPortifolio( 'Toca Livros ','web ecommerce','admintocalivros', 'Desenvolvimento da plataforma de vendas de audio livros', 'https://www.tocalivros.com') ); 
                            ?> 
                        </ul>
                       
                    </section>
                </div>
            </div>
        </div>      
    </div>
</div>