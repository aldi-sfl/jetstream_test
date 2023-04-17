<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <ul>
        @foreach ($data as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</div>
