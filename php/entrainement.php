<?php

/*

Types scalaires:
- Integer => entiers
- Double/float => réels, décimaux
- String => chaines de caractères
- Boolean => true/false

Types composés:
- Ressouce
- Object
- Array
*/

//Integer
$a = 127;
echo gettype($a);

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}
?>
<style>
	body{background-color: <?php echo random_color(); ?>;
		height: 50px;};
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>