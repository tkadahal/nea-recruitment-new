@extends('layouts.app')

@section('content')
    <div class="wizard-box {{ request()->routeIs('education') ? 'active' : '' }}" id="education">
        <div class="row d-flex justity-content-center">
            <div class="col-md-12">
                <div class="tab-pane wizard-box" role="tabpanel" style="background: rgb(255, 255, 255);">
                    <section class="print-view" style="font-size: 17px; font-weight: normal;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-3 text-center top-title">
                                        <p>अनुसूची–८</p>
                                        <p>(विनियम २२ को उपविनियम (३) संग सम्बन्धित)</p>
                                        <p>नेपाल बिधुत प्राधिकरण</p>
                                        <strong class="d-block"><u>खुल्ला प्रतियोगिताको लागि दरखास्त फारम</u></strong>
                                    </div>
                                    <table width="100%" cellpadding="0" class="table-hide"
                                        style="font-size: 18px; margin-top: 15px; vertical-align: top; border: 0px;">
                                        <tr>
                                            <td style="float: right; text-align: center;">
                                                <div
                                                    style="border: 1px solid rgb(0, 0, 0); width: 140px; height: 160px; position: relative; margin-top: -150px;">
                                                    @if ($user->media->where('media_type_id', 1)->isNotEmpty())
                                                        {!! $user->media->where('media_type_id', 1)->first() !!}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12 pb-5">
                                    <strong class="d-block">
                                        <u>
                                            भाग (क) &nbsp;&nbsp;&nbsp;&nbsp;वैयक्तिक विवरण :
                                        </u>
                                    </strong>
                                    <div class="table-responsive">
                                        <table width="100%" cellpadding="2px" class="table table-bordered"
                                            style="font-size: 15px;">
                                            <tbody>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 30%">१. उम्मेदवारको पुरा नाम, थर :-
                                                                    </td>
                                                                    <td style="width: 70%">
                                                                        <table width="100%" class="table table-bordered">
                                                                            <tbody style="padding: 0px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        देवनागरीमा :
                                                                                        <span
                                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">
                                                                                            {{ $user->name_np ?? '' }}
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        अंग्रेजीमा :
                                                                                        <span
                                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">
                                                                                            {{ $user->name ?? '' }}
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 50%">२. मोबाइल नम्बर : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->mobile_number) ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 50%">इमेल : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->email ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 50%">३. जन्म मिति (बि. सं): <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->dob_np) ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 50%">(ई.सं): <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->dob_en) ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>४. नागरिकता नं : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->citizenship_number) ?? '' }}</span>
                                                                    </td>
                                                                    <td>जारी मिति : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->citizenship_issued_date) ?? '' }}</span>
                                                                    </td>
                                                                    <td>जारी जिल्ला : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->citizenshipDistrict->title ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>५. स्थायी ठेगाना :
                                                                    </td>
                                                                    <td>प्रदेश : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->permaProvince->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>जिल्ला : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->permaDistrict->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>न.पा / गा. प : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->permaMunicipality->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>वडा नं : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->contact->perma_ward_number) ?? '' }}</span>
                                                                    </td>
                                                                    <td>टोल : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->perma_tol ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>६. हालको ठेगाना :
                                                                    </td>
                                                                    <td>प्रदेश : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->tempProvince->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>जिल्ला : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->tempDistrict->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>न.पा / गा. प : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->tempMunicipality->title ?? '' }}</span>
                                                                    </td>
                                                                    <td>वडा नं : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->contact->temp_ward_number) ?? '' }}</span>
                                                                    </td>
                                                                    <td>टोल : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->temp_tol ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 70%">७. सम्पर्क व्यक्तिको नाम : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->contact_person_name ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 30%">मोबाइल नं : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ localizedNumber($user->contact->contact_person_number) ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 70%">८. बाबुको नाम : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->father_name ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 30%">नागरिकता : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->fatherCountry->title ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 70%">९. आमाको नाम : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->mother_name ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 30%">नागरिकता : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->motherCountry->title ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 70%">१०. हजुरबाबुको नाम : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->grandfather_name ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 30%">नागरिकता : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->grandfatherCountry->title ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td style="width: 70%">११. पति / पत्नीको नाम : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->spouse_name ?? '' }}</span>
                                                                    </td>
                                                                    <td style="width: 30%">नागरिकता : <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">{{ $user->contact->spouseCountry->title ?? '' }}</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <strong class="d-block mt-2">
                                            <u>
                                                भाग (ख) &nbsp;&nbsp;&nbsp;&nbsp;शैक्षिक योग्यताको विवरण :
                                            </u>
                                        </strong>
                                        <table width="100%" cellpadding="2px" class="table table-bordered"
                                            style="font-size: 15px;">
                                            <thead>
                                                <tr class="table-border">
                                                    <th>क्र.सं.</th>
                                                    <th>प्राप्त शैक्षिक योग्यता</th>
                                                    <th>अध्ययन गरेको संस्था</th>
                                                    <th>उत्तीर्ण वर्ष</th>
                                                    <th>श्रेणी</th>
                                                    <th>प्रतिशत / ग्रेड</th>
                                                </tr>
                                            </thead>
                                            <tbody style="padding: 0px;">
                                                @foreach ($user->educations as $education)
                                                    <tr class="table-border">
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($loop->iteration) }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $education->qualification->title ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $education->institution ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($education->pass_year) ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $education->division->title ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $education->percentage ?? '' }}</p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <strong class="d-block mt-2">
                                            <u>
                                                भाग (ग) &nbsp;&nbsp;&nbsp;&nbsp;तालिमको विवरण :
                                            </u>
                                        </strong>
                                        <table width="100%" cellpadding="2px" class="table table-bordered"
                                            style="font-size: 15px;">
                                            <thead>
                                                <tr class="table-border">
                                                    <th>क्र.सं.</th>
                                                    <th>तालिमको बिषय</th>
                                                    <th>तालिम दिने संस्था</th>
                                                    <th>प्रतिशत / ग्रेड</th>
                                                    <th>तालिम अवधि (महिनामा)</th>
                                                </tr>
                                            </thead>
                                            <tbody style="padding: 0px;">
                                                @foreach ($user->trainings as $training)
                                                    <tr class="table-border">
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($loop->iteration) }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $training->subject ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $training->training_institute ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $training->percentage ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($training->training_period) ?? '' }}</p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <strong class="d-block mt-2">
                                            <u>
                                                भाग (घ) &nbsp;&nbsp;&nbsp;&nbsp;कार्यानुभवको विवरण :
                                            </u>
                                        </strong>
                                        <table width="100%" cellpadding="2px" class="table table-bordered"
                                            style="font-size: 15px;">
                                            <thead>
                                                <tr class="table-border">
                                                    <th>क्र.सं.</th>
                                                    <th>कार्यालय</th>
                                                    <th>पद</th>
                                                    <th>तह</th>
                                                    <th>नियुक्ति प्रकार</th>
                                                    <th>कार्यानुभव अवधि (महिनामा)</th>
                                                </tr>
                                            </thead>
                                            <tbody style="padding: 0px;">
                                                @foreach ($user->experiences as $experience)
                                                    <tr class="table-border">
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($loop->iteration) }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $experience->office ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $experience->post ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $experience->level->title ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ $experience->recruitmentType->title ?? '' }}</p>
                                                        </td>
                                                        <td class="table-border">
                                                            <p>{{ localizedNumber($experience->experience_period) ?? '' }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table width="100%" cellpadding="2" class="table-hide"
                                            style="font-size: 16px; margin-top: 15px; border: 0px;">
                                            <tr>
                                                <td width="70%">
                                                    <p style="text-align: justify">
                                                        मैले यस दरखास्त फारममा खुलाएका विवरणहरु सत्य छन् । प्रचलित कानून
                                                        बमोजिम
                                                        सरकारी सेवाको निमित्त अयोग्य ठहरिने गरी सेवाबाट बरखास्त भएको छैन र
                                                        मेरो
                                                        नियुक्तिको सम्बन्धमा असर पर्न सक्ने कामको अनुभव, वैयातिक विवरण,
                                                        शैक्षिक
                                                        योग्यता आदिका सम्बन्धमा कुनै कुरा ढाँटेको वा लुकाएको छैन । कुनै कुरा
                                                        ढाँटेको वा लुकाएको ठहरेमा कानून बमोजिम सहने छु, बुझाउने छु । साथै
                                                        प्राधिकरणको नियुक्ति, बढुवा र सेवा सम्बन्धमा कर्मचारीलाई विभागीय
                                                        कारवाही
                                                        गर्दा अपनाउनु पर्ने नेपाल विधुत प्राधिकरण, कर्मचारी सेवा विनियमावली,
                                                        २०७५ बमोजिम र प्रचलित ऐन नियम र उम्मेदवारले पालना गर्नुपर्ने शर्तहरु
                                                        विपरित हुने गरी कुनै पनि परीक्षा भवन भित्र कुनै कार्य गरेमा तत्काल
                                                        परीक्षाबाट निष्काशन गर्ने वा मेरो सम्पूर्ण परीक्षा रद्ध गर्ने वा
                                                        भविष्यमा प्राधिकरणद्वारा संचालन हुने कुनै पनि परीक्षामा भाग लिन
                                                        नपाएमा
                                                        मेरो मन्जुरी छ ।
                                                    </p>
                                                    <table width="100%" class="mt-5">
                                                        <tr>
                                                            <td>
                                                                <p>
                                                                    उम्मेदवारको दस्तखत :-
                                                                    @if ($user->media->where('media_type_id', 2)->isNotEmpty())
                                                                        {!! $user->media->where('media_type_id', 2)->first()->toSmallImageString() !!}
                                                                    @endif
                                                                </p>
                                                                <p>मिति:-
                                                                    <span id="nepaliDate"
                                                                        style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;"></span>
                                                                </p>

                                                                <p>
                                                                    <b>
                                                                        <u>
                                                                            संलग्न कागजपत्रहरु:-
                                                                        </u>
                                                                    </b>
                                                                </p>
                                                                <p>
                                                                    (१) नागरिकताको प्रमाणपत्रको प्रमाणित प्रतिलिपी (अगाडीको
                                                                    भाग)
                                                                    <span class="preview--checkbox">
                                                                        <span class="checkmark">
                                                                            @if ($user->media->where('media_type_id', 3)->isNotEmpty())
                                                                                ✔
                                                                            @else
                                                                                ✘
                                                                            @endif
                                                                        </span>
                                                                    </span>
                                                                </p>
                                                                <p>
                                                                    (२) नागरिकताको प्रमाणपत्रको प्रमाणित प्रतिलिपी (अगाडीको
                                                                    भाग)
                                                                    <span class="preview--checkbox">
                                                                        <span class="checkmark">
                                                                            @if ($user->media->where('media_type_id', 4)->isNotEmpty())
                                                                                ✔
                                                                            @else
                                                                                ✘
                                                                            @endif
                                                                        </span>
                                                                    </span>
                                                                </p>
                                                                <p>
                                                                    (३) समाबेशीताको प्रमाणपत्रको प्रमाणित प्रतिलिपी
                                                                    <span class="preview--checkbox">
                                                                        <span class="checkmark">
                                                                            @if ($user->media->where('media_type_id', 5)->isNotEmpty())
                                                                                ✔
                                                                            @else
                                                                                ✘
                                                                            @endif
                                                                        </span>
                                                                    </span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <a class="btn btn-secondary" href="{{ route('upload') }}">
                    Go Back
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('application.index') }}">
                    Next
                </a>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .preview--checkbox {
            border: 1px solid #000;
            width: 35px;
            height: 18px;
            display: inline-block;
            position: relative;
            top: 4px;
        }

        .checkmark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
            $("#nepaliDate").text(current_nepali_date);
        });
    </script>
@endsection
