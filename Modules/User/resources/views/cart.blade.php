@extends('user::layouts.master')

@section('content')

<div class="">
    <h2 class="text-center text-center p-2 my-font-IYL my-color-g">سبد خرید </h2>
</div>

<div class="w-100 shadow p-2 rounded-2 border overflow-y-scroll" style="height: 450px">
@forelse ($crads_compose as $cart)
        <div class="w-100 p-2 rounded-1 border d-flex justify-content-between my-2 align-items-center">
            <img src="/storage/products/1.jpg" alt="test" width="100" height="100">
            <span class="my-font-IYL my-f-11 my-color-b-700">قیمت کل :  {{$cart->total_price}}</span>
            <span class="my-font-IYL my-f-11 my-color-b-700">تعداد : {{$cart->total_number}}</span>
            <span class="my-font-IYL my-f-11 my-color-b-700">قیمت تک : {{$cart->product->price}}</span>
            <span class="my-font-IYM my-f-11 my-color-b-900">{{$cart->product->product->name}}</span>
        </div>

@empty
        <p class="my-font-IYM my-f-11 my-color-b-900 text-center">سبد خرید شما خالی است</p>
@endforelse

</div>

<div class="d-flex justify-content-around align-items-center my-2">
    <form action="{{route('user.buy')}}" method="POST">
        @csrf
        <button type="submit" class="my-btn-g border-0 rounded-1 btn my-font-ISL my-f-13">پرداخت فاکتور</button>
    </form>
    <span class="my-color-g my-font-IYL my-f-11 my-color-b-700">قیمت کل : {{$crads_compose->sum('total_price')}} </span>
    <span class="my-color-g my-font-IYL my-f-11 my-color-b-700"> تعداد کل : {{$crads_compose->sum('total_number')}}</span>
</div>

@endsection
