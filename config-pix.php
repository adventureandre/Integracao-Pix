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
define('API_PIX_CLIENT_ID','Client_Id_bceaadc520b2c9ee2a201980a9cf64433e0b4c49');
define('API_PIX_CLIENT_SECRET','Client_Secret_6d3e132c9a01f164893e4eb6a78253f1ea97fc7a');
define('API_PIX_CERTIFICATE',__DIR__.'/files/certificates/gerencianet.pem');