@extends ('welcome')
@section ('view')
    @foreach ($chars as $char)
        <div class="chars" style="border-bottom:1px solid black;">
            <p>Name : {{ $char->name }} </p>
            <p>House : {{ $char->house }} </p>
            <p>Alias : {{ $char->alias }} </p>
            <p>Boggart : {{ $char->boggart }} </p>
            <p>Patrnous : {{ $char->patronus }} </p>
            <p>School : {{ $char->school }} </p>
            <p>Wand : {{ $char->wand }} </p>
        </div>
    @endforeach
@endsection
