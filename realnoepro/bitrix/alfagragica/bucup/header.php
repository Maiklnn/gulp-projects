<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
$curPage = $APPLICATION->GetCurPage(true);
//$APPLICATION->SetPageProperty("robots");



CJSCore::Init(array("fx"));

if(googleBot){
header_remove('Cache-Control');
header_remove('Expires');
header_remove('Last-Modified');
header_remove('Pragma');
}

$rsSites = CSite::GetByID(SITE_ID);
$arSite = $rsSites->Fetch();
?>
<!DOCTYPE html>


<html lang="ru">
	<head itemscope itemtype="http://schema.org/WPHeader">
		<title itemprop="headline"><?$APPLICATION->ShowTitle();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
		<?$APPLICATION->ShowHead();?>

		<? if (googleBot != 1) { ?>
			<meta name="yandex-verification" content="a4fdb5a12760d7c3" />

			<!-- Yandex.Metrika counter -->
			<script type="text/javascript" >
   				(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   				m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   				(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   				ym(24653960, "init", {
        				clickmap:true,
        				trackLinks:true,
        				accurateTrackBounce:true,
        				webvisor:true
   				});
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/24653960" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112591489-1"></script>
			<script>
  				window.dataLayer = window.dataLayer || [];
  				function gtag(){dataLayer.push(arguments);}
  				gtag('js', new Date());

  				gtag('config', 'UA-112591489-1');
			</script>
		<? } ?>

		<meta property="og:locale" content="ru_RU">
    		<meta property="og:title" content="<? $APPLICATION->ShowTitle() ?>">
    		<meta property="og:type" content="website">
		<meta property="og:image" content="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/logo.png">
    		<meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>">
    		<meta property="og:site_name" content="<?= $arSite['NAME'] ?>">
    		<meta property="og:description" content="<? $APPLICATION->ShowProperty('description'); ?>">
            <?php if($curPage == '/new-index.php' || $curPage == '/catalog-test/index.php'|| $curPage == '/index.php') : ?>
                <link rel="stylesheet" href="/assets/css/main.css?v=undefined">
            <?php else: ?>
                <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
                <link rel="apple-touch-icon" sizes="57x57" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/57x57.png">
                <link rel="apple-touch-icon" sizes="60x60" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/60x60.png">
                <link rel="apple-touch-icon" sizes="72x72" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/72x72.png">
                <link rel="apple-touch-icon" sizes="76x76" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/76x76.png">
                <link rel="apple-touch-icon" sizes="114x114" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/114x114.png">
                <link rel="apple-touch-icon" sizes="120x120" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/120x120.png">
                <link rel="apple-touch-icon" sizes="144x144" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/144x144.png">
                <link rel="apple-touch-icon" sizes="152x152" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/152x152.png">
                <link rel="apple-touch-icon" sizes="180x180" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/180x180.png">
                <link rel="icon" type="image/jpeg" sizes="192x192" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/192x192.png">
                <link rel="icon" type="image/jpeg" sizes="16x16" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/16x16.png">
                <link rel="icon" type="image/jpeg" sizes="32x32" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/32x32.png">
                <link rel="icon" type="image/jpeg" sizes="96x96" href="/local/templates/<? echo SITE_TEMPLATE_ID;?>/images/icons/96x96.png">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/bootstrap.css">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/jquery.lightbox-0.5.css">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/owl.carousel.min.css">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/owl.theme.default.min.css">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/lazyYT.css">
                <link rel="stylesheet" href="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/css/style.min.css">
                <link rel="stylesheet" href="/assets/css/main.css?v=undefined">
            <?php endif; ?>

		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i%7CRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&subset=cyrillic" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/html5shiv/html5shiv.js"></script>
		<![endif]-->
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery-1.12.4.min.js"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery-ui/jquery-ui.min.js"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery.lazy.min.js"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/hide_left_menu.js" type="text/javascript"></script>
        	<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/bootstrap.js" type="text/javascript"></script>
        	<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery.lightbox-0.5.js" type="text/javascript"></script>
        	<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/jquery.color.js" type="text/javascript"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/owl.carousel.js" type="text/javascript"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/FooTable.js" type="text/javascript"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/lazyYT.js" type="text/javascript"></script>
		<script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/script.js" type="text/javascript"></script>

		<?if($curPage != '/index.php'):?>
			<?if(googleBot != 1):?>
				<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<?endif;?>
		<?endif;?>

		<?if($curPage == SITE_DIR.'catalog/index.php'):?>
		  <script>
		  $( function() {
			$( "#slider-range" ).slider({
			  range: true,
			  min: 0,
			  max: 20000,
			  values: [ 5000, 15000 ],
			  slide: function( event, ui ) {
				$( "#amount-left" ).val( ui.values[ 0 ]);
				$( "#amount-right" ).val( ui.values[ 1 ]);
			  }
			});
			$( "#amount" ).val($( "#slider-range" ).slider( "values", 1 ) );

		  } );
		  </script>
		  <script>
		  $( function() {
			$( "#slider" ).slider({
			  value: 50,
			  orientation: "horizontal",
			  range: "min",
			  slide: function( event, ui ) {
				$( "#amount-center" ).val( ui.value );
			  }
			});
		  } );
		  </script>
		<?endif;?>
		<?if($curPage == SITE_DIR.'otzyvy/index.php'):?>
		<script>
			$(document).ready(function(){
			  $(".owl-partners").owlCarousel({
				loop:true,
				items:6,
				autoplay : 500,
				scrollPerPage:true,
				responsive:false,
				navText:["",""]
			 });
			});
		</script>
		<?endif;?>
        <script src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/js/mine.js" type="text/javascript"></script>

<?if($curPage == '/index.php' || $curPage == '/kontakty/index.php'):?>
<?if(googleBot != 1):?>
<script type="text/javascript">
        ymaps.ready(init);

        function init () {
            var myMap = new ymaps.Map('yandmap', {
				//center: [56.307621, 43.939280],
				center: [56.329864, 43.911943],
                zoom: 17
            });
			//var myPlacemark = new ymaps.Placemark([56.307883, 43.936603], {
			var myPlacemark = new ymaps.Placemark([56.330126, 43.909266], {
				balloonContent: 'г. Нижний Новгород,<br>ул. Совхозная, д. 13 к4'
			},
			{
				iconColor: '#ED4543'
			});
			myMap.geoObjects.add(myPlacemark);
        }
</script>
<?endif;?>
<?endif;?>



<!-- Кнопка ВВЕРХ -->
<script>
$(function(){
	$.fn.scrollToTop = function(){
		$(this).hide().removeAttr("href");
		if ($(window).scrollTop() >= "280") $(this).fadeIn("slow")
		var scrollDiv = $(this);
		$(window).scroll(function(){
			if ($(window).scrollTop() <= "280") $(scrollDiv).fadeOut("slow") /* 280 = эти значения лучше ставить одинаковыми, овтечают за появление иконки для прокрутки */
			else $(scrollDiv).fadeIn("slow")
		});
		$(this).click(function(){
			$("html, body").animate({scrollTop: 0}, 250) /* 1000 = Задаём скорость прокрутки */
		})
	}
});
$(function(){
	$("#Go_Top").scrollToTop();
});
</script>
<style>
/* Кнопка ВВЕРХ */
#Go_Top{position: fixed; top: 45%; /*bottom: 3%;*/ right: 5px; cursor:pointer; display:none; z-index: 10000}
#Go_Top img{width: 44px;}
</style>
<!-- /Кнопка ВВЕРХ -->
	</head>
	<body>

	<a href='#' id='Go_Top'><img class="img-responsive" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/up_arrow.png" alt="Наверх" title="Наверх"></a>


	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<?if($curPage == SITE_DIR.'index.php'):?>
		<script>
			$(document).ready(function(){
			  $(".owl-carousel").owlCarousel({
				loop:true,
				items:1,
				autoplay : 5000,
				responsive:false,
			 });
			});
		</script>
	<?endif;?>

    <? require($_SERVER["DOCUMENT_ROOT"]."/local/templates/alfagrafika_2016_adaptive/header-new.php");?>

<?if($curPage != '/new-index.php' && $curPage != '/index.php' && $curPage != '/catalog-test/index.php')  :?>
		<div class="content none"> <!-- закрывается в footer.php -->
			<div class="container "> <!-- закрывается в footer.php -->
					<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"breadcrumb_alfa",
						array(
							"START_FROM" => "1",
							"PATH" => "",
							"SITE_ID" => "s1",
							"COMPONENT_TEMPLATE" => "breadcrumb_alfa"
						),
						false
					);?>
				<?if(strpos($curPage, 'catalog') === false):?>
					<h1><?$APPLICATION->ShowTitle(false);?></h1>
				<?endif;?>
<?endif;?>



