@extends('back.layout')

@section('content')
    <div class="breadcrumb d-flex align-items-center justify-content-between">
        <h1 class="mr-2">Ürün'e Varyant Ekle | <a href="" class="text-underline">{{$product->title}}</a></h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="card mb-4">
        <div class="card-body">
            @include("back.product.variants.add")
            @if(count($product->getProductVariantDetail))
                @include("back.product.variants.list")
            @endif
        </div>
    </div>


    <div class="modal fade" id="js-variantDetailModal"  data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Varyant Düzenle</h5>
                </div>
                <div class="modal-body">
                    burası edit modal
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).on('submit','#editVariantDetail',function (e){
            e.preventDefault();
            $('.minloader').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: '{{route('admin.product.editProductVariantDetailPost')}}',
                data: $('#editVariantDetail').serialize(),
                success: function (response) {
                    $('#js-variantDetailModal').modal('toggle');
                    setTimeout(function (){
                        location.reload();
                    },500);
                }
            });
        });


        $(document).on('click','.js-edit',function (){
            var id = $(this).data('id');
            $('.minloader').removeClass('d-none');
            $.ajax({
                type: 'GET',
                url: '{{Route('admin.product.editProductVariantDetail')}}',
                data: {
                    id: id,
                },
                success: function (data){
                    $('.minloader').addClass('d-none');
                    $('#js-variantDetailModal .modal-body').html(data);
                    $('#js-variantDetailModal').modal('show');
                },
                error: function(e) {
                    console.log(e);
                }
            });
        })

    </script>
@endsection



