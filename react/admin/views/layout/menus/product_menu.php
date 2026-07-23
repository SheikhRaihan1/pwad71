<?php
	echo Menu::item([
		"name"=>"Product",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"product/create","text"=>"Create Product","icon"=>"far fa-circle nav-icon"],
			["route"=>"product","text"=>"Manage Product","icon"=>"far fa-circle nav-icon"],
		]
	]);
