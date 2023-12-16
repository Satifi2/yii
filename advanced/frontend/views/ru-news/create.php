<?php

/**   
* Team: BOSHATEAM   
* Coding by Que MingKai 2113601   
*          2023/2/5   
* Nuclear Contamination news table CRUD class   
*/

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuNews $model */

$this->title = 'Create Ru News';
$this->params['breadcrumbs'][] = ['label' => 'Ru News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ru-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
