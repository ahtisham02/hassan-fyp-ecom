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
                                        <li class="current"><button type="button">
                                                <header>Step 3</header>
                                                <div class="circle"></div>
                                                <footer>Photos</footer>
                                            </button></li>
                                        <li class=""><button type="button">
                                                <header>Step 4</header>
                                                <div class="circle"></div>
                                                <footer>Listing details</footer>
                                            </button></li>
                                    </ul>
                                </nav>
                                <div class="col-md-12 col-lg-12 col-12">
                                    <h4>Add Photo</h4>
                                    <form action="{{ url('/seller/pageth') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="path" required><br><br>
                                        <button type="submit" class="btn btn-success text-white">
                                            Onward To Next Step
                                        </button>
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
