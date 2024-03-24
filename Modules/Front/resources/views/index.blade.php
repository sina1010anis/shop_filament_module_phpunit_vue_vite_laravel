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

    <slider-vue></slider-vue>
@endsection
