<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'ログイン');
define('NAVBAR_TITLE_2', 'パスワードを忘れたら');

define('HEADING_TITLE', 'パスワードをお忘れですか?');

define('TEXT_MAIN', 'ご登録されたメールアドレスを入力してください。パスワードを再発行しメールでお送りします。');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - 新しいパスワード');
define('EMAIL_PASSWORD_REMINDER_BODY', 'IPアドレス' . $_SERVER['REMOTE_ADDR']  . 'から新しいパスワードの申請を受け付けました。' . "\n\n" . '\'' . STORE_NAME . '\'への新しいパスワードは' . "\n\n" . '   %s' . "\n\nです。\n\n新しいパスワードでログインした後、「マイページ」でご自分でご希望のパスワードに変更できます。");

define('SUCCESS_PASSWORD_SENT', '新しいパスワードをご登録のメールアドレス宛に送信しました。');

define('EMAIL_GREET', '様');
?>