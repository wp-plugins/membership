=== Membership lite ===
Contributors: WPMUDEV
Author: WPMUDEV
Tags: membership, api, checkout, framework, member, members, members only, paypal, register, buddypress, multisite, wordpress membership plugin
Requires at least: 3.0.1
Tested up to: 3.0.1
Stable tag: 1.0.1

Membership allows you to transform your WordPress site into a fully functional membership site.

== Description ==

Membership allows you to transform your WordPress site into a fully functional membership site - where you can provide access to downloads, online content, videos, forums, support and more through flexible membership levels and options.
Simple to use and massively flexible - this will meet all of your membership sites needs. So if you'd like to create a site like GigaOm, Izzy Video, PSD Tuts, now you can do that with ease!

= You can use Membership lite to create... =
* A WordPress membership site, offering resources, forums, downloads, videos, support and more... with two different levels of membership and complete customizations.
* Multiple membership sites on a WordPress MultiSite install - so any user of your site can have their own membership site.

= Membership Pro =
Membership lite is a fully functional but limited version of our <a href='http://premium.wpmudev.org/project/membership'>full Membership plugin</a>.
This lite version supports a maximum of two membership levels and two subscription levels, as well as a basic set of rules to get you started. This is
enough for most basic membership sites.

Our full version includes many more features:

* **Unlimited** membership levels!
* **Unlimited** subscription levels!
* **BuddyPress rules** - limit and protect access to groups, group creation, pages, blogs, private messageing
* **Administration area rules** - control blog creation (limit number per level), dashboard widgets, menus and sub-menus, available plugins.

<a href='http://premium.wpmudev.org/project/membership'>**Upgrade to the full version now &raquo;**</a>

= How does it work... well, it's really easy. =

Simply follow the instructions in the installation and configuration guide

You'll then be able to create Membership 'Levels' which can access different types of content, including 'free' (i.e users just visiting the site) and/or paid levels.

You can control access to:

* Downloads
* Categories
* Pages
* Posts
* Comments
* 'More' tags
* Galleries
* And **any content or functionality** (like forums!), via multiple different shortcodes

And you can also create two different levels of subscriptions, for example you can decide to:

* Offer free memberships that turn into paid subscriptions after x days
* Finite or indefinite subscriptions
* Serial renewing subscriptions
* Subscriptions that renew every 5, 10, 30, 90 etc. days
* And plenty more...

Perhaps the best thing about this plugin though - besides it's ease of use and flexibility - is that it's as much a framework as anything else.

Using our powerful but simple APIs you can add different gateways and rules straight into it with ease - any half decent WordPress developer should be able to do exactly that!

For example, adding gateways is easy - and we'll be adding plenty more - all you need to do is create a gateway along the lines of one that we supply and you'll be good to go.

= Building a Membership Site =
The WPMU DEV Membership plugin makes it very easy to create and manage a membership site for both free and paid subscribers.

Whilst the plugin handles a lot of the work, you will need to spend some time thinking through the structure of your site and how you want to set-up and categorise your content before installing and activating the Membership plugin.

= What is a membership site =
A membership site can take many guises, from Gigaom Pro which protects long articles and research, through to Izzy video which protects individual videos.

In all cases though, a membership site contains a minimum of two levels of content:

*	**Free (or teaser) content**, which is accessible to everyone and is used to entice potential new members into subscribing (and also help with SEO)
*	**Members only content**, which is only accessible to those who have an active (paid or free) subscription to the site.

We have put together an in-depth <a href='http://premium.wpmudev.org/project/membership/installation/'>instructions guide</a> to help you through using standard WordPress categories to mark posts / content as being accessible to either free users or members only, and then go into some of the more advanced features that allow you to protect individual uploads and distinct sections of a posts content.

== Installation ==

**To install**

1.  Download the plugin file
2.  Unzip the file into a folder on your hard drive

**Standard WP/WPMS (for blog by blog access)**

1.	Upload the membership folder and all it contents to /wp-content/plugins folder on your site
2.	The path to the main plugin file is wp-content/plugins/membership/membership.php

**To activate it on a blog by blog basis**

1.  Log into the blog dashboard that you want to set up membership on.
2.  Go to Plugins > Installed
3.  Click on Activate under Membership lite system

**Enabling your membership plugin**
By default, the membership plugin is disabled when first installed and when you go your Membership dashboard you will see it says Disabled.

You need to leave this as disabled until you have at least:

1.	Set up your categories
2.	Created and activated a basic level to use for strangers
3.	Assigned the stranger level in Membership > Edit Options panel

Otherwise, if you are running a live site and enabled the plugin in your Membership dashboard all content will be automatically protected until you have set up the stranger level.

**The Admin user**
The membership system can initially be administered by the admin user and is always disabled on the front end of your site for this user, you can add other users to the membership administration group by editing them in WordPress and ticking the Membership admin box at the bottom of the User Edit page.

= More Instructions on setup =
More instructions and screenshots on how to configure the Membership plugin can be found on the <a href='http://premium.wpmudev.org/project/membership/installation/'>WPMU DEV site</a>.

= Need help getting started? =
We provide comprehensive and guaranteed support on the <a href='http://premium.wpmudev.org/forums/tags/membership'>WPMU DEV forums</a> and <a href='http://premium.wpmudev.org/live-support/'>live chat</a>.

== Frequently Asked Questions ==

= How easy is it to set up? =
We have an indepth step by step guide to getting the plugin initially setup and configured <a href='http://premium.wpmudev.org/project/membership/installation/'>here</a>.

= Get Support =
We provide comprehensive and guaranteed support on the <a href='http://premium.wpmudev.org/forums/tags/membership'>WPMU DEV forums</a> and <a href='http://premium.wpmudev.org/live-support/'>live chat</a> only.

== Screenshots ==

1. The Membership admin menu
2. Membership dashboard and news stream
3. Attractive signup statistics
4. Bulk administer Membership Levels
5. Extendable content rules
6. Level edit screen makes it easy to protect content
7. Simply drag content rules to the relevant area to allow or prevent access
8. Define the subscription path a user passes through during their subscription
9. Drag and drop to add levels to a subscription or re-arrange the levels order.
10.	Allow paid or free subscriptions
11. Highly configurable with **a lot** of options and hooks / filters available.

== Changelog ==

= 1.0 =
* Initial release.