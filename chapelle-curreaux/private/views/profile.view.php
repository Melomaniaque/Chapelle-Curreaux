<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px);"">

<?php if (isset($row)) {
    if ($row):?>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <h3 class="text-center"><?= esc($row->firstname) ?> <?= esc($row->lastname) ?></h3>
            </div>
            <div class="col-sm-8 col-md-9 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>Prénom:</th>
                        <td><?= esc($row->firstname) ?></td>
                    </tr>
                    <tr>
                        <th>Nom:</th>
                        <td><?= esc($row->lastname) ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?= esc($row->email) ?></td>
                    </tr>
                    <tr>
                        <th>Date de naissance:</th>
                        <td><?= get_date($row->birthdate) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>

    <?php else: ?>
        <center><h4>That profile was not found!</h4></center>

    <?php endif;
}?>

</div>

<?php $this->view('includes/footer') ?>

