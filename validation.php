<?php 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST , 'telefone' , FILTER_VALIDATE_INT);
    $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);

    $to = 'natnael.ilha1@gmail.com';
    $subject = 'Novo contato mpelo site';
    $message = "Nome : $nome \n
                Telefone : $telefone\n
                Mensagem : $texto
                ";
    $headers = 'natanael.ilha1@gmail.com' . "\r\n" .
    'Reply-To: natanael.ilha1@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $enviarEmail = mail($to, $subject, $message , $headers);

    if ($enviarEmail){
        echo " email enviado com sucesso";
    }else{
        echo "erro ao enviar a mensagem";
    }
?>  