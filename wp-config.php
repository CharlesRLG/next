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
define( 'DB_NAME', '$SCALINGO_MYSQL_URL' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'necstrasbou_5945' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'xxteRuIgmieQJoLZZvyf' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql://necstrasbou_5945:xxteRuIgmieQJoLZZvyf@80b6837a-3141-427c-bd5a-00596b6dbdd7.necstrasbou-5945.mysql.a.osc-fr1.scalingo-dbs.com:39303/necstrasbou_5945?useSSL=true&verifyServerCertificate=false' );

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
define( 'AUTH_KEY',         'ag9z5iu#PY)R%|0v<+PaP0F~gdG%sR-D!J!y0r.r!+(llH4G*9vX2<.S8hEw. z.' );
define( 'SECURE_AUTH_KEY',  'a)]5vLRGYxR9&bT>?F]yx]S{>T#JVo:E pmr(4)R.jgiJs#]8Y$m.^3P71lEnS{m' );
define( 'LOGGED_IN_KEY',    'YvwAilGii<oKO4%X,66~l?DcCKDgxaq7gr7J#G,g##mZ2l87g3RF`<n3_6XXUChS' );
define( 'NONCE_KEY',        'P_8v:6&r}axyKAI+#q[ImD]IRXN<=&5`:Gux_JCy#*s^Z%3$+K-8sqlySoqWb27Y' );
define( 'AUTH_SALT',        'oG^SmwEN9|w7W:%Dl36oF|d|WD#>.p,]ed=IHdH/]~:!RU2#,s,z)>^4Wt$AdRN4' );
define( 'SECURE_AUTH_SALT', '+[zmai^Cop5P|C@o5ZUw:mdK^L@54.+~cI{EzN-c#L=O:{[u`5/>.HIa8)(ZgIT$' );
define( 'LOGGED_IN_SALT',   'c(.Eg6%42aP+~#FQYmQ`.O TEfZ?=fK67Waxzc&_o?h inVI9~n6WdnN#Lh >H(r' );
define( 'NONCE_SALT',       '%@7G}|ZgnQMC6f `bo$(=x>b}|7@=U[=`uCGWFUGvT7:lro2YawI1<5`k!;dmQbS' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'nexts_';

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
