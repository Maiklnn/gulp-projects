<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

    <footer class="footer">
    <div class="footer__row-top container"><a class="footer__row-top-logo" href="/"><img class="logo" src="https://www.alfagrafika.ru/assets/img/front/logo.png" alt="#"/></a><a class="footer__row-top-adress" href="/kontakty/#address">������ ��������, ��. ���������, 13�4</a>
        <div class="footer__row-top-email">
            <div class="footer__row-top-email-box">
                <p>����������� �����:</p><a href="mailto:alfagrafika@mail.ru">alfagrafika@mail.ru</a>
            </div>
        </div>
        <div class="footer__row-top-phone">
            <div class="footer__row-top-phone-box"><a href="tel:+7312123707">+7 (831) 212-37-07</a>
                <a class="footer__send" data-path = 'two-dom' data-da="footer, 1, 567">�������� ������</a>
            </div>
        </div>
        <div class="footer__row-top-time">
            <p><span>����� ������:</span> ��-�� 10:00-18:00</p>
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
                <div class="footer__row-footer-politic-top-item">� 2006-2022 ����� �������</div><a class="footer__row-footer-politic-top-item" href="/personal-data-agreement/" target="blank"><span>��������� �� ��������� ������������ ������</span></a><a class="footer__row-footer-politic-top-item" href="/sitemap"><span>����� �����</span></a>
            </div>
            <div class="footer__row-footer-politic-bottom">��������! ���������� �� ����� �� �������� ��������� �������. ������ ��������-���� ����� ������������� �������������� �������� � �� ��� ����� �������� �� �������� ��������� �������, ������������ ����������� �. 2 ��. 437 �� ��. ��� ��������� ��������� ���������� � ���������, ������, ������ ����������, ����������, ����������� � ����������� ��������.</div>
        </div>
        <div class="footer__row-footer-sohial" data-da="footer, 1, 1150" ><a class="footer__row-footer-sohial-news" href="https://vk.com/alfa_grafika">����������� �� �������</a>
            <div class="footer__row-footer-sohial-box"><a class="footer__row-footer-sohial-box-link--vk" href="https://vk.com/alfa_grafika" target="_blank" rel="nofollow noindex"></a><a class="footer__row-footer-sohial-box-link--yotube" href="https://www.youtube.com/channel/UCuYQXLyOfkSqFUUnW5YI1Ww" target="_blank" rel="nofollow noindex"></a></div>
        </div>
    </div>
</footer>

<!-- ��������� ����-->
<div class="modal-popup" data-close="two" data-target="two">
    <div class="modal-popup__close" data-close="two"></div>
    <div class="modal-popup__container fadeInUp modal-popup-open animate-open">
        <form class="form-modal">
            <h2 class="form-modal__title">�������� ������</h2>
            <div class="placeholder-container placeholder-container__input">
                <input class="_necessarily" type="text" name="nameUser"/>
                <div class="caption">���</div>
            </div>
            <div class="placeholder-container placeholder-container__input">
                <input class="_necessarily" type="tel" data-mask="tel" name="phoneUser"/>
                <div class="caption">�������</div>
            </div>
            <button class="btn" data-form="true">���������</button>
            <div class="modal-popup" data-close="success" data-target="success">
                <div class="modal-popup__close" data-close="success"></div>
                <div class="modal-popup__container fadeInUp modal-popup-open animate-open">
                    <p>�������, �� � ���� �������� � ��������� �����!</p>
                </div>
            </div>
        </form>
    </div>
</div>




    <script src="/assets/js/main.js?v=undefined"></script>
</body>
</html>
