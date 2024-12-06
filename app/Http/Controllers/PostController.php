<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function showHomepage(): View
    {
        /** @phpstan-ignore-next-line */
        $latest_post = Post::paginate(6);
        /** @phpstan-ignore-next-line */
        $liked_posts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'desc')->get()->take(3);

        // todo Show recent categories with their latest posts

        return view('post.index', [
            'posts'      => $latest_post,
            'likedPosts' => $liked_posts,
        ]);
    }

    public function show(Post $post, Request $request)
    {
        $date = Carbon::parse($post->created_at);
        $tags = $post->tags;

        // TODO Add
        $relatedPosts = collect();

        return view('post.show', ['post' => $post, 'relatedPosts' => $relatedPosts, 'date' => $date, 'tags' => $tags]);
    }

    public function byCategory(Category $category)
    {
        $posts = Post::query()
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->where('category_post.category_id', '=', $category->id)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('post.index', ['posts' => $posts, 'category' => $category]);
    }

    public function search(Request $request)
    {
        $q = $request->get('q');

        $posts = Post::query()
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->where(function ($query) use ($q) {
                $query->where('title', 'like', "%{$q}%")
                    ->orWhere('body', 'like', "%{$q}%");
            })
            ->paginate(10);

        return view('post.search', ['posts' => $posts]);
    }
}
