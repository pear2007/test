<?php
	
	public function actionDelall($id)
    {
        $model  =new Book();
           if($model->deleteAll("id in ($id) ")){
               echo 'OK';
               return $this->redirect(['index']);
           }else{
               echo "err";
           }
        return $this->redirect(['index']);
    }



//��ͼ���� 

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        "options" => ["class" => "grid-view","style"=>"overflow:auto", "id" => "grid"],
        'columns' => [
                [   'class' => 'yii\grid\CheckboxColumn',
                    'name' => 'id',
                ],
 
            'id',

            'name',
             'tel',
             'mail',
             'city',
             'money',

              'status',
            'created_at:datetime',


            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]);

    $this->registerJs('
$(".gridview").on("click", function () {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    console.log(keys);
      $.post("delall?id="+keys);      
});
');


    ?>
	//�ο���ַ
//http://www.manks.top/article/yii2_gridview_deleteall  
// �ʺ� �� and ����   ������
    $.post("delall?id="+keys);
    $.post("delall&id="+keys);