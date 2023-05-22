<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

    <footer class="footer">
    <div class="footer__row-top container"><a class="footer__row-top-logo" href="/"><img class="logo" src="https://www.alfagrafika.ru/assets/img/front/logo.png" alt="#"/></a><a class="footer__row-top-adress" href="/kontakty/#address">Нижний Новгород, ул. Совхозная, 13к4</a>
        <div class="footer__row-top-email">
            <div class="footer__row-top-email-box">
                <p>Электронная почта:</p><a href="mailto:alfagrafika@mail.ru">alfagrafika@mail.ru</a>
            </div>
        </div>
        <div class="footer__row-top-phone">
            <div class="footer__row-top-phone-box"><a href="tel:+7312123707">+7 (831) 212-37-07</a>
                <a class="footer__send" data-path = 'two-dom' data-da="footer, 1, 567">заказать звонок</a>
            </div>
        </div>
        <div class="footer__row-top-time">
            <p><span>Время работы:</span> Пн-Пт 10:00-18:00</p>
        </div>
    </div>
    <div class="footer__row-nav container">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "custom_footer_col",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "N"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "custom_footer_col",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "N"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "custom_footer_col",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "N"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "custom_footer_col",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "N"
            )
        );?>
    </div>
    <div class="footer__row-footer container">
        <div class="footer__row-footer-politic">
            <div class="footer__row-footer-politic-top">
                <div class="footer__row-footer-politic-top-item">© 2006-2022 Альфа Графика</div><a class="footer__row-footer-politic-top-item" href="/personal-data-agreement/" target="blank"><span>Положение об обработке персональных данных</span></a><a class="footer__row-footer-politic-top-item" href="/sitemap"><span>Карта сайта</span></a>
            </div>
            <div class="footer__row-footer-politic-bottom">Внимание! Информация на сайте не является публичной офертой. Данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями ч. 2 ст. 437 ГК РФ. Для получения подробной информации о стоимости, тираже, сроках выполнения, пожалуйста, обращайтесь к сотрудникам компании.</div>
        </div>
        <div class="footer__row-footer-sohial" data-da="footer, 1, 1150" ><a class="footer__row-footer-sohial-news" href="https://vk.com/alfa_grafika">Подписаться на новости</a>
            <div class="footer__row-footer-sohial-box"><a class="footer__row-footer-sohial-box-link--vk" href="https://vk.com/alfa_grafika" target="_blank" rel="nofollow noindex"></a><a class="footer__row-footer-sohial-box-link--yotube" href="https://www.youtube.com/channel/UCuYQXLyOfkSqFUUnW5YI1Ww" target="_blank" rel="nofollow noindex"></a></div>
        </div>
    </div>
</footer>

<!-- Модальные окна-->
<div class="modal-popup" data-close="two" data-target="two">
    <div class="modal-popup__close" data-close="two"></div>
    <div class="modal-popup__container fadeInUp modal-popup-open animate-open">
        <form class="form-modal">
            <h2 class="form-modal__title">Заказать звонок</h2>
            <div class="placeholder-container placeholder-container__input">
                <input class="_necessarily" type="text" name="nameUser"/>
                <div class="caption">имя</div>
            </div>
            <div class="placeholder-container placeholder-container__input">
                <input class="_necessarily" type="tel" data-mask="tel" name="phoneUser"/>
                <div class="caption">Телефон</div>
            </div>
            <button class="btn" data-form="true">Отправить</button>
            <div class="modal-popup" data-close="success" data-target="success">
                <div class="modal-popup__close" data-close="success"></div>
                <div class="modal-popup__container fadeInUp modal-popup-open animate-open">
                    <p>Спасибо, мы с Вами свяжемся в ближайшее время!</p>
                </div>
            </div>
        </form>
    </div>
</div>




    <script src="/assets/js/main.js?v=undefined"></script>
</body>
</html>
