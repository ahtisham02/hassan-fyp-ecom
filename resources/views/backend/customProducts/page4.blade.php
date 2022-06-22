@extends('backend.layouts.app')
@section('title','Search Products - ')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/add-book.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/add-book.css') }}">

<link rel="stylesheet" href="{{ asset('/css/add-book.css') }}">
<link rel="stylesheet" href="{{ asset('/css/add-book.css') }}">
<link rel="stylesheet" href="{{ asset('/css/add-book.css') }}">
<link href="{{ asset('/css/add-book.css') }}" rel="stylesheet">
    <div class="content-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-product_review" role="tabpanel"
                 aria-labelledby="create-product_review-tab">
                <div class="container content-title">
                    <h4>{{__('Page')}}</h4>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <nav class="css-5lb5gz e10zhxd00">
                                        <ul>
                                            <li class="completed"><button type="button">
                                                    <header>Step 1</header>
                                                    <div class="circle"></div>
                                                    <footer>Book details</footer>
                                                </button></li>
                                            <li class="completed"><button type="button">
                                                    <header>Step 2</header>
                                                    <div class="circle"></div>
                                                    <footer>Condition</footer>
                                                </button></li>
                                            <li class="completed"><button type="button">
                                                    <header>Step 3</header>
                                                    <div class="circle"></div>
                                                    <footer>Photos</footer>
                                                </button></li>
                                            <li class="current"><button type="button">
                                                    <header>Step 4</header>
                                                    <div class="circle"></div>
                                                    <footer>Listing details</footer>
                                                </button></li>
                                        </ul>
                                    </nav>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <form action="{{ url('/seller/pagefo') }}" method="post" novalidate="">
                                            @csrf
                                            <h4>Listing details</h4>
                                            <div class="form-group">
                                                <label for="">Give your listing a title</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">How much would you like to sell your comic for?</label>
                                                <input type="number" name="price" min="1" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <select name="category_id" class="form-control" required>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Brand</label>
                                                <select name="brand_id" class="form-control" required>
                                                    @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success text-white mt-3">
                                                Publish Now
                                            </button>
                                        </form>
                                    </div>
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
