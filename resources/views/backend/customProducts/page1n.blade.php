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
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <nav class="css-5lb5gz e10zhxd00">
                                        <ul>
                                            <li class="current"><button type="button">
                                                    <header>Step 1</header>
                                                    <div class="circle"></div>
                                                    <footer>Book details</footer>
                                                </button></li>
                                            <li class=""><button type="button">
                                                    <header>Step 2</header>
                                                    <div class="circle"></div>
                                                    <footer>Condition</footer>
                                                </button></li>
                                            <li class=""><button type="button">
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
                                    <form action="{{ url('/seller/pgo') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <h5>Basic</h5>
                                                <div class="col-md-6 mt-1">
                                                    <div class="form-group">
                                                        <label for="">Comic title</label>
                                                        <input type="text" name="c_title" class="form-control" placeholder="The X-Men" value="{{$bok->title}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Issue number</label>
                                                        <input type="text" name="issue_number" placeholder="1" value="{{$bok->id}}" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Publisher</label>
                                                        <input type="text" name="publisher" placeholder="Marvel" value="{{$bok->publisher}}" class="form-control" placeholder="Marvel" value="{{$bok->title}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Year of Publish: {{$bok->created}}</label>
                                                        <input type="date" name="year_of_publish" placeholder="Marvel" value="{{$bok->publisher}}" class="form-control" placeholder="Marvel" value="{{$bok->title}}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mt-5">
                                                <h5>The Story</h5>
                                                <div class="col-md-6 mt-1">
                                                    <div class="form-group">
                                                        <label for="">Key characters</label>
                                                        <input type="text" name="k_characters" class="form-control" value="{{$bok->characters}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Genre</label>
                                                        <input type="text" name="genre" value="{{$bok->genre}}" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mt-5">
                                                <h5>Extra credit</h5>
                                                <div class="col-md-6 mt-1">
                                                    <div class="form-group">
                                                        <label for="">Script</label>
                                                        <input type="text" name="script" value="{{$bok->script}}" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Art</label>
                                                        <input type="text" name="art" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mt-5">
                                                <h5>Too easy?</h5>
                                                <div class="col-md-6 mt-1">
                                                    <div class="form-group">
                                                        <label for="">Country</label>
                                                        <select name="country" value="{{$bok->country}}" class="form-control">
                                                            <option value="Pakistan" @if($bok->country == "Pakistan") selected @endif>Pakistan</option>
                                                            <option value="United states" @if($bok->country == "United states") selected @endif> United states </option>
                                                            <option value="United Kingdom" @if($bok->country == "United Kingdom") selected @endif> United Kingdom </option>
                                                          </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Reprint</label>
                                                        <select name="reprint"  class="form-control">
                                                            <option value="Yes"> Yes </option>
                                                            <option value="No"> No </option>
                                                            <option value="not_sure"> Not sure </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Reprint</label>
                                                        <select name="reprint"  class="form-control">
                                                            <option value="Yes"> Yes </option>
                                                            <option value="No"> No </option>
                                                            <option value="not_sure"> Not sure </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Print</label>
                                                        <input type="text" placeholder="k_characters" name="print" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-12 mt-5">
                                                <button type="submit" class="btn btn-success text-white">
                                                    Onward To Next Step
                                                </button>
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
