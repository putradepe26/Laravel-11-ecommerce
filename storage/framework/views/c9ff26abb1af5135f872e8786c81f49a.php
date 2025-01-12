
<?php $__env->startSection('content'); ?>
<style>
    .table> :not(caption)>tr>th {
      padding: 0.625rem 1.5rem .625rem !important;
      background-color: #6a6e51 !important;
    }

    .table>tr>td {
      padding: 0.625rem 1.5rem .625rem !important;
    }

    .table-bordered> :not(caption)>tr>th,
    .table-bordered> :not(caption)>tr>td {
      border-width: 1px 1px;
      border-color: #6a6e51;
    }

    .table> :not(caption)>tr>td {
      padding: .8rem 1rem !important;
    }
    .bg-success {
      background-color: #40c710 !important;
    }

    .bg-danger {
      background-color: #f44032 !important;
    }

    .bg-warning {
      background-color: #f5d700 !important;
      color: #000;
    }
  </style>
  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Orders</h2>
        <div class="row">
            <div class="col-lg-2">
                <?php echo $__env->make('user.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-lg-10">
                <div class="wg-table table-all-user">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 80px">OrderNo</th>
                                    <th>Name</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center">Tax</th>
                                    <th class="text-center">Total</th>                                    
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Order Date</th>
                                    <th class="text-center">Items</th>
                                    <th class="text-center">Delivered On</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e("1" . str_pad($order->id,4,"0",STR_PAD_LEFT)); ?></td>  
                                    <td class="text-center"><?php echo e($order->name); ?></td>
                                    <td class="text-center"><?php echo e($order->phone); ?></td>
                                    <td class="text-center">$<?php echo e($order->subtotal); ?></td>
                                    <td class="text-center">$<?php echo e($order->tax); ?></td>
                                    <td class="text-center">$<?php echo e($order->total); ?></td>                                    
                                    <td class="text-center">
                                        <?php if($order->status=='delivered'): ?>
                                            <span class="badge bg-success">Delivered</span>
                                        <?php elseif($order->status=='canceled'): ?>
                                            <span class="badge bg-danger">Canceled</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning">Ordered</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center"><?php echo e($order->created_at); ?></td>
                                    <td class="text-center"><?php echo e($order->orderItems->count()); ?></td>
                                    <td><?php echo e($order->delivered_date); ?></td>
                                    <td class="text-center">   
                                        <a href="<?php echo e(route('user.account.order.details',['order_id'=>$order->id])); ?>">                                     
                                        <div class="list-icon-function view-icon">
                                            <div class="item eye">
                                                <i class="fa fa-eye"></i>
                                            </div>                                        
                                        </div>                                        
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                            </tbody>
                        </table>                
                    </div>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">                
                    <?php echo e($orders->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
            
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\laravel-11\resources\views/user/orders.blade.php ENDPATH**/ ?>