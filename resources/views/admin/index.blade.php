<x-layouts.app>
    <h1>PAge amdin index</h1>
    {{-- @foreach($Articles as $article) --}}
        {{-- <div>
            <h2>{{ $article->title }}</h2> --}}
            {{-- <p>{{ $article->content }}</p> --}}
        {{-- </div>
         --}}
    {{-- @endforeach --}}
    {{ $Articles->links() }}
    <?php 
        // foreach($Articles as $article){
        //     echo $article->title.'<br>';
        // };
    ?>
</x-layouts.app> 