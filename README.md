<div>
<h1>DNS Library for Laravel</h1>
<p>This PHP library allows you to retrieve all DNS records for a specified domain name. It is designed to be used with the Laravel framework.</p>
<h2>Requirements</h2>
<ul>
<li>PHP version 8.0 or later</li>
<li>Composer for dependency management</li>
</ul>
<h2>Installation</h2>
<ol>
<li><p>Open a terminal and navigate to your Laravel project directory.</p></li>
<li><p>Run the following command to install the library via Composer:</p>
<pre>
composer require phoenix/dns-library
</pre>
</li>
</ol>
<h2>Usage</h2>
<ol>
<li>
<p>Import the <code>DnsLibrary</code> class into your code:</p>
<pre>
<span class="hljs-keyword">use</span> <span class="hljs-title">DnsLibrary</span>\<span class="hljs-title">DnsLibrary</span>;
</pre>
</li>
<li>
<p>Create an instance of the <code>DnsLibrary</code> class:</p>
<pre>
<span class="hljs-variable">$dnsLibrary</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">DnsLibrary</span>();
</pre>
</li>
<li>
<p>Use the <code>getDnsRecords</code> method to retrieve all DNS records for a domain:</p>
<pre>
<span class="hljs-variable">$domain</span> = <span class="hljs-string">'example.com'</span>;
<span class="hljs-variable">$records</span> = <span class="hljs-variable">$dnsLibrary</span>-&gt;<span class="hljs-title function_ invoke__">getDnsRecords</span>(<span class="hljs-variable">$domain</span>);
</pre>
<p>The <code>$records</code> variable will contain an array of DNS records.</p>
</li>
<li>
<p>You can iterate over the records and perform any necessary operations:</p>
<pre>
<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$records</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$record</span>) {
    <span class="hljs-comment">// Perform operations on each DNS record</span>
}
</pre>
</li>
</ol>
<h2>Examples</h2>
<h3>Retrieve DNS Records</h3>
<pre>
<span class="hljs-keyword">use</span> <span class="hljs-title">DnsLibrary</span>\<span class="hljs-title">DnsLibrary</span>;

<span class="hljs-variable">$dnsLibrary</span> = <span class="hljs-keyword">new</span> <span class="hljs-title class_">DnsLibrary</span>();
<span class="hljs-variable">$domain</span> = <span class="hljs-string">'example.com'</span>;
<span class="hljs-variable">$records</span> = <span class="hljs-variable">$dnsLibrary</span>-&gt;<span class="hljs-title function_ invoke__">getDnsRecords</span>(<span class="hljs-variable">$domain</span>);

<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$records</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$record</span>) {
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$record</span>[<span class="hljs-string">'host'</span>] . <span class="hljs-string">' '</span> . <span class="hljs-variable">$record</span>[<span class="hljs-string">'type'</span>] . <span class="hljs-string">' '</span> . <span class="hljs-variable">$record</span>[<span class="hljs-string">'target'</span>] . <span class="hljs-string">"\n"</span>;
}
</pre>
<p>This example retrieves all DNS records for the <code>example.com</code> domain and displays each record's host, type, and target.</p>
<h2>Contributing</h2>
<p>If you would like to contribute to this library, please follow these steps:</p>
<ol>
<li>Fork the repository on GitHub.</li>
<li>Create a new branch for your feature or bug fix.</li>
<li>Make your modifications and commit your changes.</li>
<li>Push your branch to your forked repository.</li>
<li>Submit a pull request to the main repository.</li>
</ol>
<h2>License</h2>
<p>This library is open-source and available under the <a href="LICENSE" target="_new">MIT License</a>.</p>
<h2>Credits</h2>
<p>This library is developed and maintained by <a href="https://github.com/VerrucktUA" target="_new">VerrucktUA</a>.</p>
<p>Feel free to provide any feedback, suggestions, or bug reports. Contributions are welcome!</p>
<p>By following the instructions in the README.md file, users will be able to set up and use your library effectively. Make sure to update the placeholders with the relevant information and provide accurate instructions based on your library's implementation.</p>
</div>