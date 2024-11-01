=== Simple Bible Verse via Shortcode ===
Contributors: dannycarlton
Plugin URI: http://DannyCarlton.com/sbvs
Author Name : Danny Carlton
Author URL : http://DannyCarlton.com
Donate Link: http://TheCarltonFund.org
Tags: bible, verse, shortcode
Requires at least: 3.0.1
Tested up to: 6.5.5
Requires PHP: 5.2.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays a Bible verse (KJV) based on the reference placed in a shortcode.

== Description ==

Simple Bible Verse via Shortcode allows you to use just a simple verse reference to then display the entire passage. The shortcode "reference" parameter is sent to http://phpBible.org to be processed and a plain text copy of the verse or passages referenced is returned via json. http://phpBible.org was created 13 years ago and provided a downloadable script for people to install on their own sites. It has been used by hundreds of churches, ministries and private site owners. It's function has been refocused on providing Bible functionality to site owners, thus this plugin.

= Simple Shortcode Usage =

<pre>
[verse reference="John 3:16"]
</pre>


= Example Usage =

Displays two verses...

<pre>
[verse reference="John 3:16,17"]
</pre>

Or if writing the entire word "reference" is simply too exhausting...

<pre>
[verse ref="John 3:16,17"]
</pre>

Display a series of verses...

<pre>
[verse reference="John 3:16-18"]
</pre>

Display the entire chapter...

<pre>
[verse reference="Psalm 3"]
</pre>

Make the reference a link to the passage at http://phpBible.org...

<pre>
[verse reference="John 3:16" link="true"]
</pre>

This plugin converts the shortcode into the verse inside paragraph tags (&lt;p&gt;&lt;/p&gt;) therefore the text can be styled using the normal Wordpress tools like blockquote, bold or italics. To use colors you must set the container tag as "span","false" or "0".

= Parameters =

* **reference** *-a reference to a verse, several verses or an entire chapter (as in "Psalm 23"). Some book abbreviations are acceptible. Always check the result to see before publishing your post.*
* **ref** *-same as 'reference'*
* **container** *-the html tag you want the verse contained in. Default is "p" (which uses &lt;p&gt;&lt;/p&gt;) "false" or "0" will use no container tag..*
* **link** *-link the reference to the passage at phpBible.org for a more detailed study.*

== Installation ==

1. Upload the <a href="simple-bible-verse-via-shortcode.zip">simple-bible-verse-via-shortcode.zip</a> file  to the `/wp-content/plugins/` directory
2. Activate the plugin through the Plugins Manager in WordPress

== Frequently Asked Questions ==



== Screenshots ==

1. sbvs-screenshot-1.jpg
2. sbvs-screenshot-2.jpg

== Upgrade Notice ==

= 1.0 =

Intial release.

== Changelog ==

= 1.1 =	(July 6th, 2024)

Switched to wordpress get file.

= 1.0 =
Stable version release - September 29th, 2017