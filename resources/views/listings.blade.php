<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <h2>No Listings</h2>
@endIf


@foreach($listings as $listing)
    <a href="./listings/{{$listing['id']}}">
        <h2>{{$listing['title']}}</h2>
    </a>
    <p>{{$listing['description']}}</p>
@endforeach