<?php
/**
 * Plugin Name:       WP Kitchen Sink Draft
 * Plugin URI:        http://github.com/BeardedGinger/Genesis-Shortcodes
 * Description:       Adds a draft page to your site with all options available within the WYSIWYG
 * Version:           1.0.0
 * Author:            Josh Mallard
 * Author URI:        http://joshmallard.com
 * Text Domain:       gb-kitchen-sink
 * License:           GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'plugins_loaded', 'gb_kitchen_sink_draft' );

function gb_kitchen_sink_draft() {

	$post = array(
		'post_title' => __( 'Kitchen Sink', 'gb-kitchen-sink' ),
		'post_content' => gb_kitchen_sink_content(),
		'post_type' => 'page'
	)

	wp_insert_post( $post );
}

/**
 * gb_kitchen_sink_content function.
 * content callback for wp_insert_post
 *
 * @access public
 * @return string
 */
function gb_kitchen_sink_content() {

	ob_start(); ?>

	<h1>This is an H1 heading. How is it styled?</h1>
	<h2>Now here is an H2Êheading</h2>
	<h3>Marty McFly went to H3 in a time machine</h3>
	<h4>Doc Brown helped him get Back to the Future! (with an H4 of course).</h4>
	<h5>Watch out! Don't slip on that H5! You'll see visions of a flux capacitor.</h5>
	<h6>Make like a tree and get your H6 outta here!</h6>
	<h2>Now Headings with paragraph text</h2>
	Yes, yes, I'm George, George McFly, and I'm your density. I mean, I'm your destiny. George, buddy. remember that girl I introduced you to, Lorraine. What are you writing? I followed you. Look at the time, you've got less than 4 minutes, please hurry. Don't worry, I'll take care of the lightning, you take care of your pop. By the way, what happened today, did he ask her out?

	Oh, oh a rematch, why, were you cheating? We never would have fallen in love. I need fuel. Go ahead, quick, get in the car. About 30 years, it's a nice round number. Yeah I know, If you put your mind to it you could accomplish anything.

	Hello, Jennifer. One point twenty-one gigawatts. One point twenty-one gigawatts. Great Scott. Let's put him in there. Doc, Doc. Oh, no. You're alive. Bullet proof vest, how did you know, I never got a chance to tell you. About all that talk about screwing up future events, the space time continuum. What a nightmare.
	<h3>Yep! That is DeLorean Ipsum text</h3>
	You have this thing hooked up to the car? Well uh, good, fine. That's a big bruise you have there. Its good. Don't worry. As long as you hit that wire with the connecting hook at precisely 88 miles per hour, the instance the lightning strikes the tower, everything will be fine.

	[caption id="" align="alignleft" width="250"]<img src="http://placehold.it/250" alt="" width="250" height="250" /> A left aligned image[/caption]

	You have this thing hooked up to the car? Great Scott. Let me see that photograph again of your brother. Just as I thought, this proves my theory, look at your brother. C'mon man, let's do something that really cooks. You're gonna break his arm. Biff, leave him alone. Let him go. Let him go. Give me a hand, Lorenzo. Ow, dammit, man, I sliced my hand.
	<h4>What do you need that life vest for?</h4>
	Where the hell are they. That was so stupid, Grandpa hit him with the car. Marty, don't be such a square. Everybody who's anybody drinks. Biff. Doc, you gotta help me. you were the only one who knows how your time machine works.

	[caption id="" align="alignright" width="200"]<img src="http://placehold.it/200" alt="" width="200" height="200" /> A right aligned image with caption[/caption]

	You have this thing hooked up to the car? Well uh, good, fine. That's a big bruise you have there. Its good. Don't worry. As long as you hit that wire with the connecting hook at precisely 88 miles per hour, the instance the lightning strikes the tower, everything will be fine.
	<h5>Darth Vader visited me from Outer Space last night</h5>
	After I fell off my toilet, I drew this. Dammit, Doc, why did you have to tear up that letter? If only I had more time. Wait a minute, I got all the time I want I got a time machine, I'll just go back and warn him. 10 minutes oughta do it. Time-circuits on, flux-capacitor fluxing, engine running, alright. No, no no no no, c'mon c'mon. C'mon c'mon, here we go, this time. Please, please, c'mon. Please, Marty, don't tell me, no man should know too much about their own destiny. Well, she's not doing a very good job. When could weathermen predict the weather, let alone the future.
	<h6>I'll miss my favorite show, Mystery Science Theater</h6>
	I'm telling the truth, Doc, you gotta believe me. Like I always told you, if you put your mind to it you could accomplish anything. I'll be at my grandma's. Here, let me give you the number. Bye. Hey, Doc? Doc. Hello, anybody home? Einstein, come here, boy. What's going on? Wha- aw, god. Aw, Jesus. Whoa, rock and roll. Yo Hey, hey, Doc, where are you?

	[caption id="" align="aligncenter" width="200"]<img src="http://placehold.it/200" alt="" width="200" height="200" /> Center aligned image with caption[/caption]

	That was the day I invented time travel. I remember it vividly. I was standing on the edge of my toilet hanging a clock, the porces was wet, I slipped, hit my head on the edge of the sink. And when I came to I had a revelation, a picture, a picture in my head, a picture of this. This is what makes time travel possible. The flux capacitor. Excuse me. Well that's your name, isn't it? Calvin Klein. it's written all over your underwear. Oh, I guess they call you Cal, huh? Marty, that was very interesting music. You'll find out in thirty years.

	<hr />

	<strong>This is some bold text</strong>

	<em>This is some italicized text</em>

	<span style="text-decoration: underline;">This is some underlined text</span>

	<del>Strikethrough that text yo!</del>

	<span style="text-decoration: underline;"><em><strong>This is some text with all that crap above, except the strikethrough</strong></em></span>

	An unordered list
	<ul>
		<li>List item one</li>
		<li>List item 2</li>
		<li>List item 3</li>
		<li>List item 4</li>
	</ul>
	An ordered List! Oh yeah
	<ol>
		<li>List item one</li>
		<li>List item two</li>
		<li>List item three</li>
		<li>List item four</li>
	</ol>
	<blockquote>Hey, McFly, I thought I told you never to come in here. Well it's gonna cost you. How much money you got on you? Right. Who is that guy. I just wanna use the phone. Can I go now, Mr. Strickland?</blockquote>

	<hr />

	<h3>Testing text alignments</h3>
	Einstein, hey Einstein, where's the Doc, boy, huh? Doc No, bastards. Marty. Marty. Marty. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know who's gonna pay for this? I spilled beer all over it when that car smashed into me. Who's gonna pay my cleaning bill? What's that thing he's on?
	<p style="text-align: center;">Einstein, hey Einstein, where's the Doc, boy, huh? Doc No, bastards. Marty. Marty. Marty. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know who's gonna pay for this? I spilled beer all over it when that car smashed into me. Who's gonna pay my cleaning bill? What's that thing he's on?</p>
	<p style="text-align: right;">Einstein, hey Einstein, where's the Doc, boy, huh? Doc No, bastards. Marty. Marty. Marty. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know who's gonna pay for this? I spilled beer all over it when that car smashed into me. Who's gonna pay my cleaning bill? What's that thing he's on?</p>
	<p style="text-align: justify;">Einstein, hey Einstein, where's the Doc, boy, huh? Doc No, bastards. Marty. Marty. Marty. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know who's gonna pay for this? I spilled beer all over it when that car smashed into me. Who's gonna pay my cleaning bill? What's that thing he's on?</p>

	<hr />

	Check out the site where all this cool <a title="DeLorean Ipsum" href="http://www.deloreanipsum.com/" target="_blank">DeLorean Ipsum</a> comes from

	<address>Your address yo!123ÊHilldale St.</address><address>Hill Valley, CAÊ31111</address>
	<pre>Before there was style there was "pre". It was a dark and lonely day.</pre>

	<span style="color: #ff00ff;">PINK! I made this text PINK!</span>

	<?php
	$post_content = ob_get_clean();

	return $post_content;
}