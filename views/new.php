<?php
include('_header.php');
?>
    <div class="row">
        <?php include('errors.php')?>
        <h1>Добавить новый расчет</h1>
        <form action="/secret/create" method="post">
            <div class="form-group">
              <label for="">Название расчета</label>
              <input type="text" class="form-control" name="title" placeholder="Название расчета">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Расчет</label>
              <textarea class="form-control" name="body" rows="10" id="" placeholder="Внесите ваш расчет"></textarea>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
<?php
include('_footer.php');
