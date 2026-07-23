<?php
	echo Menu::item([
		"name"=>"Flight",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"flight/create","text"=>"Create Flight","icon"=>"far fa-circle nav-icon"],
			["route"=>"flight","text"=>"Manage Flight","icon"=>"far fa-circle nav-icon"],
		]
	]);
