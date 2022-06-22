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
                                <form action="/seller/pgo" method="post" novalidate="">
                                @csrf
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
                                    <section class="css-1ht8wkd e4nqznn0">
                                        <header>
                                            <p>List your comic.<br>We started your listing for you. If everything looks good, go to the next
                                                page.</p>
                                            <h2><span class="step-number">Step 1</span>Tell us about your book</h2>
                                        </header>
                                        <section class="  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <link rel="stylesheet" href="css/add-book.css">
                                                    <div class="text">The basics</div>
                                                </legend>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Comic title</div>
                                                        <div class="input-wrapper   "><input name="c_title" class="input-text"
                                                                placeholder="The X-Men" value="{{$bok->title}}"></div>
                                                    </label></div>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Issue number</div>
                                                        <div class="input-wrapper   "><input name="issue_number" class="size-xs input-text"
                                                                placeholder="1" value="{{$bok->id}}"></div>
                                                    </label></div>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Publisher</div>
                                                        <div class="input-wrapper   "><input name="publisher" class="size-md input-text"
                                                                placeholder="Marvel" value="{{$bok->publisher}}"></div>
                                                    </label></div>
                                                    <br><br>
                                                   <!-- grade -->
                                                <!-- <label for="variant"><b>Variant</b></label>
                                                <input type="text" placeholder="variant" value="" name="variant" required> -->
                                                <div class="css-3yfs4a e1h61o6v0"> <label class="form-label" for="year_of_publish"><b> year_of_publish</b></label><br>
                                                {{$bok->created}}
                                                <input type="date" id="dateOfBirth" name="year_of_publish" placeholder="07/02/2020" value="{{$bok->created}}" class="field date-field dob-field" min="2021-09-18" max="2023-03-18"  required> <br><br><br></div>
                                                <div class="css-3yfs4a e1h61o6v0">
                                                    <div class="radio-group  " data-cy="step1.isVariant">
                                                        <div class="label-row">Variant?<small class="optional">optional</small></div>
                                                        <div class="options"><label>
                                                            <input class="vis" name="variant"
                                                                    value="{{$bok->variant}}"><span>
                                                                    <div class="description">
                                                                    </div>
                                                                </span></label><label><input class="noVis" name="variant" type="radio"
                                                                    value="no"><span>
                                                                    <div class="description">
                                                                        <p>No</p>
                                                                    </div>
                                                                </span></label><label><input class="noVis-1" name="variant" type="radio"
                                                                    value="unknown"><span>
                                                                    <div class="description">
                                                                        <p>Not sure</p>
                                                                    </div>
                                                                </span></label></div>
                                                    </div>
                                                </div>
                                                <script>
                                                    document.querySelector(".vis").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group").style.display = "block"
                                                    })
                                                    document.querySelector(".noVis").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group").style.display = "none"
                                                    })
                                                    document.querySelector(".noVis-1").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group").style.display = "none"
                                                    })
                                                </script>

                                                <div class="dynamic-group">
                                                    <div class="css-3yfs4a e1h61o6v0"><label class="textarea-field ">
                                                            <div class="label-row">Describe<small class="optional">optional</small><small
                                                                    class="char-count">0 / 160</small></div>
                                                                      <input type="text" name="vd" value="{{$bok->vd}}">
                                                            <div class="input-wrapper">
                                                        </label></div>
                                                </div>


                                            </fieldset>
                                        </section>
                                        <section class="  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <div class="text">The story</div>
                                                </legend>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Key characters<small class="optional">optional</small></div>
                                                        <input type="text" name="k_characters" value="{{$bok->characters}}">
                                                        <div class="input-wrapper">
                                                            <div class="select-field  css-1d3w5wq e8tg4kf0" data-cy="step1.keyCharacters">
                                                                <div class="hide-menu css-2b097c-container"><span aria-live="polite"
                                                                        aria-atomic="false" aria-relevant="additions text"
                                                                        class="css-7pg0cj-a11yText"></span>
                                                                    <div class=" css-19sdjwq-control">
                                                                        <div class=" css-8bcu24">
                                                                            <div class="css-87lfyv-multiValue">

                                                                                <div class="css-zetw81">X-Men [Professor X [Charles Xavier];
                                                                                    Angel [Warren Worthington III]; Beast [Henry McCoy]; Cyclops
                                                                                    [Scott Summers]; Marvel Girl [Jean Grey]; Iceman [Bobby
                                                                                    Drake]]</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Magneto</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Professor X [Charles Xavier]</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">

                                                                                X-Men [Cyclops [Scott Summers]; Beast
                                                                                    [Henry McCoy]; Angel [Warren Worthington III]; Iceman [Bobby
                                                                                    Drake]; Marvel Girl [Jean Grey]]</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-1dnjvql">
                                                                                <div class="" style="display: inline-block;"><input
                                                                                        autocapitalize="none" autocomplete="off"
                                                                                        autocorrect="off" id="react-select-3-input"
                                                                                        spellcheck="false" tabindex="0" type="text"
                                                                                        aria-autocomplete="list" value=""
                                                                                        style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                    <div
                                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" css-1wy0on6">
                                                                            <div class=" css-mbqifb-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                    </path>
                                                                                </svg></div><span class=" css-43ykx9-indicatorSeparator"></span>
                                                                            <div class=" css-xoqrhw-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                    </path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                    <div><input name="step1.keyCharacters" type="hidden"
                                                                            value="Professor X [Charles Xavier] X-Men [Professor X [Charles Xavier]; Angel [Warren Worthington III]; Beast [Henry McCoy]; Cyclops [Scott Summers]; Marvel Girl [Jean Grey]; Iceman [Bobby Drake]]"><input
                                                                            name="step1.keyCharacters" type="hidden" value="Magneto"><input
                                                                            name="step1.keyCharacters" type="hidden"
                                                                            value="Professor X [Charles Xavier]"><input
                                                                            name="step1.keyCharacters" type="hidden"
                                                                            value="X-Men [Cyclops [Scott Summers]; Beast [Henry McCoy]; Angel [Warren Worthington III]; Iceman [Bobby Drake]; Marvel Girl [Jean Grey]]">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label></div>
                                                <div class="css-3yfs4a e1h61o6v0">
                                                    <div class="radio-group  " data-cy="step1.hasFirstAppearances">
                                                        <div class="label-row">First appearances?<small class="optional">optional</small></div>
                                                        <div class="options"><label><input class="vis-2" name="step1.hasFirstAppearances" type="radio"
                                                                    value="yes" checked=""><span>
                                                                    <div class="description">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </span></label><label><input class="noVis-2" name="" type="radio"
                                                                    value="no"><span>
                                                                    <div class="description">
                                                                        <p>No</p>
                                                                    </div>
                                                                </span></label><label><input class="noVis-2-2" name="step1.hasFirstAppearances" type="radio"
                                                                    value="unknown"><span>
                                                                    <div class="description">
                                                                        <p>Not sure</p>
                                                                    </div>
                                                                </span></label></div>
                                                    </div>
                                                </div>
                                                <script>
                                                    document.querySelector(".vis-2").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group-2").style.display = "block"
                                                    })
                                                    document.querySelector(".noVis-2").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group-2").style.display = "none"
                                                    })
                                                    document.querySelector(".noVis-2-2").addEventListener("click", () => {
                                                        document.querySelector(".dynamic-group-2").style.display = "none"
                                                    })
                                                </script>
                                                <div class="dynamic-group-2">
                                                    <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                            <div class="label-row">Who?<small class="optional">optional</small></div>
                                                            <input  name="f_appearance" type="text"
                                                                    value="">
                                                            <div class="input-wrapper">
                                                                <div class="select-field  css-1d3w5wq e8tg4kf0"
                                                                    data-cy="step1.firstAppearances">
                                                                    <div class="hide-menu css-2b097c-container"><span aria-live="polite"
                                                                            aria-atomic="false" aria-relevant="additions text"
                                                                            class="css-7pg0cj-a11yText"></span>
                                                                        <div class=" css-19sdjwq-control">
                                                                            <div class=" css-8bcu24">
                                                                                <div class="css-87lfyv-multiValue">
                                                                                    <div class="css-zetw81"></div>
                                                                                    <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                            viewBox="0 0 20 20" aria-hidden="true"
                                                                                            focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="css-87lfyv-multiValue">
                                                                                    <div class="css-zetw81">X-Men [Cyclops [Scott Summers];
                                                                                        Beast [Henry McCoy]; Angel [Warren Worthington III];
                                                                                        Iceman [Bobby Drake]; Marvel Girl [Jean Grey]]</div>
                                                                                    <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                            viewBox="0 0 20 20" aria-hidden="true"
                                                                                            focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="css-87lfyv-multiValue">
                                                                                    <div class="css-zetw81">Magneto</div>
                                                                                    <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                            viewBox="0 0 20 20" aria-hidden="true"
                                                                                            focusable="false" class="css-8mmkcg">
                                                                                            <path
                                                                                                d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                            </path>
                                                                                        </svg></div>
                                                                                </div>
                                                                                <div class="css-1dnjvql">
                                                                                    <div class="" style="display: inline-block;"><input
                                                                                            autocapitalize="none" autocomplete="off"
                                                                                            autocorrect="off" id="react-select-4-input"
                                                                                            spellcheck="false" tabindex="0" type="text"
                                                                                            aria-autocomplete="list" value=""
                                                                                            style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                        <div
                                                                                            style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" css-1wy0on6">
                                                                                <div class=" css-mbqifb-indicatorContainer" aria-hidden="true">
                                                                                    <svg height="20" width="20" viewBox="0 0 20 20"
                                                                                        aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div><span
                                                                                    class=" css-43ykx9-indicatorSeparator"></span>
                                                                                <div class=" css-xoqrhw-indicatorContainer" aria-hidden="true">
                                                                                    <svg height="20" width="20" viewBox="0 0 20 20"
                                                                                        aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </div>
                                                                        <div><input name="step1.firstAppearances" type="hidden"
                                                                                value="Professor X [Charles Xavier]"><input
                                                                                name="step1.firstAppearances" type="hidden"
                                                                                value="X-Men [Cyclops [Scott Summers]; Beast [Henry McCoy]; Angel [Warren Worthington III]; Iceman [Bobby Drake]; Marvel Girl [Jean Grey]]"><input
                                                                                name="step1.firstAppearances" type="hidden" value="Magneto">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label></div>
                                                </div> <br><br>
                                                <!-- <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Genre<small class="optional">optional</small></div>
                                                        <div class="input-wrapper">
                                                            <div class="select-field size-md css-1d3w5wq e8tg4kf0" data-cy="step1.genres">
                                                                <div class=" css-2b097c-container"><span aria-live="polite" aria-atomic="false"
                                                                        aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                                                    <div class=" css-19sdjwq-control">
                                                                        <div class=" css-8bcu24">
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Superhero</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-1dnjvql">
                                                                                <div class="" style="display: inline-block;"><input
                                                                                        autocapitalize="none" autocomplete="off"
                                                                                        autocorrect="off" id="react-select-5-input"
                                                                                        spellcheck="false" tabindex="0" type="text"
                                                                                        aria-autocomplete="list" value=""
                                                                                        style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                    <div
                                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" css-1wy0on6">
                                                                            <div class=" css-mbqifb-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                    </path>
                                                                                </svg></div><span class=" css-43ykx9-indicatorSeparator"></span>
                                                                            <div class=" css-1g1wkzs-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                    </path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                    <div><input name="step1.genres" type="hidden" value="Superhero"></div>
                                                                </div>
                                                            </div>
                                                        </div><small>add up to 3</small>
                                                    </label></div> -->
                                                    <label for="genre"><b>Genre</b></label>
                                                <input type="text" placeholder="{{$bok->genre}}" value="" name="genre" required>
                                            </fieldset>
                                            <aside class="">Adding story details can increase the chances of your book selling faster!</aside>
                                        </section>
                                        <section class="  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <div class="text">Extra credit</div>
                                                </legend>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Script<small class="optional">optional</small></div>
                                                        <input type="text" name="script" value="{{$bok->script}}">
                                                        <div class="input-wrapper">
                                                            <div class="select-field  css-1d3w5wq e8tg4kf0" data-cy="step1.writers">
                                                                <div class="hide-menu css-2b097c-container"><span aria-live="polite"
                                                                        aria-atomic="false" aria-relevant="additions text"
                                                                        class="css-7pg0cj-a11yText"></span>
                                                                    <div class=" css-19sdjwq-control">
                                                                        <div class=" css-8bcu24">
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Stan Lee</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-1dnjvql">
                                                                                <div class="" style="display: inline-block;"><input
                                                                                        autocapitalize="none" autocomplete="off"
                                                                                        autocorrect="off" id="react-select-6-input"
                                                                                        spellcheck="false" tabindex="0" type="text"
                                                                                        aria-autocomplete="list" value=""
                                                                                        style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                    <div
                                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" css-1wy0on6">
                                                                            <div class=" css-mbqifb-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                    </path>
                                                                                </svg></div><span class=" css-43ykx9-indicatorSeparator"></span>
                                                                            <div class=" css-xoqrhw-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                    </path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                    <div><input name="step1.writers" type="hidden" value="Stan Lee"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label></div>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Art<small class="optional">optional</small></div>
                                                        <input type="text" name="art">
                                                        <div class="input-wrapper">
                                                            <div class="select-field  css-1d3w5wq e8tg4kf0" data-cy="step1.artists">
                                                                <div class="hide-menu css-2b097c-container"><span aria-live="polite"
                                                                        aria-atomic="false" aria-relevant="additions text"
                                                                        class="css-7pg0cj-a11yText"></span>
                                                                    <div class=" css-19sdjwq-control">
                                                                        <div class=" css-8bcu24">
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Jack Kirby</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Sol Brodsky</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Frank Giacoia</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Stan Goldberg</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Artie Simek</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Paul Reinman</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-87lfyv-multiValue">
                                                                                <div class="css-zetw81">Sam Rosen</div>
                                                                                <div class="css-p4rkt4"><svg height="14" width="14"
                                                                                        viewBox="0 0 20 20" aria-hidden="true" focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                            <div class="css-1dnjvql">
                                                                                <div class="" style="display: inline-block;"><input
                                                                                        autocapitalize="none" autocomplete="off"
                                                                                        autocorrect="off" id="react-select-7-input"
                                                                                        spellcheck="false" tabindex="0" type="text"
                                                                                        aria-autocomplete="list" value=""
                                                                                        style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                    <div
                                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" css-1wy0on6">
                                                                            <div class=" css-mbqifb-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                                    </path>
                                                                                </svg></div><span class=" css-43ykx9-indicatorSeparator"></span>
                                                                            <div class=" css-xoqrhw-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                    </path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                    <div><input name="step1.artists" type="hidden" value="Jack Kirby"><input
                                                                            name="step1.artists" type="hidden" value="Sol Brodsky"><input
                                                                            name="step1.artists" type="hidden" value="Frank Giacoia"><input
                                                                            name="step1.artists" type="hidden" value="Stan Goldberg"><input
                                                                            name="step1.artists" type="hidden" value="Artie Simek"><input
                                                                            name="step1.artists" type="hidden" value="Paul Reinman"><input
                                                                            name="step1.artists" type="hidden" value="Sam Rosen"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label></div>
                                            </fieldset>
                                            <aside class="">Adding issue credits can help buyers discover your listing faster in search results.
                                            </aside>
                                        </section>
                                        <section class="  css-145wmm4 e151ajeo0">
                                            <fieldset>
                                                <legend>
                                                    <div class="bg"></div>
                                                    <div class="text">Too easy?</div>
                                                </legend>
                                                <p>Try these advanced questions</p>
                                                <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Country of origin<small class="optional">optional</small></div>
                                                        <label class="f_appearance"> <b> Country </b></label>
                                                   <select name="country" value="{{$bok->country}}" class="field form-dropdown">
                                      <option value="Pakistan"> Pakistan </option>
                                      <option value="United states"> United states </option>
                                      <option value="United Kingdom"> United Kingdom </option>
                                    </select>

                                                    </label></div>
                                                <!-- <div class="css-3yfs4a e1h61o6v0">
                                                    <div class="radio-group  " data-cy="step1.isReprint">
                                                        <div class="label-row">Reprint?<small class="optional">optional</small></div>
                                                        <div class="options"><label><input name="" type="radio"
                                                                    value="yes"><span>
                                                                    <div class="description">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </span></label><label><input name="step1.isReprint" type="radio"
                                                                    value="no"><span>
                                                                    <div class="description">
                                                                        <p>No</p>
                                                                    </div>
                                                                </span></label><label><input name="step1.isReprint" type="radio"
                                                                    value="unknown"><span>
                                                                    <div class="description">
                                                                        <p>Not sure</p>
                                                                    </div>
                                                                </span></label></div>
                                                    </div>
                                                </div> -->
                                                <br><br><br>
                                                <label class="reprint"><b>Reprint</b></label>
                                                   <select name="reprint"  class="field form-dropdown">
                                      <option value="Yes"> Yes </option>
                                      <option value="No"> No </option>
                                      <option value="not_sure"> Not sure </option>
                                    </select>
                                                <!-- <div class="css-3yfs4a e1h61o6v0"><label class="">
                                                        <div class="label-row">Printing<small class="optional">optional</small></div>
                                                        <div class="input-wrapper">
                                                            <div class="select-field size-xs css-1d3w5wq e8tg4kf0" data-cy="step1.printing">
                                                                <div class=" css-2b097c-container"><span aria-live="polite" aria-atomic="false"
                                                                        aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                                                    <div class=" css-19sdjwq-control">
                                                                        <div class=" css-8bcu24">
                                                                            <div class=" css-1b9yr8t-placeholder">e.g. 1</div>
                                                                            <div class="css-1dnjvql">
                                                                                <div class="" style="display: inline-block;"><input
                                                                                        autocapitalize="none" autocomplete="off"
                                                                                        autocorrect="off" id="react-select-9-input"
                                                                                        spellcheck="false" tabindex="0" type="text"
                                                                                        aria-autocomplete="list" value=""
                                                                                        style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                    <div
                                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Gotham SSm A, Gotham SSm B, Arial, sans-serif; font-weight: 500; font-style: normal; letter-spacing: normal; text-transform: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" css-1wy0on6"><span
                                                                                class=" css-43ykx9-indicatorSeparator"></span>
                                                                            <div class=" css-1g1wkzs-indicatorContainer" aria-hidden="true"><svg
                                                                                    height="20" width="20" viewBox="0 0 20 20"
                                                                                    aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                                                    <path
                                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                    </path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div><input name="step1.printing" type="hidden" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label></div> -->
                                                    <br><br>
                                                    <label for="print">Print</label>
                                                <input type="text" placeholder="k_characters" name="print" required>
                                            </fieldset>
                                        </section>
                                        <footer class="books">
                                            <p class="encouragement">Step 1, check!</p>
                                            <div class="cta-button main css-1kkss9a eiygp9v0">

                                                <button type="submit" class="inner-element">
                                                    Onward
                                                    to grade
                                                </button>
                                            </div>
                                            <p class="license">Some information and data on this page provided by <a
                                                    href="#" rel="noopener noreferrer" target="_blank">Grand
                                                    Comics Database™</a>. All data available for use via <a
                                                    href="#" rel="noopener noreferrer"
                                                    target="_blank">Creative Commons Attribution license</a>.</p>
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
