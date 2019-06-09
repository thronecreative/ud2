<div class="full post">
	<div class="header">
		<h1><?php print $node_title; ?></h1>
	</div>

	<div class="body"><?php print $body; ?>
	
			
	</div>
	<?php if(isset($credits)): ?>
			<div class="credits">
				<h2>Credits:</h2>
				<?php print $credits; ?>
			</div>
			<?php endif; ?>
	<div class="footer">
		<div class="tags">
			<?php if(isset($tags)): ?>
				
				<?php echo $section; ?>
				<?php echo $tags; ?>
			<?php endif; ?>
		</div>
		<div class="social-icons">
			<?php echo $service_links; ?>
		</div>
	</div>

</div>

<!-- <div id="comments" class="comments-header clearfix">
	<h2>Comments</h2>
	<div class="add-comment-btn">+ Add a Comment</div>
</div> -->