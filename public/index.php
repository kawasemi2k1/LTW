Chuong trinh tinh binh phuong cua 1 so
<?php
    $title = "My web page"
?>
<html>
<head>
    <title>
        <?=$title?>
    </title>
</head>
<body>
<h1>
    <?=$title?>
</h1>
<p>kimi no namae wa?</p>

<?php
print ("Midori desu. Yoroshikune!\n");
?>
1 + 1 = <?php print((1 + 1) . ("<br/>")); ?>
<?php
    $a = readline("<br/>Nhap a: ");
$a = 5;
if ($a > 0) {
    print("<p>a^2 = " . ($a * $a) . "</p>");
}

$a = true;
print("<p>a = " . $a . "</p>");
$a = 1.234560000001;
print("<p>a = " . $a . "</p>");
$a = "mada shiranai";
print("<p>a = " . $a . "</p>");

$a = '12';
$b = "       20";
$e = "3   asb       20";
$c = $a + $b;
$d = $a.$b;
print($c."<br/>");
print($d."<br/>");
print($a.$e."<br/>");

$x = -10.01234567890123456789; // Dưới đây là 4 lệnh in tương đương nhau
print($x."<br/>");
print $x."<br/>";
echo $x."<br/>"  ;
echo ($x);

printf("<br/>%.3f", $x);
$a = "<br/>I say: \"Hello\".";
$b = 'I like "ringo"';
print ($a);
print("\n");
print($b);

$x = 47.8;
$a = "<br/>My weight is ${x}kg.";
print($a);

$x = "Hello";
$y = "Thuy";
print("<br/>$x chị $y");




?>
</body>
</html>
