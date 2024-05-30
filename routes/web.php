<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\StripePaymentComponent;
use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\User\UserReportComponent;
use App\Http\Livewire\Admin\AdminOrdersComponent;
use App\Http\Livewire\Admin\AdminReportComponent;
use App\Http\Livewire\Admin\AdminSellerComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Seller\SellerOrdersComponent;
use App\Http\Livewire\Seller\SellerReportComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Seller\SellerProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
// use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditSellerComponent;
// use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Seller\SellerCategoryComponent;
use App\Http\Livewire\Seller\SellerLocationComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCustomerComponent;
use App\Http\Livewire\Seller\SellerAddProductComponent;
use App\Http\Livewire\Seller\SellerEditProductComponent;
use App\Http\Livewire\Admin\AdminCommentsProductComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home.index');

Route::get('/shop', ShopComponent::class)->name('shop');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/cart', CartComponent::class)->name('shop.cart');

Route::get('/stripe-payment', StripePaymentComponent::class)->name('stripe.payment');




Route::get('/product-category/{slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/contact', ContactComponent::class)->name('contact');

Route::middleware(['checkoutauth'])->group(function () {
    Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'authuser'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/order_details/{order_id}', UserReportComponent::class)->name('user.report');
});

// Route::middleware(['auth', 'authadmin'])->group(function () {
//     Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
//     Route::get('/admin/categories', AdminCategoriesComponent::class)->name('admin.categories');
//     Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.category.add');
//     Route::get('/admin/category/edit/{category_id}', AdminEditCategoryComponent::class)->name('admin.category.edit');
//     Route::get('admin/products', AdminProductComponent::class)->name('admin.products');
//     Route::get('admin/product/add', AdminAddProductComponent::class)->name('admin.product.add');
//     Route::get('admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.product.edit');
//     Route::get('/admin/orders', AdminOrdersComponent::class)->name('admin.orders');
// });

Route::middleware(['auth', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}', AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/orders', AdminOrdersComponent::class)->name('admin.orders');
    Route::get('/admin/user/sellers', AdminSellerComponent::class)->name('admin.sellers');
    Route::get('/admin/user/customers', AdminUserComponent::class)->name('admin.customers');
    Route::get('/admin/product/{product_id}/comments', AdminCommentsProductComponent::class)->name('admin.product.comments');
    Route::get('/admin/order_details/{order_id}', AdminReportComponent::class)->name('admin.report');
    Route::get('/admin/seller/edit/{seller_id}', AdminEditSellerComponent::class)->name('admin.seller.edit');
    Route::get('/admin/customer/edit/{customer_id}', AdminEditCustomerComponent::class)->name('admin.customer.edit');
    // Route::get('/admin/seller_products', AdminSellerProductsComponent::class)->name('admin.seller_products');
    // Route::get('admin/product/add', AdminAddProductComponent::class)->name('admin.product.add');
    // Route::get('admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.product.edit');
});

Route::middleware(['auth', 'authseller'])->group(function () {
    Route::get('/seller/dashboard', SellerDashboardComponent::class)->name('seller.dashboard');
    Route::get('seller/products', SellerProductComponent::class)->name('seller.products');
    Route::get('seller/product/add', SellerAddProductComponent::class)->name('seller.product.add');
    Route::get('seller/product/edit/{product_id}', SellerEditProductComponent::class)->name('seller.product.edit');
    Route::get('/seller/orders', SellerOrdersComponent::class)->name('seller.orders');
    Route::get('/seller/location', SellerLocationComponent::class)->name('seller.location');
    Route::get('/seller/order_details/{order_id}', SellerReportComponent::class)->name('seller.report');
    Route::get('/seller/categories', SellerCategoryComponent::class)->name('seller.categories');
});


require __DIR__ . '/auth.php';
