<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    
      <div class="alert alert-success">
        <div class="container">
        <b>Phone book app
        </div>
    </div>
    
     
 <center>


                    <a href="<?php echo Yii::$app->urlManager->createUrl('contacts') ?>">
                        <img class="img-responsive" style="height:240px" src="<?= Yii::$app->urlManager->createUrl('assets/img/smartphone.png') ?>" />Click here</a>
                </center>
  
        
    </div>
        
</div>
