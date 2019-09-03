@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-4" style="border: 1px solid #FFD98D">
      <ul class="ul">
        <li class="ulli">
          <i class="fas fa-fw fa-tasks" style="margin-right:40px;"></i>{{App\Job::find($job_id)->post}}
        </li>
        <li class="ulli">
          <div class="row">
            <div class="col-md-2">
              <i class="fas fa-fw fa-id-card"></i>
            </div>
            <div class="col-md-10">
              Job Description

              -The Process Engineer role is critical to the development of our factories to World Class, which means zero defects, zero waste and zero losses.
              -She/he will apply extensively the full range of Focused and Quality Improvement methods and tools to counter losses identified in the areas of Safety, Quality, Cost Deployment, Customer Service and Logistics.
              -The Cost Deployment pillar will be populated with data built up through application of the Managing Manufacturing Performance Code, which is key to ensuring focus on key losses.
              -Working directly with the line crews on a daily basis the Process Engineer also acts as the technical trainer for line teams and provides coaching in phenomena identification, root cause analysis and the establishment of counter-measures.
              -The Process Engineer is responsible for the validation of all process improvements and the establishment of revised basic conditions on the line. A core deliverable is eliminated losses and wastes and increase the stability of the line to support the transition of traditional line teams to semi-autonomous teams.



              Job Requirements

              -Post Graduate level education ore Bachelor Degree with relevant engineering skills in specialized field of Mechanical, Chemical or Electrical.
              -Have background experiences in FMCG/ Manufacturing field.
              -Flexible, Dependency and Accuracy.
              -Good communication skills.
              -Good command of English. Able to use MS package (especially Word and Excel).
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.12437" type="text/javascript"></script>
      <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
      <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.12437" type="text/javascript"></script>
      <script type="text/javascript">
        JotForm.init(function(){
          /*INIT-END*/
        });

        JotForm.prepareCalculationsOnTheFly([null,null,{"name":"clickTo","qid":"2","text":"Job Seekers Application","type":"control_head"},{"name":"stateOf","qid":"3","text":"State of Resident","type":"control_dropdown"},{"name":"lastName","qid":"4","text":"Last Name","type":"control_textbox"},{"name":"firstName","qid":"5","text":"First Name","type":"control_textbox"},null,{"name":"phoneNumber","qid":"7","text":"Phone Number","type":"control_phone"},{"name":"alternateNumber","qid":"8","text":"Alternate Number","type":"control_phone"},{"name":"positionFor9","qid":"9","text":"Position for which you are applying for?","type":"control_dropdown"},{"name":"ifOther","qid":"10","text":"If other, kindly specify","type":"control_textbox"},{"name":"preferredWorking","qid":"11","text":"Preferred working mode","type":"control_dropdown"},{"name":"haveYou12","qid":"12","text":"Have you previously worked  us?","type":"control_dropdown"},{"name":"ifSo","qid":"13","text":"If so, when?","type":"control_birthdate"},null,{"name":"uploadYour","qid":"15","text":"Upload Your CV","type":"control_fileupload"},{"name":"address16","qid":"16","text":"Address","type":"control_address"},{"name":"submit","qid":"17","text":"Submit","type":"control_button"}]);
        setTimeout(function() {
          JotForm.paymentExtrasOnTheFly([null,null,{"name":"clickTo","qid":"2","text":"Job Seekers Application","type":"control_head"},{"name":"stateOf","qid":"3","text":"State of Resident","type":"control_dropdown"},{"name":"lastName","qid":"4","text":"Last Name","type":"control_textbox"},{"name":"firstName","qid":"5","text":"First Name","type":"control_textbox"},null,{"name":"phoneNumber","qid":"7","text":"Phone Number","type":"control_phone"},{"name":"alternateNumber","qid":"8","text":"Alternate Number","type":"control_phone"},{"name":"positionFor9","qid":"9","text":"Position for which you are applying for?","type":"control_dropdown"},{"name":"ifOther","qid":"10","text":"If other, kindly specify","type":"control_textbox"},{"name":"preferredWorking","qid":"11","text":"Preferred working mode","type":"control_dropdown"},{"name":"haveYou12","qid":"12","text":"Have you previously worked  us?","type":"control_dropdown"},{"name":"ifSo","qid":"13","text":"If so, when?","type":"control_birthdate"},null,{"name":"uploadYour","qid":"15","text":"Upload Your CV","type":"control_fileupload"},{"name":"address","qid":"16","text":"Address","type":"control_address"},{"name":"submit","qid":"17","text":"Save","type":"control_button"}]);}, 20); 
        </script>
        <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.12437" rel="stylesheet" type="text/css" />
        <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.12437" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.12437" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5cf39fbd544a5401541a4081"/>
        <style type="text/css">
          .form-label-left{
            width:150px;
          }
          .form-line{
            padding-top:12px;
            padding-bottom:12px;
          }
          .form-label-right{
            width:150px;
          }
          .form-all{
            width:690px;
            color:#555 !important;
            font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            font-size:14px;
          }
          .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
            color: false;
          }

        </style>

        <style type="text/css" id="form-designer-style">
          /* Injected CSS Code */
          /*PREFERENCES STYLE*/
          .form-all {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
          }
          .form-all .qq-upload-button,
          .form-all .form-submit-button,
          .form-all .form-submit-reset,
          .form-all .form-submit-print {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
          }
          .form-all .form-pagebreak-back-container,
          .form-all .form-pagebreak-next-container {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
          }
          .form-header-group {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
          }
          .form-label {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
          }

          .form-label.form-label-auto {

            display: inline-block;
            float: left;
            text-align: left;

          }

          .form-line {
            margin-top: 12px 36px 12px 36px px;
            margin-bottom: 12px 36px 12px 36px px;
          }

          .form-all {
            width: 650px;
          }

          .form-label-left,
          .form-label-right,
          .form-label-left.form-label-auto,
          .form-label-right.form-label-auto {
            width: 150px;
          }

          .form-all {
            font-size: 14pxpx
          }
          .form-all .qq-upload-button,
          .form-all .qq-upload-button,
          .form-all .form-submit-button,
          .form-all .form-submit-reset,
          .form-all .form-submit-print {
            font-size: 14pxpx
          }
          .form-all .form-pagebreak-back-container,
          .form-all .form-pagebreak-next-container {
            font-size: 14pxpx
          }

          .supernova .form-all, .form-all {
            background-color: ;
            border: 1px solid transparent;
          }

          .form-all {
            color: #555;
          }
          .form-header-group .form-header {
            color: #555;
          }
          .form-header-group .form-subHeader {
            color: #555;
          }
          .form-label-top,
          .form-label-left,
          .form-label-right,
          .form-html,
          .form-checkbox-item label,
          .form-radio-item label {
            color: #555;
          }
          .form-sub-label {
            color: #6f6f6f;
          }

          .supernova {
            background-color: undefined;
          }
          .supernova body {
            background: transparent;
          }

          .form-textbox,
          .form-textarea,
          .form-radio-other-input,
          .form-checkbox-other-input,
          .form-captcha input,
          .form-spinner input {
            background-color: undefined;
          }

          .supernova {
            background-image: none;
          }
          #stage {
            background-image: none;
          }

          .form-all {
            background-image: none;
          }

          .ie-8 .form-all:before { display: none; }
          .ie-8 {
            margin-top: auto;
            margin-top: initial;
          }

          /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
          /* Injected CSS Code */
        </style>

        <form class="jotform-form" action="{{ route('save') }}" method="post" enctype="multipart/form-data" name="form_92273777311460" id="92273777311460" accept-charset="utf-8">
          @csrf
          <div role="main" class="form-all">
            <ul class="form-section page-section">
              <li id="cid_2" class="form-input-wide" data-type="control_head">
                <div class="form-header-group ">
                  <div class="header-text httal htvam">
                    <h1 id="header_2" class="form-header" data-component="header">
                      Job Seekers Application
                    </h1>
                  </div>
                </div>
              </li>
              <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_4">
                <label class="form-label form-label-left" id="label_4" for="input_4">
                  Last Name
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_4" class="form-input jf-required">
                  <input type="text" id="input_4" name="lastname" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_4" required="" />
                </div>
              </li>
              <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_5">
                <label class="form-label form-label-left" id="label_5" for="input_5">
                  First Name
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_5" class="form-input jf-required">
                  <input type="text" id="input_5" name="firstname" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_5" required="" />
                </div>
              </li>
              <li class="form-line" data-type="control_address" id="id_16">
                <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16undefined"> Address </label>
                <div id="cid_16" class="form-input-wide">
                  <table summary="" class="form-address-table">
                    <tbody>
                      <tr>
                        <td colSpan="2">
                          <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="input_16_addr_line1" name="address[addr_line1]" class="form-textbox form-address-line" autoComplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_16 sublabel_16_addr_line1" />
                            <label class="form-sub-label" for="input_16_addr_line1" id="sublabel_16_addr_line1" style="min-height:13px"> Street Address </label>
                          </span>
                        </td>
                      </tr>
                      
                      <tr>
                        <td>
                          <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="input_16_city" name="address[city]" class="form-textbox form-address-city" autoComplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_16 sublabel_16_city" />
                            <label class="form-sub-label" for="input_16_city" id="sublabel_16_city" style="min-height:13px"> City </label>
                          </span>
                        </td>
                        <td>
                          <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="input_16_state" name="address[state]" class="form-textbox form-address-state" autoComplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_16 sublabel_16_state" />
                            <label class="form-sub-label" for="input_16_state" id="sublabel_16_state" style="min-height:13px"> State / Province </label>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="input_16_postal" name="gender" class="form-textbox form-address-postal" autoComplete="postal-code" size="10" value="" data-component="zip" aria-labelledby="label_16 sublabel_16_postal" />
                            <label class="form-sub-label" for="input_16_postal" id="sublabel_16_postal" style="min-height:13px"> Gender </label>
                          </span>
                        </td>
                        <td>
                          <span class="form-sub-label-container" style="vertical-align:top">
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li class="form-line jf-required" data-type="control_dropdown" id="id_3">
                <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
                  Email
                  <span class="form-required">
                    *
                  </span>
                  <div id="cid_4" class="form-input jf-required">
                    <input type="text" id="input_4" name="email" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_4" required="" />
                  </div>
                </label>

              </li>
              <li class="form-line form-line-column form-col-1 jf-required" data-type="control_phone" id="id_7">
                <label class="form-label form-label-left" id="label_7" for="input_7_area">
                  Phone Number
                  <span class="form-required">
                    *
                  </span>
                </label>
                <div id="cid_7" class="form-input jf-required">
                  <div data-wrapper-react="true">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="tel" id="input_7_area" name="q7_phoneNumber[area]" class="form-textbox validate[required]" size="6" value="" data-component="areaCode" aria-labelledby="label_7 sublabel_7_area" required="" />
                      <span class="phone-separate" aria-hidden="true">
                       -
                     </span>
                     <label class="form-sub-label" for="input_7_area" id="sublabel_7_area" style="min-height:13px"> Area Code </label>
                   </span>
                   <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="tel" id="input_7_phone" name="q7_phoneNumber[phone]" class="form-textbox validate[required]" size="12" value="" data-component="phone" aria-labelledby="label_7 sublabel_7_phone" required="" />
                    <input type="hidden" value="{{$job_id}}" name="job_id">
                    <label class="form-sub-label" for="input_7_phone" id="sublabel_7_phone" style="min-height:13px"> Phone Number </label>
                  </span>
                </div>
              </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_8">
              <label class="form-label form-label-left" id="label_8" for="input_8_area"> Alternate Number </label>
              <div id="cid_8" class="form-input">
                <div data-wrapper-react="true">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="tel" id="input_8_area" name="q8_alternateNumber[area]" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_8 sublabel_8_area" />
                    <span class="phone-separate" aria-hidden="true">
                     -
                   </span>
                   <label class="form-sub-label" for="input_8_area" id="sublabel_8_area" style="min-height:13px"> Area Code </label>
                 </span>
                 <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="tel" id="input_8_phone" name="q8_alternateNumber[phone]" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_8 sublabel_8_phone" />
                  <label class="form-sub-label" for="input_8_phone" id="sublabel_8_phone" style="min-height:13px"> Phone Number </label>
                </span>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_dropdown" id="id_11">
            <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> Preferred working mode </label>
            <div id="cid_11" class="form-input-wide">
              <select class="form-dropdown" id="input_11" name="q11_preferredWorking" style="width:150px" data-component="dropdown" aria-labelledby="label_11">
                <option value="">  </option>
                <option value="Full Time"> Full Time </option>
                <option value="Part Time"> Part Time </option>
              </select>
            </div>
          </li>
          <li class="form-line" data-type="control_dropdown" id="id_12">
            <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Have you previously worked for us? </label>
            <div id="cid_12" class="form-input-wide">
              <select class="form-dropdown" id="input_12" name="q12_haveYou12" style="width:150px" data-component="dropdown" aria-labelledby="label_12">
                <option value="">  </option>
                <option value="YES"> YES </option>
                <option value="NO"> NO </option>
              </select>
            </div>
          </li>
          <li class="form-line form-line-column form-col-1" data-type="control_birthdate" id="id_13">
            <label class="form-label form-label-left" id="label_13" for="input_13"> If so, when? </label>
            <div id="cid_13" class="form-input">
              <div data-wrapper-react="true">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select name="q13_ifSo[month]" id="input_13_month" class="form-dropdown" data-component="birthdate-month">
                    <option>  </option>
                    <option value="January"> January </option>
                    <option value="February"> February </option>
                    <option value="March"> March </option>
                    <option value="April"> April </option>
                    <option value="May"> May </option>
                    <option value="June"> June </option>
                    <option value="July"> July </option>
                    <option value="August"> August </option>
                    <option value="September"> September </option>
                    <option value="October"> October </option>
                    <option value="November"> November </option>
                    <option value="December"> December </option>
                  </select>
                  <label class="form-sub-label" for="input_13_month" id="sublabel_month" style="min-height:13px"> Month </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select name="q13_ifSo[day]" id="input_13_day" class="form-dropdown" data-component="birthdate-day">
                    <option>  </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> 7 </option>
                    <option value="8"> 8 </option>
                    <option value="9"> 9 </option>
                    <option value="10"> 10 </option>
                    <option value="11"> 11 </option>
                    <option value="12"> 12 </option>
                    <option value="13"> 13 </option>
                    <option value="14"> 14 </option>
                    <option value="15"> 15 </option>
                    <option value="16"> 16 </option>
                    <option value="17"> 17 </option>
                    <option value="18"> 18 </option>
                    <option value="19"> 19 </option>
                    <option value="20"> 20 </option>
                    <option value="21"> 21 </option>
                    <option value="22"> 22 </option>
                    <option value="23"> 23 </option>
                    <option value="24"> 24 </option>
                    <option value="25"> 25 </option>
                    <option value="26"> 26 </option>
                    <option value="27"> 27 </option>
                    <option value="28"> 28 </option>
                    <option value="29"> 29 </option>
                    <option value="30"> 30 </option>
                    <option value="31"> 31 </option>
                  </select>
                  <label class="form-sub-label" for="input_13_day" id="sublabel_day" style="min-height:13px"> Day </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select name="q13_ifSo[year]" id="input_13_year" class="form-dropdown" data-component="birthdate-year">
                    <option>  </option>
                    <option value="2019"> 2019 </option>
                    <option value="2018"> 2018 </option>
                    <option value="2017"> 2017 </option>
                    <option value="2016"> 2016 </option>
                    <option value="2015"> 2015 </option>
                    <option value="2014"> 2014 </option>
                    <option value="2013"> 2013 </option>
                    <option value="2012"> 2012 </option>
                    <option value="2011"> 2011 </option>
                    <option value="2010"> 2010 </option>
                    <option value="2009"> 2009 </option>
                    <option value="2008"> 2008 </option>
                    <option value="2007"> 2007 </option>
                    <option value="2006"> 2006 </option>
                    <option value="2005"> 2005 </option>
                    <option value="2004"> 2004 </option>
                    <option value="2003"> 2003 </option>
                    <option value="2002"> 2002 </option>
                    <option value="2001"> 2001 </option>
                    <option value="2000"> 2000 </option>
                    <option value="1999"> 1999 </option>
                    <option value="1998"> 1998 </option>
                    <option value="1997"> 1997 </option>
                    <option value="1996"> 1996 </option>
                    <option value="1995"> 1995 </option>
                    <option value="1994"> 1994 </option>
                    <option value="1993"> 1993 </option>
                    <option value="1992"> 1992 </option>
                    <option value="1991"> 1991 </option>
                    <option value="1990"> 1990 </option>
                    <option value="1989"> 1989 </option>
                    <option value="1988"> 1988 </option>
                    <option value="1987"> 1987 </option>
                    <option value="1986"> 1986 </option>
                    <option value="1985"> 1985 </option>
                    <option value="1984"> 1984 </option>
                    <option value="1983"> 1983 </option>
                    <option value="1982"> 1982 </option>
                    <option value="1981"> 1981 </option>
                    <option value="1980"> 1980 </option>
                    <option value="1979"> 1979 </option>
                    <option value="1978"> 1978 </option>
                    <option value="1977"> 1977 </option>
                    <option value="1976"> 1976 </option>
                    <option value="1975"> 1975 </option>
                    <option value="1974"> 1974 </option>
                    <option value="1973"> 1973 </option>
                    <option value="1972"> 1972 </option>
                    <option value="1971"> 1971 </option>
                    <option value="1970"> 1970 </option>
                    <option value="1969"> 1969 </option>
                    <option value="1968"> 1968 </option>
                    <option value="1967"> 1967 </option>
                    <option value="1966"> 1966 </option>
                    <option value="1965"> 1965 </option>
                    <option value="1964"> 1964 </option>
                    <option value="1963"> 1963 </option>
                    <option value="1962"> 1962 </option>
                    <option value="1961"> 1961 </option>
                    <option value="1960"> 1960 </option>
                    <option value="1959"> 1959 </option>
                    <option value="1958"> 1958 </option>
                    <option value="1957"> 1957 </option>
                    <option value="1956"> 1956 </option>
                    <option value="1955"> 1955 </option>
                    <option value="1954"> 1954 </option>
                    <option value="1953"> 1953 </option>
                    <option value="1952"> 1952 </option>
                    <option value="1951"> 1951 </option>
                    <option value="1950"> 1950 </option>
                    <option value="1949"> 1949 </option>
                    <option value="1948"> 1948 </option>
                    <option value="1947"> 1947 </option>
                    <option value="1946"> 1946 </option>
                    <option value="1945"> 1945 </option>
                    <option value="1944"> 1944 </option>
                    <option value="1943"> 1943 </option>
                    <option value="1942"> 1942 </option>
                    <option value="1941"> 1941 </option>
                    <option value="1940"> 1940 </option>
                    <option value="1939"> 1939 </option>
                    <option value="1938"> 1938 </option>
                    <option value="1937"> 1937 </option>
                    <option value="1936"> 1936 </option>
                    <option value="1935"> 1935 </option>
                    <option value="1934"> 1934 </option>
                    <option value="1933"> 1933 </option>
                    <option value="1932"> 1932 </option>
                    <option value="1931"> 1931 </option>
                    <option value="1930"> 1930 </option>
                    <option value="1929"> 1929 </option>
                    <option value="1928"> 1928 </option>
                    <option value="1927"> 1927 </option>
                    <option value="1926"> 1926 </option>
                    <option value="1925"> 1925 </option>
                    <option value="1924"> 1924 </option>
                    <option value="1923"> 1923 </option>
                    <option value="1922"> 1922 </option>
                    <option value="1921"> 1921 </option>
                    <option value="1920"> 1920 </option>
                  </select>
                  <label class="form-sub-label" for="input_13_year" id="sublabel_year" style="min-height:13px"> Year </label>
                </span>
              </div>
            </div>
          </li>
          <li class="form-line jf-required" data-type="control_fileupload" id="id_15">
            <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15">
              Upload Your CV
              <span class="form-required">
                *
              </span>
            </label>
            <div id="cid_15" class="form-input-wide jf-required">
              <input type="file" id="input_15" name="fileupload" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required="" />
            </div>
          </li>
          <li class="form-line" data-type="control_button" id="id_17">
            <div id="cid_17" class="form-input-wide">
              <div style="margin-left:156px" class="form-buttons-wrapper ">
                <button id="input_17" type="submit" class="form-submit-button" data-component="button">
                  Apply Job
                </button>
              </div>
            </div>
          </li>
          <li style="display:none">
            Should be Empty:
            <input type="text" name="website" value="" />
          </li>
        </ul>
      </div>
      <script>
        JotForm.showJotFormPowered = "new_footer";
      </script>

      <div class="formFooter-heightMask">
      </div>

    </form>

  </div>
</div>
</div
@endsection