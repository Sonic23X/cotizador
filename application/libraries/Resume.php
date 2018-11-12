<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume {

  static private $dinero;
  static private $paneles_320;
  static private $paneles_270;

  static private $singleton;

  static private function method()
  {
    parent::__construct();
  }

  static public function &singleton()
  {
    if (!self::$singleton)
     self::$singleton = new Resume();

    return self::$singleton;
  }

  static public function set_dinero($n_dinero = null)
  {
    if($n_dinero != null)
      Resume::$dinero = $n_dinero;
  }

  static public function get_dinero()
  {
      return Resume::$dinero;
  }

  static public function set_panel_320($n_p320 = null)
  {
    if($n_p320 != null)
      Resume::$paneles_320 = $n_p320;
  }

  static public function get_panel_320()
  {
      return Resume::$paneles_320;
  }

  static public function set_panel_270($n_p270 = null)
  {
    if($n_p270 != null)
      Resume::$paneles_270 = $n_p270;
  }

  static public function get_panel_270()
  {
      return Resume::$paneles_270;
  }

}
