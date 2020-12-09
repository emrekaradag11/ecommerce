@foreach($data as $d)
    @php
        $d->route = route("admin.category.update",$d->id);
        $d->deleteRoute = route("admin.category.destroy",$d->id);
    @endphp
    <li class="  ">
        <div class="d-flex align-items-center justify-content-between customListElement">
            <strong>{{$d->title}}</strong>
            <div>
                <a tabindex data-info="{{$d}}" class="btn btn-xs px-3 py-2 btn-facebook js-edit"><i class="fa fa-pen"></i></a>
                <a tabindex data-info="{{$d}}" class="btn btn-xs px-3 py-2 btn-danger js_delete"><i class="fa fa-trash-alt"></i></a>
                <a href="" class="btn btn-xs px-3 py-2 btn-info"><i class="fa fa-arrows-alt"></i></a>
            </div>
        </div>

        @if(count($d->getSubCategories)>0)
            <ul>
                @include("back.category.subLists.subCategoryList",["data" => $d->getSubCategories])
            </ul>
        @endif
    </li>
@endforeach




