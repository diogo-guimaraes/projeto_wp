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
define( 'DB_NAME', 'db_aula_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'pna' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'pna229933' );

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
define( 'AUTH_KEY',         '&NvPEkLZ6Pc[VdOo5,,wbuGay,QZ*QG1X`Xz;x4;mP.Lb/oYM:}t$:k{L8/G9cp<' );
define( 'SECURE_AUTH_KEY',  '?2m, zh[6`Zb hv{8b=SVx|x8$ThdK:uNeXQ-C3SFqGC`cbs]T]4ff!n%=2yv`vF' );
define( 'LOGGED_IN_KEY',    'LGMX{ j`{<_o;FgbjOVpgetER!*+F8gUi<C`jYK@w^}O6*wnnN=ksW1IrqWIHsmQ' );
define( 'NONCE_KEY',        'WB*`p1E z>Jr<$}]`>5t~Bvzvv|t1VGv9j.-+RWWu;h^bN9=@=CA,Fn>uwsln9p=' );
define( 'AUTH_SALT',        '-Q>G#^<2[H$k9n[t9lO-HIFQ0^6!;R9P~}+c9}?o5gr<JeE+)G#09L59f%&&Im.,' );
define( 'SECURE_AUTH_SALT', 'kNctg.F|W6,lZX7`*sk0l<,K8!Q$LK!-qI>#SkuRq*byosDj 5#mYnxh`hUp2qZ)' );
define( 'LOGGED_IN_SALT',   'kDg/0HTlo:]FK^`..fyr}u&RZ>8{Oju}:>fL`vO}|Coax#;@MAJl_DkOe?_3]N}<' );
define( 'NONCE_SALT',       'wD2=>X-*HGcNS]BoepC=MSroOeu]&716?%gN{Alr22D=3QJT:pOM3=/^W1,aVJ*=' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'aula_';

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
