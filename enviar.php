<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente    = $_POST['name-form'];
$emailremetente   = trim($_POST['email-form']);
$telefone      	  = $_POST['cellphone-form'];
$quantia          = $_POST['quantia-form'];
$url              = $_POST['url-form'];
$emailatt_cliente = 'admin@blancmarketingdigital.com.br';
$emailatt_leads   = 'leads@blancmarketingdigital.com.br, admin@blancmarketingdigital.com.br';

/* =-=-=-= Informações base do e-mail (enviada para todos os destinatários) =-=-=-=*/
$corpoHTML = '<strong>Formulário de Contato</strong>

<p><b>Nome:</b>                     '.$nomeremetente.'  </p>
<p><b>E-Mail:</b>                   '.$emailremetente.' </p>
<p><b>Telefone:</b>                 '.$telefone.'       </p>
<p><b>Valor de investimento:</b>    '.$quantia.'        </p>
<hr>';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers  = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
/* =-=-=-= Fim das informações base do e-mail =-=-=-= */


// Envio para o e-mail do cliente
$header_cliente = $headers . "Return-Path: $emailatt_cliente \r\n";
$envio_cliente  = mail($emailatt_cliente,"Lead Holms Detetive", $corpoHTML, $header_cliente);

// Envio para o e-mail de leads
$corpoHTML_leads = $corpoHTML . '<p><b> URL do Lead: </b>' .$url.' </p> <hr>';

$header_leads    = $headers . "Return-Path: $emailatt_leads \r\n";
$envio_leads     = mail($emailatt_leads,"Lead Holms Detetive", $corpoHTML_leads, $header_leads); 


// if($envio_cliente && $envio_leads) {
//   echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada
// }

?>