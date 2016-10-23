<?= $form->field($model, 'username', [
    'template' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
    'inputOptions' => [
        'placeholder' => $model->getAttributeLabel('username'),
    ],
])?>