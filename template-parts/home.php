	
<?php /* Template Name: home */ ?>

<?php get_header(); ?>

<div id="main">
	
	<div id="content">
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		
		<?php endwhile; ?>
		
	<?php else : ?>
	
		<div class="post">
			<h2>Not found!</h2>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>	
		</div>
	
	<?php endif; ?>
	
	</div>
	<img id="tampon" src="<?php echo wp_get_attachment_url( 226 ); ?>" alt="tampon" />
    <h1> <?php $image = get_field('img1'); ?>
    	<img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
		<span><?php the_field('champ1'); ?></span>
	</h1>
	<section id="apropos">
		<h2>	<?php the_field('champ2'); ?></h2>
		<p> <?php the_field('champ3'); ?></p>
		<div class="ensavoirplus">
			<a href="<?php the_field('lien1');?>" alt="ensavoirplus">EN SAVOIR PLUS</a></div>
	</section>
	<section id="entreprises">
		<div class="col-resp">
			<?php $image = get_field('img2'); ?>
			<img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
		</div>
		<div class="col-resp">
			<h2> <img src="<?php echo wp_get_attachment_url( 235 ); ?>" alt="logoentrep" /></h2>
			<p> <?php the_field('champ4'); ?></p>
			<div class="ensavoirplus"><a href="<?php the_field('lien2');?>" alt="ensavoirplus">EN SAVOIR PLUS</a></div>
		</div>
	</section>
	<section id="talents">
		<?php $image = get_field('img3'); ?>
    	<img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
		<div class="col-resp">
			<h2> <img src="<?php echo wp_get_attachment_url( 236 ); ?>" alt="logotalents" /></h2>
			<p> <?php the_field('champ5'); ?></p>
			<div class="ensavoirplus"><a href="<?php the_field('lien2');?>" alt="ensavoirplus">EN SAVOIR PLUS</a></div>
		</div>
	</section>
	<section id="contact">
		<h2> REJOIGNEZ-NOUS </h2>
		<p>Recevez des informations et réalisez une évaluation personnalisée de vos compétences
		</p>
		<form id="rejoigneznous">
			<input type="email" placeholder="Saisissez votre e-mail">
			<div class="ensavoirplus">	
			<input type="submit" value="VALIDER"></div>
		</form>
	</section>
		
</div>

<?php get_footer(); ?>