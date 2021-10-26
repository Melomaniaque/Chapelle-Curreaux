<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid">

    <form method="post">
        <div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px);">

            <h3 class="text-center">Ajouter un livre</h3>

            <?php if (count($errors) > 0): ?>
                <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                    <strong>Errors:</strong>
                    <?php foreach ($errors as $error): ?>
                        <br><?= $error ?>
                    <?php endforeach; ?>
                    <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </span>
                </div>
            <?php endif; ?>


            <input class="my-2 form-control" value="<?= get_var('title') ?>" type="title" name="title"
                   placeholder="Titre">

            <input class="my-2 form-control" value="<?= get_var('image') ?>" type="text" name="image"
                   placeholder="image">
            <label for="releaseDate">date de sortie</label>
            <input class="my-2 form-control" value="<?= get_var('releaseDate') ?>" type="date" name="releaseDate" id="releaseDate"
                   placeholder="date de sortie">


            <textarea class="form-control" value="<?= get_var('description') ?>" type="description" name="description" rows="3" placeholder="Description"></textarea>

            <input class="my-2 form-control" value="<?= get_var('author') ?>" type="author" name="author"
                   placeholder="Autheur">

            <select class="my-2 form-control" name="gender">
                <option <?= get_select('gender', '') ?> value="">Choix du genre</option>
                <option <?= get_select('gender', 'roman') ?> value="roman">Roman</option>
                <option <?= get_select('gender', 'bd') ?> value="bd">Bandes déssinées</option>
                <option <?= get_select('gender', 'bienetre') ?> value="bienetre">Bien être</option>
                <option <?= get_select('gender', 'literature') ?> value="literature">Literature</option>
            </select>

            <select class="my-2 form-control" name="available" style="background: transparent; border: none">
                <option <?= get_select('available','available') ?> value="available" selected >disponible</option>
            </select>

            <br>
            <button class="btn btn-primary float-end">Ajouter ce livre<i class="fas fa-cloud-upload-alt"></i> </button>
            <a href="<?= ROOT ?>/catalog">
                <button type="button" class="btn btn-danger"><i class="fa fa-home"></i> Retour</button>
            </a>
        </div>
    </form>

</div>
<?php var_dump($_POST); ?>
<?php $this->view('includes/footer') ?>
