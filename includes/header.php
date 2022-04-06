<!-- Header section -->
<header class="header-section">
    <div class="container-box">
        <div class="header-box">
            <nav class="main-menu">
                <ul class="main-menu__items">
                    <li>
                        <a href="/" class="main-menu__link lang-ru">Главная</a>
                        <a href="/" class="main-menu__link lang-en">Main</a>
                    </li>
                    <li>
                        <a href="redcolegiya.php" class="main-menu__link lang-ru">Редколегия</a>
                        <a href="redcolegiya.php" class="main-menu__link lang-en">Editorial Board</a>
                    </li>
                    <li>
                        <a href="#" class="main-menu__link lang-ru">Нормативно-правовая база</a>
                        <a href="#" class="main-menu__link lang-en">Regulatory framework</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="smi.php" class="main-menu__link lang-ru">Закон о средствах массовой информации</a>
                                <a href="smi.php" class="main-menu__link lang-en">The Law on Mass Media</a>
                            </li>
                            <li>
                                <a href="about-journal.php" class="main-menu__link lang-ru">Положение о журнале</a>
                                <a href="about-journal.php" class="main-menu__link lang-en">Regulations on the journal</a>
                            </li>
                            <li>
                                <a href="rules.php" class="main-menu__link lang-ru">Правила рецензирования</a>
                                <a href="rules.php" class="main-menu__link lang-en">Review rules</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu__link lang-ru">Авторам</a>
                        <a href="#" class="main-menu__link lang-en">To the authors</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="article-rule.php" class="main-menu__link lang-ru">Правила оформления научных статей</a>
                                <a href="article-rule.php" class="main-menu__link lang-en">Rules for the design of scientific articles</a>
                            </li>
                            <li>
                                <a href="license-agreement.php" class="main-menu__link lang-ru">Договор о передачи прав на опубликование</a>
                                <a href="license-agreement.php" class="main-menu__link lang-en">Agreement on the transfer of publishing rights</a>
                            </li>
                            <li>
                                <a href="agrement.php" class="main-menu__link lang-ru">Разрешение на опубликование индивидуальных сведений об авторе</a>
                                <a href="agrement.php" class="main-menu__link lang-en">Permission to publish individual information about the author</a>
                            </li>
                            <li>
                                <a href="about-author.php" class="main-menu__link lang-ru">Сведения об авторе</a>
                                <a href="about-author.php" class="main-menu__link lang-en">Information about the author</a>
                            </li>
                            <li>
                                <a href="recenzia.php" class="main-menu__link lang-ru">Рецензия</a>
                                <a href="recenzia.php" class="main-menu__link lang-en">Review</a>
                            </li>
                            <li>
                                <a href="etic-code.php" class="main-menu__link lang-ru">Этический кодекс</a>
                                <a href="etic-code.php" class="main-menu__link lang-en">Code of Ethics</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu__link lang-ru">Архивы</a>
                        <a href="#" class="main-menu__link lang-en">Archives</a>
                        <ul class="sub-menu">
                            <?php include 'includes/archive_list_desctop.php'; ?>
                        </ul>
                    </li>
                    <li>
                        <a href="retraction.php" class="main-menu__link lang-ru">Ретракция</a>
                        <a href="retraction.php" class="main-menu__link lang-en">Retraction</a>
                    </li>

                    <?php 
                    if($lang_change) {
                        echo '
                        <li class="js-change-lang rus">
                            <span class="lang-en"><img src="img/logo/eng-flag.png"></span>
                            <span class="lang-ru"><img src="img/logo/rus-flag.png"></span>
                        </li>
                        ';
                    }
                    ?>
                    
                </ul>
            </nav>
            <div class="toggle-box">
                <div class="toggle" onclick="toggle()"></div>
                <div class="mob-container">
                    <ul class="mob-menu">
                        <li class="mob-menu__item">
                            <a href="/" class="mob-menu__link lang-ru">Главная</a>
                            <a href="/" class="mob-menu__link lang-en">Main</a>
                        </li>
                        <li class="mob-menu__item">
                            <a href="redcolegiya.php" class="mob-menu__link lang-ru">Главный редактор, редколегия и редсовет</a>
                            <a href="redcolegiya.php" class="main-menu__link lang-en">Editorial Board</a>
                        </li>
                        <li class="mob-menu__item">
                            <a href="#" class="mob-menu__link mob-menu__show lang-ru">Нормативно-правовая база <span class="sp__arrow-d"></span></a>
                            <a href="#" class="main-menu__link mob-menu__show lang-en">Regulatory framework</a>
                            <ul>
                                <li class="quicklinks-item">
                                    <a href="smi.php" class="main-menu__link lang-ru">Закон о средствах массовой информации</a>
                                    <a href="smi.php" class="main-menu__link lang-en">The Law on Mass Media</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="about-journal.php" class="main-menu__link lang-ru">Положение о журнале</a>
                                    <a href="about-journal.php" class="main-menu__link lang-en">Regulations on the journal</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="rules.php" class="main-menu__link lang-ru">Правила направления, рецензирования и опубликование научных
                                        статей</a>
                                    <a href="rules.php" class="main-menu__link lang-en">Review rules</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mob-menu__item">
                            <a href="#" class="mob-menu__link mob-menu__show lang-ru">Авторам <span class="sp__arrow-d"></span></a>
                            <a href="#" class="main-menu__link mob-menu__show lang-en">To the authors</a>
                            <ul>
                                <li class="quicklinks-item">
                                    <a href="article-rule.php" class="main-menu__link lang-ru">Правила оформления научных статей</a>
                                    <a href="article-rule.php" class="main-menu__link lang-en">Rules for the design of scientific articles</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="license-agreement.php" class="main-menu__link lang-ru">Договор о передачи прав на опубликование</a>
                                    <a href="license-agreement.php" class="main-menu__link lang-en">Agreement on the transfer of publishing rights</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="agrement.php" class="main-menu__link lang-ru">Разрешение на опубликование индивидуальных сведений об авторе</a>
                                    <a href="agrement.php" class="main-menu__link lang-en">Permission to publish individual information about the author</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="about-author.php" class="main-menu__link lang-ru">Сведения об авторе</a>
                                    <a href="about-author.php" class="main-menu__link lang-en">Information about the author</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="recenzia.php" class="main-menu__link lang-ru">Резенция</a>
                                    <a href="recenzia.php" class="main-menu__link lang-en">Review</a>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="etic-code.php" class="main-menu__link lang-ru">Этический кодекс</a>
                                    <a href="etic-code.php" class="main-menu__link lang-en">Code of Ethics</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mob-menu__item">
                            <a href="#" class="mob-menu__link mob-menu__show lang-ru">Архивы <span class="sp__arrow-d"></span></a>
                            <a href="#" class="main-menu__link mob-menu__show lang-en">Archives</a>
                            <ul>
                                <li class="quicklinks-item">
                                    <a href="#" class='mob-menu__show-sub'>2019
                                        <span class="sp__arrow-d"></span>
                                    </a>
                                    <ul>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_1_2019.pdf" target="_blank">Выпуск №1</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_2_2019.pdf" target="_blank">Выпуск №2</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_3_2019.pdf" target="_blank">Выпуск №3</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_4_2019.pdf" target="_blank">Выпуск №4</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_5_2019.pdf" target="_blank">Выпуск №5</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_6_2019.pdf" target="_blank">Выпуск №6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="#" class='mob-menu__show-sub'>2020
                                        <span class="sp__arrow-d"></span>
                                    </a>
                                    <ul>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_1_2020.pdf" target="_blank">Выпуск №1</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_2_2020.pdf" target="_blank">Выпуск №2</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_3_2020.pdf" target="_blank">Выпуск №3</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_4_2020.pdf" target="_blank">Выпуск №4</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_5_2020.pdf" target="_blank">Выпуск №5</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_6_2020.pdf" target="_blank">Выпуск №6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="quicklinks-item">
                                    <a href="#" class='mob-menu__show-sub'>2021
                                        <span class="sp__arrow-d"></span>
                                    </a>
                                    <ul>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_1_2021.pdf" target="_blank">Выпуск №1</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_2_2021.pdf" target="_blank">Выпуск №2</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_3_2021.pdf" target="_blank">Выпуск №3</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_4_2021.pdf" target="_blank">Выпуск №4</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_5_2021.pdf" target="_blank">Выпуск №5</a>
                                        </li>
                                        <li class='quicklinks-sub__item'>
                                            <a href="docs/journal_6_2021.pdf" target="_blank">Выпуск №6</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="mob-menu__item">
                            <a href="retraction.php" class="mob-menu__link lang-ru">Ретракция</a>
                            <a href="retraction.php" class="main-menu__link lang-en">Retraction</a>
                        </li>

                        <?php 
                        if($lang_change) {
                            echo '
                            <li class="js-change-lang rus">
                                <span class="lang-en"><img src="img/logo/eng-flag.png"></span>
                                <span class="lang-ru"><img src="img/logo/rus-flag.png"></span>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->