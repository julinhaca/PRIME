<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Recebendo os dados do formulário
$nome_do_sindico = $_POST['nome_do_sindico'];
$nome_do_condominio = $_POST['nome_do_condominio'];
$email = $_POST['Email'];
$message = $_POST['message'];
$from = 'naoresponda@prim3.com.br';
$from2 = 'comercial@prim3.com.br';

// Assunto do e-mail
$assunto = 'Proposta do Cliente';

// Carregando as credenciais do arquivo de configuração


// Instanciando o PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.prim3.com.br'; // Defina o endereço do seu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'naoresponda@prim3.com.br';// Seu usuário SMTP
    $mail->Password = 'oko~K*746|Wi'; // Sua senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Porta SMTP

  /*Ativar o modo de debug SMTP
  $mail->SMTPDebug = 2; // Nível de debug (2 para saída mais detalhada)
  $mail->Debugoutput = 'html'; // Formato de saída (html para exibir no navegador)
*/
    // Remetente e destinatário
    $mail->setFrom($from, 'Proposta do Cliente');
    $mail->addAddress($from2, 'Empresa'); // Adicione o destinatário

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Nome do Síndico: $nome_do_sindico<br>Nome do Condomínio: $nome_do_condominio<br>Email: $email<br>Mensagem: $message";
    $mail->AltBody = "Nome do Síndico: $nome_do_sindico\nNome do Condomínio: $nome_do_condominio\nEmail: $email\nMensagem: $message";

    // Enviando o e-mail
    $mail->send();
    
    // Redireciona para a página proposta.php com mensagem de sucesso
    header('Location: proposta.php?sucesso=1');
    exit();
} catch (Exception $e) {
    // Redireciona para a página proposta.php com mensagem de erro
    header('Location: proposta.php?sucesso=0');
    exit();
}

?>






