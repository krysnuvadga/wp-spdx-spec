# wp-spdx-spec

<p align="center">
<b> ==========WordPress Plugin For SPDX Specification========== </b>
</p>

A wordpress plugin that would render the spec in a WordPress website as web pages. This would also need to handle the multiple versions.

<p align="center">
<b> ==========Project Description========== </b>
</p>

The Linux Foundation is moving to a WordPress website, so we want to develop a WordPress plugin that would render the spec in a WordPress website as web pages. This would also need to handle the multiple versions.
A plugin of this sort will help to automatically update the website when new versions are released. The plugin essentially will get markdown file URL like github raw content url, convert markdown to html, put it
to custom post content and publish the content to a dedicated page on the WordPress website.

<p align="center">
<b> ==========Features========== </b>
</p>

1. This plugin get markdown file url like github raw content url.

2. It convert markdown file to html

3. Put it to custom post content

4. publish the content to a dedicated page on the WordPress website.

5. Automatically update spec content by editing file on your computer. e.g. by push your content to github.


<p align="center">
<b> ==========Installation for Development========== </b>
</p>

1. Clone your fork of the wp-spdx-spec plugin, on your local development server access the path `/wp-content/plugins/` of your local WordPress installation

2. Next, copy/move the wp-spdx-spec plugin folder to the `/wp-content/plugins/` folder on your web server.

3. After uploading the files, you need to visit the WordPress admin area and click on the Plugins link in the admin menu. You will see your plugin successfully installed on the plugins page.


<p align="center">
<b> ==========Installation for Production========== </b>
</p>

To install and activate the plugin, and then get it up and running in production, follow these steps:

1. First thing you need to do is go to your WordPress installation admin area and click on _**Plugins**_ » _**Add New**_

2. After that, click on the _**Upload Plugin**_ button on top of the page to upload the wp-spdx-spec.zip file in your plugin repository
