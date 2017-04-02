<?php include("../php/connect.php");?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Datapark | Welcome</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="http://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
    <div class="bg-image"></div>
	<div class="zerogrid">
		<div class="wrap-header">
			<p class="datapark t-center">DATAPARK</p>
            <p class="description t-center">DATABASE DI FLORA E FAUNA DEI PARCHI NAZIONALI</p>
			<div id='cssmenu' class="align-center">
				<ul>
				   <li class="last active"><a href="index.html"><span>HOME</span></a></li>
				   <li><a href="#"><span>ESPLORA</span></a>
					  <ul>
						 <li class="has-sub"><a href="#"><span>FLORA</span></a>
							<ul>
							   <li class="has-sub"><a href="#"><span>NUMERO ARBUSTI</span></a>
                              
                               <ul>
                               <form action="">
                               <input type="submit" name="b4"><br>
                               </form>
                               </ul>
                               </li>
                               <li class="has-sub"><a href="#"><span>SPECIE PINI</span></a>
                              
                               <ul>
                               <form action="">
                               <input type="submit" name="b5"><br>
                               </form>
                               </ul>
                               </li>
							</ul>
						 </li>
						 <li class="has-sub"><a href="#"><span>FAUNA</span></a>
							<ul>
							   <li class="has-sub"><a href="#"><span>ESEMPLARI FAUNA</span></a>
                               <ul>
                               <form action="">
                               <input type="submit" name="b1"><br>
                               </form>
                               </ul>
                               </li>
                               <li class="has-sub"><a href="#"><span>A RISCHIO ESTINZIONE</span></a>
            
                               <ul>
                               <form action="">
                               <input type="submit" name="b2"><br>
                               </form>
                               </ul>
                               </li>
                               <li class="has-sub"><a href="#"><span>NASCITE ANNUALI</span></a>
                              
							
                               <ul>
                               <form action="">
                               <input type="submit" name="b3"><br>
                               </form>
                               </ul>
                               </li>
                               <li class="has-sub"><a href="#"><span>NUMERO MEDIO SPECIE</span></a>
                               <ul>
							
                               <form action="">
                               <input type="submit" name="b4"><br>
                               </form>
                               </ul>
                               </li>
							   <li class="has-sub" class="last"><a href="#"><span>ESEMPLARE PIU' ANZIANO</span></a>
                               <ul>
						
                               <form action="">
                               <input type="submit" name="b5"><br>
                               </form>
                               </ul>
                               </li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href="contact.html"><span>CONTATTI</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>

		<section class="content-box box-2"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">
							<h2>Flora</h2>
                            
                            <table>
                            <?php
                        $b1 = $_GET['b1'];
                        $b2 = $_GET['b2'];
                        $b3 = $_GET['b3'];
                        $b4 = $_GET['b4'];
                        $b5 = $_GET['b5'];
                        $b6 = $_GET['b6'];
                        $b7 = $_GET['b7'];
                            
                            if($b1=="Invia") {
                                include("../php/query1.php");
                             }
                                
                                   if($b2=="Invia") {
                            $result = $dbh->query("SELECT fauna.nome as fn,fauna.specie,specie.id,specie.rischioestinzione as sre,specie.nome as sn FROM fauna,specie WHERE fauna.specie=specie.id and specie.rischioestinzione=1");
$stmt = $dbh->query("SELECT fauna.nome as fn,fauna.specie,specie.id,specie.rischioestinzione as sre,specie.nome as sn FROM fauna,specie WHERE fauna.specie=specie.id and specie.rischioestinzione=1");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["fn"]."</td>
    <td>".$row["sn"]."</td>
    <td>".$row["sre"]."</td>
    </tr>";
}
                         
                             }
                                    if($b3=="Invia") {
                           $result = $dbh->query("SELECT count(*) as n,specie.nome as sn from fauna,specie where fauna.specie=specie.id and specie.nome='$animale' and fauna.annonascita='$anno'");
$stmt = $dbh->query("SELECT count(*) as n,specie.nome as sn from fauna,specie where fauna.specie=specie.id and specie.nome='$animale' and fauna.annonascita='$anno'");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["n"]."</td>
    <td>".$row["sn"]."</td>
    </tr>";
}
                         
                             }
                                    if($b4=="Invia") {
                           
                         $result = $dbh->query("SELECT  count(flora_parchi.flora) as ft ,parchi.id,flora_parchi.*,tipi_pianta.*,famiglie.*,flora.* from parchi,flora_parchi,tipi_pianta,famiglie,flora where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.famiglia=famiglie.id) and famiglie.nome='arbusti' ");
$stmt = $dbh->query("SELECT   count(flora_parchi.flora) as ft ,parchi.id,flora_parchi.*,tipi_pianta.*,famiglie.*,flora.* from parchi,flora_parchi,tipi_pianta,famiglie,flora where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.famiglia=famiglie.id) and famiglie.nome='arbusti' ");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["ft"]."</td>
    </tr>";
}
                             }
                                    if($b5=="Invia") {
                           $result = $dbh->query("SELECT  parchi.*,parchi.nome as pn,parchi.id as pd,flora_parchi.*,flora.*,tipi_pianta.*,flora.nome as fn from parchi,flora_parchi,flora,tipi_pianta where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.nome='pino')");
$stmt = $dbh->query("SELECT  parchi.*,parchi.nome as pn,parchi.id as pd,flora_parchi.*,flora.*,tipi_pianta.*,flora.nome as fn from parchi,flora_parchi,flora,tipi_pianta where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.nome='pino')");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["pd"]."</td>
    <td>".$row["pn"]."</td>
    <td>".$row["fn"]."</td>
    </tr>";
}
                         
                             }
                                    if($b6=="Invia") {
                            
$result = $dbh->query("SELECT fauna.*,parchi.*,specie.*,specie.nome as sn,parchi.nome as pn from parchi,fauna,specie,fauna.annanascita as an  where (parchi.id=fauna.parco) and (specie.id=fauna.specie) and (fauna.annonascita>=2016)");
$stmt = $dbh->query("SELECT fauna.*,parchi.*,specie.*,specie.nome as sn,parchi.nome as pn,fauna.annonascita as an from parchi,fauna,specie  where (parchi.id=fauna.parco) and (specie.id=fauna.specie) and (fauna.annonascita>=2016)");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["sn"]."</td>
    <td>".$row["pn"]."</td>
    <td>".$row["an"]."</td>
    </tr>";
}
                         
                             }
                                    if($b7=="Invia") {
                           
                          
$result = $dbh->query("SELECT MIN(fauna.annonascita) as m,specie.*,parchi.* from specie,fauna,parchi where specie.id=fauna.specie and parchi.nome='adamello'  ");
$stmt = $dbh->query("SELECT MIN(fauna.annonascita) as m,specie.*,parchi.* from specie,fauna,parchi where specie.id=fauna.specie and parchi.nome='adamello'  ");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["m"]."</td>
    </tr>";
}
                             }
                                  
                            
                            ?>
                            </table>
							<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tumed laoreet aliquam leo. Ut te dt elentu vel leife elit.enean auctor wrnai.<br><br>Qua volutpat. Duis ac turpisnteger rutrum ante eu lacuest um liberoisl porta vel sceleisque eget malesuada at neque. Vivam nibhus leo vel metus.<br><br>Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo pharetra augue nec augue. Nam elit mn ndrerit sit amet tincidunt ac viverra s et trices posuere cubilia Suspendisse sollicit udin velit sed leo pharetra aused nu onec porta diam eu massa. Quisque diam lor em interdum vitae<br><br>Donec eget tellus non erat lacinia ferme.
						</div>
					</div>
					<div class="col-1-2">
						<div class="wrap-col item">
							<h2>Fauna</h2>
							<p>Nulla facilisi. Aenean nec eros. Vestibulum ante m primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo pharetra augue nec augue. Nam elit mn ndrerit sit amet tincidunt ac viverra sed nns et trices posuere cubilia Suspendisse sollicit udin velit sed leo pharetra auec porta diam eu m uisque diam lom interdum vitaonec eget tellus no erat lacinia fermetum. Donec in vel.<br><br>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet conse ctetuer adipiscing elit. Pellentesque sed dolor. Aliq uam congue fermentum nisl. Mauris accumsan nulla vel di am. Sed in lacus ut enim adipisci.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>

<footer class="t-center">
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<span class="phone">PHONE: +1 800 559 6580</span>
				<ul class="bottom-social">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<ul class="quick-link">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="zerogrid">
			<div class="row">
				<div class="copy-right">
                    <p>Copyright @ TriploSette© - <strong>Designed</strong> by Terenzi, Serratore, Zaratti, Conforto, Biancini</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>

</body>
</html>