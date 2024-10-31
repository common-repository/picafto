=== Picafto - One-click Lazy load images (ACF compatible) ===
Contributors: melmacaluso
Tags: optimize, lazy load, lazy load images, performance, page speed, improve ranking
Requires at least: 3.9
Tested up to: 5.2.1
Stable tag: 1.1
Requires PHP: 5.2.4
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Instantly, automatically and painlessly make your website faster by reducing image payload and lazy loading them.

== Description ==

##What
Picafto makes your website faster by loading images after the rest of the content has been loaded. For the user it won't make a noticeable difference but for Search engines (Google, bing, yahoo etc.), it will.

In resume Picafto offers you:
-Automatic image load optimisation for vanilla Wordpress editor. (whenever you upload an image in your page/post picafto will take care of it and automatically enqueue the loading when is appropiate to improve your page speed performance)
-Same as above but for ACF fields (ACF being the main tool used by Wordpress theme developers when it comes to building your website, meaning that if you had a website built by a dev this applies to you)
-In addition you can add your own Picafto lazy loaded images with the sintax down below.

##Why
One of the main ranking factors, is page speed. Meaning: if your website is slow you won't rank as you would if it was lightin fast.

If they told you that there's a something that makes your website twice as fast (if images are being used, that's the main premise of the plugin) for free, in one click, instantly...would you use it?

##Developer Friendly & ACF compatibile
Picafto does all the groundwork for you when it comes to lazy loading your images in both the vanilla editor and the ACF WYSIWYG editor but say you want some images to be lazy loaded the Picafto way? Well said? Done! Just swap the `src` with `data-picafto-load` in your images and Picafto is going to take care of the rest:

Before:
```
<img src="https//google.com/image.png" alt="image" />
```

After:
```
<img data-picafto-load="https//google.com/image.png" alt="image" />
```

If needed you can opt-out of the lazy loading by simply placing `data-picafto-off` as follows:
<img data-picafto-off alt="image" />



== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/picafto` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= How faster is my website going to be? =

It depends on how image-heavy that specific page is. As you can see from the screenshots the increase is substantial when the page is image-heavy on either size-wise or number-wise, as in big images or many images (or incrementally if both).


= What about search engines not being able to see the image before the page is loaded? =

Guess what? They don't "see" it and what really makes the difference is the alt attribute which will stay the same and untouched. Not to mention that if that claim was remotely true, the page speed increase outweights by far the former thesis.

== Screenshots ==

1. Instant performance increase tested with Google's pagespeed insights.
2. Instant performance increase tested with GTMetrix.
3. Instant performance increase tested with Pingdom.

== Changelog ==

= 1.0 =
* Initial Release.
= 1.1 =
* Switched behaviour to "scroll" to fetch lazy loaded images instead of on 'load' event as google is not consistent in reports.
* Widened the regex to catch also unclosed `<img>` tags.
* Added `data-picafto-off` as an option to optout to lazy loading.