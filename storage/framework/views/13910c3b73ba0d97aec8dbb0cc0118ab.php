<?php $__env->startSection('content'); ?>
<main class="pt-90">
  <div class="mb-4 pb-4"></div>
  <section class="my-account container">
    <h2 class="page-title">My Account</h2>
    <div class="row">
      <div class="col-lg-3">
        <?php echo $__env->make("user.account-nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-lg-9">
        <div class="page-content my-account__dashboard">
          <p>Hello <strong>User</strong></p>
          <p>From your account dashboard you can view your <a class="unerline-link" href="account_orders.html">recent
              orders</a>, manage your <a class="unerline-link" href="account_edit_address.html">shipping
              addresses</a>, and <a class="unerline-link" href="account_edit.html">edit your password and account
              details.</a></p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-11\resources\views/user/index.blade.php ENDPATH**/ ?>