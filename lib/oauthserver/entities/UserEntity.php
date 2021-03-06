<?php
use League\OAuth2\Server\Entities\UserEntityInterface;

class UserEntity implements UserEntityInterface
{
	private $identifier;

	public function getIdentifier()
	{
		return $this->identifier;
	}

	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $this;
	}
}