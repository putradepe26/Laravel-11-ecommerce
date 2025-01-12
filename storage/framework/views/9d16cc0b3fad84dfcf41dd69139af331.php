
<?php $__env->startSection('content'); ?>

<style>
    .cart-total th, .cart-total td
    {
        color:green;
        font-weight: bold;
        font-size: 21px !important;
    }
</style>
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Shipping and Checkout</h2>
        <div class="checkout-steps">
            <a href="<?php echo e(route('cart.index')); ?>" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
                    <span>Shopping Bag</span>
                    <em>Manage Your Items List</em>
                </span>
            </a>
            <a href="<?php echo e(route('cart.checkout')); ?>" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">02</span>
                <span class="checkout-steps__item-title">
                    <span>Shipping and Checkout</span>
                    <em>Checkout Your Items List</em>
                </span>
            </a>
            <a href="#" class="checkout-steps__item">
                <span class="checkout-steps__item-number">03</span>
                <span class="checkout-steps__item-title">
                    <span>Confirmation</span>
                    <em>Order Confirmation</em>
                </span>
            </a>
        </div>
        <form name="checkout-form" action="<?php echo e(route('cart.place.order')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="checkout-form">
                <div class="billing-info__wrapper">
                    <div class="row">
                        <div class="col-6">
                            <h4>SHIPPING DETAILS</h4> 
                        </div>
                        <div class="col-6">
                            
                        </div>
                    </div>   
                    <?php if($address): ?> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my-account__address-list">
                                <div class="my-account__address-item">                                    
                                    <div class="my-account__address-item__detail">
                                        <p><?php echo e($address->name); ?></p>
                                        <p><?php echo e($address->address); ?></p>
                                        <p><?php echo e($address->landmark); ?></p>
                                        <p><?php echo e($address->city); ?>, <?php echo e($address->state); ?>, <?php echo e($address->country); ?></p>
                                        <p><?php echo e($address->zip); ?></p>
                                        

                                        <p>Phone :- <?php echo e($address->phone); ?></p>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>  
                    <?php else: ?>             
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                <label for="name">Full Name *</label>
                                <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">
                                <label for="phone">Phone Number *</label>
                                <span class="text-danger"><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="zip" value="<?php echo e(old('zip')); ?>">
                                <label for="zip">Pincode *</label>
                                <span class="text-danger"><?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>                        
                        <div class="col-md-4">
                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control" name="state" value="<?php echo e(old('state')); ?>">
                                <label for="state">State *</label>
                                <span class="text-danger"><?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>                            
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>">
                                <label for="city">Town / City *</label>
                                <span class="text-danger"><?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>">
                                <label for="address">House no, Building Name *</label>
                                <span class="text-danger"><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="locality" value="<?php echo e(old('locality')); ?>">
                                <label for="locality">Road Name, Area, Colony *</label>
                                <span class="text-danger"><?php $__errorArgs = ['locality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="landmark" value="<?php echo e(old('landmark')); ?>">
                                <label for="landmark">Landmark *</label>
                                <span class="text-danger"><?php $__errorArgs = ['landmark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>                                         
                    </div> 
                    <?php endif; ?>                   
                </div>
                <div class="checkout__totals-wrapper">
                    <div class="sticky-content">
                        <div class="checkout__totals">
                            <h3>Your Order</h3>
                            <table class="checkout-cart-items">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th class="text-right">SUBTOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($item->name); ?> x <?php echo e($item->qty); ?>

                                        </td>
                                        <td class="text-right">
                                            $<?php echo e($item->subtotal); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                </tbody>
                            </table>
                            <?php if(Session::has('discounts')): ?>
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td class="text-right">$<?php echo e(Cart::instance('cart')->subtotal()); ?></td>
                                    </tr> 
                                    <tr>
                                        <th>Discount <?php echo e(Session("coupon")["code"]); ?></th>
                                        <td class="text-right">-$<?php echo e(Session("discounts")["discount"]); ?></td>
                                    </tr> 
                                    <tr>
                                        <th>Subtotal After Discount</th>
                                        <td class="text-right">$<?php echo e(Session("discounts")["subtotal"]); ?></td>
                                    </tr>   
                                    <tr>
                                        <th>SHIPPING</th>
                                        <td class="text-right">Free</td>
                                    </tr>                             
                                    <tr>
                                        <th>VAT</th>
                                        <td class="text-right">$<?php echo e(Session("discounts")["tax"]); ?></td>
                                    </tr>
                                    <tr class="cart-total">
                                        <th>Total</th>
                                        <td class="text-right">$<?php echo e(Session("discounts")["total"]); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th>SUBTOTAL</th>
                                        <td class="text-right">$<?php echo e(Cart::instance('cart')->subtotal()); ?></td>
                                    </tr>
                                    <tr>
                                        <th>SHIPPING</th>
                                        <td class="text-right">Free</td>
                                    </tr>
                                    <tr>
                                        <th>VAT</th>
                                        <td class="text-right">$<?php echo e(Cart::instance('cart')->tax()); ?></td>
                                    </tr>
                                    <tr class="cart-total">
                                        <th>TOTAL</th>
                                        <td class="text-right">$<?php echo e(Cart::instance('cart')->total()); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php endif; ?>
                        </div>
                        <div class="checkout__payment-methods">
                            <div class="form-check">
                                <input class="form-check-input form-check-input_fill" type="radio" name="mode" value="card" id="mode1">
                                <label class="form-check-label" for="mode1">
                                    Debit or Credit Card                                    
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input form-check-input_fill" type="radio" name="mode" value="paypal" id="model2">
                                <label class="form-check-label" for="mode2">
                                    Paypal                                    
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-input_fill" type="radio" name="mode" value="cod" checked id="mode3">
                                <label class="form-check-label" for="mode3">
                                    Cash on delivery                                    
                                </label>
                            </div>
                            <div class="policy-text">
                                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="terms.html" target="_blank">privacy policy</a>.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">PLACE ORDER</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/checkout.blade.php ENDPATH**/ ?>