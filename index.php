<?php
require_once 'include/class.emailer.php';
require_once 'include/class.filter.php';
$sended=false;
if(isset($_POST['submit']))
{
	if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['message']));	
	{
	  $mail = new Emailer;
	  $filter = new Filter;
	  
	  $name = $filter->charFilter($_POST['name']);
	  $phone = $filter->dataFilter( $_POST['phone']);
	  $email =$filter->dataFilter( $_POST['email']);
	  $message =$filter->dataFilter( $_POST['message']);
	  
	  $mail->setMailData($name,$email,$phone,$message);	
	  if($mail->sendMail()) $sended=true;;	
	  		
	}
}
elseif(isset($_POST['submit']) && $_POST['submit']!='wyślij wiadomość') exit();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>WebBooster - kreujemy twój wizerunek w sieci!</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="Keywords" content="webdeveloper tworzenie stron www fanpage eMarketing facebook strona internetowa projektowanie Wrocław Oława pwr studenci">
        <meta name="description" content="WebBooster to firma developerska i eMarketingowa, tworzymy strony i kreujemy twój wizerunek w sieci. Prowadzona jest przez dwóch studentów Politechniki Wrocławskiej, którzy posiadają wiedzę i doświatczenie. Działamy na terenie Wrocławia, Oławy i okolic."> 
        <meta name="author" content="Kamil Żmijowski">       
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/webbooster.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<?php
			if($sended===true) 
			{
			echo"
			<script type=\"text/javascript\">
			  $(document).ready(function(){
				  $(\".close\").click(function(){
					  $(\"#myAlert\").alert();
				  });
				  $('.alert-box .alert').show();

			  });  
			</script>\n";					
			}
		?>
</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="50">

<header id="section_header" class="navbar main-nav navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>

        <a class="navbar-brand logo" href="#top"><img src="img/webbooster.gif" alt="WebBooster" class="img-responsive"></a>
      
    </div>
    <nav aria-expanded="false" id="navbar" class="navbar-collapse collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#top">Start</a></li>
         <li><a href="#about">O nas</a></li>
         <li><a href="#services">Nasze Usługi</a></li>
        <li><a href="#contact">Kontakt</a></li>
             
      </ul>

    </nav><!--/.nav-collapse -->

  </div>
 
</header>

<section id="slider-wraper" class="jumbotron">

 	<div class="container">
      <div class="row"> 	
		  <div class="text-center">
            <h1 class="page-header">Zaistniej w sieci!</h1>
	                
                <p>Internet jest jednym z najważniejszych źródeł informacji. To Właśnie w sieci większość ludzi zaczyna poszukiwać informacji na temat marki, pobliskiego pubu lub innego zakładu usługowego. Dlaczego miałoby zabraknąć tu ciebie? Razem stwórzmy coś unikalnego!</p>
                <p><a id="read-next" class="btn btn-primary btn-lg" href="#about" role="button">Czytaj Dalej »</a></p>
              
            </div>		
        </div>
        
    </div>
 
</section>
<section id="about">
<div class="container">
  
    <div class="text-center">
      <h1>O nas</h1>
      <p class="lead">Organizacja jest prowadzona przez dwóch studentów Politechniki wrocławskiej, kierunku zarządzanie. Chociaż jesteśmy młodym zespołem to nie brak nam doświadczenia oraz ambicji i pasji. Sądzimy, że nasza kreatywność połączona ze stale poszerzającą się wiedzą jest w stanie dostosować się do potrzeb klienta. </p>
      <p class="lead">Dzięki temu, że jesteśmy młodzi i wychowani w dobie szybko rozwijającej się techniki jesteśmy wstanie nadążyć za często zmieniającymi się trendami, oczywiście dobrze znamy aktualnie popularne rozwiązania. Dla nas technologie IT nie stanowi problemu, co więcej jest to nasz dobry przyjaciel. Jeśli nie znasz taki pojęć jak: fanpage, instagram, snapchat, google AdWords itp. Nie umiesz lub nie rozumiesz jak można wykorzystać serwisy społecznościowe do budowania marki, kreowania wizerunku i szeroko pojętego marketingu? Wykorzystywanie narzędzi informatycznych jest dla ciebie trudne i traktujesz je jak największe zło? Myślę, że wiemy jak ci pomóc. Dzięki naszej współpracy oszczędzisz sobie nie potrzebnych nerwów oraz oszczędzisz czas. </p>
    </div>

  </div><!-- /.container -->
