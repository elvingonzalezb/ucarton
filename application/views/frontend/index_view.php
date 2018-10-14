<?php echo $banners; ?>
<section id="prodDestacado">
	<div class="container">
		<div id="owl-productos" class="owl-carousel">
			<?php foreach ($productos as $value): ?>
			<div class="item">
				<a href="productos/<?= $value['url_cat'].'/'.$value['id_foto'].'-'.$value['url']?>">
					<div>
						<img class="img-responsive lazyOwl" data-src="files/productos/<?= $value['imagen'] ;?>" alt="<?= $value['titulo'] ;?>">
						<div class="overlay transition3s">
							<div class="overlay_border"></div>
						</div>
					</div>
					<div class="owl-titulo">
						<h5><?= $value['titulo'] ;?></h5>
					</div>
				</a>
				
			</div>
			<?php endforeach ?>
		</div>
	</div>
	
</section>

<section class="welcome_sec">
	<div class="container welcome_data_container" style="margin-top: -45px !important;">        
		<div class="row text-center">
			<h2 class="border-title">Últimos Artículos</h2>
		</div>
		<div class="row">
			<?php foreach ($articulosindex as  $value): ?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 design_planting">
				<a class="" href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>">
					<div class="img_holder image-angle2">
						<img class="img-responsive" src="files/articulos/<?php echo $value['imagen'] ;?>" alt="image">
						<div class="overlay transition3s">
							<div class="overlay_border"></div>
						</div>
					</div>
				</a>
				<div class="text">
					<h5><?php echo $value['titulo'] ;?></h5>
					<p><?php echo $value['descripcion_corta'] ;?></p>
					<a class="read_more main_anchor transition-ease" href="articulos/<?php echo $value["id"]?>-<?php echo $value["url"]?>">Leer más </a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>