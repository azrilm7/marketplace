<x-mail::message>
# Order placed successfully

thank you for order. your order number is:{{$order->id}}

<x-mail::button :url="$url">
View order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
