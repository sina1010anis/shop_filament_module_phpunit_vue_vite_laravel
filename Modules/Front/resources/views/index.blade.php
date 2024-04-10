@extends('front::layouts.master')

@section('content')

    <header-vue :menus_slid="{{$menus_slid}}" :auth="{{auth()->check()}}" :total_number="{{$crads_compose->sum('total_number')}}">

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

        <template #item_cards>
            @auth()
                @forelse ($crads_compose as $card)
                    <a href="{{route('front.view.product', ['product' => $card->product->product->slug])}}" class="item-cart w-100 p-2 border-b-2 d-flex justify-content-between align-items-center" dir="rtl">
                        <span class="my-f-10 my-color-b-800 my-font-IYM">نام  : {{$card->product->product->name}}</span>
                        <span class="my-f-10 my-color-b-800 my-font-IYM">قمیت  : {{$card->total_price}}</span>
                        <span class="my-f-10 my-color-b-800 my-font-IYM"> تعداد : {{$card->total_number}}</span>
                        <img src="/storage/products/1.jpg" class="h-100" alt="name product">
                    </a>
                @empty
                    <div class="w-100 p-2 my-font-IYL my-f-12 my-color-b-700 text-center">
                        <p>هنوز محصولی ثبت نشده است</p>
                    </div>
                @endforelse
            @endauth

        </template>

        <template #desc_card>
            @auth()
                <div class="col-12 p-2 toper-cart-3 d-flex my-f-11 my-font-IYB justify-content-between align-items-center" dir="rtl">
                    <span>قیمت کل  : {{$crads_compose->sum('total_price')}} تومان</span>
                    <span>تعداد محصولات : {{$crads_compose->sum('total_number')}}</span>
                    @if ($crads_compose->sum('total_number') > 0)
                        <span><a href="" class=""><button class="my-btn-g border-0 rounded-1 p-2">پرداخت نهایی</button></a></span>
                    @endif
                </div>
            @endauth
        </template>
    </header-vue>

    <slider-vue :images="{{$images}}"></slider-vue>

    {{-- <toper-vue :menu_1="{{$menus->find(6)->sub_menus->take(2)}}" :menu_2="{{$menus->find(10)->sub_menus->take(2)}}"></toper-vue> --}}

    <product-vue :title="'جدیدترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <banner-vue :image="{{$banner->find(1)}}"></banner-vue>

    <product-vue :title="'پرفروشترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <banner-vue :image="{{$banner->find(1)}}"></banner-vue>

    <product-vue :title="'خاصترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <banner-vue :image="{{$banner->find(1)}}"></banner-vue>

    <product-vue :title="'پرترفدارترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <product-vue :title="'زیباترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <product-vue :title="'بیشترین محصولات'" :image="'view_box_product.png'" :products="{{$products}}"></product-vue>

    <footer-vue></footer-vue>

@endsection
