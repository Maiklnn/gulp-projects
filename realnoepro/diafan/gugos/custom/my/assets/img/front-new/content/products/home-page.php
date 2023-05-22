<?php
/**
  * Шаблон стартовой страницы сайта
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */

if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?>

<!DOCTYPE HTML>
<html>
<head>

	<insert name="show_include" file="head">
</head>

    <body>
        <insert name="show_include" file="header-home">

        <section class="main-advantages">
            <div class="main-advantages__row container">
                <div class="main-advantages__row-column">
                    <h2>Даём гарантию <br> 2 года</h2>
                    <p>Своим клиентам мы предлагаем гарантию качества сроком на 2 года, что является единственным предложением на рынке.</p>
                </div>
                <div class="main-advantages__row-column">
                    <h2 class="accent">Фиксация нестабильного берега любых водоемов</h2>
                    <p>Мы занимаемся укреплением берега прудов, рек и водоемов более 10 лет и наработали значительный опыт в производстве данного вида строительных работ.</p>
                </div>
                <div class="main-advantages__row-column"><a class="accent" href="#">Подробнее</a></div>
            </div>
        </section>

        <section class="main-about">
            <div class="main-about__container">
                <div class="logo"><img src="/custom/my/assets/img/front-new/logo-silver.png" alt="#"/></div>
                <h3 class="main-about__title-mobile">Компания ГУГОС нацелена на лучший результат!</h3>
                <div class="main-about__descr-border">Компания ГУГОС с 2012 года является надежным подрядчиком государственных учреждений и частных клиентов, предоставляющая спектр строительных услуг</div>
                <div class="main-about__descr">Компания ГУГОС нацелена на результат, поэтому идет в ногу со временем. Мы применяем новейшие технологии производства. Мы рекомендуем своих проверенных партнеров. Мы обеспечиваем максимальный комфорт для заказчика, которому достаточно только слушать и принимать решение.</div>
            </div>

            <!-- мы предлагаем-->
            <section class="main-about-we">
                <div class="title">Мы предлагаем</div>
                <div class="main-about-we__container">
                    <div class="main-about-we__list">
                        <div class="main-about-we-item">
                            <div class="main-about-we-item__img"><img src="/custom/my/assets/img/front-new/content/products/1.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Берего <br> укрепление</a>
                                <div class="main-about-we-item__descr-list"><a href="/">Укрепление лиственницей</a><a href="/">Габионные конструкции</a><a href="/">Шпунт ПВХ</a><a href="/">Шпунт Ларсена</a></div>
                            </div>
                        </div>
                        <div class="main-about-we-item">
                            <div class="main-about-we-item__img"><img src="/custom/my/assets/img/front-new/content/products/2.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Габионы</a>
                                <div class="main-about-we-item__descr-list"><a href="/">Коробчатые;</a><a href="/">Цилиндрические;</a><a href="/">Матрасно-тюфячные.</a></div>
                            </div>
                        </div>
                        <div class="main-about-we-item"><a href="#">Габионы</a><a href="#">Берегоукрепление</a><a href="#">Терасы</a><a href="#">Пирсы</a><a href="#">Строительство и реконструкция зданий</a><a href="#">Благоустройство територий</a><a href="#">Инженерная работа</a><a href="#">Поэктирование</a><a href="#">Детское и парковое оборудование</a></div>
                        <div class="main-about-we-item small">
                            <div class="main-about-we-item__img"><img src="custom/my/assets/img/front-new/content/products/3.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Строительство <br> прудов</a></div>
                        </div>
                        <div class="main-about-we-item">
                            <div class="main-about-we-item__img"><img src="custom/my/assets/img/front-new/content/products/4.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Проекти- <br> рование</a>
                                <div class="main-about-we-item__descr-list"><a href="/">Проектирование гидротехнических сооружений и Сопровождение при получении разрешительной документации на строительство в Росрыболовстве, Министерстве</a></div>
                            </div>
                        </div>
                        <div class="main-about-we-item small">
                            <div class="main-about-we-item__img"><img src="custom/my/assets/img/front-new/content/products/5.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Строительство</a>
                                <div class="main-about-we-item__descr-list"><a href="/">Пирсы</a><a href="/">Терассы</a><a href="/">Набережные</a><a href="/">Слипы</a><a href="/">Эллинги</a></div>
                            </div>
                        </div>
                        <div class="main-about-we-item">
                            <div class="main-about-we-item__img"><img src="/custom/my/assets/img/front-new/content/products/6.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="">реконструкция зданий</a></div>
                        </div>
                        <div class="main-about-we-item">
                            <div class="main-about-we-item__img"><img src="/custom/my/assets/img/front-new/content/products/7.jpg" alt="#"></div>
                            <div class="main-about-we-item__descr"><a class="main-about-we-item__descr-name" href="/">Благо устройство територий</a></div>
                        </div>
                    </div>
                </div>
                <section class="main-form">
                    <div class="main-form__row">
                        <div class="main-form__row-left"></div>
                        <form class="main-form__row-left-form">
                            <div class="title">Отправьте нам заявку на расчет стоимости</div>
                            <div class="main-form__row-left-form__description">Оставьте заявку и мы перезвоним Вам. Готовы ответить на любые вопросы. всегда рады сотрудничеству. Или просто позвоните нам по горячей линии по номеру 8 800 787 65 43</div>
                            <div class="placeholder-container placeholder-container__input">
                                <input class="_necessarily" type="text" name="nameUser">
                                <div class="caption">Имя</div>
                            </div>
                            <div class="placeholder-container placeholder-container__input">
                                <input class="_necessarily" type="text" name="phoneUser">
                                <div class="caption">Телефон</div>
                            </div>
                            <div class="main-form__row-left-form__footer">
                                <button class="btn" data-form="true">Получить консультацию</button>
                                <p><span>*</span>согласие на обработку персональных данных</p>
                            </div>
                        </form><img class="logo" src="assets/img/front-new/logo.png" alt="#">
                        <div class="main-form__row-right"><img src="assets/img/front-new/form.jpg" alt="#"></div>
                    </div>
                </section>
                <!-- specification-->
                <section class="main-specification">
                    <div class="main-specification__container">
                        <div class="main-specification__list">
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/1-2-3.png" alt="#"></div>
                                <div class="main-specification-item__name">3 дня</div>
                                <div class="main-specification-item__descr">3 дня - среднее время выполнять работы</div>
                            </div>
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/2.png" alt="#"></div>
                                <div class="main-specification-item__name">5 дня</div>
                                <div class="main-specification-item__descr">Гарантия 5 лет на работы и 3 гола на материалы.</div>
                            </div>
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/3.png" alt="#"></div>
                                <div class="main-specification-item__name">Подход к работе</div>
                                <div class="main-specification-item__descr">В работе используем качественный материал (ПВХ шпунт)</div>
                            </div>
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/4.png" alt="#"></div>
                                <div class="main-specification-item__name">Аванс всего 20%</div>
                                <div class="main-specification-item__descr">Аванс в 20% когда материалы уже привезли</div>
                            </div>
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/5.png" alt="#"></div>
                                <div class="main-specification-item__name">Замер</div>
                                <div class="main-specification-item__descr">мерщик приезжает бесплатно ( даже если откажитесь от ремонта</div>
                            </div>
                            <div class="main-specification-item">
                                <div class="main-specification-item__img"><img src="assets/img/front-new/icon/advantades/6.png" alt="#"></div>
                                <div class="main-specification-item__name">Доставка 24/7</div>
                                <div class="main-specification-item__descr">Доставка в любое время</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main-descr-two">
                    <div class="logo"><img src="assets/img/front-new/logo-silver.png" alt="#"></div>
                    <div class="title">Мы работаем с любыми видами водоемов и прудов</div>
                    <div class="main-descr-two__text-border">Наш опыт, надежное и эффективное решение задач позволяют работать как с небольшими декоративными прудами, так и с крупными объектами, беря все риски на себя.</div>
                    <div class="main-descr-two__text">Мы ждем вас в офисе нашей компании, находящегося в Москве, где у вас всегда есть возможность лично ознакомиться с материалами, а специалисты готовы помочь с выбором шпунта и сделать все необходимые расчеты для грамотной реализации вашего проекта. Также наши сотрудники всегда готовы ответить по телефону на ваши вопросы, разобрать задачу и дать технические пути ее решения.</div>
                </section>
                <section class="slider-prew">
                    <div class="slider-prew__box swiper-container">
                        <div class="slider-prew__wrapper swiper-wrapper">
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/2.jpg" alt="#"></div>
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/4.jpg" alt="#"></div>
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/5.jpg" alt="#"></div>
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/2.jpg" alt="#"></div>
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/4.jpg" alt="#"></div>
                            <div class="slider-prew-slide swiper-slide"><img src="assets/img/front-new/content/slider/5.jpg" alt="#"></div>
                        </div>
                    </div>
                    <div class="slider-prew-pagination"></div>
                    <div class="slider-prew__text">Оставьте заявку, чтобы получить готовый проэкт укрепления берега</div>
                </section>
                <!-- coast-->
                <section class="main-coast">
                    <div class="main-coast__container">
                        <div class="title">Стоимость укрепления берегов</div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                            <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Формирование откосов линии берега</div>
                            <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                            <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Монтаж свай из листвинницы</div>
                            <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                            <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                        <div class="main-coast-item">
                            <div class="main-coast-item__descr">Формирование откосов линии берега</div>
                            <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                        </div>
                    </div>
                </section>
            </section>

        </section>


<!--        <section class="main-form">-->
<!--            <div class="main-form__row">-->
<!--                <div class="main-form__row-left">-->
<!--                    <form class="main-form__row-left-form">-->
<!--                        <div class="title">Отправьте нам заявку на расчет стоимости</div>-->
<!--                        <div class="main-form__row-left-form__description">Оставьте заявку и мы перезвоним Вам. Готовы ответить на любые вопросы. Всегда рады сотрудничеству. Или просто позвоните нам по горячей линии по номеру <a href="tel:84952555549">8 495 255 55 49</a></div>-->
<!--                        <div class="placeholder-container placeholder-container__input">-->
<!--                            <input class="_necessarily" type="text" name="nameUser"/>-->
<!--                            <div class="caption">Имя</div>-->
<!--                        </div>-->
<!--                        <div class="placeholder-container placeholder-container__input">-->
<!--                            <input class="_necessarily" type="text" name="phoneUser"/>-->
<!--                            <div class="caption">Телефон</div>-->
<!--                        </div>-->
<!--                        <div class="main-form__row-left-form__footer">-->
<!--                            <button class="btn" data-form="true">Получить консультацию</button>-->
<!--                            <p><span>*</span>согласие на обработку персональных данных</p>-->
<!--                        </div>-->
<!--                    </form><img class="logo" src="/custom/my/assets/img/front-new/logo.png" alt="#"/>-->
<!--                </div>-->
<!--                <div class="main-form__row-right"><img src="/custom/my/assets/img/front-new/form.jpg" alt="#"/></div>-->
<!--            </div>-->
<!--        </section>-->



        <!-- specification-->
<!--        <section class="main-specification">-->
<!--            <div class="main-specification__container">-->
<!--                <div class="main-specification__list">-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/1-2-3.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">3-5 дней</div>-->
<!--                        <div class="main-specification-item__descr">Быстрый выход на работу</div>-->
<!--                    </div>-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/2.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">2 года</div>-->
<!--                        <div class="main-specification-item__descr">Гарантия на все работы и материалы</div>-->
<!--                    </div>-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/3.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">Подход к работе</div>-->
<!--                        <div class="main-specification-item__descr">Используем материал только у проверенных компаний</div>-->
<!--                    </div>-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/4.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">Любая форма оплаты</div>-->
<!--                        <div class="main-specification-item__descr">Работаем с НДС</div>-->
<!--                    </div>-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/5.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">Бесплатный замер</div>-->
<!--                        <div class="main-specification-item__descr">Выезд инженера-замерщика бесплатно</div>-->
<!--                    </div>-->
<!--                    <div class="main-specification-item">-->
<!--                        <div class="main-specification-item__img"><img src="/custom/my/assets/img/front-new/icon/advantades/6.png" alt="#"/></div>-->
<!--                        <div class="main-specification-item__name">Комплекс строительных работ</div>-->
<!--                        <div class="main-specification-item__descr">Построим весь спектр гидротехнических сооружений</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <section class="main-descr-two">
            <div class="logo"><img src="/custom/my/assets/img/front-new/logo-silver.png" alt="#"/></div>
            <h2 class="title">Мы работаем с любыми видами водоемов и прудов</h2>
            <div class="main-descr-two__text-border">Наш опыт, надежное и эффективное решение задач позволяют работать как с небольшими декоративными прудами, так и с крупными объектами, беря все риски на себя.</div>
            <div class="main-descr-two__text">Мы ждем вас в офисе нашей компании, находящегося в Москве, где у вас всегда есть возможность лично ознакомиться с материалами, а специалисты готовы помочь с выбором шпунта и сделать все необходимые расчеты для грамотной реализации вашего проекта. Также наши сотрудники всегда готовы ответить по телефону на ваши вопросы, разобрать задачу и дать технические пути ее решения.</div>
        </section>
        <section class="slider-prew">
            <div class="slider-prew__box swiper-container">
                <div class="slider-prew__wrapper swiper-wrapper">
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/2.jpg" alt="#"/></div>
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/4.jpg" alt="#"/></div>
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/5.jpg" alt="#"/></div>
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/2.jpg" alt="#"/></div>
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/4.jpg" alt="#"/></div>
                    <div class="slider-prew-slide swiper-slide"><img src="/custom/my/assets/img/front-new/content/slider/5.jpg" alt="#"/></div>
                </div>
            </div>
            <div class="slider-prew-pagination"></div>
            <div class="slider-prew__text">Оставьте заявку, чтобы получить готовый проект укрепления берега</div>
        </section>
        <!-- coast-->
        <section class="main-coast">
            <div class="main-coast__container">
                <h2 class="title">Стоимость укрепления берегов</h2>
                <div class="main-coast-item">
                    <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                    <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div>
                <div class="main-coast-item">
                    <div class="main-coast-item__descr">Формирование откосов линии берега</div>
                    <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div>
                <div class="main-coast-item">
                    <div class="main-coast-item__descr">Монтаж свай из лиственницы</div>
                    <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div>
				<!--div class="main-coast-item">
                    <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                    <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div-->
                <!--div class="main-coast-item">
                    <div class="main-coast-item__descr">Выезд, Обследование, План работ</div>
                    <div class="main-coast-item__price">Бесплатно</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div>
                <div class="main-coast-item">
                    <div class="main-coast-item__descr">Формирование откосов линии берега</div>
                    <div class="main-coast-item__price">от 600 руб</div><a class="main-coast-item__order" data-path="one-dom" href="#">Заказать</a>
                </div-->
            </div>
        </section>
        <insert name="show_include" file="footer">

        <script src="/custom/my/assets/js/main.js"></script>
    </body>

</html>
