<?php include_once '..\Class\View.php'; include_once '..\Class\Model.php'; include_once '..\Class\Controller.php';
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();