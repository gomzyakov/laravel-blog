@extends('layouts.wrapper-admin', ['title' => $post->title])

@section('content')
    <h1>Edit post</h1>

    <form method="post" action="{{ route('admin.post.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body pl-0">
            <div class="form-group w-25">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title"
                       value="{{ $post->title }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content" class="form-label">Text</label>
                <textarea name="content" class="form-control" rows="6">{{ $post->content }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group w-50">
                <label for="exampleInputEmail1" class="form-label">Preview image</label>
                <div class="w-50 mb-2">
                    <img src="{{  $post->preview_image }}" alt="preview_image" class="w-50">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image">
                    </div>
                </div>
                @error('preview_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group w-50">
                <label for="exampleInputEmail1" class="form-label">Main image</label>
                <div class="w-50 mb-2">
                    <img src="{{ $post->main_image }}" alt="main_image" class="w-50">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="main_image">
                    </div>
                </div>
                @error('main_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group w-25">
                <label>Select categories</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Select tags</label>
                    <div class="select2-purple">
                        <select class="select2" multiple="multiple" data-dropdown-css-class="select2-purple"
                                style="width: 100%;" name="tag_ids[]">
                            @foreach( $tags as $tag)
                                <option
                                    {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('tag_ids')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="btn btn-primary mt-4 mb-5" value="Update post">
    </form>
@endsection
