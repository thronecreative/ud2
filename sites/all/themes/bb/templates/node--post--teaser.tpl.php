
<div class="post-teaser post clearfix">
<!-- <div class="post-date"><?php //print $created; ?></div>	
 -->	<div class="main">
		<div class="image image-teaser"><?php print $cover_image; ?></div>
	</div>
	<div class="side">
		<div class="header">
			<h2><?php print $title_link; ?></h2>
			<div class="post-date-comments comments_btn"><?php print $created; ?> <span class="bull">&bull;</span><a href="<?php echo $path ?>#comments">Comments <?php echo $comment_count; ?></a></div>
		</div>
		<div class="body">
			<?php print $summary; ?>
			
			<div class="read-more">
				<a href="<?php echo $path ?>">Read More</a>
			</div>
		
			
		</div>
		<div class="footer">
			<div class="tags">
				<?php echo $section; ?>
				<?php if(isset($tags)): ?><?php echo $tags; ?><?php endif; ?>
			</div>
			<div class="share">
				<h3 class="share-btn"><a href="#">Share the love</a></h3>
				<?php echo $service_links; ?>
			</div>
		</div>
	</div>
</div>

