<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'sp558';
$sitepad['db_user'] = 'sp558';
$sitepad['db_pass'] = 'S7B.]D3p49';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'spdg_';
$sitepad['charset'] = 'utf8';
$sitepad['collate'] = 'utf8_general_ci';
$sitepad['serving_url'] = 'www.speedstudios.net';// URL without protocol but with directory as well
$sitepad['url'] = 'http://www.speedstudios.net';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = 'C:\Program Files\Ampps/private';
$sitepad['sitepad_plugin_path'] = 'C:/Program Files/Ampps/ampps/scripts/sitepad';
$sitepad['editor_path'] = 'C:\Program Files\Ampps/private/sitepad-editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'caddrnhm4tte76c0xwiouao6wcdabbthpsx1m1xda3xp9lov4rrrryknymcfaobe';
$sitepad['SECURE_AUTH_KEY'] = 'uixylc06djusqncqhgivuck0zktktu5ld3avl947oc9ijea14blnk0k1kztivq5y';
$sitepad['LOGGED_IN_KEY'] = 'zwtvnht5wzu5pcyw7cg1rgycfnulxuv9cmrkgoseo8vadbtqdxijqjskhcuryl2f';
$sitepad['NONCE_KEY'] = 'bskbxbjuvaxiler890ygyfrcssrgl5ushqtgkmk7ey9qjktv0u3zbcdnf9rgtznp';
$sitepad['AUTH_SALT'] = 't9h1ibw1k0ivpvwduwzgvuukhkcdhylx6uzzpkel0ahsgfmh7xzpfvsw4huoy5e8';
$sitepad['SECURE_AUTH_SALT'] = 'q00kvq5ukr9gwodbwdtzmahhfllamovfivndkwdumnpz45v8udrr6fnaoyyxzzrc';
$sitepad['LOGGED_IN_SALT'] = 'ldpzsodul43v7bd04bmraxgapyp3s1u9dtyvpnx76yblbvupmkgqtat6icbejrw8';
$sitepad['NONCE_SALT'] = 'vlxxgofwwae4qfczogm2gc8tmicmzwmi1zhwr9zlez89xlcfw6yyq7iqc1tgka2b';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

