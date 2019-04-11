<?php
/*if (isset($_POST['sbm'])){
    $data  = <<<XML
                    <oper>cmt</oper>
                    <wait>90</wait>
                    <test>1</test>
                    <payment id="123456711">
                        <prop name="b_card_or_acc" value="5168755104583683" />
                        <prop name="amt" value="1" />
                        <prop name="ccy" value="UAH" />
                        <prop name="details" value="test%20merch%20not%20active" />
                    </payment>
XML;

$password = "0M9my5j0X01PQBC7Y6aBupwn3v0N9D7U";
$sign=sha1 (md5($data.$password));
$data = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
            <request version="1.0">
                <merchant>
                    <id>14414611</id>
                    <signature>$sign</signature>
                </merchant>
                <data>
                    $data;
                </data>
            </request>
XML;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,            "https://api.privatbank.ua/p24api/pay_pb" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     $data );
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/xml'));


echo curl_exec($ch)."<br/>";
//echo curl_errno($ch)."<br/>";
//echo curl_error($ch)."<br/>";
//var_dump(curl_getinfo($ch))."<br/>";

curl_close($ch);

    $p = file_get_contents('php://input');
    var_dump($p);
    var_dump($_POST);
}
*//*
$p = file_get_contents('php://input');
var_dump($p);
var_dump($_POST);*/
?>
{{--<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="POST" action="https://api.privatbank.ua/p24api/ishop">
    @csrf
    <input type="hidden" name="amt" value="10"/>
    <input type="hidden" name="ccy" value="UAH"/>
    <input type="hidden" name="merchant" value="144146"/>
    <input type="hidden" name="order" value="4"/>
    <input type="hidden" name="details" value=""/>
    <input type="hidden" name="ext_details" value="Описание товара №1"/>
    <input type="hidden" name="return_url" value="http://st.store.php.a-level.com.ua/cart"/>
    <input type="hidden" name="server_url" value="http://st.store.php.a-level.com.ua/cart"/>
    <input type="hidden" name="pay_way" value="privat24"/>
    <button type="submit"><img src="img/buttons/api_logo_1.jpg" border="0" /></button>
</form>--}}
