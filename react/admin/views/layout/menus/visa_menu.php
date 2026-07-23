<?php
	echo Menu::item([
		"name"=>"Visa",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"visa/create","text"=>"Create Visa","icon"=>"far fa-circle nav-icon"],
			["route"=>"visa","text"=>"Manage Visa","icon"=>"far fa-circle nav-icon"],
		]
	]);