</section>
<section id="team" class="img-box">

    <div class="bg-overley"></div>
  	<div class="clearfix"></div>
  
        <div class="text-center" style="position:relative">
            <h1>Poznaj nasz zespół</h1>

        </div>
    
    <div class="container">   
       <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-2 text-center">
            <div class="team-box thumbnail">
                <img class=" img-circle img-center" src="img/avatar1.jpg" alt="Główny webmaster">
              <div class="caption">
                <h3>Kamil Żmijowski</h3>
                <p>
                    <h4>Główny webmaster</h4>
                    Student Politechniki Wrocławskiej na wydziale Informatyki i zarządzania. Informatyka jest jego prawdziwą pasją, można powiedzieć, że programuje nałogowo. Tworzeniem stron i oprogramowania zajmuje się już 8 lat. Dla niego każdy problem jest jak nowe wyzwanie, które trzeba rozwiązać, zaimplementować odpowiedni "kod" i wdrożyć do działania tak żeby praca była przyjemna. Jego ulubionym mottem jest: "jeśli mam zmusić siebie do pracy to wolę zmusić do tego komputer."
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 text-center">
            <div class="thumbnail team-box">
                <img class=" img-circle" src="img/avatar2.jpg" alt="...">
              <div class="caption text-center">
                <h3>Krystian zaborowski</h3>
                <p>
                    <h4>Social media master</h4>
                    Student Politechniki Wrocławskiej, od paru lat aktywnie działający na rzecz studentów.
Tworzeniem Fanpage, prowadzeniem ich oraz tworzeniem różnego rodzaju wydarzeń zjamuje się od dłuższego czasu.
Jeżeli potrzebujesz pomocy w promowaniu swoich produktów w sieci, jestem do twoich usług. 
"Najważniejszy jest pierwszy krok, podjęcie decyzji.."
                </p>
                
              </div>
            </div>
          </div>		  
        </div>
        

               
      </div>
       
    </div>             
                
</section>
<section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nasze Usługi</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Zarządzanie serwisami społecznościowymi.</strong>
                                </h4>
                                <p>Tworzenie profilu firmy w serwisach społecznościowych oraz promowanie marki. Pomożemy ci z reklamą i budowaniem wizerunku na Facebook. Oferujemy tobie profesjonalne podejście i obsługe w tym zakresie.</p>
                                <a href="#" class="btn btn-light">Zobacz Więcej</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-code fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Projektowanie stron www.</strong>
                                </h4>
                                <p>Zaprojektujemy, wykonamy oraz opublikujemy twoją wizytówkę czy portal informacyjny. </p>
                                <a href="#" class="btn btn-light">Zobacz Więcej</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Administracja serwisami</strong>
                                </h4>
                                <p>Posiadasz własny serwis www i kłopoty z jego administracją, redagowaniem? Możemy zaoferować administracje serwisem, moderację strony internetowe, bologa czy forum.</p>
                                <a href="#" class="btn btn-light">Zobacz Więcej</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-paint-brush fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Design i grafika</strong>
                                </h4>
                                <p>W naszej ofercie zamieściliśmy także możliwość wykreowania banerów i grafik, a takrze wykonania zdjęć produktów do sklepu internetowego.</p>
                                <a href="#" class="btn btn-light">Zobacz Więcej</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<section id="contact" class="bg-grey">
        <div class="container">
            <div class="row text-center">
            	<div class="col-lg-10 col-lg-offset-1">
                    <h2 class="page-header">Kontakt</h2>
                    <h3 class="lead">Szukasz pomocy? Masz jakieś pytania? Skontaktuj się z nami.</h3>
                 </div>   
            </div>
         </div>
