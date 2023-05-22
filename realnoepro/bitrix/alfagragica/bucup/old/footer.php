<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if($curPage != '/index.php'):?>
			</div> <!-- class="container" -->
		</div> <!-- class="content" -->
<?endif;?>


<?if($curPage == '/index.php' || $curPage == '/kontakty/index.php'):
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
$cpt = new CCaptcha();
$cpt->SetCode();
?>
		<div id="map" class="map"<?if($curPage == '/kontakty/index.php') echo ' style="width: 1140px; margin-right: auto; margin-left: auto;"';?><?/*if($curPage == '/kontakty/index.php') echo ' contact-map';*/?>>
			<div class="container">
				<div class="form">
					<form id="contact_feedback">
						<input type="hidden" name="type" value="formcontactfeedback">
						<div class="form-title">Обратная связь</div>
						<input type="text" name="name" value="" placeholder="Как Вас зовут">
						<input type="text" name="phone" class="phone_input" value="" placeholder="Контактный телефон">
						<textarea name="message" placeholder="Ваше сообщение"></textarea>
							<input type="hidden" name="captcha_code" value="<?php echo htmlspecialchars($cpt->GetCodeCrypt());?>" />
							<label>Введите код:</label> <img src="/bitrix/tools/captcha.php?captcha_code=<?php echo htmlspecialchars($cpt->GetCodeCrypt());?>" alt="captcha code"/>
							<input type="text" style="margin-top:10px;margin-bottom:10px;width:100px;" id="captcha_word" name="captcha_word" placeholder="" value="">
						<input type="submit" value="Отправить сообщение">
						<div style="font-size:12px; text-align:justify;">Я принимаю условия обработки моих данных. С политикой обработки данных ознакомлен.</div>
						<div id="return_message"><p></p></div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
			<? if (!googleBot) { ?>
				<div class="yand-map" id="yandmap" style="height:510px;"></div>
			<? } ?>
		</div>
<?endif;?>
		<footer <?if($APPLICATION->GetCurDir() !== "/"){?>style="margin-top: 0px !important"<?}?> >
			<div class="container">
				<?
						$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"custom_footer_link",
	array(
		"COMPONENT_TEMPLATE" => "custom_footer_link",
		"ROOT_MENU_TYPE" => "footer_link",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);				?>
				<div class="span4">
					<a href="/">
						<img alt="Компания Альфа Графика" title="Компания Альфа Графика" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/logo2.png" class="footer-logo">
					</a>
					<p><a href="/sitemap" class="sitemap">Карта сайта</a></p>
					<p><!--<p>Мы в соцсетях:</p>-->
						<a href="https://vk.com/alfa_grafika" rel="nofollow noindex" target="_blank"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/vk.png" alt="vk"></a>
						<!--<a href="https://ok.ru/group/53468790718596" rel="nofollow noindex" target="_blank"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/ok.png" alt="ok"></a>-->
						<a href="https://www.youtube.com/channel/UCuYQXLyOfkSqFUUnW5YI1Ww" rel="nofollow noindex" target="_blank"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/youtube.png" alt="youtube"></a>
						<!--<a href="https://plus.google.com/u/0/communities/108316206789820732164" rel="nofollow noindex" target="_blank"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/gplus.png" alt="google plus"></a>-->
					</p>
					<p>&copy; 2006-<?=date('Y')?> Альфа Графика </p>
				</div>
				<div class="span4">
						<div class="address">
							<a href="/kontakty/#address" class="address_link">
								<p>Нижний Новгород,</p>
								<p>ул. Совхозная, 13 к4</p>
							</a>
						</div>
						<div class="email">
								<p><a href="mailto:alfagrafika@mail.ru">alfagrafika@mail.ru</a></p>

						</div>
						<div class="phone">
							<a href="tel:88312123707" class="phone_link">
								<span>+7 (831) 212-37-07</span>
							</a>
						</div>
						<div style="padding-left:50px;">
							<span>время работы: ПН-ПТ 10:00-18:00</span>
						</div>
				</div>
				<div class="span4">
					<? if (!googleBot) { ?>
						<script type="text/javascript" src="https://vk.com/js/api/openapi.js?132"></script>
						<!-- VK Widget -->
						<div id="vk_groups"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 3, width: "355", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 70700476);
						</script>
					<? } ?>
				</div>
				<div class="clear"></div>
				<div style="padding:0 25px 0 0; font-size:10px; text-align:right;"><a href="/personal-data-agreement/" target="_blank">Положение об обработке персональных данных</a></div>
				<div style="padding:15px; font-size:10px; color:#c0c0c0;">Внимание! Информация на сайте не является публичной офертой. Данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями ч. 2 ст. 437 ГК РФ. Для получения подробной информации о стоимости, тираже, сроках выполнения, пожалуйста, обращайтесь к сотрудникам компании.</div>
			</div>
		</footer>
		<div class="modal hide fade" id="callback" aria-hidden="false" tabindex="-1">
					<div class="modal_container wrap">
						<a class="close" data-dismiss="modal" aria-hidden="true" >
							<img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/clear.png" alt="clear">
						</a>
						<h3 class="center" style="text-align: center;">Заказ звонка</h3>
						<div class="order-form">
							<form id="callback_form">
									<input type="hidden" name="type" value="callback">
									<label>Как Вас зовут</label>
									<input type="text" name="name">
									<label>Контактный телефон</label>
									<input type="text" class="phone_input" name="phone" placeholder="+7 (---) - --- - -- - --">
									<input type="submit" value="Отправить заявку">
							</form>
						</div>
						<div style="padding:15px; font-size:12px; text-align:justify;">Я принимаю условия обработки моих данных. С политикой обработки персональных данных ознакомлен.</div>
					</div>
		</div>
<? if (!googleBot) { ?>
		<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b14749622/crm/site_button/loader_4_ha2rvl.js');
</script>

<script>
$('.lazyYT').lazyYT();
</script>
<? } ?>

	</body>
</html>
