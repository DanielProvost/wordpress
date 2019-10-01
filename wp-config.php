<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'danielProvost' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1234' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9ddtp_&],8Wx4i 8)U]s),F$k%Vb~QR=%tQM2E}Ar>=Y^w)9w9_t;DLuSm::v_8_' );
define( 'SECURE_AUTH_KEY',  'T(N]X|u>X2@t%UBi9u{Er]i@ ^6Qk7X.N)DWt{F!7OOYPGuFm5HTejBu0i1KcrEC' );
define( 'LOGGED_IN_KEY',    ';]Ebl!j*G8cP&}Me1-/y-4kui~$J;x[$ :5lc>^2uEUwgPQR S3 _KC~-2,}=8fd' );
define( 'NONCE_KEY',        '85wv_JHukz#_:#9W2T;b[:4`/.+[>N3&KIac7$oPVi41PDU]7u< rq(mXo|QZfC8' );
define( 'AUTH_SALT',        'U1chqV?{R%C$1}X3pn5)Gz2lxK)#.u[AEc!w zVPPk{nx@o3+cqh0AlT2l|&c~vG' );
define( 'SECURE_AUTH_SALT', 'v0Q]wnic{o49IGn&BhvkIZKU-8w8vjkL{xdg|@:Sy~R5(lsWkT:8B^vLat?Gd=:n' );
define( 'LOGGED_IN_SALT',   'n}Jd2-y7:H(:rG]5HSQ`X}&i=3K?9DxwK*MaLt;-NwJ{t*s+U<vjOuvV$EzNLQy9' );
define( 'NONCE_SALT',       'v4F[zbj{Go.eW~i;CIZOoz@M6gW5FB6^-01h^Q}AmZ8]#6,vAWVr[AbsFH+2mSGa' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
