<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<style>
    div .blur {
        background-color: filter: blur(4px);

    }

    a {
        text-decoration: none;
    }

</style>
<div class="container-fluid shadow blur bg-secondary bg-opacity-10" style="max-width: 90%;min-height: 40vh;">
    <h1 class="fw-bold fs-1 text-lg-center m-4 mb-5 ">Catalogue</h1>

    <?php if (Auth::logged_in()): ?>
        <?php if (Auth::getRank() == 'employee'): ?>
            <center><a class="btn-lg btn-dark" href="<?= ROOT ?>/catalog/add">Ajouter un livre <i
                            class="fa fa-plus"></i></a></center><br>
        <?php endif; ?>
        <?php if (Auth::getValidate() == 'validate'): ?>
            <div class="justify-content-center row row-cols-1 row-cols-md-3 g-4 ">
                <?php if (!empty($rows)) {
                    if ($rows): ?>
                        <form class="form-control bg-dark bg-opacity-10" method="post">
                            <h2 class="text-center">Recherche par genre :</h2>
                            <div class="form-check form-check-inline">
                                <input <?= get_select('filtered', '') ?> class="form-check-input" type="checkbox"
                                                                              name="filtered" value=" ">
                                <label class="form-check-label" for="filtered">tout genre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input <?= get_select('filtered', 'roman') ?> class="form-check-input" type="checkbox"
                                                                              name="filtered" value="roman">
                                <label class="form-check-label" for="filtered">roman</label>
                            </div>
                            <div class="form-check form-check-inline" value="bd">
                                <input <?= get_select('filtered', 'bandedessiner') ?> class="form-check-input" type="checkbox"
                                                                              name="filtered" value="bandedessiner">
                                <label class="form-check-label" for="filtered">bd</label>
                            </div>
                            <div class="form-check form-check-inline" value="bd">
                                <input <?= get_select('filtered', 'bienetre') ?> class="form-check-input" type="checkbox"
                                                                                      name="filtered" value="bienetre">
                                <label class="form-check-label" for="filtered">Bien être</label>
                            </div>
                            <div class="form-check form-check-inline" value="bd">
                                <input <?= get_select('filtered', 'literature') ?> class="form-check-input" type="checkbox"
                                                                                 name="filtered" value="literature">
                                <label class="form-check-label" for="filtered">literature</label>
                            </div>



                            <!-- recherche par titre -->
                            <h2 class="text-center">Recherche par Titre :</h2>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-search"></i>&nbsp</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="d-grid gap-2 col-1 mx-auto">
                                <button class="btn btn-sm btn-dark ">Rechercher&nbsp<i class="p-1 fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        
                        <?php foreach ($rows as $row): ?>
                            <div class="card m-2 bg-warning bg-opacity-10" style="max-width: 340px;max-height: 300px;">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <img src="<?= $row->image ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= substr($row->title, 0, 20) ?>...</h5>
                                            <p class="card-text"><?= substr($row->description, 0, 20) ?>...</p>
                                            <?php if ($row->available == 'available'): ?>
                                                <a href="<?= ROOT ?>/catalog/edit/<?= $row->id ?>"
                                                   class="btn btn-success float-end">Réserver</a>
                                            <?php else: ?>
                                                <p class="card-text"><small class="text-muted">indispo pour le
                                                        moment</small></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h4>il n'y a actuellement aucun livre</h4>
                    <?php endif;
                 } ?>
            </div>
        <?php else: ?>
            <h4 class="text-center">Vous n'êtes pas encore certifié par l'administrateur</h4>
        <?php endif; ?>

    <?php else: ?>
        <h4 class="p-4 mx-5 text-center">Vous devez vous <a class="text-dark text-decoration-underline "
                                                             href="<?= ROOT ?>/login"><i
                        class="fa fa-user-circle"></i>Connecter</a> ou vous <a
                    class="text-dark text-decoration-underline" href="<?= ROOT ?>/signup"><i
                        class="fa fa-user-plus"></i>
                Inscrire</a> pour pouvoir
            accéder au
            catalogue</h4>


    <?php endif; ?>

</div>

<?php $this->view('includes/footer') ?>
