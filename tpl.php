<div class="column item">
	<div class="content">
		<?php if ($news == "ja" ){ echo "<span class='news'>News</span>"; } ?>
		<?php if ($img == "ja" ){ echo "<div class='txtC imgRound'><img src=". $imgPost ."></div>"; } ?>
		
		<h1><?php echo $title ?></h1>
		<p><?php echo $description ?></p>
						
		<!-- <button class="md-trigger" data-modal="modal-1">mehr erfahen</button> -->
		
		<div>
			<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
	</div>
</div>