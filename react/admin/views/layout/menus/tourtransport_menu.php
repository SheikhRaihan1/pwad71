<?php
	echo Menu::item([
		"name"=>"Tourtransport",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"tourtransport/create","text"=>"Create Tourtransport","icon"=>"far fa-circle nav-icon"],
			["route"=>"tourtransport","text"=>"Manage Tourtransport","icon"=>"far fa-circle nav-icon"],
		]
	]);
