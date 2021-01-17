
@foreach($data as $d)
    <option value="{{$d->id}}">{!! $d->title !!}</option>
    @if(count($d->getSubCategories)>0)
        <optgroup label="{{$d->title}}">
            @include("back.category.sublist.subOptionList",["data" => $d->getSubCategories])
        </optgroup>
    @endif
@endforeach
