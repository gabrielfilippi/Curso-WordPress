��`<?php exit; ?>a:1:{s:7:"content";a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"
	
	
	
	




















































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:83:"WPTavern: The Automattic Theme Team Announces Blockbase, Its New Block Parent Theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117361";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:209:"https://wptavern.com/the-automattic-theme-team-announces-blockbase-its-new-block-parent-theme?utm_source=rss&utm_medium=rss&utm_campaign=the-automattic-theme-team-announces-blockbase-its-new-block-parent-theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6504:"<img />Blockbase WordPress theme as seen from the site editor.



<p class="has-drop-cap">Any WordPress company that builds and maintains themes worth its salt is already doing at least some preliminary work as WordPress inches ever closer to bundling its upcoming block theme system. Automattic&rsquo;s Theme Team is no exception. Ben Dwyer <a href="https://themeshaper.com/2021/05/27/blockbase-a-parent-theme-for-block-themes/">announced the team&rsquo;s new Blockbase parent theme</a> on the Theme Shaper blog yesterday. It includes support for global styles and block templating.</p>



<p>The theme is based on the classic, block-editor-ready <a href="https://wptavern.com/automattic-launches-the-blank-canvas-wordpress-theme-for-building-single-page-websites">Blank Canvas</a> project that Automattic launched in January. <a href="https://github.com/Automattic/themes/commit/8c6b2f068f9a201dbf8e564aeb9ebdf19c319b7a">Until a few days ago</a>, it was even named Blank Canvas Blocks. I have been checking in on the team&rsquo;s work in the past couple of months, waiting to see how Blockbase and <a href="https://github.com/Automattic/themes/tree/trunk/mayland-blocks">Mayland Blocks</a>, a child theme based on the team&rsquo;s original Mayland, were coming along.</p>



<p>The team has built a well-rounded system that should keep them from overhauling each block theme they create for WordPress.com every time there is a change. For theme authors who have yet to dip their toes into the block-theme pond, it might also be the starting point they need.</p>



<p>The Holy Grail of some block theme designers will be creating a project with little more than a <code>theme.json</code> file. The goal: let WordPress generate all the CSS via setting and style configurations. It will never be possible for all theme authors to achieve their design goals through this &mdash; most will need at least <em>some</em> custom CSS. And, whether such a goal is <em>A Good Thing</em> remains to be seen.</p>



<p>Nevertheless, the future of theme design will lean on JSON-configured and generated styles. Blockbase leverages this system to create a standardized set of guideposts for its eventual child themes. This ensures that creators are not continually updating their themes as block styling rapidly evolves.</p>



<p>Blockbase serves as a bridge between what is currently possible to configure via a <code>theme.json</code> file and what will be possible in the future.</p>



<p>It is the modern-day <a href="https://underscores.me/">Underscores (_s)</a> for blocks, and the WordPress theme design community will need such a project moving forward. They will need a starting point and educational tool, and Blockbase is just that.</p>



<p>The <a href="https://wptavern.com/gutenberg-10-7-integrates-with-the-pattern-directory-introduces-new-block-design-controls">latest version</a> of the Gutenberg plugin only covers a fraction of what it and, eventually, WordPress will handle in the coming months and years. However, it does allow theme authors to add custom settings via the <code>settings.custom</code> key, creating their own CSS variables that are automatically output in the site&rsquo;s head. The Theme Team used this feature to their advantage. Where Gutenberg does not currently support a setting, Blockbase has a custom <code>theme.json</code> parameter. The theme then uses the generated CSS variables in its stylesheet. As Gutenberg and WordPress eventually support more of these settings out of the box, the team can simply remove unneeded code.</p>



<p>The theme is not altogether unopinionated. &ldquo;Blockbase is intended to be a representation of all the theme style settings that we believe should eventually live in Global Styles and be configurable by users,&rdquo; wrote Dwyer. Block theme development could still change in unexpected ways as the system continues to be refined, and the theme will need to change along with it. Bumps in the road should be expected.</p>



<p>It is a project that soon-to-be and current block themers can learn from. While it is currently <a href="https://github.com/Automattic/themes/tree/trunk/blockbase">available via GitHub</a>, Dwyer said the team can investigate making it a npm package if there is enough interest.</p>



<p>One of the most unique things the theme does is work with the <code>theme.json</code> settings via PHP. In Blockbase&rsquo;s <code>functions.php</code> file, it <a href="https://github.com/Automattic/themes/blob/3c94941e6c4a6829611084db1f9e3dcb2b272154/blockbase/functions.php#L62-L82">plucks out font-family names registered</a> in the JSON file. It then automatically loads their associated stylesheets from the Google Fonts API. While it is not documented in the code (it should be), I am taking an educated guess that the goal is to allow child theme authors to declare fonts in their own <code>theme.json</code> files and for Blockbase to handle the loading.</p>



<p>The code is relatively simple. It is the technique that matters.</p>



<p>As developers grapple with the changing nature of WordPress theme architecture, they will need to find new solutions for some of the old problems they previously solved in a PHP-only world. With most theme configuration moving to JSON and templates to HTML, it can be easy to feel like they are losing that dynamic nature of PHP. It was something reliable, and developers have spent years honing custom systems around the old WordPress.</p>



<p>The new WordPress delivers a more robust set of design tools out of the box, but it can seem a bit foreign. That is why seeing real-world code examples of how others are handling these features is a vital step in transitioning more theme authors to block-based development.</p>



<p>This may be a small code sampling, but I am impressed by the clever thinking. In my journey to learn more about how block themes work, I often find myself hitting a brick wall, fighting against the system. This code works <em>with</em> it instead of <em>against</em> it.</p>



<p>I do not often write several paragraphs about one function that spans a mere 21 lines of code, but I am still a developer at heart and love seeing elegantly simple solutions. It is not about the font-loading technique; it is about solving problems. This code will undoubtedly be copied many thousands of times over in the coming years and modified for many more thousands of uses. If you are a theme developer and do not see it yet, you will.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 29 May 2021 00:00:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:11:"
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:38:"HeroPress: Yoast Pivots Diversity Fund";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://heropress.com/?p=3632";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:121:"https://heropress.com/yoast-pivots-diversity-fund/#utm_source=rss&utm_medium=rss&utm_campaign=yoast-pivots-diversity-fund";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2606:"<img width="1024" height="512" src="https://heropress.com/wp-content/uploads/2021/05/yoast_banner.jpg" class="attachment-large size-large wp-post-image" alt="" />
<p>For the last three and a half years, Yoast has offered a &#8220;diversity fund&#8221;, which funded WordCamp attendance for underrepresented people in tech. The goal was to increase the diversity at WordCamps. It worked very well. According to a <a href="https://yoast.com/diversity-fund/">recent blog post</a>:</p>


<blockquote>
<p>During 2018, 2019, and 2020:</p>
<ul>
<li>We were able to sponsor 70 people,</li>
<li>To join a total of 56 events,</li>
<li>That were all around Asia, Africa, North America, South America, Europe, and Australia.</li>
</ul>
</blockquote>


<p>The problem is that in 2020 all that came to a screeching halt when WordCamps stopped happening. But rather than throw up their hands and say &#8220;Oh well!&#8221;, the good folks at Yoast came up with a new plan.</p>



<h3 id="h-the-new-plan">The New Plan</h3>



<p>The new plan is to sponsor the same group of people, but to fund their WordPress projects, rather than travel to an event. To quote the same blog post from above:</p>



<blockquote class="wp-block-quote"><p>So what kind of projects are we looking for? It can be a short-term project, like fixing a simple bug, or a longer-term project like creating a new WordPress theme. That being said, we are looking for projects that aim to be no longer than one WordPress release cycle of three months.</p></blockquote>



<p>I particularly love this new direction because it feels like a more substantial contribution. Don&#8217;t get me wrong, I think WordCamps are great and important, but supporting someone financially for three months while they build something that the entire world gets to use just feels like a bigger thing.</p>



<p>Diversity is very important to us here at HeroPress.  We&#8217;ve striven for diversity across multiple metrics, from gender to age, culture, geography, and language. I think that&#8217;s why this project speaks to me more than others.</p>



<p>So many thanks to Yoast for making this happen.</p>



<p>If you&#8217;d like more information about the program, check out this <a href="https://yoast.com/diversity-fund/">blog post</a>, and if you&#8217;d like to apply for the fund <a href="https://yoast.com/yoast-diversity-fund/apply/">click here</a>.</p>
<p>The post <a rel="nofollow" href="https://heropress.com/yoast-pivots-diversity-fund/">Yoast Pivots Diversity Fund</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 28 May 2021 13:03:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"BuddyPress: BuddyPress 8.0.0 Release Candidate";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=319009";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"https://buddypress.org/2021/05/buddypress-8-0-0-release-candidate/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3107:"<p>The first release candidate for BuddyPress 8.0.0 is now available!</p>



<div class="wp-block-buttons is-content-justification-center">
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background" href="https://downloads.wordpress.org/plugin/buddypress.8.0.0-RC1.zip">Let&#8217;s test it!</a></div>
</div>



<div class="wp-block-spacer"></div>



<p>&#8220;Release Candidate&#8221; means that we think the new version is ready for release, but with more than 200,000 active installs, hundreds of BuddyPress plugins and Thousands of WordPress themes, it’s possible something was missed. BuddyPress 8.0.0 is slated for release&nbsp;on&nbsp;<strong>June 7, 2021</strong>, but&nbsp;<em>your</em>&nbsp;help is needed to get there — if you haven’t tried 8.0.0 yet,&nbsp;doing it now is a great idea!</p>



<p>You can test the&nbsp;<a href="https://downloads.wordpress.org/plugin/buddypress.8.0.0-RC1.zip">8.0.0-RC</a>&nbsp;pre-release in 4 ways :</p>



<ul><li>Try the&nbsp;<a href="https://wordpress.org/plugins/bp-beta-tester/">BP Beta Tester</a>&nbsp;plugin.</li><li><a href="https://downloads.wordpress.org/plugin/buddypress.8.0.0-RC1.zip">Download the release candidate here (zip file)</a>.</li><li>Check out our SVN repository:&nbsp;<code>svn co https://buddypress.svn.wordpress.org/trunk/</code></li><li>Clone our read-only Git repository:&nbsp;<code>git clone git://buddypress.git.wordpress.org/</code></li></ul>



<p>A detailed changelog will be part of our official release note, but&nbsp;you can get a quick overview by reading the post about the&nbsp;<a href="https://buddypress.org/2021/04/buddypress-8-0-0-beta1/">8.0.0 Beta1</a>&nbsp;release.</p>



<div class="wp-block-spacer"></div>



<h2>Plugin and Theme Developers</h2>



<p>Please test your plugins and themes against BuddyPress 8.0.0. If you find compatibility problems, please be sure to post to this specific&nbsp;<a href="https://buddypress.org/support/topic/buddypress-8-0-0-release-candidate/">support topic</a>&nbsp;so we can figure those out before the final release. We strongly advise you to have a look at the&nbsp;<a href="https://bpdevel.wordpress.com/category/development-notes/8-0/">8.0.0 developer notes</a>&nbsp;to figure out what to focus on during your testing.</p>



<div class="wp-block-spacer"></div>



<h2>How you can help</h2>



<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp-plugins/buddypress/">Help us translate BuddyPress into as many languages as possible!</a> This release also marks the <a href="https://make.wordpress.org/polyglots/handbook/glossary/#string-freeze">string freeze</a> point of the 8.0.0 release schedule.</p>



<p><em><strong>If you think you’ve found a bug</strong>, you can share it with us replying to this <a href="https://buddypress.org/support/topic/buddypress-8-0-0-release-candidate/">support topic</a> or if you’re comfortable writing a reproducible bug report,&nbsp;<a href="https://buddypress.trac.wordpress.org/">file one on BuddyPress Trac</a></em>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 28 May 2021 04:30:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Mathieu Viet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WPTavern: Happy 18th Birthday, WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117346";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:123:"https://wptavern.com/happy-18th-birthday-wordpress?utm_source=rss&utm_medium=rss&utm_campaign=happy-18th-birthday-wordpress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4396:"<p>WordPress is celebrating 18 years today since the first release of the software to the general public. That release post, titled, &ldquo;<a href="https://wordpress.org/news/2003/05/wordpress-now-available/">WordPress Now Available</a>,&rdquo; kicked off an exciting era in the history of the blogosphere where WordPress emerged as an unofficial successor to the abandoned b2/cafelog software. Reading the comments on the first release, you can feel the energy of that time when loyal b2 users were thrilled to have a smooth migration to a new blogging engine that would be maintained.</p>



<p>One line in that post may have had even more impact on WordPress&rsquo; trajectory than the features contained in the first release: </p>



<p>&ldquo;<em><a href="http://wordpress.org/">WordPress</a>&nbsp;is available completely free of charge under the GPL license.</em>&ldquo;</p>



<p>The license it inherited from b2 empowered the WordPress community to make it the powerful CMS that it is today. WordPress now underpins a multi-billion dollar economy of creators, publishers, and merchants who can build just about anything with the world of GPL-licensed extensions available. WordPress&rsquo; vibrant ecosystem has grown to include more than 58,000 free plugins to extend core, and thousands of commercial plugins and services, including hosting companies that cater specifically to its users.</p>



<p>WordPress was instrumental in making publishing software accessible to those with no coding experience, and it is now doing the same for e-commerce, facilitating billions of dollars in sales for businesses and independent stores. The pandemic created <a href="https://wptavern.com/tectonic-shifts-in-retail-industry-are-creating-unprecedented-opportunities-for-independent-stores">unprecedented opportunities for WordPress-powered stores</a> to succeed as traditional brick-and-mortar businesses were forced to close their doors. </p>



<p>Despite weathering some profound, once-in-a-lifetime challenges over the past year, WordPress has continued to grow at a phenomenal rate. In February, the CMS passed <a href="https://wptavern.com/wordpress-passes-40-market-share-of-alexa-top-10-million-websites">40% market share of all websites</a>, up from 35.4% in January 2020, as measured by&nbsp;<a href="https://w3techs.com/technologies/details/cm-wordpress">W3Techs</a>. WordPress&rsquo; project lead and co-founder Matt Mullenweg noted this milestone in a <a href="https://ma.tt/2021/05/wordpress-18/">post</a> on his blog, marking the 18th anniversary:</p>



<blockquote class="wp-block-quote"><p>Who could have imagined that our nights and weekends hacking on blogging software, a fork of&nbsp;<a href="https://milestonesbook.wordpress.com/2015/11/16/the-only-blogger-in-corsica/">b2/cafelog</a>, could turn into something&nbsp;<a href="https://wordpress.org/40-percent-of-web/">powering over 40% of the web</a>? Or that nearly twenty years in, it would be getting better faster than it ever has been?</p></blockquote>



<p>WordPress.org is celebrating with a new history timeline that logs <a href="https://wordpress.org/40-percent-of-web/">40 major milestones along the path to 40% market share</a>. Scrolling through it reads like a story, highlighting some of the most salient moments in WordPress&rsquo; history, like the launch of the plugin repository, major interface improvements, and the first WordCamp. There are some interesting notes about how WordPress was able to outpace its contemporaries in the early days, doubling its downloads after Moveable Type 3.0 introduced licensing restrictions. The software had several turns of fortune along the way that have bolstered its market dominance.</p>



<p>For many who have contributed to WordPress&rsquo; success, it&rsquo;s the smaller points that don&rsquo;t make this official timeline which have been the glue for this community. Friendships are forged in working together and celebrating small wins but also in weathering the friction, conflict, and human failures that come part and parcel with working on an open source project. </p>



<p>18 years of growth is a milestone worth recognizing on the web. Congratulations to the code contributors, translators, community organizers, WordPress leadership, and everyone else who has helped make this beloved publishing platform that continues to surprise the world.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 28 May 2021 03:29:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:100:"WPTavern: Gutenberg 10.7 Integrates With the Pattern Directory, Introduces New Block Design Controls";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117350";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:243:"https://wptavern.com/gutenberg-10-7-integrates-with-the-pattern-directory-introduces-new-block-design-controls?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-10-7-integrates-with-the-pattern-directory-introduces-new-block-design-controls";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7306:"<p class="has-drop-cap">Gutenberg 10.7 landed yesterday. Within a few hours, the development team also released version 10.7.1 of the plugin with a few bug fixes. The latest update primarily focuses on work expected to land in WordPress 5.8 this July.</p>



<p>The feature freeze deadline for the current WordPress development cycle passed on Tuesday. This should mean that no new features beyond Gutenberg 10.7 will make it into the core platform. WordPress 5.8 Beta 1 is slated for June 8.</p>



<p>This release feels like the team has polished the interface and experience for the better. Users can also look forward to several enhancements, such as additional block design options.</p>



<h2>Block Pattern Directory Integration</h2>



<p class="has-drop-cap">Gutenberg now <a href="https://github.com/WordPress/gutenberg/pull/28800">serves its default block patterns</a> via the pattern directory on WordPress.org. This moves their development outside of the plugin and core WordPress, which means designers can iterate on them without a user needing to update. They will always have the latest version available from the editor.</p>



<img />Inserting a pattern into the content canvas.



<p>The <a href="https://wordpress.org/patterns/">pattern directory</a> will be a handy tool for end-users. For many, it will likely serve as a path toward building more complex layouts in the WordPress editor. At the moment, it only houses 10 patterns. This will change after it is opened to community submissions.</p>



<p>Shaun Andrews shared some of the ongoing <a href="https://make.wordpress.org/design/2021/05/12/wordpress-org-patterns-directory-i2/">design work for the directory</a>, and it is beautiful. I am eager to see the final result when it launches.</p>



<img />Recent work on the block pattern directory.



<p>A side note about block patterns: there is currently a bug that may cause some of those <a href="https://github.com/WordPress/gutenberg/issues/32139">bundled with themes to not appear</a> in the inserter.</p>



<h2>New Block Design Controls</h2>



<p class="has-drop-cap">Version 10.7 introduces several new design controls for blocks. The most exciting feature for many will be <a href="https://github.com/WordPress/gutenberg/pull/30608">margin controls</a> for more precise control over spacing. Theme authors must set the <code>settings.spacing.customMargin</code> key to <code>true</code> in their <code>theme.json</code> files to enable this.</p>



<p>Currently, only the <a href="https://github.com/WordPress/gutenberg/pull/31728">Site Title</a> and <a href="https://github.com/WordPress/gutenberg/pull/31809">Site Tagline</a> blocks support margin controls. However, now that the initial feature has landed, we should expect others to follow suit in future versions.</p>



<img />Spacing and typography controls for title and tagline



<p>The Site Title block also has <a href="https://github.com/WordPress/gutenberg/pull/31734">letter case typography controls</a>.</p>



<p>The development team upgraded the Column block with a couple of new options. Users can now customize the <a href="https://github.com/WordPress/gutenberg/pull/31778">padding and colors</a> for individual columns.</p>



<img />Customizing individual columns.



<p>One of the more low-key enhancements happens to be one of my favorite changes. The Media &amp; Text block received a new <a href="https://github.com/WordPress/gutenberg/pull/31002">&ldquo;media width&rdquo; block option</a> in the sidebar. This makes getting the correct width a far better experience than using the drag handle in the content canvas.</p>



<img />Adjusting the media width in the Media &amp; Text block



<p>I may begin using this block more now. I had been shying away from it for any use case beyond the default width settings.</p>



<p>Another welcome enhancement is <a href="https://github.com/WordPress/gutenberg/pull/30890">Cover being added as a transform</a> option for the Group block. It will only appear if the block has a background.</p>



<h2>Template Editor Welcome Guide</h2>



<img />Welcome message for the template editor.



<p class="has-drop-cap">Template-editing mode will be one of the most highlighted features for WordPress 5.8. It allows users to switch from content to template editing while never leaving the post screen. Therefore, users will need a <a href="https://github.com/WordPress/gutenberg/pull/31330">welcome guide</a> to explain the new feature.</p>



<p>Currently, the message reads:</p>



<blockquote class="wp-block-quote"><p>Welcome to the template editor</p><p>Templates express the layout of the site. Customize all aspects of your posts and pages using the tools of blocks and patterns.</p></blockquote>



<p>It is a solid starting point, but it does not fully explain what this mode is about. I expect the development team to smooth it out a bit, maybe add an extra slide or two, or even link to a dedicated documentation page on WordPress.org. Helping users set off on the right foot with this new feature should mitigate confusion and lower the support burden.</p>



<p>There is currently an <a href="https://make.wordpress.org/test/2021/05/26/fse-program-testing-call-7-polished-portfolios/">open call for volunteers</a> to provide feedback on the template editor while building a portfolio-type landing page (<a href="https://wptavern.com/fse-outreach-7-building-a-portfolio-in-the-upcoming-template-editing-mode">see my results</a>). Make sure to get involved if you can spare half an hour or more.</p>



<h2>Buttons Block Uses <code>column-gap</code></h2>



<img />Gap between buttons.



<p class="has-drop-cap">This is more of a theme developer note, but some users may have noticed lines of buttons not extending to the edge of their container. In certain situations, at least.</p>



<p>Essentially, the space between individual Button blocks used a bit of a hacky, old-school CSS margin solution to create the gutter space between each. In the modern world of flex and grid layouts, it is something most designers dread seeing. It overcomplicates things and makes for more bloated CSS, particularly if you want to make adjustments based on screen size.</p>



<p>I am highlighting this change because it is one of those stages where the block system is becoming more polished under the hood. And, it could be the start of more exciting things to come for theme authors.</p>



<p>&ldquo;This is great, this is beautiful, themers are going to love it,&rdquo; <a href="https://github.com/WordPress/gutenberg/pull/31386#issuecomment-831088979">wrote Joen Asmussen</a> in the ticket. &ldquo;At some point once the dust settles, we should see if this gap could become a global styles property; since it&rsquo;s so easy to change and resilient, it would be nice to handle in such a neat way.&rdquo;</p>



<p>It is a welcome sight to see the use of <code>column-gap</code> land in the plugin. Of course, it could use <code>row-gap</code> for vertical spacing instead of margins in those cases where Buttons extend beyond a single row.</p>



<p>Now, can we do the same for the Columns, Gallery, and Query Loop blocks? Normalizing the system for gutters/gaps between flex items can save dozens upon dozens of lines of code in the long term.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 28 May 2021 00:41:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"Matt: WordPress 18";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=54256";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:35:"https://ma.tt/2021/05/wordpress-18/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1446:"<img />



<p>Today marks eighteen years since the <a href="https://wordpress.org/news/2003/05/wordpress-now-available/">very first release of WordPress</a>. I consider myself so lucky to have co-founded the project alongside <a href="https://mikelittle.org/">Mike Little</a>. Who could have imagined that our nights and weekends hacking on blogging software, a fork of <a href="https://milestonesbook.wordpress.com/2015/11/16/the-only-blogger-in-corsica/">b2/cafelog</a>, could turn into something <a href="https://wordpress.org/40-percent-of-web/">powering over 40% of the web</a>? Or that nearly twenty years in, it would be getting better faster than it ever has been?</p>



<p>I blogged these anniversaries when WordPress was <a href="https://ma.tt/2008/05/wordpress-party-2/">five</a>, <a href="https://ma.tt/2013/05/dear-wordpress/">ten</a>, <a href="https://ma.tt/2018/05/wordpress-at-15/">fifteen</a>, and last year at <a href="https://ma.tt/2020/05/celebrate-seventeen/">seventeen</a>, but as the project reaches an age that, if it were a child, it would be heading off to college, I&#8217;m uncharacteristically at a loss for words.</p>



<p>The overwhelming feeling is one of gratitude, so I want to say thank you to <em>every</em> person who has ever been involved with making WordPress as a contributor, a community organizer, or as an end-user of the software. It&#8217;s amazing what we can accomplish when we work together.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 May 2021 22:31:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:43:"WordPress Foundation: 18 years of WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"https://wordpressfoundation.org/?p=187010";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpressfoundation.org/2021/18-years-of-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4064:"<p>On this very day 18 years ago (May 27th), <a href="https://wordpress.org/news/2003/05/wordpress-now-available/">the first version of the WordPress open source software</a> came out. WordPress has come a long way in the past 18 years. At the time of writing this blog post, WordPress has surpassed <a href="https://wordpress.org/news/category/releases/">40 releases</a> and <a href="https://w3techs.com/blog/entry/40_percent_of_the_web_uses_wordpress">powers more than 40% of the web</a>!</p>



<p>Check out these 40 key milestones in the WordPress journey towards 40% of the web!</p>



<div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content"><a href="https://wordpress.org/40-percent-of-web/">WordPress and the Journey to 40% of the Web</a></blockquote>
</div>



<p>One of the critical milestones in this journey is <a href="https://wordpress.org/40-percent-of-web/#2010-foundation">the establishment of the WordPress Foundation in January 2010</a>. The foundation aims to ensure free access, in perpetuity, to WordPress and the software projects we support. People and businesses may come and go, so it is essential that the source code for these projects will survive beyond the current contributor base. This will ensure that we have a stable platform for web publishing for generations to come. As part of this mission, the Foundation will protect <a href="https://wordpressfoundation.org/trademark-policy/">WordPress, WordCamp, and related trademarks</a>. </p>



<p>A 501(c)3 non-profit organization, the WordPress Foundation pursues a charter to educate the public about WordPress and related open source software. We regularly host educational programs like <a href="https://doaction.org/">charity hackathons</a> and <a href="https://wordpressfoundation.org/tag/intro-to-open-source/">open source educational events</a>. These programs are made possible through the help of generous donations from<a href="https://wordpressfoundation.org/donors/"> our donors</a>.&nbsp;</p>



<p>If WordPress has helped you in any way during the past 18 years, <a href="https://wordpressfoundation.org/donate/">kindly consider donating to the WordPress Foundation</a>. Money raised by the WordPress Foundation will be used to ensure free access to <a href="http://wordpressfoundation.org/projects/">supported software projects</a>, <a href="https://wordpressfoundation.org/trademark-policy/">protect the WordPress trademark</a>, and fund various programs. In short – your donations will go a long way in helping the WordPress project. You can either <a href="https://wordpressfoundation.org/donate/">make a one-time donation or choose to donate annually</a>. If you sign up for any one of the four annual subscription plans, you will be featured on our <a href="https://wordpressfoundation.org/donors/">Donors page</a> &#8211; as a token of our gratitude for supporting education programs about WordPress and open source. </p>



<div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content"><a href="https://wordpressfoundation.org/donate/">Donate</a></blockquote>
</div>



<p>WordPress would not exist without its team of global contributors that help build the software. The best way to give back to WordPress is to help us build it! You need not be a developer to give back to WordPress &#8211; some other ways to contribute to the project include <a href="https://make.wordpress.org/polyglots/">translations</a>, <a href="https://make.wordpress.org/support/">support</a>, <a href="https://make.wordpress.org/community/">community</a>, <a href="https://make.wordpress.org/docs/">documentation</a>, and <a href="https://make.wordpress.org/marketing/">marketing</a>, to name a few. In other words &#8211; anyone and everyone can contribute to WordPress, and <a href="https://make.wordpress.org/">we strongly encourage you to do so</a>!</p>



<p>Thank you for your support of WordPress over the past 18 years. Your continued patronage will ensure that WordPress will keep going for the next 18 years and beyond!&nbsp;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 May 2021 10:57:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Hari Shanker";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"WordPress.org blog: WordPress at 18";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10380";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/news/2021/05/wordpress-at-18/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1022:"<p>Today marks the 18th anniversary of WordPress&#8217; launch, a day that I fondly refer to as WordPress&#8217; birthday, which means WordPress is 6,575 days old. To celebrate another turn around the sun, the <a href="https://wordpress.org/news/2008/05/birthday-party/">community</a> has had <a href="https://wp15.wordpress.net/">parties</a>, we have <a href="https://wordpress.org/news/2010/05/lucky-seven/">shared data</a>, and we have <a href="https://wordpress.org/news/2013/05/ten-good-years/">told our story</a>.</p>



<p>Since our last birthday we developed our 40th release and now also support over 40% of the web. So it seems fitting that this year&#8217;s celebration should be a list of 40 milestones that have helped us get there.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content"><a href="https://wordpress.org/40-percent-of-web/">WordPress and the Journey to 40% of the Web</a></blockquote>
</div>



<p>Grab a slice of cake or festive beverage and give it a scroll!</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 May 2021 06:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"Josepha";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:91:"WPTavern: Joomla Blocks FLoC by Default, Drupal Moves to Block FLoC in Upcoming 9.2 Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117217";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:225:"https://wptavern.com/joomla-blocks-floc-by-default-drupal-moves-to-block-floc-in-upcoming-9-2-release?utm_source=rss&utm_medium=rss&utm_campaign=joomla-blocks-floc-by-default-drupal-moves-to-block-floc-in-upcoming-9-2-release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7349:"<p>Joomla has <a href="https://developer.joomla.org/news/855-joomla-and-floc.html?s=09">announced</a> plans to block Google&rsquo;s Federated Learning of Cohorts (<a rel="noreferrer noopener" href="https://github.com/WICG/floc" target="_blank">FLoC</a>) by default going forward. The <a href="https://www.joomla.org/announcements/release-news/5836-joomla-3-9-27.html">3.9.2.7</a> security update, released yesterday, <a href="https://github.com/joomla/joomla-cms/pull/33212">added a Permissions Policy header to disable FLoC</a>. Users can now find a new setting in Global configuration on the Site tab in the Site Settings area, where they can toggle FLoC on if desired. This change will also affect existing sites updated from older versions.</p>



<p>The Joomla Developer Network blog outlined a few concerns contributors have about fingerprinting, the technology Google uses to gather information from a user&rsquo;s browser to create a unique, stable identifier. They also highlighted cross-content exposure as another concern: </p>



<blockquote class="wp-block-quote"><p>The technology will share new personal data with trackers who can already identify users. For FLoC to be useful to advertisers, a user&rsquo;s cohort will necessarily reveal information about their behavior.<br />This means every site you visit will have a good idea about what kind of person you are on first contact, without having to do the work of tracking you across the web.<br />If you visit a site to buy a jumper they will have access to your cohort identifying number. This could also give them your political thinking or reveal that you are also in certain defined medical groups. There is nothing to stop these groups being backward engineered and your movement between the cohorts will reveal a lot about you over time.</p></blockquote>



<p>A similar permissions policy header was <a href="https://www.drupal.org/node/3213197">added to Drupal 9.2.0-beta1</a> on May 14, after a lengthy <a href="https://www.drupal.org/project/drupal/issues/3209628">discussion</a> with overwhelming consensus to block FLoC. It  is expected to be part of Drupal core on June 16, 2021, when 9.2 is scheduled to be released.</p>



<p>&ldquo;I&rsquo;d love to see this added to core and enabled by default,&rdquo; Drupal founder Dries Buytaert <a href="https://www.drupal.org/project/drupal/issues/3209628#comment-14077502">commented</a> on the implementation discussion. &ldquo;We should provide an option/mechanism to disable it though.&rdquo; He said he has already added a Permissions-Policy header on his personal blog.</p>



<p>Drupal makes disabling it a bit more of a hurdle than Joomla, as it requires setting <code>block_interest_cohort</code> to FALSE in the settings.php file.</p>



<p>Although FLoC is still in the experimental stage, many other frameworks and tools have blocked it or are planning to block it.<strong> </strong>The&nbsp;<a href="https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg">DuckDuckGo Chrome extension</a>&nbsp;has been reconfigured to block FLoC&rsquo;s tracking, in addition to DuckDuckGo Search opting users out. GitHub is also <a href="https://github.blog/changelog/2021-04-27-github-pages-permissions-policy-interest-cohort-header-added-to-all-pages-sites/">blocking FLoC on GitHub Pages</a> and all sites served from the github.io domain.&nbsp;Although Chrome is the market leader by a wide margin, Google has not yet been able to sway any other major browsers to get on board. At this time, Microsoft Edge, Safari, and Firefox <a href="https://www.theverge.com/2021/4/16/22387492/google-floc-ad-tech-privacy-browsers-brave-vivaldi-edge-mozilla-chrome-safari">do not plan to adopt FLoC</a>.</p>



<p>&ldquo;It is disappointing to see Google, instead of taking the present opportunity to help design and build a user-first, privacy-first Web, proposing and immediately shipping in Chrome a set of smaller, ad-tech-conserving changes, which explicitly prioritize maintaining the structure of the Web advertising ecosystem as Google sees it,&rdquo; Brave CEO and co-founder Brendon Eich and senior privacy researcher Peter Snyder wrote in a&nbsp;statement on the company&rsquo;s <a href="https://brave.com/why-brave-disables-floc/">blog</a>. &ldquo;The worst aspect of FLoC is that it materially harms user privacy, under the guise of being privacy-friendly.&rdquo;</p>



<p>Brave has disabled FLoC and the company recommends that all sites do the same, advising that &ldquo;any new privacy-risking features on the web should be opt-in.&rdquo; The post concludes that FLoC will not be an improvement on current ad tech:</p>



<blockquote class="wp-block-quote"><p>Overall, FLoC, along with many other elements of Google&rsquo;s &ldquo;Privacy Sandbox&rdquo; proposal, are a step backward from more fundamental, privacy-and-user focused changes the Web needs. Instead of deep change to enforce real privacy and to eliminate conflicts of interest, Google is proposing Titanic-level deckchair-shuffling that largely maintains the current, harmful, inefficient system the Web has evolved into, a system that has been disastrous for the Web, users and publishers.</p><p>What the Web desperately needs is radical change, one where &ldquo;would users want this?&rdquo; is the most important question asked for each new feature. Instead, FLoC and &ldquo;Privacy Sandbox&rdquo; ask &ldquo;how can we make this work for ad-tech, in a way that users will tolerate or not notice.&rdquo;</p></blockquote>



<p>The open source Umbraco CMS is taking a more hands-off approach to the controversial issue. In response to <a href="https://github.com/umbraco/Umbraco-CMS/issues/10147">a PR suggesting suggesting Umbraco block FLoC</a>, Umbraco project manager Sebastiaan Janssen said, &ldquo;We feel it&rsquo;s not our place or task to enforce this kind of blocking, we believe site implementers should be free to use whatever services they think make sense for their sites (as well as block them when they want).&rdquo;</p>



<p>At this point in Google&rsquo;s Chrome&rsquo;s Origin Trial, Chrome representatives do not yet know how the FLoC API will be finalized for determining which pages will be included in FLoC calculations. WordPress has not yet made a determination about whether to block FLoC or leave it site owners to decide. Multiple <a href="https://wordpress.org/plugins/search/FLoC/">FLoC blocking plugins</a> are already available to users who want to opt out now. After a lengthy and heated <a href="https://wptavern.com/floc-blocking-discussion-continues-on-wordpress-trac">discussion</a> on a proposal to block FLoC by default, WordPress core leadership <a href="https://core.trac.wordpress.org/ticket/53069">moved the conversation to Trac</a> where contributors are monitoring Google&rsquo;s experiment. </p>



<p>The ticket has not yet received much feedback as WordPress is taking a more cautious approach that will depend on how Google decides to implement its FLoC API. Without the support of any major browsers, WordPress&rsquo; support or opposition may be critical to the success or failure of FLoC adoption on the web. Once more information from the FLoC trial becomes available, WordPress contributors will be in a better position to decide a course of action.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 May 2021 02:25:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WPTavern: FSE Outreach #7: Building a Portfolio in the Upcoming Template-Editing Mode";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117293";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:211:"https://wptavern.com/fse-outreach-7-building-a-portfolio-in-the-upcoming-template-editing-mode?utm_source=rss&utm_medium=rss&utm_campaign=fse-outreach-7-building-a-portfolio-in-the-upcoming-template-editing-mode";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6494:"<p class="has-drop-cap">Feedback for <a href="https://make.wordpress.org/test/2021/05/26/fse-program-testing-call-7-polished-portfolios/">round #7 of the FSE Outreach Program</a> opened today. Like <a href="https://wptavern.com/fse-outreach-round-6-building-a-wordcamp-landing-page-via-the-template-editor">round #6</a>, the focus is once again on template-editing mode, a feature that is slated to ship with WordPress 5.8. All hands need to be on deck for it to have a chance of a successful landing.</p>



<p>I have been eager for this round of testing. FSE Outreach lead Anne McCarthy asked volunteers to follow a 16-step plan for building a portfolio template. Unlike the previous six tests, this one gives users more leeway, room to explore template editing.</p>



<p>As usual, the base set of tools is the latest version of the <a href="https://wordpress.org/plugins/gutenberg">Gutenberg plugin</a> and the <a href="https://wordpress.org/themes/tt1-blocks/">TT1 Blocks theme</a>.</p>



<p>For my portfolio, I decided to approach it as a hypothetical photographer who wanted to drum up some new clients and show off his latest work. The following screenshot is the end result:</p>



<img />



<p>Anyone is welcome to grab the HTML block code for this template. <a href="https://gist.github.com/justintadlock/89db71a9a08ba121dcd34dba17c91268">I saved it as a GitHub Gist.</a> The image URLs are to my local machine, so you will need to update those if you decide to give it a spin.</p>



<p>I had a lot of fun with this. And frustration. Some more fun. And&hellip;<em>you guessed it</em>&hellip;some more frustration.</p>



<p>The editor and I got off to a rough start. After adding my Cover block, I wanted to add a Columns block inside. <strong><em>Error.</em></strong> The dreaded invalid block message. I switched over to the code view to see if there was anything odd. It was empty. After switching back to visual, the Columns block seemed to be working. I was able to inconsistently reproduce this issue in template-editing mode.</p>



<p>I used a Columns block because it is the only way that I know how to create a left-aligned container covering 50% of its containing element. It is a bit of a hack, but you can set the block to one column and adjust its width to whatever size you need. Ideally, users would be able to do this with the Group block.</p>



<p>It was the underpinning of my template header area. I went with the traditional hero/cover intro that spanned the width of the page.</p>



<img />Header section of template using Cover block.



<p>Adding a site logo and navigation is where I hit my second snag. The navigation worked fine, mostly. On mobile, the responsive menu overlay is partially covered by the WordPress toolbar on the front end. However, I already knew this. Responsive nav menus are a work in progress.</p>



<p>I was unable to use the Site Logo block. Whenever I attempted to add it, it had a continual spinner icon that never went away. So, I opted for an Image block &mdash; you make do with the tools you got or the ones that are working.</p>



<img />Second test of adding a site logo in different section.



<p>The next section of template testing consisted of adding a Query pattern and customizing it. I have a love/hate relationship with queries in Gutenberg right now. The Query block itself works well. It has a solid balance between advanced usage and simplicity for the most part. I am amazed at what the development team has done over months upon months of iteration.</p>



<p>The downfall is that the Query block is merely a wrapper. It is only as good as its weakest sub-block. Most of its nested blocks are for post-related data, and the weakest among them is Post Featured Image. It limits everything that can be truly fun about building queries. It does not even cover a basic sub-set of the Image, Cover, and Media &amp; Text options.</p>



<p>It is frustrating because users and theme authors cannot build out their visions. I know it will get there someday. Today, we are limited to the basics without any themes offering highly customized Query patterns.</p>



<p>It is tough to go wrong with a simple grid, so that is what I did.</p>



<img />Grid-style portfolio layout (first image is out of line in editor)



<p>I followed that section with two Columns blocks nested inside another Columns block for a testimonials group. Then, I wrapped it up with a basic footer, running into the same issue with uploading a site logo. The most prevalent problems in these sections were inconsistent spacing.</p>



<p>Some of the limitations with these tests are not from the template editor in Gutenberg. Instead, they are from the TT1 Blocks theme. However, I suppose that depends on your philosophy about what the future of theme development should be. If most front-end styles should come from WordPress/Gutenberg, it is not a theme issue.</p>



<p>Vertical alignment is inconsistent in the best of times. Liberal use of the Spacer block is not ideal in real-world projects to align blocks. It can be a handy tool when needed, but it should not be a crutch for correcting foundational issues. The block system adds a few potholes in the road, but a well-rounded and tested theme can mitigate most of these problems. And, TT1 Blocks just does not do this. It relies almost exclusively on the core block styles without swerving left or right when it needs to.</p>



<p>The current padding controls for a few blocks like Group help with this. However, most users are not going to micromanage every pixel of every page on their sites. The same can be said for the margin controls when they become available. Again, both are useful and necessary tools, but users should not lean on them too heavily to correct design issues. In the long run, it will create more problems as site owners eventually swap themes.</p>



<p>Mismatched output in the editor versus the front end can become a headache at times. This is a known issue and noted in the call for testing, so I won&rsquo;t harp on it.</p>



<p>I enjoyed the process &mdash; <em>yes, I revel in both the fun and frustration</em>. Aside from everything that I think is broken, the overall system is <em>pretty dang sweet</em>. There are far more things that the development team has nailed down than there are that feel janky. However, calls for testing are all about finding the problems. I encourage all Tavern readers to join in and report your feedback.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 May 2021 01:04:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:157:"HeroPress: WordPress – The Source Of My Satisfaction And Joy – વર્ડપ્રેસ – સંતોષ અને આનંદ નો સાધન";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=3609";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:168:"https://heropress.com/essays/wordpress-the-source-of-my-satisfaction-and-joy/#utm_source=rss&utm_medium=rss&utm_campaign=wordpress-the-source-of-my-satisfaction-and-joy";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:23359:"<img width="1024" height="512" src="https://heropress.com/wp-content/uploads/2022/05/052621-min.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: The WordPress community has taught me that it's ok if I don't know everything. Nobody does." /><p><a href="https://heropress.com/feed/#gujarati">આ નિબંધ ગુજરાતીમાં પણ ઉપલબ્ધ છે</a></p>
<p>My adventure with WordPress started back in the year 2017. Till then there were many ups and downs and I was clueless which field I will enter into. Right until the end of 2016, I was giving my exams to become a Chartered Accountant (CA) equivalent to CPA. I also love baking cakes and pastries. So, in the first half of 2017, I had started a small homegrown bakery for making donuts. It was interesting but it didn&#8217;t give me a sense of satisfaction. I also hosted some small exhibitions of fabrics and fashion apparels.</p>
<blockquote><p>In short, I tried many different fields but I still wasn&#8217;t happy from within.</p></blockquote>
<p>So, after giving up on CA (for which I spent a few years) and trying out hands on baking I still did not have the sense of satisfaction and wanted to do something that would give me an identity of myself and happiness. One casual day, my husband Dhruvin asked me to get involve with WordPress in some way or the other. But, I wasn&#8217;t sure whether I would get a place in the technical world or not. This was a completely different challenge for me.</p>
<h3>Introduction to WordPress</h3>
<p>After giving a serious thought I decided to get started with WordPress. I spent the initial 6-8 months exploring WordPress, learning the basics about the Web, making myself comfortable with it &amp; deciding if this is something I would love to work on or not. I then participated in WordCamp Mumbai 2018. That was one of the few WordCamps I have attended. This WordCamp gave me enough confidence that WordPress is the new sky for me where there is no limit.</p>
<h3>Finding the perfect role in WordPress</h3>
<p>Now, that I got familiar with WordPress, the next question for me was what kind of role or a job I would best fit into?</p>
<p>I started interacting with a few people in WordCamp (which I miss very badly these days), I understood that I like interacting and engaging with people a lot. So, I thought that the Customer Support role would fit perfectly with my personality.</p>
<p>Once I was convinced about this, I got an opportunity to work with <a href="https://www.tychesoftwares.com/">Tyche Softwares</a>. They are a plugin development company focussing on niche WooCommerce plugins.</p>
<blockquote><p>This was the first step of my professional journey in WordPress, something that I never imagined I would step into.</p></blockquote>
<p>I started enjoying it more as I would gain immense satisfaction when I helped customers solve their problems.</p>
<p>I also tried my hand at the Business Development and Analytics part. I used to analyze customer feedback. The analysis involves creating the processes to improve the customer satisfaction and looking at how to automate a certain task using the tools at our hand. These things help in taking some important decisions on companies&#8217; plugins with regards to new features.</p>
<h3>About WordCamps</h3>
<p>I love attending WordCamps. I began attending WordCamps in 2018 and my very first WordCamp was WC Mumbai 2018. Since then, I’ve been going to as many as would fit in my schedule every year. I learn something new at every WordCamp, we deepen existing relationships and start new ones.</p>
<p>My first major Wordcamp was WCEU 2019 held in Berlin. It was a memorable one which will be in my mind for ages. I realized that it’s so much fun getting to meet people in real life whom you have only known on social media. WordCamps have also been a great chance for me to learn from others and collaborate on ideas surrounding WordPress.</p>
<p><a href="https://heropress.com/wp-content/uploads/2022/05/HeroPress-2.jpg"><img /></a></p>
<p>WordCamps have also been a great opportunity for me to travel and/or meet up with old friends, and make new ones. Of course, I also love the learning aspect of WordCamps. I look forward to learning new things and to speakers challenging my way of thinking, and seeing if there are ways I can improve my workflow or productivity or as a person.</p>
<p>The WordPress community has taught me that it’s ok if I don’t know everything, nobody does. We are all good at certain things and that’s totally fine!</p>
<p>The other memorable WordCamp for me was WordCamp Vadodara that happened in October 2019. I applied as a volunteer &amp; the organizing team was kind enough to give me that opportunity. That entire day, I was taking video bytes of the attendees, helping with registrations, and running around just trying to talk to as many people as I could. I barely got time for my lunch or time to spend time at the Tyche sponsors booth. Trust me, at the end of the day, I felt like I am just made for this! I enjoyed every bit of this experience.</p>
<p><a href="https://heropress.com/wp-content/uploads/2022/05/HeroPress-1.jpg"><img /></a></p>
<p>After volunteering a few more WordCamps, I applied to volunteer at the first-ever WordCamp Asia, which was to be held in Feb 2020 &amp; my application was accepted as well. Unfortunately, COVID-19 struck just at that time &amp; the event couldn’t take place.</p>
<p>I am definitely looking forward to helping the community in all the ways I can.</p>
<h3>What I do in my free time</h3>
<p>I love traveling and meeting new people. The idea of travel, packing my bags and disappearing to someplace, lives inside my brain all the time.</p>
<p>Whenever I meet someone for the first time or even encounter an old friend, I instantly want to talk about their own adventures.</p>
<blockquote><p>As a kid I was always curious about the lifestyle of people living in the other part of the world.</p></blockquote>
<p>Till date, I love exploring such things. I deeply believe travel makes you richer, not in your wallet, but in your intelligence and compassion.</p>
<p>I also love dancing, cooking new dishes and spending time on social media. I love watching cartoons too ;)</p>
<h3>Time to take a break</h3>
<p>The year 2020 has been a year full of surprises. Virus, lockdowns, travel restrictions to many such things. Through all these things was a moment of joy for me and my family. I was going to be a mother :) I was really happy but deep inside I was also having a feeling that I would loose my career and will not stay updated with WordPress and I would need to start again with everything. But, I am glad nothing of that sort happened. I was able to keep up with the trends via Twitter and other channels.</p>
<p>I really appreciate the support and the remote work policy of Tyche Softwares enabling me to work throughout my pregnancy. The policies at the organization have always been employee friendly.</p>
<p>Dhruvin and I become proud <strong>parents</strong> in November 2020.</p>
<p>I am enjoying this new phase of mine as much as I miss my involvement in the WordPress ecosystem.</p>
<p>I had taken an indefinite break until I felt that I would be able to dedicate time. Now, I am planning to resume my professional career. I would be taking my career ahead with <a href="https://imaginate-solutions.com/">Imaginate Solutions</a>. Imaginate Solutions is also plugin development company focusing on niche WooCommerce plugins.</p>
<p>I am excited for the future ahead!</p>
<h1 id="gujarati">વર્ડપ્રેસ &#8211; સંતોષ અને આનંદ નો સાધન</h1>
<p>વર્ડપ્રેસ સાથેનું મારું સફર વર્ષ 2017 માં શરૂ થયું. ત્યાં સુધી મારા જીવનમાં ઘણા ઉતાર-ચડાવ આવ્યા હતા અને હું કશું જાણતી ન હતી કે હું કયા ક્ષેત્રમાં પ્રવેશ કરીશ. 2016 ના અંત સુધી હું ચાર્ટર્ડ એકાઉન્ટન્ટ (CA) બનવા માટે મારી પરીક્ષા આપી રહી હતી. મને કેક અને પેસ્ટ્રી બેકિંગ નો પણ શોક છે. તેથી, 2017 ના ફર્સ્ટ હાફમાં, મેં ડોનટ્સ બનાવવા માટે એક નાની હોમ-બેકરી શરૂ કરી હતી. તે રસપ્રદ હતું, પરંતુ તે મને સંતોષ ની ભાવના આપતું ન હતું. મેં ફેબ્રિક્સ અને ફેશન એપેરલ ના એકઝીબીશન પણ હોસ્ટ કર્યા હતા.</p>
<blockquote><p>ટૂંકમાં, મેં ઘણાં વિવિધ ક્ષેત્રો અજમાવ્યાં પરંતુ હું હજી પણ અંદરથી ખુશ નહોતી.</p></blockquote>
<p>તેથી, CA (જે માટે મારા થોડા વર્ષો ગયા છે) છોડી દીધા પછી અને બેકિંગ પર પણ હાથ અજમાવ્યા પછી મને હજી પણ સંતોષની ભાવના નહોતી અને એવું કંઈક કરવા માંગતી હતી જે મને મારી ઓળખ પણ આપે અને આનંદ પણ આપે. એક કેઝ્યુઅલ દિવસે, મારા પતિ ધ્રુવિન એ મને વર્ડપ્રેસમાં ઇન્વોલ્વ થવાનું સજેસ્ટ કર્યું. પરંતુ, મને ખાતરી નહોતી કે મને તકનીકી વિશ્વમાં સ્થાન મળશે કે નહીં. મારા માટે આ એક સંપૂર્ણપણે અલગ પડકાર હતું.</p>
<h3>વર્ડપ્રેસ સાથે મારો પરિચય</h3>
<p>થોડું ગંભીરતા થી વિચાર કર્યા પછી મેં વર્ડપ્રેસ શું છે એ જોવાનું પ્રારંભ કર્યું. મેં પ્રારંભિક 6-8 મહિના વર્ડપ્રેસની શોધખોળમાં, વેબ વિશેની મૂળભૂત બાબતોને જોવામાં, મારી જાતને તેનાથી comfortable બનાવવામાં ગાળ્યા. મારે એ નક્કી કરવાનું હતું કે આ કામ કરવામાં મને રસ છે ક નહિ. મેં વર્ડકેમ્પ મુંબઈ 2018 માં પણ ભાગ લીધો હતો.આ વર્ડકેમ્પે મને પૂરતો વિશ્વાસ આપ્યો કે વર્ડપ્રેસ મારા માટે નવું આકાશ છે જ્યાં કોઈ મર્યાદા નથી.</p>
<h3>વર્ડપ્રેસમાં યોગ્ય ભૂમિકા શોધવી</h3>
<p>હવે, જ્યારે હું વર્ડપ્રેસથી પરિચિત થઈ ગઈ ત્યારે મારો આગળનો પ્રશ્ન એ હતો કે હું કયા પ્રકારની ભૂમિકા અથવા નોકરીમાં શ્રેષ્ઠ રીતે ફિટ થઈ શકું?</p>
<p>મેં વર્ડકેમ્પમાં થોડા લોકો સાથે વાતચીત કરવાનું શરૂ કર્યું (જે હું આ દિવસોમાં ખૂબ જ યાદ કરું છું). એ વાતચીત થી હું સમજી ગઈ કે મને લોકો સાથે વાર્તાલાપ કરવાનું અને વ્યસ્ત રહેવું ગમે છે. તેથી, મેં વિચાર્યું કે કસ્ટમર સપોર્ટ રોલ મારા વ્યક્તિત્વમાં સંપૂર્ણ રીતે ફિટ થશે.</p>
<p>એકવાર મને આ વિશે ખાતરી થઈ ગઈ પછી, મને Tyche Softwares સાથે કામ કરવાની તક મળી. તેઓ વિશિષ્ટ WooCommerce plugin પર ધ્યાન કેન્દ્રિત કરતી એક plugin કંપની છે.</p>
<blockquote><p>આ વર્ડપ્રેસમાં મારી વ્યાવસાયિક મુસાફરીનું પહેલું પગલું હતું, જેની કલ્પના મેં ક્યારેય કરી નહોતી.</p></blockquote>
<p>મેં જ્યારે ગ્રાહકોને તેમની સમસ્યાનો હલ કરવામાં મદદ કરી ત્યારે મને ખૂબ સંતોષ અને આનંદ નો અનુભવ થયો.</p>
<p>મેં બિઝનેસ ડેવલપમેન્ટ અને એનાલિટિક્સ પર પણ હાથ અજમાવ્યો છે. હું કસ્ટમર ફીડબેક નું એનાલીસીસ કરતી હતી. કસ્ટમર ને વધુ સંતોષ મળે એના માટે જે સુધારો લાવવાની જરૂર હોય અને જે કાર્ય માં ઓટોમેશન લાવી શકાય એ બધાનું એનાલીસીસ કરતી હતી. આ એનાલીસીસે કંપનીના ઘણા મહત્વપૂર્ણ નિર્ણયો લેવામાં મદદ કરી છે.</p>
<h3>વર્ડકેમ્પ્સ વિશે માહિતી</h3>
<p>મને વર્ડકેમ્પ્સમાં ભાગ લેવાનું ખુબ જ પસંદ છે. મેં 2018 માં વર્ડકેમ્પ્સમાં ભાગ લેવાનું શરૂ કર્યું અને મારો પ્રથમ વર્ડકેમ્પ WC મુંબઇ હતો. ત્યાર પછી, હું દર વર્ષે મારા સમયપત્રકમાં ફિટ થાય તેટલા વર્ડકેમ્પ્સમાં ભાગ લવ છું. હું દરેક વર્ડકેમ્પ માં કંઇક નવું શીખું છું. વર્ડકેમ્પ્સ જુના સંબંધોને વધુ ઘાડા બનાવે છે અને નવા સંબંધોની શરૂઆત કરવામાં મદદ કરે છે.</p>
<p>મારી પ્રથમ મુખ્ય વર્ડકેમ્પ બર્લિનમાં યોજાયેલી WCEU 2019 હતી. તે યાદો મારા મગજમાં યુગો સુધી રહેશે. મને સમજાયું કે વાસ્તવિક જીવનમાં એવા લોકોને મળવાનું ખૂબ જ આનંદની છે, જેને તમે ફક્ત સોશિયલ મીડિયા પર જાણતા હતા. વર્ડકેમ્પ મારા માટે અન્ય લોકો પાસેથી શીખવાની એક શ્રેષ્ઠ તક છે.</p>
<p><a href="https://heropress.com/wp-content/uploads/2022/05/HeroPress-2.jpg"><img /></a></p>
<p>વર્ડપ્રેસ community મને શીખવ્યું છે કે બધાને બધું ના આવડે. એટલે કોઈ વસ્તુ જો મને નથી ખબર તો તે ઠીક છે. એમાં સંકોચ અનુભવ કરવાની જરૂર નથી. બધા અલગ અલગ વસ્તુ માં માહિર હોય છે અને તે ઠીક છે!</p>
<p>મારા માટે બીજું યાદગાર વર્ડકેમ્પ હતું WC Vadodara જે October 2019 માં થયું હતું. મેં એક Volunteer તરીકે અરજી કરી હતી અને મને આયોજક ટીમે તે તક આપી હતી. તે આખો દિવસ, હું ઉપસ્થિત લોકોના વિડિઓ બાઇટ્સ લઈ રહી હતી, રજીસ્ટ્રેશન માં મદદ કરી રહી હતી અને શક્ય તેટલા લોકો સાથે વાત કરવાનો પ્રયાસ કરી રહી હતી. Tyche સ્પોન્સર્સ બૂથ અને મારા બપોરના ભોજન માટેનો પણ સમય મે જેમ તેમ નીકળ્યો હતો. એ દિવસે મને લાગ્યું કે હું આજ કામ માટે બની છું! મેં આ દરેક અનુભવનો આનંદ માણ્યો.</p>
<p><a href="https://heropress.com/wp-content/uploads/2022/05/HeroPress-1.jpg"><img /></a></p>
<p>થોડા વધુ વર્ડકેમ્પ્સમાં મેં volunteering કરી પછી, મેં Asia ની પહેલી વર્ડકેમ્પ્ WC Asia માં પણ Volunteer ની અરજી કરી, જે ફેબ્રુઆરી 2020 માં યોજાવાની હતી અને મારી અરજી પણ સ્વીકારી લેવામાં આવી. દુર્ભાગ્યે, COVID-19 ત્રાટક્યું અને ઇવેન્ટ થઈ શકી નહીં.</p>
<p>હું community ને જે રીતે કરી શકું તે બધી રીતે મદદ કરવા માટે ચોક્કસપણે રાહ જોઈ રહી છું.</p>
<h3>મારા ફ્રી ટાઈમમાં હું શું કરું છું</h3>
<p>હું મુસાફરી અને નવા લોકોને મળવાનું પસંદ કરું છું. મુસાફરી નો વિચાર અને મારી બેગ પેક કરી ક્યાંક અદ્રશ્ય થઈ જવું એવો જ વિચાર મગજની અંદર આખો સમય રહે છે.</p>
<p>જ્યારે પણ હું કોઈને પ્રથમ વખત મળું છું અથવા કોઈ જૂના મિત્રને મળું છું, ત્યારે હું તરત જ તેમણે પોતાના adventure વિશે વાત કરું છું.</p>
<blockquote><p>એક બાળક તરીકે હું હંમેશાં વિશ્વના બીજા ભાગમાં રહેતા લોકોની જીવનશૈલી વિશે ઉત્સુક હતી.</p></blockquote>
<p>આજની તારીખમાં પણ મને આવી વસ્તુઓનું અન્વેષણ કરવું ગમે છે. હું માનું છું કે મુસાફરી તમને તમારા wallet માં નહીં, પણ તમારી બુદ્ધિ અને કરુણામાં સમૃદ્ધ બનાવે છે.</p>
<p>મને નૃત્ય કરવું, નવી વાનગીઓ રાંધવી અને સોશિયલ મીડિયા પર સમય વિતાવવાનું પણ ગમે છે. મને કાર્ટૂન જોવાનું પણ ગમે છે;)</p>
<h3>બ્રેક લેવાનો સમય</h3>
<p>વર્ષ ૨૦૨૦ સૌ માટે આશ્ચર્યથી ભર્યું વર્ષ રહ્યું. જેમ કે વાયરસ, મુસાફરી માં લોકડાઉન અને ઘણી બીજી એવી બાબતો. આ બધી મુશ્કેલી વચ્ચે મારા અને મારા પરિવાર માટે એક આનંદ ની વાત હતી. હું માતા બનવા જઈ રહી હતી :) હું ખરેખર ખુબ જ ખુશ હતી પણ અંદરથી મને એક વાત સતાવતી હતી. મને એમ થઈ રહ્યું હતું કે હું મારી કારકિર્દી ગુમાવી દઈશ અને વર્ડપ્રેસ સાથે અપડેટેડ નહીં રહી શકું અને મારે બધું ફરી શરૂ કરવું પડશે. પરંતુ, મને આનંદ છે કે આ પ્રકારનું કંઈ થયું નથી. હું Twitter અને અન્ય ચેનલો દ્વારા trend સાથે updated રહી સાકી છું.</p>
<p>હું ખરેખર Tyche Softwares ની રિમોટ policy ની પ્રશંસા કરવા માંગુ છું. જેની મદદ થી મે pregnancy ના ૯ મહિના કામ કરી શક્યું. Tyche ની નીતિઓ હંમેશાં employee friendly રહી છે.</p>
<p>ધ્રુવિન અને હું નવેમ્બર 2020 માં ગૌરવપૂર્ણ માતા પિતા બન્યા. હું જેટલી આ મારા નવા તબક્કાની મજા માણી રહી છું, એટલી જ હું વર્ડપ્રેસ ઇકોસિસ્ટમમાં મારુ સ્થાન miss કરી રહી chu.</p>
<p>જ્યાં સુધી મને લાગતું નતું કે હું યોગ્ય સમય સમર્પિત કરી શકીશ ત્યાં સુધી મેં અનિશ્ચિત વિરામ લીધો હતો. હવે, હું મારી વ્યવસાયિક કારકિર્દી ફરી શરૂ કરવાની યોજના બનાવી રહી છું. હું મારી કારકિર્દીને Imaginate Solutions સાથે આગળ લઈ જઈશ. Imaginate Solutions પણ વિશિષ્ટ WooCommerce plugin બનાવનાર plugin કંપની છે.</p>
<p>હું મારા આગળના ભવિષ્ય માટે ઉત્સાહિત છું!</p>
<p>The post <a rel="nofollow" href="https://heropress.com/essays/wordpress-the-source-of-my-satisfaction-and-joy/">WordPress &#8211; The Source Of My Satisfaction And Joy &#8211; વર્ડપ્રેસ &#8211; સંતોષ અને આનંદ નો સાધન</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 26 May 2021 13:38:54 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Dhara Shah";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WordPress.org blog: Coloring Your Images With Duotone Filters";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10349";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:77:"https://wordpress.org/news/2021/05/coloring-your-images-with-duotone-filters/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4602:"<p><em>Created by <a href="https://profiles.wordpress.org/ajlende/">Alex Lende</a></em></p>



<p>Beginning with WordPress 5.8, you can colorize your image and cover blocks with duotone filters! Duotone can add a pop of color to your designs and style your images to integrate well with your themes.</p>



<h2>Filters? Like on Instagram?</h2>



<p>Duotone doesn’t work in quite the same way as Instagram filters. Whereas Instagram filters do color adjustments (color levels/curves and sometimes a vignette for the photo editors among us), the new duotone filters entirely replace the colors of your images.</p>



<div class="juxtapose"><img id="10350" src="https://i1.wp.com/wordpress.org/news/files/2021/05/image7.png?resize=632%2C622&ssl=1" alt="" width="632" height="622" class="image-compare__image-before" /><img id="10351" src="https://i0.wp.com/wordpress.org/news/files/2021/05/image4.png?resize=632%2C621&ssl=1" alt="" width="632" height="621" class="image-compare__image-after" /></div>Photo by <a href="https://www.pexels.com/photo/grey-cat-close-up-photography-2524164/">Charles Pragnell</a>.<br />



<p>You can think of the duotone effect as a black and white filter, but instead of the shadows being black and the highlights being white, you pick your own colors for the shadows and highlights.</p>



<p>For example, a grayscale filter can be created by selecting black and white as shadow/highlight colors, and a sepia filter by choosing brown and tan.</p>



<img width="632" height="622" src="https://i2.wp.com/wordpress.org/news/files/2021/05/image6.png?resize=632%2C622&ssl=1" alt="" class="wp-image-10352" />



<p>Analogous colors can add a subtle effect and work well for cover backgrounds where the overlaid text still needs to stand out.</p>



<img width="632" height="622" src="https://i1.wp.com/wordpress.org/news/files/2021/05/image1.png?resize=632%2C622&ssl=1" alt="" class="wp-image-10353" />



<p>Much more vibrant and interesting effects can be made with complementary colors.</p>



<img width="632" height="622" src="https://i2.wp.com/wordpress.org/news/files/2021/05/image2.png?resize=632%2C622&ssl=1" alt="" class="wp-image-10354" />



<h2>How Do I Add Duotone Filter?</h2>



<p>The duotone effect works best on high-contrast images, so start with an image with a lot of large dark and light areas. From the block toolbar, use the filter button and choose a preset:</p>







<p>You can also choose colors from your theme’s palette, or a custom color of your choice.</p>



<p>In addition to the image block, duotone can be applied to both images and video in the cover block.</p>



<div class="wp-block-cover has-background-dim has-custom-content-position is-position-center-left"><div class="wp-block-cover__inner-container">
<p class="has-text-align-center has-large-font-size">Duotone</p>
</div></div>



<h2>Will This Overwrite Images in My Media Library?</h2>



<p>Images and videos in your media library will remain unchanged. The duotone effect works using <a href="https://www.w3.org/TR/SVG11/filters.html">SVG filters</a> and the <a href="https://www.w3.org/TR/filter-effects-1/">CSS filter property</a>, so the image or video is never modified in your library. On the one hand, this means that you can apply a filter to an image that you link to that doesn’t exist in your media library. On the other hand, this means that the filter won’t show up in RSS feeds or places that use the image URL directly.</p>



<h2>Can I Add Duotone Colors to Blocks or Themes That I Develop?</h2>



<p>The API for adding duotone colors to blocks is experimental in Gutenberg v10.6. Still, the documentation for using it in your own blocks can be found and will be updated under <a href="https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/#color">Supports Color</a> in the Block Editor Handbook. Themes can add duotone presets with theme.json. More information can be found under <a href="https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/#presets">Global Settings &amp; Styles Presets</a> in the Block Editor Handbook.</p>



<h2>Try it Out Now Using the Gutenberg plugin</h2>



<p>The duotone feature was released in version 10.6 of the Gutenberg plugin, so you can try it out now prior to the WordPress 5.8 release in July.</p>



<hr class="wp-block-separator" />



<p><em>Thanks to <a href="https://profiles.wordpress.org/joen/">@joen</a> and <em><em><a href="https://profiles.wordpress.org/mkaz/">@mkaz</a></em></em></em> <em>for assistance writing and reviewing this post.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 26 May 2021 12:17:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Chloe Bringmann";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: The Price of Admission: WordPress Users Get To Hold Creators Accountable";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117214";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:207:"https://wptavern.com/the-price-of-admission-wordpress-users-get-to-hold-creators-accountable?utm_source=rss&utm_medium=rss&utm_campaign=the-price-of-admission-wordpress-users-get-to-hold-creators-accountable";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4479:"<p class="has-drop-cap">When I reported on the <a href="https://wptavern.com/profilepress-rebrands-and-repurposes-wp-user-avatar-now-a-membership-plugin-users-revolt-via-the-wordpress-review-system">WP User Avatar plugin&rsquo;s rebranding and repurposing</a> last week, it came as no surprise that users were angry. However, I did not expect pushback against those user complaints from a subset of commentators and others in the community.</p>



<p>There were a few points, each boiled down to the argument that free plugin users have a sense of entitlement.</p>



<p>These points focused either on the concept of plugin authors needing to make a living or <a href="https://wptavern.com/profilepress-rebrands-and-repurposes-wp-user-avatar-now-a-membership-plugin-users-revolt-via-the-wordpress-review-system#comment-378312">the GPL</a>, a license that offers no warranty on the code the user receives. Both of these arguments led the conversation astray at times. The focus of the user complaints was not on upsells or about code they grabbed from the wild. No, the backlash was about logging into their websites and finding things had changed with no warning. It was about a plugin installed from an official, presumably trustworthy, source being replaced with a different plugin.</p>



<p>What I see is not a group of people complaining about an advert. What I see is not a long list of users disliking feature changes.</p>



<p>The issue of maintaining free plugins and user entitlement was never the point.</p>



<p>Even David Bisset of Post Status <a href="https://poststatus.com/what-we-can-learn-from-the-profilepress-debacle/">followed that rabbit down the hole</a>. There are good points to be made on free plugin development being a labor of love &mdash; and sometimes just a headache from a support perspective &ndash;, but this conversation was never about a commercial upsell. It was about the ethics of wholesale swapping the codebase of one plugin with a different one.</p>



<p><em>Will some users complain about a new advert in a plugin?</em> Undoubtedly.</p>



<p><em>Will nearly 200 users leave one-star reviews in that case?</em> Unlikely.</p>



<p>Many users have a sense of entitlement. They grab a free theme or plugin and expect developers to answer their every whim. I would argue that it is a small percentage of total users based on personal experience, but that vocal minority can give the whole group a bad rep. They can be a drag on a developer&rsquo;s motivation to continue with a project.</p>



<p>I get it. I have been doing this whole free software thing for nearly as long as WordPress has been around. It is easy to feel underappreciated for work that you pass on to the community. And, if you have no benefactor funding all of this free work, you must find some means of putting food on the table.</p>



<p>Users of free software are not owed free customizations. They are not owed free technical support. They are not even owed a promise that a developer will not swap in a new codebase that does something different. They are owed nothing.</p>



<p>However, the price of admission for playing in this market, regardless of whether it is free or commercial software, is that every plugin&rsquo;s success or failure rests in the hands of those who use it.</p>



<p>Maybe we, those of us who build free plugins, do not owe users anything. But, we have a responsibility to be trustworthy stewards of our sub-communities in the WordPress ecosystem. We have a responsibility to behave ethically, rightness and wrongness as defined by our users.</p>



<p>Whether it is commercial or free software, the goal is to have users &mdash; <em>is it really software if no one is using it?</em> They are the lifeblood of every project. Ultimately, developers who want people to use their code must answer to those who would.</p>



<p>On the flip-side, developers are not owed glowing reviews on their projects. Users have a right to complain, even about a plugin that they acquired for free. It is not about them wanting special privileges or treatment. It never was.  If you treat them fairly, do right by them, and communicate, you can build a living and breathing community around your software.</p>



<hr class="wp-block-separator" />



<p>Please send virtual hugs to developers who are building the plugins and themes you use. They are a vital part of WordPress&rsquo;s success. Five-star ratings and donations never hurt either.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 26 May 2021 00:35:50 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:60:"WPTavern: My Codeless Website App Detects Site Builder Tools";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=114023";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:165:"https://wptavern.com/my-codeless-website-app-detects-site-builder-tools?utm_source=rss&utm_medium=rss&utm_campaign=my-codeless-website-app-detects-site-builder-tools";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3010:"<p><a href="https://mycodelesswebsite.com/">My Codeless Website</a> is a new tool that detects if a site was built using a website builder. The app can detect more than 50 different tools that people use to create sites, including WordPress-powered ones like Beaver Builder, Elementor, and Divi, as well as Drupal, Squarespace, Shopify, Wix, and others. It was built using PHP and an AJAX call to fetch the website builder. The app&rsquo;s detection capabilities extend to site builder tools that represent more than 2 billion websites, as measured by <a href="http://builtwith.com/">Built With</a>. </p>



<p>After speaking with the app&rsquo;s creators, who are based in Utrecht, I encouraged them to add Gutenberg to the list. The site is designed to be used by people who spot a cool website and want to quickly see what tool was used to build it.</p>



<div class="wp-block-image"><img /></div>



<p>One place to find inspiring WordPress sites is the Websites category of the Webby Awards for 2021. In the Government &amp; Civil Innovation category, <a href="https://www.whitehouse.gov/">WhiteHouse.gov</a> won with its Gutenberg-powered site. The <a href="http://covid19.tn.gov/">State of Tennessee COVID-19 Dashboard</a>, another WordPress site nominated in the category, also used the block editor for its builder. Checking back through the <a href="https://wptavern.com/a-wordpress-voting-guide-to-the-webby-awards">WordPress-powered nominees and winners</a>, nearly every one has a site that was built using Gutenberg. I did not find one page builder among them. This seems to indicate that most of the sites recognized with Webby awards for excellence on the web are building their designs on top of the block editor.</p>



<img />



<img />



<p>In 2014, we featured a service called <a rel="noreferrer noopener" href="http://whattheme.com/" target="_blank">What Theme</a>&nbsp;that detects WordPress, Ghost, Drupal, and Shopify templates. It was later moved to be maintained by <a href="https://www.codeinwp.com/find-out-what-wordpress-theme-is-that/">CodeinWP</a>. At that time, the main thrust of a design came through a site&rsquo;s theme and its options. Over the past seven years, plugins have played an increasingly more important role in how WordPress users create their website designs, whether it&rsquo;s page builders or block libraries. Simply checking for a theme will no longer give you the full picture. </p>



<p><a href="https://mycodelesswebsite.com/">My Codeless Website</a> is a handy tool worth bookmarking that enables you to check through a list of sites quickly to see what site builders they are using. It&rsquo;s meant to appeal to entrepreneurs who need to take their businesses online so the rest of the site is geared towards client services. It would be valuable if this tool or another new tool could expand to detect the block plugins and libraries that a site is using so that visitors could get even more information on the website they find inspiring. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 25 May 2021 04:56:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:79:"WPTavern: Bricks: Laying Down a Foundation in the WordPress Page Builder Market";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=114867";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:201:"https://wptavern.com/bricks-laying-down-a-foundation-in-the-wordpress-page-builder-market?utm_source=rss&utm_medium=rss&utm_campaign=bricks-laying-down-a-foundation-in-the-wordpress-page-builder-market";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7318:"<p class="has-drop-cap">In a mature and ever-growing market of WordPress page builders, Thomas Ehrig decided to bring a new product to the ecosystem. Joined by Luis Godinho, the initial team launched <a href="https://bricksbuilder.io/">Bricks</a> in March. Unlike most other builder plugins, the project is bundled as a theme.</p>



<p>As a small, 100% bootstrapped company, the team decided against going the freemium route. Pricing currently starts at $59 for a lifetime license, but that could change as the business model evolves. Potential customers are encouraged to test the product out via the open <a href="https://try.bricksbuilder.io/">playground demo site</a>.</p>



<img />Creating a restaurant menu via the Bricks demo site.



<p>&ldquo;Bricks aims to provide an all-in-one site-building platform that empowers you to create beautiful, fully-fledged, and responsive sites that rank,&rdquo; said Ehrig. &ldquo;Without having to buy and rely on dozens of expensive and disjointed plugins.&rdquo;</p>



<p>One of the problems that the team wanted to avoid was end-users trying to find a Bricks-compatible theme. Instead of offering a default or placeholder, Bricks serves as an all-in-one bundle.</p>



<p>The difference between a theme and a plugin is mostly a semantic one in WordPress. Aside from a few small things, a theme can do anything a plugin can do and vice versa.</p>



<p>&ldquo;The main advantage I see providing it as a plugin is from a marketing perspective,&rdquo; said Ehrig. &ldquo;Elementor has done a fantastic job in this department. As you can see on the many free and premium themes that it comes bundled with. This greatly helped boost its exposure in the early days.&rdquo;</p>



<p>Aside from a few users trying to install it as a plugin, he said the team has been happy serving Bricks as a theme.</p>



<p>He described the builder as a &ldquo;theme that aims to tame the plugin madness.&rdquo; The focus is on customization, design, and performance, but the development process is user-driven. All of this is done in the open via the <a href="https://bricksbuilder.io/ideas/">project&rsquo;s idea board</a>, forum, and Facebook group. Users can submit feature requests, which others can vote and comment on. The team builds its <a href="https://bricksbuilder.io/roadmap/">development roadmap</a> from this foundation.</p>



<p>Voting systems like this often work well in a project&rsquo;s early history. However, they can become unruly as audiences grow. We will have to check in with Bricks a year or two down the road to see how their feedback system has evolved.</p>



<p>&ldquo;We don&rsquo;t build in secret,&rdquo; said Ehrig. &ldquo;Our public roadmap makes sure everyone knows at all times what to expect and what&rsquo;s next. It also keeps us accountable. If you are not only looking for a beautiful builder that is fun to work with, but where you have an actual say about its development, I think you should take Bricks for a spin.&rdquo;</p>



<p>Bricks is bringing in its third team member to develop predesigned templates. However, they are already looking to <a href="https://bricksbuilder.io/contact/">grow the team more</a>. Their current need is for a Vue.js and WordPress developer.</p>



<h2>Building in an Established Market</h2>



<img />Slider element in the Bricks builder.



<p class="has-drop-cap">Elementor has become the <em>de facto</em> standard for third-party page builders. Others have made dents, and WordPress is <a href="https://wptavern.com/full-site-editing-is-partly-a-go-for-wordpress-5-8">launching several sub-components</a> of its Full Site Editing experience in version 5.8. It is getting crowded, but Ehrig believes there is plenty of seats left at the table.</p>



<p>&ldquo;The WordPress builder market is well established,&rdquo; he said. &ldquo;This actually gave me the confidence to start this project in the first place. It&rsquo;s been heavily validated, and it&rsquo;s not going away anytime soon.&rdquo;</p>



<p>Not wanting to launch a half-baked builder, he said the team forwent a deadline for their version 1.0. They wanted to create an MVP with all the essentials and hit the ground running. Based on the initial feedback in the past couple of months, he said it is clear there is still space in the market.</p>



<blockquote class="wp-block-quote"><p>Personally, I think there is always going to be space. After all, we are talking about tens of millions of WordPress sites that need to be launched, re-built, managed, and constantly optimized. It&rsquo;s also not a winner-takes-all market, which is nice.</p><p>Your users&rsquo; trust and loyalty have to be earned every single day. If not, many move on to a different solution. As the web design and development landscape evolves, so has your product.</p><p>All those moving pieces ensure that no single player can rest on his/her laurels for long. Meaning there are always going to be opportunities if you take the time to look out and execute on them.</p></blockquote>



<p>While the builder is somewhat of a competitor against the core platform it is built upon, it works alongside WordPress. Users can convert their block-built pages into Bricks data. This data conversion works the other way around too.</p>



<p>&ldquo;So there is no lock-in effect,&rdquo; said Ehrig of the feature, which his team made available from Day 1. &ldquo;Which I think is really important. If someone decides to move away from Bricks, we don&rsquo;t want him/her to be tied to our platform.&rdquo;</p>



<p>The team is also exploring the concept of creating blocks visually within Bricks. The goal is to enable more integration between the two, but they must wait to see how Full Site Editing evolves in the coming months to know what that might look like.</p>



<h2>Version 1.2 and Beyond</h2>



<img />Inserting a Container element from the sidebar.



<p class="has-drop-cap">Last week, the Bricks team launched <a href="https://bricksbuilder.io/changelog/#v1.2">version 1.2</a> of its builder. It is touting its new &ldquo;Container&rdquo; element, which is essentially a box to put other items in. Users can control its display settings, and it already supports flex layouts, which many designers will welcome. Grid layouts are forthcoming, according to Ehrig.</p>



<p>&ldquo;After that, I am currently very excited about the upcoming visual WooCommerce builder,&rdquo; he said. &ldquo;It&rsquo;s a very challenging integration to get right. Not just code-wise, but also from a UI/UX perspective.&rdquo;</p>



<p>Of the several things he thinks the team has gotten right, he mentions data integration with popular plugins like Advanced Custom Fields, Meta Box, Pods, and CMB2. He also said the version-1.0 features like global theme styles, responsive editing modes, and color palettes were things the team nailed down.</p>



<p>&ldquo;But the one thing we are most proud of is not even a feature and something no one has really any control over,&rdquo; said Ehrig. &ldquo;And that&rsquo;s the community that has formed around Bricks and its cause.&rdquo;</p>



<p>In two months, its Facebook community has grown to 2,000+ members. &ldquo;Very active, positive, and helpful,&rdquo; he said. &ldquo;You can&rsquo;t put a price tag on that.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 24 May 2021 23:36:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WordPress.org blog: WP Briefing: Episode 9: The Cartography of WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/news/?post_type=podcast&p=10373";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:74:"https://wordpress.org/news/2021/05/episode-9-the-cartography-of-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:12609:"<p>In this episode, Josepha Haden Chomphosy provides a map of how to navigate WordPress teams and communication channels, along with her small list of big things.</p>



<p><em><strong>Have a question you&#8217;d like answered? You can submit them to <a href="mailto:wpbriefing@wordpress.org">wpbriefing@wordpress.org</a>, either written or as a voice recording.</strong></em></p>



<h2>Credits</h2>



<ul><li>Editor:<a href="https://profiles.wordpress.org/dustinhartzler/"> Dustin Hartzler</a></li><li>Logo:<a href="https://profiles.wordpress.org/beafialho/"> Beatriz Fialho</a></li><li>Production:<a href="https://profiles.wordpress.org/mkaz/"> </a><a href="https://profiles.wordpress.org/cbringmann/">Chloé Bringmann</a></li><li>Song: Fearless First by Kevin MacLeod</li></ul>



<h2>References</h2>



<ul><li><a rel="noreferrer noopener" target="_blank" href="https://www.meetup.com/pro/wordpress/">https://www.meetup.com/pro/wordpress/</a></li><li><a rel="noreferrer noopener" href="https://make.wordpress.org/" target="_blank">https://make.wordpress.org/</a></li><li><a rel="noreferrer noopener" href="https://make.wordpress.org/chat/" target="_blank">https://chat.wordpress.org/</a></li><li><a rel="noreferrer noopener" target="_blank" href="https://make.wordpress.org/">Make WordPress</a> Slack</li><li><a href="https://europe.wordcamp.org/2021/">WordCamp Europe</a>, June 7-9</li><li><a href="https://japan.wordcamp.org/2021/">WordCamp Japan</a>, June 20-26</li><li>The Sixth<a href="https://make.wordpress.org/test/2021/05/12/fse-program-testing-call-6-stick-the-landing-pages/"> call for testing</a> on Template Editing&nbsp;</li><li>The <a href="https://wordpress.org/news/2021/05/dropping-support-for-internet-explorer-11/">upcoming drop of Internet Explorer 11 support</a></li></ul>



<h2>Transcript</h2>



<span id="more-10373"></span>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>00:10</p>



<p>Hello, everyone, and welcome to the WordPress briefing, the podcast where you can catch quick explanations of some of the ideas behind the WordPress open source project and the community around it, as well as get a small list of big things coming up in the next two weeks. I&#8217;m your host, Joseph Haden Chomphosy. Here we go!</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>00:40</p>



<p>Almost every episode of this podcast, you can hear me invite you to join in the WordPress project, to contribute back, to get involved. And I&#8217;m sure that every time I say that there&#8217;s at least one of you who&#8217;s like “Yes. Challenge accepted!” And you wade in sight unseen, to immerse yourselves in the cheerful cacophony of open source at scale that is WordPress. You see before you all 158 ways you can start contributing and you are exhilarated by this lostness. This you think, is the lostness of infinite possibility. And for you, I&#8217;m really thankful. My work here today would not be possible if it weren&#8217;t for the brave souls who leap into something with hope as their primary plan and tactic. You are heroes, and I thank you very much for your service. For everyone else, I&#8217;m going to give you a quick tour of where WordPress collaborates and a little bit of how they collaborate. We&#8217;ll cover the Make network, the Making WordPress Slack, events for WordPress, and a rundown of the teams.&nbsp;</p>



<p>First, the Make network. The Make network of sites can be found at make.wordpress.org. That page includes information on most of our teams. Teams like Core and Design and Community. All of those teams require some technical skills since we&#8217;re a project built around a piece of software. However, some require a little more than others. You can think of this set of sites as the desk of each team in the WordPress project. It&#8217;s where they update each other, where they host discussions, where they refine proposals, and where they coordinate admin tasks. Contributors can write posts on most sites in the network as long as they follow the guidelines and best practices. And anyone with a wordpress.org profile can join in discussions in the comments. Most work on the Make network is asynchronous, and discussions stay open for a long enough time to allow anyone in the world to weigh in when they have the time. It&#8217;s how we try to remember that we are a globally-minded project.&nbsp;</p>



<p>The second area is the Making WordPress Slack instance. The Making WordPress Slack instance can be found at wordpress.slack.com, and it requires an account that is associated with your wordpress.org profile. Each team in the project has a channel, although not all channels in that Slack instance, represent a standalone team. You can think of this Slack instance as a set of conference rooms. It&#8217;s where contributors connect, gain a more nuanced understanding of problems that we&#8217;re trying to solve. They host synchronous meetings and also coordinate working groups.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>03:31</p>



<p>Contributors can post in most channels, although there are a few that are restricted. We don&#8217;t have any social channels in this Slack instance, but most WordPress-ers do tend to find friends that they connect with. The work done here is synchronous, and most meetings last about an hour. There are about 35+ meetings a week, so you can basically always find someone around.&nbsp;</p>



<p>The last area we work is actually at WordPress events. Word Camps and WordPress meetups happen all over the world. Unless there&#8217;s a global pandemic, then they&#8217;re kind of all over the computer and at all times of day and night. You can keep track of those on wordcamp.org or on WordPress’s meetup page, which I&#8217;ve linked in the notes below. These events bring together all sorts of facets of the WordPress project. And they are an event where local WordPress communities aim to connect, inspire and educate each other. There&#8217;s always someone at these events, who knows a little bit more about WordPress than you do. If you&#8217;re headed to want to learn more about contribution, look out for any that have a contributor day or are hosting a contribution drive. These are clearly synchronous events. And when we do get back to doing them in person, they&#8217;re also tied to physical locations. When we get back to them, I encourage you to find one that&#8217;s close to you. They are incredibly valuable.&nbsp;</p>



<p>Okay, so that&#8217;s the map of the area. Those are the three big places where we get this stuff done. Let&#8217;s do a quick map of the teams themselves. If you&#8217;re a developer and you&#8217;re looking to work inside the technology space, work with code a bit, then your best chances for teams are Core and all of its related components. They&#8217;re like 50 components, including core editor and various other things. There&#8217;s also the Mobile team WP CLI, the Tide team, Security, our brand new team, Openverse, and Meta. Those all take a fairly high amount of code knowledge to contribute there.&nbsp;</p>



<p>If you&#8217;re more into design and product work, then we have a few teams for that as well. There&#8217;s of course, the Design team, but we also have Accessibility, Test, Triage, Polyglots kind of falls in there for me. But if you are a programs person, and we&#8217;re talking like programs, getting people together programs, not programs, as in programming or code. So if you&#8217;re a programs person, you&#8217;re looking more at the Community team, at the Themes team, the Plugin team, Polyglots, again, Training support, probably a number of others that have like program components in it as well.</p>



<p>If you are really interested in learning more about contributor experience, which is how we build tools, and again, programs for all of the contributors who are showing up, then the teams for you will be teams like Meta and Documentation, Hosting, the Community team, the Training team, arguably any team that has a program as part of it is considered contributor experience because that&#8217;s how we help our contributors know what to do, what not to do, how to help them get onboarded, find their way, stuff like that.&nbsp;</p>



<p>And if you&#8217;re more in the communications area of things, we have quite a few teams there as well. We do have Marketing, of course, but also I think that Support ends up in our communications area, WordPress TV, obviously ends up in communications. But I think Training, Meta, Documentation, and arguably, maybe also Testing ends up in that space as well.&nbsp;</p>



<p>I realize that there are a handful of teams that I mentioned multiple times, especially Polyglots, Support, Test, Triage, Meta, Community. The reason they end up in a number of different places is that all of those teams also have a fair amount of admin and infrastructure stuff that goes into the WordPress project and community as a whole. So it touches a lot of other teams, and so they get a lot of mentions. All right. So WordPress adventurers, you now have a beginner&#8217;s map. I hope it helps, and I hope we see you around the community.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>07:54</p>



<p>If you&#8217;re still with me, that brings us today to my small list of big things. I&#8217;ve got four things for you, and I&#8217;m excited about all of them. The first two are events actually. WordCamp Europe is coming up from June seventh through the ninth. It will include a presentation from the WordPress project co-founder, Matt Mullenweg, so I encourage you to hop over, grab a ticket to check out the rest of the sessions that are happening while you&#8217;re there. The next one is WordCamp, Japan, which is happening June 20th through the 26th. And you heard that right that is seven whole days of WordCamp. It&#8217;s a little bit of a different format than we normally take, but it&#8217;s five days actually of contribution on ten specific projects. Then that&#8217;s bookended on either side of those contribution days, with full days of sessions. There&#8217;s some in English, but it&#8217;s primarily in Japanese. But either way, I think it&#8217;s going to be a really excellent event, and I encourage everyone to check it out.&nbsp;</p>



<p>The rest of my list is not events. We have opened our sixth call for testing, it&#8217;s specifically looking at the template editing mode for Full Site Editing. It is an iteration on one of our earliest tests for the Full Site Editing outreach program. And so it has incorporated a lot of the feedback that we got in that test the first time around. So if you look at that test, which by the way, are all guided, if you&#8217;ve never tested anything before, don&#8217;t let this scare you. It&#8217;s really well written, it&#8217;s got a good guide on it and, and also allows for a little bit of exploration. But if you participated in the landing page test that we did early on, this is the follow-up to that. It incorporates a lot of the feedback that we got, so this is closing that feedback loop and I encourage you to stop by and participate in that test. It will be linked in the show notes and also I tweet about it a bit so you can run over there and find it also.</p>



<p>&nbsp;WordPress is dropping support for Internet Explorer 11. That&#8217;s happening over the summer, so around the middle of July is when that&#8217;s going to happen. If you&#8217;ve been using WordPress for a while you&#8217;ve been getting notifications. If you happen to get to WordPress with IE11, letting you know that that this particular browser is reaching the end of its life for support in general on the web, but now WordPress also is making the choice to drop support for that. And so there&#8217;s a post out on wordpress.org/news, which I will also link to in the show notes in case you have not heard about this yet. It shouldn&#8217;t have any immediate and noticeable effects on anyone who&#8217;s visiting a site that&#8217;s built using WordPress. There might be a few things in the dashboard that don&#8217;t work if you are administering a WordPress site from IE11. So there&#8217;s a lot of good information in that post. Give it a read and if you have questions, always feel free to stop by the Core chat and ask those as we go.&nbsp;</p>



<p>And that my friends is your smallest of big things. Thank you for tuning in today for the WordPress Briefing. I&#8217;m your host, Josepha Haden Chomphosy, and I&#8217;ll see you again in a couple of weeks!</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 24 May 2021 11:55:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Chloe Bringmann";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:109:"Gutenberg Times: Getting Started with Themes for Full-site Editing and Block Plugins – Weekend Edition #170";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=17881";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:115:"https://gutenbergtimes.com/getting-started-with-themes-for-full-site-editing-and-block-plugins-weekend-edition-170/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:15809:"<p>Howdy, </p>





<p>I am getting really excited about the <a href="https://make.wordpress.org/core/5-8/">WordPress 5.8 release</a>. It&#8217;s still about eight weeks away, but there is a lot of work in front of us.  We are coming up to Feature Freeze on May 25, 2021. The Gutenberg team has a <a href="https://github.com/WordPress/gutenberg/releases/tag/v10.7.0-rc.1">release candidate for 10.7</a>, the last version of the plugin, that will make it into WordPress Core. </p>



<p>How can you help? Test, test test! </p>



<ul><li>Set up a test site. <a href="https://pantheon.io/register">Pantheon offers developer 2 sites for free.</a> </li><li>Use the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">Beta Tester plugin</a> &#8211; set it to channel = <em>Bleeding Edge</em> and stream = <em>Nightlies</em>, that means you have the lasted WordPress version on your site. </li><li><a href="https://core.trac.wordpress.org/newticket">Report any bugs you find</a></li></ul>



<p>On the team working on the block-editor end user documentation, we have a <a href="https://docs.google.com/document/d/1QdBr37mzz0AiAWDsR9PEFPUvzpULppt9FBbXE6WM0-w/edit#heading=h.yhitji5ms7k6">preliminary list of relevant user-facing changes</a> in Google Doc. We are looking for more contributors to not only get through the latest task list but also update some documentation pages with 5.6 and 5.7 changes. If you have a few hours, and want to take a deep dive into the block-editor features, let me know   by joining the #docs channel or DM me on the Make Slack. </p>



<p>Wishing everyone lots of patience.  We are still in a pandemic, and all good things take time. </p>



<p>Yours 💕,<br />Birgit</p>



<p>PS: Did a deep dive into the <a href="https://www.npmjs.com/package/@wordpress/data">wp.data package</a> to learn more about state management for the block-editor. Do you know of any resources that helped you get the hang of it? The usual metaphors don&#8217;t seem to help much. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong>Anne McCarthy</strong> posted about <strong><a href="https://make.wordpress.org/test/2021/05/21/hallway-hangout-discussion-on-full-site-editing-issues-prs-designs-20-may/">Hallway Hangout: Discussion on Full Site Editing Issues/PRs/Designs (20 May)</a></strong>. This was the fourth Hallway Hangout, a series of information meetings, that started in April. <a href="https://www.youtube.com/channel/UCkPsxZ_WQFaACunULLiT85g">They are all available on YouTube.</a> Sometimes it is much easier to talk through a feature, an interface, or bugs, when you can ask questions and screen share. If you missed them, they are available on YouTube and summary posts are available on the <a href="https://make.wordpress.org/test/tag/fse-hallway-hangout/">Make block of the Test Team</a>. </p>



<hr class="wp-block-separator is-style-wide" />



<p>Although, I long for in-person WordCamps, they are still not safe in many regions.  For now, connections to my WordPress friends are still virtual: pick-up <a href="https://www.youtube.com/channel/UCkPsxZ_WQFaACunULLiT85g">Hallway Hangouts</a>, Meetups meetings and WordCamps and conferences. </p>



<p>Speaking of which: Next week <a href="https://wordsesh.com/register/"><strong>WordSesh is taking place May 24 &#8211; May 27</strong></a>, with Workshops starting on May 28.  Well, depending on where you are in the world, it will start tomorrow night. </p>



<p><strong>On the schedule a five session around Gutenberg: </strong></p>



<img />



<ul><li><strong>Blazing Fast Block Development</strong> w/ Lee Shadle </li><li><strong>Building Custom Block</strong>s w/ Rob Stinson</li><li><strong>Block-Based Themes</strong> – <strong>The Future Of Full Site Editing In WordPress</strong> w/ Imran Sayed</li><li><strong>How the Block Editor Makes It Easier to Build Custom Websites</strong> w/ Danielle Zarcaro </li><li><strong>Build your own Block-Based Theme</strong> w/ Daisy Olsen (Workshop)</li></ul>



<p>Find a <a href="https://gutenbergtimes.com/feed/#events">list of more upcoming WordPress events </a>further below. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://www.youtube.com/watch?v=PBr3TgVRrkE&t=14s">Eight Gutenberg Tips and Tricks in eight minutes</a> </strong>&#8211;  Learn how to start developing WordPress sites with Gutenberg blocks with <strong>Bill Erickson</strong> and <strong>Gabriel A. Mays</strong> from GoDaddy.  Take a look at the YouTube video and the links resources, if you are just starting out working with the block-editor in your WordPress development. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/edward_bock">Edward Bock</a></strong> shared how to <a href="https://medium.com/write-better-wordpress-code/properly-add-modern-javascript-to-gutenberg-14bde8679d83">Properly add modern JavaScript to Gutenberg</a>. In his article, he helps you transition from the conventional programming on PHP to adding JavaScript to your tools set</p>



<h2>Full-Site Editing for Theme Developers</h2>



<p><strong><a href="https://twitter.com/herb_miller">Herb Miller</a></strong> shared recording from his presentation:  <a href="https://www.youtube.com/watch?v=sfYWkKuzv90"><strong>Guide to WordPress Full Site Editing, blocks and themes</strong></a> at the Meetup in Portsmouth. Now the Herb went beyond the template editor bits that are coming to WordPress 5.8. He demonstrated the full Site Editor, which isn&#8217;t slated to come to WordPress until 5.9 or even 6.0. To follow along you would need a block-based theme and the latest Gutenberg version (for now 10.6.2). After a tour around the Site Editor, Herb Miller, shared with the audience how he built a block-based theme. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/carolinapoena">Carolina Nymark</a></strong> published here <a href="https://wordpress.org/themes/armando/"><strong>full-site editing theme &#8220;Armando&#8221;</strong></a> in the theme directory on WordPress.org. Carolina also is a contributor to the Gutenberg repository and published a <a href="https://fullsiteediting.com/courses/full-site-editing-for-theme-developers/">Full Site Editing course for developers</a>. Recently, she also published a <a href="https://marketplace.visualstudio.com/items?itemName=CarolinaNymark.wordpress-block-markup">VS Code extension WordPress Block Markup </a>with autocomplete snippets to add blocks to your templates faster. </p>



<hr class="wp-block-separator is-style-wide" />



<p><a href="https://twitter.com/fklux"><strong>Fränk Klein</strong> </a>of <a href="https://wpdevelopment.courses/">WPDevelopment Courses</a> is getting ready to open his <strong><a href="https://wpdevelopment.courses/courses/building-block-based-themes/#curriculum">Building Block-Based Themes </a></strong>course. He already shared quite a few insights in his learnings with the articles: <a href="https://wpdevelopment.courses/articles/full-site-editing-theme-learnings/">What I Learned Building a Full-Site Editing Theme</a> and <a href="https://wpdevelopment.courses/articles/global-styles-in-block-based-bosco/">Implementing Global Styles in Block-Based Bosco</a>. The <a href="https://wordpress.org/themes/block-based-bosco/">Block-based Bosco Theme</a> is also available in the WordPress.org repo. </p>



<hr class="wp-block-separator is-style-wide" />



<p>The <strong>theme.json</strong> settings structure is now finalized and is not experimental anymore. The <a href="https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/"><strong>Documentation</strong></a> is available in the Gutenberg Handbook. <strong><a href="https://twitter.com/riadbenguella">Riad Benguella</a></strong> wrote an <a href="https://riad.blog/2021/05/05/introduction-to-wordpresss-global-styles-and-global-settings/"><strong>Introduction to WordPress’s Global Styles and Global Settings</strong></a> to get you started on the new era of Theme development in WordPress. <em>(Yes, I shared this before. I just want to make sure you find it again ) </em></p>



<p>A few days ago, <strong><a href="https://twitter.com/aristath">Ari Stathopoulos</a> </strong>started working on a <a href="https://github.com/WPTT/theme-json-parser"><strong>Theme.JSON parser </strong></a>to make it possible for conventional themes to take advantage of the settings file as well. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/Ana_Segota">Ana Segota</a>,</strong> Ariel Design, an early adopter of Gutenberg blocks in her themes she published in 2018 and 2019, came out with her first theme embracing full-site editing, and global styles with here <a href="https://www.anarieldesign.com/free-full-site-editing-theme-naledi/"><strong>new Theme &#8220;Naledi&#8221;</strong></a>. Justin Tadlock took <a href="https://wptavern.com/anariel-design-launches-naledi-a-block-based-wordpress-theme">the theme for a spin</a>. Once the theme is available at WordPress.org, it will be the <a href="https://wordpress.org/themes/tags/full-site-editing/">sixth theme for full-site editing.</a> </p>



<p>When will we see yours? </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/pollyplummer">Sarah Gooding</a> </strong>has the story of  <strong><a href="https://wptavern.com/blocksy-theme-expands-free-starter-site-collection-plans-to-create-new-suite-of-blocks">Blocksy Theme Expands Free Starter Site Collection, Plans to Create New Suite of Blocks</a>.</strong> Blocksy embraced the block-editor wholeheartedly and grew it&#8217;s business rapidly, it seems. They also integrate well with the blocks by Stackable. </p>



<h2>Plugins for the Block Editor</h2>



<p><strong>Benjamin Intal</strong>, of <a href="https://wpstackable.com">Stackable </a>was this week&#8217;s guest of the WP Tavern Jukebox podcast, and he discussed with <strong><a href="https://twitter.com/wpbuilds">Nathan Wrigley</a></strong> the <strong><a href="https://wptavern.com/podcast/3-benjamin-intal-on-why-hes-betting-his-business-on-blocks">Why He’s Betting His Business on Blocks</a>.</strong> Intal and his team were an early adopter of the Block-editor and publish their plugin already in 2018 before the block-editor made it into WordPress Core. Since them Stackable has been an often recommended plugin for content creators, and it has grown quite a bit in features and reach. It&#8217;s certainly worth a listening, considering another wave of creativity and opportunities is coming to WordPress. This time for themes. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong>Alexandra Yap </strong>of Stackable recently posted the <a href="https://wpstackable.com/blog/introducing-dynamic-content/"><strong>Introducing Dynamic Content.</strong> </a>They wrote: &#8220;We’ve received a huge number of requests to display content from ACF’s custom fields in Stackable blocks, and now you can! <a href="https://wpstackable.com/blog/stackable-integrates-with-acf/">Most ACF field types are supported</a> as well as ACF Options Pages.&#8221;. They also <a href="https://wpstackable.com/blog/create-dynamic-content-in-stackable-with-toolset/">integrate with Toolset</a>.</p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/justintadlock">Justin Tadlock</a></strong> reviewed a newly published pricing block and found <a href="https://wptavern.com/you-might-not-need-that-block"><strong>You Might Not Need That Block</strong></a>. &#8220;With WordPress’s base blocks and a decent theme, many custom solutions are possible via patterns.&#8221;, he wrote, and he went ahead and recreated a three column pricing table with the core blocks and different themes, Twenty-Twenty, Eksell, and a full-site editing theme, too. I strongly agree with Tadlock that block patterns would provide an easier path. I can see that plugins like Easy-digital downloads, Woo Commerce and other ecommerce plugins would offer such patterns together with their Gutenberg blocks extensions to get store owners up and running quickly. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/pootlepress">Jamie Marsland</a> </strong>shared the <a href="https://www.pootlepress.com/2021/05/10-big-updates-to-our-woocommerce-gutenberg-plugins/"><strong>10 Big Updates to PootlePress WooCommerce Gutenberg plugins</strong></a> Storefront Blocks and WooBuilder Blocks. </p>



<hr class="wp-block-separator is-style-wide" />



<h2 id="events">Upcoming WordPress Events</h2>



<p><strong>June 7 &#8211; 9th, 2021</strong><br /><strong><a href="https://europe.wordcamp.org/2021/">WordCamp Europe</a></strong><br />A virtual event and contributor day. <a href="https://europe.wordcamp.org/2021/call-for-sponsors/">Call for sponsors is open.</a></p>



<p><strong>🎉</strong>  Gutenberg Times is a media partner of WordCamp Europe 2021 </p>



<p><strong>June 20 &#8211; 26</strong><br /><strong><a href="https://japan.wordcamp.org/2021/">WordCamp Japan</a></strong><br /><em>The schedule has been posted. Most sessions will be in Japanese, with exceptions, I think&#8230; </em></p>



<p><strong>July 17 + 18th, 2021</strong><br /><strong><a href="https://santaclarita.wordcamp.org/2021/">WordCamp Santa Clarita</a></strong><br />Calls for speakers (May 30th), sponsors, volunteers and organizers are open. </p>



<p><strong>June 24 &#8211; 26, 2021</strong><br /><strong><a href="https://cochabamba.wordcamp.org/2021/">WordCamp Cochabama</a></strong> (Colombia) </p>



<p><strong>July 23, 2021</strong><br /><a href="https://www.wordfest.live/"><strong>WordFest Live </strong></a>&#8211; <em>The </em>festival of WordPress<br />Call for Speakers is now open and submissions are <strong>due on May 24th, 2021</strong></p>



<p><strong>September 21 + 22, 2021</strong><br /><a href="https://2021.wpcampus.org/"><strong>WPCampus 2021 Online</strong></a><br />&#8220;A free online conference for web accessibility and WordPress in higher education.&#8221; <a href="https://2021.wpcampus.org/proposals">Call for Proposal is up</a> and proposal are <strong>due May 26, 2021</strong></p>



<hr class="wp-block-separator is-style-wide" />



<p>On the<a href="https://wpcalendar.io/online/"> <strong>Calendar for WordPress Online Events</strong> </a>you can browse a list of the upcoming WordPress Meetups, around the world, including WooCommerce, Elementor, Divi Builder and Beaver Builder meetups. </p>




<hr class="wp-block-separator is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>



<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too and won&#8217;t give your email address to anyone except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>



<hr class="wp-block-separator is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 22 May 2021 20:19:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:39:"WPTavern: You Might Not Need That Block";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117074";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:123:"https://wptavern.com/you-might-not-need-that-block?utm_source=rss&utm_medium=rss&utm_campaign=you-might-not-need-that-block";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5410:"<p class="has-drop-cap">As I was perusing the WordPress plugin directory this morning, I noticed a new block plugin, which is always one of the highlights of my week. It was a simple <a href="https://wordpress.org/plugins/bluebox-pricing-table-block/">pricing block</a>. Of course, I installed it and began playing around with its features. It was a version-1.0 product, so I was not going to fault it for not exceeding any expectations I might have had.</p>



<p>I have little doubt the plugin will meet many users&rsquo; needs. However, it did not bring much to the table that users could not already do with stock WordPress. And, as the block system continues to mature with more block options, end-users will gain more design control over every aspect of the existing core blocks.</p>



<p>This is not a knock at this particular plugin. I see less and less need for many third-party blocks the more I browse and test them. With WordPress&rsquo;s base blocks and a decent theme, many custom solutions are possible via patterns.</p>



<p>To test the plugin&rsquo;s block, I added it to a Columns block and duplicated it a couple of times to create pricing columns.</p>



<img />



<p>The structure of an individual pricing block is straightforward. It contains the equivalent of the following core blocks:</p>



<ul><li>Group</li><li>Heading</li><li>Heading/Paragraph</li><li>Heading/Paragraph</li><li>Paragraph</li><li>Button(s)</li><li>Separator</li><li>List</li></ul>



<p>Since I had the structure, I tried recreating it while using the Twenty Twenty-One theme. I kept everything nearly the same other than a couple of font sizes and colors.</p>



<img />



<p>The result was not particularly impressive, but it was mostly on par with what the plugin was doing. The biggest letdown with Twenty Twenty-One is that there are no vertical spacing controls to tighten up some of the text. This is more of a limitation of WordPress than the theme. Plus, margin and padding controls are coming.</p>



<p>Aside from one-click insertion into the content canvas, the benefits the Pricing Block plugin brings are rounded borders, box shadows, and list icons. However, these items would fit more into a site&rsquo;s design if they were controlled by the theme.</p>



<p>Knowing that the <a href="https://wptavern.com/compatibility-is-not-enough-the-eksell-wordpress-theme-creates-art-with-blocks">Eksell theme</a> solved the vertical alignment issue with a custom block style, I decided to try it. Again, I mostly stuck with the same structure.</p>



<img />



<p>Much better. However, Eksell is such a beautifully designed theme that it will upgrade the appearance of nearly anything. It almost isn&rsquo;t fair.</p>



<p>Kicking things up a notch, I gave the pattern an overhaul. I moved some things around, changed a few colors, and tried to have a little fun with it.</p>



<img />



<p>The noteworthy thing here is that I had far more control over the placement and design &mdash; within the current WordPress limitations. This was not possible with the plugin&rsquo;s block.</p>



<p>There are more robust pricing blocks. This is not a comparison of all the available options out there. However, many blocks share these problems. Often, what they need to do is take advantage of WordPress&rsquo;s &ldquo;inner blocks&rdquo; system and nest core blocks, which provides access to existing design options.</p>



<p>Wanting to take this experiment just a bit further, I activated a development version of the Gutenberg plugin and a block-based theme I have been tinkering with. With the right tools in hand, I had control over spacing, borders, typography, and far more &mdash; features that users will have in the coming months.</p>



<img />



<p>I like it, but I would also like to see professional designers take over from here. I want to see various pricing columns/tables available as patterns in themes and in the <a href="https://wptavern.com/pattern-directory-targeted-to-launch-with-wordpress-5-8">upcoming block directory</a>.</p>



<p>The next level of pricing columns would be integrating with plugins like WooCommerce, Easy Digital Downloads, and other eCommerce solutions. For example, users could insert a product&rsquo;s price or buy-now button into a pre-built pattern inserted into the editor canvas. That way, the data stays updated.</p>



<p>However, this is not specifically about pricing columns. It is about the blocks ecosystem altogether. Nearly every time I see a testimonial block, for example, I just see it as another pattern that could be registered.</p>



<p>For end-users, the quick solution will often be to activate an extra plugin. This requires more resources in the editor and, usually, the front end. It also ties them to another third-party tool, one which they may not necessarily need.</p>



<p>Ultimately, most webpage sections can be broken down to the individual blocks that exist in WordPress. They simply need to be arranged in a specific order and grouped together. Our community of theme authors can <a href="https://wptavern.com/it-is-time-for-wordpress-theme-authors-to-step-up-their-block-pattern-game">start providing these solutions</a> by doing the legwork of this grouping and register them as patterns.</p>



<p>The most useful blocks do something that WordPress is incapable of doing alone or adding elements that do not exist.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 22 May 2021 00:26:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"Matt: 2021 Streaming Kit";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=54177";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:41:"https://ma.tt/2021/05/2021-streaming-kit/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5094:"<div class="wp-block-image"><img /></div>



<p>My <a href="https://ma.tt/2020/05/ceo-video-streaming/">streaming setup post last year</a> got an amazing reception —&nbsp;there are similar setups being used by executives across the board, from companies fundraising to several I know of with 100B+ valuations. Since that original setup, I&#8217;ve updated my own usage of hardware and software combinations to achieve similar or better results for about a quarter of the cost. So here&#8217;s the latest and greatest, and below I&#8217;ll talk about why the changes.</p>



<div class="wp-block-columns">
<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B07K3FN5MR/?tag=photomatt08-20"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B07K3FN5MR/?tag=photomatt08-20">Elgato Cam Link 4K</a></p>
</div>



<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B06WWQ7KLV/?tag=photomatt08-20"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B06WWQ7KLV/?tag=photomatt08-20">Micro HDMI Cable</a></p>
</div>



<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B019AJOLEM/?tag=photomatt08-20"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B019AJOLEM/?tag=photomatt08-20">Glide Gear TMP100  Teleprompter</a></p>
</div>
</div>



<div class="wp-block-columns">
<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B08HVXJZYY/?tag=photomatt08-20"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B07VGHW91J/?tag=photomatt08-20"></a><a href="https://www.amazon.com/gp/product/B08HVXJZYY/?tag=photomatt08-20">Sony α7C Camera &amp; kit lens</a></p>
</div>



<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B00MT0SKAQ/"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B00MT0SKAQ/">Reticam mini tripod</a></p>
</div>



<div class="wp-block-column">
<a href="https://www.amazon.com/gp/product/B082QHRZFW/?tag=photomatt08-20"><img /></a>



<p><a href="https://www.amazon.com/gp/product/B082QHRZFW/?tag=photomatt08-20"></a><a href="https://www.amazon.com/gp/product/B082QHRZFW/?tag=photomatt08-20">Elgato Key Light Air LED panel</a> (2x)</p>
</div>
</div>



<p><strong>Video:</strong> Camlink, cable, and tripod are still the same, but the camera goes from an A7R IV and a separate lens to an A7C with a kit lens, which saves about $3,000. You also don&#8217;t need the dummy battery because the A7C runs great off USB-C.</p>



<p><strong>Lighting:</strong> More is more, so I usually use two Key Light Airs (linked above) instead of one. If I&#8217;m on the road I&#8217;ll pair <a href="https://www.amazon.com/dp/B08SJBH8HM?tag=photomatt08-20">two Aputure RGB lights</a> with <a href="https://www.amazon.com/gp/product/B08S456KZG/?tag=photomatt08-20">two Lume Cube monopods</a>.</p>



<p><strong>Audio:</strong> My best audio advice is to upgrade to an <a href="https://www.apple.com/am/mac/m1/">M1 Macbook Pro</a> so your computer is fast and the fan is never on, and position the laptop out of camera view but close to you so the built-in three-mic array picks up pretty good audio from you with no cables or earpieces. (<a href="https://www.youtube.com/watch?v=JQvXqDdTToM&t=205s">Here&#8217;s a singer recording a song on the pre-M1 16-inch version</a>, and note she has to remove fan noise in post-processing.) For bonus points <a href="https://krisp.ai/">add Krisp.ai ($60/yr)</a> so you get background noise and room echo magically eliminated in real-time.</p>



<p><strong>Teleprompter:</strong> The Glide Gear is much easier to set up and way cheaper than my old recommendation. Instead of an external monitor, I use <a href="https://support.apple.com/en-us/HT210380">an iPad and the MacOS Sidecar feature</a>. I still don&#8217;t have a great way to reverse the screen; in the comments, I&#8217;ll share some of what folks have recommended to me.</p>



<p>The above setup removes 75% of the cost without sacrificing any quality.</p>



<p>I&#8217;ve gone through every permutation on audio, including using a <a href="https://www.amazon.com/gp/product/B07VQQ2J28/?tag=photomatt08-20">MixPre-3</a>, <a href="https://store.sounddevices.com/product/noiseassist-for-mixpre/">NoiseAssist plugin</a>, and a <a href="https://www.amazon.com/gp/product/B00030679K/?tag=photomatt08-20">MKH416 shotgun mic</a> ($2k+ total), but I never use that setup unless I&#8217;m recording a <a href="https://distributed.blog/">fancy audio-only podcast</a>.</p>



<p>Why am I using <a href="https://www.amazon.com/gp/product/B00D4LBOV6/?tag=photomatt08-20">the Sennheiser SC30</a> in the above photo? Well it was an unusual situation&#8230;I was on the side of the road, next to an RV, with logging trucks rumbling by. Sometimes you don&#8217;t always know where you need to do a broadcast. <img src="https://s.w.org/images/core/emoji/13.0.1/72x72/1f604.png" alt="😄" class="wp-smiley" /></p>



<img />Behind the scenes! We were recording what <a href="https://www.youtube.com/watch?v=qaIYdsy-Gb8">became this panel</a>.



<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 21 May 2021 23:29:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:90:"WPTavern: Open Source Maintainer Week Begins June 7 with Activities, Events, and Resources";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=117041";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:221:"https://wptavern.com/open-source-maintainer-week-begins-june-7-with-activities-events-and-resources?utm_source=rss&utm_medium=rss&utm_campaign=open-source-maintainer-week-begins-june-7-with-activities-events-and-resources";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2487:"<p><a href="https://github.com/">GitHub</a>, in partnership with <a href="https://tidelift.com/">Tidelift</a>, has set aside June 7-12, 2021, as <a href="https://github.com/github/maintainerweek">Maintainer Week</a>, a time for open source maintainers to share knowledge and experiences through a series of planned activities and events. </p>



<p>Tidelift plans to kick off Maintainer Week on June 7 with a virtual event called <a href="https://upstream.live/">Upstream</a>, featuring 30+ sessions that attendees can watch live or access following the event. This event will focus on some of the bigger problems and trends in the open source ecosystem. For example, Sarah Novotny from Microsoft will be speaking about open source as an innovation engine. Simon Phipps, OSI Director of Standards and Policy, will be presenting on &ldquo;spotting the rights ratchet model early,&rdquo; a hot topic in the recent open source relicensing controversies. Attendees will also have the opportunity to meet the maintainers and experts behind many popular open source tools that are used at scale.</p>



<p>GitHub will be hosting its inaugural <a href="https://globalmaintainersummit.github.com/">Global Maintainer Summit</a> on June 8-9 as part of the week&rsquo;s activities. It is billed as more of a gathering or &ldquo;group therapy session&rdquo; for maintainers, with lightning talks featuring different projects&rsquo; approaches to common problems. WordPress lead developer Helen Hou-Sand&iacute; will be presenting a session called &ldquo;You Can&rsquo;t Have a Solution Without a Problem.&rdquo; GitHub emphasized that attendees do not have to be open source maintainers to attend, as many of the the best practices and skills discussed pertain to other aspects of life. </p>



<p>In between sessions, maintainers will have the chance to build collaborative relationships with others and add skills that will help them avoid burnout. GitHub will be hosting a virtual hallway experience using Gather. This will allow attendees to talk with those standing closest to them and have smaller, more personal conversations. </p>



<p>Open source maintainers who want to connect with others who share some of the same challenges, will want to add <a href="https://github.com/github/maintainerweek">Maintainer Week&rsquo;s activities</a> to the calendar. All of the upcoming events are free but registration is required on the <a href="https://upstream.live/register">Upstream</a> site.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 21 May 2021 20:37:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:116:"WPTavern: Google Aims to “Revitalize RSS” and Recapture Users’ Trust with Experimental Follow Button in Chrome";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116905";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:259:"https://wptavern.com/google-aims-to-revitalize-rss-and-recapture-users-trust-with-experimental-follow-button-in-chrome?utm_source=rss&utm_medium=rss&utm_campaign=google-aims-to-revitalize-rss-and-recapture-users-trust-with-experimental-follow-button-in-chrome";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6568:"<p>The internet was set abuzz yesterday after Google officially confirmed that it has been <a href="https://wptavern.com/chrome-is-testing-a-follow-button-for-websites">testing a Follow button for websites in Chrome</a>. In February, the publishers of <a href="https://www.chromestory.com/2021/02/chrome-follow-button/"><em>Chrome Story</em></a> spotted the button on Canary for Android, and speculated that it may be integrated with Google&rsquo;s Discover feature. Chrome <a href="https://blog.chromium.org/2021/05/an-experiment-in-helping-users-and-web.html">announced</a> that it is building on RSS to allow users to follow websites. The latest content from these sites will show up chronologically on the New Tab page as it is published.</p>



<div class="wp-block-image"><img /></div>



<p>At this time it does not look like Follow would be integrated with Discover, which is focused on surfacing content based on user-selected topics and a user&rsquo;s search activity. The Follow feature appears that it will function almost like a bare bones &ldquo;Chrome Reader,&rdquo; if you will. </p>



<p>In 2013, Google blithely closed down its Google Reader product in a post titled &ldquo;<a href="https://googleblog.blogspot.com/2013/03/a-second-spring-of-cleaning.html">A second spring of cleaning</a>,&rdquo; saying its usage had declined. Younger internet users may not realize what a slap in the face this was, and how devastating it was to the ecosystem of RSS-based tools. </p>



<p>In response to a Twitter user&rsquo;s suggestion to stick with open standards, a Google representative <a href="https://twitter.com/WebCreators/status/1395106908919386112">replied</a>, &ldquo;We intend to revitalize RSS, and from a product perspective, give users and creators a new, direct way to connect.&rdquo; Presenting this as a new way to <a href="https://twitter.com/pbakaus/status/1395091617732644864?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1395091617732644864%7Ctwgr%5E%7Ctwcon%5Es1_c10&ref_url=https%3A%2F%2Fwptavern.com%2Fwp-admin%2Fpost.php%3Fpost%3D116905action%3Dedit">make RSS &ldquo;mainstream consumer&rdquo; friendly</a> is a bit baffling for those who lost trust in Google&rsquo;s willingness to recognize how critical RSS was for the information ecosystem in 2013.</p>



<p>While some are optimistic that Chrome&rsquo;s experiment may bring visibility to RSS feeds, others are skeptical that Google may be trying to revitalize RSS for its own commercial interests and not in service of the open web. Dave Winer, who pioneered the development of weblogs and RSS syndication,  gives voice to that skepticism in a reaction on his <a href="http://scripting.com/2021/05/19.html#a170138">blog</a>: </p>



<blockquote class="wp-block-quote"><p>&ldquo;The memory of&nbsp;<a href="https://www.google.com/search?q=site%3Ascripting.com+%22google+reader%22">Google Reader</a>&nbsp;may have faded so much that Google appears ready to try again. Even the headline of this&nbsp;<a href="https://techcrunch.com/2021/05/19/undead-again-google-brings-back-rss/amp/">TechCrunch article</a>&nbsp;is disturbing. Google did so much damage to&nbsp;<a href="http://cyber.law.harvard.edu/rss/rss.html">RSS</a>, the thought of them &lsquo;reviving&rsquo; it is analogous to Exxon reviving the site of some&nbsp;<a href="https://en.wikipedia.org/wiki/Superfund">huge oil spill</a>, one that they didn&rsquo;t contribute to cleaning up. Even worse, browser vendors have no place trying to provide the user interface for RSS. Another toxic dump site.&rdquo; </p></blockquote>



<p>Winer has a suggestion for Google that is more in the spirit of keeping things open and preserving portability for subscription lists. He recommends Google steer clear of providing any kind of a reader and instead focus on making it easy to share the subscription list:</p>



<blockquote class="wp-block-quote"><p>&ldquo;If Google wants to help RSS, great &mdash; here&rsquo;s how. Do the subscribe button, that&rsquo;s a good thing. But the result should be a&nbsp;<a href="http://scripting.com/2013/08/15/feedReaderDevs">dynamic OPML subscription list</a>, that the user can provide to any reader app they want. It&rsquo;s dynamic in that the contents can change, and the readers should periodically check to see if feeds have been added or removed. This way, if someday Google abandons RSS, again, everything can keep on ticking, more or less. Inviting users to rely on them shows that they have no sense of responsibility for the trust they betrayed in the past. Perhaps users can refuse to go on this ride? That might be too much to hope for.&rdquo;&nbsp;</p></blockquote>



<p>Google developer advocate Paul Bakaus <a href="https://twitter.com/pbakaus/status/1395091619397791744">said</a> the Follow button experiment is &ldquo;only the beginning of a bigger exploration&rdquo; and the company is looking for feedback from publishers. Hopefully this exploration also includes improving how feeds are displayed in the browser. It&rsquo;s not clear yet whether Google has plans to monetize the New Tab page with ads, promoted content, or through some other means.</p>



<p>At this time, Google&rsquo;s only recommendation to publishers is to keep their sites&rsquo; RSS&nbsp;<a rel="noreferrer noopener" href="https://developers.google.com/search/blog/2014/10/best-practices-for-xml-sitemaps-rssatom" target="_blank">up-to-date</a>. WordPress users have nothing to worry about here, as all WordPress sites have built-in support for RSS feeds by default. If the Follow feature graduates out of the experimental stage, Google will provide more guidance to web publishers. </p>



<p>This experiment does not exactly contain the decentralized feed aggregator capabilities that RSS fans might hope for, but if Google can build in an easy way to export users&rsquo; subscription lists then it might have a chance at contributing something truly useful. Users could then take their subscriptions to feed readers that will have more capabilities than Chrome&rsquo;s basic reader. In this sense Chrome&rsquo;s Follow button could make it easy for users to actively curate their RSS subscriptions based on their interests, promoting a more healthy and conscious consumption of news and other content.  </p>



<p>The landscape of RSS tools has changed over the past decade but Google has the opportunity to play a meaningful role in revitalizing RSS if they put users first this time. The biggest hurdle will be recapturing their trust after snuffing out Reader in 2013.</p>



<p> </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 21 May 2021 02:16:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: Upgrade Your Publishing Flow with the Post Descriptions WordPress Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116996";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:209:"https://wptavern.com/upgrade-your-publishing-flow-with-the-post-descriptions-wordpress-plugin?utm_source=rss&utm_medium=rss&utm_campaign=upgrade-your-publishing-flow-with-the-post-descriptions-wordpress-plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3691:"<p class="has-drop-cap">Tom de Visser, a developer from Amsterdam, released the <a href="https://wordpress.org/plugins/post-descriptions/">Post Descriptions</a> plugin last week. It was his first submission to the WordPress.org plugin repository. It allows users to write short descriptions on a per-post basis, which are then displayed on the post-management screen.</p>



<p>For an initial outing, it already seems to be a hit with its small user base. It has already racked up several five-star reviews and over 100 active installs. Granted, one of those reviews is from his employer, Mediaversa. While that might not seem like much from the outside looking in, anyone who has created plugins knows that it is a successful launch for an individual developer&rsquo;s first plugin submission.</p>



<p>The plugin&rsquo;s goal is simple: leave small notes, reminders, to-dos, or longer descriptions for posts. It could be an ideal solution for a small team, but lone bloggers might need it too.</p>



<p>Post Descriptions works with both the regular WordPress post editor or the classic editor by adding a meta box to the side of the editing screen. Currently, it only allows descriptions for posts or pages. Maybe the developer will add a post-type-support flag or filter hook for custom post types in the future.</p>



<img />Posts Descriptions plugin meta box.



<p>Aside from the description input box, users can tick the &ldquo;Make your description important&rdquo; checkbox to highlight a particular note. This option gives the text&rsquo;s display a red color and turns it bold when viewed.</p>



<p>Descriptions are viewable via the post or page management screens. By default, they appear as a &ldquo;state,&rdquo; similar to how pending or draft states next to the title. The plugin also displays them under a &ldquo;Description&rdquo; column. Users can turn off the state display via the plugin&rsquo;s settings screen and toggle the extra column via WordPress&rsquo;s built-in Screen Options tab.</p>



<img />Descriptions as post &ldquo;states.&rdquo;



<p>One of my favorite features of this plugin is the flexibility of selecting where the notes appear on the post-management screen. Those who prefer one or two words can choose to display them as states. Those who prefer lengthier descriptions can show them in a separate column. Or, do both.</p>



<img />Column for displaying post descriptions.



<p>Users can also add descriptions via the Quick Edit link on the post-management screen.</p>



<p>From a user-experience standpoint, it hits some of those sweet spots of usability and simplicity. Under the hood, the code is solid. The developer does not seem to be overthinking things and making the plugin more complicated than necessary.</p>



<p>For small teams, I envision building a labeling system around this plugin that could address workflow issues. Adding short notes like Editor Review, SEO Review, and similar would alert the right team members to sign off on a post.</p>



<p>While the flexibility of displaying notes as either states or descriptions is welcome, it does not account for a third type of user. My ideal workflow would be to have separate inputs for both states and descriptions. I could create a shorter state that gets my team&rsquo;s attention. Then, if more information is needed, I could add a longer description.</p>



<img />Idea: Separate state and description text.



<p>The downside in such a system is that it puts <em>yet another</em> input field in front of the end-user. Sometimes the route with the least effort is best. And, for a quick post note plugin, it is tough to beat the plugin&rsquo;s current solution.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 21 May 2021 00:25:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"BuddyPress: BuddyPress 8.0.0-beta2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=318656";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://buddypress.org/2021/05/buddypress-8-0-0-beta2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4249:"<p>Hello BuddyPress contributors!</p>



<p>If you haven&#8217;t tested our first <a href="https://buddypress.org/2021/04/buddypress-8-0-0-beta1/">8.0.0 beta release</a>, here&#8217;s another opportunity to help us give the final touches to our next major release so that we make sure it will fit perfectly into your WordPress / BuddyPress specific configuration. Beta testing is very important and we need you all, whether you&#8217;re a regular or advanced user, a theme designer or a plugin author: please contribute!</p>



<div class="wp-block-buttons is-content-justification-center">
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background" href="https://downloads.wordpress.org/plugin/buddypress.8.0.0-beta2.zip">Test BuddyPress 8.0.0-beta2</a></div>
</div>



<div class="wp-block-spacer"></div>



<h2>What&#8217;s new since beta1?</h2>



<p>First we applied to ourselves the advice we just gave you into the first paragraph of this post: we&#8217;ve tested BuddyPress on WordPress 5.8-alpha and on latest stable WordPress &amp; Gutenberg&#8217;s plugin. Our goal was to check the very promising <a href="https://make.wordpress.org/core/2021/05/12/help-test-the-widgets-editor-for-wordpress-5-8/">Widgets Block Editor</a> that is announced to be part of the WordPress 5.8 release. This helped us <a href="https://buddypress.trac.wordpress.org/ticket/8465">anticipate some deprecation notices</a> and <a href="https://buddypress.trac.wordpress.org/ticket/8476">prevent an issue</a> to happen into the new Widgets Block Editor Administration screen. If you were worried about losing your favorite BuddyPress widgets once WordPress 5.8 is released: be reassured, we can tell you there&#8217;s a back-compatibility mechanism into the Widgets Block feature making sure legacy widgets can still be managed from the new Widgets Block Editor Administration screen. If you&#8217;re wondering if we have a plan about migrating these widgets as blocks, we confirm <strong>we do</strong> and we actually started building these <a href="https://github.com/buddypress/bp-blocks/issues/37">next BP Blocks</a>!</p>



<p>We also tested the Full Site Editing feature. For now, there&#8217;s a breaking change preventing our BP Theme Compat API to behave as expected <a href="https://buddypress.trac.wordpress.org/ticket/8474">but we&#8217;re on it</a> and we&#8217;ll make sure BuddyPress is Full Site Editing ready <strong>before this feature is merged into WordPress core</strong>.</p>



<p>We started documenting the new features arriving in <a href="https://bpdevel.wordpress.com/category/development-notes/8-0/">BuddyPress 8.0.0</a>, you can already learn about <a href="https://bpdevel.wordpress.com/2021/05/06/selectable-xprofile-sign-up-fields-in-8-0-0/">the selectable signup xProfile fields</a> and the <a href="https://bpdevel.wordpress.com/2021/05/05/new-xprofile-field-type-checkbox-acceptance-will-be-introduced-in-buddypress-8-0-0/">CheckBox Acceptance xProfile field</a>.</p>



<p>Finally we&#8217;ve polished the very promising <a href="https://buddypress.trac.wordpress.org/ticket/8139">BP Members Invitations feature</a> and made sure it was <a href="https://buddypress.trac.wordpress.org/ticket/8430">easier to extend the BP Messages UI</a> into the BP Nouveau template pack.</p>



<p>The final release is slated to early June and&nbsp;<strong>we need you to get there</strong>: do test this beta release of BuddyPress <img src="https://s.w.org/images/core/emoji/13.0.1/72x72/1f64f.png" alt="🙏" class="wp-smiley" />.</p>



<p>You can test BuddyPress 8.0.0-beta2 in 4 ways :</p>



<ul><li>Try the <a href="https://wordpress.org/plugins/bp-beta-tester/">BP Beta Tester</a> plugin.</li><li><a href="https://downloads.wordpress.org/plugin/buddypress.8.0.0-beta2.zip">Download the beta here (zip file)</a>.</li><li>Check out our SVN repository: <code>svn co https://buddypress.svn.wordpress.org/trunk/</code></li><li>Clone our read-only Git repository: <code>git clone git://buddypress.git.wordpress.org/</code></li></ul>



<p>Thanks in advance for your contributions&nbsp;<img src="https://s.w.org/images/core/emoji/13.0.1/72x72/1f970.png" alt="🥰" class="wp-smiley" /></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2021 20:00:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Mathieu Viet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:32:"Matt: Squarespace Direct Listing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=54194";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://ma.tt/2021/05/squarespace-direct-listing/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2783:"<p><a href="https://www.sec.gov/Archives/edgar/data/1496963/000110465921051251/tm213918-6_s1.htm">Squarespace filed their S-1 last month</a>, and went a direct listing route for their stock today under the ticker SQSP, so I&#8217;ve been getting lots of questions on my thoughts on their business. It&#8217;s easier to share here in a blog than individually.</p>



<p>Squarespace&#8217;s CEO <a href="https://twitter.com/acasalena">Anthony Casalena</a> is a thoughtful, creative leader. It&#8217;s amazing what he&#8217;s built since 2003, and he obviously has many decades ahead of him. From our conversations I know how seriously he takes the craft not just of designing great products, but designing great organizations that will stand the test of time.</p>



<p>Squarespace is a customer-centric company, that has reliable, well-designed services, great support, and puts their customers first by allowing things like <a href="https://support.squarespace.com/hc/en-us/articles/206566687-Exporting-your-site">standards-based export</a>. I&#8217;ve always observed them to behave and compete with the highest of ethics.</p>



<p>Their products work well, and they&#8217;ve been strategic in their acquisitions, including recently <a href="https://www.exploretock.com/">Tock</a> which I&#8217;m a big fan of. </p>



<p>Their metrics are great, and there&#8217;s huge opportunity still. If you add up all the companies (including Automattic) in the independent web space it&#8217;s still only tens of millions of subscribers. I truly believe the eventual audience is every business in the world, and a good chunk of the 7 billion individuals, so there is so much room for everyone to grow.</p>



<p>How about the stock? Some of my favorite investing advice comes from Charlie Munger:</p>



<blockquote class="wp-block-quote"><p>“I could improve your ultimate financial welfare by giving you a ticket with only twenty slots in it so that you had twenty punches representing all the investments that you got to make in a lifetime. And once you’d punched through the card, you couldn’t make any more investments at all. Under those rules, you’d really think carefully about what you did and you’d be forced to load up on what you’d really thought about.”</p></blockquote>



<p>If I had to pick between Squarespace or <a href="https://ma.tt/2021/04/wix-dirty-tricks/">Wix</a>, I&#8217;d pick Squarespace every time. They&#8217;re a company you could punch the card with. They&#8217;ve built a great brand through their marketing and rightly earned trust with their customers and within the community as a good business, and they have a founder-led path to success for many years to come. I&#8217;m wishing them the best in their next chapter as a public company.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2021 02:37:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:110:"WPTavern: No More Accidental Custom Plugin Overrides, WordPress 5.8 To Allow Developers To Set Plugin Hostname";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116798";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:263:"https://wptavern.com/no-more-accidental-custom-plugin-overrides-wordpress-5-8-to-allow-developers-to-set-plugin-hostname?utm_source=rss&utm_medium=rss&utm_campaign=no-more-accidental-custom-plugin-overrides-wordpress-5-8-to-allow-developers-to-set-plugin-hostname";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4281:"<p class="has-drop-cap">Almost since the dawn of the plugin and theme upgrade mechanisms inclusion in core over a decade ago, third-party developers have asked for an easy way to bypass the system. WordPress 5.8 will finally <a href="https://core.trac.wordpress.org/changeset/50921">deliver on this feature request</a>.</p>



<p>While it has long been possible to filter the update system, methods for doing so were more complex than needed. They also required the plugin itself to be active on a site. A simple flag for enabling/disabling the feature on a per-plugin basis is long overdue.</p>



<p>&ldquo;The utility is that this is an abstracted API that allows two things,&rdquo; <a href="https://github.com/WordPress/wordpress-develop/pull/950#issuecomment-777985189">wrote Dion Hulse</a> in a GitHub pull request that patched the code:</p>



<ul><li>A plugin to declare a URI/string that if set, WordPress.org update API&rsquo;s ignores the plugin.</li><li>Code running on the site, can use that headers hostname/data to offer an update for the plugin to be stored into the update transient, without having to jump through hoops such as overriding the transient / checking too often / etc.</li></ul>



<p>WordPress 5.8 will have a new <code>Update URI</code> <a href="https://developer.wordpress.org/plugins/plugin-basics/header-requirements/">plugin header field</a>. If its value matches anything other than <code>https://wordpress.org/plugins/{$slug}/</code> or <code>w.org/plugin/{$slug}</code>, WordPress will not attempt to update it.</p>



<p>Beyond that, developers can roll their own solutions if they want to handle updates for non-WordPress.org plugins. That is where the new <code>update_plugins_{$hostname}</code> filter comes into play. WordPress will parse the URL included in the plugin&rsquo;s <code>Update URI</code> header and use the hostname as the value. Developers can then hook into it and do whatever they need.</p>



<p>Plugin authors with extensions hosted by WordPress.org will not need to worry about adding this new header. <a href="https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/#8-plugins-may-not-send-executable-code-via-third-party-systems">Rule #8 of the plugin guidelines</a> already disallows sending executable code via third-party systems. The following sub-section covers this scenario more specifically:</p>



<blockquote class="wp-block-quote"><p>Serving updates or otherwise installing plugins, themes, or add-ons from servers other than WordPress.org&rsquo;s</p></blockquote>



<p>The discussion picked up some steam 13 months ago on a <a href="https://core.trac.wordpress.org/ticket/32101">six-year-old ticket</a>. &ldquo;I&rsquo;ve now had a plugin unceremoniously deleted from a client&rsquo;s website when scheduled plugin automatic-update have run,&rdquo; <a href="https://core.trac.wordpress.org/ticket/32101#comment:64">wrote a contributor</a> with the username <em>apedog</em>. &ldquo;This is actually the second time I&rsquo;ve encountered this naming-conflict problem for a plugin of mine. In both cases, I had chosen a plugin name with no apriori naming conflict. However, at some later point, someone else had also written a plugin with the same generic name and submitted that to the wp.org repository. From that point on my plugin&rsquo;s proper functioning is broken.&rdquo;</p>



<p>While the deletion issue turned out not to be an issue on WordPress&rsquo;s end, perhaps it was the spark needed to keep the conversation going.</p>



<p>An active discussion is not always indicative of a feature getting the green light. Nor does it mean someone will write the code. Many such tickets have had months or years of conversation, only to eventually languish and die. This ticket seemed to have fit that bill too. It was opened in 2015. However, new features are sometimes more about timing, just pure randomness, or a developer with core commit access simply getting the job done.</p>



<p>The ticket for plugins has been accepted and committed to WordPress. However, there is still the question of whether this will land for themes. The movement in the <a href="https://core.trac.wordpress.org/ticket/14179">11-year-old theme ticket</a> indicates that it could happen.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 19 May 2021 23:49:12 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:76:"WPTavern: #3 – Benjamin Intal on Why He’s Betting His Business on Blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wptavern.com/?post_type=podcast&p=116749";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/podcast/3-benjamin-intal-on-why-hes-betting-his-business-on-blocks?utm_source=rss&utm_medium=rss&utm_campaign=3-benjamin-intal-on-why-hes-betting-his-business-on-blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:51536:"<h2>About this episode.</h2>



<p>On the podcast today we have Benjamin Intal. He&rsquo;s the founder of <a href="https://wordpress.org/plugins/stackable-ultimate-gutenberg-blocks/">Stackable</a>, which is a suite of custom blocks.</p>



<p>Benjamin decided early on that his company was going to take the possibilities that Gutenberg offered seriously. They had previously developed a page builder plugin, but felt that the opportunity presented by blocks was something that they could not overlook.</p>



<p>During the conversation, we talk about why Benjamin decided to devote so much time and energy towards creating blocks, at a time when there was almost no certainty about the status of blocks, and the block editor. Indeed, there was no clarity on whether blocks would become a core feature in WordPress.</p>



<p>As we now know, blocks are an increasingly important topic in WordPress, and so Benjamin&rsquo;s decision, with a little hindsight, appears to have been a wise one.</p>



<p>We talk about some of the difficulties that have presented themselves over the last three years, and how they overcame them. These ranged from having to develop in the absence of documentation, to creating bespoke solutions to problems which were later handled by WordPress Core.</p>



<p>We also discuss how they went about iterating their product in a technology space which was new. What methods the team used to ensure that they were building features which their users really needed.</p>



<p>We also get into whether the block system is now fully mature and ready to support a growing ecosystem of developers. Is it a good idea to create &lsquo;smaller&rsquo; blocks with a limited use case, or a large suite of blocks which work in harmony with one another? Are we entering a future in which the &lsquo;there&rsquo;s a block for that&rsquo; mentality might lead to sites with &lsquo;block bloat&rsquo;; sites with multiple blocks, with overlapping features.</p>



<p>It&rsquo;s an interesting chat and gives an insight into a transitional moment in the history of WordPress. A moment in which blocks are taking on much of the heavy lifting in a WordPress website. A moment in which reputations are being made.</p>



<h2>Useful links.</h2>



<p><a href="https://wordpress.org/plugins/stackable-ultimate-gutenberg-blocks/">Stackable</a></p>



<p><a href="https://gutenbergtimes.com/">Gutenberg Times</a></p>



<p><a href="https://make.wordpress.org/">Make WordPress</a></p>


Transcript<div><div class="chat-transcript"><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:00:00]</div> <div class="chat-text"><p>Welcome to the third edition of the Jukebox podcast from WP Tavern. My name is Nathan Wrigley. Jukebox is a podcast and transcript for people who are interested in WordPress and the WordPress community. It&rsquo;s happening once per month for now, and if you wanted to be updated when new episodes are published, you can sign up at wptavern.com forward slash feed forward slash podcast. If you have any feedback about the podcast, then please head over to wptavern.com forward slash contact forward slash jukebox and there you&rsquo;ll find a contact form for you to complete and thanks in advance if you do. Okay, so the podcast today features Benjamin Intal. He&rsquo;s the founder of Stackable, which is a suite of custom blocks. Benjamin decided early on that his company, we&rsquo;re going to take the possibilities that Gutenberg offered very seriously. They had previously developed a page builder plugin, but felt that the opportunities presented by blocks was something that they could not overlook. During the conversation we talk about why Benjamin decided to devote so much time and energy towards creating blocks at a time when there was almost no certainty about the status of blocks and the block editor. Indeed, there was no clarity on whether or not blocks would become a core feature in WordPress. As we now know, blocks are an increasingly important topic in WordPress, and so Benjamin&rsquo;s decision, with a little hindsight, appears to have been a wise one. We talk about some of the difficulties that have presented themselves over the last three years and how they overcame them. They ranged from having to develop in the absence of documentation to creating bespoke solutions to problems which were later handled by WordPress Core. We also discuss how they went about iterating their product in a technology space which was new. What methods the team used to ensure that they were building features, which their users really needed. We also get into the topic of whether or not the block system is now fully mature and ready to support a growing ecosystem of developers. Is it a good idea to create smaller blocks with a limited use case, or a large suite of blocks, which work in harmony with one another? Are we entering a future in which the &lsquo;there&rsquo;s a block for that&rsquo; mentality might lead to sites with block bloat. Sites with multiple blocks, with overlapping features. It&rsquo;s an interesting chat and gives an insight into a transitional moment in the history of WordPress. A moment in which blocks are taking on much of the heavy lifting in a WordPress website. A moment in which reputations are made. If any of the points raised here resonate with you, be sure to head over to the post at wptavern.com forward slash podcast and leave us a comment there. And so without further delay, I bring you Benjamin Intal. I am joined by Benjamin Intal. Hi, Benjamin. How are you doing?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:03:45]</div> <div class="chat-text"><p>Hey, Nathan. Thanks for having me here.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:03:47]</div> <div class="chat-text"><p>You&rsquo;re very welcome. I think as with all podcasts like this, it&rsquo;s a really good idea to get some perspective on who you are and where you have been in the WordPress space. Although it&rsquo;s a bit of a generic question, I am going to ask it regardless. Would you just tell us what your relationship is with WordPress? How many years you&rsquo;ve been using WordPress, how you got involved and so on and so forth.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:04:09]</div> <div class="chat-text"><p>Yeah. So I started with WordPress development in 2010, and I stumbled into WordPress at first to create freelance websites. And I became a fan of WordPress. So I was surprised that you can extend it so much to create themes and plugins that did all manner of things. So I created my first theme, set it for sale. And then I moved into plugins, created actually a bunch of them. And now I had a development team here in the Philippines and our main focus is on building Stackable page builder Gutenberg blocks.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:04:44]</div> <div class="chat-text"><p>Thank you very much indeed. Now, as the title of this podcast will no doubt reflect. You&rsquo;ve really thrown all of your weight behind the whole Gutenberg block system. I&rsquo;m just curious about why it is that you&rsquo;ve done that as we speak, there are a few packs of blocks, which are similar to what you offer. You jumped on board very early and therefore you must have been fairly confident in Gutenberg and what was going to be offered. So I&rsquo;m just interested in that really? Why is it that you decided that blocks were going to be the future for you, your business, your company, and all of that?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:05:20]</div> <div class="chat-text"><p>Actually, when we started building Stackable, I think we released it early February, 2018, and Gutenberg was still in very early beta back then. And back then it wasn&rsquo;t yet certain if it would get included into WordPress core, but we were doing other things related to page builders during that time as well. And we thought that it wouldn&rsquo;t hurt to try building blocks for a Gutenberg. So it was something very innovative and new. So previously WordPress was all about PHP and this one, it was more about JavaScript and more about React. So it was a chance to learn new technologies. So we built actually just an MVP, minimum viable product. So we turned that into a free plugin that added blocks, uploaded it to the plugin directory, and then see what would happen. So if it works then great. If it didn&rsquo;t, then at least we still had fun and got the good learning experience from it. So that&rsquo;s how we got started.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:06:26]</div> <div class="chat-text"><p>Yeah. I am curious about that. That&rsquo;s quite a big commitment in terms of time and energy, and moving the assets around in your company in order to make that all happen. And I guess at that time it was a bit of a gamble. Were you prepared at that time to accept that perhaps Gutenberg wouldn&rsquo;t be making it into core and that your endeavors might end up just as time spent in development, but nothing would actually come out of it. Were you in some way hopeful that it would come into Core and we&rsquo;re banking on that happening?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:06:56]</div> <div class="chat-text"><p>It had something to do with timing actually, before diving into Gutenberg, we actually attempted to make our own page builder before using our own resources. In the middle of it Gutenberg suddenly popped out of nowhere. And then people were talking about that it would be a page builder killer in the future. So you had kind of a crossroads. So do we continued trying to build our page builder, or should we jump into the Gutenberg bandwagon if you say, if you can say that. So what we decided was, what if we just come out with something, and then while Gutenberg is still brewing, let&rsquo;s just continue what we&rsquo;re doing, the page builder. And then if Gutenberg gets merged into Core, then we can maybe focus our efforts more on that. But if not, then we can continue doing what we were originally doing.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:07:58]</div> <div class="chat-text"><p>Probably at various points dip into the suite of blocks that you have, which is called Stackable. I&rsquo;m just curious as to what the difficulties have been over the last, roughly three years or so building this, because if you&rsquo;re building something into a fully mature platform where the documentation is excellent and the roadmap is clear and everybody knows how to build things. That&rsquo;s one thing, but you were building into the dark really into an area of it almost like shifting sand, something that was certain today could be removed tomorrow. It was complete state of flux. The documentation probably wasn&rsquo;t as fleshed out as it could be. And the roadmap wasn&rsquo;t necessarily clear. So I&rsquo;m just wondering if there were any difficulties which you&rsquo;ve encountered over the last three years, which meant that you had to perhaps rewrite things undo things that you&rsquo;d already done or indeed find new opportunities in innovations that you didn&rsquo;t expect to come, which did come.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:08:56]</div> <div class="chat-text"><p>Yeah, I guess to start off, I didn&rsquo;t realize it&rsquo;s been three years already. Oh my gosh. So some of the components that we can use, especially at the start, we&rsquo;re a bit barebones. So we had to invent a lot of our own. So that&rsquo;s fun actually. Some parts now are getting better. So like now Gutenberg has the focal point picker and the gradient color picker. So before there weren&rsquo;t any of those controls, and I&rsquo;m actually excited to use these new things and Stackable as well. So that&rsquo;s one difficulty. About the documentation, I think it&rsquo;s okay, especially if you&rsquo;re just starting out, there are a lot of examples to get you started now. But a lot of the time we had to explore the code and go inside GitHub to study how things are done and how the components are used. Although even if we did that, it was still really helpful checking the code base. Since I think it&rsquo;s very well written. It&rsquo;s well segregated and well-maintained, there are hundreds of people who have contributed to the code. Most of whom are more knowledgeable in Gutenberg and React than me. So I also get to learn a lot of things from it. As for the roadmap, there&rsquo;s a higher overview roadmap that Matt Mullenweg brought up before, the four phases. Phase one replace the classic editor and then phase two is full site editing, phase three and four are collaboration and multi-lingual. So we go around that. But what we do is we have some big assumptions, that we mainly use as our guide on the direction on what we do. So in our minds, one of the main goals of Gutenberg is to have it replace the classic editor. So it&rsquo;s not meant to be a replacement for page builders per se. So if there&rsquo;s no more classic editor, Gutenberg would be the best experience for writing content in WordPress. So we work around that assumption. And also, we always anticipate whatever new feature is coming. So for example, full site editing is coming in the future. So instead of creating our own solutions like that, instead of providing the ability to edit templates and headers ourselves, we just wait for the future improvements so that we can build on top of it instead of reinventing on our own.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:11:27]</div> <div class="chat-text"><p>During the last three years, have there been blind alleys where you&rsquo;ve begun doing something only to figure out a) it couldn&rsquo;t be done possibly or b) it was going to become a part of Core? You mentioned something just there, but I&rsquo;m just wonderingh how the communication from the team that are building it has impacted what you&rsquo;ve been able to do. In other words, have you always felt that there&rsquo;s enough information coming downstream toward you, that you could confidently put your team to work building certain things or has the last three years been a bit of a stop-start&hellip; well we didn&rsquo;t know that was going to happen? I realize that we&rsquo;re at a point now where things are certainly better than they were, but just because of the fact that you are one of the few people who&rsquo;s done this right from the start, I&rsquo;m just wondering how that process has been over the last three years.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:12:19]</div> <div class="chat-text"><p>I&rsquo;m not sure whether the communication has changed and I don&rsquo;t think there&rsquo;s something necessarily wrong with it. I treat the Gutenberg updates like normal WordPress updates. So what I mostly do is just good old fashioned research. So to be honest, I check WP Tavern on what&rsquo;s new every now and then. And read the articles in there, although I&rsquo;m more of a lurker in the comments than a commenter. What I also do is I used to check managewp.org before they shut down, actually. I occasionally also try out the Gutenberg plugin to see what&rsquo;s new. So that&rsquo;s, I think one of the main sources of my information on what&rsquo;s coming, I read the change log rather actually try and read it since sometimes it can be quite technical. Make WordPress is also a very good resource for me on what&rsquo;s coming. So some of the entries in there go into great detail on what&rsquo;s new. Maybe there&rsquo;s an API or a large change, and they sometimes have links to videos and show what&rsquo;s actually new. And then actually there&rsquo;s this video and Gutenberg times. So it&rsquo;s like a news site, all about Gutenberg, by Birgit Pauli-Haack, where they demo the status of Full SIte editing before. So that was really helpful as well.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:13:43]</div> <div class="chat-text"><p>I know that the team themselves are very conscious that when Gutenberg was announced that there was real division in the WordPress community. There were many people who didn&rsquo;t want to have anything to do with it and felt that it had been more or less forced upon them, shall we say? And there were many people who embraced it. It did bifurcate the community a bit, split it in two. And there was also the concern that, because it was a new project and there weren&rsquo;t as many eyeballs and it hadn&rsquo;t reached maturity that it was difficult to get involved. Like you said earlier, you&rsquo;ve got to learn a whole bunch of new skills and many people who are quite happy using PHP, and that was as far as they wish to go, and all of a sudden there&rsquo;s new requirements to learn new programming techniques and so on and so forth. But you obviously decided it was worth the investment. So that&rsquo;s great. Well done to you. I&rsquo;m just curious as to, because you&rsquo;re shooting in the dark and inventing something new, I&rsquo;m interested to know how it is that you discover from your growing audience, what it is that they would wish you to iterate on in Stackable. So obviously if we go back three years ago, there was very little that you had to show. If we go now and look at what it is that you&rsquo;re offering, you&rsquo;ve got a whole suite of different things with multiple complicated options. And I&rsquo;m very curious to know if a plugin developer was keen to build their own block, what have you found to be a good way to discover from your audience, your memberships, your community, what it is that they wish you to build?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:15:15]</div> <div class="chat-text"><p>Communication is something that we feel that is very important because while we use Stackable ourselves for some of our own projects, I feel that there are a lot of scenarios and use cases that we haven&rsquo;t taken into consideration yet, and that our users would know more about. So first in communication, there&rsquo;s our support. Some customers email in just to request some feature that they really need. Then there&rsquo;s our Facebook community. So this is something that we started early on. So we try and foster sharing in the community. We try to be as transparent as we can. We try and share what we&rsquo;re currently doing. We share GIFs and screenshots and we get feedback on those. So whether it&rsquo;s a good idea or whether to continue or whether it lacks something more. And actually now it&rsquo;s a bit difficult catching up with the number of requests. And we&rsquo;ve discovered that what we wanted to build and what our users want, can sometimes be a bit different from each other. What&rsquo;s important is to remember who you&rsquo;re building for. They are the ones who tell us, what&rsquo;s a good idea. So for example, we have this role manager feature where you can lock up the inspector, and it would only allow you to edit the block text, which was actually suggested by a few of our users who had clients and those clients wanted to perform edits on their site themselves, but they didn&rsquo;t want them to accidentally change the design. So we wanted to add features geared towards agencies, but this was something that we didn&rsquo;t even think about. So it was a good match. So that&rsquo;s why we added that in.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:16:59]</div> <div class="chat-text"><p>I wondered if there were any things that you wish you were able to build, but you are constrained by the Gutenberg project thus far, are there any limitations that you&rsquo;ve run up against? What I&rsquo;m imagining here is there&rsquo;s a whole bunch of people out there in the community who never use page builders, and there&rsquo;s a whole bunch of people who write template files, and there&rsquo;s a whole bunch of people who really embrace page builders and it&rsquo;s become their modus operandi, that&rsquo;s how they interact with WordPress these days. And the level of sophistication that has been built into some of these tools is pretty incredible. They can do some fairly amazing things and their team have worked very hard. But they&rsquo;re in their own little silo. So as an example, page builder A over here, they&rsquo;ve got their team and they&rsquo;ve built all of these fantastic features and page builder B over here, they&rsquo;ve built there&rsquo;s and they&rsquo;re completely separate, and they&rsquo;re not interoperable, but we&rsquo;re trying to build it a system here where everybody can bolt on top of it, Gutenberg the block editor. But I&rsquo;m just wondering at the moment, if there are things which you see in third-party tools that you wish to build, but it&rsquo;s simply not available to you yet. There are constraints within what&rsquo;s possible.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:18:13]</div> <div class="chat-text"><p>I think something that fits that very well, is that the ability to edit page templates. Every now and then we get this request. Would I be able to edit headers? Can I edit my footers in all of my pages? But unfortunately we can&rsquo;t do something like that in Gutenberg yet. That&rsquo;s probably one of the main limitations that we have right now. And for that, there&rsquo;s an answer that Gutenberg has, although it&rsquo;s still in the pipeline, so we just have to wait for it, and then we can dive in and add features on top of it so that people can start creating their own page templates.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:18:52]</div> <div class="chat-text"><p>I think people give Guttenberg flack because it&rsquo;s not entirely clear unless you really go out of your way to discover what&rsquo;s coming down the pipeline and so on. It can be quite a confusing experience. And the idea that it&rsquo;s in the future, going to be able to do these things, and these things. It&rsquo;s a fairly drawn out process and it&rsquo;s taking a long time and we had Anne McCarthy on the podcast last time talking about why that was and why that&rsquo;s intentionally a fairly slow rollout because they&rsquo;ve got 40 plus percent of the web to protect. But I&rsquo;m just interested in whether any of that. Is a cause of frustration. If you&rsquo;d have been building this yourself you may be, could have advanced things quicker, but your users are asking for the ability to, like you say, alter page templates and so on, and you can&rsquo;t provide it for them, but it&rsquo;s not your fault. And it may be, there&rsquo;s a bit of you, which is thinking, do you know, I wish they&rsquo;d hurry up and get this thing finished.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:19:46]</div> <div class="chat-text"><p>Yeah, I think that&rsquo;s really something. So it&rsquo;s not really a frustration, but more of something that we always have to keep in mind is that we are quite dependent on Gutenberg&rsquo;s progress. So really have to time things right most of the time. So like Full Site Editing, there was a hint that it would maybe come out late last year. And there was another hint again, that it will come out earlier this year. But fortunately that didn&rsquo;t happen. So we always have to be on the tip of our toes when it comes to what&rsquo;s going to be released, and what can we do about it? One funny thing, but not really funny, but maybe unfortunate since we&rsquo;re building something that&rsquo;s tightly intertwined with Gutenberg is that some people mix up what&rsquo;s with Stackable and what&rsquo;s in Gutenberg. So for example, they recently changed how reusable blocks worked. And we got some emails from users asking us why we changed the behavior, a few usable blocks, but actually that wasn&rsquo;t us. It was part of the WordPress update.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:20:48]</div> <div class="chat-text"><p>From the outside that would feel like a point of frustration because suddenly something that you have got no control over is causing you to have to spend time answering support tickets and so on. Something that, that you didn&rsquo;t do is consuming your time. And while it&rsquo;s not a frustration, I guess that&rsquo;s just the fallout of jumping in early with this. If you&rsquo;d have waited to create this for another three or four years, when everything was much more mature than it is now, you would have probably had a great deal of a smoother road, but you would have missed that opportunity to become one of the people that jumped in early and made a name for themselves. So I guess as a company, you&rsquo;ve just got to accept a bit of that. That goes with the territory. You&rsquo;ve done this early. There&rsquo;ll be a benefit to that down the road, but there&rsquo;s also going to be moments right now where things don&rsquo;t go as smoothly as you&rsquo;d wish.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:21:42]</div> <div class="chat-text"><p>I think you said it quite right. So it&rsquo;s just part of the territory. We just really have to accept it that way. Since if you really jump in early, there&rsquo;s going to be a lot of changes, especially in Gutenberg. Where everything isn&rsquo;t certain yet. So you have to keep on adjusting on what&rsquo;s out there, what the people want. So I think it&rsquo;s just really part of the territory. And it&rsquo;s just something that you have to accept.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:22:07]</div> <div class="chat-text"><p>Speaking of which let&rsquo;s gaze into the crystal ball a little bit and think about what it is that you&rsquo;re planning to build in the near future. Now, obviously, anything that you say now, may have to go under the microscope of what Gutenberg actually allows you to do in the way that we&rsquo;ve just discussed. I&rsquo;m just interested to know what it is that you&rsquo;re hoping to build in the future, given what the project is hoping to provide for you.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:22:31]</div> <div class="chat-text"><p>So right now we&rsquo;re busy with the version three of Stackable. So currently we&rsquo;re at version two, but in the middle of adding new features and listening to feedback from the users, we realized that there were some things that we weren&rsquo;t able to do with how our blocks work right now. Cause right now what we did was every block, that we have, we try and make it so that you can turn any block into a whole section of your website. So while that&rsquo;s good. So that also gives us a few limitations on what we can do. So in version three, we want to make things more flexible. So for example, we want to add more dynamic content stuff and also better responsive editing. So things like, adjusting how columns would collapse in tablets and mobile. So for example, if you can specify your four column layout to be a two column layout in tablet, we want people to have that ability as well, so much more advanced editing capabilities, similar to what some page builders already have. Probably down the road, maybe towards the end of the year, we hope to be able to provide starter websites, a fully package website that you can just import and start from there and probably a design system, so you can change what all your Stackable blocks would look like. Something like that. Although that&rsquo;s just something we&rsquo;re currently thinking right now.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:24:00]</div> <div class="chat-text"><p>In terms of what you can do at the moment compared to one of the proprietary page builders that you could go and seek out in the WordPress space. Is there still a big disconnect with what they can do? So for example, you just mentioned a certain feature that page builders can currently do that you&rsquo;re hoping to bring. How long into the future, and obviously again, we are crystal ball gazing. Do you see that sort of feature parity there being equal amounts of features in page builders, which you can purchase and download from the repo and what Gutenberg will provide? How far in advance do you think it&rsquo;s going to be before they&rsquo;re feature equal?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:24:37]</div> <div class="chat-text"><p>Oh, I think probably around maybe two years or so, because right now, Gutenberg is still quite new. So we&rsquo;re still in the area where we can just edit the contents of single pages. We&rsquo;re not yet there in terms of editing the whole website in just Gutenberg and nowhere else. So I think we&rsquo;re maybe around two years from that</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:25:02]</div> <div class="chat-text"><p>In a couple of years time in two years&rsquo; time say when maybe there&rsquo;ll be many more features that people require to build full sites. Do you think that there&rsquo;ll ever be a point where the people who build page builders currently need to be concerned about there being a business left for them? In other words, Do you feel that Gutenberg will replace page builders? Or is it more a case of that&rsquo;ll be one option, but there&rsquo;ll still be a completely viable business for people who sell their page builder software.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:25:33]</div> <div class="chat-text"><p>Yeah. So you&rsquo;re asking if Gutenberg will ever replace themes and page builders? For that, I don&rsquo;t think so. I think if it replaces anything Gutenberg probably just replaces the classic editor, but with the plugins that extend Gutenberg, it can be a great alternative to page builders. Yeah. But I think in the future you can just get Gutenberg and then with the power of other plugins, it can be a viable page builder. So it can just be an alternative because there&rsquo;s always going to, it&rsquo;d be some people that would want an alternative version. Another way of building things.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:26:11]</div> <div class="chat-text"><p>I also feel it&rsquo;s a bit of a case of a rising tide carries all boats. What I mean by that is that as WordPress&rsquo;s market share seems to keep going up, a few years ago, it was in the mid thirties and then it became late thirties. And now we&rsquo;re into the early forties percent of the top 10 million websites. You feel like the market is just getting bigger. And so even if you were wedded to a particular page builder and you&rsquo;ve been using it for many years, it feels like the market&rsquo;s just going to get bigger for them all. So there&rsquo;s nothing to be particularly concerned about. It&rsquo;s just going to be one option. You&rsquo;re going to be able to do all sorts of different things with that option, but you&rsquo;ll also be quite able to just carry on using the existing stack that you&rsquo;ve got. If you&rsquo;re happy with it. Speaking of developments in the future, there are some lovely initiatives in the WordPress space to make the creation of content, much more straightforward. And I know in your case, you can drop pre-configured blocks in and you can style them and make them look however you like. And there&rsquo;s all sorts of options in there. I just wondered what you thought about some of the new developments, things like block patterns and reusable blocks, which allow us to save time by creating content, squirreling away somewhere, and whether you&rsquo;re intending to use any of these features in the future within Stackable.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:27:30]</div> <div class="chat-text"><p>Yeah. So reusable blocks are great for repeated content that you want to be consistent across your entire website. So something like a signup form for your newsletter that you can add in the middle or at the end of your blog posts, those are really helpful. So if you wanted to change something, you won&rsquo;t have to go through every single blog post to update it. Block patterns on the other hand are great also, but I feel that they&rsquo;re a bit under utilized. So they&rsquo;re like reusable blocks, but unlike reusable blocks, if you&rsquo;re the user, you can&rsquo;t add block patterns on your own, and it&rsquo;s up to the theme developer to add them. So I found that a lot of our users use reusable blocks like block patterns. So they add their designs as reasonable blocks, but when they add it into their pages, they just convert it back to regular blocks so that they can use that as a starting point and then customize them. So it&rsquo;s like an unofficial way to save your own block designs or patterns. So I think that&rsquo;s a use case that the Gutenberg developers can take into account and maybe add that in as a future update.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:28:41]</div> <div class="chat-text"><p>There are so many awkward problems with the Gutenberg UI at the moment, in terms of exposing those things to us, I feel that sometimes the proprietary page builders, I feel they do a really good job of showing you what all of that looks like with their overlays and things. I&rsquo;m not sure yet that, the Gutenberg project has hit upon the perfect UI. We&rsquo;ve got the bar over to the left, we&rsquo;ve got the bar over to the right and the fact that they&rsquo;re fixed in width and you&rsquo;re not really, you&rsquo;re not really able to moderate them. It feels like there&rsquo;s a lot of work to be done there to improve the UI, to discover all these things, and particularly in the case of reusable blocks, and block patterns. Nice ways of seeing, not just as a tiny little thumbnail, but something, large and full screen. So you can get a real idea of what it is you&rsquo;re about to drop into the page. So really a conversation about, where the UX could be improved if you&rsquo;ve got any thoughts on that.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:29:35]</div> <div class="chat-text"><p>Yeah. Yeah. I think there are a lot of things that we can still improve on. Although I think it will only just take time because right now, even if it feels like there are a lot of stuff being added to Gutenberg, and there are also a lot of things that are being studied and adjusted. So I think as an example of something that can be improved, like I mentioned a while ago, I think block patterns, I think a lot of people have, can have a good use by having the ability to add block patterns or their own block patterns. Oh, actually one of the good improvements that we can do in Gutenberg, because one of the hard things to do in Gutenberg is to know where you are, in the current page. Cause it&rsquo;s if you check out the block editor, if you check out Gutenberg, it&rsquo;s basically a tree of a lot of blocks and then blocks inside of other blocks. So it can easily be hard to know what you&rsquo;re editing. Although the, I forgot what it&rsquo;s called, the navigator button on the top. The one where you, when you click it, it&rsquo;s going to show you a bullet list of the blocks. So I think that can be improved. I think that can be transformed into something that you can use to actually manipulate the blocks that where you can, for example, if you want this heading to be moved into inside another container, you can just click the navigator, and then you can move it around from there directly. So I think something like that can be a good way or a good alternative for you to be able to move around blocks and figure it out where you are. Cause it&rsquo;s actually sometimes hard to click on something, especially if you&rsquo;re inside a columns block because inside a columns block, there&rsquo;s two column blocks, and inside that you have your other blocks inside. So it&rsquo;s hard to master or it&rsquo;s a bit hard to make sure that people can click around and figure out where they actually are. Actually, I think the difficulty here is that there&rsquo;s a balance between building a what is what you get, editor, and then also making it spacious enough that you can click around and easily figure out where you are, because if you add spaces everywhere and add outlines. So I think that&rsquo;s a solution. If you add outlines everywhere, that&rsquo;s going to be easier to know what&rsquo;s going on in the screen. So for example, if you have the columns block and then maybe an outline block to signify that you&rsquo;re inside the column. So that&rsquo;s going to be easier than if you didn&rsquo;t have any spaces and they don&rsquo;t have any outlines. That&rsquo;s going to be way easier than what we have right now. Although it&rsquo;s a delicate balance because now if you have outlines and lots of spacings, it&rsquo;s not going to be a, what you see is what to get builder, no matter what you do, it&rsquo;s going to be, you&rsquo;re going to have people who don&rsquo;t want what&rsquo;s going on right now. You&rsquo;re going to have people who don&rsquo;t like this change, or you&rsquo;re going to have people that would prefer the other way around. It&rsquo;s just finding the balance on the what works.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:32:49]</div> <div class="chat-text"><p>One of the most fantastic features that ever I suppose, came to WordPress was the ability to add in plugins to extend what WordPress could do with extra functionality, and in the near future, we&rsquo;re going to have the block directory will be available to everybody and we&rsquo;ll be able to search for blocks that we don&rsquo;t have yet installed and install them on our website. I&rsquo;m curious about whether you think this is a good development. What I mean by that is I just wonder if there&rsquo;s a concern that we need to have about people wanting to have a block for every little thing, and then downloading a ridiculous amount of blocks, most of which they don&rsquo;t need, which will be consuming up resources on their website and so on and so forth. I&rsquo;m just wondering what your thoughts are on this block directory, whether it&rsquo;s something that you&rsquo;re going to be involved in, whether you&rsquo;re going to do anything like that become involved in installing directly one of your blocks at a time as opposed to selling it as a whole suite.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:33:50]</div> <div class="chat-text"><p>To be honest, I was initially excited about the block directory. And I think it&rsquo;s already live right. It&rsquo;s working right now, except that, although I thought it was going to work more like the plugin and team directory, where there&rsquo;s an actual directory that you can go to and browse, I think right now the current behavior is that you have to search for a block inside the inserter, the plus sign that you click on to add blocks. And if what you type doesn&rsquo;t show a result. If you don&rsquo;t have any block that matches that keyword, then that&rsquo;s the only time the block directory shows up. So I think that process can be improved. I think it&rsquo;s a bit off since you can only see the block directory, if you type in a search term that doesn&rsquo;t match anything. So you&rsquo;ll have a lot of instances when the block directory won&rsquo;t show up at all. So for example, it won&rsquo;t trigger. If you type in text like the t e x t since that&rsquo;s the keyword of the native paragraph and heading block. So I think that&rsquo;s something that can be improved on and they hope they&rsquo;ll improve on. And I think if you have a lot of blocks turned on from the block directory, like a block bloat. So I think it&rsquo;s just the same as with plugin bloat. So it&rsquo;s like the notion of having just too many plugins installed. I think it depends on the plugins that you have in your setup. And they think with blocks, it&rsquo;s going to be the same thing. So it&rsquo;s quite possible to have this block bloat by installing lots of individual plugins. Especially if you add in lots of blocks that load their own style sheets, their own Javascript files, but they think this depends on how the blocks were made. So like with plugins, it depends on how the plugins were made. If you activate a lot of plugins that just loaded a lot of their stuff, every time. So that&rsquo;s going to be a bad experience. So I think it&rsquo;s going to be just the same. It&rsquo;s going to be up to the block developers. It&rsquo;s going to be the responsibility of the block authors to make everything optimized so that everything would load up properly.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:35:59]</div> <div class="chat-text"><p>I can see a future in which individual little blocks become a nice commodity. So at the moment, we&rsquo;ve obviously got a very full free WordPress repository, and we&rsquo;ve also got a very healthy paid for plugin and theme marketplace. And I can imagine a future where blocks also in the same way that Stackable is, you pay for the premium version of Stackable and that&rsquo;s great, but I can see almost like on your Android or iPhone device where you are prepared to pay a smaller amounts of money for a smaller thing. It&rsquo;s not a windows app or a Mac app, it&rsquo;s just the Android app, you&rsquo;re going to pay less for it. Just wonder if there&rsquo;s a marketplace for. Individual little blocks and, you pay, I don&rsquo;t know, $2, $3, $5 for a block that does this one thing. And does it well, and whether or not you&rsquo;re interested in that marketplace, or if you&rsquo;re going to keep your Stackable suite as one big thing, instead of lots of little things,</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:37:03]</div> <div class="chat-text"><p>I think maybe it might be a good idea for other blocks that provide a very large functionality in just one block. So maybe a store locator block, or maybe a contact form block, but I don&rsquo;t think that&rsquo;s an option for us because one benefit though, with doing things as a collection is that you get everything in one go, so you get all the blocks. Maybe you can turn some of them off if you don&rsquo;t need them. But if there&rsquo;s an update that adds one more block in the future, then you won&rsquo;t have to pay extra. So there&rsquo;s that. And going back to block bloat, I think it depends on how the blocks were made. So for example, in Stackable we have optimizations in place that affect all of our blocks. So if we add another block in their roster, the plugin won&rsquo;t necessarily feel any bulkier. That&rsquo;s one of the benefits of a collection. So I don&rsquo;t think we&rsquo;re going to offer individual blocks. I don&rsquo;t know right now we&rsquo;re thinking maybe not, but we don&rsquo;t know sometime, maybe in the future. But right now, I don&rsquo;t think so.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:38:09]</div> <div class="chat-text"><p>I&rsquo;m just curious about this sort of slight disconnect in the way that things look in the backend of Gutenberg. So if you&rsquo;re doing something Gutenberg, you&rsquo;ve made it and you&rsquo;ve given it the correct padding and so on, but the UI kind of gets in the way a little bit. And I&rsquo;m wondering if that&rsquo;s a problem for you. Do you get feedback from people saying it doesn&rsquo;t look the same over here as it does when I finally publish my website. Is that a problem that you&rsquo;ve had to overcome and explain to people, look, it&rsquo;s just parts of the UI, you&rsquo;re just going to have to cope with it. How have you overcome all of that?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:38:42]</div> <div class="chat-text"><p>Surprisingly, we don&rsquo;t have that much concerns over that. That it&rsquo;s not a direct, what you see is what you get. I think it&rsquo;s totally okay. Especially in desktop because technically it&rsquo;s really hard to make things identical while adding all of the bits and pieces that make the content editable, like the inspector or the toolbar, but it&rsquo;s easier for people to just accept that they&rsquo;re not going to be identical. And they&rsquo;re just going to be close enough. I think people have accepted that already, so it&rsquo;s okay. And after a few edits, I think it&rsquo;s easy to get the handle of it, of what your edits would look like in the front end, because basically you just ignore the sides of your website, essentially. Yeah. As I said, this is easier for desktops for mobile and tablet though, this is harder since right now, you can only do previews in Gutenberg. And all the times we see that people want to take control of how things get smooshed and how things collapse as the screen size gets smaller. So if you just keep on doing previews in Gutenberg, it&rsquo;s going to be harder since, just like before you have to keep on pressing preview to view in the front end and resize your browser. So I think it&rsquo;s more essential for a tablet and mobile. So first Stackable, we addressed this issue since when you do a previous in tablet or mobile our blocks would also change and you can set how they can look like on that specific screen size. Yeah, but I think it&rsquo;s up to the block developers one way or they&rsquo;d handle these cases as well, because Gutenberg already has some things in place. If you want to implement that in your own blocks.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:40:26]</div> <div class="chat-text"><p>It&rsquo;s pretty clear that you&rsquo;re very bullish about where this is going. I&rsquo;m guessing that you are, you as a company are all in on keeping this going and supporting this and making sure that Stackable is something which is going to be around for the future.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:40:42]</div> <div class="chat-text"><p>Yeah, definitely, definitely. I think it&rsquo;s going to be a very good future for Gutenberg.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:40:48]</div> <div class="chat-text"><p>Ben just before we go, is there anywhere where people could contact you if they wanted to find out a little bit more about what it is that you guys are doing?</p>
</div></div><div class="chat-stanza chat-row chat-speaker-2"><div class="chat-author chat-author-benjaminintal vcard"><cite class="fn">Benjamin Intal</cite> [00:40:56]</div> <div class="chat-text"><p>Oh yeah. If you want to contact me, I am in Twitter. So that&rsquo;s at @bfintal and I&rsquo;m also in Facebook. So just search for me, Benjamin Intal, and I&rsquo;m usually actually more there in Facebook than Twitter. If they want to check out Stackable, our website is wpstackable.com and we also have a Stackable community and Facebook, so you can join that as well.</p>
</div></div><div class="chat-stanza chat-row chat-speaker-1"><div class="chat-author chat-author-nathanwrigley vcard"><cite class="fn">Nathan Wrigley</cite> [00:41:19]</div> <div class="chat-text"><p>Okay, Ben, thank you very much for joining us today.</p>
</div></div></div></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 19 May 2021 14:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Nathan Wrigley";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WordPress.org blog: Dropping support for Internet Explorer 11";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10369";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:77:"https://wordpress.org/news/2021/05/dropping-support-for-internet-explorer-11/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3643:"<p>Internet Explorer 11 (IE11) was released over 7 years ago and is currently used by less than <a href="https://gs.statcounter.com/browser-version-partially-combined-market-share#monthly-202104-202105-bar" rel="nofollow">1% of all users on the Internet</a> with usage rapidly declining. A large majority of popular websites have already stopped supporting IE11 (including <a href="https://docs.microsoft.com/en-us/lifecycle/announcements/m365-ie11-microsoft-edge-legacy" rel="nofollow">Microsoft Teams in 2020</a>), and even the Microsoft 365 apps and services will be <a href="https://docs.microsoft.com/en-us/lifecycle/announcements/m365-ie11-microsoft-edge-legacy" rel="nofollow">dropping support later this year</a>.</p>



<p><strong>When WordPress 5.8 is released in July of this year, Internet Explorer 11 will no longer be supported.</strong></p>



<p>If you are currently using IE11, it is strongly recommended that you switch to a more modern browser, such as Google Chrome, Mozilla Firefox, Safari, or Microsoft Edge. IE11 users have been shown a warning that IE11 is considered outdated in the WordPress dashboard for the last 17+ months.</p>



<p>If you are already using one of the more modern browsers above, you will only be positively impacted by this change, as there are performance benefits to dropping IE11 support. However, if any other users of your site are still using IE11, it’s possible they will be affected.</p>



<h2>What does “dropping support” mean?</h2>



<p>When support for a browser is removed from WordPress, new features are no longer tested on those browsers and are not guaranteed to function optimally.</p>



<p>Automated tools that generate parts of the WordPress Core source code are also updated to exclude unsupported browsers. This means that any feature relying on these generated files will likely have bugs or stop working for users of those browsers.</p>



<p>The block editor will be the area of WordPress most heavily impacted by this change because almost all of the files related to the block editor are compiled using these automated tools. Other areas of the WordPress dashboard also use CSS built with these tools and their appearance will potentially be impacted when using IE11.</p>



<p>All other areas of the code base that are IE11 specific will need to be identified, evaluated, and removed on a case-by-case basis as the rest are manually maintained. This process will begin in the WordPress 5.9 release, and will likely happen gradually over several major releases. Additionally, any bugs which are reported for IE11 will not be fixed.</p>



<h2>How will this affect themes?</h2>



<p>No changes will be made to any of the default bundled themes as a result of this plan. No code related to IE11 support (or any other browser that may have been supported when each theme was released) will be removed from default themes. However, any new features added going forward will not be tested in IE11.</p>



<p>If you are not using a default theme, it’s still unlikely that your theme will be affected by this change. Themes typically have their own browser support policies, and changes in WordPress Core do not affect those. It’s possible that your theme author may have removed support for IE11 already.</p>



<p>If IE11 support is important to you and you are unsure whether your theme supports IE11, it is recommended that you reach out to your theme’s developer to confirm.</p>



<p>More information on this change can be found on the <a href="https://make.wordpress.org/core/2021/04/22/ie-11-support-phase-out-plan/">Making WordPress Core blog</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 19 May 2021 12:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:19:"Jonathan Desrosiers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:97:"WPTavern: Blocksy Theme Expands Free Starter Site Collection, Plans to Create New Suite of Blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116383";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:237:"https://wptavern.com/blocksy-theme-expands-free-starter-site-collection-plans-to-create-new-suite-of-blocks?utm_source=rss&utm_medium=rss&utm_campaign=blocksy-theme-expands-free-starter-site-collection-plans-to-create-new-suite-of-blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4546:"<p>When Sergiu Radu and Andrei Glingeanu launched their free <a href="https://wordpress.org/themes/blocksy/">Blocksy</a> theme nearly two years ago, they were surprised by how quickly their business grew during a global pandemic without any investment in marketing. Blocksy is now active on more than 20,000 WordPress sites and its commercial version, launched in October 2020, has grown to where both founders are now working full-time on the project.</p>



<p>Apart from inadvertently gaining a few mentions on some blogs and YouTube channels, Radu said his team has done nothing to market the theme. Users have most often been referred by word of mouth and many have gotten linked into the community through <a href="https://www.facebook.com/groups/blocksy.community">Blocksy&rsquo;s Facebok group</a>, which has grown to more than 2,200 members. Users join the group to discuss the theme and share their knowledge with each other.</p>



<p>Three months ago, Blocksy&rsquo;s founders hired two more teammates to assist with support and manage the theme&rsquo;s Facebook community. Radu said he thinks support has been the most important factor in the theme&rsquo;s growth. His team offers support to free users as well as those those who opt to pay for Blocksy Pro. The ticketing system is open for everyone using the theme. This might explain why Blocksy has maintained a perfect 5-star rating on WordPress.org with 455 reviews.</p>



<p>Another factor in the theme&rsquo;s success is its free starter sites that enable users to get going right away. In the past month, the Blocksy team has released three new starter sites, bringing the total to 10 (double the number available this time last year). <a href="https://demo.creativethemes.com/blocksy/yogi/">Yogi</a>, the latest release, is based on the block editor and was designed to showcase Blocksy&rsquo;s capabilities for customizing and managing custom post types. These are registered with the help of <a href="https://metabox.io/">WP Meta Box</a>. </p>



<ul><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li></ul>



<p>In April, the team released <a href="https://demo.creativethemes.com/blocksy/tasty/">Tasty</a>, a starter site that uses the <a href="https://wordpress.org/plugins/recipe-card-blocks-by-wpzoom/">Recipe Card Blocks</a> plugin by WPZOOM. If you&rsquo;re looking for a recipe theme and plugin combination that supports the block editor, these two work seamlessly together. The team also launched <a href="https://demo.creativethemes.com/blocksy/homi/">Homi</a>, a block-based WooCommerce starter site built with Stackable.</p>



<p>The starter themes can be imported with one click and users get exactly what they see in the demo without having to figure out how to arrange it. An onboarding wizard guides the user through setting up a child theme and installing any necessary plugins. It imports all the posts, pages, comments, navigation menus, custom fields, terms and custom posts that are seen in the demos.</p>



<div><img /></div>



<p>Radu said the team plans to release 3-4 more starter sites in the near future, targeting different niches, including blogger, agency, lawyers, wedding, and music/bands.</p>



<p>Blocksy&rsquo;s developers are currently working on adding some new WooCommerce features in the next update, along with a portfolio extension. They are also working on a plan to make it easier to create starter sites.</p>



<p>&ldquo;It&rsquo;s very hard at the moment to create our starter sites,&rdquo; Radu said. &ldquo;Almost all Gutenberg plugins out there lack design options or other things that we may need in order to create a nice starter site. So we were feeling very limited and thought why not create our own suite of blocks that are going to meet all our needs?&rdquo;</p>



<p>Blocksy currently uses <a href="https://wordpress.org/plugins/stackable-ultimate-gutenberg-blocks/">Stackable blocks</a> to create the demo sites. Radu said that although his team may eventually transition to using their own suite of blocks exclusively, they may also continue making starter sites with Stackable since their users like that particular block library so much. The team plans to begin building their own suite of Gutenberg blocks after the next update, beginning with a free version, followed by a pro version with some more advanced blocks.</p>



<p><a href="https://twitter.com/sergiuradoo"></a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 19 May 2021 04:24:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:132:"WPTavern: ProfilePress Rebrands and Repurposes WP User Avatar, Now a Membership Plugin, Users Revolt via the WordPress Review System";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116746";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:305:"https://wptavern.com/profilepress-rebrands-and-repurposes-wp-user-avatar-now-a-membership-plugin-users-revolt-via-the-wordpress-review-system?utm_source=rss&utm_medium=rss&utm_campaign=profilepress-rebrands-and-repurposes-wp-user-avatar-now-a-membership-plugin-users-revolt-via-the-wordpress-review-system";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5971:"<p class="has-drop-cap">Less than two weeks after publishing about the broken user experience of the <a href="https://wptavern.com/dark-mode-plugin-repurposed-and-renamed-to-wp-markdown-editor-change-leaves-users-confused#comments">former Dark Mode plugin</a> being renamed and repurposed, another plugin development company decided to do the same. The consensus seems to be that this is a bad idea. However, the ProfilePress Team forged ahead and repurposed the <a href="https://wordpress.org/plugins/wp-user-avatar/">WP User Avatar plugin</a>.</p>



<p>Instead of a simple, single-purpose custom avatar solution, it is a full-fledged user registration, profile, login, and membership management plugin.</p>



<p>It is now called ProfilePress. But, let&rsquo;s call it ProfilePress Lite because there is a commercial component where you can upgrade to the actual ProfilePress premium plugin. We need to differentiate the two. Plus, the plugin itself uses that term, at least once, in the admin.</p>



<p>The difference between the Dark Mode switcheroo and this one is that WP User Avatar has over 400,000 active installs, and users are voting with their feet. <a href="https://wordpress.org/support/plugin/wp-user-avatar/reviews/">And their ratings.</a> In the past 48 hours, the plugin has received a staggering 60+ one-star reviews &mdash; and counting. The WordPress.org support team has already had to close two <a href="https://wordpress.org/support/topic/why-you-change-this-plugin/">forum</a> <a href="https://wordpress.org/support/topic/outrageous-decision-to-bloat-this-simple-but-great-plugin/">topics</a>. A review titled &ldquo;<a href="https://wordpress.org/support/topic/unexpected-changes-expected-reactions/">Unexpected changes, expected reactions</a>&rdquo; sums up the situation.</p>



<p>Over 400,000 users can do a lot of damage in a little bit of time.</p>



<p>A fraction of a fraction of a fraction of those 400,000 users can knock a respectable 4.4 rating down to 3.6 in two days.</p>



<p>When no one from the company responds to any of the 60+ reviews, it looks like you have something to hide. Those are 60+ opportunities to at least attempt to smooth things over.</p>



<p>Pre-3.0, WP User Avatar was a simple plugin for managing how avatars were handled on the site and allowing custom photo uploads on a per-user basis. In the plugin&rsquo;s eight-year history, users had come to expect a solid plugin that handled one thing and handled it well.</p>



<img />Settings screen for pre-3.0 WP User Avatar



<p>In April 2020, the plugin changed ownership. ProfilePress had taken over from Flipper Code, the project&rsquo;s only contributor since 2014.  Bangbay Siboliban was listed as the plugin owner from 2013-2014. It is unclear if this was an acquisition or a simple transfer. Neither the former nor the current owner has responded to a request for comment at this time.</p>



<p>Under new ownership and its version 2.2.5 &ndash; 2.2.9 plugin upgrades in the past year, everything seemed to be status quo. ProfilePress kept the plugin going, fixing bugs for multiple releases. Until two days ago, users were likely unaware that a tidal wave of change was roaring their way. No announcements on the ProfilePress blog. No sticky topics in the WordPress.org support forum. Just, <em>here&rsquo;s your new membership plugin that you didn&rsquo;t ask for</em>.</p>



<p>Users were greeted with a new settings screen and much more, an admin that was barely recognizable.</p>



<img />ProfilePress (formerly WP User Avatar) settings screen.



<p><a href="https://wordpress.org/support/topic/profilepress-what/">As one user put it</a>, &ldquo;What the heck? Updated plugin and suddenly I have a full membership solution.&rdquo;</p>



<p>&ldquo;You had the plugin WP User Avatar that did one specific function &mdash; added an avatar to users like when they leave comments on the blog,&rdquo; <a href="https://wordpress.org/support/topic/unethical-plugin-change/">wrote another reviewer</a>. &ldquo;Now I go to update it, and BOOM, a 100% completely different plugin takes its place. &ldquo;</p>



<p>ProfilePress, the premium plugin, <a href="https://profilepress.net/introducing-profilepress-wordpress-plugin/">launched in 2015</a>. It is a known product with an existing userbase. I cannot imagine any scenario that makes sense where the company takes a separate plugin that it acquired and implants a lite version of its premium product inside.</p>



<p>Except to capitalize on the 400,000+ active installs for a quick and easy profit.</p>



<p>The knee-jerk reaction is usually to demand the WordPress.org Plugin Review Team implement a rule against it. Some scenarios are less egregious than others. Drawing a subjective line in the sand can be a tough ask of them.</p>



<p>I am coming around to the idea of putting this decision into the hands of users. They are using the review system in the way it was meant to be used. Let them rain down all manner of hell on plugin authors who do this. Let them prop up another plugin with their numbers and hand out glowing five-star reviews for it. <em><a href="https://wordpress.org/plugins/wp-user-avatars/">WP User Avatars</a> (with an &lsquo;s&rsquo;) was a decent alternative the last I tried it.</em></p>



<p>Still, I wonder how much this hurts the plugin with its active install total. The owner might simply weather the storm and capitalize on the users left standing when the dust settles. Even if they lost an unlikely quarter or half of their install count, they are still in a position to profit from premium upgrades. Then, build a new base from users who are unaware of this current debacle.</p>



<p>The more companies that do it without repercussions, the more likely it becomes a trend. But, <s>WP User Avatar&rsquo;s</s>, <s>ProfilePress&rsquo;s</s>, <em>ahem</em>, ProfilePress Lite&rsquo;s users are in open rebellion. Maybe the market will simply decide.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 18 May 2021 23:00:16 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WPTavern: Anariel Design Launches Naledi, a Block-Based WordPress Theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116777";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:185:"https://wptavern.com/anariel-design-launches-naledi-a-block-based-wordpress-theme?utm_source=rss&utm_medium=rss&utm_campaign=anariel-design-launches-naledi-a-block-based-wordpress-theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4562:"<img />Naledi theme homepage.



<p class="has-drop-cap">Over the weekend, Anariel Design co-founder Ana Segota <a href="https://twitter.com/Ana_Segota/status/1393622710845063169">tweeted</a> that she was nearly ready to submit the <a href="https://www.anarieldesign.com/free-full-site-editing-theme-naledi/">company&rsquo;s first block theme</a> into the WordPress directory. There are only <a href="https://wordpress.org/themes/tags/full-site-editing/">five such experimental themes</a> available for download in the repo right now, and I have been patiently awaiting more.</p>



<p>The Naledi theme is in the review queue, but those who want to give it a spin can grab a copy of the <a href="https://themes.trac.wordpress.org/ticket/99469#comment:3">ZIP file from its ticket</a>.  Or, just peruse the <a href="https://www.anarieldesign.com/themedemos/naledi/">theme&rsquo;s demo</a>.</p>



<p>Block, block-based, or FSE themes are built entirely out of blocks, not just the post content. This includes the header, footer, and everything else in between &mdash; literally, everything is a block. Such themes are the future of WordPress and need more user testing.</p>



<p>Like most block themes at the moment, Naledi is not meant for use on a production site. The goal is to build upon the site editor and templating systems in the Gutenberg plugin. The earliest that stable iterations of these FSE sub-components could land in WordPress would be in version 5.9 later this year, but there is no guarantee of that yet.</p>



<p>The WordPress.org Themes Team allows block themes in the directory. However, a team lead must grant permission using the &ldquo;special case&rdquo; system in place. There is still a <a href="https://meta.trac.wordpress.org/ticket/5504">six-month-old ticket</a> awaiting closure before anyone can upload block themes without special access.</p>



<p>On the whole, Naledi is a well-rounded theme given the limitations of block templating right now. It has plenty of personality and is a good representation of how themers should be building on top of the system. There are miles to go, but the Gutenberg development team is driving fast.</p>



<p>One of the most revealing items was how little CSS Naledi needed (roughly 20 kb). It is almost entirely built upon the <code>theme.json</code> style system. Most of the code is merely modifications for custom block styles and adjustments to the core blocks.</p>



<p>The theme currently has nine block styles. Most of the concepts are around adding borders. Eventually, these border-related styles may be unnecessary. Border settings are coming to more and more blocks out of the box. Users will be able to directly make border changes on nearly anything, and theme designers can package their old styles as custom patterns instead.</p>



<p>Of the theme&rsquo;s block styles, my favorite is the framed image. I have been on a bit of a <em>frame</em> kick as of late, so I like seeing what others are doing with the idea.</p>



<img />Frame style on the Image block.



<p>Naledi also bundles eight-block patterns. Most include the Columns block, but others incorporate the Media &amp; Text and Cover blocks, such as a full-width page header.</p>



<p>The Testimonials pattern uses the theme&rsquo;s Overlap style for the Columns block. It shifts the left column to the right and the right column in the opposite direction, creating an overlap.</p>



<img />Testimonials block pattern.



<p>There is a similar pattern named Overlapping Images that uses the same technique.</p>



<img />Overlapping Images block pattern.



<p>What Naledi does that I have not seen with many block themes yet is add several custom page templates. It technically registers only two of them via its <code>theme.json</code> configuration. However, six exist in total, and the Gutenberg plugin automatically picks them all up on a per-page level &mdash; <em>not sure if that is a bug or a feature</em>.</p>



<ul><li>About</li><li>Home</li><li>News</li><li>Sidebar</li><li>Testimonials</li><li>Tours</li></ul>



<p>Because Naledi is a block theme, users can make direct changes to any of the templates, putting their own coat of paint over the default or overhauling them entirely.</p>



<img />Naledi theme in the site editor.



<p>As always, it is a welcome sight to see another block theme headed for the official directory. It is by no means perfect &mdash; working in an imperfect system. However, experiments like Naledi give me more hope that we are heading in the right direction.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 17 May 2021 21:42:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"WPTavern: Register Now for WordSesh: May 24-28, 2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116134";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:145:"https://wptavern.com/register-now-for-wordsesh-may-24-28-2021?utm_source=rss&utm_medium=rss&utm_campaign=register-now-for-wordsesh-may-24-28-2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3940:"<p><a href="https://wordsesh.com/">WordSesh 2021</a>, a free virtual event targeted at WordPress professionals, is less than one week away. Sessions will be broadcast May 24-28, followed by hands-on workshops May 27 &ndash; June 4. The event is hosted by Brian Richards, creator of the WordPress video training website WPSessions. It features an impressive lineup of curated speakers whose presentations will be recorded and published to&nbsp;<a href="https://wpsessions.com/wordsesh/">WPSessions</a>&nbsp;after the live event has ended.</p>



<p>WordSesh&rsquo;s creators pioneered virtual events years ago, when nearly every WordPress conference was still a live, in-person event. Last year WordSesh was broken up into three regional events, but this year it has transitioned back into one global conference that will run at all hours over several time zones. Over the years its production and quality have become more refined. Speakers are compensated for their time and have personal coaching available to them. This year&rsquo;s event will feature a combination of pre-recorded and live content, accompanied by live captioning.</p>



<p>&ldquo;I designed the schedule to still support viewers from all around the world,&rdquo; Richards said. &ldquo;Day 1 (May 24/25) is scheduled for 1-4pm AEST to support the Asia/Pacific region. Day 2 (May 26) runs from 1-4pm CEST for Europe, Middle East, and Africa. Day 3 (May 27) runs from 1-5pm EDT for folks across the Americas.&rdquo;</p>



<p>Richards has sought out experts in each of the topics on the <a href="https://wordsesh.com/#schedule">schedule</a>. The standard sessions will run for 20 minutes, followed by 5-10 minutes of live Q&amp;A. Presenters will be covering block development, headless WordPress, security, accessibility, client services, and other topics of interest to WordPress professionals.</p>



<p>Workshops will begin May 27 and will offer hands-on practice, activities, discussion, and the creation of a finished product. This year&rsquo;s lineup includes six, 3-hour workshops, held over the span of several days:</p>



<ul><li><strong>Let&rsquo;s Hack!</strong> (Stephen Rees-Carter)</li><li><strong>Speed Up Your WordPress Site with These 3 Advanced Techniques</strong><br />(Luke Cavanagh and Mendel Kurland)</li><li><strong>Build your own Block Based Theme</strong> (Daisy Olsen)</li><li><strong>Building Accessible Navigation</strong> (Natalie MacLees)</li><li><strong>My First Headless WordPress Site</strong> (Kellen Mace and Jason Bahl)</li><li><strong>Nail Your Client Onboarding Process</strong> (Jennifer Bourn)</li></ul>



<p>If you have been wanting to learn how to create your own block-based themes or headless WordPress sites, or improve your processes on any of the above topics, these free workshops will be a valuable investment of your time. </p>



<p>One new thing this year is that attendees will be invited to chat via Slack to bring more conversation during and after the live broadcast.</p>



<p>&ldquo;Rather than participating in a single-threaded event chat, which disappears when the broadcast has ended, the Slack channels should allow for more robust conversations,&rdquo; Richards said. &ldquo;We&rsquo;re also going to run the speaker Q&amp;A through chat, rather than on screen, for the same reasons. I believe this will give attendees an opportunity to ask better questions and for speakers to provide more detailed answers&nbsp;&ndash;&nbsp;rather than both groups rushing to ask and answer as quickly as the live Q&amp;A slots allow.&rdquo;</p>



<p>Richards anticipates WordSesh attendance to be 1,500-3,500 people. Attendees will receive a digital swag bag with special discounts from multiple companies in the WordPress space. <a href="https://wordsesh.com/register/">Registration is free</a> and after signing up attendees will get an email reminder with the viewing link one hour before each day of the event.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 17 May 2021 17:59:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:104:"Gutenberg Times: Template Editor, Theme.json and is a Universal theme possible? – Weekend Edition #169";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=17824";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:108:"https://gutenbergtimes.com/template-editor-theme-json-and-is-a-universal-theme-possible-weekend-edition-169/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:14325:"<p>Howdy, </p>





<p>It&#8217;s not entirely Gutenberg related, but I am so happy that deputies at Global Community Team are <a href="https://make.wordpress.org/community/2021/04/26/discussing-the-path-to-in-person-wordcamps/">discussing conditions under which in-person meetings (WordCamp and Meetup) can start up again.</a> Just the fact, that in-person meetings are  talked about after 14 months &#8220;online only&#8221;, is already progress. It&#8217;ll still take months before the first in-person WordCamp organizers will be able to start planning. Your opinion counts, so don&#8217;t hesitate to <a href="https://make.wordpress.org/community/2021/04/26/discussing-the-path-to-in-person-wordcamps/">chime in the comments.</a> </p>



<p>There was a lot of happening this week in the WordPress world.  You probably saw most of it on other WordPress news sites, so I dive in right into all the Gutenberg related updates.  Happy reading. </p>



<p>Yours, 💕<br />Birgit</p>





<h2>Gutenberg and WordPress Pre-release</h2>



<p>It comes down to the wire for developers committing code before the WordPress 5.8 feature freeze coming up on May 25th, 2021. Gutenberg feature freeze is practically on May 19th when the Gutenberg 10.7 RC candidate is released. After those dates,  only bug fixes will make it into the first Beta release, scheduled for June 7, 2021. </p>



<p>To keep all the dates straight I consult the full <a href="https://make.wordpress.org/core/5-8/">WordPress 5.8 Development Cycle</a> page. </p>



<h3>Calls for Testing</h3>



<p><strong><a href="https://profiles.wordpress.org/andraganescu/">Andre Draganescu</a></strong> posted <a href="https://make.wordpress.org/core/2021/05/12/help-test-the-widgets-editor-for-wordpress-5-8/"><strong>Help Test the Widgets Editor for WordPress 5.8</strong></a> with test instructions for three scenarios any user could test</p>



<ul><li>Migrating from classic widgets</li><li>Adding blocks next to widgets</li><li>Opting out of the new widgets screen with the new plugin</li></ul>



<p>He also urges Theme and Plugin developers <a href="https://github.com/WordPress/gutenberg/tree/trunk/docs/how-to-guides/widgets">to read the available documentation</a> and suggests to</p>



<ul><li>Test upgrading classic widgets to blocks.</li><li>Test enabling and disabling theme support</li><li>Test 3rd party widgets compatibility.</li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://profiles.wordpress.org/annezazu/">Anne McCarthy</a></strong>  in her post<a href="https://make.wordpress.org/test/2021/05/12/fse-program-testing-call-6-stick-the-landing-pages/"><strong> &#8220;Stick the Landing (pages)&#8221;</strong></a> ( 😁 nice pun!)* composed a real-life scenario for the various tests of the template editor and use it for landing pages. This goes to the heart of the new feature slated to be introduced to WordPress users with WordPress 5.8. </p>



<p>The instructions come with a very nice demo of the template editor in a <em>silent movie</em>. Just follow the mouse pointer. </p>



<div class="wp-block-embed__wrapper">
<div class="toolbelt-video-wrapper"></div>
</div>



<p class="has-small-font-size">(* I had to look it up: Stick the landing &#8211; is an expression that comes from gymnastic or other athletic routine when the athlete <em>lands firmly and confidently on their feet. </em>Or an aviator executes a <em>flawless landing</em>. &#8211; all part of the service&#8230; )</p>



<h2>Gutenberg 10.6</h2>



<p>Gutenberg 10.6 was released and comes with a ton of create features! For the first time, volunteer contributor, <strong><a href="https://twitter.com/vdwijngaert">Koen Van den Wijngaert</a></strong> led this plugin release and published <a href="https://make.wordpress.org/core/2021/05/14/whats-new-in-gutenberg-10-6-12-may/"><strong>What’s new in Gutenberg 10.6?</strong></a>  It was one of the bigger releases with 216 commits.</p>



<ul><li><strong>Duotone filters</strong> made it into this release now. Very cool highlight/shadow colors are already available. Theme developers can provide extend with theme specific colors. </li><li><strong>Padding</strong> is here! You might not need those spacer block anymore or at least not so often. </li><li><strong>Most used tags selector</strong> &#8211; many bloggers missed it for the last few years. It&#8217;s now also available in the block editor.</li><li><strong>Tables</strong> can now have colored borders. </li><li><strong>More blocks</strong> for Themes and modify Post list displays (Query blocks)</li><li><strong>Theme.json</strong>  is out of experimental and the <a href="https://github.com/WordPress/gutenberg/blob/trunk/docs/how-to-guides/themes/theme-json.md">documentation was updated</a> just a couple of days ago. </li><li><strong>Template Editor</strong> screen to create custom templates for landing pages. </li><li><strong>Block Editor Settings </strong>are now available via an endpoint of the REST API. This opens quite a few additional opportunities for plugins and themes to adjust features and controls. </li></ul>



<p>I have had a fascination with the Query block ever since it started as a Latest Post block. In this version, the team added Block Patterns to the place holder, so you don&#8217;t have to start from scratch assembling. </p>



<p><strong>Justin Tadlock</strong> tested a few new features and shares his findings in <strong><a href="https://wptavern.com/gutenberg-10-6-adds-duotone-filters-query-pattern-carousel-and-most-used-tags-selector#comments">Gutenberg 10.6 Adds Duotone Filters, Query Pattern Carousel, and Most-Used Tags Selector</a>.</strong></p>



<hr class="wp-block-separator is-style-wide" />




<p><strong><a href="https://gutenbergtimes.com/need-a-zip-from-master/">Need a plugin .zip from Gutenberg&#8217;s main (trunk) branch?</a></strong><br />Gutenberg Times provides daily build for testing and review. <br />Have you been using it? Hit reply and let me know.</p>



<p><img alt="GitHub all releases" src="https://img.shields.io/github/downloads/bph/gutenberg/total?style=for-the-badge" /></p>




<p>The <strong>Gutenberg Changelog episode #44</strong> will be published later this weekend. <strong>Grzegorz (&#8220;Greg&#8221;) Ziolkowski</strong> and I had a great time diving into the details of this release, answered some General Gutenberg questions and also talked about what&#8217;s in the works even beyond 5.8. </p>



<p><strong>Subscribe to the Gutenberg Changelog via your favorite podcast apps! </strong><br />🎙️ <a href="https://open.spotify.com/show/620NwVKQJGdTupy36zYxvg?mc_cid=4b6c9f88fe">Spotify</a> | <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9ndXRlbmJlcmd0aW1lcy5jb20vZmVlZC9wb2RjYXN0">Google</a> | <a href="https://podcasts.apple.com/us/podcast/gutenberg-changelog/id1469294475">iTunes</a> | <a href="https://pca.st/podcast/f8445ec0-7508-0137-f267-1d245fc5f9cf">PocketCasts</a> | <a href="https://www.stitcher.com/show/gutenberg-changelog">Stitcher</a> | <br />🎙️ <a href="https://www.podbean.com/podcast-detail/chi7j-9904a/Gutenberg-Changelog-Podcast">Pod Bean</a> | <a href="https://castbox.fm/channel/Gutenberg-Changelog-id2173375">CastBox</a> | <a href="https://www.podchaser.com/podcasts/gutenberg-changelog-878239/">Podchaser</a> | <a href="https://gutenbergtimes.com/feed/podcast">RSS Feed</a> </p>



<h2>Full Site Editing and Themes</h2>



<p><a href="https://twitter.com/kjellr"><strong>Kjell Reigstad</strong> </a>is back with the <a href="https://make.wordpress.org/themes/2021/05/14/gutenberg-themes-week-of-may-10-2021/"><strong>Gutenberg + Themes: Round up post</strong></a> from the Themes team.  Learn quickly what was released and fixed, what is pending as PR or still in discussion that could use your input. The list of overview issues is a great way to catch up on the latest development.</p>



<hr class="wp-block-separator is-style-wide" />



<p><strong><a href="https://twitter.com/jffng">Jeff Ong</a></strong> invited contributors and other theme developers to a <strong><a href="https://make.wordpress.org/themes/2021/05/10/friday-may-14th-at-14utc/">Upcoming “Universal Themes” Hallway Hangout</a></strong>, a theme that works as a classic theme as well as a block-based theme. The post has links to recording, the sticky boards as well as the Zoom chat transcripts. I have yet to watch the gathering of Theme wizards and their thoughts on how they might want to deal with the upcoming changes. The recording is <a href="https://www.youtube.com/watch?v=ymZZv3GjGPE">available on YouTube </a></p>



<a href="https://www.youtube.com/watch?v=ymZZv3GjGPE"><img /></a><a href="https://www.youtube.com/watch?v=ymZZv3GjGPE">Hallway Hangout &#8211; Universal Theme</a>



<p>The Second Call for Questions on Full Site Editing and their answers has ended, and <strong>Anne McCarthy</strong> published <a href="https://make.wordpress.org/test/2021/05/13/fse-program-answers-from-round-two-of-questions/"><strong>Answers from Round Two of Questions</strong></a>. Almost all answers have also reference to the GitHub discussion around a specific topic. The answer covering the differences and different use cases for the three entities that might cause confusion (#5): Reusable Block, Block Pattern and now Template.  Anne answer it comprehensible, has a real life example and a great set of links to dive deeper into the topic. </p>



<h2 id="wpevents">Upcoming WordPress Events</h2>



<p><strong>May 19th, 2021</strong><br /><strong><a href="https://www.meetup.com/Portsmouth-WordPress-Meetup/events/277849223/">Portsmouth WordPress Meetup</a></strong><br /><strong>Full-site Editing </strong>with <strong>Herb Miller</strong> core contributor and his block-based theme </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong>&nbsp;May 22-23, 2021</strong><br /><strong><a href="https://neo.wordcamp.org/2021/">WordCamp Northeast Ohio Region</a></strong><br />Two sessions and a Lighting talk about Gutenberg are on the <a href="https://neo.wordcamp.org/2021/schedule/">schedule </a></p>



<ul class="has-small-font-size"><li><strong>Anatomy of a Block Theme for Full Site Editing </strong>w/ Daisy Olson </li><li><strong>Web Components in WP, Gutenberg and as HTML plugins</strong> w/ Craig West </li><li><strong>Lightning Talk: The power of reusable blocks w/ Daisy Olson</strong> </li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>May 24-28, 2021</strong><br /><strong><a href="https://wordsesh.com/?uid=6471">WordSesh 2021</a></strong><br />The <a href="https://wordsesh.com/#schedule">session schedule</a> is now available, too. Here is the list of Gutenberg talks: </p>



<ul class="has-small-font-size"><li><strong>Blazing Fast Block Development</strong> w/ Lee Shadle </li><li><strong>Building Custom Block</strong>s w/ Rob Stinson</li><li><strong>Block-Based Themes</strong> – <strong>The Future Of Full Site Editing In WordPress</strong> w/ Imran Sayed</li><li><strong>How the Block Editor Makes It Easier to Build Custom Websites</strong> w/ Danielle Zarcaro </li><li><strong>Build your own Block-Based Theme</strong> w/ Daisy Olsen (Workshop)</li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>June 7 &#8211; 9th, 2021</strong><br /><strong><a href="https://europe.wordcamp.org/2021/">WordCamp Europe</a></strong><br />A virtual event and contributor day. <a href="https://europe.wordcamp.org/2021/call-for-sponsors/">Call for sponsors is open.</a></p>



<p><strong>🎉</strong>  Gutenberg Times is a media partner of WordCamp Europe 2021 </p>



<p><strong>June 20 &#8211; 26</strong><br /><strong><a href="https://japan.wordcamp.org/2021/">WordCamp Japan</a></strong><br /><em>The schedule has been posted. Most sessions will be in Japanese, with exceptions, I think&#8230; </em></p>



<p><strong>July 17 + 18th, 2021</strong><br /><strong><a href="https://santaclarita.wordcamp.org/2021/">WordCamp Santa Clarita</a></strong><br />Calls for speakers (May 30th), sponsors, volunteers and organizers are open. </p>



<p><strong>June 24 &#8211; 26, 2021</strong><br /><strong><a href="https://cochabamba.wordcamp.org/2021/">WordCamp Cochabama</a></strong> (Colombia) </p>



<p><strong>July 23, 2021</strong><br /><a href="https://www.wordfest.live/"><strong>WordFest Live </strong></a>&#8211; <em>The&nbsp;</em>festival of WordPress<br />Call for Speakers is now open and submissions are due on May 24th, 2021</p>



<p><strong>September 21 + 22, 2021</strong><br /><a href="https://2021.wpcampus.org/"><strong>WPCampus 2021 Online</strong></a><br />&#8220;A free online conference for web accessibility and WordPress in higher education.&#8221; <a href="https://2021.wpcampus.org/proposals">Call for Proposal is up</a> and proposal are due May 26, 2021</p>



<hr class="wp-block-separator is-style-wide" />



<p>On the<a href="https://wpcalendar.io/online/"> <strong>Calendar for WordPress Online Events</strong> </a>you can browse a list of the upcoming WordPress Meetups, around the world, including WooCommerce, Elementor, Divi Builder and Beaver Builder meetups. </p>




<hr class="wp-block-separator is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>



<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too and won&#8217;t give your email address to anyone except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>



<hr class="wp-block-separator is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 15 May 2021 18:21:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:89:"WPTavern: FSE Outreach Round #6: Building a WordCamp Landing Page via the Template Editor";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116612";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:219:"https://wptavern.com/fse-outreach-round-6-building-a-wordcamp-landing-page-via-the-template-editor?utm_source=rss&utm_medium=rss&utm_campaign=fse-outreach-round-6-building-a-wordcamp-landing-page-via-the-template-editor";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5227:"<p class="has-drop-cap">As has almost become ritual at this point, I am always looking forward to the next testing round for Full Site Editing (FSE). Spearheaded by core contributor Anne McCarthy, the FSE Outreach Program&rsquo;s fortnightly user tests are usually fun and offer everyone a chance to get involved, regardless of their experience level.</p>



<p>This <a href="https://make.wordpress.org/test/2021/05/12/fse-program-testing-call-6-stick-the-landing-pages/">latest testing round</a> is all about whether users can create a custom template on a per-post basis directly from the editor. The answer? <em>Why, yes, they absolutely can.</em></p>



<p>Round #6 asks for volunteers to use the new template-editing mode, which is expected to land in WordPress 5.8, to build a WordCamp landing page. The goal is to offer a discount code and attract attendees from another event to join.</p>



<p>Anyone interested in discovering issues and providing feedback should give this testing round a shot. There is a 36-step guide that will walk you through building a custom landing page. It should take no more than 15 minutes, maybe more if you are putting a unique spin on the design &mdash; <em>that is half the fun for me</em>.</p>



<p>Feedback is open through May 26. Just follow the instructions and leave a comment on the post.</p>



<p>The closest thing to a local WordCamp I have is <a href="https://birmingham.wordcamp.org/">Birmingham, AL</a>, known for its &ldquo;WP Y&rsquo;all&rdquo; name. I am hopeful that the WC Birmingham team would not mind me borrowing their logo for this experiment. The following is the WordCamp landing page I built with the TT1 Blocks theme:</p>



<img />



<p>Other than the known <a href="https://github.com/WordPress/gutenberg/issues/31562">Nav Menu block issue</a> noted in the post, I ran into no technical problems with any of the 36 steps. Everything worked as expected. However, that does not mean that everything was perfect.</p>



<h2>Problems, Mostly Trivial</h2>



<p class="has-drop-cap">Before diving into the actual user-experience issues with building templates, I noticed a problem with the custom template system. After finishing the testing round, I wanted to see what my template looked like with other themes. However, I could not do this. Upon activating another theme, my custom template seemed to disappear.</p>



<p>The problem is that custom templates are tied to the theme. I see the logic in this. Certain aspects could be specific to the active theme (colors, fonts, etc.), and it is always how custom templates have worked. However, the block template system is different. From a user viewpoint, I feel like my custom-created templates belong to me rather than the theme.</p>



<p>I can see a user switching themes after a couple of years and building a dozen or so templates having a poor experience in this situation. If the feature remains the same, there should be more clarity.</p>



<p>One of the more frustrating aspects of the template editor is the lack of space at the bottom of the frame. I am accustomed to the post editor&rsquo;s extra whitespace, focusing the active workspace toward the top of the screen.</p>



<img />Limited space at the bottom of template editor.



<p>I just want to put the current piece of the layout I am working on higher up the page. I am not sure how this would look when dealing with a template editor because it needs to clearly mark the end of the document.</p>



<p>The other issues were primarily around the TT1 Blocks theme or missing features with the current Gutenberg plugin.</p>



<p>When adding a horizontal Buttons block, there is no space between individual buttons. Vertical alignment is better, but it could use a slight bump (on the front end, not in the editor).</p>



<img />Buttons a little too close.



<p><em>And, I feel like I cannot be the first to say this: I am ready for Button block padding controls so that I can adjust TT1 Blocks&rsquo; abnormally large button output.</em></p>



<p>When inserting a full-width Columns block, the text on the left butted against the side of the page. Because neither the Columns nor the inner Column blocks currently have padding controls, the only way for users to &ldquo;fix&rdquo; this is to add a background color. Gutenberg automatically adds padding in that case.</p>



<img />No horizontal spacing.



<p>The last trivial fix I had to make was adding a Spacer block above the custom footer section. This was not included in the testing instructions. Without it, the footer had no spacing between it and the content above it.</p>



<p>I did question one aspect of the testing instructions. Templates are generally a sort of wrapper or design layout. Content is a separate thing that typically lives independently. In this test, the content is housed within the template. There are scenarios where the test case makes sense. However, I would have preferred a flow where the content portion of the template was a part of the post and output via the Post Content block.</p>



<p>That sort of moving back and forth between post and template editors may have opened up some more usability hangups that would be worth exploring.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 May 2021 23:56:28 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:107:"WPTavern: WordPress Community Team Discusses Adding Vaccination Status to In-Person Meetup Safety Checklist";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116521";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:259:"https://wptavern.com/wordpress-community-team-discusses-adding-vaccination-status-to-in-person-meetup-safety-checklist?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-community-team-discusses-adding-vaccination-status-to-in-person-meetup-safety-checklist";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4613:"<p>The WordPress community is eager to return to in-person events and organizers are discussing a path to ensure the safety of resuming meetups as a first step before considering WordCamps. Previous discussions led to the creation of a <a href="https://make.wordpress.org/community/handbook/meetup-organizer/2021-returning-to-in-person-meetups/in-person-meetup-decision-checklist/">checklist</a> to assist local organizers in determining if their chapter is eligible to proceed. Noticeably absent from the checklist at the time was the requirement for widely distributed vaccines before resuming local events. </p>



<p>This week, Andrea Middleton proposed <a href="https://make.wordpress.org/community/2021/05/12/proposal-adding-vaccination-status-to-the-in-person-meetup-safety-checklist/">adding vaccination status to the in-person meetup safety checklist</a>.</p>



<p>&ldquo;When we created that checklist, COVID-19 vaccine rollout was still in very early stages, and the checklist did not account for vaccines,&rdquo; Middleton said. &ldquo;Vaccination efforts are&nbsp;still&nbsp;being rolled out across the world and many people do not have access to vaccines yet, but progress has reached a point where it seems wise to start incorporating it into the checklist, where possible.&rdquo;</p>



<p>The proposal would allow places that don&rsquo;t currently pass the checklist to hold WordPress meetups for vaccinated attendees if vaccines are freely available in the area and local authorities are permitting gatherings.</p>



<p>Local organizers would also be encouraged to continue holding online events or finding ways to livestream in-person meetups so that those who are not yet comfortable attending will still have access.</p>



<p>&ldquo;It isn&rsquo;t practical (and, in some places, legal) to ask organizers to check the vaccination status of individuals,&rdquo; Middleton said. &ldquo;Therefore,&nbsp;I suggest we ask groups to use the honor system, trusting that people will only attend these events if they have been vaccinated.&rdquo;</p>



<p>If meetup organizers move forward with the honor system, attendees will have to embrace some risk should people who are not fully vaccinated wish to break the meetup guidelines.</p>



<p>WordPress community leadership has the challenging task of navigating this new territory with changing conditions all over the globe. The changing laws and recommendations in different areas make it nearly impossible to create a policy that will work across the board. This week, the US passed a major milestone when the Centers for Disease Control and Prevention&nbsp;(CDC) updated its <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/fully-vaccinated-guidance.html">interim public health recommendations for fully vaccinated people</a>, allowing them to discontinue mask wearing and physical distancing in most cases. However, governors in some states said that indoor mask mandates would remain in place while state health officials review the new recommendations. </p>



<p>In the comments of the proposal, Mika Epstein asked if there will be repercussion if someone violates the honor code &ndash; otherwise &ldquo;what&rsquo;s the point in having a that proposal in the first place?&rdquo; A policy that isn&rsquo;t enforceable becomes more of an encouragement than a requirement.</p>



<p>WordPress meetup organizers, just like retailers, restaurants, and other businesses, will have no way of knowing who is vaccinated and who is not. The CDC reports that only 36.2% of the US population is fully vaccinated. The share of people who have had at least one does of the COVID-19 vaccine varies greatly from one country to the next. </p>



<div class="wp-block-image"><img />Source: <a href="https://ourworldindata.org/covid-vaccinations">Our World in Data</a></div>



<p>While some countries are logging very low numbers for daily cases, despite having only small percentages of the population vaccinated, they pay the price with intermittent lockdowns, travel bans, and strict quarantine measures. In-person WordPress meetups may not be possible in these locations <a href="https://finance.yahoo.com/news/covid-zero-havens-reopening-harder-210000541.html">where vaccines are not widely available</a>, despite the local chapter being able to meet most of the requirements on the checklist.</p>



<p>The <a href="https://make.wordpress.org/community/2021/05/12/proposal-adding-vaccination-status-to-the-in-person-meetup-safety-checklist/">discussion</a> is open until May 27, when Middleton plans to close comments on the proposal.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 May 2021 21:10:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:98:"WPTavern: Gutenberg 10.6 Adds Duotone Filters, Query Pattern Carousel, and Most-Used Tags Selector";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116523";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:237:"https://wptavern.com/gutenberg-10-6-adds-duotone-filters-query-pattern-carousel-and-most-used-tags-selector?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-10-6-adds-duotone-filters-query-pattern-carousel-and-most-used-tags-selector";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6283:"<p class="has-drop-cap">The Gutenberg development team has taken massive strides in the latest release. Version 10.6 of the plugin introduces several user-facing features and changes that upgrade the block-editing experience. The new duotone filter for images is just downright fun to play with. The UIs for the Query pattern selector and template-editing mode have been overhauled. Plus, the most-used tags feature from the pre-block era is making a return.</p>



<p>There is a ton of ground to cover for this release and never enough time. The development team is racing toward a <a href="https://wptavern.com/full-site-editing-is-partly-a-go-for-wordpress-5-8">WordPress 5.8 deadline</a> that includes stabilizing theme-related blocks, <code>theme.json</code> integration, per-post templates, block-based widgets, and new block design controls.</p>



<p>Much of the work on those features is still underway. However, some of them are starting to take shape, and it could make the upcoming WordPress 5.8 release in July an exciting one as they are integrated.</p>



<h2>Duotone Image Filters</h2>



<ul><li class="blocks-gallery-item"><img />No Duotone Filter</li><li class="blocks-gallery-item"><img />Dark Grayscale</li><li class="blocks-gallery-item"><img />Green and Red</li><li class="blocks-gallery-item"><img />Blue and Orange</li></ul>



<p class="has-drop-cap">The new <a href="https://github.com/WordPress/gutenberg/pull/26752">duotone filter tool</a> is one of my favorite features to land in Gutenberg. If I am being honest, I have probably put in about two hours of tinkering with it in the past day. Some of that was building out custom duotone color palettes for a theme I have been building, but most of it was just playing around for fun.</p>



<p>The feature works for both the Image and Cover blocks. However, it does not work for Covers with the &ldquo;Fixed Background&rdquo; setting enabled. There is currently an open <a href="https://github.com/WordPress/gutenberg/issues/31662">ticket to disable duotone</a> in this scenario.</p>



<p>What makes duotone such an exciting feature is that drops a powerful color filtering tool into the hands of users. It allows them to change the mood of a story with a couple of clicks.</p>



<h2>Query Block Improvements</h2>



<img />Query pattern carousel.



<p class="has-drop-cap">The new <a href="https://github.com/WordPress/gutenberg/pull/29602">carousel that launches</a> when first inserting a Query block is a much-needed improvement. It allows end-users to scroll through the various patterns. This view gives a more complete picture of what the output will actually look like before inserting it.</p>



<p>For users who prefer the grid-style view, there is a button to switch over to it. It has improved over the previous grid, providing a larger preview of each pattern.</p>



<p>On the theme side of things, developers can now choose between <code>&lt;div&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;aside&gt;</code> elements for the <a href="https://github.com/WordPress/gutenberg/pull/31421">Query block wrapper</a>. This lets theme authors choose a more semantically correct tag when needed. Users have access to this via the &ldquo;Advanced&rdquo; tab.</p>



<h2>Return of the Most-Used Tags Selector</h2>



<img />Most-used tags selector.



<p class="has-drop-cap">After three years, the Gutenberg project has finally addressed its missing <a href="https://github.com/WordPress/gutenberg/pull/30598">most-used tags feature</a>. For new WordPress users since the 5.0 launch or those of you who may have forgotten, the Tags list in WordPress 4.9 and earlier allowed end-users to select from a list of the site&rsquo;s most used tags when editing a post.</p>



<p>The feature was dismissed for having no &ldquo;evidence right now of the user case&rdquo; before the Gutenberg 1.0 launch, and the <a href="https://github.com/WordPress/gutenberg/issues/1341">ticket asking for it</a> was closed. In 2018, a year later, a <a href="https://github.com/WordPress/gutenberg/issues/8867">new ticket popped up</a>. Without boring everyone with the technical details and almost three years of discussion, the community can now rejoice in its return.</p>



<p>The Tags sidebar panel tab now lists the 10 most-used tags for the site. It should be a lot quicker to select them than typing each out. This is one of the few classic-editing features that I have longed for. I am happy to see it make a comeback, even after all this time.</p>



<h2>Darker Background for the Template Editor</h2>



<img />Template-editing mode.



<p class="has-drop-cap">Template-editing mode now <a href="https://github.com/WordPress/gutenberg/pull/31044">has a darker background</a>, which makes the user experience far better. The feature is slated for a WordPress 5.8 release, which will allow users to create custom templates on the fly from the post-editing screen.</p>



<p>Since I last did a <a href="https://wptavern.com/help-steer-the-future-of-wordpress-via-the-fse-outreach-program">deep dive into this mode</a>, it has jumped leaps and bounds. The darker background behind the framed template editor indicates that the user has left the post editor and entered into a new experience. In the past, it was tough to tell which mode one was in.</p>



<h2>Border Settings for Tables</h2>



<img />



<p class="has-drop-cap">It is easy for me to forget which blocks support specific features. I have a mini plugin that I use to enable pretty much everything &mdash; <em>I get tired of waiting for things to land sometimes.</em></p>



<p>For everyone else, you can now enjoy <a href="https://github.com/WordPress/gutenberg/pull/31265">border settings</a> for the Table block. Borders controls are not widespread just yet. However, for those who have yet to use them, they are relatively basic. The feature adds a new block options tab for selecting a border style (none, solid, dashed, and dotted), width, and color.</p>



<p>Currently, there is no way to control individual sides. Border settings are applied to the top, right, bottom, and left sides equally. I am not one to complain too much, at least not all of the time, so this is a welcome addition to tables.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 May 2021 00:33:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:111:"WPTavern: Accessibility Advocates Sign Open Letter Urging People Not To Use AccesiBe and Other Overlay Products";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116454";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:267:"https://wptavern.com/accessibility-advocates-sign-open-letter-urging-people-not-to-use-accesibe-and-other-overlay-products?utm_source=rss&utm_medium=rss&utm_campaign=accessibility-advocates-sign-open-letter-urging-people-not-to-use-accesibe-and-other-overlay-products";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5569:"<p>AccessiBe and other similar tools are coming under fire after more than 400 accessibility advocates and developers signed an <a href="https://overlayfactsheet.com/">open letter</a> calling on the industry to unite against the use of accessibility overlay products. These overlay &ldquo;widgets&rdquo; are technologies that apply third-party code to the front end in an attempt to automate repairs after sites launch without having accessibility baked in from the design phase.</p>



<p>A major part of the complaint is that these products are often marketed as quick-fix solutions that will make a website ADA compliant and immune from legal action. For example, the <a href="https://accessibe.com/">accessiBe</a> website advertises the product as: &ldquo;<em>The #1 Automated Web Accessibility Solution for ADA &amp; WCAG Compliance&hellip;A single line of code for 24/7 automated compliance.</em>&rdquo; Similarly, <a href="https://www.equalweb.com/">EqualWeb</a> advertises making sites accessible by inserting &ldquo;<em>one line of code</em>&rdquo; to gain &ldquo;compliance with WCAG 2.1, ADA, Section 508, AODA, EN 301549 and IS 5568.&rdquo;</p>



<p>Sponsors and signatories have published a four-part statement condemning the use of these products as anything more than a temporary solution:</p>



<ol><li><em>We will never advocate, recommend, or integrate an overlay which deceptively markets itself as providing automated compliance with laws or standards.</em></li><li><em>We will always advocate for the remediation of accessibility issues at the source of the original error.</em></li><li><em>We will refuse to stay silent when overlay vendors use deception to market their products.</em></li><li><em>More specifically, we hereby advocate for the removal of accessiBe, AudioEye, UserWay, User1st, MK-Sense, MaxAccess, FACIL&rsquo;iti, and all similar products and encourage the site owners who&rsquo;ve implemented these products to use more robust, independent, and permanent strategies to making their sites more accessible.</em></li></ol>



<p>Accessibility practitioners are urging developers and site owners to abandon any overlay solutions they put in place, in favor of those that address inaccessibility at the root of the problem.</p>



<p>The document lists numerous first-hand accounts of people with disabilities struggling to use websites that have implemented overlays. Although the letter includes various products like Userway, EqualWeb, AudioEye, User1st, MaxAccess, FACIL&rsquo;iti, and Purple Lens, nearly every struggling person cited accessiBe as the problem. </p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">I finally managed to gain access to my <a href="https://twitter.com/Namecheap?ref_src=twsrc%5Etfw">@NameCheap</a> account by blocking <a href="https://twitter.com/hashtag/AccessiBe?src=hash&ref_src=twsrc%5Etfw">#AccessiBe</a> in my Windows Hosts file. I should not need to do this to use the Internet. AccessiBe needs to AccessiBeGone</p>&mdash; Richie (@WilfSplodNokit) <a href="https://twitter.com/WilfSplodNokit/status/1365478393895153664?ref_src=twsrc%5Etfw">February 27, 2021</a></blockquote>
</div>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">When <a href="https://twitter.com/hashtag/AccessiBe?src=hash&ref_src=twsrc%5Etfw">#AccessiBe</a> is enabled, the page is flooded with headings. Lots of heading level 2's. The title of each phone remains a heading in both versions of the page, but with it enabled, things like cost, display, and all the other components of the tables become headings as well.</p>&mdash; Holly Scott-Gardner (@CatchTheseWords) <a href="https://twitter.com/CatchTheseWords/status/1364915942157922308?ref_src=twsrc%5Etfw">February 25, 2021</a></blockquote>
</div>



<p>AccessiBe is one of the more widely known overlay products after the company <a href="https://techcrunch.com/2021/02/10/accessibility-overlay-startup-accessibe-closes-28m-series-a/?guccounter=1&guce_referrer=aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8&guce_referrer_sig=AQAAAI3aBA2flv0pwtdC8ROV6h2CMYU8Ntc9yjCSDKezmZ76_uBbU9Ed2zh4MiTZGzWZAygiGx-nb92T7hxm9zFaq7fjld66gAl44u0a42xVqTc8dvULqSnkjNMdYXUIKY68LqGfZPpwBTkWhuq0dRCiOqlPnBKLqPEZjpzW1uCBxPHm">raised $28 million</a> earlier this year. It is also the subject of a cogent exposition on the <a href="https://adrianroselli.com/2020/06/accessibe-will-get-you-sued.html">dangers of using overlay products and expecting not to get sued</a>, an article cited in the document. More recently, accessiBe gained notoriety in the WordPress world after <a href="https://wptavern.com/wordpress-org-removes-fake-reviews-for-acessibe-plugin">WordPress.org removed a collection of fake reviews</a> from the plugin&rsquo;s page. The plugin is currently installed on approximately 4,000 websites. Competitors UserWay and EqualWeb have 40,000 and 1,000 active installs of their WordPress plugins but don&rsquo;t seem to be as well known when compared to accessiBe&rsquo;s aggressive marketing.</p>



<p>The creators of the document began adding signatures in March 2021. Several prominent WordPress accessibility contributors and experts are signatories on the document, including Joe Dolson, Rian Rietveld, Amanda Rush, Luc Poupard, and Gary Jones. Check out the full <a href="https://overlayfactsheet.com/">document</a> for a more in-depth history of web accessibility overlays and why experts believe they are negatively impacting user experience on websites that implement them.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 13 May 2021 20:51:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"WordPress.org blog: WordPress 5.7.2 Security Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10334";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://wordpress.org/news/2021/05/wordpress-5-7-2-security-release/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2089:"<p>WordPress 5.7.2 is now available.</p>



<p>This security release features one security fix. Because this is a security release, it is recommended that you update your sites immediately. All versions since WordPress 3.7 have also been updated.</p>



<p>WordPress 5.7.2 is a short-cycle security release. The next major release will be version 5.8.</p>



<p>You can update to WordPress 5.7.2 by downloading from WordPress.org, or visit your Dashboard → Updates and click Update Now.</p>



<p>If you have sites that support automatic background updates, they’ve already started the update process.</p>



<h3>Security Updates</h3>



<p>One security issue affecting WordPress versions between 3.7 and 5.7. If you haven’t yet updated to 5.7, all WordPress versions since 3.7 have also been updated to fix the following security issue:</p>



<ul><li>Object injection in PHPMailer, <a href="https://nvd.nist.gov/vuln/detail/CVE-2020-36326">CVE-2020-36326</a> and <a href="https://nvd.nist.gov/vuln/detail/CVE-2018-19296">CVE-2018-19296</a>.</li></ul>



<p>Thank you to the members of the WordPress security team for implementing these fixes in WordPress.</p>



<p>For more information refer to <a href="https://wordpress.org/support/wordpress-version/version-5-7-2/">the version 5.7.2 HelpHub documentation</a> page.</p>



<h3>Thanks and props!</h3>



<p>The 5.7.2 release was led by <a href="https://profiles.wordpress.org/peterwilsoncc/">@peterwilsoncc</a> and <a href="https://profiles.wordpress.org/audrasjb/">@audrasjb</a>.</p>



<p>Thank you to everyone who helped make WordPress 5.7.2 happen: <a href="https://profiles.wordpress.org/audrasjb">@audrasjb</a>, <a href="https://profiles.wordpress.org/ayeshrajans">@ayeshrajans</a>, <a href="https://profiles.wordpress.org/desrosj">@desrosj</a>, <a href="https://profiles.wordpress.org/dd32">@dd32</a>, <a href="https://profiles.wordpress.org/peterwilsoncc">@peterwilsoncc</a>, <a href="https://profiles.wordpress.org/SergeyBiryukov">@SergeyBiryukov</a>, and <a href="https://profiles.wordpress.org/xknown">@xknown</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 13 May 2021 01:04:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Peter Wilson";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"WPTavern: Genesis Framework To Become Free, StudioPress Announces Changes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116458";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/genesis-framework-to-become-free-studiopress-announces-changes?utm_source=rss&utm_medium=rss&utm_campaign=genesis-framework-to-become-free-studiopress-announces-changes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4650:"<p class="has-drop-cap">Yesterday, StudioPress <a href="https://studiopress.blog/studiopress-big-changes/">announced several changes</a> to its themes and marketplace coming on or around June 8. For those outside its community, the company will be making its Genesis Framework available for free. The company is overhauling its marketplace, no longer selling individual themes.</p>



<p>StudioPress&rsquo;s selection of themes will soon be available only through a Genesis Pro, WP Engine hosting, or Flywheel hosting account. The company&rsquo;s ProPlus customers will gain access to the Genesis Blocks Pro and Genesis Custom Blocks Pro plugins.</p>



<p>The theme shop has been shifting gears since its <a href="https://wptavern.com/wp-engine-acquires-studiopress">acquisition in 2018</a> by WP Engine. While it still caters to freelancers and agencies, its audience has grown to include a more diverse user base. One year ago, WP Engine launched a <a href="https://wptavern.com/wp-engine-launches-genesis-pro-add-on-for-customers-more-features-in-the-works">Genesis Pro Add-On</a>, offering a suite of StudioPress&rsquo;s Genesis products to its customers.</p>



<p>Chris Garret, the StudioPress Marketing Director at WP Engine, wrote in the article that one of the reasons for these changes was aimed at &ldquo;focusing our product and engineering efforts on preparing the Genesis community for Full Site Editing with the Gutenberg block editor in WordPress Core.&rdquo;</p>



<p>Last fall, StudioPress launched an open beta of its upcoming <a href="https://wptavern.com/genesis-block-theme-beta-studiopress-pursuing-a-block-first-future">Genesis Block Theme</a>. While there has been little news of it lately, it is expected to land sometime this year alongside WordPress&rsquo;s block-based theming system. In 2020, the company also rebranded an earlier plugin acquisition, Atomic Blocks, to <a href="https://wptavern.com/atomic-blocks-rebranded-to-genesis-blocks-migration-path-to-new-plugin-coming-soon">Genesis Blocks</a>. It later released a developer-centric <a href="https://wptavern.com/build-editor-blocks-for-clients-with-the-genesis-custom-blocks-plugin">Genesis Custom Blocks</a> plugin.</p>



<p>The company is also retiring all but its top 10 most popular child themes. Retired themes will be archived and still available to existing customers, and the development team will issue security updates if and when necessary.</p>



<p>&ldquo;As we have discussed in the past, there are big changes coming to WordPress with the introduction of Full Site Editing themes,&rdquo; wrote Garret. &ldquo;While this new way of building themes will be optional (especially at first), we&rsquo;ve decided to focus most of our product and engineering efforts for Genesis related products on preparing to take advantage of these new capabilities.&rdquo;</p>



<p>Releasing the Genesis theme for free will open a larger audience for StudioPress and ease some friction points.</p>



<p>&ldquo;This has been one of the biggest asks in all of Genesis and beyond,&rdquo; wrote Garret. &ldquo;Gating Genesis Framework and Sample Theme behind a pay-wall causes confusion for people buying Genesis [child] themes from 3rd party theme providers and limits the number of people who can build with Genesis Framework.&rdquo;</p>



<p>The team is also dropping its marketplace fees for third-party creators. Vendors, while still being listed, will need to handle payment processing on their own. The &ldquo;buy&rdquo; button on StudioPress will redirect customers to the vendor sites.</p>



<p>In the past, the Genesis community has been a bit of a walled garden. While there are still commercial plans, these changes can potentially bring in fresh creative talent who might not have chosen to build on top of Genesis in the past &mdash; payments are always barriers to entry for some. Genesis has always been the foundation, but the value non-developer customers will see is in the child themes and plugin add-ons.</p>



<p>With the <a href="https://wptavern.com/upcoming-changes-and-steps-for-an-overhauled-wordpress-theme-review-system">loosening of the review guidelines</a> in the coming months, I would like to see Genesis land in the free theme directory. It would not pass the current rules, but there may not be any holdups a bit down the road. If it will be free anyway, <em>why not?</em> It would be a gesture of goodwill toward the community while offering a robust and mature product into the directory. From the business end, it is sure to drive more customers to the StudioPress commercial offerings. It could be a win for everyone.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 13 May 2021 00:02:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WPTavern: ‘Universal’ WordPress Themes Virtual Hallway Hangout Planned for May 14";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116376";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:203:"https://wptavern.com/universal-wordpress-themes-virtual-hallway-hangout-planned-for-may-14?utm_source=rss&utm_medium=rss&utm_campaign=universal-wordpress-themes-virtual-hallway-hangout-planned-for-may-14";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4769:"<p class="has-drop-cap">Core contributor Jeff Ong <a href="https://make.wordpress.org/themes/2021/05/10/friday-may-14th-at-14utc/">announced an upcoming virtual hangout</a> around the concept of universal themes. The meeting could cover much ground for theme authors learning how new and upcoming tools will fit into their workflows, businesses, and more. For an invitation, attendees should leave a comment on the announcement post or message Ong directly.</p>



<p>The hangout is slated for <a href="https://www.timeanddate.com/worldclock/fixedtime.html?iso=20210514T1400">May 14 at 14:00 UTC</a>.</p>



<p>The meeting agenda is loose, and the conversation could venture into various theme-related topics. However, the shortlist of possible discussion points covers:</p>



<ul><li>Using new <a href="https://wptavern.com/themes-set-up-for-a-paradigm-shift-wordpress-5-8-will-unleash-tools-to-make-it-happen">theme tools in WordPress 5.8</a>.</li><li>Handling customization in block and classic themes.</li><li>Using block template parts within PHP templates.</li><li>Supporting block and classic nav menus.</li><li>Working with <code>theme.json</code> for theme styles.</li></ul>



<p>The first order of business should be to define what a &ldquo;universal&rdquo; theme is. The terminology is new to the WordPress space, and it could change as the future of theming starts taking a more coherent shape.</p>



<p>Ong left a short description in the announcement. &ldquo;A theme that aims to work in either classic (customizer) or FSE contexts,&rdquo; he called it.</p>



<p>The definition seems to have been born out of <a href="https://github.com/WordPress/gutenberg/issues/29024">GitHub ticket around &ldquo;hybrid&rdquo; themes</a> &mdash; yet another new term. The goal was to discuss paths for any user to use the site or template editor to override traditional theme templates. For example, if a user wanted to create a block-based category archive template, they could do so without affecting their overall theme structure.</p>



<p>WordPress users will get a sampling of <a href="https://wptavern.com/full-site-editing-is-partly-a-go-for-wordpress-5-8">this idea in version 5.8</a>. The post-editing screen has a new <a href="https://wptavern.com/first-round-of-the-fse-outreach-program-concludes-identifies-template-editing-mode-problems">template-editing mode</a>. Users will be able to switch to this mode to create a top-level template for that single post/page. It will live outside their theme structure, so it won&rsquo;t matter if the theme supports blocks.</p>



<p>The Gutenberg development team and theme authors will be grappling with such questions in the coming months. Nothing is ever a perfect process. And, the transition to block-based theme templates is an overhaul unlike any we have seen in WordPress&rsquo;s history. So, we need new paths and terms for them.</p>



<p>&ldquo;I&rsquo;ve been thinking about the notion of universal themes rather than hybrid,&rdquo; <a href="https://github.com/WordPress/gutenberg/issues/29024#issuecomment-792796711">wrote Mat&iacute;as Ventura</a>, the Gutenberg project lead, in the ticket. &ldquo;Universal themes would be themes that can be loaded in a classic context or block editor context without a problem. As a user, if I&rsquo;m running a WordPress capable of understanding block themes, that&rsquo;s the interface I get (and the one I can customize), otherwise, the regular theme files are used with its customizer integration. Hybrid would then be a tool for theme developers to gradually become universal themes if they want to.&rdquo;</p>



<p>Hybrid themes seem to be designed to work with bits and pieces of FSE, giving developers time to move toward full support. However, universal themes cover everything from the traditional to the new era. They are meant to allow users to choose which bits of FSE to use.</p>



<p>All this new terminology could muddy the waters a bit, and if that happens, users are the ones to lose out. There will potentially be four types of themes:</p>



<ul><li>Block Only</li><li>Universal</li><li>Hybrid (with varying levels of support)</li><li>Classic Only</li></ul>



<p>Most themes that have landed in the official directory over the past few months lack basic block-editor styles. It is hard to imagine too many universal themes &mdash; which will require far more of a time investment &mdash; in the next year or so. It is more likely that we will see a split between new block themes and a mashup of classic/hybrid themes making the rounds. Only the most dedicated or those who can foot the bill will go the universal route.</p>



<p>For now, developers need to continue having these types of conversations and ironing out the details.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 11 May 2021 23:26:37 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:36:"WPTavern: Liquid Web Acquires GiveWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116394";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:117:"https://wptavern.com/liquid-web-acquires-givewp?utm_source=rss&utm_medium=rss&utm_campaign=liquid-web-acquires-givewp";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3716:"<p><a href="https://wordpress.org/plugins/give/">GiveWP</a>, one of the most popular donation and fundraising plugins with more than 100,000 active installs, has been acquired by <a href="https://www.liquidweb.com/">Liquid Web</a>. The team behind the plugin will be joining Liquid Web as part of the asset sale, which includes the whole company, products, and leadership.</p>



<p>GiveWP made its <a href="https://wptavern.com/give-a-new-free-donations-plugin-for-wordpress">debut in 2015</a> with a 0% commission approach, its major differentiator from other third-party funding tools at the time. Sites using the plugin can collect 100% of the donations given. Its creators aimed to empower causes and non-profits to host their own donation forms. They built out the plugin to become a full donation platform with reporting and donor management. </p>



<p>As of May 2021, GiveWP has helped its users raise more than $1 billion dollars in online fundraising.</p>



<p>&ldquo;When we launched, we talked about forms with no reporting, or having to hack eCommerce tools to skip the cart and sales tax and shipping,&rdquo; GiveWP co-founder and former COO Matt Cromwell said. &ldquo;When users started basically saying exactly that back to us as the reasons they LOVED GiveWP, it was major validation &ndash; we&rsquo;d built exactly what we wished we&rsquo;d had when we were freelancing for nonprofits.&rdquo;</p>



<p>The founders also found validation in their business ideas when large organizations like the Clinton Foundation or Habitat for Humanity reached out to GiveWP support and gave positive reports after receiving answers.</p>



<p>&ldquo;It made us really amazed how we can bring solutions to organizations that are solving BIG world problems,&rdquo; Cromwell said. &ldquo;When we started having better telemetry and realized that we were literally helping organizations raise billions of dollars now&hellip;that was huge. It&rsquo;s been very humbling to be part of something so much bigger than any one person in our organization.&rdquo;</p>



<p>Cromwell said his team was not actively &ldquo;shopping&rdquo; the company, but were looking for ways to accelerate growth of the team and product.</p>



<p>&ldquo;GiveWP sales have been increasing annually year over year every year since our launch,&rdquo; he said. &ldquo;We were not looking for ways to save this product; it&rsquo;s been wildly successful.&rdquo;</p>



<p>Devin Walker, GiveWP former-CEO and co-founder, said he appreciated Liquid Web&rsquo;s history of acquiring strong WordPress brands while keeping their teams in place. He referenced the company&rsquo;s 2017 acquisition of iThemes, and The Events Calendar acquisition in 2020.</p>



<p>&ldquo;These two success stories gave us great confidence in Liquid Web and their desire to see GiveWP grow,&rdquo; Walker said.</p>



<p>&ldquo;Liquid Web is building a whole software part of their business, they&rsquo;ve been acquiring WordPress shops for quite some time and they saw us as a good addition to their &lsquo;Family of Brands,'&rdquo; Cromwell commented on the sale. &ldquo;They are also leaders in the managed WordPress space, and we&rsquo;re already talking with them about opportunities for a more specifically nonprofit focused managed WordPress solution that includes GiveWP and all our addons.&rdquo;</p>



<p>Cromwell said his team does not anticipate any branding or pricing changes in the future. Current users and customers who have questions or concerns are invited to attend the company&rsquo;s <a href="https://givewp.com/givewp-joins-liquidweb/#register">virtual Town Hall meeting</a> with Liquid Web CTO Joe Osterling on May 18, at 11am Pacific.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 11 May 2021 17:41:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WordPress.org blog: Welcome to Openverse";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10325";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2021/05/welcome-to-openverse/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2211:"<p>Following the <a href="https://ma.tt/2021/04/cc-search-to-join-wordpress-org/">recent statement by WordPress&#8217;s co-founder Matt Mullenweg</a> and the <a href="https://creativecommons.org/2021/05/03/cc-search-to-join-wordpress/">Creative Commons CEO, Catherine Stihler’s post</a>, I&#8217;m happy to formally announce that CC Search (with the new name Openverse) is now part of the WordPress open source project. Both Matt and I are long-time supporters of Creative Commons. I hope that this will provide a long-term, sustainable challenger to closed source photo libraries and further enhance the WordPress ecosystem.</p>



<h3><strong>How Does This Affect Current Users?</strong></h3>



<p>Current CC Search users will continue searching and using openly licensed images from around the internet. WordPress plans to continue the great work started by the Creative Commons project and expand search capabilities and features.</p>



<h3><strong>What’s Next?</strong></h3>



<p>We look forward to indexing and searching additional media, such as audio and video. As we expand our capabilities and grow the project, we look forward to integrating directly into WordPress and the media library. We hope to not only allow search and embeds of openly licensed media but pay it forward by additionally licensing and sharing your media back.</p>



<h3><strong>How Can You Contribute?&nbsp;</strong></h3>



<p>Stop by the Slack channel, <a href="https://wordpress.slack.com/archives/C02012JB00N">#openverse</a>, and take a look at the code repositories moved under the WordPress organization <a href="https://github.com/wordpress/?q=openverse">here on GitHub</a>. You can also follow along with the project on its own make page at: <a href="https://make.wordpress.org/openverse">https://make.wordpress.org/openverse</a>. We are working on setting up the new team, process, and procedures.<br /></p>



<p>Join us in welcoming the team and community. As a treat, check out the most recent WP Briefing episode, <a href="https://wordpress.org/news/2021/05/the-commons-of-images/">The Commons of Images</a>, in which Matt and I discuss CC Search and our hopes for it as part of the WordPress community.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 11 May 2021 12:42:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"Josepha";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WPTavern: Openverse: Why This Project Is Good for WordPress and the Web";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=115744";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:185:"https://wptavern.com/openverse-why-this-project-is-good-for-wordpress-and-the-web?utm_source=rss&utm_medium=rss&utm_campaign=openverse-why-this-project-is-good-for-wordpress-and-the-web";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6602:"<p class="has-drop-cap">In today&rsquo;s WP Briefing podcast episode, <a href="https://wordpress.org/news/2021/05/the-commons-of-images/">The Commons of Images</a>, host Josepha Haden Chomphosy discussed the Openverse project with WordPress lead Matt Mullenweg. Automattic recently paid the non-profit Creative Commons organization for their Creative Commons Search engine. However, <a href="https://wptavern.com/creative-commons-search-to-relaunch-on-wordpress-org">WordPress.org will host it</a>, and there will be a community-run team. Openverse will be the name of the new project when it launches.</p>



<p>A more official announcement of the Openverse project and team is expected shortly. However, it is an ideal time to begin exploring what this means for WordPress and the web.</p>



<p>Over the past few years, theme authors have watched as their favored image services offered problematic license and terms changes. The domino effect of services not wanting competitors to build upon their collections of open-source media shifted the landscape. <a href="https://make.wordpress.org/themes/2018/11/29/pexels-images-are-no-more-allowed/">Pexels</a>, <a href="https://make.wordpress.org/themes/2019/01/13/pixabay-images-are-not-allowed/">Pixabay</a>, <a href="https://wptavern.com/unsplash-responds-to-image-licensing-concerns-clarifies-reasons-for-hotlinking-and-tracking">Unsplash</a>, and others began adding limitations to how their images could be used. Such limitations meant images from those services were not allowed in WordPress.org themes.</p>



<p>For theme creators, this meant the pool of potential open-source images became smaller in a time when it should have been growing.</p>



<p>&ldquo;What happens today is there&rsquo;s stock photography sites, some of which used to be Creative Commons-based, but many have moved away from that,&rdquo; said Mullenweg. &ldquo;So they essentially relicense their user contributions.&rdquo;</p>



<p>It is not just an issue for creators on the theme directory. The burning question of where to find free images without fuzzy license agreements crosses the spectrum of the WordPress community. Even users should feel safe dropping a decorative or featured image into their post without digging through the legalese.</p>



<img />Creative Commons Search for beach photos.



<p>The web is full of content under Creative Commons licenses. However, it is often tough to find them. Mullenweg said that image, audio, and video files are each &ldquo;a little bit of an island&rdquo; in his description of the problem. That discoverability issue is part of what the Openverse project intends to solve.</p>



<p>Sites that have changed their terms or licenses did so after becoming players in the stock photo space. However, their growth was on the back of the open-source world. They should have expected some backlash. And, WordPress is the ideal type of community to make a truly free alternative.</p>



<h2>Potentially Revolutionary</h2>



<p class="has-drop-cap">The Openverse project can be a game-changer in two regards. The first is the direct integration into the WordPress media library. The second is it provides another avenue for people, even those who are not developers or designers, to contribute to the open content of the web.</p>



<p>The platform&rsquo;s built-in media library is due for an overhaul. Uploading and adding images to a post is a relatively simple affair &mdash; if you have them on hand. Going to a stock photo site and choosing an image is often the course of action when users need to find the perfect photo to plug into a post. However, this takes users outside of the WordPress experience, creating a blockage in the content-creation flow.</p>



<p>The plan for Openverse is to integrate its search feature directly into the media library. This puts millions of media files into the hands of creators without ever leaving WordPress.</p>



<p>Some plugins already do this for various stock photo sites. Automattic&rsquo;s Jetpack offers access to the Pexels collection.</p>



<img />Pexels image search via Jetpack.



<p>Pexels has its own license similar to Pixababy and Unsplash. However, it does distinguish between CC0 (public domain) and the Pexels License on a photo-by-photo basis. Unfortunately, that license info is not shown via the Jetpack integration. I hope the eventual integration of Openverse and WordPress is more robust, offering a clear view of what users are getting when they find an image they like.</p>



<p>There are still some things to copy from Jetpack&rsquo;s Pexels integration. Automatic photo credits and alt text are welcome features that generally make the web a better experience. Adding the credit to the image caption is a nice nod to the creator, and the oft-forgotten alt text is necessary for users with screen readers.</p>



<img />Inserting image with photo credits and alt text from Pexels.



<p>One of the biggest takeaways from the podcast is what Openverse can be for the web. &ldquo;We&rsquo;re going to try to bring the WordPress philosophy to this space,&rdquo; said Mullenweg.</p>



<p>He acknowledged that there is and should always be a market for professional media creators. There are sites aplenty for people who want to offer commercial access to their images and more.</p>



<p>&ldquo;But we just want to make an alternative, so those who want to donate their work to the world, much like engineers, and designers, and translators of WordPress, donate their work some of that effort to the world, they can do so,&rdquo; he said.</p>



<p>Openverse must become more than a media search engine. It needs to be a project where the Average Joe can upload a nice nature picture he took over the weekend barbecue. A place where Average Jane can share a video clip of the ocean waves hitting the shoreline from her beach trip. And a place where professionals can pay it forward to the world.</p>



<p>My excitement is mostly about having a trusted place for theme authors and designers to grab free media. I am already imagining what this could mean for the upcoming block pattern directory, a place that will need quality images without restrictions.</p>



<p>The project is 100% <a href="https://github.com/WordPress?q=openverse">open source too</a>. Developers can fork the search engine and create their own. Competing content management solutions will also have access to the public API, offering open-source media to their users.</p>



<p>Bringing the WordPress philosophy into the stock media space is a plan I can get behind.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 10 May 2021 23:43:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"WordPress.org blog: People of WordPress: Fike Komala";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=10270";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"https://wordpress.org/news/2021/05/people-of-wordpress-fike-komala/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:10375:"<p><em>WordPress is open source software, maintained by a global network of contributors. There are many examples of how WordPress has changed people’s lives for the better. In this monthly series, we share some of the amazing stories that are not as well known.</em><br /><br />Creating content with WordPress and blogging helped Fike Komala, from Indonesia, build a career where she can work remotely from different locations in the world. <br /></p>



<p>In 2020, Fike joined a US-based company that specializes in form building to work as a content marketer. Using her experience as a freelancer and later a full time employee, she encourages others, particularly women in Asia, to consider remote work as a career option. She is so impressed by remote working benefits, that she is now considering writing about it for a thesis for her Master&#8217;s Degree, which she started this year in Europe.<br /></p>



<img width="632" height="387" src="https://i0.wp.com/wordpress.org/news/files/2021/05/B5939AF2-DFFD-4471-B3F1-7738F82CEF8A.png?resize=632%2C387&ssl=1" alt="Fike pictured with a snow background" class="wp-image-10291" />



<p>As a keen blogger, WordPress immediately impressed Fike. Her dad is a programmer, and he helped her create the first of many blogs starting when she was 10 years old. She had private and public blogs, and even an English language one to help her practice and improve her skills. </p>



<blockquote><p><strong>“I got satisfaction and happiness from pouring my thoughts in writing and publishing them in my blog. Writing my thoughts and feelings often helped me process them, and does even now.”</strong></p><cite>Fike Komala</cite></blockquote>



<p>With a natural talent and love for languages, Fike pursued an Information Systems degree after graduating from high school. Her course covered business learning Java, HTML, CSS, Javascript, and Android programming. She also took courses to learn Bootstrap and Ruby on Rails.&nbsp;</p>



<h2>Earning Through Building With WordPress</h2>



<p>Fike’s parents had a business building websites. She was drawn to this work and would help proofread and format the articles. This is how she first encountered WordPress, which was to play a pivotal role in her future career. <br /></p>



<blockquote class="wp-block-quote"><p>“I saw WordPress as something more advanced than other platforms, with more themes and plugins to choose from. The default WordPress websites already looked more professional than others.”</p><cite>Fike Komala</cite></blockquote>



<p>Throughout school, Fike’s experience with WordPress and blogging helped her earn extra money safely online, including translating texts from English to Indonesia, online surveys, and writing articles in English.</p>



<h2>Discovering Work You Enjoy&nbsp;</h2>



<p>The last year at University required a year-long full-time internship. Fike worked as an intern at a big general insurance company within the IT quality control staff. She enjoyed working with the people she met and learned a lot through this opportunity, but she declined the offer of a full-time position.&nbsp;</p>



<p>Fike is a good student who loves learning and did well in her education. Through her traditional internship experience,  she found that programming in an office job did not fulfill her. It strengthened her belief in a finding a career where she could have the freedom and creativity of working remotely.</p>



<p>“I was a good student, I love learning algorithms, but I didn’t love programming. I’m not that person who can stay calm finding errors in their codes, and then finding out that it’s only missing a character,” said Fike. She added: “I don’t really like the fact that I have to wake up at 6 AM and be back home at 7 PM, and do it all over again the next day.”</p>



<h2>Adventure Into Remote Work&nbsp;</h2>



<p>Fike spent time improving her freelance profile, revising it, and applying to jobs as a virtual assistant. She was willing to do any small website jobs such as formatting WordPress posts, designing social media posts, and processing orders for online shops. Through a freelance job submission site, she was able to work with people from across the globe, including Singapore, Australia, Europe, and America. Through the site, Fike was able to gain experience with remote working tools like Slack, Asana, Trello, and Google Suites, and the work gave her practice writing in English.&nbsp;</p>



<p>It was through this site that Fike saw a job opportunity with a WordPress plugin company. She sent in her profile and blog.&nbsp;</p>



<p>“This was my first time being interviewed via a video call. I was ecstatic but panicked. On the day, I woke up at 4 AM, got dressed, and opened my laptop. Weirdly, my wi-fi died that morning. So I went to the nearest cafe to get the interview done, and it went great!”</p>



<p>She was hired to deliver consistency on the company’s blog.&nbsp;</p>



<p>Through her job, Fike first began to contribute within the WordPress community and was able to attend her first WordCamp, WordCamp Jakarta 2018, sponsored by her firm. Through WordPress, Fike has met many generous, trusting, and helpful people. </p>



<p>She said: “Because I’ve experienced the generosity of the WordPress people, I wanted to give back to the community.”</p>



<img src="https://lh5.googleusercontent.com/ZDAmqCcebOQII99V2RMYmJikoQ3u-tjy6BcCT39QWsOUrAqq2_HeqJ1735UoxVyQHTO_S_V9lzZEJ7WayLb8kY3or78oqG4Xt5ujbNUpt7Vcz7r20lp9XopkPwh85imnvRxjpWTx" alt="WordCamp swag" />Swag from WordCamp Jakarta 2018, that’s Wapuu ondel-ondel!



<blockquote><p><strong>“I got to know the amazing community behind WordPress. How people voluntarily contribute their time, energy, and skills to the community, from development, marketing to translating.</strong> <strong>It was really inspiring.”</strong></p><cite>Fike Komala</cite></blockquote>



<h2>You Can Inspire Others Through Contributing</h2>



<p>Fike has been an inspiration to people in her local community and globally within the WordPress community through her enthusiasm and energy.&nbsp;</p>



<p>She <a href="https://www.youtube.com/watch?v=KHSAV_NJtTA">talks about her joy in contributing</a> during a live interview as part of WordPress Translation Day in 2020.&nbsp;</p>



<p>So determined to encourage others to become translators of WordPress, she joined the Global Translation Day event with the Indonesian Community last year and took part in wider marketing of the event. She is pictured below with some of the Indonesian polyglots team.</p>



<p>She continues to support the polyglots and is a General Translation Editor for the Indonesian language. Last year, she also voiced an <a href="https://youtu.be/Ifqabp-36_c">Indonesian translation of the onboarding video</a> for new contributors joining WordPress.org. She has been a regular contributor to the PerempuanWP, an initiative for Indonesian women working in the WordPress world. Working with a firm which uses the WordPress platform has strengthened her familiarity with projects in the community and encourages her interest in contributing.</p>



<img src="https://lh4.googleusercontent.com/H-8VelQbbEb9f5MM-SUXNudVD9U1DNs546yt_cWGRU--GSLm-PCUunnHDNFmquv9w3rWOUadxkbYr9bYsRU1Ecmhb6Ee_Deg_paNEIyyqs91_3DjgtlmfgCA_P45GNA5nf5rmpCe" alt="Indonesian translation team " />



<p>To learn more about contributing to WordPress, visit <a href="https://make.wordpress.org/">make.wordpress.org/</a> and follow the “get involved” link. You can join any of the weekly team meetings to get started, and there is a lot of help available.&nbsp;</p>



<p>Fike says, “I want to represent Asian women. In the future, I hope I can inspire more women, especially Asians, to work remotely.” She is now studying in Europe for a Master&#8217;s in Digital Communication Leadership. She hopes to use her learning to help other women, particularly back in her home country of Indonesia.</p>



<p>She continues to share her energy for learning and remote working. </p>



<p>“<strong>Just learn things. As much as you can. From anywhere, about anything. Keep an open mind. Read books, listen to podcasts, and learn new skills.”</strong></p>



<p><strong>She added: “If you’re working in the WordPress world, join the WordPress community. It’s a great place to learn from and connect with great people.”</strong></p>



<h2>Contributors</h2>



<p>Thanks to Abha Thakor (<a href="https://profiles.wordpress.org/webcommsat/">@webcommsat</a>) and Meg Phillips (<a href="https://profiles.wordpress.org/megphillips91/" class="mention"><span class="mentions-prefix">@</span>megphillips91</a>) for writing this feature, to Surendra Thakor (<a href="https://profiles.wordpress.org/sthakor/" class="mention"><span class="mentions-prefix">@</span>sthakor</a>), Meher Bala (<a href="https://profiles.wordpress.org/meher/" class="mention"><span class="mentions-prefix">@</span>meher</a>), Larissa Murillo (<a href="https://profiles.wordpress.org/lmurillom/" class="mention"><span class="mentions-prefix">@</span>lmurillom</a>), Josepha Haden (<a href="https://profiles.wordpress.org/chanthaboune/">@chanthaboune</a>), Chloé Bringmann (<a href="https://profiles.wordpress.org/cbringmann/" class="mention"><span class="mentions-prefix">@</span>cbringmann</a>) for additional support and graphics, and to Topher DeRosia (<a href="https://profiles.wordpress.org/topher1kenobe/">@topher1kenobe</a>) who created HeroPress. Thank you to Fike Komala (<a href="https://profiles.wordpress.org/fikekomala/" class="mention"><span class="mentions-prefix">@</span>fikekomala</a>) for sharing her #ContributorStory.</p>



<img src="https://lh4.googleusercontent.com/FEZ2FQJ0vQ311YoPfh6ny15NXh8saTLH_RjyDO4pUOuEGBTa-Czk63PGoWL04FawKviRfNx0QXePx-goK04X12ry1BR_WXh-kVPIfsEeItPAX6reN5fHS96q6-8dUI506ZO38Z0G" alt="HeroPress logo" />



<p><em>This post is based on an article originally published on HeroPress.com. It highlights people in the WordPress community who have overcome barriers and whose stories would otherwise go unheard.</em></p>



<p><em>Meet more WordPress community members in our <a href="https://wordpress.org/news/category/heropress/">People of WordPress series</a>.</em></p>



<p><em>#ContributorStory #HeroPress #WPTranslationDay</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 10 May 2021 22:50:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:28:"webcommsat AbhaNonStopNewsUK";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:54:"WordPress.org blog: WP Briefing: The Commons of Images";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/news/?post_type=podcast&p=10266";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://wordpress.org/news/2021/05/the-commons-of-images/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:24989:"<p>In this episode, Josepha is joined by the co-founder and project lead of WordPress, Matt Mullenweg. Tune in to hear Matt and Josepha discuss the relaunch of CC Search (Openverse) in WordPress and the facets of the open source ecosystem.&nbsp;</p>



<p><em><strong>Have a question you&#8217;d like answered? You can submit them to <a href="mailto:wpbriefing@wordpress.org">wpbriefing@wordpress.org</a>, either written or as a voice recording.</strong></em></p>



<h2>Credits</h2>



<ul><li>Editor:<a href="https://profiles.wordpress.org/dustinhartzler/"> Dustin Hartzler</a></li><li>Logo:<a href="https://profiles.wordpress.org/beafialho/"> Beatriz Fialho</a></li><li>Production:<a href="https://profiles.wordpress.org/mkaz/"> </a><a href="https://profiles.wordpress.org/cbringmann/">Chloé Bringmann</a></li><li>Song: Fearless First by Kevin MacLeod</li></ul>



<h2>References</h2>



<p><strong>Openverse Repositories </strong></p>



<ul><li>Catalog:&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://github.com/wordpress/openverse-catalog">https://github.com/wordpress/openverse-catalog</a></li><li>API:&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://github.com/wordpress/openverse-api">https://github.com/wordpress/openverse-api</a></li><li>Frontend:&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://github.com/wordpress/openverse-frontend">https://github.com/wordpress/openverse-frontend</a></li></ul>



<p><strong>Tech Stack Outline</strong></p>



<ul><li><strong>Frontend</strong>&#8211; Languages: <ul><li>JavaScript, CSS/SCSS</li><li>Libraries/Services: Vue.js, Nuxt.js#&nbsp;</li></ul></li><li><strong>API</strong>&#8211; Languages: <ul><li>Python, PostgreSQL</li><li>Libraries/Services: Django, Elasticsearch, Redis</li></ul></li><li><strong>Catalogue</strong>&#8211; Languages: <ul><li>Python, PostgreSQL</li><li>Libraries/Services: Apache Airflow, PySpark</li></ul></li></ul>



<p>Join the WordPress Slack instance, #openverse</p>



<h2>Transcript</h2>



<span id="more-10266"></span>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>00:10</p>



<p>Hello, everyone, and welcome to the WordPress Briefing. This is usually the podcast where you can catch quick explanations of some of the ideas is behind the WordPress open source project. Today, I have a little bit of a different topic. It&#8217;s still WordPress, it&#8217;s still open source, but it&#8217;s kind of peering into some stuff for the future as opposed to looking at where we are today or how we got to where we are today.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>00:36</p>



<p>You might have recently seen an announcement from Matt that CC Search is joining the WordPress project. This is a really exciting thing for open source, for sure, and definitely, from my perspective, for WordPress. And so I invited Matt to join me today to take a look at what he had in mind with bringing that particular project into our project and what we have in mind for the future. And so, today, this is the WordPress Briefing with Matt and Josepha. And I hope you enjoy the conversation we had. Here we go!</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>01:22</p>



<p>So, we recently announced for WordPress that we essentially acquired CC Search, a project that&#8217;s been part of Creative Commons. And they recently chose a different kind of roadmap for the work they&#8217;re doing in the future. And so it seemed like a really great opportunity to bring this tool and this, I don&#8217;t know, this kind of experience for our users into the WordPress project. So Matt, what are your thoughts about how, like this commitment to images with CC licenses, with Creative Commons licenses, can impact WordPress and how we work in the open web.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>02:09</p>



<p>I think it&#8217;s pretty exciting because Creative Commons exists to do for media, you know, images, audio, etc., what open source has done for code. And so for people who choose to want to donate their creative work under these licenses, much like anyone who contributes a plugin, or code or documentation or translations for WordPress, now people for whom their method of expression is, let&#8217;s say, photography, can put that into the comments like literally, I like why it&#8217;s called the Creative Commons, it&#8217;s such a good name. It can be accessed within everyone&#8217;s dashboard for WordPress. And those images can start to really be part of the fabric of the web the same way that code that runs WordPress or its plugins is part of the fabric of the web.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>02:57</p>



<p>For anyone who&#8217;s listening who&#8217;s not actually already familiar with this concept of the tragedy of the commons, do you want to give us the elevator pitch of what that means and why it&#8217;s so important for WordPress to try to counterbalance that in our work?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>03:12</p>



<p>Sure, the tragedy of the commons, you know, I think the canonical example is as a shared field in a town, and it doesn&#8217;t belong to anyone, so anyone can use it. And when too many farmers took their sheep there, they would overeat the grass, and then there was no more grass left because it was being overutilized, and there was no one owning the field to say, Hey, we need to practice a more sustainable amount of sheep. grass in</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>03:39</p>



<p>Put more grass in there.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>03:41</p>



<p>So basically, the idea is like a shared resource that gets overused and then disappears. With software, we have the opportunity to have the opposite, which is a wealth of comments where every person using the thing actually has the opportunity to make it a little bit better. And that is really beauty of like Wikipedia, open source where every person using it might contribute a small fix, or a translation or a bug report or tell a friend about it, or basically be part of making this thing better, which you know, WordPress is history is very much an example of, and then as it gets better, more people want to use it. And the beautiful thing about software is you can have economics of abundance versus the economics of scarcity. There&#8217;s not one field used, but every additional incremental user of WordPress makes this community stronger and creates a larger market for the products inside it. So those types of dynamics can have the opposite of the tragedy of the commons.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>04:39</p>



<p>Absolutely. I love this idea that you brought it up in your question, not your question, in your answer right at the top. I love this idea of acknowledging that code isn&#8217;t the only fabric available in open source and certainly not the only fabric of the internet as we know it. This idea of like, let&#8217;s bring Creative Commons licensed images into a more long-term space for WordPress. Do you think that that at some point can apply to videos and other sorts of audio files?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>05:21</p>



<p>Absolutely. There already is a ton of Creative Commons licensed content out there that people can use. But there&#8217;s a discoverability problem, you know? Each individual image or audio file or video is, is a little bit of an island. So that&#8217;s why it&#8217;s so important that there&#8217;s the equivalent of a search engine that allows people to discover all the great stuff that&#8217;s out there. And what happens today is there&#8217;s stock photography sites, some of which used to be Creative Commons-based, but many have moved away from that. So they essentially relicense their user contributions. Or people, if we&#8217;re being real, people just go to Google images, and they might utilize images that they don&#8217;t actually have rights to. It&#8217;s not the end of the world, but it&#8217;s not ideal. And so we can create this really compelling directory experience of imagery, which people have chosen to share and want to be used. I think that&#8217;s a much better outcome than the equivalent of piracy.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>06:21</p>



<p>Yeah, yeah, absolutely. So I leapt right into this and didn&#8217;t really give any context to what CC Search is or anything, but for anyone who is not familiar with this tool already, CC Search is, as Matt mentioned, a search engine that currently is focused specifically on images that use open licenses. The Creative Commons licenses are like the content-specific version of GPL for code, which is a really big deal, I think. If wishes were fishes, Matt, and you had your total hope ahead of you, what is your hope for the relaunch of this product and this tool in WordPress?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>07:15</p>



<p>Well, first and foremost, I think we can improve the experience of designing and contributing themes and then modifying them with this really fantastic image directory if we&#8217;re able to build it in the media library. And lots of plugins like Jetpack do some version of this. I think that Jetpack uses Pexels or one of the proprietary, but open libraries. And so we can make it fully, like you said, the equivalent of GPL and open source, all the better. I think longer-term, I&#8217;d love to have a way for people who are adding media to the WordPress site to set it to be available under a Creative Commons license. So just to make it easy and built-in for people to create more Creative Commons license imagery. And then, you know, with the integration of Gutenberg and other things, we can make it easy for other people to use it and credit back the original author if they choose to. And what we find is that even though with CC0, which is essentially a kind of like putting something into the public domain, credit is not required. If you make it the default to link back to the original photographer, author, most people believe that because they like creating things that they use. So you get the best of both worlds; you have the freedom of use for any purpose, including not requiring the credit. But then, just by having it by default, when you insert one of these images, a lot of people are going to leave that and link back to the original author, which I think is also really cool. Like you&#8217;re not required to have a credit link on WordPress, but most people leave the Powered BY WordPress on there.&nbsp;</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>08:45</p>



<p>One of the interesting areas, you mentioned Pexels in this case. One of those interesting areas that we, as a project, can really explore here is how to make it so that the metadata gives you confidence in the origin of the image. Like I don&#8217;t believe that there are any set standards for that. I&#8217;ve just started my research, obviously, because they&#8217;re brand new to us, but I just don&#8217;t think there are any standards available there. And, I think that there is an opportunity for WordPress as a true supporter of the open web to help change the fact that we don&#8217;t have that’s one of the main competitive disadvantages that open source libraries have been trying to combat and especially with Unsplash, who eventually did get purchased by Getty Images. Still, I feel like part of what must have driven that decision to change the licensing terms had to be that they are up against that behemoth of Getty Images where people know where the things came from. They know where the images came from, and they can trust that lineage and model releases and all that stuff. I&#8217;m just really interested to see how we can; I don&#8217;t know; I hate to say dignify contributors who are offering their contributions to open source in this way. But, it also is kind of that there&#8217;s no sense in saying that just because you did not accept payment from getting images, your photos weren&#8217;t any good, or your images did not have an excellent path to where they are housed at that moment.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>10:39</p>



<p>I mean, it&#8217;s really fun to contribute to something larger than yourself. And for many folks, you know, their gift, their craft is something like photography. And so there&#8217;s always going to be the sort of paid marketplaces and, and something like Shutterstock, I think really fantastic companies and services. I think a marketplace for paid content. But we just want to make an alternative, so those who want to donate their work to the world, much like engineers, and designers, and translators of WordPress, donate their work some of that effort to the world, they can do so. Right now, there are some places for that, but we&#8217;re going to try to create one that is fully open, has no advertising, has an open API. So other CMSs can access it too.&nbsp; You know, we&#8217;re going to try to bring the WordPress philosophy to this space.&nbsp;</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>11:29</p>



<p>Gosh, I just love that. While we&#8217;re on the question of contributing to something bigger than yourself, bringing the WordPress philosophy into this space, how do you think CC Search will impact the current media library and how WordPress handles media in general? Or do you have an idea about how it will impact that? Sometimes we don&#8217;t know until we get in?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>11:53</p>



<p>Yeah, I think within Gutenberg, the idea of adding an image from an online library or a search is something we&#8217;ve wanted to do for a while. But either the licensing made it a little tricky, or, you know, some of the sites that did have open things, maybe the site itself had like a lot of advertising or pop-ups or things like that. So by having this hosted by wordpress.org, we&#8217;ll have a clean, open source, and ad-free place that people can access. I suppose it&#8217;s also worth saying that CC Search, which we&#8217;re rebranding as Openverse, is actually all the code behind is open source as well. So there is going to be a new project on WordPress&#8217;s GitHub that will be this open source search engine. So that&#8217;s also part of the contributions; we&#8217;ll be pointing this search engine to try to index and collect Creative Commons license media, but perhaps it could also provide a base for someone else wanting to build a different characters engine or just host Openverse themselves and run it themselves; that is totally fine.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>13:00</p>



<p>I should probably mention, for any of the WP Briefing listeners who are contributing to the WordPress project itself, there is a brand new team that we&#8217;re working on building, and for one wander over and welcome everybody, we are welcoming in an open source community into our open source community. And so, of course, we want to make sure that they know how to get around and feel welcome in the space. But also, anything that you are interested in helping to contribute to that particular project, I think would be helpful. WordPress is big; we have a long history. And so I think I feel confident in saying that, if I were on that team that&#8217;s bringing in this new tool, I would hope that there were some OG WordPressers, who were available to help me discover the ins and outs of things, especially as its 18 years of us.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>14:04</p>



<p>Yeah, it&#8217;s also a new technology stack. So let&#8217;s say you want to be involved in WordPress, but your expertise is more on the Python side, or Elastic Search or something like that. We now have a project where people who are into that or want to learn about it can get involved. Because, of course, you know, contributing and being involved with open source is probably the best way to learn a technology, better than any college degree.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>14:28</p>



<p>I was just talking to some folks about that; our active learning opportunities and our passive learning opportunities get into a different balance as we get older. And active learning opportunities are for real in school, right? And our passive learning opportunities where you get to look at someone else&#8217;s code, you get to review proposals on user flows, and things are harder and harder to come by unless you happen to be in an open source project where we&#8217;re just working on that in the open all day, every day. And I&#8217;ll put a link to the repos in the show notes, and also, I&#8217;ll include a list of the tech stack that we&#8217;re looking at there, just so that no one has to like, chase it down. But yeah, I&#8217;m excited about this new integration, not only for the CMS but also for the community.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>15:26</p>



<p>And the whole library will be available to any plug-in who wants to call to it. And like we said, even other CMSs, much like we designed Gutenberg to be able to be used by other CMSs, how cool would it be if Drupal or Joomla or others were also able to leverage this library and allow their users to contribute to it as well?</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>15:47</p>



<p>Yeah, absolutely. Absolutely. There is a burning question that I feel like we probably should just go ahead and answer here. I&#8217;ve been asked a few times, and I think you have been asked a few times whether this is an actual acquisition. And If yes, then what entity is it under? Is it under the WordPress Foundation? Is it under Automattic?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>16:10</p>



<p>It&#8217;s a little complicated because, as you know, WordPress.org is not part of the Foundation. So basically, Automattic paid Creative Commons, the nonprofit. They will essentially redirect the old URL, so old links to Creative Commons Search won&#8217;t break. And we ended up hiring some of the people that they were parting ways with into Automattic. And then we put that open source code, and we&#8217;ll run the service on WordPress.org, and then those we hired, Automattic hired, will contribute to WordPress.org and the open source projects that power what we&#8217;re calling Openverse now.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>16:54</p>



<p>I am.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>16:56</p>



<p>That&#8217;s kind of an acquisition, but also from a nonprofit, and then going into something, which is not a nonprofit, but is open source and sort of freely available, which is WordPress.org, the website.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>17:06</p>



<p>Yeah, that has been hard for me to answer because you&#8217;re right, it&#8217;s not like it was donated to WordPress or something. But everything that we&#8217;re doing is being donated back to the project, and of course, hopefully, really living into that WordPress ethos that we have of giving back to, to the project, something that made your work and your life better. So there&#8217;s some, some finger-crossing going on in there.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>17:37</p>



<p>We could have skipped some of the steps because the code was open source; we could have just used it or something like that. But it was also a good opportunity, I think, to support the Creative Commons organization. And like we said, as part of that donation, there&#8217;ll be redirecting Creative Commons Search to WordPress.org. And honestly, we don&#8217;t need that, but it just from the point of view of keeping links workings, which is a big passion of mine. I like that none of the links will break or things to the Creative Commons Search, which I think has been around for&#8230; I don&#8217;t actually know the exact timeline, but a very long time. It&#8217;s been part of the internet for a long time. So we&#8217;re happy that it can now continue and be something that can plausibly be around for many decades to come.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>18:23</p>



<p>Yeah, we&#8217;re going to build ourselves a little sustainable program around this project, and it&#8217;s going to be beautiful; I&#8217;m excited.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>18:31</p>



<p>I did want to give everybody a cultural heads up. When I say crossing my fingers, I know that for some of our cultures, that means I was lying. That is not what I&#8217;m saying—crossing my fingers and moving forward on this with a lot of hope.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>18:51</p>



<p>I tried to be careful about my local idioms when I&#8217;m talking to folks who don&#8217;t know that I&#8217;m from Arkansas, so I sometimes say weird things. But I&#8217;ve given up on y&#8217;all, for instance, like that has made its way right back into my language.&nbsp;</p>



<p><strong>Matt Mullenweg&nbsp; </strong>19:09</p>



<p>Y&#8217;all is great. In Texas, we had a funny thing, which maybe applies to you now, which is &#8220;more nervous than a long-tailed cat in a room full of rocking chairs.&#8221; I bet you haven&#8217;t heard that one.&nbsp;</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>19:21</p>



<p>I have not, but I love it, and I&#8217;m going to fold it into my personal vocabulary for later use.&nbsp;</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>19:30</p>



<p>The response to this has been overwhelmingly positive, and I know that I am incredibly positive. I just mentioned like I&#8217;m moving forward through this with hope, even though there&#8217;s a lot of stuff that I don&#8217;t actually know about how we can implement it. I have never brought an existing open source community into an open source community that I&#8217;m currently working with. So there&#8217;s a lot of learning to be done in there. But, from your side Matt, like, are there any things that you are feeling anxiously hopeful about for this? Anything that you hope is right, but you&#8217;re not sure about?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>20:14</p>



<p>Oh, this is just the first step of many. So just having the search engine, is I think good to provide a service to the internet. But where we can really leverage it is those next steps we already talked about, which is really building out the API and integrating the API with the WordPress admin to make it easily accessible within people&#8217;s dashboards. And the Gutenberg blocks to embed these images, quickly and easily, and with all the proper credit and everything. And then the next step, which was probably the one I&#8217;m most excited about, which is enabling folks to contribute to the Creative Commons. And by that, I mean the Commons of Images, which have open licenses and are encouraged for reuse and remixing and all those sorts of great things. And I think that anything we can do to increase more of that stuff on the internet also enables a lot of creativity and innovation.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>21:10</p>



<p>All right. Well, that was an excellent conversation. I am really excited about this. I want to, for my work, just say a huge welcome to the folks over at CC Search and our brand new group around Openverse, and a big thanks to the folks over at the Creative Commons group. Matt, do you have anything else you want to share with any of our audience?</p>



<p><strong>Matt Mullenweg&nbsp; </strong>21:39</p>



<p>No, I feel great that we could support the Creative Commons, keep this going for the open internet, and so excited to work alongside the folks who have been working on Openverse and take it to the next iterations and the next level.&nbsp;</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>21:56</p>



<p>Beautiful. Well, Matt, thank you so much for joining me today. This was a wonderful conversation. My friends, this has been Matt Mullenweg, WordPress project co-founder, and project lead.</p>



<p><strong>Matt Mullenweg&nbsp; </strong>22:08</p>



<p>Thank you so much for having me.</p>



<p><strong>Josepha Haden Chomphosy&nbsp; </strong>22:17</p>



<p>Thank you for tuning in today to the WordPress Briefing. I hope that conversation made you as excited as I am about this new adventure that we&#8217;re embarking on with CC Search and that whole team. I&#8217;m going to put in the show notes a few links to where you can find them, where they&#8217;re doing their work, what you can collaborate on, and also some notes about the tech stack that goes into it. I&#8217;m your host, Josepha Haden Chomphosy.Thanks again for joining me and I&#8217;ll see you in a couple of weeks.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 10 May 2021 12:00:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Chloe Bringmann";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:133:"Gutenberg Times: Introduction to Global Styles, Block-based Themes and Two weeks of virtual WordPress events – Weekend Edition #168";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=17764";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:138:"https://gutenbergtimes.com/introduction-to-global-styles-block-based-themes-and-two-weeks-of-virtual-wordpress-events-weekend-edition-168/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:16152:"<p>Howdy,  my friends! </p>



<p>Hope you are all well. This week was a little less hectic, nevertheless again lots of information to digest about the block-editor and the upcoming WordPress 5.8 release. </p>





<p>Today, you&#8217;ll find some great actionable tutorial, articles and tools. Again, I marvel at the extraordinary generosity of the people in the WordPress community from around the World. If you find something that&#8217;s useful to you, please let the authors. Most of them have a Twitter account that&#8217;s linked with the link to their contribution. </p>



<p>Be well, be safe! </p>



<p>Yours, 💕 <br />Birgit </p>



<h2>Updates from the Gutenberg and Core Teams</h2>



<p><strong>Anne McCarthy</strong> posted the summary of finding of the <a href="https://make.wordpress.org/test/2021/05/06/fse-program-query-quest-summary/">Query Quest</a>. This time, a 3 or so dozen user from Japan took part in this call for testing.  Members on the Italian Polyglott team translated the call, too. The circle of people testing has expanded quite a bit. </p>



<p>McCarthy also had two reminders for you: </p>



<ul><li>The second round Call for questions is still open &#8211; <a href="https://make.wordpress.org/test/2021/04/28/fse-program-bring-your-questions-round-two/">send in your FSE question and concerns.</a> Deadline is May 12, 2021 </li><li>The next call for testing will be published on May 12, 2021 on the <a href="https://make.wordpress.org/test/">Make blog of the Test team,</a> so clear out an afternoon in your week and reserve it for the next WordPress testing round. You&#8217;d be helping improve software, used by many, many millions of users. </li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>Hector Pietro</strong>, technical lead on the Gutenberg project Phase 2, <a href="https://make.wordpress.org/core/2021/05/07/whats-next-in-gutenberg-may-2021/">published the focus post for the team for May 2021.</a> There are no particular surprises listed, as the focus is getting a few projects ready to be merged with Core, but this post also aims beyond the feature Freeze on May 19 for block-editor features, RC 10.7. For Theme builders and developers, he also has a section on what particularly we all need to be aware of. </p>



<hr class="wp-block-separator is-style-wide" />



<p>In anticipation, that the Widget block editor will land in WordPress Core, contributors <strong><a href="https://twitter.com/hellofromTonya">Tonya Mork</a></strong> and <strong>Andrew Ozz</strong> published the <strong><a href="https://wordpress.org/plugins/classic-widgets/">Classic Widget Screen plugin</a>,</strong> that allows you to opt-out of the new feature. Plugin and Theme developers can opt-out via this code snippet <code>remove_theme_support('widgets-block-editor')</code>.<a href="https://github.com/WordPress/classic-widgets"> Connect via GitHub</a> for issues and contributions. <strong>Justin Tadlock</strong> took the plugin for a spin and wrote a review: <a href="https://wptavern.com/classic-widgets-plugin-disables-wordpress-5-8s-upcoming-block-based-widgets-system">Classic Widgets Plugin Disables WordPress 5.8’s Upcoming Block-Based Widgets System</a>. </p>




<p>🎙️ <a href="https://gutenbergtimes.com/podcast/changelog-43-block-patterns-directory/"><strong>Episode #43 is now available with Show notes and transcript</strong></a> Greg and I discussed Gutenberg 10.5, the Block Patterns Directory and a Call for Testing for WordPress 5.8 Release. </p>



<hr class="wp-block-separator is-style-wide" />



<p><strong>Subscribe to the Gutenberg Changelog via your favorite podcast apps! </strong><br />🎙️ <a href="https://open.spotify.com/show/620NwVKQJGdTupy36zYxvg?mc_cid=4b6c9f88fe">Spotify</a> | <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9ndXRlbmJlcmd0aW1lcy5jb20vZmVlZC9wb2RjYXN0">Google</a> | <a href="https://podcasts.apple.com/us/podcast/gutenberg-changelog/id1469294475">iTunes</a> | <a href="https://pca.st/podcast/f8445ec0-7508-0137-f267-1d245fc5f9cf">PocketCasts</a> | <a href="https://www.stitcher.com/show/gutenberg-changelog">Stitcher</a> | <br />🎙️ <a href="https://www.podbean.com/podcast-detail/chi7j-9904a/Gutenberg-Changelog-Podcast">Pod Bean</a> | <a href="https://castbox.fm/channel/Gutenberg-Changelog-id2173375">CastBox</a> | <a href="https://www.podchaser.com/podcasts/gutenberg-changelog-878239/">Podchaser</a> | <a href="https://gutenbergtimes.com/feed/podcast">RSS Feed</a>&nbsp;</p>



<div class="wp-block-image"><img /></div>



<p>If you have been a listener, please <a href="https://lovethepodcast.com/gutenbergchangelog">write a review </a>on iTunes, Stitcher, Podchaser or Castbox. We would love to read from you, and more reviews help with the distributions.</p>




<p>Speaking of podcasts: Grzegorz (Greg) Ziokowski and I talked with <strong><a href="https://twitter.com/palmiak_fp">Maciek Palmowski</a></strong> of WP Owl, about <strong><a href="https://wpowls.co/podcast/contributing-to-wordpress/">Contributing to WordPress</a></strong>, the inaugural episode for the new podcast WP Owlcast. We talked about the ins and outs of contributing to WordPress &#8211; about the various teams, how to get started, how to pace yourself, Five For the Future and so much more. </p>




<p><strong>&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/" target="_blank" rel="noreferrer noopener">&#8220;Keeping up with Gutenberg &#8211; Index 2021&#8221;</a>&nbsp;</strong><br />A chronological list of the WordPress Make Blog posts from various teams involved in Gutenberg development: Design, Theme Review Team, Core Editor, Core JS, Core CSS, Test and Meta team from Jan. 2021 on. <a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2020/">The index 2020 is here</a></p>




<h2>Building block-based Themes</h2>



<p><a href="https://twitter.com/Adelina_Tuca"><strong>Adelina Tuca</strong></a> of Themeisle interviewed <strong>Tammie Lister</strong>, design co-lead of Phase 1 of the block editor, now design lead at Extendify. <a href="https://themeisle.com/blog/tammie-lister-interview/">&#8220;We Made Themes Become Plugins by Forcing Them to Have Functionality That Shouldn’t Be There</a>&#8220;, Lister is quoted. It&#8217;s a great discussion around the reset on how themes are developed with the block-editor and how it will not only change the creativity and productivity, but also user experience for content creators.</p>



<hr class="wp-block-separator is-style-wide" />



<p><strong>Riad Benguella </strong>posted an <strong><a href="https://riad.blog/2021/05/05/introduction-to-wordpresss-global-styles-and-global-settings/">Introduction to WordPress’s Global Styles and Global Settings</a>.</strong> You can learn more about the thoughts behind the theme.json implementation for connecting your theme with all the block-editor features. For the first time in WordPress there is now a standard way for plugin block builders to be considerate about the theme developers design decisions and tap into its settings and styles. Be aware, although the theme.json implementation with come to WordPress core with 5.8, the Global Styles will still be experimental, so if you use them, they might change. </p>



<p><strong><a href="https://twitter.com/carolinapoena">Carolina Nymark</a></strong><a target="_blank" href="https://marketplace.visualstudio.com/items?itemName=CarolinaNymark.wordpress-block-markup" rel="noreferrer noopener"> </a>turned  <a target="_blank" href="https://marketplace.visualstudio.com/items?itemName=CarolinaNymark.wordpress-block-markup" rel="noreferrer noopener"><strong>her block markup snippets into </strong></a><strong><a target="_blank" href="https://marketplace.visualstudio.com/items?itemName=CarolinaNymark.wordpress-block-markup" rel="noreferrer noopener">VS Code</a> extension</strong> with it, you can add blocks to your full site editing templates faster by typing the name of the block and have VS Code auto-complete it for you. </p>




<p><strong><a href="https://gutenbergtimes.com/need-a-zip-from-master/">Need a plugin .zip from Gutenberg&#8217;s main (trunk) branch?</a></strong><br />Gutenberg Times provides daily build for testing and review. <br />Have you been using it? Hit reply and let me know.</p>



<p><img alt="GitHub all releases" src="https://img.shields.io/github/downloads/bph/gutenberg/total?style=for-the-badge" /></p>




<p> </p>



<h2>Block Editor for Content Creators</h2>



<p>If you are just now evaluating if the block editor is mature enough for your future client projects, or the right tool for your content production processes, <strong>Sam Wendland</strong> for WordPress VIP has some more in depth information:  <a href="https://wpvip.com/2021/04/09/how-the-wordpress-gutenberg-block-editor-empowers-enterprise-content-creators/"><strong>&#8220;How the WordPress Gutenberg Block Editor Empowers Enterprise Content Creators&#8221;</strong></a>.</p>



<h2>Block building for Developers </h2>



<p><a href="https://twitter.com/wpmark"><strong>Mark Wilkinson</strong> </a> of Highrise Digital share the <a href="https://www.youtube.com/watch?v=7HZ"><strong>10 lessons he learned from developing WordPress sites with the block editor</strong></a> in this video. He also posted a <a href="https://twitter.com/wpmark/status/1390594183271002112">Thread on Twitter</a> </p>



<hr class="wp-block-separator is-style-wide" />



<p><a href="https://twitter.com/kasparsdambis"><strong>Kaspars Dambis</strong> </a>from <strong>XWP</strong> describes how to manage dependencies when creating your Gutenberg blocks in his post: <a href="https://xwp.co/javascript-dependencies-wordpress-blocks/"><strong>Managing Javascript Dependencies for WordPress Blocks</strong></a></p>



<hr class="wp-block-separator is-style-wide" />



<p>In his tutorial <a href="https://millan.dev/2021/05/02/tutorial-convert-shortcodes-into-blocks"><strong>Convert Shortcodes into blocks</strong></a> <strong><a href="https://twitter.com/milangd">Milan Petrovic</a></strong> explains how to reuse shortcodes code and develop blocks for the block editor with support for sidebar settings</p>



<h2 id="wpevents">Upcoming WordPress Events</h2>



<p><strong>10 &#8211; 14 May 2021</strong><br /><a href="https://pagebuildersummit.com?rpid=2&rpr=161"><strong>Page Builder Summit 2021</strong></a><br />Gutenberg is part of it with the following sessions: </p>



<ul class="has-small-font-size"><li><strong>How to turn Gutenberg into a Page Builder with Stackable</strong> w/ Benjamin Intal</li><li><strong>Don’t Compete with Gutenberg &#8211; Embrace It</strong> w/ Danielle Zarcaro</li><li><strong>Google&#8217;s Core Web Vitals &#8211; Get Green With Gutenberg</strong> w/ Jake Pfohl</li><li><strong>Creating newsletters in the Gutenberg block editor</strong> w/ Lesley Sim</li><li><strong>Building Fast, Block-Based Landing Pages</strong> w/ Mike Oliver</li><li><strong>Panel &#8211; Preparing for the future of WordPress </strong>&#8211; Supported by WordPress.com &#8211; Marjorie Asturias, Anne McCarthy and Donna Cavalier</li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>&nbsp;May 22-23, 2021</strong><br /><strong><a href="https://neo.wordcamp.org/2021/">WordCamp Northeast Ohio Region</a></strong><br />Two sessions and a Lighting talk about Gutenberg are on the <a href="https://neo.wordcamp.org/2021/schedule/">schedule </a></p>



<ul class="has-small-font-size"><li><strong>Anatomy of a Block Theme for Full Site Editing </strong>w/ Daisy Olson </li><li><strong>Web Components in WP, Gutenberg and as HTML plugins</strong> w/ Craig West </li><li><strong>Lightning Talk: The power of reusable blocks w/ Daisy Olson</strong> </li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>May 24-28, 2021</strong><br /><strong><a href="https://wordsesh.com/?uid=6471">WordSesh 2021</a></strong><br />The <a href="https://wordsesh.com/#schedule">session schedule</a> is now available, too. Here is the list of Gutenberg talks: </p>



<ul class="has-small-font-size"><li><strong>Blazing Fast Block Development</strong> w/ Lee Shadle </li><li><strong>Building Custom Block</strong>s w/ Rob Stinson</li><li><strong>Block-Based Themes</strong> – <strong>The Future Of Full Site Editing In WordPress</strong> w/ </li><li><strong>How the Block Editor Makes It Easier to Build Custom Websites</strong> w/ Danielle Zarcaro </li><li><strong>Build your own Block-Based&nbsp;Theme</strong> w/ Daisy Olsen (Workshop)</li></ul>



<hr class="wp-block-separator is-style-wide" />



<p><strong>June 7 &#8211; 9th, 2021</strong><br /><strong><a href="https://europe.wordcamp.org/2021/">WordCamp Europe</a></strong><br />A virtual event and contributor day. <a href="https://europe.wordcamp.org/2021/call-for-sponsors/">Call for sponsors is open.</a></p>



<p><strong>June 20 &#8211; 26</strong><br /><strong><a href="https://japan.wordcamp.org/2021/">WordCamp Japan</a></strong><br /><em>The schedule has been posted. Most sessions will be in Japanese, with exceptions, I think&#8230; </em></p>



<p><strong>July 17 + 18th, 2021</strong><br /><strong><a href="https://santaclarita.wordcamp.org/2021/">WordCamp Santa Clarita</a></strong><br />Calls for speakers (May 30th), sponsors, volunteers and organizers are open. </p>



<p><strong>June 24 &#8211; 26, 2021</strong><br /><strong><a href="https://cochabamba.wordcamp.org/2021/">WordCamp Cochabama</a></strong> (Colombia) </p>



<p><strong>July 23, 2021</strong><br /><a href="https://www.wordfest.live/"><strong>WordFest Live </strong></a>&#8211; <em>The&nbsp;</em>festival of WordPress<br />Call for Speakers is now open and submissions are due on May 24th, 2021</p>



<p><strong>September 21 + 22, 2021</strong><br /><a href="https://2021.wpcampus.org/"><strong>WPCampus 2021 Online</strong></a><br />&#8220;A free online conference for web accessibility and WordPress in higher education.&#8221; <a href="https://2021.wpcampus.org/proposals">Call for Proposal is up</a> and proposal are due May 26, 2021</p>



<hr class="wp-block-separator is-style-wide" />



<p>On the<a href="https://wpcalendar.io/online/"> <strong>Calendar for WordPress Online Events</strong> </a>you can browse a list of the upcoming WordPress Meetups, around the world, including WooCommerce, Elementor, Divi Builder and Beaver Builder meetups. </p>




<p><em>Featured image: <a target="_blank" rel="noreferrer noopener" href="https://www.flickr.com/photos/116417508@N06/32958126080">&#8220;Tiny City Block Building&#8221;</a>&nbsp;by&nbsp;<a href="https://www.flickr.com/photos/116417508@N06" target="_blank" rel="noreferrer noopener">Matt Henry photos</a>&nbsp;is licensed under&nbsp;<a href="https://creativecommons.org/licenses/by/2.0/?ref=ccsearch&atype=rich" target="_blank" rel="noreferrer noopener">CC BY 2.0</a></em></p>





<hr class="wp-block-separator is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>



<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too and won&#8217;t give your email address to anyone except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>



<hr class="wp-block-separator is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 08 May 2021 20:23:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WPTavern: A Laptop and a Dream: Your Home Office Should Meet Your Needs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116269";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:185:"https://wptavern.com/a-laptop-and-a-dream-your-home-office-should-meet-your-needs?utm_source=rss&utm_medium=rss&utm_campaign=a-laptop-and-a-dream-your-home-office-should-meet-your-needs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4142:"<img />



<p class="has-drop-cap">I began my journey into remote work while teaching English as a Second Language (ESL) in South Korea. I was 23 years old at the time. By day, I spent my time wrangling elementary and middle-school kids. At night, I was writing tutorials, building themes and plugins, and taking any work that landed on my [figurative] desk.</p>



<p>My home office was my entire home, a spartan, one-bedroom/living/kitchen apartment. My workstation was a bed with several pillows piled up for back support.</p>



<p>My first client contract was signed, developed, and completed on that bed. I made a mere $300 for creating a per-post thumbnail system for a popular blog (yes, I way undervalued my work). This was long before WordPress launched its featured image system.</p>



<p>I was living the dream. Young and hungry, I took whatever odd jobs I could in preparation for eventually running my own WordPress-related business. Some nights, I would put in eight hours or more. On the weekends, I rarely actually slept in that bed. It had become my office chair. My lap was my desk.</p>



<p>In the back of my mind, I suppose I always thought I would get a <em>proper</em> office. It would have all the bells and whistles like separate monitors for different tasks instead of tabs on a single screen. I would have the best mic and speaker setup &mdash; including the kitchen sink.</p>



<p>After nearly a decade and a half, I realized I never needed all of that stuff. My laptop and I got along just fine. Of course, like many people, I tend to get stuck in my ways, looking for any excuse to not change.</p>



<p>When I see articles like &ldquo;<a href="https://www.cnn.com/2021/03/18/success/home-office-design-setup-remote-work/index.html">It&rsquo;s been a year. Here&rsquo;s what your home office should look like</a>,&rdquo; written by Kathryn Vasel for CNN Business, I tend to cringe before diving into it. There are some good takes in the article, such as getting natural light, taking breaks, and adjusting your posture.</p>



<p>My idea of &ldquo;what your home office should look like&rdquo; is that it should be what makes you feel comfortable with the tools that allow you to do the job. For some folks, that is a laptop and a standing desk. For others, it includes specialized audio and video equipment.</p>



<p>If you can afford it, I would at least recommend getting a good office chair. If you sit at a desk much of the day, skimp on the desk and other tools first.</p>



<p>On the subject of affordability, it is also good to be mindful that a home office is a luxury, a privilege that few have. Like that small-town Alabama boy with his $400 Walmart computer in Korea, sometimes people just have to get by with what they have on hand.</p>



<p>Now, 14 years later, I do have a home office. Like the first, it is spartan. It has the tools I need, and that is what I love about it. I do not spend all day in it. I prefer to move around from spot to spot.</p>



<ul><li class="blocks-gallery-item"><img />Simple desk and chair.</li><li class="blocks-gallery-item"><img />Cats included.</li></ul>



<p>On days like today, those with mid-70s temps (Fahrenheit for all the non-Americans) and a slight breeze in the air, I like to sit on the back patio. I enjoy the birds singing. It is a good time of the year to watch the little ones learn to forage their own food. I keep an eye on the squirrels, making sure their mischievousness is limited to sneaking a few nuts from the bird feeders.</p>



<p>It is also another reason I have always preferred a laptop over a desktop. Its utility allows me to lug it from the couch or desk to a spot outside amid nature.</p>



<p>While much of the world&rsquo;s workforce is still figuring this whole remote, work-from-home thing out, many in the WordPress community have this down to a science. Or, at least, they know what works for them. I would love to hear and see (share pics in the comments &mdash; <a href="https://wordpress.org/support/article/embeds/#okay-so-what-sites-can-i-embed-from">embeds are enabled</a>) what your home offices are like.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 07 May 2021 22:23:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:95:"WPTavern: Classic Widgets Plugin Disables WordPress 5.8’s Upcoming Block-Based Widgets System";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116237";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:229:"https://wptavern.com/classic-widgets-plugin-disables-wordpress-5-8s-upcoming-block-based-widgets-system?utm_source=rss&utm_medium=rss&utm_campaign=classic-widgets-plugin-disables-wordpress-5-8s-upcoming-block-based-widgets-system";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4042:"<p class="has-drop-cap">Yesterday, WordPress released a core plugin named <a href="https://wordpress.org/plugins/classic-widgets/">Classic Widgets</a>. Core contributors Tonya Mork and Andrew Ozz created the plugin under the WordPress Contributors account. It allows end-users to disable the upcoming block-based widgets system. Support is expected through 2022 or as long as necessary according to the plugin description.</p>



<p>Decided last month by a small group of core leads following a demo, <a href="https://wptavern.com/full-site-editing-is-partly-a-go-for-wordpress-5-8">WordPress 5.8 will ship several sub-components</a> from its Full Site Editing project. FSE encompasses several self-contained parts that grant users broader control over the design and layout of their sites. One of those pieces is an overhaul of the widgets system.</p>



<p>Widgets will one day become a legacy feature of the platform. However, they are not disappearing any time soon. During the transition from the pre-block era of WordPress to the eventual incorporation of all the sub-components of FSE, users and theme developers will sometimes need smaller stepping stones. Block-based widgets give users more ways to work with blocks outside of the post content area without diving head-first into an entire block-based experience.</p>



<p>This is the first time many in the larger WordPress user community will be exposed to blocks in a new context. The editor that launched in WordPress 5.0 focused solely on the post content. The widgets system in 5.8 turns classic sidebars into block containers.</p>



<p>In short, users will be able to stick any block in any sidebar.</p>



<img />Block-based widgets screen.



<p>This is a welcome step in transitioning users in the long run, especially those who use classic themes, which is still the majority of all users. However, there are cases where the Classic Widgets plugin will be necessary. The biggest will be:</p>



<ul><li>Broken themes or quirky output.</li><li>Users simply preferring the old system.</li></ul>



<p>Whatever the case may be, the plugin handles the switch.</p>



<p>For those wondering why the core development team is not making sure block-based widgets work with all themes, it is because the two systems are not exactly alike. Plus, every theme design handles its sidebar output in its own way. There is no way to ensure 100% coverage.</p>



<p>Many themes will have no issues at all. Some sidebars, depending on the design, could entirely break down. More likely than broken, custom sidebar and widget designs could simply look &ldquo;off&rdquo; on the front end.</p>



<p>For example, compare a Heading block followed by the Archives block (first image) against the classic Archives widget (second image) when using the Twenty Fifteen theme:</p>



<ul><li class="blocks-gallery-item"><img />Block &ldquo;widget&rdquo;</li><li class="blocks-gallery-item"><img />Classic widget</li></ul>



<p>The typography of the Heading is different, and there is too much space below it. That is not an end-of-the-world scenario. It is the sort of quirk that may be common with many themes, at least until theme authors have had time to push out updates.</p>



<h2>What Happens When Activating the Plugin?</h2>



<img />Classic widgets screen.



<p class="has-drop-cap">Classic Widgets has no settings screen or anything to configure. It is a set-it-and-forget-it plugin. Its goal is to simply return users to the traditional widgets system in which they are familiar.</p>



<p>If you start using the new block-based widgets system, you will lose all of your widget blocks upon activating the plugin. There is no going back, so be sure this is what you want. The former blocks will not reappear if you change your mind and deactivate Classic Widgets.</p>



<p>However, if you add traditional widgets to your theme&rsquo;s sidebars while the plugin is active, you will not lose them. They will still appear on both the front and back end if you deactivate the plugin.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 06 May 2021 21:39:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:101:"WPTavern: Dark Mode Plugin Repurposed and Renamed to WP Markdown Editor, Change Leaves Users Confused";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116107";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:245:"https://wptavern.com/dark-mode-plugin-repurposed-and-renamed-to-wp-markdown-editor-change-leaves-users-confused?utm_source=rss&utm_medium=rss&utm_campaign=dark-mode-plugin-repurposed-and-renamed-to-wp-markdown-editor-change-leaves-users-confused";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8671:"<p class="has-drop-cap">Last year, I asked Tavern readers if WordPress should <a href="https://wptavern.com/should-wordpress-notify-users-of-plugin-ownership-changes">notify end-users when a plugin&rsquo;s owner changes</a>. The post was not entirely based on theory. There have been some cases of real-world confusion. The consensus from the comments on that post seemed to be that, yes, such notifications would be welcome.</p>



<p>When I wrote that post, there was already another plugin changing hands. <a href="https://wordpress.org/plugins/dark-mode/">Dark Mode</a>, which had grown in popularity in its earlier years, had a new owner, WPPool. There were no public notifications of this ownership change. A mere <a href="https://github.com/azizultex/Dark-Mode/issues/173">GitHub issue filed</a>, a corner of the web that few users venture.</p>



<p>Fast forward a few months, and Dark Mode had not only changed owners, but it also had a new name and set of features unrelated to the plugin&rsquo;s original promise. The plugin is now named WP Markdown Editor and bundles at least part of the commercially available <a href="https://useiceberg.com/">Iceberg Editor plugin</a>. It is also a limited version in which users are prompted to upgrade for the complete feature set.</p>



<img />WP Markdown Editor (formerly Dark Mode).



<p>Iceberg is licensed under the GPL version 2, so it is legal for anyone to fork it. However, there does not seem to be any mention of the copyright, and only a few references to the original product remain in the source code.</p>



<p>While I did not perform a line-by-line comparison, it is clearly a fork when examining both plugins. However, the company has also built upon it with new features.</p>



<img />Iceberg Editor.



<p>&ldquo;We have recently added productivity sounds, new fonts (more legibility and one for Dyslexic users), which we think definitely adds value to new users,&rdquo; said the WPPool Team<sup><a href="https://wptavern.com/feed#footnote-1">[1]</a></sup>.</p>



<p>WPPool <a href="https://wppool.dev/introducing-wp-markdown-editor/">announced the WP Markdown Editor plugin</a> in November 2020. However, the post was written as if it was a new product. Technically, it was, but there was no mention of repurposing an existing plugin to launch the features.</p>



<p>The company reached out to the Dark Mode plugin owner in August 2020, which seemed to have changed hands a couple of times, at least. &ldquo;The plugin was discontinued, lacking security updates, compatibility with latest PHP versions, and the project was abandoned,&rdquo; said the WP Pool Team.&rdquo; And, since the last few updates, it was apparent that Classic Editor is not going to stay the same. Gutenberg was the future, and we wanted to give users a Dark Mode for Gutenberg as well.&rdquo;</p>



<p>WPPool was able to adopt the plugin. The company kept the Dark Mode feature original to the plugin. However, they eventually began tacking on new features.</p>



<p>&ldquo;Our intention was to add more features on top of it,&rdquo; said the WPPool Team. &ldquo;Why not create a new plugin? Because the plugin was already being abandoned, and we thought why not add some more features, keep the old functionality intact as well, and put regular updates?&rdquo;</p>



<p>The change clearly left some users frustrated and confused about what was happening with the plugin. Many had installed it in hopes of having a simple method of toggling on a dark mode for the WordPress admin interface.</p>



<img /><a href="https://wordpress.org/support/plugin/dark-mode/reviews/">Reviews</a> after the change.



<p>The plugin now has an &ldquo;Only Dark Mode&rdquo; setting, an option that users can enable to remove the additional features. It is disabled by default.</p>



<p>When asked about whether the addition of seemingly unrelated features abused user trust, the WPPool Team replied, &ldquo;The problem was, since the last few updates of Gutenberg and Classic Editor &mdash; Classic Editor uses an iframe to load its content. It&rsquo;s not possible for the Dark Mode plugin to serve the Dark Mode in Classic Editor anymore. That&rsquo;s why some users were really frustrated. We really tried hard to restore that functionality to Classic Editor as well, but the way it is, we couldn&rsquo;t find a way to invoke Dark Mode on Classic Editor.&rdquo;</p>



<p>While some support questions and reviews indicate the frustration with losing Classic Editor support, many others questioned the addition of features that make little sense as part of a dark-mode plugin.</p>



<p>&ldquo;This used to be a dark mode feature plugin, but now it&rsquo;s been turned into a Markdown editor,&rdquo; <a href="https://wordpress.org/support/topic/markdown-editor-3/">wrote Derrick Tennant</a>, an earlier contributor to the plugin. &ldquo;A complete bait and switch.&rdquo;</p>



<p>Another user named <em>rehoff</em> <a href="https://wordpress.org/support/topic/another-one-bites-the-dust-2/#post-14197364">had similar concerns</a>, stating, &ldquo;I still believe that it is not ok to so radically repurpose an otherwise popular plugin. I find it misleading.&rdquo;</p>



<p>Back to the original question I posed last year, another user summed up the answer with a review titled &ldquo;<a href="https://wordpress.org/support/topic/this-plugin-has-been-sold-for-sure/">This plugin has been sold for sure</a>.&rdquo;</p>



<p>In private, one person has said that it feels like the team is capitalizing on the plugin&rsquo;s active install base, which currently sits at 3,000+.</p>



<p>Adding to the potential confusion, the company has a separate and unrelated plugin named <a href="https://wordpress.org/plugins/wp-dark-mode/">WP Dark Mode</a>. A <a href="https://wordpress.org/support/topic/do-not-install-deceptive-developer/">reviewer noted on that plugin</a>:</p>



<blockquote class="wp-block-quote"><p>This same developer had another plugin called Dark Mode. They apparently sold the plugin to someone and now it&rsquo;s a random Markdown plugin with a terrible UI. All of a sudden, this random Markdown editor that I don&rsquo;t want or need is on my site.</p><p>Who knows what this plugin will become when they get enough users and decide to CA$H IN AGAIN??</p><p>If you like having random plugins installed on your site, give it a whirl. Otherwise it may be best to look for a different solution.</p></blockquote>



<p>This case is unique because the Dark Mode plugin was once a <a href="https://wptavern.com/dark-mode-is-possibly-coming-to-a-wordpress-dashboard-near-you">feature proposal for core WordPress</a>. Daniel James, the original creator, started the process to make this a reality in 2018. There was support for the idea, but it never jumped the hurdles needed for inclusion or a more formal proposal.</p>



<p>James put the plugin <a href="https://wptavern.com/dark-mode-wordpress-plugin-up-for-adoption">up for adoption in 2019</a>, stating that he was stepping back from plugin development but hoped that someone would pick it up. David Gwyer <a href="https://wptavern.com/dark-mode-wordpress-plugin-up-for-adoption#comment-282848">picked it up</a> shortly after, eventually making two updates to the plugin. The plugin&rsquo;s <a href="https://plugins.trac.wordpress.org/log/dark-mode/">commit history</a> shows that Tennant started contributing several months later before WPPool landed on the scene.</p>



<p>While Dark Mode was never officially endorsed by WordPress or given the green light for merging into the core platform, there was still a level of trust that some might expect from a plugin that was at least proposed as a feature.</p>



<p>Perhaps this is one of those cases where an ownership-change notification would have been warranted, but that notice would not have solved the issues that came months later.</p>



<p>The developers did note the new Markdown editor in the plugin&rsquo;s change log: &ldquo;New: Write post/ page with markdown syntax (Markdown Editor).&rdquo; However, it is doubtful the average user read or understood what that meant. Maybe a more thorough disclosure system is necessary, and would such a system cover cases where plugins are repurposed?</p>



<hr class="wp-block-separator" />



<p id="footnote-1"><strong>1:</strong> I have attributed quotes to the &ldquo;WPPool Team&rdquo; throughout this article. I was able to reach the company through their Facebook chat. However, the team did not provide a person&rsquo;s name and role within the company for attribution. At the moment, I still do not know which employee(s) I spoke with directly.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 05 May 2021 22:51:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:87:"WPTavern: Jetpack 9.7 Makes More Features Available without Connecting to WordPress.com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116112";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:219:"https://wptavern.com/jetpack-9-7-makes-more-features-available-without-connecting-to-wordpress-com?utm_source=rss&utm_medium=rss&utm_campaign=jetpack-9-7-makes-more-features-available-without-connecting-to-wordpress-com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2707:"<p><a href="https://jetpack.com/2021/05/04/97-improvements-for-your-site/">Jetpack 9.7</a> was released today with updates under the hood that ensure the plugin&rsquo;s blocks are compatible with the <a href="https://wordpress.org/news/2021/04/curious-about-full-site-editing/">full-site editing</a> features coming in WordPress 5.8. It also changes how sites access features that require the WordPress.com infrastructure.</p>



<p>A <a href="https://github.com/Automattic/jetpack/pull/19637">pull request</a> merged in version 9.7 changes the connection flow to make Jetpack active as soon as the plugin enables a site level connection, instead of requiring a user to authenticate with WordPress.com in order for it to work. This is what the Jetpack team has been referring to as &ldquo;user-less&rdquo; in development.</p>



<p>The <a href="https://github.com/Automattic/jetpack/pull/19614">copy has been updated</a> for this step so that after Jetpack is connected on a site level, it says, &ldquo;Jetpack is activated! Unlock more amazing features by connecting a user account.&rdquo; </p>



<p>Jetpack users who connect their sites will immediately have access to Stats, Site Accelerator, most Jetpack blocks, widget visibility, SEO tools, Related Posts, Likes, and many more modules. Other features, such as Publicize, Activity Log, Monitor, and Backup require you to authorize Jetpack to perform these actions on your behalf.</p>



<p>A new documentation <a href="https://jetpack.com/support/why-the-wordpress-com-connection-is-important-for-jetpack/">page</a> details why a WordPress.com connection is necessary for certain features, bringing more transparency to what has been a contentious topic in the past. The new page outlines which features are available for site connections versus authenticated WordPress.com accounts. These specific updates in 9.7 do not change any of the data or activity that Jetpack tracks or uses.</p>



<p>The general public was not privy to the product discussion behind making more features immediately available to user-less accounts, but there are a few reasons this is a good business idea. It allows users to get started faster so they get hooked into using more features on their sites before being forced to connect to a WordPress.com account. This will likely reduce the number of users who install the plugin but decide not to move forward because of needing to connect an account.</p>



<p>Jetpack 9.7 also brings performance improvements to the Carousel feature, several bug fixes for Instant Search, and more. The full list of enhancements and fixes can be found in the <a href="https://wordpress.org/plugins/jetpack/#developers">changelog</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 05 May 2021 03:35:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: It Is Time for WordPress Theme Authors To Step Up Their Block Pattern Game";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=116137";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:213:"https://wptavern.com/it-is-time-for-wordpress-theme-authors-to-step-up-their-block-pattern-game?utm_source=rss&utm_medium=rss&utm_campaign=it-is-time-for-wordpress-theme-authors-to-step-up-their-block-pattern-game";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7703:"<p class="has-drop-cap">Going through my routine this week, I skimmed the latest WordPress theme releases and found a new project that supported the block editor.  It even shipped a few custom patterns. While the design was nothing extraordinary, it was a solid theme overall. However, after spending the better part of today writing about it, I did not think I could move forward with the story. Something was bugging me.</p>



<p>It was the same thing I have felt with several others as of late. There were too many missed opportunities. The theme had the foundation, the underlying potential, to be more than it was.</p>



<p>The theme had a commercial &ldquo;pro&rdquo; version that users could purchase. However, nearly every pro feature relied on old-school tactics of upselling extra theme options. The one exception was a block-related feature that will be free as part of the Global Styles component likely to ship with WordPress later this year.</p>



<p>Where were the custom block styles? Where could a user snag some unique patterns? Extra nav menus, sidebars, color settings, and typography options are becoming less and less of a value-add for end-users. It is probably safe money right now, and I can understand the comfort of not taking too many chances.</p>



<p>Theme authors need to start shifting gears. Upsells need to come in the form of features that will not be available from stock WordPress. Right now, that means building unique block patterns and styles.</p>



<h2>Exploring Pattern Ideas</h2>



<p class="has-drop-cap">In the last month, I have been tinkering with custom patterns. While I was in the design and development business for over a decade, what I was able to accomplish with the block editor alone &mdash; using no custom code &mdash; and a well-rounded block-ready theme is merely scratching the surface. We have far better talent in the WordPress community, and I want to see their artistry unleashed.</p>



<p>It all started with the WP Tavern <a href="https://wptavern.com/podcast">Jukebox podcast</a> &mdash; you should check out episodes <a href="https://wptavern.com/podcast/1-josepha-haden-chomphosy-on-the-past-present-and-future-of-wordpress">#1</a> and <a href="https://wptavern.com/podcast/2-anne-mccarthy-on-how-full-site-editing-will-impact-wordpress">#2</a> if you have not heard them already. Nathan Wrigley, the new host, pushed me enough to put my design-and-dev cap back on to implement some features that he needed. Over the years, I have not worked much with podcasting or any type of audio. This was new territory for me. Ultimately, the podcast inspired me to think about audio patterns.</p>



<p><em>What is possible with WordPress&rsquo;s editor today?</em></p>



<p>I scoured the web for various layouts, looking for modern audio presentations. Numerous concepts were impossible for an end-user to implement from the editor alone. They would need extensive custom block styles from the themes themselves. And, there were several designs that I simply did not think could be done at all, but these typically had plugin-territory elements.</p>



<p>However, I did find ideas that I could run with and make my own. I started with a simple audio file from <em>The Martian</em> soundtrack &mdash; I had re-watched the movie the night before and was on a David Bowie kick.</p>



<img />Soundtrack single audio pattern.



<p>It was simple. Just add Group, Columns, Image, Paragraph, Heading, Audio, and Social Icons blocks. I was happy with the result, and some of my Twitter followers <a href="https://twitter.com/justintadlock/status/1380199029955567623">responded positively</a>.</p>



<p>Inspired by the support, I created an alternative layout. It was even simpler by adding Cover, Paragraph, Heading, Audio, and Social Icons blocks.</p>



<img />Audio embed pattern nested in a Cover block.



<p>Based on the original pattern, I built one that used a SoundCloud embed instead of the Audio block. I also created another with some alterations that catered more toward podcasters.</p>



<ul><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li></ul>SoundCloud audio and podcasting patterns.



<p>As I dived deeper into this project, the more capable I became at creating layouts. I began to understand what some of the limitations were and piecing everything together around them.</p>



<p>One of the most problematic areas with the editor is that it does not hand over enough spacing control. Therefore, I had to make liberal use of the Spacer block, something I prefer not to use because it relies on pixel units and puts an extra <code>&lt;div&gt;</code> into the markup. To build some patterns, I had to become a little less of a purist and just use the available tools.</p>



<p>That change in mindset opened some more possibilities. I built a couple more audio-related block patterns. They were, again, simple layouts, but I wanted to make them stand out visually with imagery that end-users could add. The goal is to give users one-click access to pre-designed sections, starting points where people can showcase their own creativity.</p>



<ul><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li></ul>DJ and musician block patterns.



<p>The next step was to start thinking beyond audio patterns. There is so much more others can do in that space. I wanted to venture out a bit more.</p>



<p>I have since built several other patterns like the following news-type article header that I would love to use on the Tavern in the future:</p>



<img />News or data-driven article header pattern.



<p>I could share more concepts, but this seems like an ideal place to stop. The goal is not to showcase my portfolio of patterns. It is to inspire our theme design community in hopes that they build something far better. I also wanted to show how easy it was to pop out a few patterns. Instead of hours of development time, many ideas were cut down to mere minutes. That is the power the block system provides today.</p>



<p>When I wrote about the block system creating <a href="https://wptavern.com/block-system-will-create-more-commercial-opportunities-for-wordpress-theme-authors">commercial opportunities for theme authors</a> in January, it was a theoretical post. This is a follow-up that puts it into a little more practice (without the actual selling, of course).</p>



<p>Imagine, as a theme company, you are building a freemium theme for musicians. You might want to include a few base patterns for users to choose from. However, there is an endless number of alternatives you could offer as part of a pro package.</p>



<p>I am sure there is already a theme author/company out there right now with a multi-purpose theme concept in mind that will eventually have hundreds of patterns. I can only hope that they have a solid categorization system or offer separate packages or imports.</p>



<p>The <a href="https://wptavern.com/first-look-at-initial-designs-for-wordpress-block-pattern-directory">block pattern directory</a> is slated to land alongside WordPress 5.8. At first, it will primarily be core patterns. However, others will be encouraged to contribute over time. This is a welcome feature for the platform, but it will never match every theme design perfectly. Each theme has its own design nuances. Each has different methods of solving problems.</p>



<p>The best patterns will come from theme authors themselves, especially when combined with custom block styles, packaged and marketed as part of their theme&rsquo;s experience. Developers can wait until the entire market catches up or jump ahead of the game.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 04 May 2021 23:08:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:" * data";a:8:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Sat, 29 May 2021 13:40:22 GMT";s:12:"content-type";s:8:"text/xml";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Sat, 29 May 2021 13:15:09 GMT";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:9:"HIT ord 2";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20201016172007";}}