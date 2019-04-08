<?php
include "quadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    $root1 = null;
    $root2 = null;
}
?>

<form>
    <h2> Giải phương trình bậc hai</h2>
    <span><?php echo $a ?></span>
    <label>x<sup>2</sup> + </label>
    <span><?php echo $b ?></span>
    <label>x + </label>
    <span><?php echo $c ?></span>
    <label>= 0 </label><br>
    <br>
    <input type="submit" name="submit" value="Tính">
</form>
<?php
if ($a != 0) {
    if ($quadraticEquation->getDelta() > 0) {
        $root1 = $quadraticEquation->getRoot1();
        $root2 = $quadraticEquation->getRoot2();
        echo "Nghiệm 1:  " . $root1 . "<br/>";
        echo "Nghiệm 2:  " . $root2;
    } else if ($quadraticEquation->getDelta() == 0) {
        $root1 = $quadraticEquation->getExprience();
        echo "Nghiệm kép: " . $root1;
    } else if ($quadraticEquation->getDelta() < 0) {
        echo "Phương trình vô nghiệm";
    }
} else {
    echo "Không phải phương trình bậc hai";
}
?>