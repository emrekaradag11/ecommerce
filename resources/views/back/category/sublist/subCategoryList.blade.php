<ul class="list-group customLists">
    @foreach($data as $d)
        @php
            $d->route = route("admin.category.update",$d->id);
            $d->deleteRoute = route("admin.category.destroy",$d->id);
        @endphp
        <li class="list-group-item list-group-item-action" id="item-{{$d->id}}" data-content="{{$d->id}}">
            <div class="d-flex align-items-center justify-content-between customListElement">
                <strong>{{$d->title}}</strong>
                <div>
                    <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-facebook js-edit"><i class="nav-icon i-Pen-2"></i></a>
                    <a tabindex data-info="{{$d}}" class="btn btn-xs btn-xxs px-3 py-2 btn-danger js_delete"><i class="nav-icon i-Close-Window"></i></a>
                    <a tabindex="" class="btn btn-xs btn-xxs px-3 py-2 btn-info list_item"><i class="nav-icon i-Arrow-Cross"></i></a>
                </div>
            </div>

            @if(count($d->getSubCategories)>0)
                @include("back.category.sublist.subCategoryList",["data" => $d->getSubCategories])
            @endif
        </li>
    @endforeach
</ul>


