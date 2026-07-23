<?php
	echo Menu::item([
		"name"=>"Booking",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"booking/create","text"=>"Create Booking","icon"=>"far fa-circle nav-icon"],
			["route"=>"booking","text"=>"Manage Booking","icon"=>"far fa-circle nav-icon"],
		]
	]);
