<?php

require("imagecomparison.php");
$imgc = new imgCheck;

echo $imgc->check('1.png' , '2.png');

?>