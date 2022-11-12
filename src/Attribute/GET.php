<?php
/*
 * This file is part of webman-auto-route.
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    qnnp<qnnp@qnnp.me>
 * @copyright qnnp<qnnp@qnnp.me>
 * @link      https://qnnp.me
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Qnnp\WebmanRoute\Attribute;

use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_METHOD)]
class GET implements OperationInterface {
  /**
   * @param string|null $path
   * @param array|null  $parameters
   * @param array|null  $tags
   * @param string|null $summary
   * @param string|null $description
   * @param array|null  $externalDocs
   * @param string|null $operationId
   * @param array|null  $requestBody
   * @param array|null  $responses
   * @param array|null  $callbacks
   * @param bool|null   $deprecated
   * @param array|null  $security
   * @param array|null  $servers
   */
  public function __construct(
    ?string $path = null,
    ?array  $parameters = null,
    ?array  $tags = null,
    ?string $summary = null,
    ?string $description = null,
    ?array  $externalDocs = null,
    ?string $operationId = null,
    ?array  $requestBody = null,
    ?array  $responses = null,
    ?array  $callbacks = null,
    ?bool   $deprecated = null,
    ?array  $security = null,
    ?array  $servers = null
  ) {
  }
}

