<?php $this->title = $this->post['title'];?>
<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
<main>
	<h1><?=htmlentities($this->post['title'])?></h1>
		<p>
		<i>Posted on </i>
		<?=htmlentities($this->post['date'])?>
		<i>by </i>
		<?=htmlentities($this->post['full_name'])?>
		</p>
		<p><?=$this->post['content']?></p>
</main>
