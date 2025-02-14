<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wplabodb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ADM*c,&rdd:[X.dn!5j6U`;0WjJV,1WPBzlTAgi;a@Hta&}IA]%[36G3s@mg,3PA' );
define( 'SECURE_AUTH_KEY',  'Y8ve+:z7 $Rr+3si4U./!&z8Fd;H@QAGtQ)q3O=<y5BUtpL>A$2Zq8W#8730&q~l' );
define( 'LOGGED_IN_KEY',    's#CHV8?_#^!FU!c(PF9jLZ+|^{RQJM>=.%J0o=EeRXR?n!}/=~UaK~)mu:Vev!HL' );
define( 'NONCE_KEY',        '[zb~-m.B[Vr$,4[-J{9]!B=[`IrMr2J+;&#h^8$;Bbs[?%~)K?C5O]vxzUBR.sP/' );
define( 'AUTH_SALT',        '%JYnG{Sb]]L%_7:p319<>`>}lOvM|}$]>hv@#azb?udO<?`~|Vx#p]r0!$b@22+g' );
define( 'SECURE_AUTH_SALT', ';neUQ~0kDcAP&=$BXEW5Z0q]*ssajWt+5 y`*&-_@w1GRfaC&Ul4pnu8IEt-e1%E' );
define( 'LOGGED_IN_SALT',   'S1&=u-lCL/<Io9s7XBfT@~+H!i#g4#CBAl<8RjFN29..yv*p)>``1M}2zk%}zk^*' );
define( 'NONCE_SALT',       'ZS(;;&!eArXmZr*(6_k^qkQ#utpq3U# skBoyQ/dHVRFDY2fNb2*4xUiEK!)Gd?B' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
