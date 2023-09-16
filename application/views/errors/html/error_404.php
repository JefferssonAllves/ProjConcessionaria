<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('layout/head.php') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('layout/sideBar.php') ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('layout/header.php') ?>
                <div class="text-center">
                    <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-5">Page Not Found</p>
                    <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                    <a href="index.html">&larr; Back to Dashboard</a>
                </div>

            </div>
        </div>
        <?php $this->load->view('layout/footer.php') ?>
    </div>
    </div>
</body>
