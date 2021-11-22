<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo e sanitizando
$nomeremetente    = htmlspecialchars($_POST['name-form'], ENT_QUOTES);
$emailremetente   = 'no-reply@blancmarketingdigital.com.br';
$telefone      	  = htmlspecialchars($_POST['cellphone-form'], ENT_QUOTES);
$email            = htmlspecialchars($_POST['email-form'], ENT_QUOTES);
$quantia          = htmlspecialchars($_POST['quantia-form'], ENT_QUOTES);
$cidade           = htmlspecialchars($_POST['city-form'], ENT_QUOTES);
$url              = htmlspecialchars($_POST['url-form'], ENT_QUOTES);
$emailatt_cliente = 'franquia@brimportx.com';
$emailatt_leads   = 'leads@blancmarketingdigital.com.br';

/* =-=-=-= Informações base do e-mail (enviada para todos os destinatários) =-=-=-=*/
$corpoHTML = '<strong>Formulário de Contato</strong>

<p><b>Nome:</b>                     '.$nomeremetente.'  </p>
<p><b>E-mail:</b>                   '.$email.'          </p>
<p><b>Telefone:</b>                 '.$telefone.'       </p>
<p><b>Cidade:</b>                   '.$cidade.'         </p>
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
$envio_cliente  = mail($emailatt_cliente,"[Lead] BR ImportX", $corpoHTML, $header_cliente);

// Envio para o e-mail de leads
$corpoHTML_leads = $corpoHTML . '<p><b> URL do Lead: </b>' .$url.' </p> <hr>';

$header_leads    = $headers . "Return-Path: $emailatt_leads \r\n";
$envio_leads     = mail($emailatt_leads,"[Lead] BR ImportX", $corpoHTML_leads, $header_leads); 


if($envio_cliente && $envio_leads) {
  echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada
}

?>
