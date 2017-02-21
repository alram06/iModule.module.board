<?php
if (defined('__IM__') == false) exit;
?>
<ul data-role="form" class="black inner">
	<?php if ($IM->getModule('member')->isLogged() == true) { ?>
	<li>
		<label><?php echo $me->getText('text/name'); ?></label>
		<div>
			<div data-role="input">
				<input type="text" name="name" value="<?php echo $post == null ? '' : GetString($post->name,'input'); ?>">
			</div>
		</div>
	</li>
	<li>
		<label><?php echo $me->getText('text/password'); ?></label>
		<div>
			<div data-role="input" data-default="<?php echo $me->getText('text/password_help'); ?>">
				<input type="password" name="password">
			</div>
		</div>
	</li>
	<li>
		<label><?php echo $me->getText('text/email'); ?></label>
		<div>
			<div data-role="input" data-default="<?php echo $me->getText('text/email_help'); ?>">
				<input type="email" name="email">
			</div>
		</div>
	</li>
	<?php } ?>
	<li>
		<label><?php echo $me->getText('text/title'); ?></label>
		<div>
			<div data-role="input">
				<input type="text" name="title" value="<?php echo $post == null ? '' : GetString($post->title,'input'); ?>">
			</div>
		</div>
	</li>
	<li>
		<div data-role="input">
			<?php echo $wysiwyg; ?>
		</div>
	</li>
</ul>

<div data-role="button">
	<button type="submit"><?php echo $me->getText('button/write'); ?></button>
	<a href="<?php echo $me->getUrl('list',false); ?>"><?php echo $me->getText('button/cancel'); ?></a>
</div>