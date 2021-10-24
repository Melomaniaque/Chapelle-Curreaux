<style>
    nav ul li a  {
        width: 110px;
        text-align: center;

    }

    nav ul li p a:hover {
        background-color: #37371F;

    }
</style>
<nav class="navbar navbar-expand-lg flex-column navbar-light  p-3" >
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="<?= ROOT ?>"><h1>Chapelle Curreaux</h1></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active text-light" aria-current="page" href="<?= ROOT ?>/"><i class="fa fa-home"></i><p>Accueil</p></a>
                </li>
                <?php if(Auth::getRank() == 'employee'):?>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="<?= ROOT ?>/users"><i class="fa fa-user-friends"></i> <p>Membres</p></a>
                    </li>
                <?php endif;?>

                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= ROOT ?>/catalog"><i class="fa fa-book"></i> <p>Catalogue</p></a>
                </li>



            </ul>
            <ul class="navbar-nav ms-auto ">
                <?php if (Auth::logged_in()):?>
                <li class="nav-item dropdown" >
                    <a class="nav-link mx-3 dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false"><h1 style="color: #D79A10;"><?= Auth::user() ?></h1></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/profile/<?= $_SESSION['USER']->user_id ?>">Profil</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>">Accueil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/logout">Déconnecter</a></li>
                    </ul>
                </li>
                <?php else:?>
                <li class="nav-item ">
                    <a class="nav-link mx-3 text-light" href="<?= ROOT ?>/login"><i class="fa fa-user-circle"></i><p>Connexion</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 text-light" href="<?= ROOT ?>/signup"><i class="fa fa-user-plus"></i> <p>S'inscrire</p></a>
                </li>
                <?php endif;?>


            </ul>
        </div>
    </div>
</nav>