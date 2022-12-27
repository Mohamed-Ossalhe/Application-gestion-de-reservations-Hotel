<?php include 'includes/admin-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <div class="side-menu-btn z-20 cursor-pointer bg-white h-10 w-10 flex items-center justify-center text-2xl transition"><i class='bx bx-chevrons-left'></i></div>
            <h1 class="capitalize text-3xl font-bold">hotel Analytics</h1>
        </header>
        <div class="content overflow-y-auto h-4/5">
            <!-- analytics -->
            <div class="analytics grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
                <!-- box -->
                <div class="box bg-secondary-clr text-white py-4 px-6 text-center rounded">
                    <h4 class="capitalize text-md mb-4 capitalize">total rooms</h4>
                    <p class="text-4xl font-bold"><?=count($this->view_data["rooms"])?></p>
                </div>
                <!-- box -->
                <div class="box bg-secondary-clr text-white py-4 px-6 text-center rounded">
                    <h4 class="capitalize text-md mb-4 capitalize">total Users</h4>
                    <p class="text-4xl font-bold"><?=count($this->view_data["guests"])?></p>
                </div>
                <!-- box -->
                <div class="box bg-secondary-clr text-white py-4 px-6 text-center rounded">
                    <h4 class="capitalize text-md mb-4 capitalize">total Reservations</h4>
                    <p class="text-4xl font-bold">100</p>
                </div>
            </div>
            <!-- charts -->
            <div class="mt-5">
                <canvas id="dashboard-chart"></canvas>
            </div>
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>