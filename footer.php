<div id="footer">
	<div>
		<?php
		wp_nav_menu( array( 
			'theme_location' => 'footer-menu', 
			'container_class' => 'footer-menu' ) ); 
		?>
		<div id="nouscontacter">Nous contacter : + 33 1 34 20 38 90</div>
	</div><div id="backtotop">	
		<a href="#">back to top<img src="<?php echo wp_get_attachment_url( 230 ); ?>" alt="flechehaut"></a>
	</div>
	<div id="copyright">All content is copyright © Clover 2018 </div>
</div>

</body>
</html>