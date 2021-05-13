<?php

add_action(' wp_enqueue_scripts', 'enqueue_styles' );
function my_theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* Shortcode #1 -- Shows a paragraph containing about Ronnie Coleman */
function ronnie_func() {
	
	return "<p>Ronnie Dean Coleman (born May 13, 1964) is an American retired professional bodybuilder. 
	The winner of the Mr. Olympia title for eight years in a row, he is regarded as one of the greatest bodybuilders of all time. 
	Alongside his eight Mr. Olympia wins, he held the record for most wins as an IFBB professional with 26 titles until it was broken by Dexter Jackson.</p> 
	
	<p>Ronnie Dean Coleman was born in Monroe, Louisiana, on May 13, 1964. He graduated cum laude from Grambling State University in 1984 with a BSc in accounting.
	While there, he played football as a middle linebacker with the GSU Tigers under coach Eddie Robinson. After graduation, he failed to find work as an accountant 
	and instead went to work at Domino's Pizza, where he would eat the complimentary pizza every day due to being so poor that he could barely afford to eat outside 
	of work. He then became a police officer in Arlington, Texas, serving as an officer from 1989 to 2000 and a reserve officer until 2003</p>
	
	<p>With his trademark high-pitched voice, some of the vocal gimmicks Coleman popularized in his training videos have become commonplace in the global bodybuilding community, 
	especially after the advent of viral videos. The most popular of these, which he regularly shouted to himself as a form of self-encouragement, include 
	Yeah buddy!, Lightweight, baby!, and Nothin' but a peanut!.</p>";
}
add_shortcode('ronnie', 'ronnie_func');

/* Shortcode #2 -- Shows a header under the Store title */
function websiteheader() {
	return "<header><h1 style-text;color:black;>Here you can find all of our products</h1></header>";
}
add_shortcode('title', 'websiteheader');

/* Shortcode #3 -- Displays a Picture of Dorian Yates */
function dorianpicture(){
	return '<img src= "https://www.muscleandfitness.com/wp-content/uploads/2019/06/Dorian-Yates-Biceps-BW.jpg?w=940&h=529&crop=1&quality=86&strip=all";/>';
}
add_shortcode('dorian', 'dorianpicture'); 

/* Shortcode #4 -- Adding a follow button for twitter*/
function follow_function( $atts, $content = null) {
	return '<a href="https://twitter.com/dorian_yates" target="blank" <button type="button" class="btn btn-tw"><i class="fab fa-twitter pr-1"></i> Follow Dorian Yates</button>' . $content . '</a>'; 
}
add_shortcode('followtw', 'follow_function');

function follow_function2( $atts, $content = null) {
	return '<a href="https://twitter.com/bigroncoleman" target="blank" <button type="button" class="btn btn-tw"><i class="fab fa-twitter pr-1"></i> Follow Ronnie Coleman</button>' . $content . '</a>'; 
}
add_shortcode('followtw2', 'follow_function2');

/* Shortcode #5 -- Showing a video using a URL from youtube*/
function vid_sc($atts, $content=null) {
	extract(
		shortcode_atts(array(
			'site' => 'youtube',
			'id' => '',
			'w' => '682',
			'h' => '400'
		), $atts)
	);
	if ( $site == "youtube" ) { $src = 'https://www.youtube-nocookie.com/embed/' .$id; }
	
		if ( $id != '' ) {
			return '<iframe width="'.$w.'" height="'.$h.'" src="'.$src.'" class="vid iframe-'.$site.'"></iframe>';
		}
	}
	
add_shortcode('vid', 'vid_sc');

/* Shortcode #6 -- Creating a table of the dates when the bodybuilder won the my olympia*/
function tablefunc() {
	return '<br/>
	<table style = "width:100%">
	<tr>
	<th>Title Won</th>
	<th>Year</th>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1998</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1999</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>2000</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>2001</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>2002</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>2003</td>
	</tr>
	<td>Mr_Olympia</td>
	<td>2004</td>
	</tr>
	</tr>
	<td>Mr_Olympia</td>
	<td>2005</td>
	</tr>
	</tr>
	<td>Mr_Olympia</td>
	<td>2006</td>
	</tr>
	</tr>
	<td>Mr_Olympia</td>
	<td>2007</td>
	</tr>
	</tr>
	<td>Mr_Olympia</td>
	<td>2008</td>
	</tr>
	</table>';
}
add_shortcode('table2', 'tablefunc');

function tablefunc2() {
	return '<br/>
	<table style = "width:100%">
	<tr>
	<th>Title Won</th>
	<th>Year</th>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1992</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1993</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1994</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1995</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1996</td>
	</tr>
	<tr>
	<td>Mr_Olympia</td>
	<td>1996</td>
	</tr>
	<td>Mr_Olympia</td>
	<td>1997</td>
	</tr>
	</table>';
}
add_shortcode('table2', 'tablefunc2');

/* Shortcode #7 -- Adding a facebook follow button */
function ronnyfb( $atts, $content = null) {
	return '<a href="https://www.facebook.com/RonnieColeman08" target="blank" <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Follow Ronnie Coleman</button>' . $content . '</a>'; 
}
add_shortcode('ron', 'ronnyfb');

function dorianfb( $atts, $content = null) {
	return '<a href="https://www.facebook.com/DorianYatesDY" target="blank" <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Follow Dorian Yates</button>' . $content . '</a>'; 
}
add_shortcode('yates', 'dorianfb');
?>



