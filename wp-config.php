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
define( 'DB_NAME', 'patrimoine_bières' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'DuHp3TVB8GBGK.d~!{yMR:KE~H0qNK|I&ji4Z1BXG>nBAZ5PDGdy9W@mf!SK5omt' );
define( 'SECURE_AUTH_KEY',  '^cS)DaE=6>7L%)wEJr@:!@&qt-3zy9pZFyuEM#|x62%z?mF<o@ $`mcy:hAV?4$*' );
define( 'LOGGED_IN_KEY',    '.^t6MleB:>jc5rb7xcF:YR(uoM~%aAH;hnBA@(AKZte0/-oYP#Ovt~Rcv8gK9e;r' );
define( 'NONCE_KEY',        'KH= GlNMh.9<cAV)[1Fg2iA5=|3b,SX|_Q,aLwAkCpO9xQ]))VJFRQ/K<XUpCb{j' );
define( 'AUTH_SALT',        'B;q>D&K!hox<kQqFj5BwX#(_`wM71E.BcCQ2_D7/s]z.M.wfF-A|V)8ft;0q}k@|' );
define( 'SECURE_AUTH_SALT', '2:2t=??]V0ZHatT4cyPF=J^WX_OUqyj0(Nrh/~6C8#,kPbdoO>-^S<ErlzNtygDN' );
define( 'LOGGED_IN_SALT',   '4mYGE3HdO9X}F8Oe<)Km33:$K)#%aJqZ2AKQ:Tk4J@r/WG`yIu+|;{:>=!g03O3)' );
define( 'NONCE_SALT',       '@3F>)8e^-Vg_$gz%`S[72yKWZ{,v{sE/AZp;c2p<,u<~]Ia;H~D523}P>~%OY6~2' );
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
