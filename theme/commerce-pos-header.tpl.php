<?php

/**
 * @file
 * Default template file for the Commerce POS header.
 *
 * $account: The employee account currently signed in.
 */
?>

<div id="commerce-pos-header" class="clearfix">
  <div class="commerce-pos-header-employee-info">
    <ul class="clearfix">
      <li class="username">
        <?php print t('<em>@username</em> signed in', array('@username' => $account->name)); ?>
      </li>
      <li class="logout">
        <?php print l(t('sign out'), 'user/logout', array('query' => array('destination' => url('admin/commerce/pos')))); ?>
      </li>
    </ul>
  </div>

  <div class="commerce-pos-header-nav-cont clearfix">
    <div class="commerce-pos-header-links">
      <ul class="clearfix">
        <li><?php print l(t('Sale'), 'admin/commerce/pos/sale'); ?></li>
        <li><?php print l(t('Return'), 'admin/commerce/pos/return'); ?></li>
        <?php if (module_exists('commerce_pos_report')): ?>
          <li><?php print l(t('Reports'), 'admin/commerce/pos/end-of-day'); ?></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>

</div>
