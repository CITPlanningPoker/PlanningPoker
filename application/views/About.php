<!--
  Created by Josh Tyra
  10/30/2018
-->
<!DOCTYPE HTML>
<?php echo link_tag('assets/css/main.css'); ?>
<?php echo link_tag('assets/css/font-awesome.min.css'); ?>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<html>
  <head>
    <title>About</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
      <div class="topnav">
          <a href="<?php echo site_url();?>/User/index">Home</a>
          <a href="<?php echo site_url();?>/User/planningPoker">Planning Poker</a>
          <a href="<?php echo site_url();?>/User/contactUS">Contact</a>
          <a class="active" href="">About</a>
      </div>
      <br><br><br><br><br>
    <!-- Header -->
      <header id="header">
        <div class="logo"><a>Planning Poker<span></a></div>
      </header>
    <!-- Main -->
      <section id="main">
        <div class="inner">

        <!-- One -->
          <section id="one" class="wrapper style1">

            <div class="image fit flush">
              <img src="<?php echo base_url();?>/assets/images/hero.jpg" alt="" />
            </div>
            <header class="special">
              <h2>What is planning poker?</h2>
            </header>
            <div class="content">
              <p> Planning poker, also called Scrum poker, is a consensus-based, gamified technique for estimating, mostly used to estimate effort or relative size of development goals in software development. In planning poker, members of the group make estimates by playing numbered cards face-down to the table, instead of speaking them aloud. The cards are revealed, and the estimates are then discussed. By hiding the figures in this way, the group can avoid the cognitive bias of anchoring, where the first number spoken aloud sets a precedent for subsequent estimates. </p>
            </div>
          </section>

      
          <section id="three" class="wrapper">
            <div class="spotlight">
              <div class="image flush"><img src="<?php echo base_url();?>/assets/images/pic06.jpg" alt="" /></div>
              <div class="inner">
                <h3>Why use planning poker?</h3>
                <p>The reason to use planning poker is to avoid the influence of the other participants. If a number is spoken, it can sound like a suggestion and influence the other participants' sizing. Planning poker should force people to think independently and propose their numbers simultaneously. This is accomplished by requiring that all participants show their card at the same time. </p>
              </div>
            </div>
            <div class="spotlight alt">
              <div class="image flush"><img src="<?php echo base_url();?>/assets/images/pic07.jpg" alt="" /></div>
              <div  class="inner">
                <h3>How it works.</h3>
                <p> Each estimator is holding a deck of cards with values 0, 1, 2, 3, 5, 8, 13, 20, 40, 100 The values represent the number of story points, ideal days, or other units in which the team estimates.The estimators discuss the feature, asking questions of the product owner as needed. When the feature has been fully discussed, each estimator privately selects one card to represent his or her estimate. All cards are then revealed at the same time. If all estimators selected the same value, that becomes the estimate. If not, the estimators discuss their estimates. The high and low estimators should especially share their reasons. After further discussion, each estimator reselects an estimate card, and all cards are again revealed at the same time.</p>
              </div>
            </div>
            <div class="spotlight">
              <div class="image flush"><img src="<?php echo base_url();?>/assets/images/pic08.jpg" alt="" /></div>
              <div class="inner">
                <h3>Placeholder</h3>
                <p></p>
              </div>
            </div>
          </section>
        </div>
      </section>
  </body>
</html>