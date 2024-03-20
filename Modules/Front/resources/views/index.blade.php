@extends('front::layouts.master')

@section('content')
    <header-vue>
        <template #menus>
            @foreach ($menus as $menu)
                <li class="nav-item">
                    @if($menu->mode == 1)
                        <a class="nav-link active" href="{{$menu->link}}">{{$menu->name}}</a>
                    @else
                        <a class="nav-link active">{{$menu->name}}</a>
                    @endif
                </li>
            @endforeach

        </template>
    </header-vue>
@endsection
