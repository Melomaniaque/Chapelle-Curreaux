<nav aria-label="breadcrumb" >
    <ol class="breadcrumb justify-content-center">
        <?php if (isset($crumbs)): ?>
            <?php foreach ($crumbs as $crumb):?>
            <li class="breadcrumb-item active"><a  href="#"> <?=$crumb[0]?></a></li>
            <?php endforeach;?>
        <?php endif;?>
    </ol>
</nav>
