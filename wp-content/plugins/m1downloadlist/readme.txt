=== m1.DownloadList ===
Contributors: maennchen1.de
Tags: attachment, attachments, download, downloads, file, filebase, filelist, filemanager, files, folder, folders, ftp, http, images, list, media, mp3, pdf
Requires at least: 4.0
Tested up to: 4.4
Stable tag: 0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin easily displays the folders and files from a selected directory. It can be placed by shortcode in any post.

== Description ==
This plugin easily displays the folders and files from a selected directory. It can be placed by shortcode with the parameters path and target in any post. Uploads must be done by a separate ftp program. No managing options.

= available optional shortcode parameters =
* path = directory path, starting by web root
* target = browser window name

= shortcode examples =
1. displays content of `wp-content/uploads/`: `[m1dll]` 
1. displays content of `your/foldername/here/`: `[m1dll path="your/foldername/here/"]`
1. displays content of `your/foldername/here/` and sort descending: `[m1dll path="your/foldername/here/" sort="DESC"]`
1. displays content of `your/foldername/here/`, open files in a new window: `[m1dll path="your/foldername/here/" target="_blank"]` 

== Installation ==
1. Upload the folder `m1.downloadlist` to your directory (`wp-config/plugins/`)
1. Activate the Plugin 
1. place the shortcode in your post


== Screenshots ==
1. place the shortcode in your post
2. display the directory listing

== Changelog ==
= 0.4 =
* feature: added localization german & english (+ pot-file) hope someone help to translate it!
= 0.3 =
* bugfix: display folder and file icons (thx to Lutz Müller)
* feature: sort ascending and descending
= 0.2 =
* bugfix: utf8_encode
* bugfix: plugin path
= 0.1 =
* initial release