<?php $this->load->view('layout/head.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('layout/sideBar.php'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view('layout/header.php'); ?>
                <?php $veiculo = unserialize(base64_decode($_POST['veiculo'])); ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($veiculo->imagem); ?>" class="img-card-venda" alt="...">

            </div>
            <h1> <?php echo $veiculo->descricao; ?></h1>
            <?php $this->load->view('layout/footer.php') ?>
        </div>
    </div>
</div>
</body>