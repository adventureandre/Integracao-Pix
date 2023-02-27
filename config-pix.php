<?php
/**
 * Configurações do projeto Pix
 */

//DADOS GERAIS DO PIX (DINÂMICO E ESTÁTICO)
define('PIX_KEY','+5562996106990');
define('PIX_MERCHANT_NAME','ADVFW');
define('PIX_MERCHANT_CITY','Leopoldo de bulhoes');

//DADOS DA API PIX (DINÂMICO)
define('API_PIX_URL','https://api-pix');
define('API_PIX_CLIENT_ID','Client_Id');
define('API_PIX_CLIENT_SECRET','Client_Secret');
define('API_PIX_CERTIFICATE',__DIR__.'/files/certificates/certificado.pem');