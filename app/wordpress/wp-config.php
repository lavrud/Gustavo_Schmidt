<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'schmidt_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wi:3bK@MAe.OV{RH-;P?G8s?nf<)q+~b[qu0[{w$T)MKC,>wgp& g{4ZTZ=M@^,P' );
define( 'SECURE_AUTH_KEY',  'juTx=b}r+U,?w>1<@;yQ?UjT7i;@fV{PAuFva4?w2}rlFw7[+XR]<(&0}nT|>+Fn' );
define( 'LOGGED_IN_KEY',    'UL_&oE5-Z}XI1p)ldF&yrg[xnY|~$g@R^Ie|LsVTpZE!w[2;7t:A7Hm.5wvcH^&f' );
define( 'NONCE_KEY',        'YlIDpP1ysG)W9%+*a?[lS8iRJ6<^KCQ&&KwO*H.8}L>1*4]cxX/PuT.fpggT?J$I' );
define( 'AUTH_SALT',        '>-%fVg?gSP@MWxbqzcxqy&>ThFSv|yobBNzcr|/@2)](UL,Fs)x>}E<d(- 4AA[*' );
define( 'SECURE_AUTH_SALT', 'qVUb9^^wAjv:o>[+0O65O/vMS(EMUb7YqF5xoTmK`S__Ze$CxHkU;0* r<3.`y+.' );
define( 'LOGGED_IN_SALT',   'NH4YOBOuB!bKSG5m8os1J?A:-S0J3}Ro*rFfu8|JAs1Ye=nMl0eP<p[Ap6)GwdaX' );
define( 'NONCE_SALT',       '_WQA%#39+IdC94k?G9Cx(-4^T(^Bel?lJjCJn~;$hpj&@It#/yvAk|Sez}-J}5z3' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
