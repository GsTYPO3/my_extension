<?php

/*
 * This file is part of the package my-vendor/my-extension, a TYPO3 demo extension.
 * Copyright (C) 2020  Gilbertsoft LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace MyVendor\MyExtension\Tests\Functional\Dummy;

use MyVendor\MyExtension\Dummy\Dummy;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Test case
 */
class DummyTest extends FunctionalTestCase
{
    /**
     * @test
     */
    public function getBaseUrlSucceeds(): void
    {
        $extConf = [
            'baseurl' => 'https://example.com',
        ];
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['my_extension'] = $extConf;
        $backend = new Dummy();
        $baseUrl = $backend->getBaseUrl();
    }
}
