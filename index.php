<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php
        spl_autoload_register(function($class){
            include_once './system/libs/'.$class.'.php';
        });
        include_once ('./app/config/confg.php');

        $main=new Main();
        // include_once ('./system/libs/DController.php');
        // include_once ('./system/libs/Database.php');
        // include_once ('./system/libs/DModel.php');
        // include_once ('./system/libs/Load.php');
        
       // include ('./app/controllers/PostController.php');
        //$post=new PostController();
       
       // $main = new Main();

        // $url=isset($_GET['url'])? $_GET['url']:NULL;
        
        // if($url!=NULL){
        //     $url=rtrim($url, '/');
        //     $url=explode('/',filter_var($url, FILTER_SANITIZE_URL));
        // }else{
        //     unset($url);
        // }



        // if(isset($url[0])){
        //     include_once ('./app/controllers/'.$url[0].'.php');
        //     $ctrlr=new $url[0]();
        //     if(isset($url[2])){
        //         $ctrlr->{$url[1]}($url[2]);
        //     }else{
        //         if(isset($url[1])){
        //             $ctrlr->{$url[1]}();
        //         }else{

        //         }
        //     }
        // }else{
        //     include_once ('./app/controllers/index.php');
        //     $index=new index();
        //     $index->homepage();
        // }

        ?>
  
</body>
</html>