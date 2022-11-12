<?php

namespace Qnnp\WebmanRoute\Defiend;

/**
 * info object
 */
class info {
  /**
   * REQUIRED
   */
  const title       = 'title';
  const summary     = 'summary';
  const description = 'description';
  /**
   * 服务条款 URL, MUST a URL
   */
  const termsOfService = 'termsOfService';
  /**
   * { ...contactObject }
   *
   * @see contact
   */
  const contact = 'contact';
  /**
   * { ...licenseObject }
   *
   * @see license
   */
  const license = 'license';
  /**
   * REQUIRED
   */
  const version = 'version';
  /**
   * @var contact
   */
  static $contact = contact::class;
  static $license = license::class;
}