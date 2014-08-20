<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> 

<head profile="<?php print $grddl_profile; ?>">
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
 
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
  <?php print $styles; ?>
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="/themes/hostingycloud/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="/themes/hostingycloud/css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="/themes/hostingycloud/css/responsive-leyouts.css" type="text/css" />
    

<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/colors/brown.css" />-->
    


<!-- just remove the below comments witch bg patterns you want to use -->
    
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="/themes/hostingycloud/css/bg-patterns/pattern-nine.css" />-->
    
    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "/themes/hostingycloud/js/style-switcher/color-switcher.css" />
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="/themes/hostingycloud/js/jcarousel/skin.css" />
    
    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" type="text/css" href="/themes/hostingycloud/js/revolutionslider/css/fullwidth.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/themes/hostingycloud/js/revolutionslider/rs-plugin/css/settings.css" media="screen" />
	
  <?php print $scripts; ?>
    <!-- faqs -->
    <link rel="stylesheet" href="/themes/hostingycloud/js/accordion/accordion.css" type="text/css" media="all">
    
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
