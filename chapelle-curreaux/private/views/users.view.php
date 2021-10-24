<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

    <div class="container-fluid shadow blur bg-secondary bg-opacity-10" style="max-width: 90%;min-height: 40vh;" style="max-width: 1000px;background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px);">
    <h2 class="text-center"> Liste des livres réservés</h2>
    <table class="table table-striped table-hover">
        <tr>
            <th>Livres</th>
            <th>Lecteur</th>
            <th>Date de réservation</th>
            <th>Date de retour</th>
            <th>Confirmer l' emprunt</th>
            <th>Remise du livre</th>
        </tr>
        <?php if (isset($bookrows)) {

            if ($bookrows): ?>
                <?php foreach ($bookrows as $bookrow): ?>
                    <?php if ($bookrow->available == 'reserved' ||$bookrow->available == 'borrow'): ?>

                        <tr>
                            <td><?= $bookrow->title ?></td>
                            <td><?= $bookrow->user_id ?></td>
                            <td><?= get_date($bookrow->reservation_date) ?></td>
                            <td><?= get_date($bookrow->return_date) ?></td>
                            <?php if ($bookrow->available == 'reserved'): ?>
                            <td><a href="<?= ROOT ?>/catalog/borrow/<?= $bookrow->id ?>"class="btn btn-success float-start">Confirmation</a></td>
                            <?php else:?>
                            <td><p>emprunté</p></td>
                            <?php endif;?>
                            <td><a href="<?= ROOT ?>/catalog/return/<?= $bookrow->id ?>"
                                   class="btn text-decoration-none btn-warning ">Rendu</a></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif;}?>
    </table>


    <center><a class="nav-link text-dark mx-3" href="<?= ROOT ?>/signup"><i class="fa fa-user-plus"></i> <p>Ajouter un membre</p></a></center>
    <div class="card-group justify-content-center">
        <table class="table table-striped table-hover">
            <tr>
                <th>Email</th>
                <th>Membre</th>
                <th>Certification</th>
                <th>Supprimer Profil</th>
                <th>Voir profil</th>
            </tr>
            <?php if (!empty($rows)) {
                if ($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?= $row->email ?></td>
                            <td><?= $row->firstname ?> <?= $row->lastname ?></td>
                            <td class="text-center">
                                <?php if ($row->validate): ?>
                                    <i class="fa fa-medal"></i>

                                <?php else: ?>

                                    <a href="<?= ROOT ?>/users/edit/<?= $row->id ?>">
                                        <button class="btn-sm btn btn-warning text-white"><i class="fa fa-medal"></i>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= ROOT ?>/users/delete/<?= $row->id ?>">
                                    <button class="btn-sm btn btn-danger text-white"><i class="far fa-trash-alt"></i>
                                    </button>
                                </a>

                            </td>
                            <td>
                                <a href="<?= ROOT ?>/profile/<?= $row->user_id ?>" class="btn btn-primary">Profil</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h4>il n'y a aucun Membre pour le moment <i class="fa fa-smile"></i></h4>
                <?php endif;
            } ?>
        </table>
    </div>
<?php $this->view('includes/footer') ?>