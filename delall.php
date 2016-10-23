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



//视图部分 

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
	//参考地址
//http://www.manks.top/article/yii2_gridview_deleteall  
// 问号 和 and 符号   有蹊跷
    $.post("delall?id="+keys);
    $.post("delall&id="+keys);