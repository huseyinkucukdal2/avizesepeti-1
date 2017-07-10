<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'avizeHf');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'root');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8/,6.]T}uOD+XN+fz@~j1;3d)iD{nU^Sf|`:PdX^u)nR!t0P!o{`|1FW?cS+|R/-');
define('SECURE_AUTH_KEY',  'k~|cE;KY%`YNY{|f+De0l_<y|K/OXN<}?rX5t0-<{p;kOnXgm05QQ&-E+#[2#r4+');
define('LOGGED_IN_KEY',    'eP4<{tX|B3(_8mybMoadu<mmXA6|cr~yyaZ`g4M-WD|>5l4jyY]fV.=ftLIh4jPy');
define('NONCE_KEY',        's*|r3CA%6NL:CG1=!^A)q0Nf:)Ckr4S(7X0PmKyX.8xf4=R|sZ][l#(5+|Og()0R');
define('AUTH_SALT',        'H!@!>XW!+}R9dFBEdSc2+C!BaK(u*?f`wr~~Ce0GsY?9C7ryvka{]#/.gcOM$QGe');
define('SECURE_AUTH_SALT', 'z.dN#az+6e8km@B-hXo&;MtAh]V@~+ftCTY+C7iy&L6:b3|Smg00TFXFvQ3>iM+8');
define('LOGGED_IN_SALT',   '`;l(^n3|KcZ)fwB=:UwRvZ=SAaNoM#}5|qd17-,7J(2.76(C5K9O=PvG`.Aa S^o');
define('NONCE_SALT',       '#1Y3!,8&3CT7L||[|Z-G_qL!VOfTe9{9X<LUM3!@Vr,D(uQA)|g1<<y1~@yiG#Y7');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'hf_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');