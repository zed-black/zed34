<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'zed34' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'zed34' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'zed34' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LBKl[k<9N`r<[jaWncz0~6:=0TEh;L&m 1d#{;vQp5Uq>K{j[@6EdX4W^Gvi;[<B' );
define( 'SECURE_AUTH_KEY',  '/YSpQr^Y+lDn.iu.[1FELtj!8aX{ Sh1Eb@9|+Y#Jo-a|:J9qF*]oegHMx,Tm&<`' );
define( 'LOGGED_IN_KEY',    'ps77=%i }u|8a)$,i}_Gccq(2u`A]rvwXvhL}T8F9KvY}D)nM{|]umggs>A*KKIA' );
define( 'NONCE_KEY',        'Jxm{(p7#YZWPb+&~9*X=p3:K^5yY2`4!f ^[,9rb.{SE5z{rr@lV3/5}6J~X^X=m' );
define( 'AUTH_SALT',        'K k<I(%W4t_pjkPB7WX@D*P[72+h]ZI,lDWlPmNool3y=[WO^JRc*P=}!yub}v[j' );
define( 'SECURE_AUTH_SALT', '4??Y>ninn6Sfe)9o8C*x@UGs04 !*QD i`x(L=pp^d7#TlMLg)n1|C-C,.8P_LK<' );
define( 'LOGGED_IN_SALT',   'XNQ`)l.v7c|>BE?=,F]T_BWG~XB}~d=%fbYnAD l,Fxp*!,8e!z]C%bq:Yhgi&X4' );
define( 'NONCE_SALT',       'erUBtj:}h/o`~9Q>bX^L-A5T|AG6^>%`ad2tM(KKCEAT];e$Pe(p~u31e+qN3B.&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
