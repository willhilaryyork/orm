<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\Bridges\NetteDI;

use Nextras\Orm\TestHelper\TestMapper;


class TestMapperPhpDocRepositoryFinder extends PhpDocRepositoryFinder
{
	protected function setupMapperService($repositoryName, $repositoryClass)
	{
		$mapperName = $this->prefix('mappers.' . $repositoryName);
		if ($this->builder->hasDefinition($mapperName)) {
			return;
		}

		$this->builder->addDefinition($mapperName)
			->setClass(TestMapper::class);
	}
}
