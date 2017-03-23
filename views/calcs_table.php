<div class="table-responsive">
    <table class="table table-hover">
        <tr>
            <th class="">Название</th>
            <th class="">Секретные коды</th>
        </tr>
        <?php foreach ($calculates as $calculate) {
            ?>
            <tr class="active ">
                <td><a class="loadCalc" href="/calcshow?id=<?=$calculate['id']?>"><?=$calculate['name']?></a></td>
                <td><?=$calculate['secret_code']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
