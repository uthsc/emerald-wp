<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!--************************************-->
<!--Mobile navigation bottom spacing fix-->
<!--************************************-->
<div class="mobile-nav-bottom-spacing-fix hide-for-large"></div>

<!--Safari bottom nav fix-->
<div class="safari-bottom-nav-fix"></div>
<!--Safari bottom nav fix-->
<!--*************************************-->
<!--/Mobile navigation bottom spacing fix-->
<!--*************************************-->

</div>
<!--*******************-->
<!--/Off canvas wrapper-->
<!--*******************-->


<!--********************-->
<!--Left off canvas menu-->
<!--********************-->
<nav id="uthsc-off-canvas-menu--slide-left" class="uthsc-off-canvas-menu uthsc-off-canvas-menu--slide-left hide-for-print">
    <?php get_search_form() ?>
  <!--  Close menu button-->
  <button class="uthsc-off-canvas-menu__close">
    Close Menu &emsp;<span class="fa fa-chevron-right" aria-hidden="true"></span>
  </button>
  <!--/ Close menu button-->
    <?php foundationpress_mobile_nav(); ?>
</nav>
<!--*********************-->
<!--/Left off canvas menu-->
<!--*********************-->


<!--*********************-->
<!--Right off canvas menu-->
<!--*********************-->
<nav id="uthsc-off-canvas-menu--slide-right" class="uthsc-off-canvas-menu uthsc-off-canvas-menu--slide-right hide-for-print" aria-hidden="true">

  <div class="off-canvas-search">
      <?php get_search_form() ?>
  </div>

  <!--  Close menu button-->
  <button class="uthsc-off-canvas-menu__close">
    Close Menu &emsp;<span class="fa fa-chevron-right" aria-hidden="true"></span>
  </button>
  <!--/ Close menu button-->


  <!--Mission links-->
  <div class="mission-links">
    <h2 class="link-heading">Mission</h2>

    <a href="http://uthsc.edu/education/"><span class="uthsc-fa-centered fa fa-graduation-cap" aria-hidden="true"></span>&emsp;Academics</a>
    <a href="http://uthsc.edu/research"><span class="uthsc-fa-centered fa fa-flask" aria-hidden="true"></span>&emsp;Research</a>
    <a href="http://uthsc.edu/clinicalcare/"><span class="uthsc-fa-centered fa fa-medkit" aria-hidden="true"></span>&emsp;Clinical Care</a>
    <a href="http://uthsc.edu/publicservice/"><span class="uthsc-fa-centered fa fa-globe" aria-hidden="true"></span>&emsp;Public Service</a>
  </div>

  <a href="http://uthsc.edu/give/" class="call-to-action-link"><span class="uthsc-fa-centered fa fa-gift" aria-hidden="true"></span>&emsp;Make a Gift</a>
  <a href="http://uthsc.edu/admissions/visit-uthsc.php" class="call-to-action-link"><span class="uthsc-fa-centered fa fa-road" aria-hidden="true"></span>&emsp;Take a Tour</a>

  <ul>
    <li><span class="link-heading">Information for...</span>
      <ul>
        <li><a href="http://uthsc.edu/students/">Students</a></li>
        <li><a href="http://uthsc.edu/faculty/">Faculty &amp; Staff</a></li>
        <li><a href="http://uthsc.edu/alumni/">Alumni</a></li>
        <li><a href="http://uthsc.edu/visitors/">Visitors</a></li>
        <li><a href="http://uthsc.edu/clinicalcare/">Patients</a></li>
      </ul>
    </li>
    <li><span class="link-heading">Resources</span>
      <ul>
        <li><a href="http://uthsc.edu/banner/info/">Banner</a></li>
        <li><a href="http://courses.uthsc.edu/">Blackboard</a></li>
        <li><a href="http://events.uthsc.edu/">Calendar</a></li>
        <li><a href="http://uthsc.edu/hr/employment/">Career Opportunities</a></li>
        <li><a href="http://uthsc.edu/ilogin/">iLogin</a></li>
        <li><a href="http://library.uthsc.edu/">Library</a></li>
        <li><a href="http://uthsc.edu/map/">Maps</a></li>
        <li><a href="http://utap.tennessee.edu/">MyUT</a></li>
        <li><a href="http://news.uthsc.edu/">News</a></li>
        <li><a href="http://o365.uthsc.edu/">Webmail</a></li>
      </ul>
    </li>
  </ul>

  <!--Safari bottom nav fix-->
  <div class="safari-bottom-nav-fix"></div>
  <!--Safari bottom nav fix-->
</nav>
<!--**********************-->
<!--/Right off canvas menu-->
<!--**********************-->


<!--***************-->
<!--Off canvas mask-->
<!--***************-->
<div id="uthsc-off-canvas-mask" class="uthsc-off-canvas-mask hide-for-print"></div><!-- /uthsc-off-canvas-mask -->
<!--****************-->
<!--/Off canvas mask-->
<!--****************-->


<!--******************-->
<!--Off canvas buttons-->
<!--******************-->
<div aria-hidden="true" id="mobile-navigation" class="hide-for-large hide-for-print">
  <button id="uthsc-off-canvas-button--slide-left" class="toggle-slide-left button"></button>
  <button id="uthsc-off-canvas-button--slide-right" class="toggle-slide-right button"></button>

  <!--Safari bottom nav fix-->
  <div class="safari-bottom-nav-fix"></div>
  <!--Safari bottom nav fix-->
</div>
<!--*******************-->
<!--/Off canvas buttons-->
<!--*******************-->

