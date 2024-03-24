<div>
    <button onclick="back({{ $post->id }})" class=" px-4 py-1 rounded">Back</button>
    <h1 class=" font-bold text-xl">
        {{ $post->title }}
    </h1>
    <p>
        {!! $post->description !!}
    </p>
</div>
