<x-mail::message>
    # hello you got an Enquiry!

    <h3>Name:{{ $data['name'] }}</h3>
    <h3>Emil:{{ $data['email'] }}</h3>
    <h3>message:{{ $data['messageContent'] }}</h3>

    <x-mail::button :url="$url">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
