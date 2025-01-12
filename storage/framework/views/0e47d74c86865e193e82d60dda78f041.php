<ul class="account-nav">
    <li><a href="<?php echo e(route('user.index')); ?>" class="menu-link menu-link_us-s">Dashboard</a></li>
    <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
    <li><a href="account-address.html" class="menu-link menu-link_us-s">Addresses</a></li>
    <li><a href="account-details.html" class="menu-link menu-link_us-s">Account Details</a></li>
    <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
    <li>
        <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
            <?php echo csrf_field(); ?>
            <a href="<?php echo e(route('logout')); ?>" class="menu-link_us-s" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </form>
    </li>
    </ul><?php /**PATH C:\xampp\htdocs\laravel-11\resources\views/user/account-nav.blade.php ENDPATH**/ ?>