<?php

declare(strict_types = 1);

namespace Service\SocialNetwork\Integration;

use Service\SocialNetwork\IntegrationInterface;
use Service\SocialNetwork\Library\FbIntegrateLib;

/**
 * Адаптер, собирает все необходимые методы для интеграции
 * с фейсбуком в один метод - integration(), впоследствии мы
 * вызываем именно этот метод для интеграции с фейсбуком
 */
class FbIntegration implements IntegrationInterface
{
	private $fbLib;

	/**
	 * FacebookIntegration constructor.
	 * @param FbIntegrateLib $fbLib
	 */
	public function __construct(
		FbIntegrateLib $fbLib
	)
	{
		$this->fbLib = $fbLib;
	}

	public function integration(): void
	{
		$this->fbLib->integrateFb();
		// Перечень всех необходимых методов для интеграции с фейсбуком
	}
}