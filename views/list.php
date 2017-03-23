<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php');?>
        <h1><?= $title?></h1>
            <?php if(count($calculates)){?>
              <?php include('calcs_table.php'); ?>
            <?php } ?>
            <?php include('modal.php'); ?>
    </div>
<?php
include('_footer.php');
