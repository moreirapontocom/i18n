<?php
require_once('localization.php');

echo _("Welcome");
echo '<br />';
echo _("Is it working?");
echo '<br />';
echo _("Whats is your name?");
?>

<br /><br />

<pre>
	To use some different locales is necessary to install the locales.
	In Linux:

	<b>Software: </b> <i>poEdit</i>
	<b>Reference: </b> <i>http://mel.melaxis.com/devblog/2005/08/06/localizing-php-web-sites-using-gettext/</i>
	List locales: <i>locales -a</i>
	Install new locale: <i>locale-gen pt_BR</i>
	Reconfigure locales (maybe is not necessary): <i>dpkg-reconfigure locales</i>
	Restarting Apache2 (maybe is not necessary): <i>apachectl restart</i>
</pre>