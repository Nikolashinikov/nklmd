<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKL Mídias Digitais</title>
</head>
<body>
    <?php
        $nome=$_POST["nome"];
        $telefone=$_POST["cel"];
        $email=$_POST["email"];
        $select=$_POST["servico"];
        
        
        $mensagem= 'Seu pedido foi enviado através do formulário abaixo:<br><br>';
        $mensagem.='<b>Nome: </b>'.$nome.'<br>';
        $mensagem.='<b>Email:</b> '.$email.'<br>';
        $mensagem.='<b>Telefone:</b> '.$telefone.'<br>';
        $mensagem.='<b>Serviço:</b> '.$select.'<br>';
        require("phpmailer/src/PHPMailer.php");
        require("phpmailer/src/SMTP.php");
        require ("phpmailer/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP(); // Não modifique
        $mail->Host       = '...';  // SEU HOST (HOSPEDAGEM)
        $mail->SMTPAuth   = true;                        // Manter em true
        $mail->Username   = 'nklmidiasdigitais@gmail.com';   //SEU USUÁRIO DE EMAIL
        $mail->Password   = '*NKL.MD!';                   //SUA SENHA DO EMAIL SMTP password
        $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
        $mail->Port       = 25;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
        $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
        
        //Recipients
        $mail->setFrom('nklmidiasdigitais@gmail.com', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
        $mail->addAddress('nklmidiasdigitais@gmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
        // $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser
        $mail->addReplyTo($email, $nome);  //AQUI SERA O EMAIL PARA O QUAL SERA RESPONDIDO                  

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
        $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
        $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

        // $mail->send();
        if(!$mail->Send()) {
            echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('nkl.html');</script>";
        }else{
            echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('nkl.html');</script>";
        }
        die
    ?>
</body>
</html>