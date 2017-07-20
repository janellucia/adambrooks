<?php

/*
	Template Name: Front Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
  	<div class="front-page-grid" onclick="openModal()">
  		<!-- Shortcode For Image Grid Plugin -->
		<?php echo get_laygrid($id, $type); ?>
 	</div>
	<!-- Modal Content -->
	<div class="is-hidden modal-overlay">
		<div class="modal">
			<span class="button-close">×</span>
			<div class="photos"></div>
		</div>
		<div class="modal-nav">
			<button class="prev" onclick="prevImage()"><</button>
			<button class="next" onclick="nextImage()">></button>
		</div>
	</div>
	<!-- ====================================
	Example Red Box
	==================================== -->
	<div class="wrap">
		<button onclick="moveDown()">Move Down</button><button onclick="moveUp()">Move Up</button>
		<div id="box" style="left: 200px; top: 50px;"></div>
	</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>