
<!-- Page Content -->
<div class="container" style="min-height: 80vh;">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <h1 class="my-4">Liste des caisses:</h1>
            <div class="list-group">
                <?php foreach ($caisses as $c) { ?>
                <a href="http://localhost/tp-supermarket/Caisse/Saisie/<?= $c->getIdCaisse() ?>" class="list-group-item">
                    Caisse n° <?= $c->getNumeroCaisse() ?>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->


