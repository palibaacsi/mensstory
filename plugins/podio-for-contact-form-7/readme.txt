=== Podio For Contact Form 7 ===
Contributors: Markus Tenghamn
Tags: Podio, Contact Form 7, API
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is a wordpress plugin for contact form 7 which will let you send the data from your contact forms directly to your Podio app.

== Description ==

This is a wordpress plugin for contact form 7 which will let you send the data from your contact forms directly to your Podio leads app or basically any other app. Simply add your API details and define which field should be your notes field and it will automatically start sending any submissions directly to Podio. Fields are matched by the contact form 7 field name and the external id in podio, any fields which go unmatched are sent to the notes field as to not loose any information.

This is only made to work with Contact Form 7. Has been tested from 3.0.0 to 3.3.3.

Please note that nothing will be sent to podio unless all your API details are filled in. Use the external id of a notes field to catch any fields that do not match between CF7 and Podio.

== Installation ==

1. Upload `podio-contact-form-7` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the Podio CF7 settings page via the admin area and fill in your Podio API and app details. Once these are filled in and an id for your external notes field is set you should see information going directly from your contact form to Podio.