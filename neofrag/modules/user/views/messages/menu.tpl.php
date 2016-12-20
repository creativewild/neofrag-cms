<div class="list-group">
	<a href="<?php echo url('user/messages/compose.html'); ?>" class="list-group-item<?php echo ($this->config->segments_url[0] == 'user' && $this->config->segments_url[1] == 'messages' && isset($this->config->segments_url[2]) && $this->config->segments_url[2] == 'compose') ? ' active' : ''; ?>"><?php echo icon('fa-edit'); ?> Rédiger un message</a>
	<a href="<?php echo url('user/messages.html'); ?>" class="list-group-item<?php echo ($this->config->segments_url[0] == 'user' && $this->config->segments_url[1] == 'messages' && !isset($this->config->segments_url[2])) ? ' active' : ''; ?>">
		<?php if ($messages = $this->user->get_messages()): ?>
		<span class="label label-danger pull-right"><?php echo $messages.' '.icon('fa-envelope-o'); ?></span>
		<?php endif; ?>
		<?php echo icon('fa-inbox'); ?>Boîte de réception
	</a>
	<a href="<?php echo url('user/messages/sent.html'); ?>" class="list-group-item<?php echo ($this->config->segments_url[0] == 'user' && $this->config->segments_url[1] == 'messages' && isset($this->config->segments_url[2]) && $this->config->segments_url[2] == 'sent') ? ' active' : ''; ?>"><?php echo icon('fa-send-o'); ?> Messages envoyés</a>
	<a href="<?php echo url('user/messages/archives.html'); ?>" class="list-group-item<?php echo ($this->config->segments_url[0] == 'user' && $this->config->segments_url[1] == 'messages' && isset($this->config->segments_url[2]) && $this->config->segments_url[2] == 'archives') ? ' active' : ''; ?>"><?php echo icon('fa-archive'); ?> Archives</a>
</div>