<?php
class home extends Controller{

  public function index()
  {
    echo "we are in index method";
  }
  public function test($name = "",$prenom ="")
  {
    echo "Hello ".$name." ".$prenom;
  }
}
 ?>
