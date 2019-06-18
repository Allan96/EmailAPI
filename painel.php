<?php include('./includes/header.php'); ?>
    <section class="painel bgc-purpledark">
        <div class="container">
            <div class="row">
                <?php EmailAPI::MostraCards(); ?>
            </div>
        </div>

    </section>

    <div id="modalEmail">
        
    </div>

<?php include('./includes/footer.php'); ?>