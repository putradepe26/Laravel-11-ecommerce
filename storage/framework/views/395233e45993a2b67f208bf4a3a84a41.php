
<?php $__env->startSection('content'); ?>

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Coupon Information</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="<?php echo e(route('admin.index')); ?>"><div class="text-tiny">Dashboard</div></a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.coupons')); ?>"><div class="text-tiny">Coupons</div></a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Edit Coupon</div>
                </li>
            </ul>
        </div>        
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" method="POST" action="<?php echo e(route('admin.coupon.update')); ?>" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <input type="hidden" name="id" value="<?php echo e($coupon->id); ?>" />
                <fieldset class="name">
                    <div class="body-title">Coupon Code <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Coupon Code" name="code" tabindex="0" value="<?php echo e($coupon->code); ?>" aria-required="true" required="">
                </fieldset>
                <fieldset class="category">
                    <div class="body-title">Coupon Type</div>
                    <div class="select flex-grow">
                        <select class="" name="type">
                            <option value="">Select</option>
                            <option value="fixed" <?php echo e($coupon->type=='fixed'? 'selected':''); ?>>Fixed</option>
                            <option value="percent" <?php echo e($coupon->type=='percent'? 'selected':''); ?>>Percent</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Coupon Value" name="value" tabindex="0" value="<?php echo e($coupon->value); ?>" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Cart Value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Cart Value" name="cart_value" tabindex="0" value="<?php echo e($coupon->cart_value); ?>" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Expire Date <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="date" placeholder="Expire Date" name="expire_date" tabindex="0" value="<?php echo e($coupon->expire_date); ?>" aria-required="true" required="">
                </fieldset>                
                
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- /new-category -->
    </div>
    <!-- /main-content-wrap -->
</div>                    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/admin/coupon-edit.blade.php ENDPATH**/ ?>