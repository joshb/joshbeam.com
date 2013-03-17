<?php
	require("private_design.php");

	print_html_header("Code");
?>

	<p>This page contains small scripts and other snippets of code, such as JavaScript that can be used in web pages.</p>

	<div class="SoftwareListing">
		<div class="Description">
			<a href="scripts/ElementFader.js">ElementFader.js</a> (JavaScript source; January 21, 2008)
		</div>
		A JavaScript file for easily fading HTML elements from a starting opacity to an ending/target opacity, using the CSS3 opacity property (or the &quot;filter&quot; property in Internet Explorer). This can be used for smoothly fading elements in when they're activated and fading them out when they no longer need to be shown. Simply create an ElementFader object with the element (or a string containing its ID) passed as an argument; the element can then be faded using the Fade, FadeIn, FadeOut, and Toggle functions (see the source code and the included comments for more information):
		<pre>	var fader = new ElementFader(&quot;divElementFaderSource&quot;);

	fader.Fade(0, 1); // fades the element from an opacity of 0 (transparent) to 1 (opaque)
	fader.FadeIn(); // fades the element from its current opacity to being fully opaque
	fader.FadeOut(); // fades the element from its current opacity to being fully transparent
	fader.Toggle(); // fades the element in if its current opacity is 0; fades the element out otherwise</pre>
		To see an example of this script, click the Show/Hide Source Code link below; this link uses the script to toggle a div containing the script's code.
		<br />
		<a style="font-weight: bold; font-size: smaller; text-decoration: none" href="javascript:fader.Toggle(0.9)">Show/Hide Source Code</a>
		<div id="divElementFaderSource" class="CodeDisplay">
			<pre><?php print(htmlspecialchars(file_get_contents("scripts/ElementFader.js"))); ?></pre>
		</div>
		<script type="text/javascript" src="scripts/ElementFader.js"></script>
		<script type="text/javascript">
		<!--
		var fader = new ElementFader("divElementFaderSource");
		//-->
		</script>
	</div>

<?php
	print_html_footer();
?>
