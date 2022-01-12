<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];
$toyota = [
    'model' => 'Corolla',
    'speed' => 130,
    'doors' => 4,
    'year' => '2014'
];
$opel = [
    'model' => 'Vectra',
    'speed' => 100,
    'doors' => 3,
    'year' => '2011'
];
$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];?>
<table>
<?php foreach ($cars as $car => $carInfo) {?>
    <tr>
        <td>CAR</td>
        <td colspan="3"><?php echo $car?></td>
    </tr>
    <tr>
    <?php foreach ($carInfo as $carOption) {?>
        <td><?php echo $carOption?></td>
    <?php }?>
    </tr>
<?php }?>
</table>
