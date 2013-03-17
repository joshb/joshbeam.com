<?php
	require("config.php");

	function
	print_html_header($title)
	{
		global $site_root;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale = 1.0" />
<title><?php
	if(strlen($title) > 0)
		print $title . " - ";
?>joshbeam.com</title>
<link rel="stylesheet" type="text/css" href="<?php print $site_root ?>page.css" />
</head>
<body>

<h1><a href="<?php print $site_root ?>">joshbeam.com</a></h1>

<div id="menu">
	<a href="<?php print $site_root ?>">home</a>
	<a href="<?php print $site_root ?>articles.php">articles</a>
	<a href="<?php print $site_root ?>software.php">software</a>
	<a href="mailto:josh@joshbeam.com">email</a>
	<a href="https://github.com/joshb">github</a>
</div>

<div id="content">
<?php
		if(strlen($title) > 0)
			print "\t<h2>$title</h2>\n";
	}

	function
	last_modified()
	{
		$filename = basename($_SERVER['SCRIPT_NAME']);
		$date = filemtime($filename);

		return date("F j, Y", $date);
	}

	function
	print_html_footer()
	{
		global $site_root;
?>
</div>

<div id="footer">
	Copyright &copy; 2002-2012 Josh Beam
</div>

</body>
</html>
<?php
	}
?>
