<!DOCTYPE html>
<html lang="en">
<head>
    <meta name = "description" content = "Site about films" > <!-- мета элемент, который описывает содержимое документа -->
    <meta name = "keywords" content = "film, watch"> <!-- мета элемент, который описывает ключевые слова в документе -->
    <meta name = "author" content = "Petr Tolstov"> <!-- мета элемент, который указывает имя автора документа -->
    <meta charset="UTF-8" http-equiv="refresh" content="9999" >
    <!--<meta  http-equiv  = "content-security-policy" content = "default-src https:" > мета элемент, который разрешает загрузку ресурсов (изображения, шрифты, скрипты и так далее) только с использованием https -->
    <meta name = "robots" content = "index, follow"> <!-- Используется поисковыми системами при индексации страниц и прохода по ссылкам поисковой системой-->
    <meta name = "viewport" content = "width=device-width, initial-scale = 1"> <!--Для того, чтобы мобильные браузеры автоматически не изменяли размер страниц сайта-->
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Base of kino</title>
    <link rel="icon" href="style/icon.png" sizes="16x16 32х32" type="image/png">
    <link href="style/page_styles.css" type="text/css" rel="stylesheet">
    <script src="scripts/page_script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <article class="title_h">
    <h1 class="main_h">КиноБаза</h1>
    <p class="down_main_h">Кино - наша страсть!</p>
    </article>
    <nav class="main_nav">
        <ul class="ul_main_nav">
            <li><a href="index.php">Главная</a></li>
            <li><a href="films.php">Фильмы</a></li>
            <li><a href="serials.php">Сериалы</a></li>
            <li><a href="rating.php">Рейтинг фильмов</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>
</header>


<main>

    <aside>
        <article id="search" class="article_for_green_a">
            <h3>Поиск</h3>
            <form method="get">
                <label>
                    <input type="search">
                    <button>Найти</button>
                </label>
            </form>
        </article>
        <article id="login" class="article_for_green_a">
            <h3>Вход</h3>
            <form method="post">
                <label>
                    <input type="text">
                    <input type="password">
                    <button>Войти</button>
                </label>
            </form>
            <a href="">Забыли пароль?</a>|<a href="">Регестрация</a>
        </article>
        <article id="news" class="article_for_green_a">
            <h3>Новости</h3>
            <p>31.02.2018</p>
            <p>Мы запустили расширенный поиск</p>
            <a href="">Читать</a>
        </article>
        <article id="rating" class="article_for_green_a">
            <h3>Рейтинг фильмов</h3>
            <p><b class="b_rating">8.1 --- </b><a href="" class="a_rating">Интерстеллер</a></p>
            <p><b class="b_rating">8.0 --- </b><a href="" class="a_rating">Матрица</a></p>
            <p><b class="b_rating">7.5 --- </b><a href="" class="a_rating">Безумный Макс</a></p>
            <p><b class="b_rating">7.4 --- </b><a href="" class="a_rating">Облачный атлас</a></p>
        </article>
    </aside>
    <section class="sh">
    <article id="new_film" class="article_for_green_a">
        <h2>Новые фильмы</h2>
        <section>
            <a href="film.php?film=0"><img src="src/matrix.png" alt="Film photo" ></a>
            <a href="film.php?film=1"> <img src="src/max.png" alt="Film photo"></a>
            <a href="film.php?film=2"> <img src="src/inter.png" alt="Film photo"></a>
            <a href="film.php?film=3"> <img src="src/cloud.png" alt="Film photo"></a>
        </section>
    </article>

    <article id="new_serials" class="article_for_green_a">
        <h2>Новые сериалы</h2>
        <section>
            <a href=""><img src="src/dead.png" alt="Film photo"></a>
            <a href=""><img src="src/silicon.png" alt="Film photo"></a>
            <a href=""><img src="src/breakingbad.png" alt="Film photo"></a>
            <a href=""><img src="src/xfiles.png" alt="Film photo"></a>
        </section>
    </article>
    <article id="first_main_article" class="article_for_green_a">
        <h2>Как снимали Интерстеллар</h2>
        <p>45 лет исполнилось КРистоферу Нолану - одному из самых успешных режиссёров нашего времени,
        чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount.
        Когда Кристофер Нолан занял место режиссёёра, студия Warner Bros, которая выпускала его последние фильмы, добилась участия в проекте</p>
        <a href="">Читать</a>
    </article>

    <article id="second_main_article" class="article_for_green_a">
        <h2>Актёр Том Хенкс поделился впечатлениями о фестивале</h2>
        <p>16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКарио,
        Брэд Питт, Анджелина Джоли, Кейт Бланшет, Хеллен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители примии - в нашем
        репортаже</p>
        <a href="">Читать</a>
    </article>
    </section>
</main>
<footer class="footer">
    <nav class="footer_nav">
        <ul class="ul_footer_nav">
            <li><a href="index.php">Главная</a></li>
            <li><a href="films.php">Фильмы</a></li>
            <li><a href="serials.php">Сериалы</a></li>
            <li><a href="rating.php">Рейтинг фильмов</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>
    <a>baseoffilms.ee</a>
</footer>
</body>

