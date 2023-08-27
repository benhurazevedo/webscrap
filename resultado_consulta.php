<?php
$cep = $_POST['cep'];
$url = "https://viacep.com.br/ws/" . $cep . "/json/";
$curl_session = curl_init($url);
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_session, CURLOPT_CUSTOMREQUEST, "GET");
$resultado = json_decode(curl_exec($curl_session));
?>
<ul>
    <li>CEP: <?=$resultado->cep?></li>
    <li>logradouro: <?=$resultado->logradouro?></li>
    <li>bairro: <?=$resultado->bairro?></li>
    <li>localidade: <?=$resultado->localidade?></li>
    <li>uf: <?=$resultado->uf?></li>
</ul>