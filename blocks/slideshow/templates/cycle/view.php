<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<section id="home_marquee">
	<?php foreach ($images as $imgInfo) : 
		$f = File::getByID($imgInfo['fID']);
		$fp = new Permissions($f);
		if ( $fp->canRead()):
			// var_dump($imgInfo);
	?>
	<div>
		<a href="<?= $imgInfo['url']; ?>"><img src="<?= $f->getRelativePath(); ?>" alt="slide" /></a>
	</div>

		<?php endif; ?>
	<?php endforeach; ?>

</section>
<ul id="nav"></ul>