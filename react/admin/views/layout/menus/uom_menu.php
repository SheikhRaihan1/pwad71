<?php
	echo Menu::item([
		"name"=>"Uom",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"uom/create","text"=>"Create Uom","icon"=>"far fa-circle nav-icon"],
			["route"=>"uom","text"=>"Manage Uom","icon"=>"far fa-circle nav-icon"],
		]
	]);
