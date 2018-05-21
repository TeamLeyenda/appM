<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<center>
<?= Html::img('@web/img/MESCyT.jpeg',['height'=>"255"])?></center>
<div class="icemegamenu">
    <div class="ice-megamenu-toggle">
    	<ul align="center">
			
			<li><a href="home.html">Inicio</a></li>
			
			<li><a href="acceso.html">Acceso</a></li>

			<li><a>Eventos</a>
				<ul>
					<li><a  href="conferencia.html">Conferencias</a></li>
					<li><a href="registroevento.html">Registrar Eventos</a></li>
					<li><a href="estadisticas.html">Estadísticas</a></li>
					
					
				</ul>
			</li>
			
			<li><a>Información</a>
				<ul>
					<li><a href="contacto.html">Contactos</a></li>
					
				</ul>
			</li>

        </ul>
    </div>
</div>




        <!--
<div class="wrap">
    <?php
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        
    </div>
</div>
        -->
        <?= $content ?>
 </footer><!-- footer -->  
    
    
    
    <!-- copyright -->    
    <div id="copyright_area">  
        <p id="copyright">
        &copy; 2018 MESCyT-- test 
        </p>

                <div id="copyrightmenu">
        

<div class="custom"  >
	<p><span style="color: #ffffff;">
    <span style="color: #999999;">--------------------------------------------------------------------------------------------------------------</span>
    <br />Av. Máximo Gómez No. 31, esq. Pedro Henríquez Ureña, Santo Domingo, República Dominicana<br />(809) 731 1100 | Fax: 809-731-1101</span><br /><span style="color: #ffffff;">
        <!-- This email address is being protected from spambots. -->
    <span class="cloaked_email ep_ae4919d3"><span data-ep-b7f95=".d&#111;" data-ep-a4b10="i&#110;&#102;">
        <span data-ep-b7f95="&#103;&#111;b" data-ep-a4b10="&#111;&#64;&#109;"><span data-ep-a4b10="&#101;sc" data-ep-b7f95="&#121;&#116;&#46;"></span></span></span></span>
    </span></p></div>
        </div>
                <a href="#" class="scrollup" style="display: inline; ">Go Top</a>
    </div><!-- copyright --> 
</div><!-- Container --> 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
