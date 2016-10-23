   $news = Article::find()
            ->active()
            ->andWhere(['<>', 'cover', ''])
            ->orderBy(['id' => SORT_DESC])
            ->limit(40)
            ->all();