<header>
    <?php if(isset($_COOKIE['login'])) { ?>
        <div id="header">
            <div>
                <a href="info?id=<?=$_COOKIE['id']?>"><?=$_COOKIE['login']?></a>
                <a href="/user/logout"><small>[Выйти]</small></a>
            </div>
            <div align="center">
                <nav>
                    <a href="/">Главная</a> |
                    <a href="/advert/">Объявления</a> |
                    <a href="#">Каталог</a> |
                    <a href="/forum/">Форум</a>
                </nav>
            </div>
            <br>
        </div>
        <?php }else { ?>
        <div id="header">
            <div align="center">
                <nav>
                    <a href="/user/login/">Войти</a> |
                    <a href="/advert/">Объявления</a> |
                    <a href="#">Каталог</a> |
                    <a href="/forum/">Форум</a>
                </nav>
            </div>
            <br>
        </div>
        <?php } ?>
</header>