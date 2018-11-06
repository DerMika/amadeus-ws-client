<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Test\Amadeus\Client\Struct\Fare\MasterPricer;

use Amadeus\Client\RequestOptions\Fare\MPTripDetails;
use Amadeus\Client\Struct\Fare\MasterPricer\TripDetails;
use Test\Amadeus\BaseTestCase;

/**
 * TripDetailsTest
 *
 * @package Test\Amadeus\Client\Struct\Fare\MasterPricer
 * @author Artem Zakharchenko <artz.relax@gmail.com>
 */
class TripDetailsTest extends BaseTestCase
{
    public function testCanCreateFromRequestOptions()
    {
        $requestOptions = new MPTripDetails([
            'flexibilityQualifier' => MPTripDetails::FLEXIBILITY_COMBINED,
            'tripInterval' => 1,
            'tripDuration' => 7
        ]);

        $tripDetails = new TripDetails($requestOptions);

        $this->assertEquals($requestOptions->flexibilityQualifier, $tripDetails->flexibilityQualifier);
        $this->assertEquals($requestOptions->tripInterval, $tripDetails->tripInterval);
        $this->assertEquals($requestOptions->tripDuration, $tripDetails->tripDuration);
    }
}
