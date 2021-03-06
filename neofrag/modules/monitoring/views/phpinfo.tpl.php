<table class="table table-hover table-stripped">
	<tr>
		<td width="20%"><?php echo i18n('operating_system'); ?></td>
		<td><?php echo php_uname(); ?></td>
	</tr>
	<tr>
		<td width="20%">Serveur PHP</td>
		<td><?php echo $data['php_server']; ?></td>
	</tr>
	<tr>
		<td><?php echo i18n('web_server'); ?></td>
		<td><?php echo $data['web_server']; ?></td>
	</tr>
	<tr>
		<td><?php echo i18n('databases_server'); ?></td>
		<td><?php echo $data['databases_server']; ?></td>
	</tr>
	<tr>
		<td><?php echo i18n('loaded_extensions'); ?></td>
		<td>
			<ul class="extensions">
			<?php foreach ($data['extensions'] as $extension): ?>
				<li><a href="#module_<?php echo $extension; ?>"><?php echo icon('fa-puzzle-piece').' '.$extension; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</td>
	</tr>
</table>
