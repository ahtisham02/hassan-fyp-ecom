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
                            <div class="css-1woo9m2 elcnykr0">
                                <form action="/seller/pagefo" method="post" novalidate="">
                                    @csrf
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
                                    <section class="css-1ht8wkd e4nqznn0">
                                        <header>
                                            <h2><span class="step-number">Step 4</span>Add the final touches</h2>
                                        </header>
                                        <section class="  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <div class="text">Listing details</div>
                                                </legend>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Give your listing a title<small class="char-count">0 /
                                                                100</small></div>
                                                        <div class="input-wrapper   "><input name="title" class=" input-text"
                                                                placeholder="Create a title for your listing" value=""></div>
                                                    </label></div>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">How much would you like to sell your comic for?</div>
                                                        <div class="input-wrapper has-prefix  ">
                                                            <div class="affix prefix">$</div><input name="price" type="text"
                                                                inputmode="decimal" pattern="[0-9]*" class="size-xs input-number"
                                                                placeholder="USD" value="">
                                                    </label></div>
                                            </fieldset>
                                            <aside class="">This is what buyers will see in searches and on your listing page.</aside>
                                        </section>
                                        <footer>
                                            <p class="encouragement">You are a champ.</p>
                                            <div class="cta-button main css-1kkss9a eiygp9v0">
                                                <button type="submit" class="inner-element">Save
                                                    &amp; review final listing</button>
                                            </div>
                                            <div class="cta-button secondary css-1kkss9a eiygp9v0">
                                                <button type="button" class="inner-element">Go back to photos</button>
                                            </div>
                                        </footer>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Tab Content End -->
    </div>

@endsection
