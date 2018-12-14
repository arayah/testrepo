<?php $title = $post['title'] ?>
<?php ob_start()?>
	<?php if($post != NULL):?>
		<h1><?php echo $post['title']?></h1>
		<div class = 'date'><?php echo $post['created_at']?></div>
		<div class = 'body'><?php echo $post['body']?></div>
	<?php endif?>
		<?php if($post == NULL):?>
		<h1><center>Post Not Found</center></h1>
	<?php endif?>
<?php $content = ob_get_clean() ?>
<?php include 'views/templates/layout.php'; ?>