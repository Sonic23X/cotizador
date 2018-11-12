<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');
  }

  function Calculo($ant = null, $act = null, $periodo = null)
  {
    $kwhd = 0;
    $pico = 4.5;

    if($periodo == 1)
      $kwhd = ($act - $ant) / 31;
    else
      $kwhd = ($act - $ant) / 61;

    $capacidad = $kwhd / $pico;

    if($capacidad < 0)
      $capacidad *= -1;

    return $capacidad;
  }

  function Paneles_320($capacidad = null)
  {
    if($capacidad != null)
    {
      $paneles_320 = $capacidad / .320;
      return $paneles_320;
    }
    return null;
  }

  function SearchConsume($user = null)
  {
    if($user != null)
    {
      $this->mongo_db->where('cliente', $user);
      $res = $this->mongo_db->get('consume');
      return $res;
    }
    else
      return null;
  }

  function SearchUser($user = null)
  {
    if($user != null)
    {
      $this->mongo_db->where('_id', new MongoDB\BSON\ObjectID("$user"));
      $res = $this->mongo_db->get('user');
      return $res;
    }
    else
      return null;
  }

  function InsertUser($nombre = null, $correoElectronico = null, $telefono = null, $direccion = null, $tarifa = null)
  {
    if ($nombre != null && $correoElectronico != null && $telefono != null &&  $direccion != null && $tarifa != null)
    {
      $res = $this->mongo_db->insert('user', array('nombre' => $nombre, 'correoElectronico' => $correoElectronico,
                                            'telefono' => $telefono, 'direccion' => $direccion, 'tarifa' => $tarifa));
      return json_decode(json_encode($res), true)['_id']['$id']; //obtener id que asigna mongod
    }
    else
      return null;
  }

  function InsertConsume($dinero = null, $paneles_320 = null, $cliente = null)
  {
    $res = $this->mongo_db->insert('consume', array('costo' => $dinero, 'paneles320' => $paneles_320,
                                                    'cliente' => $cliente));
    return $res;
  }

}
