=== SIS Accordion ===
Contributors: sayful
Tags: accordion, Accordion, wordpress accordion, jquery accordion,
Requires at least: 2.9
Tested up to: 4.0
Stable tag: 2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays collapsible content panels for presenting information in a limited amount of space.

== Description ==

Fully written in jQuery and [jQuery-UI Accordion Widget](http://jqueryui.com/accordion/), the plugin adds a displays collapsible content panels for presenting information in a limited amount of space.

There are two ways to add accordion to your site:

First:

Create your Accordion Items from the Accordion menu & paste the following shortcode where you want to display:

`[all-accordion]`

Or you can paste following to add accordion to your theme:

`<?php echo do_shortcode('[all-accordion]'); ?>`

Second:

If you want to use multiple accordion at diffrent page or post at your theme write the following code

`[accordion id=''][item title='YOUR_TITLE_GOES_HERE']YOUR_CONTENT_GOES_HERE[/item][/accordion]`

Repeat `[item title='YOUR_TITLE_GOES_HERE']YOUR_CONTENT_GOES_HERE[/item]` as many Items as you want. Inside id="" give a unique name and you can use a prefix "accordion-" to avoid conflict with other.

You can change options by adding this:

`[accordion id='' collapsible='' active='' event='' heightstyle='' headericons='' activeheadericons='']`

The possible value of options:

`collapsible='false|true'`
`active='0'  The zero-based index of the panel that is active (open). Default: 0 `
`event='click|mouseover'`
`heightstyle='auto|fill|content'`
Write the class name of [jQuery UI CSS Framework](http://api.jqueryui.com/theming/icons/) inside headericons='' & activeheadericons=''


== Installation ==


Installing the plugins is just like installing other WordPress plugins. If you don't know how to install plugins, please review the two options below:

Install by Search

* From your WordPress dashboard, choose 'Add New' under the 'Plugins' category.
* Search for 'SIS Accordion' a plugin will come called 'SIS Accordion by Sayful Islam' and Click 'Install Now' and confirm your installation by clicking 'ok'
* The plugin will download and install. Just click 'Activate Plugin' to activate it.

Install by ZIP File

* From your WordPress dashboard, choose 'Add New' under the 'Plugins' category.
* Select 'Upload' from the set of links at the top of the page (the second link)
* From here, browse for the zip file included in your plugin titled 'sis-accordion.zip' and click the 'Install Now' button
* Once installation is complete, activate the plugin to enable its features.

Install by FTP

* Find the directory titles 'sis-accordion' and upload it and all files within to the plugins directory of your WordPress install (WORDPRESS-DIRECTORY/wp-content/plugins/) [e.g. www.yourdomain.com/wp-content/plugins/]
* From your WordPress dashboard, choose 'Installed Plugins' option under the 'Plugins' category
* Locate the newly added plugin and click on the 'Activate' link to enable its features.


== Frequently Asked Questions ==
Do you have questions or issues with SIS Accordion? [Ask for support here.](http://wordpress.org/support/plugin/sis-accordion)

== Screenshots ==

1. Screenshot of accordion button before click on it.
2. Screenshot of accordion button after click on it.
3. Screenshot of accordion.
4. Screenshot of accordion Settings.
5. Screenshot of accordion custom post type.

== Changelog ==

= version 2.1 =
* Add event option to hide/show items on click or mouseover

= version 2.0 =
* Add accordion with custom post type
* Add multiple accordion at same page or theme
* Configure option as your need

= version 1.2 =
* A new option has been added to collapse all panels

= version 1.1 =
* A bug fixed to add a hyperlink in the description

= version 1.0 =
* Implementation of basic functionality.

== Upgrade Notice ==

= 2.1 =
Upgrade the plugin to get new options and functions.

== CREDIT ==

1.This plugin was developed by [Sayful Islam](http://sayful.net)

== CONTACT ==

[Sayful Islam](http://www.sayful.net)