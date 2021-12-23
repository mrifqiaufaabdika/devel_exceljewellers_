<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <title><?php echo $__env->yieldContent('page-title'); ?></title>
  <?php echo $__env->yieldContent('canonical'); ?>
  <meta name="description" content="<?php echo $__env->yieldContent('page-description'); ?>">
  
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="robots" content="index, follow">
<meta name="author" content="Brandon Huynh">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">



	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/general.css?'.time().'')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/slick.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/fine-jewellery.css?'.time().'')); ?>">
    <script type="text/javascript" src="<?php echo e(URL::asset('js/fine-jewellery.js?'.time().'')); ?>"></script>
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo e(asset('storage/image/page_img/icon.png')); ?>" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123725715-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-123725715-3');
    </script>
    <script defer src="https://connect.podium.com/widget.js#API_TOKEN=a8f93567-4a3e-4b10-b7f1-4002da972e4b" id="podium-widget" data-api-token="a8f93567-4a3e-4b10-b7f1-4002da972e4b"></script>
    <!-- Pinterest Tag -->
    <script>
    !function(e){if(!window.pintrk){window.pintrk = function () {
    window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
      n=window.pintrk;n.queue=[],n.version="3.0";var
      t=document.createElement("script");t.async=!0,t.src=e;var
      r=document.getElementsByTagName("script")[0];
      r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
    pintrk('load', '2614076105532', {em: '<user_email_address>'});
    pintrk('page');
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://ct.pinterest.com/v3/?event=init&tid=2614076105532&pd[em]=<hashed_email_address>&noscript=1" />
    </noscript>
    <!-- end Pinterest Tag -->
</head>
<body>

	<header>
		<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<main>
    <div id="fine-jewellery-setting-container">
      <h1><?php echo $__env->yieldContent('title'); ?></h1>
      <?php echo $__env->make('include.fj-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div id="fine-jewellery">

        <?php if(count($fine_jewellery) > 0): ?>
          <?php
           $i = 0;
          ?>
          <div id="fine-jewellery-container">
          
          <?php $__currentLoopData = $fine_jewellery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $i++
          ?>
          <?php if($i == 1): ?>
          <div class="fine-jewellery-inner" data-count="<?php echo e($count); ?>">
          <?php else: ?>
          <div class="fine-jewellery-inner">
          <?php endif; ?>


              <a href="<?php echo e(url('/fine-jewellery/'.$fj['product']->item_sku)); ?>">
                <div class="ajax-ctn">
                  <?php if($fj['product']->brand == 'Verragio'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/verragio.png')); ?>">
                  <?php elseif($fj['product']->brand == 'GabrielCo'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/gabriel.svg')); ?>">
                  <?php elseif($fj['product']->brand == 'Valina'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/valina.png')); ?>">
                  <?php elseif($fj['product']->brand == 'Romance'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/romance.png')); ?>">
                  <?php elseif($fj['product']->brand == 'SimonG'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/simong.png')); ?>">
                  <?php elseif($fj['product']->brand == 'charles&colvard'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/charlescolvard.svg')); ?>">
                  <?php endif; ?>
                  <div class="preloader-ctn">
                    <img class="preloader-img" src="<?php echo e(asset('storage/image/page_img/loader.svg')); ?>">
                  </div>
                  <img class="ajax-img" alt="<?php echo e($fj['product']->metal); ?> <?php echo e($fj['product']->color); ?> Gold <?php echo e($fj['product']->style); ?> <?php echo e($fj['product']->name); ?> <?php echo e($fj['product']->brand); ?> Surrey Vancouver Canada Langley Burnaby Richmond" src="<?php echo e(asset('storage/image/fine-jewellery-list/'.$fj['product']->image.'-1.jpg')); ?>">
                </div>
                <div class="colors">

                  <div class="<?php echo e($fj['product']->color); ?>-code alt-m" data-img="<?php echo e(asset('storage/image/fine-jewellery-list/'.$fj['product']->image.'-1.jpg')); ?>" data-link="<?php echo e(url('/fine-jewellery/'.$fj['product']->item_sku)); ?>" data-name="<?php echo e($fj['product']->name); ?>" data-price="<?php echo e(number_format(\App\Helper\AppHelper::conversion($fj['product']->currency,$fj['product']->price,session('currency')),2)); ?>"></div>

                  <?php $__currentLoopData = $fj['other_color']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other => $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="<?php echo e($o->color); ?>-code alt-m" data-img="<?php echo e(asset('storage/image/fine-jewellery-list/'.$o->image.'-1.jpg')); ?>" data-link="<?php echo e(url('/fine-jewellery/'.$o->item_sku)); ?>" data-name="<?php echo e($o->name); ?>" data-price="<?php echo e(number_format(\App\Helper\AppHelper::conversion($o->currency,$o->price,session('currency')),2)); ?>"></div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                </div>
                <?php if($fj['product']->sale_price): ?>
                <div class="sale_label">LIMITED TIME OFFER</div>
                <?php endif; ?>
                <div class="fine-jewellery-text">
                  <p class="fine-jewellery-text-title"><?php echo e($fj['product']->name); ?></p>
                  <?php if($fj['product']->sale_price): ?>
                  <p><span class="text-sale-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($fj['product']->currency,$fj['product']->sale_price,session('currency')),2)); ?></span> <span class="cross-text-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($fj['product']->currency,$fj['product']->price,session('currency')),2)); ?></span></p>
                  <?php else: ?>
                  <p class="fine-jewellery-text-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($fj['product']->currency,$fj['product']->price,session('currency')),2)); ?></p>
                  <?php endif; ?>
                </div>
              </a>


          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        <?php else: ?>
          <div class="no-results">No Results Were Found</div>
        <?php endif; ?>

      </div>
	
    </div>
	</main>
	<footer>
		<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</footer>
	<?php echo $__env->make('include.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<script type="text/javascript" src="<?php echo e(asset('js/general.js?'.time().'')); ?>"></script>
<script>
pintrk('track', 'pagevisit');
</script><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/layouts/finejewellery.blade.php ENDPATH**/ ?>