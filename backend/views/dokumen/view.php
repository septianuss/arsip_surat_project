<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Dokumen;

/* @var $this yii\web\View */
/* @var $model backend\models\Dokumen */

$this->title = $model->nama_dokumen;
$this->params['breadcrumbs'][] = ['label' => 'Dokumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<div class="dokumen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
           <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // /'id',
            'nama_dokumen',
            'letakKu.letak_penyimpanan',
            'tahun',
        ],
    ]) ?>
    <div class="gambar" style="text-align: center">
      <a href="unduh?id=<?=$model->id?>">
        <img src="<?= Yii::getAlias('@web/uploads/') ?>file.png" alt="User Image" height="100">
    <h3>Download File: <?=$model->file_url;?> </h3> <br>
      </a>
    </div>
</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>