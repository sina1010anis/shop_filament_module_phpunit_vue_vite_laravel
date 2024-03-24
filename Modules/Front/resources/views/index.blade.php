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
                        <a class="my-f-10 my-color-g my-font-IYM my-pointer"><i class="bi bi-caret-down" style="position: relative;top:3px;left:2px"></i>{{$menu->name}}</a>
                    @endif
            @endforeach

        </template>
    </header-vue>

    <slider-vue>
    </slider-vue>
@endsection
