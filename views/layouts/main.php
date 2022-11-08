<?php
//use app\assets\AppAsset;

/** @var yii\web\View $this */
/** @var string $content */

//AppAsset::register($this);

?>
<!DOCTYPE html>
<div class="container">
    <header>
<div id = "upper-link">
    upper link
</div>

<div id="logo">

  logo
</div>
    </header>

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
<footer>


</footer>
</div>
</body>
</div>
</html>

<?php $style= <<< CSS

   .container{
       background: #0a53be;
   }

 CSS;
$this->registerCss($style);
?>







