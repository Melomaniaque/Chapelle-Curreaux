<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid shadow blur bg-secondary bg-opacity-10" style="max-width: 90%;min-height: 40vh;">


    <center>

        <h1 class="fw-bold"<?php if (Auth::logged_in()): ?> style="color: #D79A10;">Bonjour <?= Auth::user() ?></h1>
        <?php else: ?>
            <p class="fw-bold"> Bienvenue sur notre site</p>
            <h2><i class="fa fa-quote-left p-4"></i> Dans toute bibliothèque patiente un livre qui ouvre la porte du voyage ....<i class="fas fa-quote-right p-4"></i></h2>
            <h4 class="text-center" style="padding-bottom: 4rem;">Connectez-vous ou inscrivez-vous pour accéder à la bibliothèque</h4>

            <a class="fs-3 text-xxl text-dark text-decoration-none" href="<?= ROOT ?>/login"><i
                        class="fa fa-user-circle"></i>
                <p>Connexion</p></a>
            <a class="fs-3 text-dark text-decoration-none" href="<?= ROOT ?>/signup"><i class="fa fa-user-plus"></i>
                <p>S'inscrire</p></a>


        <?php endif; ?>
        <?php if (Auth::logged_in()): ?>
            <table class="table table-striped table-hover">
                <thead>
                <tr><h2 class="text-center">Livres Loués</h2>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th></th>
                    <th>Livres empruntés</th>
                    <th>Date de réservation</th>
                    <th>Date de retour</th>
                </tr>
                <?php if (isset($bookrows)) {
                    if ($bookrows): ?>
                        <?php foreach ($bookrows as $bookrow): ?>
                            <?php if ($bookrow->user_id == $_SESSION['USER']->firstname): ?>
                                <tr>
                                    <td><img src="<?= $bookrow->image ?>" class="img-fluid rounded-start" alt="...">
                                    </td>

                                    <td><?= $bookrow->title ?></td>
                                    <td><?= get_date($bookrow->reservation_date) ?></td>
                                    <td><?= get_date($bookrow->return_date) ?></td>
                                </tr>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    <?php endif;
                } ?>

                </tbody>
            </table>


        <?php endif; ?>


    </center>
</div>

<?php $this->view('includes/footer') ?>
