<?php
include 'PhpImap\Mailbox.php';
include 'PhpImap\IncomingMail.php';

$mailbox = new PhpImap\Mailbox('{a2plcpnl0303.prod.iad2.secureserver.net:993/imap/ssl}INBOX', 'jorge@leafweb.com.br', 'WolV@972');
$mails = array();

$mailsIds = $mailbox->searchMailbox('ALL');
if (!$mailsIds) {
    die('Mailbox is empty');
}

$mailId = reset($mailsIds);
$mail = $mailbox->getMail($mailId);

var_dump($mail);
var_dump($mail->getAttachments());
echo "<p>De: " . $mail->fromAddress . " - " . $mail->date . "</p>"; 
echo "<p>Assunto: " . $mail->textPlain . "</p>";
echo "<p>Mensagem: " . $mail->textHtml . "</p>";