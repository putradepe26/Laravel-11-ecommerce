

<?php $__env->startSection('content'); ?>
<div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Coupon infomation</h3>
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
                    <div class="text-tiny">New Coupon</div>
                </li>
            </ul>
        </div>        
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" method="POST" action="<?php echo e(route('admin.coupon.store')); ?>" >
                <?php echo csrf_field(); ?>
                <fieldset class="name">
                    <div class="body-title">Coupon Code <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Coupon Code" name="code" tabindex="0" value="<?php echo e(old('code')); ?>" aria-required="true">
                </fieldset>
                <?php $__errorArgs = ["code"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger text-center"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <fieldset class="category">
                    <div class="body-title">Coupon Type</div>
                    <div class="select flex-grow">
                        <select class="" name="type">
                            <option value="">Select</option>
                            <option value="fixed" <?php if(old('type')=="fixed"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Fixed</option>
                            <option value="percent" <?php if(old('type')=="percent"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Percent</option>
                        </select>
                    </div>
                </fieldset>
                <?php $__errorArgs = ["type"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger text-center"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <fieldset class="name">
                    <div class="body-title">Value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Coupon Value" name="value" tabindex="0" value="<?php echo e(old('value')); ?>" aria-required="true">
                </fieldset>
                <?php $__errorArgs = ["value"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger text-center"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <fieldset class="name">
                    <div class="body-title">Cart Value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Cart Value" name="cart_value" tabindex="0" value="<?php echo e(old('cart_value')); ?>" aria-required="true">
                </fieldset>
                <?php $__errorArgs = ["cart_value"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger text-center"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <fieldset class="name">
                    <div class="body-title">Expire Date <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="date" placeholder="Expire Date" name="expire_date" tabindex="0" value="<?php echo e(old('expire_date')); ?>" aria-required="true">
                </fieldset>  
                <?php $__errorArgs = ["expire_date"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger text-center"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>              
                
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/admin/coupon-add.blade.php ENDPATH**/ ?>