<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\AuthAdmin;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/about',[HomeController::class,'abouts'])->name('home.about');

//Halaman untuk membuat Shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product_slug}',[ShopController::class,'product_details'])->name("shop.product.details");

//Halaman untuk membuat Cart (Menambah barang di keranjang)
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout');
Route::post('/cart/apply-coupon',[CartController::class,'apply_coupon_code'])->name('cart.coupon.apply');
Route::delete('/cart/remove-coupon',[CartController::class,'remove_coupon_code'])->name('cart.coupon.remove');

//Halaman untuk membuka Wishlist
Route::get('/wishlist',[WishlistController::class,'index'])->name('wishlist.index');
Route::post('/wishlist/add',[WishlistController::class,'add_to_wishlist'])->name('wishlist.add');
Route::delete('/wishlist/item/remove/{rowId}',[WishlistController::class,'remove_item_from_wishlist'])->name('wishlist.item.remove');
Route::delete('/wishlist/clear',[WishlistController::class,'empty_wishlist'])->name('wishlist.empty');
Route::post('/wishlist/move-to-cart/{rowId}',[WishlistController::class,'move_to_cart'])->name('wishlist.move.to.cart');

//Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_item_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_item_quantity'])->name('cart.qty.decrease');
Route::delete('/cart/remove/{rowId}', [CartController::class, 'remove_item_from_cart'])->name('cart.qty.decrease');
Route::delete('/cart/remove/{rowId}',[CartController::class,'remove_item_from_cart'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'empty_cart'])->name('cart.empty');

Route::get('/checkout',[CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/place_order',[CartController::class, 'place_order'])->name('cart.place.order');
Route::get('/order-confirmation',[CartController::class,'order_confirmation'])->name('cart.order.confirmation');

Route::get('/contact-us',[HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact/store',[HomeController::class, 'contact_store'])->name('home.contact.store');

Route::get('/search',[HomeController::class,'search'])->name('home.search');

Route::get('/terms-conditions',[HomeController::class,'terms'])->name('home.terms');
Route::get('/privacy-policy',[HomeController::class,'policy'])->name('home.policy');

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class, 'index'])->name('user.index');

    Route::get('/account-orders',[UserController::class,'account_orders'])->name('user.account.orders');
    Route::get('/account-order-details/{order_id}/details',[UserController::class,'account_order_details'])->name('user.account.order.details');
    Route::put('/account-order/cancel-order',[UserController::class,'account_order_cancel'])->name('user.account.cancel.order');

    Route::get('/account-wishlist',[WishlistController::class,'account_wishlist'])->name('account.wishlist');

    Route::post('/cart/apply-coupon',[CartController::class,'apply_coupon_code'])->name('cart.coupon.apply');
    Route::delete('/cart/remove-coupon',[CartController::class,'remove_coupon_code'])->name('cart.coupon.remove');

    
});

Route::middleware(['auth',AuthAdmin::class])->group(function(){
    
    Route::get('/admin',[AdminController::class, 'index'])->name('admin.index');

    //Halaman untuk membuat Brand/Merk
    Route::get('/admin/brands',[AdminController::class,'brands'])->name('admin.brands');
    Route::get('/admin/brand/add',[AdminController::class,'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brand/store',[AdminController::class,'add_brand_store'])->name('admin.brand.store');
    Route::get('/admin/brand/edit{id}',[AdminController::class,'edit_brand'])->name('admin.brand.edit');
    Route::put('/admin/brand/update',[AdminController::class,'update_brand'])->name('admin.brand.update');
    Route::delete('/admin/brand{id}/delete',[AdminController::class,'delete_brand'])->name('admin.brand.delete');

    //Halaman untuk membuat Kategori
    Route::get('/admin/categories',[AdminController::class,'categories'])->name('admin.categories');
    Route::get('/admin/category/add',[AdminController::class,'add_category'])->name('admin.category.add');
    Route::post('/admin/category/store',[AdminController::class,'add_category_store'])->name('admin.category.store');
    Route::get('/admin/category/{id}/edit',[AdminController::class,'edit_category'])->name('admin.category.edit');
    Route::put('/admin/category/update',[AdminController::class,'update_category'])->name('admin.category.update');
    Route::delete('/admin/category/{id}/delete',[AdminController::class,'delete_category'])->name('admin.category.delete');

    //Halaman untuk membuat Produk/Barang
    Route::get('/admin/products',[AdminController::class,'products'])->name('admin.products');
    Route::get('/admin/product/add',[AdminController::class,'add_product'])->name('admin.product.add');
    Route::post('/admin/product/store',[AdminController::class,'product_store'])->name('admin.product.store');
    Route::get('/admin/product/{id}/edit',[AdminController::class,'edit_product'])->name('admin.product.edit');
    Route::put('/admin/product/update',[AdminController::class,'update_product'])->name('admin.product.update');
    Route::delete('/admin/product/{id}/delete',[AdminController::class,'delete_product'])->name('admin.product.delete');

    // Halaman untuk membuat Kupon Diskon Barang
    Route::get('/admin/coupons',[AdminController::class,'coupons'])->name('admin.coupons');
    Route::get('/admin/coupon/add',[AdminController::class,'add_coupon'])->name('admin.coupon-add');
    Route::post('/admin/coupon/store',[AdminController::class,'add_coupon_store'])->name('admin.coupon.store');
    Route::get('/admin/coupon/{id}/edit',[AdminController::class,'edit_coupon'])->name('admin.coupon.edit');
    Route::put('admin/coupon/update',[AdminController::class,'update_coupon'])->name('admin.coupon.update');
    Route::delete('admin/coupon/{id}/delete',[AdminController::class,'delete_coupon'])->name('admin.coupon.delete');
    Route::post('/cart/apply-coupon',[CartController::class,'apply_coupon_code'])->name('cart.coupon.apply');
    Route::delete('/cart/remove-coupon',[CartController::class,'remove_coupon_code'])->name('cart.coupon.remove');

    Route::get('/admin/orders',[AdminController::class,'orders'])->name('admin.orders');
    Route::get('/admin/orders/{order_id}/details',[AdminController::class,'order_details'])->name('admin.orders.details');
    Route::put('/admin/orders/update-status',[AdminController::class,'update_order_status'])->name('admin.order.status.update');

    Route::get('/admin/slides',[AdminController::class,'slides'])->name('admin.slides');
    Route::get('/admin/slide/add',[AdminController::class,'slide_add'])->name('admin.slide.add');
    Route::post('/admin/slide/store',[AdminController::class,'slide_store'])->name('admin.slide.store');
    Route::get('/admin/slide/{id}/edit',[AdminController::class,'slide_edit'])->name('admin.slide.edit');
    Route::put('/admin/slide/update',[AdminController::class, 'slide_update'])->name('admin.slide.update');
    Route::delete('/admin/slide/{id}/delete',[AdminController::class,'slide_delete'])->name('admin.slide.delete');

    Route::get('admin/contact',[AdminController::class,'contacts'])->name('admin.contacts');
    Route::delete('/admin/contact/{id}/delete',[AdminController::class,'contact_delete'])->name('admin.contact.delete');

    //Route::get('admin/users',[AdminController::class,'users'])->name('admin.users');

    Route::get('/admin/search',[UserController::class,'search'])->name('admin.search');

});


