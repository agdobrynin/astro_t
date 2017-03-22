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
                    <?php foreach ($calculates as $calculate) {
                        ?>
                        <tr class="active ">
                            <td><a href="#<?=$calculate['id']?>"><?=$calculate['name']?></a></td>
                            <td><?=$calculate['secret_code']?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <div id="Modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
    </div>
<?php
include('_footer.php');
