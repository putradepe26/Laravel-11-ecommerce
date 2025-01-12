
<?php $__env->startSection('content'); ?>
<style>
    .table-transaction>tbody>tr:nth-of-type(odd) 
    {
        --bs-table-accent-bg: #fff !important;
        
    }    
    .table-transaction th, .table-transaction td 
    {
        padding: 0.625rem 1.5rem .25rem; !important;
        color:#000 !important;        
    }
    .table > :not(caption) > tr > th 
    {
        padding: 0.625rem 1.5rem .25rem !important;
        background-color: #6a6e51 !important;   
    }
    .table-bordered>:not(caption)>*>*{border-width:inherit;line-height:32px;font-size:14px;border:1px solid #e1e1e1;vertical-align:middle;}
    .table-striped .image{display:flex;align-items:center;justify-content:center;width:50px;height:50px;flex-shrink:0;border-radius:10px;overflow:hidden;}
    .table-striped  td:nth-child(1){min-width:250px;padding-bottom:7px;}
    .pname{display:flex;gap:13px;}
    .table-bordered > :not(caption) > tr > th, .table-bordered > :not(caption) > tr > td 
    {
        border-width: 1px 1px;
        border-color: #6a6e51;
    }
 
</style>
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Order Details</h2>
        <div class="row">
            <div class="col-lg-2">
                <?php echo $__env->make('user.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-lg-10">
                <?php if(Session::has('status')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('status')); ?></p>
                <?php endif; ?>
                <div class="wg-box mt-5 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <h5>Ordered Details</h5>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-sm btn-danger" href="<?php echo e(route('user.account.orders')); ?>">Back</a>
                        </div>
                    </div>                    
                    <div class="table-responsive">
                        
                        <table class="table table-bordered table-striped table-transaction">
                            <tr>
                                <th>Order No</th>
                                <td><?php echo e("1" . str_pad($transaction->order->id,4,"0",STR_PAD_LEFT)); ?></td>
                                <th>Mobile</th>
                                <td><?php echo e($transaction->order->phone); ?></td>
                                <th>Pin/Zip Code</th>
                                <td><?php echo e($transaction->order->zip); ?></td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td><?php echo e($transaction->order->created_at); ?></td>
                                <th>Delivered Date</th>
                                <td><?php echo e($transaction->order->delivered_date); ?></td>
                                <th>Canceled Date</th>
                                <td><?php echo e($transaction->order->canceled_date); ?></td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td colspan="5">
                                    <?php if($transaction->order->status=='delivered'): ?>
                                        <span class="badge bg-success">Delivered</span>
                                    <?php elseif($transaction->order->status=='canceled'): ?>
                                        <span class="badge bg-danger">Canceled</span>
                                    <?php else: ?>
                                        <span class="badge bg-primary">Ordered</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="wg-box wg-table table-all-user">
                    <div class="row">
                        <div class="col-6">
                            <h5>Ordered Items</h5>
                        </div>
                        <div class="col-6 text-right">
                            
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
                                <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <i class="fa fa-eye"></i>
                                                </div>                                                                    
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                            </tbody>
                        </table>               
                    </div>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">                
                    <?php echo e($orderItems->links('pagination::bootstrap-5')); ?>

                </div>

                <div class="wg-box mt-5">
                    <h5>Shipping Address</h5>
                    <div class="my-account__address-item col-md-6">                
                        <div class="my-account__address-item__detail">
                            <p><?php echo e($transaction->order->name); ?></p>
                            <p><?php echo e($transaction->order->address); ?></p>
                            <p><?php echo e($transaction->order->locality); ?></p>
                            <p><?php echo e($transaction->order->city); ?>, <?php echo e($transaction->order->country); ?></p>
                            <p><?php echo e($transaction->order->landmark); ?></p>
                            <p><?php echo e($transaction->order->zip); ?></p>
                            <br />                                
                            <p>Mobile : <?php echo e($transaction->order->phone); ?></p>
                        </div>
                    </div>              
                </div>

                <div class="wg-box mt-5">
                    <h5>Transactions</h5>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-transaction">
                        <tr>
                            <th>Subtotal</th>
                            <td>$<?php echo e($transaction->order->subtotal); ?></td>
                            <th>Tax</th>
                            <td>$<?php echo e($transaction->order->tax); ?></td>
                            <th>Discount</th>
                            <td>$<?php echo e($transaction->order->discount); ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>$<?php echo e($transaction->order->total); ?></td>
                            <th>Payment Mode</th>
                            <td><?php echo e($transaction->mode); ?></td>
                            <th>Status</th>
                            <td>
                                <?php if($transaction->status=='approved'): ?>
                                    <span class="badge bg-success">Approved</span>
                                <?php elseif($transaction->status=='declined'): ?>
                                    <span class="badge bg-danger">Declined</span>
                                <?php elseif($transaction->status=='refunded'): ?>
                                    <span class="badge bg-secondary">Refunded</span>
                                <?php else: ?>
                                    <span class="badge bg-primary">Pending</span>
                                <?php endif; ?>
                            </td>
                        </tr>                        
                    </table>
                    </div>
                </div>                
            </div>
            
            <?php if($order->status =='ordered'): ?>
            <div class="wg-box mt-5 text-right">                    
                <form action="<?php echo e(route('user.account.cancel.order')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>" />
                    <button type="butto" class="btn btn-danger cancel-order">Cancel Order</button>                        
                </form>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function(){
            $(".cancel-order").on('click',function(e){
                e.preventDefault();
                var selectedForm = $(this).closest('form');
                swal({
                    title: "Are you sure?",
                    text: "You want to cancel this order?",
                    type: "warning",
                    buttons: ["No!", "Yes!"],
                    confirmButtonColor: '#dc3545'
                }).then(function (result) {
                    if (result) {
                        selectedForm.submit();  
                    }
                });                             
            });
        });
    </script>    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/user/order-details.blade.php ENDPATH**/ ?>