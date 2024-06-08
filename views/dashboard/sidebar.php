<div class="sidebar col-md-3 col-lg-2 p-0">
    <div class="offcanvas-sm offcanvas-start p-0" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="sidebarMenuLabel">
                <?=$config['app']['name'] ?>
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-md-flex flex-column p-0 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item my-3">
                    <a class="nav-link d-flex justify-content-between gap-2 active" aria-current="page" href="#"
                    data-link="dashboard" data-type="sidebar" id="dashboard">
                        <svg class="bi lnk-icon"><use xlink:href="#house-fill"/></svg>
                        <span class="nav-text flex-grow-1">Dashboard</span>
                        <span class="dashboard-icon"><i class="bi bi-chevron-right fa-pull-right"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between gap-2" href="#"
                       data-link="booking" data-type="sidebar" id="booking">
                        <svg class="bi lnk-icon"><use xlink:href="#file-earmark"/></svg>
                        <span class="nav-text flex-grow-1">Bookings</span>
                        <span class="booking-icon"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between gap-2" href="#"
                       data-link="service" data-type="sidebar" id="service">
                        <svg class="bi lnk-icon"><use xlink:href="#puzzle"/></svg>
                        <span class="nav-text flex-grow-1">Services</span>
                        <span class="service-icon"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between gap-2" href="#"
                       data-link="user" data-type="sidebar" id="user">
                        <svg class="bi lnk-icon"><use xlink:href="#people"/></svg>
                        <span class="nav-text flex-grow-1">Users</span>
                        <span class="user-icon"></span>
                    </a>
                </li>
                <li class="nav-item" style="top: 20px">
                    <a class="nav-link d-flex align-items-center gap-2 bt-link" href="#" data-link="logout">
                        <svg class="bi lnk-icon"><use xlink:href="#door-closed"/></svg>
                        <span class="nav-text flex-grow-1">Sign out</span>
                        <span class="act-icon"></span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>

<script>

    $('.nav-link').click(function (e) {
        e.preventDefault()
        let link = $(this).attr('data-link');
        $('.nav-link').removeClass('active');
        $('#'+link).addClass('active');
    })

    $('.toggle-sidebar').click(function (e) {
        e.preventDefault()
        let state = $(this).attr('data-toggle-state');
        if (state === 'shown'){
            $('.nav-text').hide();
            $('.sidebar').removeClass('col-md-3 col-lg-2').addClass('col-md-1 col-lg-1');
            $('.main').removeClass('col-md-9 col-lg-10').addClass('col-md-11 col-lg-11');
            $(this).attr('data-toggle-state','hidden');
        }
        else{
            $('.nav-text').show();
            $('.sidebar').addClass('col-md-3 col-lg-2').removeClass('col-md-1 col-lg-1');
            $('.main').addClass('col-md-9 col-lg-10').removeClass('col-md-11 col-lg-11');
            $(this).attr('data-toggle-state','shown');
        }


    })
</script>