<?php
	echo Menu::item([
		"name"=>"Transport",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"transport/create","text"=>"Create Transport","icon"=>"far fa-circle nav-icon"],
			["route"=>"transport","text"=>"Manage Transport","icon"=>"far fa-circle nav-icon"],
		]
	]);
