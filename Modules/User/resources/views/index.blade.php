@extends('user::layouts.master')

@section('content')
    <div class="">
        <h2 class="text-center text-center p-2 my-font-IYL my-color-g">صفحه اصلی</h2>
    </div>
    <div class=' col-12 col-md-6 p-2'>
        <div class="d-flex rounded-3 w-100 h-100 my-btn-g shadow">
            <div class="d-flex justify-content-center  align-items-center h-100 w-25">
                <i class="bi bi-file-earmark-break" style="font-size: 65px"></i>
            </div>
            <div class=" h-100 w-75 d-flex justify-content-center flex-column p-2 align-content-center">
                <div class="my-font-IYM my-f-22 text-center my-2">فاکتور ها</div>
                <div class="my-font-IYL my-f-22 text-center my-2">{{auth()->user()->factors->count()}}</div>
            </div>
        </div>
    </div>
    <div class=' col-12 col-md-6 p-2'>
        <div class="d-flex rounded-3 w-100 h-100 my-btn-g shadow">
            <div class="d-flex justify-content-center  align-items-center h-100 w-25">
                <i class="bi bi-chat-dots" style="font-size: 65px"></i>
            </div>
            <div class=" h-100 w-75 d-flex justify-content-center flex-column p-2 align-content-center">
                <div class="my-font-IYM my-f-22 text-center my-2">کامنت ها</div>
                <div class="my-font-IYL my-f-22 text-center my-2">{{auth()->user()->comments->count()}}</div>
            </div>
        </div>
    </div>
    <div class=' col-12 col-md-6 p-2'>
        <div class="d-flex rounded-3 w-100 h-100 my-btn-g shadow">
            <div class="d-flex justify-content-center  align-items-center h-100 w-25">
                <i class="bi bi-cart2" style="font-size: 65px"></i>
            </div>
            <div class=" h-100 w-75 d-flex justify-content-center flex-column p-2 align-content-center">
                <div class="my-font-IYM my-f-22 text-center my-2">سبدخرید ها</div>
                <div class="my-font-IYL my-f-22 text-center my-2">{{auth()->user()->cards->count()}}</div>
            </div>
        </div>
    </div>
    <div class=' col-12 col-md-6 p-2'>
        <div class="d-flex rounded-3 w-100 h-100 my-btn-g shadow">
            <div class="d-flex justify-content-center  align-items-center h-100 w-25">
                <i class="bi bi-exclamation-octagon" style="font-size: 65px"></i>
            </div>
            <div class=" h-100 w-75 d-flex justify-content-center flex-column p-2 align-content-center">
                <div class="my-font-IYM my-f-22 text-center my-2">گزارش ها</div>
                <div class="my-font-IYL my-f-22 text-center my-2">{{auth()->user()->reposts->count()}}</div>
            </div>
        </div>
    </div>
@endsection
