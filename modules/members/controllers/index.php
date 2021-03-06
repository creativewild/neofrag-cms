<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

class m_members_c_index extends Controller_Module
{
	public function index($members)
	{
		$this	->table
				->add_columns([
					[
						'content' => function($data){
							return NeoFrag::loader()->user->avatar($data['avatar'], $data['sex'], $data['user_id'], $data['username']);
						},
						'size'    => TRUE
					],
					[
						'title'   => 'Membre',
						'content' => function($data, $loader){
							return '<div>'.NeoFrag::loader()->user->link($data['user_id'], $data['username']).'</div><small>'.icon('fa-circle '.($data['online'] ? 'text-green' : 'text-gray')).' '.$loader->lang($data['admin'] ? 'admin' : 'member').' '.$loader->lang($data['online'] ? 'online' : 'offline').'</small>';
						},
						'search'  => function($data){
							return $data['username'];
						}
					],
					[
						'content' => function($data){
							return $this->user() && $this->user('user_id') != $data['user_id'] ? button('user/messages/compose/'.$data['user_id'].'/'.url_title($data['username']).'.html', 'fa-envelope-o') : '';
						},
						'size'    => TRUE,
						'align'   => 'right',
						'class'   => 'v-align'
					]
				])
				->data($members)
				->no_data($this('no_members'));
			
		return new Panel([
			'title'   => $this->load->data['module_title'],
			'icon'    => $this->load->data['module_icon'],
			'content' => $this->table->display()
		]);
	}

	public function _group($title, $members)
	{
		return [
			new Panel([
				'content' => '<h2 class="no-margin">'.$this('group').' <small>'.$title.'</small>'.button('members.html', 'fa-close', $this('show_all_members'), 'danger pull-right').'</h2>'
			]),
			$this->index($members)
		];
	}
}

/*
NeoFrag Alpha 0.1.5
./modules/members/controllers/index.php
*/