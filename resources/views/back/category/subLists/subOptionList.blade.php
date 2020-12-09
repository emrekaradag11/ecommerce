@php
    if($data[0]->parent_id == 0){
        $nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;';
    }else{
        $nbsp .= '&nbsp;&nbsp;&nbsp;&nbsp;';
    }
@endphp
@foreach($data as $d)
    <option value="{{$d->id}}">{!! $nbsp . $d->title !!}</option>
    @if(count($d->getSubCategories)>0)
        @include("back.category.subLists.subOptionList",["data" => $d->getSubCategories,"nbsp" => $nbsp])
    @endif
@endforeach
