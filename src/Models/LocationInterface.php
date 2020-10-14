<?php

namespace EnterpriseLib\Models;

interface LocationInterface {
	public function setLocation($location);

	public function getLocation();

	public function updateLocation($location);
}