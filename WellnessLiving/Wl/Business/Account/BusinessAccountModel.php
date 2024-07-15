<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of active businesses.
 *
 * To run this endpoint, a user must be authorized with the `rs.business.view` privilege.
 */
class BusinessAccountModel extends WlModelAbstract
{
  /**
   * A list of business keys.
   *
   * @get result
   * @var string[]
   */
  public $a_business_keys = [];

  /**
   * If `true`, existing customers are returned.
   *
   * If `false`, prospects are returned.
   *
   * Note that test and churned businesses are never returned.
   *
   * @get get
   * @var bool
   */
  public $is_prospects = false;

  /**
   * Specifies if only businesses having published locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_published = false;
}

?>