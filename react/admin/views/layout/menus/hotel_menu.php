<?php
	echo Menu::item([
		"name"=>"Hotel",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"hotel/create","text"=>"Create Hotel","icon"=>"far fa-circle nav-icon"],
			["route"=>"hotel","text"=>"Manage Hotel","icon"=>"far fa-circle nav-icon"],
		]
	]);
