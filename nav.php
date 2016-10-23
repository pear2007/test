        <?php

        $menuItems = [
            ['label' => Yii::t('app', '网站首页').' <small>Home</small>' , 'url' => ['/site/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '服务业务'), 'url' => ['/article/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '合作保障'), 'url' => ['/product/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '联系我们'), 'url' => ['peage/view','id'=>1], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '品牌街'), 'url' => ['/product/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
        ];
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav','id'=>'nav'],
            'items' => $menuItems,
            'encodeLabels' => false,      //<small>Home</small> 死他妈的搞不上去   什么编码 解码 都试过了
           
        ]);
      //  NavBar::end();
        ?>
</nav>