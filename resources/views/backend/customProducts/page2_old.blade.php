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

    <div role="main" class="css-cwfaa0 e17ysy6t0">
        <div class="container css-1hysab2 ejthfju1">
            <div class="css-1woo9m2 elcnykr0">

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
                <section class="css-1ht8wkd e4nqznn0">
                    <header>
                        <h2><span class="step-number">Step 2</span>All about that grade</h2>
                    </header>
                    <section class="grades no-legend css-145wmm4 e151ajeo0">
                        <fieldset>
                            <h3>What are you selling?</h3>
                            <div class="button-group ">
                                <button type="button" class="on btn1" ><span>“Raw”
                                            comic</span>
                                    </button>
                                <button type="button" class="btn2" ><span>“Slabbed”
                                            comic</span>
                                    </button>
                            </div>
                            <div class="info-box info-box-1">My comic is <strong>not</strong> sealed in a hard plastic case and I am able to touch or read it. I will be responsible for judging the condition of my comic.
                            </div>
                            <div class="info-box info-box-2">My comic is “slabbed” by a third-party grading service (CGC, CBCS, or PGX). My comic is sealed in a hard plastic case that displays the assigned grade and condition.</div>
                        </fieldset>
                    </section>




                    <script>
                        window.onload = function() {
    document.getElementById("l").style.display = "none";
                                    }
                                    function raw() {
                                        document.getElementById("l").style.display = "block";
                                    }

                        document.querySelector(".btn1").addEventListener("click", () => {
                            document.querySelector(".desc").style.display = "block"
                            document.querySelector(".modifi").style.display = "block"
                            document.querySelector(".note").style.display = "block"
                            document.querySelector(".info-box-1").style.display = "block"
                            document.querySelector(".info-box-2").style.display = "none"
                            document.querySelector(".grad").style.display = "none"
                        })
                        document.querySelector(".btn2").addEventListener("click", () => {
                            document.querySelector(".desc").style.display = "none"
                            document.querySelector(".modifi").style.display = "none"
                            document.querySelector(".grad").style.display = "block"
                            document.querySelector(".note").style.display = "block"
                            document.querySelector(".info-box-2").style.display = "block"
                            document.querySelector(".info-box-1").style.display = "none"
                        })
                    </script>

                    <!-- sdsdfadsa========== -->
                    <form action="/seller/raw" method="POST">
        @csrf
                    <section class="desc condition no-legend css-145wmm4 e151ajeo0">
                            <fieldset>
                                <h3>Describe the condition</h3>
                                <p>Choose the condition that best describes your book.</p>
                                <label class="slgrade"> <b> Grade </b></label>
                           <select name="slgrade" @if(!empty($bok->grade)) value="{{$bok->grade}}" @endif class="field form-dropdown">
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
                            </fieldset>
                        </section>


                        <section class="modifi css-145wmm4 e151ajeo0">
                            <fieldset>
                                <legend>
                                    <div class="bg"></div>
                                    <div class="text">Modifications</div>
                                </legend>
                                <div class="css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  " data-cy="step2.isSigned">
                                        <div class="label-row">Signature</div>
                                        <div class="options"><label>
                                                <input class="btn-mad1" name="step2.isSigned" type="radio"
                                                    value="yes"><span>
                                                    <div class="description">
                                                        <p>Yes</p>
                                                    </div>
                                                </span></label><label>
                                                <input class="btn-mad2" name="step2.isSigned" type="radio" value="no"
                                                    checked=""><span>
                                                    <div class="description">
                                                        <p>No</p>
                                                    </div>
                                                </span></label><label>
                                                <input class="btn-mad3" name="step2.isSigned" type="radio"
                                                    value="unknown"><span>
                                                    <div class="description">
                                                        <p>Not sure</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>
                                <div class="dynamic-group mp1">
                                    <div class="css-3yfs4a e1h61o6v0"><label class="textarea-field ">
                                            <div class="label-row">Describe<small
                                                    class="optional">optional</small><small class="char-count">0 /
                                                    110</small></div>
                                            <div class="input-wrapper">
                                                <input type="text"  placeholder="Who signed?" name="signature">
                                            </div>
                                        </label></div>
                                </div>


                                <script>
                                    document.querySelector(".btn-mad1").addEventListener("click", () => {
                                        document.querySelector(".mp1").style.display = "block"
                                    })
                                    document.querySelector(".btn-mad2").addEventListener("click", () => {
                                        document.querySelector(".mp1").style.display = "none"
                                    })
                                    document.querySelector(".btn-mad3").addEventListener("click", () => {
                                        document.querySelector(".mp1").style.display = "none"
                                    })
                                </script>


                                <div class="css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  " data-cy="step2.isRestoration">
                                        <div class="label-row">Restoration</div>
                                        <div class="options"><label><input class="btn-mad4" name="step2.isRestoration"
                                                    type="radio" value="yes"><span>
                                                    <div class="description">
                                                        <p>Yes</p>
                                                    </div>
                                                </span></label><label><input class="btn-mad5" name="step2.isRestoration"
                                                    type="radio" value="no" checked=""><span>
                                                    <div class="description">
                                                        <p>No</p>
                                                    </div>
                                                </span></label><label><input class="btn-mad6" name="step2.isRestoration"
                                                    type="radio" value="unknown"><span>
                                                    <div class="description">
                                                        <p>Not sure</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>

                                <script>
                                    document.querySelector(".btn-mad4").addEventListener("click", () => {
                                        document.querySelector(".mp2").style.display = "block"
                                    })
                                    document.querySelector(".btn-mad5").addEventListener("click", () => {
                                        document.querySelector(".mp2").style.display = "none"
                                    })
                                    document.querySelector(".btn-mad6").addEventListener("click", () => {
                                        document.querySelector(".mp2").style.display = "none"
                                    })
                                </script>


                                <div class="dynamic-group mp2">
                                    <div class="css-3yfs4a e1h61o6v0"><label class="textarea-field ">
                                            <div class="label-row">Describe<small
                                                    class="optional">optional</small><small class="char-count">0 /
                                                    110</small></div>
                                            <div class="input-wrapper"> <input type="text"  placeholder="Who signed?" name="restoration"></div>
                                        </label></div>
                                </div>

                            </fieldset>
                            <section class="notes note  css-145wmm4 e151ajeo0">
                                <fieldset>
                                    <legend>
                                        <div class="bg"></div>
                                        <div class="text">Add notes</div>
                                    </legend>
                                    <p><label class="">Anything else you’d like to add about the condition and content of
                                                your book? <small>optional</small></label></p>
                                    <div class=" css-c2b476 ejzs01j0">
                                        <div class="controls"><button type="button" tabindex="-1" title="Bold (Ctrl+B)" class="bold "></button><button type="button" tabindex="-1" title="Italic (Ctrl+I)" class="italic "></button><button type="button" tabindex="-1" title="Bulleted list (Ctrl+Shift+L)"
                                                class="list "></button><span class="char-count">4 / 1500</span></div>
                                        <div class="editor-wrapper ">
                                            <div class="DraftEditor-root">
                                                <div class="DraftEditor-editorContainer">
                                                    <div class="notranslate public-DraftEditor-content" contenteditable="true" role="textbox" spellcheck="false" style="outline: none; user-select: text; white-space: pre-wrap; overflow-wrap: break-word;">
                                                        <div data-contents="true">
                                                            <div class="" data-block="true" data-editor="fpr1g" data-offset-key="17dev-0-0">
                                                                <div data-offset-key="17dev-0-0" class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr">
                                                                    <span data-offset-key="17dev-0-0"><span
                                                                                data-text="true"><input type="text"  placeholder="Who signed?" name="description"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <aside class="">Sharing a brief overview of your comic will help buyers feel more confident purchasing from your shop.</aside>

                            </section>
                            <footer>
                                <p class="encouragement">You’re doing great!</p>
                                <div class="cta-button main css-1kkss9a eiygp9v0">
                                    <button type="submit" class="inner-element">Save &amp; add photos</button></div>
                                <div class="cta-button secondary css-1kkss9a eiygp9v0">
                                    <button type="button" class="inner-element">Go back to book details</button></div>
                                <p class="error">There are items that need your attention. Please check the fields highlighted in red.</p>
                            </footer>
                        </section>

                    </form>




























                    <form action="/seller/slab" method="POST">
                    @csrf
                        <section class="grad  css-145wmm4 e151ajeo0">
                            <fieldset>
                                <legend>
                                    <div class="bg"></div>
                                    <div class="text">The grade</div>
                                </legend>
                                <div class="css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  vertical" data-cy="step2.gradingCertification">
                                        <div class="label-row">Grading certification</div>
                                        <div class="options"><label>
                                                <input class="btn-grad1" name="step2.gradingCertification" type="radio"
                                                    value="153"><span>
                                                    <div class="description">

                                                       <p onclick="raw()">CGC</p>
                                                    </div>
                                                </span></label><label>
                                                <input class="btn-grad2" name="step2.gradingCertification" type="radio"
                                                    value="154" checked=""><span>
                                                    <div class="description">
                                                    <p onclick="raw()">PGX</p>

                                                    </div>
                                                </span></label><label>
                                                <input class="btn-grad3" name="step2.gradingCertification" type="radio"
                                                    value="155"><span>
                                                    <div class="description">

                                                        <p onclick="raw()">CBCS</p>

                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>

                                <script>
                                    document.querySelector(".btn-grad1").addEventListener("click", () => {
                                        document.querySelector(".sub-grad-1").style.display = "block"
                                        document.querySelector(".sub-grad-2").style.display = "block"
                                        document.querySelector(".sig").style.display = "block"
                                        document.querySelector(".res").style.display = "block"
                                        document.querySelector(".cer").style.display = "block"
                                        document.querySelector(".sld1").style.display = "block"
                                        document.querySelector(".sld").style.display = "none"
                                        document.querySelector(".sld2").style.display = "none"



                                    })
                                    document.querySelector(".btn-grad2").addEventListener("click", () => {
                                        document.querySelector(".sub-grad-1").style.display = "block"
                                        document.querySelector(".sub-grad-2").style.display = "block"
                                        document.querySelector(".sig").style.display = "block"
                                        document.querySelector(".res").style.display = "block"
                                        document.querySelector(".cer").style.display = "block"
                                        document.querySelector(".sld").style.display = "block"
                                        document.querySelector(".sld1").style.display = "none"
                                        document.querySelector(".sld2").style.display = "none"


                                    })
                                    document.querySelector(".btn-grad3").addEventListener("click", () => {
                                        document.querySelector(".sub-grad-1").style.display = "block"
                                        document.querySelector(".sub-grad-2").style.display = "block"
                                        document.querySelector(".sig").style.display = "block"
                                        document.querySelector(".res").style.display = "block"
                                        document.querySelector(".cer").style.display = "block"
                                        document.querySelector(".sld").style.display = "none"
                                        document.querySelector(".sld1").style.display = "none"
                                        document.querySelector(".sld2").style.display = "block"

                                    })
                                    window.onload = function() {
    document.getElementById("l").style.display = "none";
                                    }
                                </script>


                         <div id="l">


                                <div class="sub-grad sub-grad-1 css-3yfs4a e1h61o6v0"><label class="">
                                        <div class="label-row">Grade</div>
                                        <div class="input-wrapper">
                                            <div class="select-field size-md css-1d3w5wq e8tg4kf0"
                                                data-cy="step2.grade">
                                                <div class=" css-2b097c-container"><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class=" css-19sdjwq-control">
                                                        <div class=" css-8bcu24">

                        <label class="slgrade"> <b> Grade </b></label>
                           <select name="slgrade" @if(!empty($bok->grade)) value="{{$bok->grade}}" @endif class="field form-dropdown">
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
                                                            <div class="css-1dnjvql">
                                                                <div class="" style="display: inline-block;"><input
                                                                        autocapitalize="none" autocomplete="off"
                                                                        autocorrect="off" id="react-select-52-input"
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
                                                            <div class=" css-mbqifb-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z">
                                                                    </path>
                                                                </svg></div><span
                                                                class=" css-43ykx9-indicatorSeparator"></span>
                                                            <div class=" css-1g1wkzs-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </div><input name="step2.grade" type="hidden" value="74">
                                                </div>
                                            </div>
                                        </div>
                                    </label></div>




                                <div class="sub-grad sub-grad-2  css-3yfs4a e1h61o6v0"><label class="">
                                        <div class="label-row">Page Color<small class="optional">optional</small></div>
                                        <div class="input-wrapper">
                                            <div class="select-field size-md css-1d3w5wq e8tg4kf0"
                                                data-cy="step2.pageColor">
                                                <div class=" css-2b097c-container"><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class=" css-19sdjwq-control">
                                                        <div class=" css-8bcu24">
                                                            <div class=" css-1b9yr8t-placeholder"><input type="text"  placeholder="page color" name="pcolor"></div>
                                                            <div class="css-1dnjvql">
                                                                <div class="" style="display: inline-block;"><input
                                                                        autocapitalize="none" autocomplete="off"
                                                                        autocorrect="off" id="react-select-53-input"
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
                                                            <div class=" css-1g1wkzs-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </div><input name="step2.pageColor" type="hidden" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </label></div>
                                <!-- 1111111 -->
                                <div class="sub-grad sld css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  vertical" data-cy="step2.designation">
                                        <div class="label-row">Slab designation<small class="optional">optional</small>
                                        <div class="field-row">

                           <select name="pgxdes"  class="field form-dropdown">
              <option value="Blue - World"> Blue - World </option>
              <option value="Gold - Signature"> Gold - Signature</option>
              <option value="Green - Restored"> Green - Restored </option>
            </select>
                          </div>
                                        </div>
                                        <div class="options dsa"><label><input name="step2.designation" type="radio"
                                                    value="117"><span>
                                                    <div class="description">
                                                        <p>Blue - World</p>
                                                    </div>
                                                </span></label><label><input name="step2.designation" type="radio"
                                                    value="118"><span>
                                                    <div class="description">
                                                        <p>Gold - Signature</p>
                                                    </div>
                                                </span></label><label><input name="step2.designation" type="radio"
                                                    value="119"><span>
                                                    <div class="description">
                                                        <p>Green - Restored</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>




                                <div class="css-3yfs4a sld1 e1h61o6v0"><label class="">
                                        <div class="label-row">Slab designation<small class="optional">optional</small>
                                        </div>
                                        <input type="text"  placeholder="page color" name="cgcdes">
                                        <div class="input-wrapper">
                                            <div class="select-field size-md css-1d3w5wq e8tg4kf0"
                                                data-cy="step2.designation">
                                                <div class=" css-2b097c-container"><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class=" css-19sdjwq-control">
                                                        <div class=" css-8bcu24">
                                                            <div class=" css-1b9yr8t-placeholder">Select</div>
                                                            <div class="css-1dnjvql">
                                                                <div class="" style="display: inline-block;"><input
                                                                        autocapitalize="none" autocomplete="off"
                                                                        autocorrect="off" id="react-select-17-input"
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
                                                            <div class=" css-1g1wkzs-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </div><input name="step2.designation" type="hidden" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </label></div>



                                <div class="css-3yfs4a sld2 e1h61o6v0">
                                    <div class="radio-group  vertical" data-cy="step2.designation">
                                        <div class="label-row">Slab designation<small class="optional">optional</small>
                                        </div>
                                        <div class="field-row">

                           <select name="cbcsdes"  class="field form-dropdown">
              <option value="Yes"> Universal (Blue) </option>
              <option value="No"> Signature Series (Yellow) </option>
              <option value="not_sure"> Verified Signature (Red) </option>
              <option value="not_sure"> Verified Signature (Red) </option>
            </select>
                          </div>
                                        <div class="options"><label><input name="step2.designation" type="radio"
                                                    value="112"><span>
                                                    <div class="description">
                                                        <p>Universal (Blue)</p>
                                                    </div>
                                                </span></label><label><input name="step2.designation" type="radio"
                                                    value="113"><span>
                                                    <div class="description">
                                                        <p>Signature Series (Yellow)</p>
                                                    </div>
                                                </span></label><label><input name="step2.designation" type="radio"
                                                    value="114"><span>
                                                    <div class="description">
                                                        <p>Verified Signature (Red)</p>
                                                    </div>
                                                </span></label><label><input name="step2.designation" type="radio"
                                                    value="115"><span>
                                                    <div class="description">
                                                        <p>Original Art</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>


                                <!-- 222222222 -->
                                <div class="sub-grad sig css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  " data-cy="step2.isSigned">
                                        <div class="label-row">Signature</div>
                                        <div class="options"><label><input class="btn-sig-1" name="step2.isSigned" type="radio"
                                                    value="yes"><span>
                                                    <div class="description">
                                                        <p>Yes</p>
                                                    </div>
                                                </span></label><label><input class="btn-sig-2" name="step2.isSigned" type="radio"
                                                    value="no" checked=""><span>
                                                    <div class="description">
                                                        <p>No</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>

                                <script>
                                    document.querySelector(".btn-sig-1").addEventListener("click", () => {
                                        document.querySelector(".sig-d").style.display = "block"
                                    })
                                    document.querySelector(".btn-sig-2").addEventListener("click", () => {
                                        document.querySelector(".sig-d").style.display = "none"
                                    })
                                </script>

                                <div class="dynamic-group sig-d">
                                    <div class="css-3yfs4a e1h61o6v0"><label class="textarea-field ">
                                            <div class="label-row">Describe<small
                                                    class="optional">optional</small><small class="char-count">0 /
                                                    110</small></div>
                                            <div class="input-wrapper"><input type="text"  placeholder="Who signed?" name="slsignature"></textarea></div>
                                        </label></div>
                                </div>



                                <!-- 333333333333 -->
                                <div class="sub-grad res css-3yfs4a e1h61o6v0">
                                    <div class="radio-group  " data-cy="step2.isRestoration">
                                        <div class="label-row">Restoration</div>
                                        <div class="options"><label><input class="btn-res-1" name="step2.isRestoration" type="radio"
                                                    value="yes"><span>
                                                    <div class="description">
                                                        <p>Yes</p>
                                                    </div>
                                                </span></label><label><input class="btn-res-2" name="step2.isRestoration" type="radio"
                                                    value="no" checked=""><span>
                                                    <div class="description">
                                                        <p>No</p>
                                                    </div>
                                                </span></label><label><input class="btn-res-3" name="step2.isRestoration" type="radio"
                                                    value="unknown"><span>
                                                    <div class="description">
                                                        <p>Not sure</p>
                                                    </div>
                                                </span></label></div>
                                    </div>
                                </div>

                                <script>
                                    document.querySelector(".btn-res-1").addEventListener("click", () => {
                                        document.querySelector(".rest").style.display = "block"
                                    })
                                    document.querySelector(".btn-res-2").addEventListener("click", () => {
                                        document.querySelector(".rest").style.display = "none"
                                    })
                                    document.querySelector(".btn-res-3").addEventListener("click", () => {
                                        document.querySelector(".rest").style.display = "none"
                                    })
                                </script>

                                <div class="dynamic-group rest">
                                    <div class="css-3yfs4a e1h61o6v0"><label class="textarea-field ">
                                            <div class="label-row">Describe<small
                                                    class="optional">optional</small><small class="char-count">0 /
                                                    110</small></div>
                                            <div class="input-wrapper"><input type="text"  placeholder="Who signed?" name="slrestoration"></div>
                                        </label></div>
                                </div>






                                <!-- 44444444 -->

                                <div class="sub-grad cer css-3yfs4a e1h61o6v0"><label class="">
                                        <div class="label-row">Certification number<small
                                                class="optional">optional</small></div>
                                        <div class="input-wrapper   "><input name="certificate"
                                                class="size-md input-text" placeholder="e.g. 123456789" value=""></div>
                                    </label></div>


                            </fieldset>
                            <section class="notes note  css-145wmm4 e151ajeo0">
                                <fieldset>
                                    <legend>
                                        <div class="bg"></div>
                                        <div class="text">Add notes</div>
                                    </legend>
                                    <p><label class="">Anything else you’d like to add about the condition and content of
                                            your book? <small>optional</small></label></p>
                                    <div class=" css-c2b476 ejzs01j0">
                                        <div class="controls"><button type="button" tabindex="-1" title="Bold (Ctrl+B)" class="bold "></button><button type="button" tabindex="-1" title="Italic (Ctrl+I)" class="italic "></button><button type="button" tabindex="-1" title="Bulleted list (Ctrl+Shift+L)"
                                                class="list "></button><span class="char-count">4 / 1500</span></div>
                                        <div class="editor-wrapper ">
                                            <div class="DraftEditor-root">
                                                <div class="DraftEditor-editorContainer">
                                                    <div class="notranslate public-DraftEditor-content" contenteditable="true" role="textbox" spellcheck="false" style="outline: none; user-select: text; white-space: pre-wrap; overflow-wrap: break-word;">
                                                        <div data-contents="true">
                                                            <div class="" data-block="true" data-editor="fpr1g" data-offset-key="17dev-0-0">
                                                                <div data-offset-key="17dev-0-0" class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr">
                                                                    <span data-offset-key="17dev-0-0"><span
                                                                            data-text="true">sada</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <aside class="">Sharing a brief overview of your comic will help buyers feel more confident purchasing from your shop.</aside>

                            </section>
                            <footer>
                                <p class="encouragement">You’re doing great!</p>
                                <div class="cta-button main css-1kkss9a eiygp9v0">
                                    <button type="submit" class="inner-element">Save &amp; add photos</button></div>
                                <div class="cta-button secondary css-1kkss9a eiygp9v0">
                                    <button type="button" class="inner-element">Go back to book details</button></div>
                                <p class="error">There are items that need your attention. Please check the fields highlighted in red.</p>
                            </footer>
                        </section>
                        </div>

                    </form>


                </section>

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
