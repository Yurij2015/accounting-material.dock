<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Storehouse */

$this->title = Yii::t('message', 'Create Storehouse');
$this->params['breadcrumbs'][] = ['label' => Yii::t('message', 'Storehouses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="storehouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
