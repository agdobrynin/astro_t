<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php');?>
        <h1><?= $title?></h1>
            <?php if(count($calculates)){?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th class="">Название</th>
                        <th class="">Секретные коды</th>
                    </tr>
                    <?php foreach ($calculates as $id=>$calculate) {
                        ?>
                        <tr class="active ">
                            <td><a href="#<?=$id?>"><?=$calculate?></a></td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <?php } ?>
    </div>
<?php
include('_footer.php');
