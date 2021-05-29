<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */


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
define( 'DB_NAME', 'cursoemvideo_wp' );

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
define( 'AUTH_KEY',         '8T#Y1c4m9*q0:l_$J{M0HUh4 fX5 u|M6g:PJ-NRey%e/]Y`n Ua!rJ[2|!-%63J' );
define( 'SECURE_AUTH_KEY',  '^X7}z:B/u{w4+Gi3uzhPc+?[; fkl;CwD}wV~LJPbQW$ ~B(_a?8:<Z;U*Yg,EqV' );
define( 'LOGGED_IN_KEY',    '?!?{{ji(^^=_/3`%xk&:$z!j<:m/E.Yr~kSIMTr57)##qcEp{$}J{MrB!Lo$]_Up' );
define( 'NONCE_KEY',        '1k7@?gf*zdE(BGB3uf<;lV;[Hyz9`deb=Qf3j% VBn AOxN$w!q/?D3{)oTpSJzC' );
define( 'AUTH_SALT',        'tKCmT-MP$@QF,z$h)z4mjxI<E0P2C4_j+q|~3mz?IZi`]zK9,-(Xh1r4P~+_pEgp' );
define( 'SECURE_AUTH_SALT', 'XLP*iO5:vI9<?A$|pQtCWLqdd ?8,g6{|fv_$sc2FVtIJ^VVX+t(t0MTVBpp1S7s' );
define( 'LOGGED_IN_SALT',   'Zeu^xCj4HU_($@&CqJ`xxrU:ER)K4xz;D4J|H,}K@xQ.1Ou0{cEBMl3c#H-P%!FW' );
define( 'NONCE_SALT',       'R1MYv>KZ[ LH_] Cl(ESoE,./?F]#:ax]c6}onMb@s{NmIn8xGjt)$/%(M@ZvOc{' );

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
