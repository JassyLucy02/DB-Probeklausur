@extends('base')

@section('main')

  <h3>Items</h3>

  <div class="row">
    <div class="list-group col">
      @foreach($allItems as $singleItem)
        <a href= "/items/{{$singleItem->item_id}}" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center">
          <span class="badge badge-dark">{{$singleItem->item_id}}</span>
        </a>
      @endforeach
    </div>

    
  </div>


@endsection