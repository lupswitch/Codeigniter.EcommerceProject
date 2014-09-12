<?php
class email_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
		

    function order_confirmation()
    {
        
        
        $message    = '<P> Estimado '. $this->session->userdata('user_name').'</p>';
        $message    .='<p> Gracias por confiar en SITecnologia. Su orden sera procesada dentro de poco y nos comunicaremos con usted a la brevedad</p>';
        $message    .='<p>Su numero de orden :'.$this->session->userdata('order_id').'</p>';
        $message    .='<p><a href="'.base_url().'index.php/front/login">Ingrese a su cuenta y vea los detalles del pedido</a></p>';
        $message    .='<p> Gracias<br /> sitecnologia.com.uy</p>';
        $subject = "Gracias por comprar en @SIT";
		$email=$this->session->userdata('email');
        $this->send_email($email,$subject,$message);
        
    }
    
    function email_header()
    {
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: SITecnologia <sitecnologica@gmail.com>' . "\r\n";
            return $headers;
     }
	
    
    function send_email($email,$subject,$message)
    {
            
        $headers = $this->email_header();
        @mail($email,$subject,$message,$headers);
        
    }
	


///////// Please above this //////////////		
}