<?php
	$home = Page::byUrlQ("home");
    $imageFeature = Page::byUrlQ("5pvPg75Lzr");
    $menuFooter = Page::byUrlQ("D-AkwQ4edJ");

	//Feature
    $resultHome = Page::search(array(
        'idparent' => $home->idpage,
        'fragments' => array('descChild')
    ));
    $homeRes = $resultHome['records'];
	//Feature

	//Presentation
	$descHome = $fragments['descPresentation']['record'];
    $titleHome = $fragments['titlePresentation']['record'];
	//Presentation

	//asideInfo
    $imageAside = $fragments['imageAside']['record'];
    $descAside = $fragments['descAside']['record'];
    $titleAside = $fragments['titleAside']['record'];
    //asideInfo

    //Advertising
    $descAdvertising = $fragments['descAdvertising']['record'];
    $titleAdvertising = $fragments['titleAdvertising']['record'];
    //Advertising

    //imageFeature
    $resultImageFeature = Page::search(array(
        'idparent' => $imageFeature->idpage,
        'fragments' => array('titleImage', 'image', 'descImage')
    ));
    $imageFeatureRes = $resultImageFeature['records'];
    //imageFeature

    //Formulario
    $titleForm = $fragments['titleForm']['record'];
    $descForm = $fragments['descForm']['record'];
    //Formulario

    //menuFooter
    $resultMenuFooter = Page::search(array(
    	'idparent' => $menuFooter->idpage,
    	'fragments' => array('elementName')
    ));
    $menuFooterRes = $resultMenuFooter['records'];
    //menuFooter
?>
<!DOCTYPE html>
<html>
<head>
	<link href="fragment/themes/default/design/css/foundation.min.css" rel="stylesheet">
</head>
<body>



	<!-- Block asideInfo -->
	<section class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas>
	   <div class="holder">
	       <div class="container-fluid">
	           <div class="header"></div>
	           <div class="content">
					  <div class="grid-y grid-padding-x" style="height: 100%;">
					    <br>
					    <div class="cell shrink">
					      <div class="thumbnail"><?= $imageAside->value ?></div>
					    </div>
					    <div class="cell auto">
					      <h5><?= $titleAside->value ?></h5>
					      <p><?= $descAside->value ?></p>
					    </div>
					  </div>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.AsideInfo -->

<div class="off-canvas-content" data-off-canvas-content>

	<!-- Block navigationBar -->
	<?php include 'componentes/titleBar.php' ?>
	<?php include 'componentes/navigationBar.php'?>
	<!-- /.navigationBar -->

	<!-- Block Presentation -->
	<section class="block presentation" id="presentacion">
	   <div class="holder">
	       <div class="container-fluid">
	           <div class="header"></div>
	           <div class="content">
	           	<article class="grid-container">
					<div class="text-center">
						<h1><?= $titleHome->value ?></h1>
						<p class="lead"><?= $descHome->value ?></p>
						<a href="#" class="button large">Learn More</a>
						<a href="#" class="button large hollow">Learn Less</a>
					</div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.Presentation -->

	<hr>

	<!-- Block Features -->
	<section class="block features" id="caracteristicas">
	   <div class="holder">
	       <div class="container-fluid">
	           <div class="header"></div>
	           <div class="content">
	           	<article class="grid-container">
					<div class="grid-x grid-margin-x">
						<?php foreach ($homeRes as $hr) { ?>
							<!-- Elemento a repetir -->
							<div class="medium-6 large-3 cell">
								<h3><?= $hr->title ?></h3>
								<p><?= $hr->fragments['descChild']->value ?></p>
							</div>
							<!-- Fin elemento -->
						<?php } ?>
						<?php foreach ($homeRes as $hr) { ?>
							<!-- Elemento a repetir -->
							<div class="medium-6 large-3 cell">
								<h3><?= $hr->title ?></h3>
								<p><?= $hr->fragments['descChild']->value ?></p>
							</div>
							<!-- Fin elemento -->
						<?php } ?>
					</div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.Features -->

	<hr>

	<!-- Advertising -->
	<section class="block Advertising" id="Advertising">
	   <div class="holder">
	       <div class="container-fluid">
	           <div class="header"></div>
	           <div class="content">
	           	<article class="grid-container">
					<div class="grid-x cell">
						<div class="small-12 callout primary text-center">
				        	<h3><?= $titleAdvertising->value ?></h3>
				        	<p><?= $descAdvertising->value ?></p>
				      	</div>
				    </div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.Advertising-->

	<hr>

	<!-- Block imageFeature -->
	<section class="block imageFeature" id="imageFeature">
	   <div class="holder">
	       <div class="container-fluid">
	           <div class="header"></div>
	           <div class="content">
	           	<article class="grid-container">
					<div class="grid-x grid-margin-x">
				    <?php foreach ($imageFeatureRes as $ifr) { ?>
				      <div class="large-3 cell">
				        <h4><?= $ifr->fragments['titleImage']->value ?></h4>
				        <div class="thumbnail"><?= $ifr->fragments['image']->value ?></div>
				        <p><?= $ifr->fragments['descImage']->value ?></p>
				      </div>
				  	<?php } ?>
				    </div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.imageFeature -->

	<hr>

	<!-- contactForm -->
	<section class=“block features” id=“caracteristicas”>
	   <div class=“holder”>
	       <div class=“container-fluid”>
	           <div class=“header”></div>
	           <div class=“content”>
	           		<div class="off-canvas-content" data-off-canvas-content>
					  <article class="grid-container">
					    <div class="grid-x grid-margin-x">
					      <div class="medium-6 cell">
					        <h3><?= $titleForm->value ?></h3>
					        <p><?= $descForm->value ?></p>
					        <ul class="menu">
					          <li><a href="#">Dribbble</a></li>
					          <li><a href="#">Facebook</a></li>
					          <li><a href="#">Yo</a></li>
					        </ul>
					      </div>
					      <div class="medium-6 cell">
					        <label>Name
					          <input type="text" placeholder="Name">
					        </label>
					        <label>Email
					          <input type="text" placeholder="Email">
					        </label>
					        <label>
					          Message
					          <textarea placeholder="holla at a designer"></textarea>
					        </label>
					        <input type="submit" class="button expanded" value="Submit">
					      </div>
					    </div>
					  </article>
					</div>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- ./contactForm -->

	<hr>

	<!-- MENU FOOTER -->
	<section class=“block features” id=“caracteristicas”>
	   <div class=“holder”>
	       <div class=“container-fluid”>
	           <div class=“header”></div>
	           <div class=“content”>
	           		<article class="grid-container">
						<div class="grid-x cell">
					      <ul class="menu">
					      	<?php foreach($menuFooterRes as $mfr) { ?>
					        <li><a href="#"><?= $mfr->fragments['elementName']->value ?></a></li>
					    	<?php } ?>
					      </ul>
					    </div>
					</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- /.MENU FOOTER -->

</div>
	<script src="fragment/themes/default/design/js/vendor/jquery.js"></script>
    <script src="fragment/themes/default/design/js/vendor/what-input.js"></script>
    <script src="fragment/themes/default/design/js/vendor/foundation.js"></script>
    <script src="fragment/themes/default/design/js/app.js"></script>
</body>
</html>