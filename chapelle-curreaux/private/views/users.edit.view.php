<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px);"">


    <?php if (!empty($rows)) {
        if($rows):?>
            <div class="card-group justify-content-center">
                <form method="post">
                    <h3>Voulez vous certifier </h3>

                    <?php if (!empty($errors)) {
                        if(count($errors) > 0):?>
                            <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                                <strong>Errors:</strong>
                                <?php foreach($errors as $error):?>
                                    <br><?=$error?>
                                <?php endforeach;?>
                                <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </span>
                            </div>
                        <?php endif;
                    } ?>
                    <?php foreach ($rows as $row):?>
                    <select class="my-2 form-control" name="validate" style="background: transparent; border: none">
                        <option <?= get_select('validate', 'validate') ?> value="validate" selected  ><?= $row->firstname.' '.$row->lastname;?></option>
                    </select>


                    <?php endforeach;?>
                    <a href="<?=ROOT?>/users">
                    <input class="btn btn-primary float-end" type="submit" value="Save">
                    </a>
                    <a href="<?=ROOT?>/users">
                        <input class="btn btn-danger" type="button" value="Cancel">
                    </a>

                </form>

            </div>
        <?php else: ?>

            <div style="text-align: center;">
                <h3>That school was not found!</h3>
            </div>
        <?php endif;
    } ?>



</div>

<?php $this->view('includes/footer')?>
