<?php
	echo Menu::item([
		"name"=>"Category",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"category/create","text"=>"Create Category","icon"=>"far fa-circle nav-icon"],
			["route"=>"category","text"=>"Manage Category","icon"=>"far fa-circle nav-icon"],
		]
	]);
