<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid">

    <form method="post">
        <div class="p-4 mx-auto mr-4 shadow blur bg-secondary bg-opacity-10" style="margin-top: 50px;width:100%;max-width: 340px;background-color: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(12px);">

            <center><h1 style="font-family: 'Ephesis', cursive;">Chapelle Curreaux</h1></center>
            <center><h2 style="font-family: 'Ephesis', cursive;">devenir membre</h2></center>

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

            <input class="my-2 form-control" value="<?= get_var('firstname') ?>" type="firstname" name="firstname"
                   placeholder="Prénom">
            <input class="my-2 form-control" value="<?= get_var('lastname') ?>" type="lastname" name="lastname"
                   placeholder="Nom de famille">
            <input class="my-2 form-control" value="<?= get_var('email') ?>" type="email" name="email"
                   placeholder="Email">
            <label for="birthdate">date de naissance<input class="my-2 form-control"
                                                           value="<?= get_var('birthdate') ?>" type="date"
                                                           name="birthdate"></label>

            <input class="my-2 form-control" value="<?= get_var('adress') ?>" type="adress" name="adress"
                   placeholder="adresse">
            <input class="my-2 form-control" value="<?= get_var('password') ?>" type="password" name="password"
                   placeholder="mot de passe">
            <input class="my-2 form-control" value="<?= get_var('password2') ?>" type="text" name="password2"
                   placeholder="retaper le mdp">
            <br>
            <button class="btn btn-primary float-end">S'inscrire <i class="fas fa-cloud-upload-alt"></i></button>
            <a href="<?= ROOT ?>/users">
                <button type="button" class="btn btn-danger"><i class="fa fa-home"></i> Retour</button>
            </a>
        </div>
    </form>

</div>
<?php $this->view('includes/footer') ?>
