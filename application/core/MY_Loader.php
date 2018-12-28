<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Loader extends CI_Loader {
    public function template($header, $index, $footer, $vars = array()){
      $this->view($header, $vars);
      $this->view($index, $vars);
      $this->view($footer, $vars);
    }
}
?>
