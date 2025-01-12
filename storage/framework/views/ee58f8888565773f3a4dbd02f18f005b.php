
<?php $__env->startSection('content'); ?>
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Wishlist</h2>             
        <div class="shopping-cart">
            <?php if(Cart::instance("wishlist")->content()->count()>0): ?>
            <div class="cart-table__wrapper">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th></th>
                            <th>Price</th>                        
                            <th colspan="2">Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlistItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="shopping-cart__product-item">
                                    <img loading="lazy" src="<?php echo e(asset('uploads/products/thumbnails')); ?>/<?php echo e($wishlistItem->model->image); ?>" width="120" height="120" alt="" />
                                </div>
                            </td>
                            <td>
                                <div class="shopping-cart__product-item__detail">
                                    <h4><?php echo e($wishlistItem->name); ?></h4>
                                    
                                </div>
                            </td>
                            
                            <td>
                                <span class="shopping-cart__product-price">$<?php echo e($wishlistItem->price); ?></span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <form method="POST" action="<?php echo e(route('wishlist.move.to.cart',['rowId'=>$wishlistItem->rowId])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-sm btn-warning">Move to cart</button>
                                        </form>
                                    </div>
                                    <div class="col-3">
                                        <form method="POST" action="<?php echo e(route('wishlist.item.remove',['rowId'=>$wishlistItem->rowId])); ?>">                                    
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("DELETE"); ?>
                                            <button type="submit" class="remove-cart btn btn-sm btn-danger">Remove</button>
                                        </form>
                                    </div>
                                </div>                                     
                            </td>
                        </tr>   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>      
                <div class="cart-table-footer">
                <form method="POST" action="<?php echo e(route('wishlist.empty')); ?>">                   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-light" type="submit">CLEAR WISHLIST CART</button>
                </form>
                </div>          
            </div>   
            <?php else: ?>
                <div class="row">
                    <div class="col-md-12">
                        <p>No item found in your wishlist</p>

                        <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-info">Wishlist Now</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/wishlist.blade.php ENDPATH**/ ?>