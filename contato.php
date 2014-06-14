<?php
require_once("header.php");

function anti_injection($sql)
{
    // remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
    $sql = trim($sql);//limpa espaços vazio
    $sql = strip_tags($sql);//tira tags html e php
    $sql = addslashes($sql);//Adiciona barras invertidas a uma string
    return $sql;
}

if ($_POST['acao'] == 'contato') {
    $nome = strip_tags(trim($_POST['nome']));
    $email = strip_tags(trim($_POST['email']));
    $assunto = strip_tags(trim($_POST['assunto']));
    $mensagem = strip_tags(trim($_POST['mensagem']));
    
    $nome = anti_injection($nome);
    $email = anti_injection($email);
    $assunto = anti_injection($assunto);
    $mensagem = anti_injection($mensagem);
    

    if (empty($nome)) {
        echo "<script>alert('O campo Nome não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo "<script>alert('O campo E-mail está inválido');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($email)) {
        echo "<script>alert('O campo E-mail não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($assunto)) {
        echo "<script>alert('O campo Assunto não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($mensagem)) {
        echo "<script>alert('O campo Mensagem não pode ficar em branco');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        require("phpMailer/class.phpmailer.php");
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();

        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        //$mail->Host = "localhost"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
        $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $mail->Username = 'contato@artesdoceara.com.br'; // Usuário do servidor SMTP (endereço de email)
        $mail->Password = 'cont*078aQw1'; // Senha do servidor SMTP (senha do email usado)
        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = $email; // Seu e-mail
        $mail->Sender = $email; // Seu e-mail
        $mail->FromName = "Fale Conosco. Web-Site Artes do Ceará"; // Seu nome
        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress('contato@artesdoceara.com.br', 'Artes do Ceará');
        $mail->AddAddress('contato@artesdoceara.com.br');
        //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
        //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->Subject = $assunto; // Assunto da mensagem
        $mail->Body = $mensagem;

        // Define os anexos (opcional)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        //$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
        // Envia o e-mail
        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        // Exibe uma mensagem de resultado
        if ($enviado) {
            echo "<script>alert('E-mail enviado com sucesso. Em Breve entraremos em contato para melhores informações.');</script>";
            echo "<script>history.back();</script>";
        } else {
            echo "<script>alert('Não foi possível enviar. Tente novamente mais tarde.');</script>";
            echo "<script>history.back();</script>";
            echo "Informações do erro: 
" . $mail->ErrorInfo;
        }
    }
}
?>
<div class="main">
    <!--=======content================================-->

    <div class="content"><div class="ic"></div>
        <div class="container_12">
            <div class="grid_9">
                <h2>Encontre-nos!</h2>
                <div class="map">
                    <figure class="img_inner fleft">
                        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=m&amp;q=Rua+Prudente+de+Moraes,+293,+Porto+Uni%C3%A3o+&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Prudente+de+Moraes,+293,+Porto+Uni%C3%A3o+-+Santa+Catarina,+89400-000,+Rep%C3%BAblica+Federativa+do+Brasil&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?t=m&amp;q=Rua+Prudente+de+Moraes,+293,+Porto+Uni%C3%A3o+&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Prudente+de+Moraes,+293,+Porto+Uni%C3%A3o+-+Santa+Catarina,+89400-000,+Rep%C3%BAblica+Federativa+do+Brasil&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
                    </figure>
                    <address>
                        <dl>
                            <dt>
                            Rua Prudente de Moraes, 293 / Centro <br>
                            Porto União – SC
                            </dt>
                            <dd><span>Telefone:</span>(42) 3522- 28.41</dd>
                            <dd><span>Celular:</span>(42) 9804-88.68 </dd>
                            <dd>E-mail: <a href="mailto:contato@artesdoceara.com.br?Subject=Hello%20again" class="link-1" title="Contato Artes Ceará">contato@artesdoceara.com.br</a></dd>
                        </dl>
                </div>
            </div>
            <div class="grid_3">
                <h2>Contato</h2>
                <form id="form" action="" method="post">
                    <input type="hidden" name="acao" value="contato"/> 
                    <div class="success_wrapper">
                        <fieldset>
                            <label class="nome">
                                <span>
                                    <strong>* Seu nome Completo:</strong>
                                </span><br />
                                <input type="text" name="nome" class="input" id="nome" placeholder="Digite o seu nome">
                            </label><br />
                            <label class="email">
                                <span>
                                    <strong>* Seu E-mail:</strong>
                                </span><br />
                                <input type="email" name="email" class="input" id="email" placeholder="Digite o seu E-mail">
                            </label><br />
                            <label class="assunto">
                                <span>
                                    <strong>* Seu Assunto:</strong>
                                </span><br />
                                <input type="text" name="assunto" class="input" id="assunto" placeholder="Digite o seu Assunto">
                            </label><br />
                            <label class="mensagem">
                            <span>
                                <strong>* Sua Mensagem:</strong>
                            </span><br />
                            <textarea name="mensagem" cols="1" rows="1" id="mensagem" placeholder="Digite a sua mensagem"></textarea>
                            </label>
                            <div class="clear"></div>
                            <input type="submit" name="enviar" value="enviar" class="btn-input"/> <input type="reset" name="limpar" value="Limpar" class="btn-input"/>
                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!--=======bottom================================-->
    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_2 prefix_2">
                <ul>
                    <li><a href="blusas.php" title="Blusas">Blusas</a></li>
                    <li><a href="lingerie.php" title="Lingerie">Lingerie</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="toalhas.php" title="Toalhas">Toalhas</a></li>
                    <li><a href="tapetes.php" title="Tapeçaria">Tapeçaria</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="lencol.php" title="Lençol">Lençol</a></li>
                    <li><a href="doces.php" title="Doces">Doces</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h4>Contato:</h4>
                TEL:(42) 3522- 28.41<br><a href="mailto:contato@artesdoceara.com.br?Subject=Hello%20again" title="Contato">contato@artesdoceara.com.br</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>