</section>            

<footer>
  <div class="footer">
      <div class="container">
        <div class="row">

          <articel class="col-sm-6" > 
      <h1 class="col-sm-12 logo">
        <a class="navbar-brand" href="#"><img src="img/webbooster.gif" alt="WebBooster" class="img-responsive"></a>
      </h1>
          Jeśli jesteś zainteresowany współpracą z nami, masz szczegółowe pytania dotyczące oferty lub propozycje dotyczące naszej współpracy skontaktuj się z nami. Jeśli nie znalazłeś w naszej ofercie usługi która by idealnie tobie odpowiadała, zadaj nam pytanie czy realizacja jest możliwa ;). Nasza oferta narazie jest ograniczona, ale jesteśmy otwarci na wszystkie propozycje tak, aby się jak najlepiej dopasować do rynków i potrzeb naszych klientów. Telefon został podany na dole tego tekstu, zawsze można skontaktować się drogą elektroniczną wypełniając formularz kontaktowy. O kontakt telefoniczny prosimy w godzinach 10:00 - 20:00 od poniedziałku do soboty. Jeśli jest z byt póżno wyślij wiadomość email odpiszemy do ciebie w ciągu 24h. 
          
          
          <ul class="list-inline border-bottom">
                <li><i class="text-default fa fa-map-marker "></i> Wrocław</li>
                <li><i class="text-default fa fa-phone pl-10 "></i> +48 668 751 336</li>
                <li><i class="text-default fa fa-phone pl-10 "></i> +48 793 470 143</li>
                <li><i class="text-default fa fa-envelope-o"></i> <a href="#" class="link-dark">kontakt@webbooster.pl</a></li>
          </ul>
          </articel>
          
          <div class="col-sm-6">
          <h2>Napisz do nas!</h2>
          <form role="form" id="contact-form" method="post" action="">
                <div class="form-group has-feedback ">
                    
                    <input class="form-control" id="name" placeholder="imię i nazwisko" name="name" type="text">
                    <label class="sr-only" for="name">Chce wiedzieć z kim rozmawiam ;). </label>
                    <i class="fa fa-user form-control-feedback" aria-hidden="true"></i>
                </div>
                <div class="form-group has-feedback ">
                    <label class="sr-only" for="email">Adres email jest potrzebny do korespondencji z tobą.</label>
                    <input class="form-control" id="email" placeholder="adres e-mail" name="email" type="email">
                    <i class="fa fa-envelope form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback ">
                    <label class="sr-only" for="phone">Zostaw telefon oddzwonimy.</label>
                    <input class="form-control" id="phone" placeholder="telefon" name="phone" type="phone">
                    <i class="fa fa-phone form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback ">
                    <label class="sr-only" for="message">Napisz jaki masz problem i czego potrzebujesz.</label>
                    <textarea class="form-control" rows="4" id="message" placeholder="treść wiadomości" name="message"></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                </div>
                <div class="clearfix"></div>
                <input value="wyślij wiadomość" class="submit-button btn btn-primary" id="submit" type="submit" name="submit">
          </form>
          </div>
      </div>
    </div>
  </div>    
  <div class="bg-orange subfooter">
    <div class="container">
        <div class="row"><span class="info">Copyright ©  webbooster.pl</span></div>
    </div>    
  </div>  

</footer>
    <span id="top-link-block" class="hidden">
      <a href="#top" class=" well well-sm bg-white" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
          <i class="fa fa-chevron-up"></i> 
      </a>
    </span><!-- /top-link-block -->
    
<div class="alert-box col-sm-4"  >
    <div id="Alert1" class="alert alert-success fade in" style="display:none">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Wiadomość wysłana!</strong> Proszę czekać na odpowiedź, odezwiemy się do ciebie. 
    </div>
</div>    
	<!-- script references -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        

</body>
</html>