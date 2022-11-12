@extends('layouts.dmc')

@section('content')
    <main class="kontakt">
        <div id="main_10" class="Standard-1_mit_Standardbreite_8_12">
            <div class="general-1 cb-section position-relative " style="" id="section_pos_10">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8" style="position: relative; ">
                            <div class="row justify-content-center cb-section-columnrow "
                                 style="margin-top: -15px; margin-bottom: -15px;">
                                <div class="col-12 col-lg  " id="section_pos_10_column_pos_10"
                                     style="margin-top: 15px; margin-bottom: 15px; ">
                                    <div class="cb-column" style="height: 100%; position: relative;    ">
                                        <div style="height: .1px;"></div>
                                        <div class="cb-column-block" style="  "><h3><font
                                                    style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;">Contact</font></font></h3>
                                            {!! $contacts_html_data !!}
                                        </div>
                                        <div class="cb-column-block" style="  ">
                                            <div class="cb-img-block" style="width:100%;"><img alt="{{ $dealer_name_html_data }} logo"
                                                                                               src="/images/DMC_LOGO.jpg"
                                                                                               class="lazyautosizes ls-is-cached lazyloaded"
                                                                                               style="width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg  " id="section_pos_10_column_pos_20"
                                     style="margin-top: 15px; margin-bottom: 15px; ">
                                    <div class="cb-column" style="height: 100%; position: relative;    ">
                                        <div style="height: .1px;"></div>
                                        <div class="cb-column-block" style="  ">
                                            <form class="form-template-1 form--Kontakt" action="/submissions"
                                                  method="post" enctype="multipart/form-data">
                                                <div style="display: none;">
                                                    <label><font style="vertical-align: inherit;"><font
                                                                style="vertical-align: inherit;">
                                                                Don't fill this out if you're human
                                                            </font></font><input type="email" name="e_mail">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Vorname-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           id="Vorname-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"><i><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">First
                                                                    name</font></font></i>
                                                    </label>
                                                    <input type="text" class="form-control input-type-text"
                                                           id="Vorname-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           name="Vorname"
                                                           aria-describedby="Vorname-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nachname-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           id="Nachname-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"><i><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">Surname</font></font></i>
                                                    </label>
                                                    <input type="text" class="form-control input-type-text"
                                                           id="Nachname-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           name="Nachname"
                                                           aria-describedby="Nachname-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           id="Email-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"><i><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">Email</font></font></i>
                                                        <span class="text-danger"><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">*</font></font></span>
                                                    </label>
                                                    <input type="email" class="form-control input-type-email"
                                                           id="Email-72ad293f-5b59-4192-9e0a-875ad7ffb7b5" name="Email"
                                                           aria-describedby="Email-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nachricht-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                           id="Nachricht-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"><i><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">Your
                                                                    message </font></font></i>
                                                        <span class="text-danger"><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">*</font></font></span>
                                                    </label>
                                                    <textarea class="form-control"
                                                              id="Nachricht-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                              name="Nachricht"
                                                              aria-describedby="Nachricht-label-72ad293f-5b59-4192-9e0a-875ad7ffb7b5"
                                                              rows="3" required=""></textarea>
                                                </div>
                                                <div>
                                                    <button class="btn btn-lg btn-outline-primary mt-3 w-100"
                                                            type="submit"><i><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">Submit</font></font></i>
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
    </main>
@endsection
