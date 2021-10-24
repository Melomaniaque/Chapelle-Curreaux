<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto m-5" style="max-width: 1000px;background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px);">
<?php if (!empty($rows)) {
    if ($rows):?>
        <div class="card-group justify-content-center">
            <form method="post">
                <h3 class="text-center m-5">Confirmation de l'emprunt de <?php foreach ($rows as $row): ?><?= $row->title?><?php endforeach;?>
                </h3>
                <?php if (!empty($errors)) {
                    if (count($errors) > 0):?>
                        <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                            <strong>Errors:</strong>
                            <?php foreach ($errors as $error): ?>
                                <br><?= $error ?>
                            <?php endforeach; ?>
                            <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </span>
                        </div>
                    <?php endif;
                } ?>

                <select class="my-2 form-control" name="available" style="background: transparent; border: none;display: none;">
                    <option <?= get_select('available', 'borrow') ?> value="borrow" selected>oui</option>
                </select>
                <a href="<?= ROOT ?>/catalog/edit">
                    <input class="btn btn-primary float-end" type="submit" value="Reserver">
                </a>
                <a href="<?= ROOT ?>/catalog">
                    <input class="btn btn-danger" type="button" value="Retour">
                </a>

            </form>


        </div>
    <?php else: ?>

        <div style="text-align: center;">
            <h3>That school was not found!</h3>
        </div>
    <?php endif;

} ?>



<?php $this->view('includes/footer') ?>
