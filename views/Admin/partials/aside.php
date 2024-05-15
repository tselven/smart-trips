      <?php

      use Core\Helper; ?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php Helper::route("/dashboard/{$SESSION['user']}") ?>">
              <img alt="image" src="<?php Helper::route('/image/logo.png') ?>" class="header-logo" /> <span class="logo-name">Smart Trips</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="dropdown <?php if ($title == "Home") {
                                  echo "active";
                                } ?>">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <?php
            if ($type == "Admin") {
              $url = Helper::url('/dashboard/users');
              $active = ($title == "Users") ? "active" : "disabled";
              $temp = <<<EOT
                <li class="{$active}"><a href="{$url}" class="nav-link"><i data-feather="briefcase"></i><span>Users</span></a></li>
                EOT;
              echo $temp;
            }
            ?>

            <?php
            if ($type == "Admin") {
              $url = Helper::url('/dashboard/guides');
              $active = ($title == "Guides") ? "active" : "disabled";
              $temp = <<<EOT
                <li class="{$active}"><a href="{$url}" class="nav-link"><i data-feather="command"></i><span>Tour Guides</span></a></li>
                EOT;
              echo $temp;
            }
            ?>

            <?php
            if ($type == "Admin") {
              $url = Helper::url('/dashboard/partners');
              $active = ($title == "Partners") ? "active" : "disabled";
              $temp = <<<EOT
                <li class="{$active}"><a href="{$url}" class="nav-link"><i data-feather="mail"></i><span>Partners</span></a></li>
                EOT;
              echo $temp;
            }
            ?>

            <li class="dropdown <?php if ($title == "Articles") {
                                  echo "active";
                                } ?>">
              <a href="<?php Helper::route('/dashboard/articles') ?>" class="nav-link"><i data-feather="copy"></i><span>Articles</span></a>
            </li>
            <?php
            if ($type == "Guide") {
              $temp = <<<EOT
              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Web Manager</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="avatar.html">Edit Web Page</a></li>
                <li><a class="nav-link" href="card.html">Select Theme</a></li>
                <li><a class="nav-link" href="modal.html">Page Settings</a></li>
              </ul>
            </li>
            EOT;
              echo $temp;
            }
            ?>
            <?php
            if ($type == "Admin") {
              $url = Helper::url('/dashboard/siteSettings');
              $temp = <<<EOT
              <li><a class="nav-link" href="{$url}"><i data-feather="file"></i><span>Site Settings</span></a></li>
              EOT;
              echo $temp;
            }
            ?>

            <li class="dropdown <?php if ($title == "Profile") {
                                  echo "active";
                                } ?>"><a href="<?php Helper::route('/dashboard/profile') ?>" class="nav-link"><i data-feather="layout"></i><span>Profile</span></a></li>
          </ul>
        </aside>
      </div>