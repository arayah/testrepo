<?php $title = 'List of posts'?>

<?php ob_start()?>
<h1>List of Posts</h1>
<ul>
	<?php foreach ($posts as $post): ?>
	<li>
		<a href="/excersice-7/show/<?php echo $post['id'] ?>">
		<?php echo $post['title'] ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<?php $content = ob_get_clean() ?>
<?php include 'views/templates/layout.php'; ?>