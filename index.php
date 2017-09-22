<?php
$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];
$selected = ['+', '-', '*', '/'];
$select = $_POST['select'];

$res = my_calc($num1, $num2, $select);

function my_calc($num1,$num2,$select) {
    switch ($select) {
        case '+': return $num1 + $num2; break;
        case '-': return $num1 - $num2; break;
        case '*': return $num1 * $num2; break;
        case '/': return $num1 / $num2; break;
    }
}

?>

<form action="/" method="post">

    <input type="number" name="num1" value="<?= $num1; ?>">
    <select name="select">
       <?php foreach($selected as $select): ?>
        <option><?= $select; ?></option>
       <?php endforeach; ?>
    </select>
    <input type="number" name="num2" value="<?= $num2; ?>">
    <input type="submit" value=" = ">
    <?php echo $res;?>

</form>

