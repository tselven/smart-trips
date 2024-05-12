      <?php

      use Helpers\Helper; ?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php Helper::route("/dashboard/{$SESSION['user']}") ?>">
              <img alt="image" src="<?php Helper::route('/image/logo.png') ?>" class="header-logo" /> <span class="logo-name">Smart Trips</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="dropdown <?php if($title == "Home"){ echo "active";}?>">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown  <?php if($title == "Users"){ echo "active";}?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Users</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">View Users</a></li>
                <li><a class="nav-link" href="widget-data.html">Add Users</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Tour Guides</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">View Guides</a></li>
                <li><a class="nav-link" href="portfolio.html">Add Guide</a></li>
                <li><a class="nav-link" href="blog.html"></a>Guide Analytics</li>
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Partners</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Add Partners</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Articles</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">All Articles</a></li>
                <li><a class="nav-link" href="badge.html">Add New Articles</a></li>
                <li><a class="nav-link" href="breadcrumb.html">Add Tags</a></li>
                <li><a class="nav-link" href="buttons.html">Add Categories</a></li>
                <li><a class="nav-link" href="collapse.html">Collapse</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Web Manager</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="avatar.html">Edit Web Page</a></li>
                <li><a class="nav-link" href="card.html">Select Theme</a></li>
                <li><a class="nav-link" href="modal.html">Page Settings</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Site Settings</span></a></li>
            <li><a href="#" class="nav-link"><i data-feather="layout"></i><span>Profile</span></a></li>
          </ul>
        </aside>
      </div>