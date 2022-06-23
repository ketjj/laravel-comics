<?php

class Image{

	public $url;
	public $title;
	
	public function __construct($_url, $_title ) {
        $this->url = $_url;
		$this->title = $_title;
	}
}

return [
	new Image("buy-comics-digital-comics.png", "digital comics"),
    new Image("buy-comics-merchandise.png", "dc merchandise"),
    new Image("buy-comics-subscriptions.png", "subscription"),
    new Image("buy-comics-shop-locator.png", "comic shop location"),
    new Image("buy-dc-power-visa.svg", "dc power visa")
];

