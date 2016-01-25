<?php
require_once('include/class.thtml.php');
$tpl = new Thtml('./mail_contact.html');
$tpl->setVariable('name','Miś uszatek');
$tpl->setVariable('phone','668751336');
$tpl->setVariable('msg','Ja bym chciał ładną stronkę opisującą co nieco o mnie. Proszę o kontakt.');
echo $tpl->getDocument();

?>