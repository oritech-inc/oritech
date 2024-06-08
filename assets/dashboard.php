<?php require_once './views/dashboard/top.php' ?>
<div class="container-fluid pl-3" style="margin-top: 3.5rem">
    <div class="row">
        <?php require_once './views/dashboard/sidebar.php' ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 p-0 main" style="min-height: 100%;transition: ease-in-out 1s;">
            <div class="flex-wrap flex-md-nowrap align-items-center">
                <h2 class="content-header bg-body-tertiary p-2 border-bottom h2">Dashboard</h2>

                <div id="content" class="p-0" style="overflow-y: scroll;overflow-x: hidden;min-height:700px ">
                </div>
            </div>
        </main>
    </div>
</div>
