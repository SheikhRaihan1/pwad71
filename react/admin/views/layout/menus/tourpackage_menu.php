<?php
	echo Menu::item([
		"name"=>"Tourpackage",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"tourpackage/create","text"=>"Create Tourpackage","icon"=>"far fa-circle nav-icon"],
			["route"=>"tourpackage","text"=>"Manage Tourpackage","icon"=>"far fa-circle nav-icon"],
		]
	]);
