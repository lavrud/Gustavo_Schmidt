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
define( 'AUTH_KEY',         'T`(w>:v|${7DK*j#~;deCum:H8:;5vt=f7n&=|^aclM6>F!;bwO,ejg;Uit<Xhg]' );
define( 'SECURE_AUTH_KEY',  '^ia?O9~eIrg0j`72HacKGxUX!|Bw/r9kH:p4hnLY+]XS;JD/S&i33/ ksaha@] C' );
define( 'LOGGED_IN_KEY',    ']LD:dos*Q=Yb=q+DH~TKMx+YLfy]u%9[f)y&VUvQsY}IG_#Fa$0T29~-_A5]yb3m' );
define( 'NONCE_KEY',        'MuwsbLDyx<&1Op$<NKM%JhzRuxN6)uR&mESz`bvPk*7G*u!e:Mmfn 2^Dvnbx6]K' );
define( 'AUTH_SALT',        'ggE,v[T5k}Fb92#VP [>wMb=6fyC:]E;~,/2u+WTtt0,CO>Zb,^1>?csA3yHsizE' );
define( 'SECURE_AUTH_SALT', '9y=JK=<_^hn1M%W3UDamV[jpp&%k;ErLR_IsPNuN}AciM+~v?Lwm;/hyE]*;n+0?' );
define( 'LOGGED_IN_SALT',   '{W_pJ52?;JqcoiDNZ{Ub!;}2S~WKLi(foAXUR|aBC8}Gc50!OfmfMBWoO_v%rfI`' );
define( 'NONCE_SALT',       '.uLSqk!-=7g0H^sMuD+efgh:ssmo1uSI;N{ZB?PxQ__3vXJGwx~vH;Hk-+Ew8$eN' );

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
