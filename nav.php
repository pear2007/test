        <?php

        $menuItems = [
            ['label' => Yii::t('app', '��վ��ҳ').' <small>Home</small>' , 'url' => ['/site/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '����ҵ��'), 'url' => ['/article/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '��������'), 'url' => ['/product/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '��ϵ����'), 'url' => ['peage/view','id'=>1], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', 'Ʒ�ƽ�'), 'url' => ['/product/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
        ];
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav','id'=>'nav'],
            'items' => $menuItems,
            'encodeLabels' => false,      //<small>Home</small> ������ĸ㲻��ȥ   ʲô���� ���� ���Թ���
           
        ]);
      //  NavBar::end();
        ?>
</nav>