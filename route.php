关于YII2如何修改默认控制器的问题

以前Yii1学了个皮毛就没去管了，现在想重新捡起来Yii2.0.2却出来了，于是搭建好环境来学习。

安装好Yii2后第一个想到的问题就是修改默认的控制器了。

按照网上所说，终于在/vendor/yiisoft/yii2/web/Application.php的第28行找到了：

public $defaultRoute = 'site'; 

但改框架源码我总感觉不好，最好找到了自己扩展的配置文件在/config/web.php。

于是在 $conifg=[] 里添加了一行代码： 'defaultRoute' => 'index', 。

这样，我的项目的默认控制器就从Yii默认的site变成了我想要的index了。