<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\AdminLoginController;

// Route::fallback(function(){
//     return view('404');
// });

// Admin Routes
Route::name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('/', [AdminLoginController::class, 'create'])->name('loginForm');
    Route::post('/login', [AdminLoginController::class, 'store'])->name('login');
    
    // password
    Route::name('password.')->group(function () {
        Route::get('/forgot-password', [App\Http\Controllers\Auth\Admin\PasswordResetLinkController::class, 'create'])->name('request');
        Route::post('/forgot-password', [App\Http\Controllers\Auth\Admin\PasswordResetLinkController::class, 'store'])->name('email');
        Route::get('/password-reset/{token}', [App\Http\Controllers\Auth\Admin\NewPasswordController::class, 'create'])->name('reset');
        Route::post('/password-reset', [App\Http\Controllers\Auth\Admin\NewPasswordController::class, 'store'])->name('update');
    });
});

Route::name('admin.')->middleware('auth:admin')->group(function(){
    // dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    // admin
    Route::prefix('administrator')->name('administrator.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('view');
        Route::get('/edit/{admin}', [App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('edit');
        Route::post('/update/{admin}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('update');
    });
    // profile
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminProfileController::class, 'index'])->name('view');
        Route::get('/edit/{admin}', [App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('edit');
        Route::post('/update/{admin}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('update');
    });
    // staffs
    Route::prefix('staff')->name('staff.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\StaffController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\StaffController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\StaffController::class, 'store'])->name('store');
        Route::get('/edit/{admin}', [App\Http\Controllers\Admin\StaffController::class, 'edit'])->name('edit');
        Route::post('/update/{admin}', [App\Http\Controllers\Admin\StaffController::class, 'update'])->name('update');
        Route::get('/delete/{admin}', [App\Http\Controllers\Admin\StaffController::class, 'destroy'])->name('delete');
    });
    // users
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'user'])->name('view');
        Route::get('/user-delete/{user}', [App\Http\Controllers\Admin\AdminController::class, 'deleteUser'])->name('deleteUser');
    });
    // navigation
    Route::prefix('navigation')->name('navigation.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\NavigationController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\NavigationController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\NavigationController::class, 'store'])->name('store');
        // Route::get('/show/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'show'])->name('show');
        Route::get('/{type}/edit/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'edit'])->name('edit');
        Route::post('/update/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'update'])->name('update');
        Route::get('/delete/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'destroy'])->name('delete');
        Route::get('/deleteSubcategory/{subcategory}', [App\Http\Controllers\Admin\NavigationController::class, 'destroySubcategory'])->name('deleteSubcategory');
        Route::get('/status/{status}/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'status'])->name('status');
    });
    // category
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::get('/show/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('show');
        Route::get('/edit/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'status'])->name('status');
    });
    // sub category
    Route::prefix('subcategories')->name('subcategory.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SubcategoryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\SubcategoryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\SubcategoryController::class, 'store'])->name('store');
        Route::get('/show/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'show'])->name('show');
        Route::get('/edit/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'update'])->name('update');
        Route::get('/delete/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'status'])->name('status');
    });
    // post
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('view');
        Route::get('/post-format', [App\Http\Controllers\Admin\PostController::class, 'postFormat'])->name('format');
        Route::get('/add-post', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('create');
        Route::post('/get-subcategory', [App\Http\Controllers\Admin\PostController::class, 'getSubcategory'])->name('getSubcategory');
        Route::post('/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');
        Route::get('/show/{post}', [App\Http\Controllers\Admin\PostController::class, 'show'])->name('show');
        Route::get('/edit/{post}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('edit');
        Route::post('/update/{post}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('update');
        Route::get('/delete/{post}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{post}', [App\Http\Controllers\Admin\PostController::class, 'status'])->name('status');
        Route::get('/bulk-post', [App\Http\Controllers\Admin\PostController::class, 'bulkPost'])->name('bulkPost');
        Route::post('/bulk-post-upload', [App\Http\Controllers\Admin\PostController::class, 'bulkPostUpload'])->name('bulkPostUpload');
        
    });
    // post image
    Route::prefix('post-additional-image')->name('postImage.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostImageController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\PostImageController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PostImageController::class, 'store'])->name('store');
        Route::get('/show/{postImage}', [App\Http\Controllers\Admin\PostImageController::class, 'show'])->name('show');
        Route::get('/edit/{postImage}', [App\Http\Controllers\Admin\PostImageController::class, 'edit'])->name('edit');
        Route::post('/update/{postImage}', [App\Http\Controllers\Admin\PostImageController::class, 'update'])->name('update');
        Route::post('/delete/{postImage}', [App\Http\Controllers\Admin\PostImageController::class, 'destroy'])->name('delete');
    });
    // post image gallery
    Route::prefix('post-image-gallery')->name('postImageGallery.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'store'])->name('store');
        Route::get('/show/{postImageGallery}', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'show'])->name('show');
        Route::get('/edit/{postImageGallery}', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{postImageGallery}', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'update'])->name('update');
        Route::post('/delete/{postImageGallery}', [App\Http\Controllers\Admin\PostImageGalleryController::class, 'destroy'])->name('delete');
    });
    // post file gallery
    Route::prefix('post-file-gallery')->name('postFileGallery.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'store'])->name('store');
        Route::get('/show/{postFileGallery}', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'show'])->name('show');
        Route::get('/edit/{postFileGallery}', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{postFileGallery}', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'update'])->name('update');
        Route::post('/delete/{postFileGallery}', [App\Http\Controllers\Admin\PostFileGalleryController::class, 'destroy'])->name('delete');
        
    });
    // widget
    Route::prefix('widget')->name('widget.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\WidgetController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\WidgetController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\WidgetController::class, 'store'])->name('store');
        Route::get('/show/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'show'])->name('show');
        Route::get('/edit/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'edit'])->name('edit');
        Route::post('/update/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'update'])->name('update');
        Route::get('/delete/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'destroy'])->name('delete');
        Route::get('/status/{status/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'status'])->name('status');
    });
    // poll
    Route::prefix('poll')->name('poll.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PollController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\PollController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PollController::class, 'store'])->name('store');
        Route::get('/show/{poll}', [App\Http\Controllers\Admin\PollController::class, 'show'])->name('show');
        Route::get('/edit/{poll}', [App\Http\Controllers\Admin\PollController::class, 'edit'])->name('edit');
        Route::post('/update/{poll}', [App\Http\Controllers\Admin\PollController::class, 'update'])->name('update');
        Route::get('/delete/{poll}', [App\Http\Controllers\Admin\PollController::class, 'destroy'])->name('delete');
        Route::get('/status/{status/{poll}', [App\Http\Controllers\Admin\PollController::class, 'status'])->name('status');
    });
    // gallery
    Route::prefix('gallery')->name('gallery.')->group(function () {
        // album
        Route::prefix('album')->name('album.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'index'])->name('view');
            Route::get('/create', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'store'])->name('store');
            Route::get('/show/{galleryAlbum}', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'show'])->name('show');
            Route::get('/edit/{galleryAlbum}', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'edit'])->name('edit');
            Route::post('/update/{galleryAlbum}', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'update'])->name('update');
            Route::get('/delete/{galleryAlbum}', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'destroy'])->name('delete');
            Route::get('/status/{status/{galleryAlbum}', [App\Http\Controllers\Admin\GalleryAlbumController::class, 'status'])->name('status');
        });
        // category
        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'index'])->name('view');
            Route::get('/create', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'store'])->name('store');
            Route::get('/show/{galleryCategory}', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'show'])->name('show');
            Route::get('/edit/{galleryCategory}', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{galleryCategory}', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'update'])->name('update');
            Route::get('/delete/{galleryCategory}', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'destroy'])->name('delete');
            Route::get('/status/{status/{galleryCategory}', [App\Http\Controllers\Admin\GalleryCategoryController::class, 'status'])->name('status');
        });
        // image
        Route::prefix('image')->name('image.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\GalleryImageController::class, 'index'])->name('view');
            Route::get('/create', [App\Http\Controllers\Admin\GalleryImageController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\GalleryImageController::class, 'store'])->name('store');
            Route::get('/show/{galleryImage}', [App\Http\Controllers\Admin\GalleryImageController::class, 'show'])->name('show');
            Route::get('/edit/{galleryImage}', [App\Http\Controllers\Admin\GalleryImageController::class, 'edit'])->name('edit');
            Route::post('/update/{galleryImage}', [App\Http\Controllers\Admin\GalleryImageController::class, 'update'])->name('update');
            Route::post('/getCategory', [App\Http\Controllers\Admin\GalleryImageController::class, 'getCategory'])->name('getCategory');
            Route::get('/delete/{galleryImage}', [App\Http\Controllers\Admin\GalleryImageController::class, 'destroy'])->name('delete');
            Route::get('/status/{status/{galleryImage}', [App\Http\Controllers\Admin\GalleryImageController::class, 'status'])->name('status');
        });

    });
    // contact-message
    Route::prefix('contact-message')->name('contactMessage.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('view');
        Route::post('/delete/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'destroy'])->name('delete');
    });
    // comment
    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('/pending', [App\Http\Controllers\Admin\CommentController::class, 'pending'])->name('pending');
        Route::get('/approved', [App\Http\Controllers\Admin\CommentController::class, 'approved'])->name('approved');
        Route::get('/edit/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'edit'])->name('edit');
        Route::post('/update/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'update'])->name('update');
        Route::get('/delete-pending/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'destroyPending'])->name('deletePending');
        Route::get('/delete-approved/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'destroyApproved'])->name('deleteApproved');
    });
    // newsletter
    Route::prefix('newsletter')->name('newsletter.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\NewsletterController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\NewsletterController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\NewsletterController::class, 'store'])->name('store');
        Route::get('/show/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'show'])->name('show');
        Route::get('/edit/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'edit'])->name('edit');
        Route::post('/update/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'update'])->name('update');
        Route::get('/delete/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'destroy'])->name('delete');

        // newsletter subscriber
        Route::prefix('subscriber')->name('subscriber.')->group(function() {
            Route::get('/', [App\Http\Controllers\Admin\NewsletterSubscriberController::class, 'index'])->name('view');
            Route::get('/send-newsletter/{newsletter}', [App\Http\Controllers\Admin\NewsletterSubscriberController::class, 'sendNewsletter'])->name('sendNewsletter');
            Route::post('/send', [App\Http\Controllers\Admin\NewsletterSubscriberController::class, 'send'])->name('send');
            Route::get('/delete/{newsletterSubscriber}', [App\Http\Controllers\Admin\NewsletterSubscriberController::class, 'destroy'])->name('delete');
        });
    });
    // role
    Route::prefix('roles')->name('role.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('store');
        Route::get('/show/{role}', [App\Http\Controllers\Admin\RoleController::class, 'show'])->name('show');
        Route::get('/edit/{role}', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('edit');
        Route::post('/update/{role}', [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('update');
        Route::post('/delete/{role}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('delete');
        Route::get('/status/{status/{role}', [App\Http\Controllers\Admin\RoleController::class, 'status'])->name('status');
    });


    Route::post('/logout', [AdminLoginController::class, 'destroy'])->name('logout');
});