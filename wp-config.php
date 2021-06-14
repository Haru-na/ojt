<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ojt' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[Of;uX(kF%A~*vozey,^)q&8q(bF=h& &4q= LTX`O*F*gyJ>KUnMWnZWd/tH0L9' );
define( 'SECURE_AUTH_KEY',  '!`)^hmue)c$X,F.AdXQ>ebret?3y| (@#]9DJ!]u4a|9*loyU95bd(Ypfno~<r+1' );
define( 'LOGGED_IN_KEY',    'Lt(JD9jCY_*K}xqs`oH,PE(JM*/+!~:L!j-J<k}.!-Y|i>[FW4t^e)s??U9,T2wg' );
define( 'NONCE_KEY',        '8hg$; ^crbLiu|oNCBuU|ek|yR}%u7=h(r!$9YSZw.R}ncFwB4lhA]MGhG::g#-h' );
define( 'AUTH_SALT',        'cM@xg65DouZ b>^F(kP}T=0;$RGElMJ[A6kP9Ff)%}>Bz 78[T)g0nD4EQ Vo(vi' );
define( 'SECURE_AUTH_SALT', ',BiP(sc2RC @ved^IyoPEV9NqMwK@pShRIZfj5h+{hV>/QXNtx`lc_YU]s}:zmy?' );
define( 'LOGGED_IN_SALT',   '.[8pd<#qu/%]GI*/,$q#qp:Xi<3gbx>G8=B4c ?&^)>h6[S<`(Mp25t%VWL.=-mN' );
define( 'NONCE_SALT',       'wI!~V>zboX<<XeV31RKC=O~3GP$h5DSgwmH0ayMJ/Zaa(Y}Q=C]=1pKVMa)]S`9C' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
