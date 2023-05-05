<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Тестовое</title>
    </head>
    <body>
        <form name="form" method="post">
            <div>
                <div class="bottom_form_block">
                    <button name="btn" type="submit">Display</button>
                </div>
            </div>
        </form>
    </body>
</html>

<style>
    .head_form_block > *:not(:first-child){
        margin-top: 15px;
    }
    .bottom_form_block{
        margin-top: 20px;
        margin-left: 100px;
    }
    form{
        margin-bottom: 15px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php

    if(count($_POST)>0)
        if(isset($_POST['btn'])){
            getShapeCornersCount('circle');
        }

    function getShapeCornersCount(...$shapes){
        $shape = "";
        for($i = 0; $i < count($shapes); $i++){
            switch ($shapes[$i]) {
                case 'square':
                    $shape .= $shapes[$i]." - 4 ";
                    break;
                case 'circle':
                    $shape .= $shapes[$i]." - 0 ";
                    break;
                default:
                    $shape .= $shapes[$i]." - not defined ";
                    break;
            }
        }
        echo $shape;
    }
?>
