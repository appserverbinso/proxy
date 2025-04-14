<?php
$data = file_get_contents("php://input");
$webhook = "https://discordapp.com/api/webhooks/1359574788691198033/--VymB9PWmp6RY2JfSxyRdICKcf6ElkPePhpLeuPr8WcPzLwQX8evA867c5XIwA3a48o"; // tu URL de Discord aquí

$ch = curl_init($webhook);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
