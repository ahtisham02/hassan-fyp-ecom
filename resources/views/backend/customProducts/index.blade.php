@extends('backend.layouts.app')
@section('title','Custom Products')
@section('content')
    <div class="content-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-product_review" role="tabpanel"
                 aria-labelledby="create-product_review-tab">
                <div class="container content-title">
                    <h4>{{__('Book')}}</h4>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('seller.search-custom-product') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-10 col-md-10 col-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="search" placeholder="Enter Search" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-4">

                                                <div class="form-group">
                                                    <button style="submit" class="btn btn-success text-white">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Tab Content End -->
    </div>

@endsection
@push('js')
    <script>
        $(function () {

            "use strict";
            $(document).on('click', '.status', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + @auth('admin')'/admin/product_review/changeStatus'@elseauth('seller')'/seller/product_review/changeStatus'@endauth,
                    data: {'status': status, 'id': id, 'field': 'is_active'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
            $(document).on('click', '.publish', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + @auth('admin')'/admin/product_review/changeStatus'@elseauth('seller')'/seller/product_review/changeStatus'@endauth,
                    data: {'status': status, 'id': id, 'field': 'publish_stat'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
@endpush
