@extends('front::layouts.master')

@section('content')

    <header-vue :menus_slid="{{$menus_slid}}">

        <template #menus>
            @foreach ($menus as $menu)
                    @if($menu->mode == 1)
                        <a class="px-3 my-f-13 my-color-g my-font-IYM menu-hover" href="{{$menu->link}}">{{$menu->name}}</a>
                    @elseif ($menu->mode == 0)
                        <a class="my-f-13 my-color-g my-font-IYM my-pointer" @click="show_menu_pc"><i class="bi bi-caret-down" style="position: relative;top:3px;left:2px"></i>{{$menu->name}}</a>
                    @endif
            @endforeach

        </template>

        <template #menus_mobile>
            @foreach ($menus as $menu)
                    @if($menu->mode == 1)
                        <a class="px-3 my-f-10 my-color-g my-font-IYM menu-hover" href="{{$menu->link}}">{{$menu->name}}</a>
                    @elseif ($menu->mode == 0)
                        <a class="my-f-10 my-color-g my-font-IYM my-pointer" @click="show_menu_mobile"><i class="bi bi-caret-down" style="position: relative;top:3px;left:2px"></i>{{$menu->name}}</a>
                    @endif
            @endforeach
        </template>

        <template #item_menu_mobile>
            @foreach ($menus as $menu)
                @if($menu->mode == 2)
                    <details class="mt-2">
                        <summary class="my-font-ISL my-f-11 my-color-b-900">{{$menu->name}}</summary>
                            @foreach ($menu->sub_menus as $sbm)
                                <a class="w-100 d-block my-font-ISL my-f-11 my-1 my-color-b-700" href="/category/{{$sbm->slug}}">{{$sbm->name}}</a>
                            @endforeach
                    </details>
                @endif
            @endforeach
        </template>
    </header-vue>

    <show-product-vue :product="{{$product}}" :product_price="{{$product->product_price}}" :auth="{{auth()->check()}}">
        <template #item_comments>
            @forelse ($product->comments as $comment)
                <div class="d-flex flex-start my-3 border p-3 rounded-3">
                    <img class="rounded-circle shadow-1-strong me-3"src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"                                height="60" />
                    <div>
                        <h6 class="fw-bold mb-1">{{$comment->user->name}}</h6>
                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                                {{$comment->created_at}}<span class="badge bg-success my-font-IYL-i">کاربر</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                        </div>
                        <p class="mb-0">{{$comment->body}}</p>
                    </div>
                </div>

            @empty
                <div class="w-100 p-2 my-font-IYL my-f-12 my-color-b-700 text-center">
                    <p>هنوز نظری ثبت نشده است</p>
                </div>
            @endforelse
        </template>

        <template #new_comment>
            @auth()
                @if (!(new Modules\User\App\Models\Comment())->hasComment(auth()->user()->id, $product->id))
                    <form action="{{route('user.new.comment', ['product_id'=>$product->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input_title_comment_product" class="my-font-IYL-i my-f-12 my-color-b-900 mb-1">موضوع پیام</label>
                            <input name="title" type="text" class="form-control" id="input_title_comment_product">
                            @error('title')
                                <div class="my-btn-r my-2 my-font-IYM my-f-13 text-center p-1 rounded-2">
                                    <p class="m-0 p-0"> {{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="input_body_comment_product" class="my-font-IYL-i my-f-12 my-color-b-900 mb-1">متن پیام</label>
                            <textarea name="body" class="form-control" id="input_body_comment_product" rows="3"></textarea>
                            @error('body')
                                <div class="my-btn-r my-2 my-font-IYM my-f-13 text-center p-1 rounded-2">
                                    <p class="m-0 p-0"> {{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="my-btn-g border-0 py-1 px-3 rounded-3 my-2 my-font-ISL my-f-14">ثبت نظر</button>
                        </div>
                    </form>
                @else
                    <div class="w-100 p-2 my-font-IYL my-f-12 my-color-b-700 text-center">
                        <p>شما قبلا برای این محصول نظر ثبت کرده</p>
                    </div>
                @endif
            @endauth
        </template>
    </show-product-vue>

    <footer-vue></footer-vue>

@endsection