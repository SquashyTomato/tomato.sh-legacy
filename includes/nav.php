    <body>
        <nav class="navbar is-dark is-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/"><span class="columns is-desktop is-vcentered is-size-5 has-text-weight-bold"><img src="/static/media/logo.png" width="32" height="32">&nbsp;&nbsp;<?=$cfg['info']['name']?></span></a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbar" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" href="/about"><i class="fas fa-question-circle"></i>&nbsp;&nbsp;About</a>
                        <a class="navbar-item" href="/projects"><i class="fas fa-book"></i>&nbsp;&nbsp;Projects</a>
                        <a class="navbar-item" href="/blog"><i class="fas fa-edit"></i>&nbsp;&nbsp;Blog</a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link is-arrowless"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="navbar-dropdown is-right">
                                <a class="navbar-item" href="/resource/skin"><i class="fas fa-paint-brush"></i>&nbsp;&nbsp;osu! Skin</a>
                                <a class="navbar-item" href="/resource/catchpp"><i class="fas fa-apple-alt"></i>&nbsp;&nbsp;osu! Catch PP Calculator</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main class="site-content">
