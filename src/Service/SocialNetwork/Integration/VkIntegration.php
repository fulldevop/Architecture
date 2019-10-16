<?php

declare(strict_types = 1);

namespace Service\SocialNetwork\Integration;

use Service\SocialNetwork\IntegrationInterface;
use Service\SocialNetwork\Library\VkIntegrateLib;

/**
 * Адаптер, собирает все необходимые методы для интеграции
 * с вконтакте в один метод - integration(), впоследствии мы
 * вызываем именно этот метод для интеграции с вконтакте
 */
class VkIntegration implements IntegrationInterface
{
	private $vkLib;

	/**
	 * FacebookIntegration constructor.
	 * @param VkIntegrateLib $vkLib
	 */
	public function __construct(
		VkIntegrateLib $vkLib
	)
	{
		$this->vkLib = $vkLib;
	}

	public function integration(): void
	{
		$this->vkLib->integrateVk();
		// Перечень всех необходимых методов для интеграции с вконтакте
	}
}