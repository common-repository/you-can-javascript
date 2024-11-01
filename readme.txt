=== You Can Javascript ===
Contributors: danielbachhuber
Tags: post, javascript, page, KSES
Requires at least: 2.7.1
Tested up to: 2.8
Stable tag: 0.1

Disables KSES HTML/XHTML filter so trusted users can use Javascript within any body content. Works for WordPress and WordPress MU.

== Description ==

A plugin to disable the KSES HTML/XHTML filter within WordPress that automatically strips Javascript and other malicious code. Whether the plugin is enabled or not is dependent on the user's administrative permissions; this will keep commenters from hijacking the ship. By default, it allows users with the level 5 and up to add Javascript, etc. to posts and pages.

Tested with both WordPress 2.7.1 and WordPress MU 2.7.1

If you have feature requests or feedback, send them to webdev at danielbachhuber dot com

== Installation ==

How to get it working:

1. Upload uncompressed folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add any Javascript you'd like to a post or a page

You'll probably be best off adding Javascript with the HTML editor.

