<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="surfside media" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animation.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('font/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('icon/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/sweetalert.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/custom.css')); ?>">
    
    <?php echo $__env->yieldPushContent("styles"); ?>
</head>

<body class="body">
  <div id="wrapper">
      <div id="page" class="">
          <div class="layout-wrap">

              <!-- <div id="preload" class="preload-container">
  <div class="preloading">
      <span></span>
  </div>
</div> -->

              <div class="section-menu-left">
                  <div class="box-logo">
                      <a href="<?php echo e(route('home.index')); ?>" id="site-logo-inner">
                          <img class="" id="logo_header_1" alt="" src="<?php echo e(asset('assets/images/PutraDPOlshop.png')); ?>"
                              data-light="<?php echo e(asset('assets/images/PutraDPOlshop.png')); ?>" data-dark="<?php echo e(asset('assets/images/PutraDPOlshop.png')); ?>">
                      </a>
                      <div class="button-show-hide">
                          <i class="icon-menu-left"></i>
                      </div>
                  </div>
                  <div class="center">
                      <div class="center-item">
                          <div class="center-heading">Main Home</div>
                          <ul class="menu-list">
                              <li class="menu-item">
                                  <a href="<?php echo e(route('admin.index')); ?>" class="">
                                      <div class="icon"><i class="icon-grid"></i></div>
                                      <div class="text">Dashboard</div>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="center-item">
                          <ul class="menu-list">
                              <li class="menu-item has-children">
                                  <a href="javascript:void(0);" class="menu-item-button">
                                      <div class="icon"><i class="icon-shopping-cart"></i></div>
                                      <div class="text">Products</div>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="sub-menu-item">
                                          <a href="<?php echo e(route('admin.product.add')); ?>" class="">
                                              <div class="text">Add Product</div>
                                          </a>
                                      </li>
                                      <li class="sub-menu-item">
                                          <a href="<?php echo e(route('admin.products')); ?>" class="">
                                              <div class="text">Products</div>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="menu-item has-children">
                                <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-layers"></i></div>
                                <div class="text">Brand</div>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="<?php echo e(route('admin.brand.add')); ?>" class="">
                                        <div class="text">New Brand</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="<?php echo e(route('admin.brands')); ?>" class="">
                                        <div class="text">Brands</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                              <li class="menu-item has-children">
                                  <a href="javascript:void(0);" class="menu-item-button">
                                      <div class="icon"><i class="icon-layers"></i></div>
                                      <div class="text">Category</div>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="sub-menu-item">
                                          <a href="<?php echo e(route('admin.category.add')); ?>" class="">
                                              <div class="text">New Category</div>
                                          </a>
                                      </li>
                                      <li class="sub-menu-item">
                                          <a href="<?php echo e(route('admin.categories')); ?>" class="">
                                              <div class="text">Categories</div>
                                          </a>
                                      </li>
                                  </ul>
                              </li>

                              <li class="menu-item has-children">
                                  <a href="javascript:void(0);" class="menu-item-button">
                                      <div class="icon"><i class="icon-file-plus"></i></div>
                                      <div class="text">Order</div>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="sub-menu-item">
                                          <a href="<?php echo e(route('admin.orders')); ?>" class="">
                                              <div class="text">Orders</div>
                                          </a>
                                      </li>
                                      <li class="sub-menu-item">
                                          <a href="order-tracking.html" class="">
                                              <div class="text">Order tracking</div>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="menu-item">
                                  <a href="<?php echo e(route('admin.slides')); ?>" class="">
                                      <div class="icon"><i class="icon-image"></i></div>
                                      <div class="text">Slides</div>
                                  </a>
                              </li>
                              <li class="menu-item">
                                  <a href="<?php echo e(route('admin.contacts')); ?>" class="">
                                      <div class="icon"><i class="icon-mail"></i></div>
                                      <div class="text">Messages</div>
                                  </a>
                              </li>
                              <li class="menu-item">
                                <a href="<?php echo e(route('admin.coupons')); ?>" class="">
                                    <div class="icon"><i class="icon-grid"></i></div>
                                    <div class="text">Coupons</div>
                                </a>
                            </li>

                              <li class="menu-item">
                                  <a href="#" class="">
                                      <div class="icon"><i class="icon-user"></i></div>
                                      <div class="text">User</div>
                                  </a>
                              </li>

                              <li class="menu-item">
                                  <a href="settings.html" class="">
                                      <div class="icon"><i class="icon-settings"></i></div>
                                      <div class="text">Settings</div>
                                  </a>
                              </li>

                              <li class="menu-item">
                                <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                                  <?php echo csrf_field(); ?>
                                  <a href="<?php echo e(route('logout')); ?>" class="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <div class="icon"><i class="icon-settings"></i></div>
                                    <div class="text">Logout</div>
                                </a>
                            </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="section-content-right">

                  <div class="header-dashboard">
                      <div class="wrap">
                          <div class="header-left">
                              <a href="index-2.html">
                                  <img class="" id="logo_header_mobile" alt="" src="<?php echo e(asset('images/logo/logo.png')); ?>"
                                      data-light="<?php echo e(asset('images/logo/logo.png')); ?>" data-dark="<?php echo e(asset('images/logo/logo.png')); ?>"
                                      data-width="154px" data-height="52px" data-retina="<?php echo e(asset('images/logo/logo.png')); ?>">
                              </a>
                              <div class="button-show-hide">
                                  <i class="icon-menu-left"></i>
                              </div>


                              <form class="form-search flex-grow">
                                  <fieldset class="name">
                                      <input type="text" placeholder="Search here..." class="show-search" name="name" id="search-input" tabindex="2" value="" aria-required="true" required="" autocomplete="off">
                                  </fieldset>
                                  <div class="button-submit">
                                      <button class="" type="submit"><i class="icon-search"></i></button>
                                  </div>
                                  <div class="box-content-search">
                                    <ul id="box-content-search">
                                    </ul>
                                  </div>
                              </form>

                          </div>
                          <div class="header-grid">

                              <div class="popup-wrap message type-header">
                                  <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button"
                                          id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                          <span class="header-item">
                                              <span class="text-tiny">1</span>
                                              <i class="icon-bell"></i>
                                          </span>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end has-content"
                                          aria-labelledby="dropdownMenuButton2">
                                          <li>
                                              <h6>Notifications</h6>
                                          </li>
                                          <li>
                                              <div class="message-item item-1">
                                                  <div class="image">
                                                      <i class="icon-noti-1"></i>
                                                  </div>
                                                  <div>
                                                      <div class="body-title-2">Discount available</div>
                                                      <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                                                          at, ullamcorper nec diam</div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="message-item item-2">
                                                  <div class="image">
                                                      <i class="icon-noti-2"></i>
                                                  </div>
                                                  <div>
                                                      <div class="body-title-2">Account has been verified</div>
                                                      <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                                                          et</div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="message-item item-3">
                                                  <div class="image">
                                                      <i class="icon-noti-3"></i>
                                                  </div>
                                                  <div>
                                                      <div class="body-title-2">Order shipped successfully</div>
                                                      <div class="text-tiny">Integer aliquam eros nec sollicitudin
                                                          sollicitudin</div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="message-item item-4">
                                                  <div class="image">
                                                      <i class="icon-noti-4"></i>
                                                  </div>
                                                  <div>
                                                      <div class="body-title-2">Order pending: <span>ID 305830</span>
                                                      </div>
                                                      <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li><a href="#" class="tf-button w-full">View all</a></li>
                                      </ul>
                                  </div>
                              </div>




                              <div class="popup-wrap user type-header">
                                  <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button"
                                          id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                          <span class="header-user wg-user">
                                              <span class="image">
                                                  <img src="images/avatar/user-1.png" alt="">
                                              </span>
                                              <span class="flex flex-column">
                                                  <span class="body-title mb-2">Admin</span>
                                                  <span class="text-tiny">Admin</span>
                                              </span>
                                          </span>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end has-content"
                                          aria-labelledby="dropdownMenuButton3">
                                          <li>
                                              <a href="#" class="user-item">
                                                  <div class="icon">
                                                      <i class="icon-user"></i>
                                                  </div>
                                                  <div class="body-title-2">Account</div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="user-item">
                                                  <div class="icon">
                                                      <i class="icon-mail"></i>
                                                  </div>
                                                  <div class="body-title-2">Inbox</div>
                                                  <div class="number">27</div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="user-item">
                                                  <div class="icon">
                                                      <i class="icon-file-text"></i>
                                                  </div>
                                                  <div class="body-title-2">Taskboard</div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="user-item">
                                                  <div class="icon">
                                                      <i class="icon-headphones"></i>
                                                  </div>
                                                  <div class="body-title-2">Support</div>
                                              </a>
                                          </li>
                                          <li>
                                            <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                                             <?php echo csrf_field(); ?>
                                              <a href="<?php echo e(route('logout')); ?>" class="user-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                  <div class="icon">
                                                      <i class="icon-log-out"></i>
                                                  </div>
                                                  <div class="body-title-2">Log out</div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="main-content">
                    <?php echo $__env->yieldContent('content'); ?>

                      <div class="bottom-page">
                          <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap-select.min.js')); ?>"></script>   
  <script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script>    
  <script src="<?php echo e(asset('js/apexcharts/apexcharts.js')); ?>"></script>
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

  <script>
    $(function(){
      $("#search-input").on("keyup",function(){
          var searchQuery = $(this).val();
            if(searchQuery.length > 2)
            {
              $.ajax({
                type:"GET",
                url:"<?php echo e(route('admin.search')); ?>",
                data: {query: searchQuery},
                dataType:'json',
                success : function(data){
                    $("#box-content-search").html('');
                    $.each(data,function(index,item){
                      var url = "<?php echo e(route('admin.product.edit',['id'=>'product_id'])); ?>";
                      var link = url.replace('product_slug_pls',item.id);

                      $("#box-content-search").append('
                        <li>
                          <ul>
                            <li class="product-item gap14 mb-10">
                              <div class="image no-bg">
                                <img src="<?php echo e(asset('uploads/products/thumbnails')); ?>/${item.image}" alt="${item.name}">
                              </div>
                              <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="name">
                                  <a href="${link}" class="body-text">${item.name}</a>
                                </div>
                              </div>
                            </li>
                            <li class="mb-10">
                              <div class="divider"></div>
                            </li>
                          </ul>
                        </li>
                      ');
                    });
              }

            });
          }
      });
    });
  </script>
  
  <?php echo $__env->yieldPushContent("scripts"); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/layouts/admin.blade.php ENDPATH**/ ?>