<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shap = new Shape();
echo $shap->getCorner(). PHP_EOL;

$reactangle = new Rectangle();
echo $reactangle->getCorner(). PHP_EOL;
echo $reactangle->getParentCorner(). PHP_EOL;