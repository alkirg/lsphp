<style>
    table { border-collapse: collapse; border-right: 1px solid black; }
    td { border-left: 1px solid black; padding: 5px; }
</style>
<table>
<?php for ($i = 1; $i <= 10; $i++) {?>
    <tr>
        <?php for ($j = 1; $j <= 10; $j++) {?>
        <?php if ($i % 2 == 0 && $j % 2 == 0) {?>
        <td><?php echo $j?> &#10060; <?php echo $i?> = (<?php echo $j * $i?>)</td>
        <?php } elseif ($i % 2 == 1 && $j % 2 == 1) {?>
        <td><?php echo $j?> &#10060; <?php echo $i?> = [<?php echo $j * $i?>]</td>
        <?php } else {?>
        <td><?php echo $j?> &#10060; <?php echo $i?> = <?php echo $j * $i?></td>
        <?php }
        }?>
    </tr>
<?php }?>
</table>