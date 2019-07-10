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

namespace Amadeus\Client\Struct\DocIssuance;

use Amadeus\Client\RequestOptions\DocIssuanceIssueCombinedOptions;

/**
 * DocIssuance_IssueCombined Request structure
 *
 * @package Amadeus\Client\Struct\DocIssuance
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class IssueCombined extends IssueTicket
{
    /**
     * IssueCombined constructor.
     *
     * @param DocIssuanceIssueCombinedOptions $options
     */
    public function __construct(DocIssuanceIssueCombinedOptions $options)
    {
        parent::__construct($options);
        foreach ($options->tsmTattoos as $tsm) {
            $this->addSelectionItem(
                new ReferenceDetails(
                    $tsm,
                    ReferenceDetails::TYPE_TSM_TATTOO
                )
            );
        }
        foreach ($options->emds as $emd) {
            $this->addSelectionItem(
                new ReferenceDetails(
                    $emd,
                    ReferenceDetails::TYPE_TSM
                )
            );
        }
        foreach ($options->svcs as $svc) {
            $this->addSelectionItem(
                new ReferenceDetails(
                    $svc,
                    ReferenceDetails::TYPE_LINE_NUMBER
                )
            );
        }
    }
}
