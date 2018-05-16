<?php
/**
 * Copyright (c) 2014, 2015, 2016, 2018 Eclipse Foundation.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 *   Christopher Guindon (Eclipse Foundation) - Initial implementation
 *   Eric Poirier (Eclipse Foundation)
 *
 * SPDX-License-Identifier: EPL-2.0
 */
?>
<script>
setTimeout(function () {
  var cookieButtons = document.querySelectorAll('.cc-compliance .cc-btn')
  for (var i=0; i<cookieButtons.length; i++) {
    cookieButtons[i].addEventListener("click", function () {
      location.reload()
    });
  }
}, 1000)
</script>


<div class="block-box block-box-classic">

  <div class="jumbotron black" style="background-color: transparent">
    <h1>Eclipse Kura</h1>
      <p class="lead">Kura is a Java/OSGi-based framework for IoT gateways. Kura APIs offer access to the underlying hardware (serial ports, GPS, watchdog, GPIOs, I2C, etc.),
      management of network configurations, communication with M2M/IoT Integration Platforms, and gateway management.</p>
  </div>

<div id="main-carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item image-item active">
      <img src="content/images/kura_status.png" alt="Kura status page">
    </div>
    <div class="item">
      <img src="content/images/kura_network.png" alt="Kura network page">
    </div>
    <div class="item">
      <img src="content/images/kura_firewall.png" alt="Kura firewall page">
    </div>
    <div class="item">
      <img src="content/images/kura_position.png" alt="Kura position page">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

  <style>
    .carousel-inner .item {
      height: 600px !important;
      text-align: center !important;
      overflow: hidden !important;
    }
    .carousel-inner img {
      height: 100% !important;
      width: auto !important;
      display: inline !important;
    }
    .carousel {
      background-color: rgb(49, 49, 49) !important;
    }
  </style>
</div>

<div class="news-list news-list-match-height">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-2 col-md-12 news-list-col padding-bottom-50">
        <div class="news-list-icon text-center">
          <i data-feather="activity" stroke-width="1"></i>
        </div>
        <h2 class="text-center">Project News</h2>
        <ul class="news-list-media list-unstyled">
          <li>
            <a href="https://www.slideshare.net/eclipsekura/building-iot-mashups-for-industry-40-with-eclipse-kura-and-kura-wires" target="_blank" class="media media-link">
            <h4 class="media-heading">IoT Meetup</h4>
            <p class="media-text">Building IoT Mashups for Industry 4.0 with Eclipse Kura and Kura Wires</p></a>
          </li>
          <li>
            <a href="https://www.eclipsecon.org/europe2016/session/industry-40-eclipse-kura" target="_blank" class="media media-link">
            <h4 class="media-heading">EclipseCON 2016</h4>
            <p class="media-text">Industry 4.0 with Eclipse Kura</p></a>
          </li>
          <li>
            <a href="https://tobiddev.wordpress.com/" target="_blank" class="media media-link">
            <h4 class="media-heading">Kura Projects</h4>
            <p class="media-text">Industrial Monitoring Project using Kura</p></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-10 col-md-12 news-list-col padding-bottom-50">
        <div class="news-list-icon text-center">
          <i data-feather="activity" stroke-width="1"></i>
        </div>
        <h2 class="text-center">Twitter Feed</h2>
        <ul class="news-list-media list-unstyled">
          <li>
          <?php
          	if ($Theme->hasCookieConsent()) {
            echo '<div class="twitter-feed"> <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%40eclipsekura%20-RT%20OR%20%23eclipsekapua%20-RT" data-widget-id="786273082092630024">Tweets about @eclipsekura -RT OR #eclipsekapua -RT</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>';
			}
			?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="timeline">
  <div class="row">
    <div class="col-md-6 one gs-item">
      <div class="circle">1</div>
      <h1 class="fw-600">Getting Started</h1>
      <p>On a Raspberry Pi 2 or 3, you can download Kura from here:
      </p>
      <p><a class="btn btn-warning" href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/3.2.0/kura_3.2.0_raspberry-pi-2-3_installer.deb">Download</a></p>
      <!-- /downloads/packages/eclipse-standard-432/keplersr2 -->
      <hr>
      <p>For other platforms, please refer to the Documentation Page.</p>
      <p><a class="btn btn-warning" href="http://eclipse.github.io/kura/">Documentation</a></p>
    </div>
    <div class="col-md-6 two  gs-item">
      <div class="circle">2</div>
      <h1>Wires</h1>
      <p>The <b>Wires</b> feature aims to <b>simplify the development of IoT Edge Computing Applications</b> leveraging reusable configurable components
      that can be wired together and which, eventually, allows configurable cooperation between these components. In the dataflow programming model,
      <b>the application logic is expressed as a directed graph</b> (flow) where each node can have inputs, outputs, and independent processing units.
      </p>
      <p><a class="btn btn-info" href="//eclipse.github.io/kura/wires/kura-wires-intro.html">Learn More</a></p>
    </div>
    <div class="col-md-6 three gs-item">
      <div class="circle">3</div>
      <h1>Extend</h1>
      <p>These are a few of the popular references to extend your Kura framework: </p>
      <ul>
        <li>Getting Started with the <a href="http://eclipse.github.io/kura/builtin/intro.html">Framework Functionalities</a></li>
        <li>Getting Started with <a href="http://eclipse.github.io/kura/dev/kura-setup.html">Java development</a></li>
        <li>Access the <a href="//marketplace.eclipse.org/taxonomy/term/4397%2C4396/title">Marketplace</a></li>
      </ul>
    </div>
    <div class="col-md-6 four gs-item">
      <div class="circle">4</div>
      <h1>Next Steps</h1>
      <ul>
        <li>There are many online sources of help in the Eclipse Kura community. First thing to do is to <a href="https://github.com/eclipse/kura">access the repository</a> and clone or fork it.</li>
        <li>Our <a href="https://www.eclipse.org/forums/index.php/f/273/">forum</a> is great places to ask questions.</li>
        <li>Project <a href="https://accounts.eclipse.org/mailing-list/kura-dev">mailing list</a> are good source of what is going on in the project.</li>
      </ul>
    </div>
  </div>
</div>
