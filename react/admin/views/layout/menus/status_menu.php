<?php
	echo Menu::item([
		"name"=>"Status",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"status/create","text"=>"Create Status","icon"=>"far fa-circle nav-icon"],
			["route"=>"status","text"=>"Manage Status","icon"=>"far fa-circle nav-icon"],
		]
	]);
