<?php
/**
 * 超简洁 纯文本 Theme
 * @package Text
 * @author iJustPlay
 * @version 1.0.0
 * @link http://www.ijustplay.cn
 */
?>
<?php include('header.php'); ?>
<ul class="posts">
<?php while($this->next()): ?>
	<li>
    [<?php $this->category(','); ?>]
    <a href="<?php $this->permalink() ?>" class="title"><?php $this->title() ?></a>
    <span class="time"><?php $this->date('Y.m.d'); ?></span>
  </li>
<?php endwhile; ?>
</ul>
<?php $this->pageNav(); ?>

<?php include('footer.php'); ?>