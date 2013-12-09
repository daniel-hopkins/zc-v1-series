<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_navigation.php 19366 2011-08-28 20:21:09Z wilt $
 */

if (!defined('IS_ADMIN_FLAG')) die('Illegal Access');

$menuTitles = zen_get_menu_titles();
?>

<div class="sticky">
  <nav id="navbar" class="top-bar" data-topbar>
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name"></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <!-- Left Nav Section -->
      <ul class="left">
        <?php foreach (zen_get_admin_menu_for_user() as $menuKey => $pages) { ?>
          <li class="has-dropdown">
            <!-- <a href="<?php echo zen_href_link(FILENAME_ALT_NAV) ?>"><?php echo $menuTitles[$menuKey] ?></a> -->
            <a href="#0"><?php echo $menuTitles[$menuKey] ?></a>
            <ul class="dropdown">
              <?php foreach ($pages as $page) { ?>
                <li><a href="<?php echo zen_href_link($page['file'], $page['params']) ?>"><?php echo $page['name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li class="divider"></li>
        <?php } ?>
      </ul>

    </section>
  </nav>
</div>