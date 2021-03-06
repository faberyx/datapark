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
                                        <li class="has-sub"><a href="/?url=numeroarbusti"><span>NUMERO ARBUSTI</span></a></li>
                                        <li class="has-sub"><a href="/?url=speciepini"><span>SPECIE PINI</span></a> </li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#"><span>FAUNA</span></a>
                                    <ul>
                                        <li class="has-sub"><a href="/?url=esemplarifauna"><span>ESEMPLARI FAUNA</span></a></li>
                                        <li class="has-sub"><a href="/?url=rischioestinzione"><span>A RISCHIO ESTINZIONE</span></a> </li>
                                        <li class="has-sub"><a href="/?url=nasciteannuali"><span>NASCITE ANNUALI</span></a></li>
                                        <li class="has-sub"><a href="/?url=numeromediospecie"><span>NUMERO MEDIO SPECIE</span></a></li>
                                        <li class="has-sub" class="last"><a href="/?url=esemplarepiuanziano"><span>ESEMPLARE PIU' ANZIANO</span></a></li>
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
                                $include = $_GET["url"];
                                if (is_file("./php/$include.php"))
                                {
                                    require_once("./php/$include.php");
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