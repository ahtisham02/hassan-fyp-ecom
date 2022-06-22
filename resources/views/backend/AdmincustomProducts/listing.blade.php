@extends('backend.layouts.app')
@section('title','Search Books - ')
@section('content')
    <div class="content-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-product_review" role="tabpanel"
                 aria-labelledby="create-product_review-tab">
                <div class="container content-title">
                    <h4>{{__('Search')}}</h4>
                </div>
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="container">
                            <div class="card-body">
                                <img src="{{ asset('uploads/xman.jpg') }}" class="img-fluid">
                                <h4 class="mt-1">{{$book->title}}</h4>
                                <p>{{$book->created}}</p>
                                <a href="{{ url('/admin/pag1/'.$book->id) }}" class="btn btn-success text-white col-md-12">Select</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><br><br>
        <!-- Tab Content End -->
    </div>

@endsection
