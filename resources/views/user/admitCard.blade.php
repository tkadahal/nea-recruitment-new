@extends('layouts.app')

@section('content')
    <div class="wizard-box {{ request()->routeIs('admitCard') ? 'active' : '' }}" id="admitCard">
        <div class="row d-flex justity-content-center">
            <div class="col justify-content-end">
                <button onclick="printSection()">Print</button>
            </div>
            <div class="col-md-12">
                <div class="tab-pane wizard-box" role="tabpanel" style="background: rgb(255, 255, 255);">
                    <section class="print-view" style="font-size: 17px; font-weight: normal;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-3 text-center top-title">
                                        <p>नेपाल बिधुत प्राधिकरण</p>
                                        <p>प्रधान कार्यालय, काठमाडौँ</p>
                                        <strong class="d-block"><u>खुल्ला प्रतियोगितात्मक परिक्षा प्रबेशपत्र</u></strong>
                                    </div>
                                    <table width="100%" cellpadding="0" class="table-hide"
                                        style="font-size: 18px; margin-top: 15px; vertical-align: top; border: 0px;">
                                        <tr>
                                            <td style="float: left; text-align: center;">
                                                <div
                                                    style="border: 1px solid rgb(0, 0, 0); width: 140px; height: 160px; position: relative; margin-top: -150px;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="100%" cellpadding="0" class="table-hide"
                                        style="font-size: 18px; margin-top: 15px; vertical-align: top; border: 0px;">
                                        <tr>
                                            <td style="float: right; text-align: center;">
                                                <div
                                                    style="border: 1px solid rgb(0, 0, 0); width: 140px; height: 160px; position: relative; margin-top: -150px;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div style="clear: both;"></div> <!-- Clear the float after the floated elements -->
                                </div>

                                <div class="col-md-12 pb-5">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table width="100%" cellpadding="2px" style="font-size: 15px;">
                                                <tr>
                                                    <td>
                                                        रोल नं :
                                                        <span
                                                            style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                            {{ auth()->user()->applicant_id }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Applicant Id :
                                                        <span
                                                            style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                            {{ auth()->user()->applicant_id }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        नाम, थर :
                                                        <span
                                                            style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                            {{ auth()->user()->name_np }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Name :
                                                        <span
                                                            style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                            {{ auth()->user()->name_en }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mt-2" width="100%" cellpadding="2px"
                                                    style="font-size: 15px;">
                                                    <tr>
                                                        <td>
                                                            बिज्ञापन नं :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            सेवा :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            समूह /उपसमूह :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            पद :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            सम्मिलित समूह :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            नागरिकता नं :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            परीक्षा केन्द्र :
                                                        </td>
                                                        <td>
                                                            <span
                                                                style="color: rgb(24, 24, 24); font-size: 14px; font-weight: bolder;">
                                                                1
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if (auth()->user()->media->where('media_type_id', 3)->isNotEmpty())
                                                <div style="text-align: right;">
                                                    {!! auth()->user()->media->where('media_type_id', 3)->first()->toLargeImageString() !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <table width="100%" cellpadding="2" class="table-hide"
                                        style="font-size: 16px; margin-top: 15px; border: 0px;">
                                        <tr>
                                            <td>
                                                <p style="text-align: justify">
                                                    यस प्राधिकरणबाट लिईने उक्त पदको परीक्षामा तपाईलाई सम्मिलित हुन अनुमति
                                                    दिइएको छ । विज्ञापनमा तोकिएको शर्त नपुगेको ठहर भएमा जुनसुकै अवस्थामा पनि
                                                    यो अनिमति रद्द हुनेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="100%" cellpadding="2" class="table-hide mt-5" style="font-size: 15px;">
                                        <tr>
                                            <td width="70%" style="padding-top: 10px;">
                                                <p> उम्मेदवारको दस्तखत</p>
                                            </td>
                                            <td>
                                                <p>अधिकृतको दस्तखत</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <strong class="d-block mt-2">
                                        <u>
                                            उम्मेदवारले पालना गर्नुपर्ने नियमहरु :
                                        </u>
                                    </strong>
                                    <table width="100%" cellpadding="2" class="table-hide mt-1" style="font-size: 15px;">
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १. परीक्षा दिन आउदा अनिवार्य रुपमा प्रवेशपत्र ल्याउनु पर्नेछ ।
                                                    प्रवेशपत्र विना परीक्षामा बस्न पाइने छैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    २. परीक्षा हलमा विधुतीय उपकरण ल्याउन पाइने छैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ३. लिखित परीक्षाको नतिजा प्रकाशित भएपछि अन्तर्वार्ता हुने दिनमा पनि
                                                    प्रवेशपत्र ल्याउनुपर्नेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ४. परीक्षा शुरु हुने ३० मिनेट अगावै घन्टीद्वारा सूचना गरेपछि परीक्षा
                                                    हलमा प्रवेश गर्न दिईनेछ । एक घण्टा वा सो भन्दा बडी समयको परीक्षा भएमा
                                                    परीक्षा शुरु भएको ३० मिनटसम्म र वस्तुगत तथा बिषयगत दुवै परीक्षा संगै
                                                    हुनेमा २० मिनट पछि आउने उम्मेदवारले परीक्षामा बस्न पाउने छैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ५. परीक्षा शुरु भएको ३० मिनेट पछि मात्र उम्मेदवारलाई परीक्षा हाल बाहिर
                                                    जाने अनुमति दिइनेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ६. परीक्षा हलमा प्रवेश गरेपछि किताब, कापी, कागज, चिट आदि आफु साथ राख्नु
                                                    हुँदैन । उम्मेदवारले आपसमा कुराकानी र संकेत गर्नु हुँदैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ७. परीक्षा हलमा उम्मेदवारले परीक्षाको मर्यादा विपरित कुनै काम गरेमा
                                                    केन्द्राध्यक्षले पर्रिक्षा हलबाट निष्काशन गरि गरि सो को जानकारी
                                                    सम्बन्धित कार्यालयमा गराउने छ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ८. बिरामी भएको उम्मेदवारले परीक्षा हलमा प्रवेश गरी परीक्षा दिने क्रममा
                                                    निजलाई केहि भएमा प्राधिकरण जबाफदेही हुने छैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ९. उम्मेदवारले परीक्षा दिएको दिनमा हाजिर अनिवार्य रुपले गर्नुपर्नेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १०. प्राधिकरणले सूचनाद्वारा निर्धारण गरेको कार्यक्रम अनुसार परीक्षा
                                                    संचालन हुनेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    ११. उम्मेदवारले वस्तुगत परीक्षामा आफुलाई प्राप्त प्रश्नको "की"
                                                    उत्तरपुस्तिकामा अनिवार्य रुपले लेख्नुपर्नेछ । नलेखेमा उत्तरपुस्तिका
                                                    स्वत: रद्द हुनेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १२. ल्याकत (आइ. क्यू) परीक्षामा क्यालकुलेटर प्रयोग गर्न पाईने छैन ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १३. कुनै उम्मेदवारले प्रश्नपत्रमा रहेको अस्पस्टताको सम्बन्धमा सोध्नु
                                                    पर्दा पनि परीक्षाम सम्मिलित अन्य उम्मेदवारलाई बाधा नपर्ने गरी
                                                    निरीक्षकलाई सोध्नु पर्नेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १४. परीक्षाम प्रवेशपत्र संगै आफ्नो नागरिकता वा नेपाल सरकारबाट जारी भएको
                                                    फोटो समेतको कुनै परिचयपत्र अनिवार्य रुपमा लिई आउनुपर्नेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १५. लोक सेवा आयोगबाट जारी भएको संक्रमणको विशेष अवस्थामा परीक्षा (संचालन
                                                    तथा व्यवस्थापन) सम्बन्धी मापदण्ड २०७७ पालना गरी परीक्षा संचालन गरिनेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १६. कोभिड -१९ संक्रमित उम्मेदवारहरुको लागि विशेष परीक्षा केन्द्रको
                                                    व्यवस्था गरिने भएकाले त्यस्ता उम्मेदवारहरुले आफु संक्रमित भएको जानकारी
                                                    नेपाल विधुत प्राधिकरण र सम्बन्धित परीक्षा केन्द्रमा अग्रिमरुपमा गराउनु
                                                    पर्नेछ ।
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: justify; margin: 0;">
                                                    १७. परीक्षार्थीले आफुले परीक्षा दिएको दिनको हाजिर छुट भएको भए तुरुन्त
                                                    खबर गरी हाजिर गर्नु पर्दछ ।
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        @page {
            size: auto;
            margin: 0;
        }

        /* Hide elements you don't want to print */
        .print-hidden {
            display: none;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function printSection() {
            var printContents = document.querySelector('.print-view').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
