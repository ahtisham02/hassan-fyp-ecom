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
                                <form action="/seller/pageth" method="post" enctype="multipart/form-data" novalidate="">
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
                                    <section class="css-1ht8wkd e4nqznn0">
                                        <header>
                                            <h2><span class="step-number">Step 3</span>Take some photos</h2>
                                        </header>
                                        <section class="pictures  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <div class="text">Add photos</div>
                                                </legend>
                                                <div class=" css-o3whhk euvxhfe0">
                                                    <div class="rest">
                                                        <form action="/seller/pageth" method="POST" enctype="multipart/form-data" style="border:1px solid #ccc">
                                @csrf
                               <h1 id="i"> <input  type="file" class="form-control-file" name="path" value="" alt="" required></h1>
                               <button type="submit">Submit</button>
                                    </form>
                                                    </div>
                                                </div>
                                                <p>Images of the front and back covers are required.</p>
                                                <p>Use original photos. Screenshots or pictures from other sites, sellers, or
                                                    manufacturers are not allowed.</p>
                                                <p>Photos must be .jpg, .jpeg, or .png format.</p>
                                            </fieldset>
                                            <aside class="">PHOTOS:
                                                Add up to nine photos to show your comic’s most important qualities.

                                                The more photos your listing has, the more confident buyers will feel purchasing from
                                                you.
                                            </aside>
                                        </section>
                                        <footer>
                                            <p class="encouragement">You’re almost done!</p>
                                            <div class="cta-button main css-1kkss9a eiygp9v0">
                                                <button type="submit"
                                                    class="inner-element">Save &amp; go to final step
                                                </button>
                                            </div>
                                            <div class="cta-button secondary css-1kkss9a eiygp9v0">
                                                <button type="button"
                                                    class="inner-element">Go back to grade</button></div>
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
