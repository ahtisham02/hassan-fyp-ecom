@extends('backend.layouts.app')
@section('title','Search Products - ')
@section('content')
<style>
    .desc {
        display: none;
    }

    .modifi {
        display: none;
    }

    .grad {
        display: none;
    }

    .note {
        display: none;
    }
</style>
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
                                            <li class="current"><button type="button">
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
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <h4>What are you selling</h4>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <button class="btn btn-lg btn-primary text-white col-md-12 " id="raw_comic_btn">"Raw" Comic</button>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <button class="btn btn-lg btn-primary text-white col-md-12" id="slabbed_comic_btn">"Slabbed" Comic</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12 mt-5" style="display: none;" id="raw_comic_section">
                                            <form action="{{ url('/admin/raw') }}" method="POST">
                                                @csrf
                                            <h4>Describe the condition</h4>
                                            <p>Choose the condition that best describes your book.</p>
                                            <div class="form-group">
                                                <label for="">Grade</label>
                                                <select name="slgrade" @if(!empty($bok->grade)) value="{{$bok->grade}}" @endif class="form-control">
                                                    <option value="Near Mint/Mint(NM/M)"> Near Mint/Mint(NM/M) </option>
                                                    <option value="Near"> Near Mint </option>
                                                    <option value="Very Fine/Near Mint (VF/NM)"> Very Fine/Near Mint (VF/NM) </option>
                                                    <option value="Very Fine(VF)"> Very Fine(VF) </option>
                                                    <option value="Fine/Very Fine(VF)"> Fine/Very Fine(VF) </option>
                                                    <option value=" Fine(FN)"> Fine(FN) </option>
                                                    <option value="Very good/Fine(VG/FN) "> Very good/Fine(VG/FN) </option>
                                                    <option value="Very good(VG)"> Very good(VG) </option>
                                                    <option value="Good/Very good(GD/VG)"> Good/Very good(GD/VG) </option>
                                                    <option value="Good(GD)"> Good(GD) </option>
                                                    <option value=" Fair/Good(FR/GD)"> Fair/Good(FR/GD) </option>
                                                    <option value="Fair"> Fair </option>
                                                </select>
                                            </div>


                                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                                <h4>Modifications</h4>
                                                <div class="form-group">
                                                    <label for="Signature">Signature</label> <br>
                                                    <input type="radio" name="signature" id="Signature" value="Yes" checked>&nbsp;Yes
                                                    <input type="radio" name="signature" id="Signature" value="No">&nbsp;No
                                                    <input type="radio" name="signature" id="Signature" value="Not_Sure">&nbsp;Not Sure
                                                </div>

                                                <div class="form-group">
                                                    <label for="SignaRestorationture">Restoration</label> <br>
                                                    <input type="text"  placeholder="Who signed?" name="restoration" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                                <h4>Add Notes</h4>
                                                <div class="form-group">
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="50" style="height:160px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 mt-5">
                                                <button type="submit" class="btn btn-success text-white">
                                                    Onward To Next Step
                                                </button>
                                            </div>
                                            </form>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12" id="slabbed_comic_section" style="display:none;">
                                            <form action="{{ url('/admin/slab') }}" method="POST">
                                                @csrf
                                            <h4>The Grade</h4>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <label for="">Grading certification</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="CGC">CGC</option>
                                                    <option value="PGX">PGX</option>
                                                    <option value="CBCS">CBCS</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                                <h4>Add Notes</h4>
                                                <div class="form-group">
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="50" style="height:160px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 mt-5">
                                                <button type="submit" class="btn btn-success text-white">
                                                    Onward To Next Step
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
<script>
    document.querySelector("#raw_comic_btn").addEventListener("click", () => {
        document.querySelector("#raw_comic_section").style.display = "block"
        document.querySelector("#slabbed_comic_section").style.display = "none"

    })
    document.querySelector("#slabbed_comic_btn").addEventListener("click", () => {
        document.querySelector("#raw_comic_section").style.display = "none"
        document.querySelector("#slabbed_comic_section").style.display = "block"

    })
</script>
@endsection
