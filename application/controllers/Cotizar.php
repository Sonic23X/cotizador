<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //mongo_db
    $this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');

    $this->load->model('Calc');
  }

  function index()
  {
    $this->load->view('common/head');
    $this->load->view('common/nav');

    $this->load->view('forms/body');
    //modal
    $this->load->view('modals/tutorial');

    $this->load->view('common/footer');
  }

  function Calculo()
  {
    $post = $this->input->post();
    $precio = 0;

    $id_usuario = $this->Calc->InsertUser($post['nombre'], $post['email'], $post['tel'], $post['direccion'], $post['tipo_con']);
    $capacidad = $this->Calc->Calculo($post['anterior'], $post['actual'], $post['periodo']);

    $paneles_320 = ceil($this->Calc->Paneles_320($capacidad));
    $precio = $paneles_320 * 144;

    $this->Calc->InsertConsume($precio, $paneles_320, $id_usuario);

    echo base_url('Cotizar/Result/' . $id_usuario);

  }

  function Email($usuario =  null)
  {
    if($usuario != null)
    {
      $this->load->library('email'); //libreria nativa de codeigniter para enviar correos
      $email = "contacto@mercadosolar.com.mx";

      $htmlContent = '<center>';
      $htmlContent .= '<h1>Cotizadoción recibida</h1>';
      $htmlContent .= '<p>Revise el PDF anexado con los datos</p>';
      $htmlContent .= '</center>';

      $config['mailtype'] = 'html';
      $this->email->initialize($config);
      $this->email->to($email);
      $this->email->from('noreply@mercadosolar.com.mx');
      $this->email->subject('Cotizadoción recibida');
      $this->email->message($htmlContent);
      $this->email->attach($_SERVER['DOCUMENT_ROOT'] . '/solar/cotizador/resources/pdf/'.$usuario.'.pdf'); //anexar pdf
      $this->email->send();

      return true;
    }
    else
    {
      return false;
    }
  }

  function PDF($usuario = null)
  {
    if($usuario != null)
    {
      $this->load->library('NumeroALetras');
      $url = "D:/xampp/htdocs/solar/cotizador/resources/HTML2PDF/html2pdf.class.php";
      require_once($url);

      $user = $this->Calc->SearchUser($usuario);
      $consume = $this->Calc->SearchConsume($usuario);

      ob_start();
      $this->load->view('pdf/pdf1.php', $user[0]);
      $this->load->view('pdf/pdf2.php', $consume[0]);
      $content = ob_get_clean();

      try
      {
          $html2pdf = new Html2Pdf('P', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
          $html2pdf->pdf->SetDisplayMode('fullpage');
          $html2pdf->writeHTML($content);
          ob_get_clean();
          $html2pdf->Output('Cotizacion.pdf', 'I'); //nombre del PDF para el cliente
          //guardar PDF en servidor
          $html2pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/solar/cotizador/resources/pdf/'.$usuario.'.pdf', 'F');
          return true;
      }
      catch(HTML2PDF_exception $e) {
          return false;
      }
    }
    else
      header('Location: ' . base_url());
  }

  function Result($usuario = null)
  {
    if($usuario != null)
    {
      $this->load->view('common/head');
      $this->load->view('common/nav');

      $pedido = $this->Calc->SearchConsume($usuario); //buscar cliente en mongoDB

      $data = array('dinero' => $pedido[0]['costo'], 'panel_320' => $pedido[0]['paneles320'], 'folio' => $usuario);
      $this->load->view('forms/result', $data);

      //modal de bootstrap
      $this->load->view('forms/alert');

      $this->load->view('common/footer');
    }
    else
      header('Location: ' . base_url());

  }

}
