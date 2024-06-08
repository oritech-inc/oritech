<style>
.btn-light,
.btn-light:hover,
.btn-light:focus {
    color: #333;
    text-shadow: none;
    /* Prevent inheritance from `body` */
}

.cover-container {
    max-width: 42em;
}

.nav-masthead .nav-link {
    color: rgba(84, 122, 115, .75);
    border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
    border-bottom-color: rgba(84, 122, 115, .5);
}

.nav-masthead .nav-link+.nav-link {
    margin-left: 1rem;
}

.nav-masthead .active {
    color: #547A73;
    border-bottom-color: #547A73;
}

.logo {
    color: #547A73;
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.bd-mode-toggle {
    z-index: 1500;
}

.bd-mode-toggle .dropdown-menu .active .bi {
    display: block !important;
}
</style>
<div class="cover-container container-fluid d-flex w-100 h-100 p-2 mx-auto flex-column">

    <main class="text-center">
        <h1 class="fs-3 fw-bold">
            Welcome to <br>
            <span class="">
                <?=$config['app']['full']?>
            </span>
        </h1>
        <p class="lead">
            A versatile technology solutions company specializing in variety of services. We ensure you that all your
            tech
            and creative needs are met under one roof. With a commitment to excellence and customer satisfaction,
            Oritech is your go-to partner for innovative and reliable tech solutions.
        </p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
            <a href="/auth" class="btn btn-lg btn-light fw-bold border-white bg-white">

            </a>
        </p>
    </main>

    <?php require_once './views/app/footer.php'; ?>
</div>