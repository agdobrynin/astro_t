<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php');?>
        <?php if( $message ){ ?>
          <div class="alert alert-success" role="alert">
            <?php print $message;?>
            <?php if($codes)
              print "<ol>";
              foreach ($codes as $code) {
                ?>
                <li>
                  <?=$code;?>
                </li>
                <?php
              }
              print "</ol>";
            ?>
          </div>
        <?php }else{ ?>
          <h1>Добавить новый расчет</h1>
          <form action="/secret/create" method="post">
              <div class="form-group">
                <label for="">Название расчета</label>
                <input type="text" class="form-control" name="name" placeholder="Название расчета" value="<?=$prev['name']?>">
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Расчет</label>
                <textarea class="form-control" name="body" rows="10" id="" placeholder="Внесите ваш расчет"><?=$prev['body']?></textarea>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
          </form>
        <?php } ?>
    </div>
<?php
include('_footer.php');
