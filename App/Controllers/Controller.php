<?php

namespace App\Controllers;
use Codefii\Controller\BaseController;
abstract class Controller extends BaseController
{
  public function init(){
    $this->setHeader("header");
    $this->setFooter('footer');
  }
}
