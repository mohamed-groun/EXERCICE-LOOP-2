<table border=1>
    <?php for ($i = 1;$i < 10;$i++) { ?>
    <tr>
        <?php for ($j = 1;$j < 10;$j++) {
        if (($i == 1)|| ($j==1)) { ?>
            <td bgcolor=yellow> <?php echo $i * $j ?>  </td>
            <?php }

            else { ?>
            <td bgcolor=red> <?php echo $i * $j ?>  </td> <?php } ?>
        <?php } ?>
    </tr>
<?php } ?>
