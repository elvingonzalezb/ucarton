<!-- ================================= Banner ====================== -->
<section class="banner">
	<div id="owl-home" class="owl-carousel">
	<?php foreach ($banners as $key => $value): ?>
		<div>
			<?php if (!empty($value['banner_enlace'])): ?>
			<a href="<?php echo $value['banner_enlace']?>">	
			<?php else: ?>
			<a>	
			<?php endif ?>
				<img src="files/banners/<?=$value["banner_imagen"]?>">
			</a>
			
		</div>	
	<?php endforeach ?>
	</div>
</section> <!-- /banner -->
<!-- ====================== /Banner =================== -->