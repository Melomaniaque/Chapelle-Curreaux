<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px; background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(12px);">
    

        <?php if ($row): ?>
            <div class="card-group justify-content-center">


                <form method="post">
                    <h3>Voulais vous vraiment suprimer</h3>

                    <input class="form-control text-center" style="background: transparent; border: none;" value="<?= get_var('users', $row[0]->firstname )?> <?= get_var('users', $row[0]->lastname) ?>"
                           type="text" name="users" placeholder="users"><br><br>
                    <input type="hidden" name="id">
                    <input class="btn btn-danger float-end" type="submit" value="Supprimer">

                    <a href="<?= ROOT ?>/users">
                        <input class="btn btn-success" type="button" value="retour">
                    </a>
                </form>

            </div>
        <?php else: ?>

            <div style="text-align: center;">
                <h3>That school was not found!</h3>
                <div class="clearfix"></div>
                <br><br>
                <a href="<?= ROOT ?>/schools">
                    <input class="btn btn-danger" type="button" value="Cancel">
                </a>
            </div>
        <?php endif; ?>


    </div>

<?php $this->view('includes/footer') ?>