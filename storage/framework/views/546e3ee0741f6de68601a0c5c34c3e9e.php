
<?php $__env->startSection('content'); ?>
<style>
    .table-transaction>tbody>tr:nth-of-type(odd) 
    {
        --bs-table-accent-bg: #fff !important;
    }    
</style>
<div class="main-content-inner">                            
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Order Details</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="<?php echo e(route('admin.index')); ?>">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>                                                                           
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Order Items</div>
                </li>
            </ul>
        </div>       
        
        <div class="wg-box mt-5 mb-5">            
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <h5>Ordered Details</h5>
                </div>
                <a class="tf-button style-1 w208" href="<?php echo e(route('admin.orders')); ?>">Back</a>
            </div>
            <div class="table-responsive">  
                <?php if(Session::has('status')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('status')); ?></p>        
                <?php endif; ?>
                <table class="table table-striped table-bordered table-transaction">
                    <tr>
                        <th>Order No</th>
                        <td><?php echo e($order->id); ?></td>
                        <th>Mobile</th>
                        <td><?php echo e($order->phone); ?></td>
                        <th>Pin/Zip Code</th>
                        <td><?php echo e($order->zip); ?></td>
                    </tr>
                    <tr>
                        <th>Order Date</th>
                        <td><?php echo e($order->created_at); ?></td>
                        <th>Delivered Date</th>
                        <td><?php echo e($order->delivered_date); ?></td>
                        <th>Canceled Date</th>
                        <td><?php echo e($order->canceled_date); ?></td>
                    </tr>
                    <tr>
                        <th>Order Status</th>
                        <td colspan="5">
                            <?php if($order->status=='delivered'): ?>
                                <span class="badge bg-success">Delivered</span>
                            <?php elseif($order->status=='canceled'): ?>
                                <span class="badge bg-danger">Canceled</span>
                            <?php else: ?>
                                <span class="badge bg-warning">Ordered</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>        
        
        <div class="wg-box mt-5">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <h5>Ordered Items</h5>
                </div>            
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">SKU</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Brand</th>                                                        
                            <th class="text-center">Options</th>
                            <th class="text-center">Return Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td class="pname">
                                <div class="image">
                                    <img src="<?php echo e(asset('uploads/products/thumbnails')); ?>/<?php echo e($orderitem->product->image); ?>" alt="" class="image">
                                </div>
                                <div class="name">
                                    <a href="<?php echo e(route('shop.product.details',["product_slug"=>$orderitem->product->slug])); ?>" target="_blank" class="body-title-2"><?php echo e($orderitem->product->name); ?></a>                                    
                                </div>  
                            </td>
                            <td class="text-center">$<?php echo e($orderitem->price); ?></td>
                            <td class="text-center"><?php echo e($orderitem->quantity); ?></td>
                            <td class="text-center"><?php echo e($orderitem->product->SKU); ?></td>
                            <td class="text-center"><?php echo e($orderitem->product->category->name); ?></td>
                            <td class="text-center"><?php echo e($orderitem->product->brand->name); ?></td>
                            <td class="text-center"><?php echo e($orderitem->options); ?></td>
                            <td class="text-center"><?php echo e($orderitem->status == 0 ? "No":"Yes"); ?></td>                                                                                
                            <td class="text-center">
                                <a href="<?php echo e(route('shop.product.details',["product_slug"=>$orderitem->product->slug])); ?>" target="_blank">
                                    <div class="list-icon-function view-icon">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>                                                                    
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                    </tbody>
                </table>
            </div>
            
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">                
                <?php echo e($orderitems->links('pagination::bootstrap-5')); ?>

            </div>
        </div>

        <div class="wg-box mt-5">
            <h5>Shipping Address</h5>
            <div class="my-account__address-item col-md-6">                
                <div class="my-account__address-item__detail">
                    <p><?php echo e($order->name); ?></p>
                    <p><?php echo e($order->address); ?></p>
                    <p><?php echo e($order->locality); ?></p>
                    <p><?php echo e($order->city); ?>, <?php echo e($transaction->order->country); ?></p>
                    <p><?php echo e($order->landmark); ?></p>
                    <p><?php echo e($order->zip); ?></p>
                    <br />                                
                    <p>Mobile : <?php echo e($order->phone); ?></p>
                </div>
            </div>              
        </div>

        <div class="wg-box mt-5">
            <h5>Update Order Status</h5>
            <form action="<?php echo e(route('admin.order.status.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>"  />
                <div class="row">
                    <div class="col-md-3">
                        <div class="select">
                            <select id="order_status" name="order_status">                            
                                <option value="ordered" <?php echo e($order->status=="ordered" ? "selected":""); ?>>Ordered</option>
                                <option value="delivered" <?php echo e($order->status=="delivered" ? "selected":""); ?>>Delivered</option>
                                <option value="canceled" <?php echo e($order->status=="canceled" ? "selected":""); ?>>Canceled</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary tf-button w208">Update Status</button>
                    </div>                    
                </div>
            </form>
        </div>       
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/admin/order-details.blade.php ENDPATH**/ ?>