<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php');?>
        <?php if( $message ){ ?>
          <div class="alert alert-success" role="alert">
            <?php print $message;?>
          </div>
        <?php }else{ ?>
          <h1>Добавить новый расчет</h1>
          <form action="/secret/create" method="post">
              <div class="form-group">
                <label for="">Название расчета</label>
                <input type="text" class="form-control" name="title" placeholder="Название расчета" value="<?=$title?>">
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Расчет</label>
                <textarea class="form-control" name="body" rows="10" id="" placeholder="Внесите ваш расчет"><?=$body?></textarea>
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
