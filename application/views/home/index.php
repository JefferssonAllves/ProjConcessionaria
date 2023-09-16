<?php $this->load->view('layout/head.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('layout/sideBar.php'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view('layout/header.php'); ?>

                <div class="row row-cols-2 row-cols-md-4 g-4">
                    <?php foreach ($veiculos as $veiculo) : ?>
                        <form action="venda" method="post">
                            <input type="hidden" name="veiculo" value="<?php echo base64_encode(serialize($veiculo)); ?>">
                            <button class="item-card-vehicle" type="submit" class="card">
                                <img class='img-card-home' src="data:image/jpeg;base64,<?php echo base64_encode($veiculo->imagem); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $veiculo->descricao; ?></h3>
                                    <p class="card-text"><?php echo $veiculo->preco; ?></p>
                                </div>
                            </button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $this->load->view('layout/footer.php') ?>
        </div>
    </div>
</body>