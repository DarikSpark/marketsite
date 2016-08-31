<?php


// $to = "aidar.gml@gmail.com";
// $tema = "Заявка на обратный звонок";
// $message = "Заявка на обратный звонок для заказа гироскутера";
    
// mail($to, $tema, $message);



$t = "sinnapsteam@yandex.ru";
$tem = "Заявка на обратный звонок. Телефон: ".$_POST['phone'];
$messag .= "\n\nИмя клиента: ".$_POST['name'];
$messag .= "\n\nE-mail клиента: ".$_POST['email'];
$messag .= "\n\nНомер телефона (клиента): ".$_POST['phone'];
$messag .= "\n\nCообщение: ".$_POST['message'];
$messag .= "\n\nPage: ".$_POST['page'];


mail($t, $tem, $messag);

?>




