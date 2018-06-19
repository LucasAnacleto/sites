<!DOCTYPE html>
<html>
    <head>
        <title>Bela Óptica | Fale conosco</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/belavista.jpg" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <meta charset="utf-8" />
        
    </head>
    <body>
        <header>
            <div class="barra_superior">
                <div class="container">
                    Horário de abertura: 9:00 - 18:00h
                </div>
            </div>
            
            
            <div class="container">
                <img class="logo" alt="Logo da empresa" title="Aqui é apresentado a logo da empresa" src="img/belavista.jpg" />
                
                <nav>
                    <a href="index.php">Página Inicial</a> | 
                    <a href="index.php#marcas">Marcas</a> | 
                    <a title="fale conosco" href="faleconosco.php">Fale Conosco</a>  |
                    <a title="Cadastro" href="login.php">Login</a>  |
                    <a class="btn_destaque" href="ondeestamos.php">Onde estamos</a>
                </nav>
            </div>
            
        </header>
        <br class="clearfix" />
        <section class="sec_fale">
            <div class="container">
                <div class="metade">
                    <!--
                        Metodo:
                        - GET: Dados são passados pela URL.
                        - POST: Dados são passados pela Requisição.
                    -->
                    <form name="form_contato" enctype="application/x-www-form-urlencoded" method="GET">
                        <label for="NomeCompleto">Nome</label>
                        <input id="NomeCompleto" type="text" name="Nome_Completo" placeholder="Digite seu nome completo" required />
                        <br />
                        <label for="Email">Email</label>
                        <input id="Email" type="text" name="Email" placeholder="Digite seu email" required/>
                        <br />

                        <label for="Telefone">Telefone</label>
                        <input id="Telefone" type="text" name="Telefone" placeholder="Digite seu telefone" required/>
                        <br />

                        <label for="Mensagem">Mensagem</label>
                        <textarea name="Mensagem" required></textarea>
                        <br />
                        <span class="texto"></span>
                        <br />
                        <input type="submit" value="Enviar"/>
                    </form>
                </div>
                <div class="metade">
                    <div>

                        <strong>Redes Sociais</strong>
                        <br />
                        <a href="#"><img alt="Link para Facebook" src="img/facebook.jpg" /></a>
                        <a href="#"><img alt="Link para Twitter" src="img/twitter.jpg"  /></a>
                        <a href="#"><img alt="Link para Instagram" src="img/Instragram.jpg"  /></a>
                        <br />
                        <br />
                        <strong>Telefone:</strong>3333-3333.

                    </div>
                    <br />
                    <br />
                    <address>
                        Brasil, SP
                        <br />
                        00000-000
                        <br />
                        Rua Deputado Salvador Julianelli
                        <br />
                         Barra Funda, São Paulo.
                    </address>
                </div>
            </div>
        </section>
        <br class="clearfix" />
        <footer>
            <div class="container">
                <div class="um_terco">
                    <div class="container_logo">
                        <img class="logo" alt="Logo da empresa" title="Aqui é apresentado a logo da empresa" src="img/belavista.jpg" />
                    </div>
                    <p>
                        Nos oferecemos um serviço completo para o melhor conforto da sua visão.
                    </p>
                    <div class="container_logo">
                        <a href="#"><img alt="Link para Facebook" src="img/facebook.jpg" /></a>
                        <a href="#"><img alt="Link para Twitter" src="img/twitter.jpg"  /></a>
                        <a href="#"><img alt="Link para Instagram" src="img/Instragram.jpg"  /></a>
                    </div>
                    
                </div>
                <div class="um_terco">
                    <div class="margem_esquerda">
                        <h3>Links</h3>
                    
                        <a alt="Vai para a página inicial do site" href="index.php">Início</a><br />
                        <a alt="Vai para a lista de marcas que trabalhamos" href="index.php#marcas">Marcas</a><br />
                        <a title="Vai para a página de fale conosco" href="faleconosco.php">Fale Conosco</a><br />
                        <a title="Cadastro" href="login.php">Login</a><br>
                        <a href="ondeestamos.php">Onde estamos</a><br />
                    </div>
                </div>
                <div class="um_terco">
                    <h3>Contato</h3>
                    
                    <p><strong>Endereço:</strong> Brasil, SP Rua Deputado Salvador Julianelli,
                    Barra Funda, São Paulo.</p>
                    
                    <p><strong>Telefone:</strong> <a href="tel:33333333"> 3333-3333.</a></p>
                    
                    <p><strong>Email:</strong> <a href="mailto:otica@otica.com.br">otica@otica.com.br</a></p>
                </div>
            </div>
            <br class="clearfix" />
            <div class="direitos_reservados">
                Todos os direitos reservados @ 2018. <a href="#">Termos de uso</a> e <a href="#">Política de privacidade</a>.
            </div>
        </footer>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>