<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">
 <title>Danki code tema</title>
</head>
<body>
    <section class = "topo">
        <div class = "center">
            <header>
            <div class = "logo"> <img src="imagem/logo.png" alt="imgagem logo"></div ><!-- logo -->
            </header>
            <ul class = "menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <div class = "menu-mobile">
            <i class="fas fa-align-center"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>

            </div><!--menu mobile-->
            <div class = "clear"></div>
            <br/>
            <br/>
            <div class = "w50 time-descricao">
                <h2>Melhore sua comunicação com cliente e time</h2>
                <p>Consultoria especializada em startups empresas e pessoas</p>
                <a target = "_blank" href="">Ver Demonstração</a>
            </div> <!-- w50 -->
            <div class = "w50 time-imagem">
                <img src="imagem/equipe.png" alt="imagem da equipe">               
            </div><!-- w50 imagem -->
            <div class = "clear"></div>
        </div> <!-- center -->
    </section> <!-- topo -->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
    <section class = "clientes-slider">
        <div class = "center"></div>
        <div style="max-width: 700px;margin:0 auto; margin-top: 70px; overflow: hidden;" class="slider-container">
			<img src="imagem/amazon.jpg" />
			<img src="imagem/costco.jpg" />
			<img src="imagem/dominos.jpg" />
			<img src="imagem/uber.jpg" />
			<img src="imagem/walmart.jpg" />
	
		</div>
    </section> <!-- clientes-slider -->

    <section class = "diferenciais">
        <div class = "center">
            <h2>Contribuímos de Ponta a Ponta</h2>
                <div class = "icons-diferencias">
                 <div class =  "box-single-diferenciais">
                    <img src="imagem/icon1.png" alt="icone 1">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu proposito,
                        cada palavra conta
                    </p>
                </div><!-- box-single-diferenciais -->
            </div> <!-- icons diferenciais -->
            <div class = "icons-diferencias">
                <div class =  "box-single-diferenciais">
                    <img src="imagem/icon2.png" alt="icone 2">
                    <h3>Sistema Intranets</h3>
                    <p>Um diálogo só acontece quando ambas as partes falam
                        e escutam, garanta que seu público te entende
                    </p>
                </div><!-- box-single-diferenciais -->
            </div> <!-- icons diferenciais -->
            <div class = "icons-diferencias">
                <div class =  "box-single-diferenciais">
                    <img src="imagem/icon3.png" alt="icone 3">
                    <h3>Comunicação one-to-one</h3>
                    <p>O digital veio para ficar sem dúvidas mas uma comunicação
                        integrada de verdade exige decisões
                    </p>
                    <div class = "clear"></div>
                </div><!-- box-single-diferenciais -->
            </div> <!-- icons diferenciais -->
        </div>
    </section>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 460,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});
</script>
<script>
    //menu responsivo
    $('.menu-mobile i ').click(function(){
        $('.menu-mobile').find('ul').slideToggle()

    })
</script>
</body>
</html>