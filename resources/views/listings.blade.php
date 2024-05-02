<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <p>No Listings Found</p>
@endif

@foreach($listings as $listing)
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    <p>{{$listing['description']}}</p>
@endforeach