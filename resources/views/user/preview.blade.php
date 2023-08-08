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
                                                    <img src="https://neaapi.inferica.com/uploads/new_connection/64/new-connection-16805967513787.jpeg"
                                                        alt="Profile Image"
                                                        style="height: 100%; width: 100%; object-fit: cover;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12 pb-5">
                                    <strong class="d-block"><u>वैयक्तिक विवरण</u></strong>
                                    <div class="table-responsive">
                                        <table width="100%" cellpadding="2px" class="table table-bordered"
                                            style="font-size: 15px;">
                                            <tbody>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>१. उम्मेदवारको पुरा नाम, थर :- </td>
                                                                    <td>
                                                                        <table width="100%" class="table table-bordered">
                                                                            <tbody style="padding: 0px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        देवनागरीमा :
                                                                                        <span
                                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">
                                                                                            {{ $user->name_np }}
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        अंग्रेजीमा :
                                                                                        <span
                                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">
                                                                                            {{ $user->name }}
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
                                                    <td>२. जन्म मिति : <span
                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">2</span>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>४. बाजे/ससुराको नामः- <span
                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">3</span>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>५. घरधनीको नामः- <span
                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">6</span>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>६. बिजुली जडान गरिने स्थानको पूरा ठेगाना :-</td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>घर नं.:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">1</span>
                                                                    </td>
                                                                    <td>टोल:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">2</span>
                                                                    </td>
                                                                    <td>वडा नं.:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">3</span>
                                                                    </td>
                                                                    <td>न.पा./गा.पा. :- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">4</span>
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
                                                                    <td>जिल्ला:-<span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">5</span>
                                                                    </td>
                                                                    <td>फोन नं.:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">6</span>
                                                                    </td>
                                                                    <td>घर:- </td>
                                                                    <td>कार्यालय:-</td>
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
                                                                    <td>ईमेल ठेगानाः- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;"></span>
                                                                    </td>
                                                                    <td>मोवाइल नं.:-<span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">9843524512</span>
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
                                                                    <td width="70%">७. विजुली जडान हुने स्थानको विवरण
                                                                        (घर,पसल इत्यादी)</td>
                                                                    <td>तल्ला:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">7</span>
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
                                                                    <td>८. घरको बनोट: </td>
                                                                    <td>फुस <span class="preview--checkbox"></span></td>
                                                                    <td>खपडा <span class="preview--checkbox"><span
                                                                                class="checkmark">✔</span></span></td>
                                                                    <td>जस्ता <span class="preview--checkbox"></span></td>
                                                                    <td>पक्का <span class="preview--checkbox"></span></td>
                                                                    <td>जम्मा कोठा –किचन, बाथरुम छोडेर:- <span
                                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">8</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>९. वायरिङ्ग गर्ने ठेकेदारको नाम र ठेगाना:-<span
                                                            style="color: rgb(24, 24, 24); font-size: 12px; font-weight: bolder;">9</span>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>१०. उल्लेखित ठाउमा पहिले देखि नै वत्ती भए सो को विवरण:-</td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>ग्राहक नं.:-</td>
                                                                    <td>वत्ती जडान भएको सालः-</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>नामः बु/पतिको:- </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>नामः- </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table>
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>११. माग गरेको विजुलीको उपयोग (कुन किसिमको आवश्यकता
                                                                        हो तल उल्लेख भएकोमा घेरा लगाउनु होस्)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>ग्राहस्थ <span class="preview--checkbox"></span>
                                                                    </td>
                                                                    <td>औद्योगिक <span class="preview--checkbox"><span
                                                                                class="checkmark">✔</span></span></td>
                                                                    <td>व्यापारिक <span class="preview--checkbox"></span>
                                                                    </td>
                                                                    <td>गैर व्यापारिक <span
                                                                            class="preview--checkbox"></span></td>
                                                                    <td>सिंचाई<span class="preview--checkbox"></span></td>
                                                                    <td>खानेपानी<span class="preview--checkbox"></span></td>
                                                                    <td>यातायात<span class="preview--checkbox"></span></td>
                                                                    <td>मन्दिर<span class="preview--checkbox"></span></td>
                                                                    <td>सडक वत्ती<span class="preview--checkbox"></span>
                                                                    </td>
                                                                    <td>चार्जिङ स्टसन <span
                                                                            class="preview--checkbox"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>१२. कुन किसिमको आवश्यकता हो घेरा लगाउनुहोस्ः नयाँ विद्युत लाइन <span
                                                            class="preview--checkbox"><span
                                                                class="checkmark">✔</span></span> अस्थायी विद्युत लाइन
                                                        <span class="preview--checkbox"></span>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>१३. आवेदक वा निजको परिवारको नाम वा घरमा जडान भएको
                                                                        विद्युत लाइनको महसुल वा अन्य बक्यौता रकम भुक्तानी
                                                                        गर्न बाँकी छ/छैन ।</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>छ भने ग्राहक नं.:- </td>
                                                                    <td>ग्राहकको नाम:- </td>
                                                                    <td>ठेगाना:- </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td>१४(क) घर/उद्योग/व्यापारको लागि </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p style="margin-top: 15px;"><strong>जडान विवरण</strong></p>
                                        <table width="100%" cellpadding="2px" class="table-hide"
                                            style="font-size: 15px; border: 1px;">
                                            <thead>
                                                <tr class="table-border">
                                                    <th>किलो वाट</th>
                                                    <th>क्र.सं.</th>
                                                    <th>जडान हुने सामान</th>
                                                    <th>वाट</th>
                                                    <th>संख्या</th>
                                                    <th>जम्मा वाट</th>
                                                    <th>द्रष्टव्य</th>
                                                </tr>
                                            </thead>
                                            <tbody style="padding: 0px;">
                                                <tr class="table-border">
                                                    <td class="table-border"></td>
                                                    <td class="table-border">
                                                        <p>१</p>
                                                        <p>२</p>
                                                        <p>३</p>
                                                        <p>४</p>
                                                        <p>५</p>
                                                        <p>६</p>
                                                        <p>७</p>
                                                        <p>८</p>
                                                        <p>९</p>
                                                    </td>
                                                    <td class="table-border">
                                                        <p>बत्ती</p>
                                                        <p>पंखा</p>
                                                        <p>पानीको हिटर</p>
                                                        <p>रूम हिटर</p>
                                                        <p>राइस कुकर</p>
                                                        <p>रेफ्रिजेरेटर</p>
                                                        <p>एयरकन्डीसनर</p>
                                                        <p>टिभी</p>
                                                        <p>अन्य</p>
                                                    </td>
                                                    <td class="table-border text-center">
                                                        <p>1.</p>
                                                        <p>3</p>
                                                        <p>5</p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                    </td>
                                                    <td class="table-border  text-center">
                                                        <p>2</p>
                                                        <p>4</p>
                                                        <p>6</p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                    </td>
                                                    <td class="table-border  text-center">
                                                        <p>2</p>
                                                        <p>12</p>
                                                        <p>30</p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                        <p><span style="font-size: 0px;">.</span></p>
                                                    </td>
                                                    <td class="table-border">
                                                        <p>थ्री फेज सप्लाईको हकमा जडान हुने<br> उपकरणहरुको क्षमता (किलो
                                                            वाट)<br> निर्माता सिरियल नं. समत उल्लेख गरेको<br> सुची
                                                            अनिवार्यरुपमा संलग्न गर्नुपर्ने छ ।</p>
                                                    </td>
                                                </tr>
                                                <tr class="table-border">
                                                    <td colspan="8">
                                                        <table width="100%">
                                                            <tbody style="padding: 0px;">
                                                                <tr>
                                                                    <td>किसिम</td>
                                                                    <td>सिंगल फेज <span class="preview--checkbox"><span
                                                                                class="checkmark">✔</span></span> </td>
                                                                    <td>ग्राहस्थ थ्री फेज<span
                                                                            class="preview--checkbox"></span></td>
                                                                    <td>संस्थागत थ्री फेज<span
                                                                            class="preview--checkbox"></span></td>
                                                                    <td>निजी ट्रान्सफरमर<span
                                                                            class="preview--checkbox"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table width="100%" cellpadding="2" class="table-hide"
                                            style="font-size: 16px; margin-top: 15px; border: 0px;">
                                            <tr>
                                                <td width="70%">उपरोक्त विवरणहरु ठीक, साँचो छ, झुट्टा भएमा कानून बमोजिम
                                                    कारवाहि भएमा म/हामी जिम्मेवार हुने छु/छौं ।<table width="100%">
                                                        <tr>
                                                            <td>
                                                                <p>मिति:-</p>
                                                                <p>आवेदक/आवेदक संस्था भएमा<br> त्यसको आधिकारिक व्यक्तिको
                                                                    हस्ताक्षर</p>
                                                                <p>हस्ताक्षर गर्नेको पुरा नाम:-</p>
                                                                <p>दर्जा:-</p>
                                                                <p>संलग्न कागजपत्रहरु:-</p>
                                                                <p>(१) आवेदकको नागरिकताको प्रमाणपत्रको प्रमाणित प्रतिलिपी
                                                                    ..................................................................
                                                                    १ थान</p>
                                                                <p>(२)</p>
                                                                <p>(३)</p>
                                                                <p>(४)</p>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <div
                                                                    style="border: 1px solid rgb(0, 0, 0); width: 130px; height: 150px; margin-top: -78px;">
                                                                </div>
                                                                <p style="margin-top: 10px;">संस्थाको छाप</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: top; padding-left: 10px;">
                                                    <div style="padding-left: 30px; padding-bottom: 20px;">
                                                        <p>आवेदक नाम :-</p>
                                                        <p></p>
                                                    </div>
                                                    <div style="float: right;">
                                                        <div
                                                            style="border: 1px solid rgb(0, 0, 0); width: 280px; height: 30px; text-align: center;">
                                                            <span>छाप</span>
                                                        </div>
                                                        <div style="text-align: right; margin-top: -1px;">
                                                            <div
                                                                style="border: 1px solid rgb(0, 0, 0); width: 140px; height: 150px; text-align: center; display: inline-block;">
                                                                <span
                                                                    style="padding-top: 65px; display: inline-block;">दा</span>
                                                            </div>
                                                            <div
                                                                style="border: 1px solid rgb(0, 0, 0); width: 140px; height: 150px; text-align: center; display: inline-block;">
                                                                <span
                                                                    style="padding-top: 65px; display: inline-block;">बा</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <table width="100%" cellpadding="2" class="table-hide"
                                            style="font-size: 15px; margin-top: 15px; border-top: 2px solid rgb(0, 0, 0);">
                                            <tr>
                                                <td width="70%" style="padding-top: 10px;">
                                                    <p>नयाँ कायम गरिएको ग्राहक नम्बर:-</p>
                                                    <p>किसिम:-</p>
                                                </td>
                                                <td>
                                                    <p>मि.रि./मि.रि.सु.भा.का सहि:-</p>
                                                    <p>नाम:-</p>
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
    </div>
@endsection
