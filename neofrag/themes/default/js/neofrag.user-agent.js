﻿$(function(){
	var user_agent = function(){
		$('[data-user-agent]').each(function(){
			var $icon = $(this);
					
			$.ajax({
				url: 'https://neofr.ag/user-agent.json',
				type: 'POST',
				data: 'user_agent='+$icon.data('user-agent'),
				dataType: 'json',
				crossDomain: false,
				success: function(data){
					var output = '';
					var img    = '';
					var img2   = '';
					
					if (data['agent_type'] == 'Browser'){
						if (data['agent_name'] == 'Firefox'){
							img = '<?php echo image('icons/firefox.png'); ?>';
						}
						else if (data['agent_name'] == 'Chrome'){
							img = '<?php echo image('icons/chrome.png'); ?>';
						}
						else if (data['agent_name'] == 'Safari'){
							img = '<?php echo image('icons/safari.png'); ?>';
						}
						else if (data['agent_name'] == 'Internet Explorer'){
							img = '<?php echo image('icons/ie.png'); ?>';
						}
						
						if (img){
							output += '<img src="'+img+'" data-toggle="tooltip" title="'+data['agent_name']+' '+data['agent_version']+'" alt="" /> ';
						}
					}
					
					if (data['os_type'] == 'Windows'){
						img2 = '<?php echo image('icons/windows.png'); ?>';
					}
					else if (data['os_type'] == 'Linux'){
						img2 = '<?php echo image('icons/animal-penguin.png'); ?>';
					}
					else if (data['os_type'] == 'Macintosh'){
						img2 = '<?php echo image('icons/mac-os.png'); ?>';
					}
						
					if (img2){
						output += '<img src="'+img2+'" data-toggle="tooltip" title="'+data['os_name']+'" alt="" />';
					}
					
					if (output == ''){
						output += '<img src="<?php echo image('icons/user-silhouette-question.png'); ?>" data-toggle="tooltip" title="'+$icon.data('user-agent')+'" alt="" />';
					}
					
					$icon.replaceWith('<span class="no-wrap">'+output+'</span>');
				}
			});
		});
	};
	
	$('body').on('nf.load', user_agent);
	
	user_agent();
});