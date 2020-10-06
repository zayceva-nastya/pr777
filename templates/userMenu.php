<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="menuAdm nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                <a class="nav-link  pr-lg-5 pr-xl-5 homefit"  href="?action=start&type=default"><div class="animate">
			<span>H</span><span>o</span><span>m</span><span>e</span><span>F</span><span>i</span><span>t</span>
		</div>
                    <span class="sr-only">(current)</span></a>
            </li>
            <!--            <li class="nav-item text-warning pl-lg-5 pl-xl-5 pt-2 menu">Добро пожаловать-->
            <!--                <a class="btn ">-->
            <? //= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] : '' ?><!--</a>-->
            <!--            </li>-->
            <li class="nav-item<?= $controllerType == 'diaryid' ? ' active' : '' ?>">
                <a class="nav-link  pl-lg-5 pl-xl-5 menu media" href="?action=show&type=diaryid">
                    <img class="icons" src="../public/image/plan.png">Plan of
                    Worcouts</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pl-lg-5 pl-xl-5 menu media" href="#" id="navbarDropdown"
                   role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icons" src="../public/image/exerc2.jpg">Exercises
                </a>
                <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item  menu" href="?action=show&type=planka">Планка</a>
                    <a class="dropdown-item  menu" href="?action=show&type=rasminka">Разминка</a>
                    <a class="dropdown-item  menu" href="?action=show&type=press">Пресс</a>
                </div>
            </li>

            <li class="nav-item dropdown float-md-right ">
                <a class="nav-link dropdown-toggle  pl-lg-5 pl-xl-5 menu media" id="name" href="#"
                   id="navbarDropdown"
                   role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="icons"
                                                                                          src="../public/image/i.jpg">
                    <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] : '' ?> </a>
                <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item  menu" href="?action=logout&type=auth">
                        <img class="icons" src="../public/image/exit.jpg">Exit</a>
                </div>
            </li>

    </div>
</nav>