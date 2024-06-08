<?php
if(isset($_SESSION['user'])){
?>


<header class="navbar bg-dark flex-md-nowrap p-0 ml-2 shadow" data-bs-theme="dark">
    <ul class="navbar-nav flex-row">
        <li class="nav-item text-nowrap">
            <button class="nav-link px-1 text-white toggle-sidebar" data-toggle-state="shown">
                <svg class="bi">
                    <use xlink:href="#list" />
                </svg>
            </button>
        </li>
        <li class="nav-item">
            <a class="nav-link position-relative px-3 text-white" href="#">
                <i class="bi bi-bell-fill fa-lg"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link position-relative px-2 text-white" href="#">
                <i class="bi bi-envelope-paper-fill fa-lg"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link position-relative px-2 text-white" href="#">
                <i class="bi bi-chat-square-text-fill fa-lg"></i>
            </a>
        </li>

        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button">
                <svg class="bi">
                    <use xlink:href="#search" />
                </svg>
            </button>
        </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>

</header>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav> -->
<?php
}else{
?>
<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0 text-uppercase logo fw-bolder logo">
            <?=$config['app']['name']?>
        </h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="#service">Services</a>
            <a class="nav-link fw-bold py-1 px-0" href="#contact">Contact</a>
            <a class="nav-link fw-bold py-1 px-0 btn-link" data-type="auth" data-link="login" href="#">Login</a>
        </nav>
    </div>
</header>
<?php } ?>