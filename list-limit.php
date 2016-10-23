显示部分列表        
			
			<?php $goods = \common\models\Frendlink::find()->limit(8)->all();
            ?>
            <?php foreach ($goods as $k => $v): ?>
                <?= Html::a(Html::encode($v->sitetitle), $v->siteurl, ['target' => '_blank']) ?>
            <?php endforeach; ?>

显示广告

<?php  $ad=\common\models\Advertisement::findOne(['id'=>1]); echo $ad->title ?>