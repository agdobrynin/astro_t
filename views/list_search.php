<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php');?>
        <h1>Поиск расчетов по параметрам</h1>
        <div class="row">
          <form action="/list/search" method="post">
            <div class="col-md-12">
              <div class="col-md-12 help-block">Чтобы выбрать значения для одного кода введите одинаковые значения в оба поля</div>
            </div>
            <div>
              <div class="col-md-4 form-group">
                <label for="">Минимальное значение кода</label>
                <input type="text" class="form-control" name="min" placeholder="" value="<?= $min?>">
                <p class="help-block">больше или равно</p>
              </div>
              <div class="col-md-4 form-group">
                <label for="">Максимальное значение кода</label>
                <input type="text" class="form-control" name="max" placeholder="" value="<?= $max?>">
                <p class="help-block">меньше или равно</p>
              </div>
              <div class="col-md-4 form-group margin-top-18">
                <button type="submit" class="btn btn-primary">Применить</bottom>
              </div>
            </div>
          </form>
        </div>
            <?php if(count($calculates)){?>
              <?php include('calcs_table.php'); ?>
            <?php }else{ ?>
              <div class="alert alert-info" role="alert">Расчетов не найдено.</div>
            <?php } ?>
            <?php include('modal.php'); ?>
    </div>
<?php
include('_footer.php');
