<?php

namespace Qnnp\WebmanRoute\Defiend;

class openapi {
  /**
   * @var string  遵循规范版本
   */
  const openapi = 'openapi';
  /**
   * {...infoObject}
   *
   * @see info object
   */
  const info              = 'info';
  const jsonSchemaDialect = 'jsonSchemaDialect';
  /**
   * [serverObject, ...]
   *
   * @see server
   */
  const servers = 'servers';
  /**
   * {routePath: pathObject, ...}
   *
   * @see path
   */
  const paths = 'paths';
  /**
   * {hookName: pathObject, ...}
   *
   * @see path
   */
  const webhooks = 'webhooks';
  /**
   * {...componentsObject}
   *
   * @see components
   */
  const components = 'components';
  /**
   * {name: [string, ...], ...}<br/>
   * name 为已在 components 申明的安全验证方式
   *
   * @link https://spec.openapis.org/oas/v3.1.0#security-requirement-object OpenAPI 官方解释
   */
  const security = 'security';
  /**
   * [tagObject, ...]
   *
   * @see tag
   */
  const tags = 'tags';
  /**
   * {...externalDocsObject}
   *
   * @see externalDocs
   */
  const externalDocs = 'externalDocs';


  static $info         = info::class;
  static $server       = server::class;
  static $path         = path::class;
  static $webhook      = path::class;
  static $components   = components::class;
  static $tag          = tag::class;
  static $externalDocs = externalDocs::class;
}
