@extends('search.parent')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Search Results for "{{ $query }}"</h2>

    @php
        $sections = [
            'Countries' => $countries,
            'Authors' => $authors,
            'Admins' => $admins,
            'Cities' => $cities,
            'Articles' => $articles,
            'Comments' => $comments,
            'Contacts' => $contacts,
            'Sliders' => $sliders,
            'Categories' => $categories,
        ];

        // نتحقق إذا هناك أي نتائج
        $hasResults = false;
        foreach ($sections as $items) {
            if ($items->count() > 0) {
                $hasResults = true;
                break;
            }
        }
    @endphp

    @if($hasResults)
        @foreach($sections as $title => $items)
            @if($items->count() > 0)
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">{{ $title }} ({{ count($items) }})</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($items as $item)
                            <li class="list-group-item">
                                @switch($title)
                                    @case('Countries')
                                        @if($item->name)
                                            <a href="{{ route('countries.show', $item->id) }}">{{ $item->name }}</a>
                                        @endif
                                        @break

                                    @case('Authors')
                                        @if($item->user && ($item->user->first_name || $item->user->last_name))
                                            <a href="{{ route('authors.show', $item->id) }}">
                                                {{ $item->user->first_name ?? '' }} {{ $item->user->last_name ?? '' }}
                                            </a>
                                        @endif
                                        @break

                                    @case('Admins')
                                        @if($item->user && ($item->user->first_name || $item->user->last_name))
                                            <a href="{{ route('admins.show', $item->id) }}">
                                                {{ $item->user->first_name ?? '' }} {{ $item->user->last_name ?? '' }}
                                            </a>
                                        @endif
                                        @break

                                    @case('Cities')
                                        <a href="{{ route('cities.show', $item->id) }}">
                                            @if($item->name) {{ $item->name }} @endif
                                            @if($item->street) - {{ $item->street }} @endif
                                        </a>
                                        @break

                                    @case('Articles')
                                        <a href="{{ route('articles.show', $item->id) }}">
                                            @if($item->title) {{ $item->title }} @endif
                                            @if($item->short_description) - {{ $item->short_description }} @endif
                                            @if($item->full_description) - {{ $item->full_description }} @endif
                                        </a>
                                        @break

                                    @case('Comments')
                                        <a href="{{ route('comments.show', $item->id) }}">
                                            @if($item->name) {{ $item->name }} @endif
                                            @if($item->content) - {{ $item->content }} @endif
                                        </a>
                                        @break

                                    @case('Contacts')
                                        <a href="{{ route('contacts.show', $item->id) }}">
                                            @if($item->name) {{ $item->name }} @endif
                                            @if($item->message) - {{ $item->message }} @endif
                                        </a>
                                        @break

                                    @case('Sliders')
                                        <a href="{{ route('sliders.show', $item->id) }}">
                                            @if($item->title) {{ $item->title }} @endif
                                            @if($item->description) - {{ $item->description }} @endif
                                        </a>
                                        @break

                                    @case('Categories')
                                        @if($item->name)
                                            <a href="{{ route('categories.show', $item->id) }}">{{ $item->name }}</a>
                                        @endif
                                        @break
                                @endswitch
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
    @else
        <div class="alert alert-warning text-center">
              حاول مرة اخرى !! لا توجد نتائج للبحث "{{ $query }}"
        </div>
    @endif
</div>
@endsection
