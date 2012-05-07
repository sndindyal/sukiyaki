<?php
/**
	 Template Name: Eleanor Characters
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<link rel="stylesheet" media="all" href="<?php bloginfo( 'template_directory' ); ?>/para/css/main.css" />

<div id="parallax-zone">
			<nav id="para">
				<ul>
					<li>
						<a class="manned-flight load" href="#manned-flight">Eleanor</a>
					</li>
					<li>						
						<a class="frameless-parachute" href="#frameless-parachute">Adrian</a>
					</li>
					<li>
						<a class="english-channel" href="#english-channel">Cheryl</a>
					</li>
					<li>
						<a class="about" href="#about">Claire</a>
					</li>
					<li>
						<a class="jerard" href="#jerard">Gerard</a>
					</li>
					<li>
						<a class="helena" href="#helena">Helena</a>
					</li>
				</ul>
			</nav>
			
			<div id="para-hold">
				<article id="manned-flight">
					<header>
						<h1>Eleanor Blake</h1>
					</header>
					<p>
						Age: 13<br>
						Height:<br>
						Weight:<br>
						Measurements: B77-W55-H77<br>
						Race/Species: Human/Demon Hybrid<br>
						Affiliation: None<br>
						Occupation: Student<br>
						Power Level: A-class<br>
						Class Type: Wielder of the Demon Edge<br>
						Special Moves: Gamut
					</p>				
				</article>
				
				<article id="frameless-parachute">
					<header>
						<h1>Adrian Moore</h1>
					</header>
					<p>
						Age: 13<br>
						Height:<br> 
						Weight:<br>
						Race/Species:  Human<br>
						Affiliation:  None<br>
						Occupation: Student<br>
						Power Level: Comparable B-class<br>
						Weapon Class: None<br>
						Special Moves: Fire manipulation
					</p>
				</article>
				
				<article id="english-channel">
					<header>
						<h1>Cheryl Jacobi</h1>
					</header>
					<p>
						Age: 15<br>
						Height:<br> 
						Weight:<br>
						Measurements: B84-W56-H83<br>
						Race/Species: Human/Demon Hybrid<br>
						Affiliation: None<br>
						Occupation: Student<br>
						Demon Class/Power Level: Undetermined<br>
						Weapon: Demon Energy Chakrams<br>
						Class Type: Energy manipulation<br>
						Special Moves: Teleportation, Chakram throw/slice
					</p>
				</article>
				
				<article id="about">
					<header>
						<h1>Claire Shaw</h1>
					</header>
					<p>
						Age: 13<br>
						Height:<br>
						Weight:<br>
						Measurements: B83-W53-H83<br>
						Race/Species: Human <br>
						Affiliation: None<br>
						Occupation: Student<br>
						Power Level: A-class (Celestial)<br>
						Weapon: The North Star Amulet<br>
						Special Moves: Barrier of light , Celestial spark, Healing
					</p>
				</article>
				<article id="jerard">
					<header>
						<h1>Gerard Allen</h1>
					</header>
					<p>
						Age: 12<br>
						Height:<br>
						Weight:<br>
						Race/Species: Human<br>
						Affiliation: None<br>
						Occupation: Student<br>
						Power Level: Has no powers.<br>
						Devices: Has an advanced laptop and other various gadgets.<br>
						Special Skills: Genius level intellect, an excellent strategist and tech expert
					</p>
				</article>
				<article id="helena">
					<header>
						<h1>Helena Blake</h1>
					</header>
					<p>
						Age: 17<br>
						Height:<br>
						Weight:<br>
						Measurements: B90-W53-H83<br>
						Race/Species: Human/Demon hybrid <br>
						Affiliation: None<br>
						Occupation: Student<br>
						Demon Class/Power Level: B-class<br>
						Class Type: Azure Flame user.<br>
						Special Moves: Azure blast, Blazing glory.
					</p>
				</article>
			</div>
			
			<!-- Parallax foreground -->
			<div id="parallax-bg3">
				<img id="bg3-1" src="<?php bloginfo( 'template_directory' ); ?>/img/eleanor.jpg" border="0" alt=""/>
				<img id="bg3-2" src="<?php bloginfo( 'template_directory' ); ?>/img/adrian.jpg" border="0" alt=""/>
				<img id="bg3-3" src="<?php bloginfo( 'template_directory' ); ?>/img/sheryl.jpg" border="0" alt=""/>
				<img id="bg3-4" src="<?php bloginfo( 'template_directory' ); ?>/img/claire.jpg" border="0" alt=""/>
				<img id="bg3-4" src="<?php bloginfo( 'template_directory' ); ?>/img/jerard.jpg" border="0" alt=""/>
				<img id="bg3-4" src="<?php bloginfo( 'template_directory' ); ?>/img/helena.jpg" border="0" alt=""/>
			</div>
			
			<!-- Parallax  midground s -->
			<div id="parallax-bg2">
				<img id="bg2-1" src="<?php bloginfo( 'template_directory' ); ?>/para/img/shade.png" alt=""/>
				<img id="bg2-2" src="<?php bloginfo( 'template_directory' ); ?>/para/img/shade.png" alt=""/>
				<img id="bg2-3" src="<?php bloginfo( 'template_directory' ); ?>/para/img/shade.png" alt=""/>
				<img id="bg2-4" src="<?php bloginfo( 'template_directory' ); ?>/para/img/shade.png" alt=""/>
				<img id="bg2-5" src="<?php bloginfo( 'template_directory' ); ?>/para/img/shade.png" alt=""/>
			</div>
			
			<!-- Parallax  background s -->
			<div id="parallax-bg1">
				<img id="bg1-1" src="<?php bloginfo( 'template_directory' ); ?>/para/img/light.png" alt=""/>
				<img id="bg1-2" src="<?php bloginfo( 'template_directory' ); ?>/para/img/light.png" alt=""/>
				<img id="bg1-3" src="<?php bloginfo( 'template_directory' ); ?>/para/img/light.png" alt=""/>
				<img id="bg1-4" src="<?php bloginfo( 'template_directory' ); ?>/para/img/light.png" alt=""/>
			</div>	
</div>				
<script src="<?php bloginfo( 'template_directory' ); ?>/js/parallax.js"></script>
			
<?php get_footer(); ?>				