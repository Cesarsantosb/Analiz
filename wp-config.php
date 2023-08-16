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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ptestebanco' );

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
define( 'AUTH_KEY',         '[/*$`kZuN`*JdWV*&6v4>xXE|YNMS|I$mXz3tglkAUjT>xuZ41Z:uf3M_=  ><ii' );
define( 'SECURE_AUTH_KEY',  '$KZ.&/WHyc)3aVBM&IvFIrz27oT(fT5@ld;:Y7)7WzZA-3m n<|=HATl8aF)sLL3' );
define( 'LOGGED_IN_KEY',    '9L.Jo*4{RXM1X/R;qj:u,p7gje9uWL;R^^H[k%0@>Z/~,0;qv|(;4PB`d75i75~r' );
define( 'NONCE_KEY',        '&^],!abuZ +Zk#,wde5E1wXDvTEvk(upBVv@:O+DHJ,@ bsvG<73I*+W4J5#w3)(' );
define( 'AUTH_SALT',        '7|ftGTVQmCaf_5Ey>Sxs?oR= |4~ixMdWmo`6m{M{5a[;8O6eEo!{?*prf$*ej#T' );
define( 'SECURE_AUTH_SALT', '|,L3qS2[m=G9,TD[%o]3Aon,}od4oauc;{<7fo_hC!c5XkFGWK$BSit)+>h}&n,M' );
define( 'LOGGED_IN_SALT',   '1D 8(f2~}%bG*=,pC)eYST~ 0xkPGfF`WC@=>z9 cbwl@o[[e}c$g`1S#|>~RTKe' );
define( 'NONCE_SALT',       '=/+o4OsV(n5o+G(ysKik^To61S.`N)w48Vi:h6%z4W%4%8+iFu.ae){j@Pi#Iz/%' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
