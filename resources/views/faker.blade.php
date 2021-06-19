<!DOCTYPE html>
<html>
<head>
	<title>faker</title>
</head>
<body>
<?php
$collection=collect([1, 1, 2, 2, 3, 4, 2,5,8,7,0]);

$unique=$collection->unique();

echo $unique;






$collection=collect([1, 2, 3, 4, 5, 6, 7, 8]);

$collection->unless(true, function ($collection) {
    return $collection->push(4);
});

$collection->unless(false, function ($collection) {
    return $collection->push(5);
});

echo $collection;
?>
</body>
</html>