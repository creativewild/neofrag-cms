<div class="list-group">
<?php foreach ($data['links'] as $link): ?>
	<a class="list-group-item<?php if (strpos($NeoFrag->config->request_url, substr($link['url'], 0, -5)) === 0) echo ' active'; ?>" href="<?php echo (!preg_match('#^(https?:)?//#i', $link['url']) ? url() : '').$link['url']; ?>" target="<?php echo !empty($link['target']) ? $link['target'] : '_parent'; ?>"><?php echo $link['title']; ?></a>
<?php endforeach; ?>
</div>