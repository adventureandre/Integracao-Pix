<?php
/**
 * Configurações do projeto Pix
 */

//DADOS GERAIS DO PIX (DINÂMICO E ESTÁTICO)
define('PIX_KEY','1c40bd9e-39b3-49c2-b045-a730d26f2a7e');
define('PIX_MERCHANT_NAME','Fulano de Tal');
define('PIX_MERCHANT_CITY','SAO PAULO');

//DADOS DA API PIX (DINÂMICO)
define('API_PIX_URL','https://api-pix.gerencianet.com.br');
define('API_PIX_CLIENT_ID','Client_Id');
define('API_PIX_CLIENT_SECRET','Client_Secret');
define('API_PIX_CERTIFICATE',__DIR__.'/files/certificates/gerencianet.pem');
