<header>
    <div class="title-container">
        <a <?php echo isset($is_home) ? '' : 'href="listview.php"' ?> >
            <img class="logo" src="img/logo.svg" width="50" height="50" alt="logo">
            <h1>SnackTrigger</h1>
        </a>
    </div>
    <nav class="global-nav">
        <div class="container">
            <ul class="nav-list">
                <li>
                    <a href="">一覧</a>
                </li>
                <li>
                    <a href="">アソート作成</a>
                </li>
                <li>
                    <a href="">カート</a>
                </li>
                <li>
                    <div class="account-container">
                        <div class="account-icon">
                            <img src="img/account.svg" width="50" height="50" alt="account">
                        </div>
                        <div class="account-menu">
                            <ul class="menu-items">
                                <li class="menu-item">
                                    <a href="">ユーザー情報</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">アソート作成履歴</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">購入履歴</a>
                                </li>
                                <li class="menu-item">
                                    <a class="logout" href="">ログアウト</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>