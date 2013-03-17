<?php
	require("../../private_design.php");

	print_html_header("Drome Engine");
?>
<p>Drome Engine is a 3D game engine that's written in C++ and uses OpenGL for graphics rendering. It is open source software available under a BSD-style license.</p>

<h2>Features</h2>

<p>Some of Drome Engine's features include:</p>

<ul>
	<li>GLSL shader support</li>
	<li>Particle effects</li>
	<li>PNG and PCX image loading</li>
	<li>TrueType font loading and rendering</li>
	<li>Simple physics</li>
	<li>Resource management with reference counting that causes unused resources (such as textures) to be removed from memory automatically</li>
</ul>
	
<h2>Download</h2>

<p>The latest version of Drome Engine can be found on <a href="https://github.com/joshb/DromeEngine">GitHub</a>. Previous releases can be downloaded from the links below.</p>

<ul>
	<li><strong><a href="DromeEngine-0.4.4.tar.gz">DromeEngine-0.4.4.tar.gz</a> (source tarball)</strong></li>
	<ul>
		<li>Date: December 19, 2010</li>
		<li>MD5SUM: 8fc0db271fa89cb4ed4a771637d5969d</li>
		<li>Changes: The Framebuffer class, which can be used to easily render to a texture, has been added. The DromeDemo application has been updated to implement shadow mapping using the Framebuffer class.</li>
	</ul>

	<br />

	<li><strong><a href="DromeEngine-0.4.3.tar.gz">DromeEngine-0.4.3.tar.gz</a> (source tarball)</strong></li>
	<ul>
		<li>Date: December 16, 2010</li>
		<li>MD5SUM: 4765267e398b4f50e6394a11195ceccd</li>
		<li>Changes: Most functionality of the GfxDriver class has been moved to the Mesh, Texture, VertexBuffer, and ShaderProgram classes in order to simplify and increase the modularity of the code. OpenGL ES 1.1 support has been added. Support for loading PNG images and TrueType fonts on iOS has been added. Xcode projects for Mac OS X and iOS have been added.</li>
	</ul>

	<br />

	<li><strong><a href="DromeEngine-0.4.2.tar.gz">DromeEngine-0.4.2.tar.gz</a> (source tarball)</strong></li>
	<ul>
		<li>Date: October 3, 2010</li>
		<li>MD5SUM: b8f838110b67c2c244e8322a98244db7</li>
		<li>Changes: More inline documentation has been added to header files. The SDL and Cocoa implementations of the IOContext class have been modified to allow attributes such as window dimensions and window title to be changed after an IOContext has been initialized.</li>
	</ul>

	<br />

	<li><strong><a href="DromeEngine-0.4.1.tar.gz">DromeEngine-0.4.1.tar.gz</a> (source tarball)</strong></li>
	<ul>
		<li>Date: September 12, 2010</li>
		<li>MD5SUM: 24c53cc667814e5964abd2f954c713db</li>
		<li>Changes: The XmlDocument class and other classes related to XML parsing have been added.</li>
	</ul>

	<br />

	<li><strong><a href="DromeEngine-0.4.0.tar.gz">DromeEngine-0.4.0.tar.gz</a> (source tarball)</strong></li>
	<ul>
		<li>Date: July 31, 2010</li>
		<li>MD5SUM: f11eee3f00dec397ecfeeda1b8c9c4e4</li>
		<li>Changes: This is the first new version of Drome Engine in several years. Although the name is the same, it has been completely rewritten and is essentially a new engine. It does not have all of the features of the previous version, but the code is much cleaner, simpler, and more modular than before, which will make it much more useful overall.</li>
	</ul>
</ul>

<h2>Screenshots</h2>

<p>Click any image below to view a larger version.</p>

<table border="0" cellpadding="0" cellspacing="16" style="font-size: smaller; text-align: center">
	<colgroup>
		<col style="width: 160px" />
		<col style="width: 160px" />
		<col style="width: 160px" />
	</colgroup>
	<tr>
		<td>
			<a href="screenshots/drome_12-19-2010.png"><img src="screenshots/drome_12-19-2010_t.png" alt="screenshot 2" /></a>
			Normal/shadow mapping with GLSL vertex/fragment shaders
		</td>
		<td>
			<a href="screenshots/drome_7-31-2010.png"><img src="screenshots/drome_7-31-2010_t.png" alt="screenshot 1" /></a>
			Normal mapping with GLSL vertex/fragment shaders
		</td>
	</tr>
</table>

<h2>Screenshots from old versions</h2>

<table border="0" cellpadding="0" cellspacing="16" style="font-size: smaller; text-align: center">
	<colgroup>
		<col style="width: 160px" />
		<col style="width: 160px" />
		<col style="width: 160px" />
	</colgroup>
	<tr>
		<td>
			<a href="screenshots/engine_03-28-2004.jpg"><img src="screenshots/engine_03-28-2004_t.jpg" alt="screenshot 5" /></a>
			Dynamic lighting, water with dynamic reflection
		</td>
		<td>
			<a href="screenshots/engine_12-29-2003.jpg"><img src="screenshots/engine_12-29-2003_t.jpg" alt="screenshot 4" /></a>
			Using one of the <a href="http://www.gnome.org/fonts/">Bitstream Vera</a> fonts as the console font
		</td>
		<td>
			<a href="screenshots/engine_12-07-2003.jpg"><img src="screenshots/engine_12-07-2003_t.jpg" alt="screenshot 3" /></a>
			Terrain, sky dome
		</td>
	</tr>
	<tr>
		<td>
			<a href="screenshots/engine_11-26-2003.jpg"><img src="screenshots/engine_11-26-2003_t.jpg" alt="screenshot 2" /></a>
			Multi-colored dynamic lighting, sky dome, water
		</td>
		<td>
			<a href="screenshots/engine_11-12-2003.jpg"><img src="screenshots/engine_11-12-2003_t.jpg" alt="screenshot 1" /></a>
			Dynamic lighting with a shadow projected from a standard Quake&nbsp;II model
		</td>
	</tr>
</table>
<?php
	print_html_footer();
?>
