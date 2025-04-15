<header class="header">
    <div class="header__inner">
        <div class="header-utilities">
            <p class="header__logo">
                PiGLy
            </p>
            <nav>
                <ul class="header-nav">
                    @if (Auth::check())
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/weight_logs/goal_setting">目標体重設定</a>
                    </li>
                    <li class="header-nav__item">
                        <form class="logout-form" action="/logout" method="post">
                            @csrf
                            <button class="header-nav__button">ログアウト</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
