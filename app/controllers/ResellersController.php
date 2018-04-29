<?php

class ResellersController
{
  private $model;
  private $view;

  public function __construct()
  {
    $this->model = new ResellerModel();
    $this->view = new ResellerView();
  }

  public function actionList()
  {
    $this->view->renderList();
  }

  public function actionShow($id)
  {
    $this->view->renderReseller($id);
  }
}

 ?>
