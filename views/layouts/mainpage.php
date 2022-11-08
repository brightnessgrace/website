<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<!DOCTYPE html>
<div class="container">
<div id = "upper-link">
    upper link
</div>

<div id="logo">

  logo
</div>


<div id="navbar">

    nav bar

</div>
<body>
<div id="banner">

    banner goes here

</div>

<div id="second-banner">

    second banner

</div>


<div id="footer">

</div>
</body>
</div>
</html>

<?php


$this->registerCssFile('@web/css/main.css', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
?>






