<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico" tppabs="http://bootstrap-v4.ru/favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Подключение bootstrap CSS -->
    <link href="http://91.218.195.182/dev/torusim/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://91.218.195.182/dev/torusim/css/style.css" rel="stylesheet">
    <link href="http://91.218.195.182/dev/torusim/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://91.218.195.182/dev/torusim/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Barlow Semi Condensed"/>
    <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="../img/logo.png" class="logo"></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                        <li><a href="tel:090 508 59 85"><span class="fa fa-phone"></span> 090 508 59 85</a></li>
                        <li><a href="#"><span class="fa fa-envelope-o"></span> support@spiritairlines.com</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="col-lg-9 center-block" style="float: none">
                <nav>
                    <ul class="nav nav-pills nav-stacked span2 navbar-default">
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href=" news.php">Новини</a></li>
                        <li><a href="contacts.php">Пропозиції</a></li>
                        <li><a href="cabinet.php">Мій кабінет</a></li>
                        <li><a href="contacts.php">Контакти</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="col-lg-12 p-info">
                <span>Особиста інформація</span>
            </div>
            <div class="tabs-cab">
                <!— Навигация —>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active" style="border: none;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Мої замовлення</a></li>
                    <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Особиста інофрмація</a></li>
                    <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Історія поїздок</a></li>
                </ul>
                <!— Содержимое вкладок —>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">Quisque ut erat id ligula feugiat lacinia. Ut quis magna imperdiet lacus ultrices posuere. Integer lobortis nibh a tempor rutrum. Aliquam in metus diam. Maecenas tempor enim sit amet lacus pellentesque fringilla. In a egestas lorem. Fusce consectetur risus et justo dignissim, sed facilisis urna finibus. Fusce et nisi imperdiet, dapibus est ac, pretium ante. Vivamus sed ipsum augue. Nam lacinia vitae risus ac ultricies. Maecenas facilisis maximus malesuada.

                        Mauris ornare, nulla a feugiat pretium, orci nulla congue diam, vel laoreet mauris enim at sem. Cras ultricies elementum ligula non pharetra. In lobortis blandit urna, eu maximus sem ullamcorper sit amet. Aliquam malesuada ligula a ex euismod efficitur. Donec sed erat malesuada, venenatis ex ac, hendrerit magna. Aenean blandit ante vitae massa tincidunt, in venenatis odio ullamcorper. Sed malesuada, elit ac sodales dictum, ante velit auctor erat, in auctor augue augue quis augue.</div>
                    <div role="tabpanel" class="tab-pane" id="profile">Aenean tortor turpis, semper at tellus eu, cursus tincidunt tellus. Vivamus ullamcorper iaculis ante, quis lobortis quam luctus in. Fusce rhoncus ac libero ac tempus. Donec non metus suscipit mauris interdum laoreet ac at est. Vivamus a justo non nibh bibendum elementum. Praesent ornare justo velit, vitae dictum justo lobortis vitae. Vestibulum sit amet nibh lorem. Pellentesque maximus justo sed mauris faucibus, mattis maximus erat efficitur.

                        Curabitur lacus erat, condimentum nec luctus eu, dapibus a orci. Vestibulum sit amet eros dapibus, imperdiet leo vitae, faucibus mauris. Donec facilisis magna nec scelerisque dignissim. Donec lacinia fringilla scelerisque. Morbi fringilla lorem in dolor congue pharetra. Vestibulum maximus consequat arcu eu finibus. Phasellus condimentum sagittis urna ultrices luctus.</div>
                    <div role="tabpanel" class="tab-pane" id="messages">Suspendisse interdum convallis nunc. Duis vitae vulputate nisi, quis elementum erat. Sed augue justo, euismod eget tristique vel, posuere eu felis. Donec laoreet mollis quam, a rhoncus ligula posuere et. Duis id nunc id mauris rutrum commodo. Suspendisse efficitur diam dui, at congue enim lobortis quis. Vivamus sit amet vestibulum diam. Nunc luctus laoreet enim, at pharetra libero iaculis vel. Donec fermentum metus vel velit hendrerit placerat. Curabitur pharetra purus ac tortor placerat mollis. Vestibulum volutpat ac nisi in varius. Vivamus a posuere odio. Suspendisse ipsum nunc, varius eu ante ut, tincidunt congue magna. Aliquam faucibus fringilla erat eu laoreet.</div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 footer">
            <div class="col-lg-6">
                <img src="../img/logo.png" class="logo_footer"><br/>
                <span class="address"> г. Киев, ул. Центральная, 158</span>
            </div>
            <div class="col-lg-6 copyright">
                SpiritAIRlines ©
            </div>
        </div>
    </div>
</div>
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://91.218.195.182/dev/torusim/js/bootstrap.min.js"></script>
</body>
</html>