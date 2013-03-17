<?php
	require("../private_design.php");

	print_html_header("prtunnel");
?>
	<p>prtunnel is a program that can tunnel TCP/IP connections in a variety of ways, including through HTTP and SOCKS5 proxy servers. Some if its possible uses include:</p>

	<ul>
		<li>Tunneling TCP connections from client programs to a remote server through an HTTP or SOCKS5 proxy (useful if you're behind such a proxy and want to use a program that doesn't have native proxy support)</li>

		<li>Tunneling TCP connections from SOCKS-capable client programs through an HTTP or SOCKS5 proxy</li>
		<li>Tunneling TCP connections from an IPv4 client program to an IPv6 server and vice-versa</li>
		<li>Forwarding TCP connections</li>
		<li>Running as a simple SOCKS proxy server</li>
	</ul>

	<p>prtunnel is open source software available under a BSD-style license. It has been developed and used under Linux and BSD-based operating systems.</p>

	<h2>Download</h2>

	<p>The source code for prtunnel can be downloaded from the link below.</p>

	<ul>
		<li><strong><a href="/files/prtunnel-0.2.7.tar.gz">prtunnel-0.2.7.tar.gz</a> (source tarball)</strong></li>
		<ul>
			<li>Date: March 12, 2006</li>
			<li>MD5SUM: 5762a31a4a957c18e52e60cab289ea34</li>
			<li>Changes: A bug that would cause malloc(0) to be called in some situations (which could cause problems on some systems) has been fixed. The server timeout, if specified, is now set before the proxy server successfully connects to the remote server, which will prevent the program from hanging if the proxy does not respond to the client.</li>
		</ul>
	</ul>

	<p><strong>FreeBSD users:</strong> prtunnel is in FreeBSD's <a href="http://www.freebsd.org/ports/index.html">Ports Collection</a>. If you're running a recent version of FreeBSD, you can install prtunnel directly from the Ports Collection or download a binary package from a FreeBSD mirror site.</p>
<?php
	print_html_footer();
?>
