<?php
	echo Menu::item([
		"name"=>"Payment",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"payment/create","text"=>"Create Payment","icon"=>"far fa-circle nav-icon"],
			["route"=>"payment","text"=>"Manage Payment","icon"=>"far fa-circle nav-icon"],
		]
	]);
