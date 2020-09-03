<?php $slider_data = $db->query("SELECT * FROM tbl_slider"); ?>
<div class="slider">
	<ul class="bxslider">
        <?php 
        if ($slider_data) {
           for ($i=0; $i < count($slider_data); $i++) {
         ?>
		<li style="background:url(<?php echo $slider_data[$i]['slider_main_img']; ?>)">
			<div class="container">
				<div class="info">
					<h2><?php echo $slider_data[$i]['slider_heading_one']; ?> <br><span><?php echo $slider_data[$i]['slider_heading_two']; ?></span></h2>
					<!-- <a href="#">Check out our new programs</a> -->
				</div>
			</div>
		</li>
		<?php 
             }
         }
		?>
	</ul>
	<div class="bg-bottom"></div>
</div>