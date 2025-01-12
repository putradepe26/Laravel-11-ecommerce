
<?php $__env->startSection('content'); ?>
<style>
  .brand-list li .category-list
  {
    line-height: 40px;
  }

  .brand-list li .cjk-brand , category-list li .chk-category 
  {
    width: 1rem;
    height: 1rem;
    color: #e4e4e4;
    border:0.125rem solid currentColor;
    border-radius:  0;
    margin-right:  0.75rem;
  }
  .filled-heart
  {
    color: orange;
  }

</style>
<main class="pt-90">
    <section class="shop-main container d-flex pt-4 pt-xl-5">
      <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
        <div class="aside-header d-flex d-lg-none align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div>

        <div class="pt-4 pt-lg-0"></div>

        <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
                Product Categories
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
              <div class="accordion-body px-0 pb-0 pt-3" category-list>
                <ul class="list list-inline mb-0">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-item">
                    <span class="menu-link py-1">
                      <input type="checkbox" class="chk-category" name="categories" value="<?php echo e($category->id); ?>" 
                        <?php if(in_array($category->id,explode(',',$f_categories))): ?> checked="checked" <?php endif; ?>
                      />
                      <?php echo e($category->name); ?>

                    </span>
                    <span class="text right float-end"><?php echo e($category->products->count()); ?></span>
                    
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      

        <div class="accordion" id="brand-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-brand">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
                Brands
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
              <div class="search-field multi-select accordion-body px-0 pb-0">
                  <ul class="list list-inline mb-0 brand-list">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-item">
                      <span class="menu-link py-1">
                        <input type="checkbox" name="brands" value="<?php echo e($brand->id); ?>" class="chk-brand"
                        <?php if(in_array($brand->id,explode(',',$f_brands))): ?> checked="checked" <?php endif; ?>>
                        <?php echo e($brand->name); ?>

                      </span>
                      <span class="text-right float-end">
                        <?php echo e($brand->products->count()); ?>

                      </span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul> 
              </div>
            </div>
          </div>
        </div>


        <div class="accordion" id="price-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header mb-2" id="accordion-heading-price">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
                Price
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-price" class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
              <input class="price-range-slider" type="text" name="price_range" value="" data-slider-min="1"
                data-slider-max="5000" data-slider-step="5" data-slider-value="[<?php echo e($min_price); ?>,<?php echo e($max_price); ?>]" data-currency="$" />
              <div class="price-range__info d-flex align-items-center mt-2">
                <div class="me-auto">
                  <span class="text-secondary">Min Price: </span>
                  <span class="price-range__min">$1</span>
                </div>
                <div>
                  <span class="text-secondary">Max Price: </span>
                  <span class="price-range__max">$5000</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shop-list flex-grow-1">
        <div class="swiper-container js-swiper-slider slideshow slideshow_small slideshow_split" data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 1,
            "effect": "fade",
            "loop": true,
            "pagination": {
              "el": ".slideshow-pagination",
              "type": "bullets",
              "clickable": true
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                <div class="slide-split_text position-relative d-flex align-items-center"
                  style="background-color: #f5e6e0;">
                  <div class="slideshow-text container p-3 p-xl-5">
                    <h2
                      class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                      Women's <br /><strong>ACCESSORIES</strong></h2>
                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5">Accessories are the best way to
                      update your look. Add a title edge with new styles and new colors, or go for timeless pieces.</h6>
                  </div>
                </div>
                <div class="slide-split_media position-relative">
                  <div class="slideshow-bg" style="background-color: #f5e6e0;">
                    <img loading="lazy" src="assets/images/shop/shop_banner3.jpg" width="630" height="450"
                      alt="Women's accessories" class="slideshow-bg__img object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                <div class="slide-split_text position-relative d-flex align-items-center"
                  style="background-color: #f5e6e0;">
                  <div class="slideshow-text container p-3 p-xl-5">
                    <h2
                      class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                      Women's <br /><strong>ACCESSORIES</strong></h2>
                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5">Accessories are the best way to
                      update your look. Add a title edge with new styles and new colors, or go for timeless pieces.</h6>
                  </div>
                </div>
                <div class="slide-split_media position-relative">
                  <div class="slideshow-bg" style="background-color: #f5e6e0;">
                    <img loading="lazy" src="assets/images/shop/shop_banner3.jpg" width="630" height="450"
                      alt="Women's accessories" class="slideshow-bg__img object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="slide-split h-100 d-block d-md-flex overflow-hidden">
                <div class="slide-split_text position-relative d-flex align-items-center"
                  style="background-color: #f5e6e0;">
                  <div class="slideshow-text container p-3 p-xl-5">
                    <h2
                      class="text-uppercase section-title fw-normal mb-3 animate animate_fade animate_btt animate_delay-2">
                      Women's <br /><strong>ACCESSORIES</strong></h2>
                    <p class="mb-0 animate animate_fade animate_btt animate_delay-5">Accessories are the best way to
                      update your look. Add a title edge with new styles and new colors, or go for timeless pieces.</h6>
                  </div>
                </div>
                <div class="slide-split_media position-relative">
                  <div class="slideshow-bg" style="background-color: #f5e6e0;">
                    <img loading="lazy" src="assets/images/shop/shop_banner3.jpg" width="630" height="450"
                      alt="Women's accessories" class="slideshow-bg__img object-fit-cover" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container p-3 p-xl-5">
            <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-4 pb-xl-2"></div>

          </div>
        </div>

        <div class="mb-3 pb-2 pb-xl-3"></div>

        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="<?php echo e(route('home.index')); ?>" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
          </div>

          <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1" >
            <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Page Size" id="pagesize" name="pagesize" style="margin-right:20px;">
              <option value="12" <?php echo e($size==12 ? 'selected':''); ?>>Show</option>
              <option value="24" <?php echo e($size==24 ? 'selected':''); ?>>24</option>
              <option value="36" <?php echo e($size==36 ? 'selected':''); ?>>36</option>
              <option value="48" <?php echo e($size==48 ? 'selected':''); ?>>48</option>
              <option value="72" <?php echo e($size==72 ? 'selected':''); ?>>72</option>
              <option value="96" <?php echo e($size==96 ? 'selected':''); ?>>96</option>

            </select>

            <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" id="orderby" name="orderby">                        
              <option value="default" <?php echo e($sorting=='default'? 'selected':''); ?>>Default Sorting</option>                               
              <option value="date" <?php echo e($sorting=='date'? 'selected':''); ?>>Sort by newness</option>
              <option value="price"<?php echo e($sorting=='price'? 'selected':''); ?>>Sort by price: low to high</option>
              <option value="price-desc" <?php echo e($sorting=='price-desc'? 'selected':''); ?>>Sort by price: high to low</option>
          </select>

            <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

            <div class="col-size align-items-center order-1 d-none d-lg-flex">
              <span class="text-uppercase fw-medium me-2">View</span>
              <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
              <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
              <button class="btn-link fw-medium js-cols-size" data-target="products-grid" data-cols="4">4</button>
            </div>

            <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
              <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
                <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_filter" />
                </svg>
                <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
              </button>
            </div>
          </div>
        </div>

        <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="product-card-wrapper">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?php echo e(route('shop.product.details',["product_slug"=>$product->slug])); ?>"><img loading="lazy" src="<?php echo e(asset('uploads/products')); ?>/<?php echo e($product->image); ?>" width="330" height="400" alt="<?php echo e($product->name); ?>" class="pc__img"></a>
                    </div>
                    <div class="swiper-slide">
                        <?php $__currentLoopData = explode(",",$product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gimg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('shop.product.details',["product_slug"=>$product->slug])); ?>"><img loading="lazy" src="<?php echo e(asset('uploads/products')); ?>/<?php echo e($gimg); ?>" width="330" height="400" alt="<?php echo e($product->name); ?>" class="pc__img"></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_prev_sm" />
                    </svg></span>
                  <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_next_sm" />
                    </svg></span>
                </div>
                <?php if(Cart::instance("cart")->content()->Where('id',$product->id)->count()>0): ?>
                <a href="<?php echo e(route('cart.index')); ?>" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart btn-warning">Go to Cart</a>
            <?php else: ?>
            <form name="addtocart-form" method="POST" action="<?php echo e(route('cart.add')); ?>">
                <?php echo csrf_field(); ?>
                                                              
                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                    <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                    <input type="hidden" name="quantity" value="1"/>
                    <input type="hidden" name="price" value="<?php echo e($product->sale_price == '' ? $product->regular_price:$product->sale_price); ?>" />
                    <button type="submit" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart">Add to Cart</button>
                </div>
            </form>
            <?php endif; ?>   

              <div class="pc__info position-relative">
                <p class="pc__category"><?php echo e($product->category->name); ?></p>
                <h6 class="pc__title">
                    <a href="<?php echo e(route('shop.product.details',["product_slug"=>$product->slug])); ?>"><?php echo e($product->name); ?></a>
                </h6>
                <div class="product-card__price d-flex">
                  <span class="money price">
                    <?php if($product->sale_price): ?>
                        <s>$<?php echo e($product->regular_price); ?></s> $<?php echo e($product->sale_price); ?>

                    <?php else: ?>
                        $<?php echo e($product->regular_price); ?>

                    <?php endif; ?>
                    </span>
                </div>
                <div class="product-card__review d-flex align-items-center">
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                  <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                </div>
                
                <?php if(Cart::instance("wishlist")->content()->Where('id',$product->id)->count()>0): ?>
                <form method="POST" action="<?php echo e(route('wishlist.item.remove',['rowId'=>Cart::instance("wishlist")->content()->Where('id',$product->id)->first()->rowId])); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist filled-heart" title="Remove from wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_heart" />
                  </svg>
                </button>
                <?php else: ?>
                <form method="POST" action="<?php echo e(route('wishlist.add')); ?>">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                  <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                  <input type="hidden" name="quantity" value="1"/>
                  <input type="hidden" name="price" value="<?php echo e($product->sale_price == '' ? $product->regular_price:$product->sale_price); ?>" />
                  <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart" />
                    </svg>
                  </button>
                  </form>
                <?php endif; ?>
              </div>
            </div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="divider"></div>
        <div class="flex item-center justify-between flex-wrap gap10 wgp-pagination">
            <?php echo e($products->withQueryString()->links('pagination::bootstrap-5')); ?>

        </div>
      </div>
    </section>
  </main>
  
  <form id="frmfilter" method="GET" action="<?php echo e(route('shop.index')); ?>">
    <input type="hidden" name="page" value="<?php echo e($products->currentPage()); ?>">
    <input type="hidden" name="size" id="size" value="<?php echo e($size); ?>" />
    <input type="hidden" name="sorting" id="sorting" value="<?php echo e($sorting); ?>" />
    <input type="hidden" name="brands" id="hdnBrands" />
    <input type="hidden" name="categories" id="hdnCategories" />
    <input type="hidden" name="min" id="hdnMinPrice" value="<?php echo e($min_price); ?>" />
    <input type="hidden" name="max" id="hdnMaxPrice" value="<?php echo e($max_price); ?>" />
  </form>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>

      $(function(){
        $("#pagesize").on("change",function(){                    
          $("#size").val($("#pagesize option:selected").val());
          $("#frmfilter").submit();
      });

      $("#orderby").on("change",function(){                    
        $("#sorting").val($("#orderby option:selected").val());
        $("#frmfilter").submit(); 
      });

      $("input[name='brands']").on("change",function(){
            var brands ="";
            $("input[name='brands']:checked").each(function(){
            if(brands=="")
              {
                brands += $(this).val();
              }
              else
              {
                brands += "," + $(this).val();
              }
            });
            $("#hdnBrands").val(brands);
            $("#frmfilter").submit();
        });

        $("input[name='categories']").on("change",function(){
            var categories ="";
            $("input[name='categories']:checked").each(function(){
            if(categories=="")
              {
                categories += $(this).val();
              }
              else
              {
                categories += "," + $(this).val();
              }
            });
            $("#hdnCategories").val(categories);
            $("#frmfilter").submit();
        });

        $("[name='price_range']").on("change",function(){
          var min = $(this).val().split(',')[0];
          var max = $(this).val().split(',')[1];
          $("#hdnMinPrice").val(min);
          $("#hdnMaxPrice").val(max);
          setTimeout(() => {
            $("#frmfilter").submit();
          }, 2000);
        }); 


    });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/shop.blade.php ENDPATH**/ ?>