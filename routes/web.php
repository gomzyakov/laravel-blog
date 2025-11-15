<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\DeleteController as AdminCategoryDeleteController;
use App\Http\Controllers\Admin\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Admin\Main\IndexController as AdminMainIndexController;
use App\Http\Controllers\Admin\Post\CreateController as AdminPostCreateController;
use App\Http\Controllers\Admin\Post\DeleteController as AdminPostDeleteController;
use App\Http\Controllers\Admin\Post\EditController as AdminPostEditController;
use App\Http\Controllers\Admin\Post\IndexController as AdminPostIndexController;
use App\Http\Controllers\Admin\Post\ShowController as AdminPostShowController;
use App\Http\Controllers\Admin\Post\StoreController as AdminPostStoreController;
use App\Http\Controllers\Admin\Post\UpdateController as AdminPostUpdateController;
use App\Http\Controllers\Admin\Tag\CreateController as AdminTagCreateController;
use App\Http\Controllers\Admin\Tag\DeleteController as AdminTagDeleteController;
use App\Http\Controllers\Admin\Tag\EditController as AdminTagEditController;
use App\Http\Controllers\Admin\Tag\IndexController as AdminTagIndexController;
use App\Http\Controllers\Admin\Tag\ShowController as AdminTagShowController;
use App\Http\Controllers\Admin\Tag\StoreController as AdminTagStoreController;
use App\Http\Controllers\Admin\Tag\UpdateController as AdminTagUpdateController;
use App\Http\Controllers\Admin\User\CreateController as AdminUserCreateController;
use App\Http\Controllers\Admin\User\DeleteController as AdminUserDeleteController;
use App\Http\Controllers\Admin\User\EditController as AdminUserEditController;
use App\Http\Controllers\Admin\User\IndexController as AdminUserIndexController;
use App\Http\Controllers\Admin\User\ShowController as AdminUserShowController;
use App\Http\Controllers\Admin\User\StoreController as AdminUserStoreController;
use App\Http\Controllers\Admin\User\UpdateController as AdminUserUpdateController;
use App\Http\Controllers\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Category\Post\IndexController as CategoryPostIndexController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Personal\Comment\DeleteController as PersonalCommentDeleteController;
use App\Http\Controllers\Personal\Comment\EditController as PersonalCommentEditController;
use App\Http\Controllers\Personal\Comment\IndexController as PersonalCommentIndexController;
use App\Http\Controllers\Personal\Comment\UpdateController as PersonalCommentUpdateController;
use App\Http\Controllers\Personal\Liked\DeleteController as PersonalLikedDeleteController;
use App\Http\Controllers\Personal\Liked\IndexController as PersonalLikedIndexController;
use App\Http\Controllers\Personal\Main\IndexController as PersonalMainIndexController;
use App\Http\Controllers\PlaceholderController;
use App\Http\Controllers\Post\Comment\StoreController as PostCommentStoreController;
use App\Http\Controllers\Post\Like\StoreController as PostLikeStoreController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'showHomepage'])->name('main.index');

// Placeholder image generation
Route::get('/placeholder/{width}/{height}', [PlaceholderController::class, 'generate'])
    ->where(['width' => '[0-9]+', 'height' => '[0-9]+'])
    ->name('placeholder.generate');

Auth::routes(['verify' => false]);

Route::prefix('contacts')->group(function () {
    Route::get('/', [ContactsController::class, 'showContacts'])
        ->name('contact.index');
});

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'showAbout'])
        ->name('about.index');
});

Route::prefix('category')->group(function () {
    Route::get('/', CategoryIndexController::class)->name('category.index');
    Route::prefix('{category}/posts')->group(function () {
        Route::get('/', CategoryPostIndexController::class)->name('category.post.index');
    });
});

Route::prefix('post')->group(function () {
    Route::get('/{post}', [PostController::class, 'show'])->name('post.show');

    Route::prefix('{post}/comments')->group(function () {
        Route::post('/', PostCommentStoreController::class)->name('post.comments.store');
    });
    Route::prefix('{post}/likes')->group(function () {
        Route::post('/', PostLikeStoreController::class)->name('post.likes.store');
    });
});

Route::prefix('personal')->middleware(['auth'])->group(function () {
    Route::get('/', PersonalMainIndexController::class)->name('personal.main.index');


    Route::prefix('liked')->group(function () {
        Route::get('/', PersonalLikedIndexController::class)->name('personal.liked.index');
        Route::delete('/{post}', PersonalLikedDeleteController::class)->name('personal.liked.delete');
    });
    Route::prefix('comment')->group(function () {
        Route::get('/', PersonalCommentIndexController::class)->name('personal.comment.index');
        Route::delete('/{comment}', PersonalCommentDeleteController::class)->name('personal.comment.delete');
        Route::patch('/{comment}', PersonalCommentUpdateController::class)->name('personal.comment.update');
        Route::get('/{comment}', PersonalCommentEditController::class)->name('personal.comment.edit');
    });
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::prefix('main')->group(function () {
        Route::get('/', AdminMainIndexController::class)->name('admin.main.index');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', AdminCategoryIndexController::class)->name('admin.category.index');
        Route::get('/create', AdminCategoryCreateController::class)->name('admin.category.create');
        Route::post('/', AdminCategoryStoreController::class)->name('admin.category.store');
        Route::get('/{category}', AdminCategoryShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', AdminCategoryEditController::class)->name('admin.category.edit');
        Route::patch('/{category}', AdminCategoryUpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', AdminCategoryDeleteController::class)->name('admin.category.delete');
    });
    Route::prefix('tag')->group(function () {
        Route::get('/', AdminTagIndexController::class)->name('admin.tag.index');
        Route::get('/create', AdminTagCreateController::class)->name('admin.tag.create');
        Route::post('/', AdminTagStoreController::class)->name('admin.tag.store');
        Route::get('/{tag}', AdminTagShowController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', AdminTagEditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', AdminTagUpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', AdminTagDeleteController::class)->name('admin.tag.delete');
    });
    Route::prefix('post')->group(function () {
        Route::get('/', AdminPostIndexController::class)->name('admin.post.index');
        Route::get('/create', AdminPostCreateController::class)->name('admin.post.create');
        Route::post('/', AdminPostStoreController::class)->name('admin.post.store');
        Route::get('/{post}', AdminPostShowController::class)->name('admin.post.show');
        Route::get('/{post}/edit', AdminPostEditController::class)->name('admin.post.edit');
        Route::patch('/{post}', AdminPostUpdateController::class)->name('admin.post.update');
        Route::delete('/{post}', AdminPostDeleteController::class)->name('admin.post.delete');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', AdminUserIndexController::class)->name('admin.user.index');
        Route::get('/create', AdminUserCreateController::class)->name('admin.user.create');
        Route::post('/', AdminUserStoreController::class)->name('admin.user.store');
        Route::get('/{user}', AdminUserShowController::class)->name('admin.user.show');
        Route::get('/{user}/edit', AdminUserEditController::class)->name('admin.user.edit');
        Route::patch('/{user}', AdminUserUpdateController::class)->name('admin.user.update');
        Route::delete('/{user}', AdminUserDeleteController::class)->name('admin.user.delete');
    });
});
