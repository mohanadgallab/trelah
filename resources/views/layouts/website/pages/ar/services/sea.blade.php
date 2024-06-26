@extends('layouts.website.ar.master')
@section('meta-tag')
    <title>تريلا لخدمات الشحن البحري من الإمارات
    </title>
    <meta content="وانئ الامارات الشاملة: لدينا شراكات قوية مع خطوط الشحن البحري الرئيسية في الإمارات للشحن البحري، بما في ذلك ميناء جبل علي للشحن البحري، وميناء خورفكان للشحن البحري، وميناء زايد للشحن البحري، وغيرها. تغطية الشاملة للموانئ تضمن وصول شحنتك بسرعة وكفاءة إلى وجهتها. بنية تحتية متطورة: تتميز موانئ الامارات للشحن البحري بمرافق متقدمة، بما في ذلك مناطق تخزين حديثة، ومعدات فعالة للتحميل والتفريغ، وإجراءات أمنية مشددة. نحرص على سلامة وأمان بضائعك طوال عملية الشحن الشحن البحري. التعامل مع شحنات متنوعة في مجال الشحن البحري من الامارات: سواء كنت بحاجة لنقل حاويات عن طريق الشحن البحري، أو سلع جماعية، أو سلع قابلة للتلف، أو بضائع عامة، لدينا الخبرة والموارد للتعامل مع مجموعة واسعة من الشحنات في مجال الشحن البحري. فرقنا المتخصصة مدربة تدريباً جيداً في التعامل مع أنواع مختلفة من الشحنات في مجال الشحن البحري، مما يضمن التعامل والرعاية الملائمة. معالجة جمركية فعالة في الشحن البحري. ندرك أهمية إتمام جمرك سلسة لتسليم في الوقت المحدد. خبراؤنا المتمرسون في الجمارك ملمون جيدًا باللوائح والإجراءات الجمركية في مجال الشحن البحري من الامارات على مختلف البلدان." name="description">
    <meta content=" وانئ الامارات الشاملة: لدينا شراكات قوية مع خطوط الشحن البحري الرئيسية في الإمارات للشحن البحري، بما في ذلك ميناء جبل علي للشحن البحري، وميناء خورفكان للشحن البحري، وميناء زايد للشحن البحري، وغيرها. تغطية الشاملة للموانئ تضمن وصول شحنتك بسرعة وكفاءة إلى وجهتها. بنية تحتية متطورة: تتميز موانئ الامارات للشحن البحري بمرافق متقدمة، بما في ذلك مناطق تخزين حديثة، ومعدات فعالة للتحميل والتفريغ، وإجراءات أمنية مشددة. نحرص على سلامة وأمان بضائعك طوال عملية الشحن الشحن البحري. التعامل مع شحنات متنوعة في مجال الشحن البحري من الامارات: سواء كنت بحاجة لنقل حاويات عن طريق الشحن البحري، أو سلع جماعية، أو سلع قابلة للتلف، أو بضائع عامة، لدينا الخبرة والموارد للتعامل مع مجموعة واسعة من الشحنات في مجال الشحن البحري. فرقنا المتخصصة مدربة تدريباً جيداً في التعامل مع أنواع مختلفة من الشحنات في مجال الشحن البحري، مما يضمن التعامل والرعاية الملائمة. معالجة جمركية فعالة في الشحن البحري. ندرك أهمية إتمام جمرك سلسة لتسليم في الوقت المحدد. خبراؤنا المتمرسون في الجمارك ملمون جيدًا باللوائح والإجراءات الجمركية في مجال الشحن البحري من الامارات على مختلف البلدان."name="keywords">
    <!-----------Open Graph------------->
    <meta property="og:title" content="تريلا لخدمات الشحن البحري من الإمارات
    " />
    <meta property="og:description" content="وانئ الامارات الشاملة: لدينا شراكات قوية مع خطوط الشحن البحري الرئيسية في الإمارات للشحن البحري، بما في ذلك ميناء جبل علي للشحن البحري، وميناء خورفكان للشحن البحري، وميناء زايد للشحن البحري، وغيرها. تغطية الشاملة للموانئ تضمن وصول شحنتك بسرعة وكفاءة إلى وجهتها. بنية تحتية متطورة: تتميز موانئ الامارات للشحن البحري بمرافق متقدمة، بما في ذلك مناطق تخزين حديثة، ومعدات فعالة للتحميل والتفريغ، وإجراءات أمنية مشددة. نحرص على سلامة وأمان بضائعك طوال عملية الشحن الشحن البحري. التعامل مع شحنات متنوعة في مجال الشحن البحري من الامارات: سواء كنت بحاجة لنقل حاويات عن طريق الشحن البحري، أو سلع جماعية، أو سلع قابلة للتلف، أو بضائع عامة، لدينا الخبرة والموارد للتعامل مع مجموعة واسعة من الشحنات في مجال الشحن البحري. فرقنا المتخصصة مدربة تدريباً جيداً في التعامل مع أنواع مختلفة من الشحنات في مجال الشحن البحري، مما يضمن التعامل والرعاية الملائمة. معالجة جمركية فعالة في الشحن البحري. ندرك أهمية إتمام جمرك سلسة لتسليم في الوقت المحدد. خبراؤنا المتمرسون في الجمارك ملمون جيدًا باللوائح والإجراءات الجمركية في مجال الشحن البحري من الامارات على مختلف البلدان." />
    <meta property="og:image" content="{{ asset('services/sea.png') }}" />
    <!-- Favicons -->
    <link href="https://trelah.com/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
@endsection
@section('body')
    <!-- ======= Header ======= -->

    @include('layouts.website.sections.ar.header')
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h4> الخدمة</h4>
                    <ol>
                        <li><a href="/">الرئيسية</a></li>
                        <li>الشحن البحري</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide w-90">
                                    <img src="{{ asset('services/sea.png') }}" alt="" class="img-fluid"
                                        style="width: 100%; height:500px">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="portfolio-info">
                            <h1>الشحن البحري</h1>
                        </div>
                        <div class="portfolio-description">
                            <h2>تريلا لخدمات الشحن البحري من الإمارات</h2>
                            <p>
                                شريكك الموثوق في اللوجستيات
                                هل تبحث عن خدمة شحن بحري من الامارات موثوقة وفعالة من الإمارات العربية المتحدة ؟
                                لا تبحث بعيدًا!
                                نحن اختيارك الأول لجميع احتياجاتك في الشحن البحري من الامارات و اللوجستيات البحرية. بفضل
                                خبرتنا الواسعة في مجال الشحن البحري من الامارات وشبكة من الموانئ المتميزة في خدمات الشحن
                                البحري من الامارات، نوفر حلول شحن بحري من الامارات سلسة وخالية من المتاعب إلى وجهات في جميع
                                أنحاء العالم

                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 document">
                        <h3>لماذا تختارتريلا خدمات الشحن البحري من الامارات لدينا؟
                        </h3>
                        <p>
                            تغطية الموانئ الامارات الشاملة: لدينا شراكات قوية مع خطوط الشحن البحري الرئيسية في الإمارات
                            للشحن البحري، بما في ذلك ميناء جبل علي للشحن البحري، وميناء خورفكان للشحن البحري، وميناء زايد
                            للشحن البحري، وغيرها. تغطية الشاملة للموانئ تضمن وصول شحنتك بسرعة وكفاءة إلى وجهتها.
                            بنية تحتية متطورة: تتميز موانئ الامارات للشحن البحري بمرافق متقدمة، بما في ذلك مناطق تخزين
                            حديثة، ومعدات فعالة للتحميل والتفريغ، وإجراءات أمنية مشددة. نحرص على سلامة وأمان بضائعك طوال
                            عملية الشحن الشحن البحري.
                            التعامل مع شحنات متنوعة في مجال الشحن البحري من الامارات: سواء كنت بحاجة لنقل حاويات عن طريق
                            الشحن البحري، أو سلع جماعية، أو سلع قابلة للتلف، أو بضائع عامة، لدينا الخبرة والموارد للتعامل مع
                            مجموعة واسعة من الشحنات في مجال الشحن البحري. فرقنا المتخصصة مدربة تدريباً جيداً في التعامل مع
                            أنواع مختلفة من الشحنات في مجال الشحن البحري، مما يضمن التعامل والرعاية الملائمة.
                            معالجة جمركية فعالة في الشحن البحري.
                            ندرك أهمية إتمام جمرك سلسة لتسليم في الوقت المحدد. خبراؤنا المتمرسون في الجمارك ملمون جيدًا
                            باللوائح والإجراءات الجمركية في مجال الشحن البحري من الامارات على مختلف البلدان. سنتولى جميع
                            الوثائق اللازمة ونضمن إتمام عملية الجمارك بسهولة وبدون أي متاعب.
                            أسعار تنافسية: نقدم أسعارًا تنافسية مصممة لتلبية متطلبات الشحن الخاصة بك. حلولنا الفعالة من حيث
                            التكلفة تساعدك على تحسين ميزانيتك اللوجستية دون التنازل عن جودة الخدمة.
                            تتبع موثوق ودعم العملاء: ابق على اطلاع على حالة شحنتك مع نظام التتبع للشحن البحري في الوقت
                            الحقيقي. فريق دعم العملاء المخصص لدينا متاح على مدار الساعة للرد على أي استفسارات أو مخاوف قد
                            تواجهك طوال رحلة الشحن البحري.
                            استمتع بالفرق مع خدماتنا للشحن البحري!
                            عندما يتعلق الأمر بالشحن البحري من الإمارات، تريلا الموثوقة. بفضل خبرتنا وشبكتنا الواسعة
                            والتزامنا بالتفوق في مجال الشحن البحري من الامارات، نضمن أن تصل شحنتك إلى وجهتها بأمان وفي الوقت
                            المحدد. ركز على أعمالك الأساسية واترك اللوجستيات لنا.

                        </p>
                        <h3>مواني الامارات للشحن البحري</h3>
                        <p>
                            تعتبر الإمارات العربية المتحدة واحدة من أهم الوجهات اللوجستية في الشرق الأوسط، حيث تتمتع بموقع
                            استراتيجي على الخليج العربي. تعتبر الشحن البحري من الإمارات واحدة من أبرز وسائل النقل التي
                            تستخدمها الشركات والتجار حول العالم لنقل البضائع إلى ومن الإمارات. تتوفر في الإمارات العديد من
                            الموانئ البحرية المهمة، التي تغطي مختلف المناطق في الدولة وتلبي احتياجات الشحن البحري.
                        </p>
                        <h3>ميناء جبل علي الشحن البحري من الامارات (ميناء راشد)
                        </h3>
                        <p>
                            يعد ميناء جبل علي في دبي واحدًا من أكبر الموانئ في المنطقة العاملة في مجال الشحن البحري، وهو يقع
                            على الساحل الغربي لدبي. يتميز هذا الميناء بالبنية التحتية المتطورة والمرافق الحديثة، ويعتبر
                            مركزًا رئيسيًا للشحن البحري في الإمارات. يتوفر في الميناء مناطق للتخزين والتفريغ والشحن
                            والتفتيش، ويتم من خلاله نقل مجموعة واسعة من البضائع بما في ذلك الحاويات والسلع السائبة
                            والمشروبات والمواد الغذائية والبضائع العامة.
                        </p>
                        <h3>
                            ميناء خورفكان الشحن البحري من الامارات
                        </h3>
                        <p>
                            يعد ميناء خورفكان في إمارة الفجيرة من الموانئ الرئيسية في الدولة. يقع الميناء على الساحل الشرقي
                            للإمارات ويتميز بموقعه الاستراتيجي القريب من الممر المائي الحيوي لمضيق هرمز. يعتبر ميناء خورفكان
                            مركزًا تجاريًا مهمًا للشحن البحري، حيث يتم من خلاله نقل النفط والبضائع العامة والحاويات.
                        </p>
                        <h3>ميناء زايد الشحن البحري من الامارات</h3>
                        <p>
                            يقع ميناء زايد في العاصمة أبوظبي، وهو يعد واحدًا من الموانئ الرئيسية في الإمارات. يتمتع الميناء
                            ببنية تحتية حديثة ومرافق متطورة، ويشمل مناطق للتخزين والتفريغ والتفتيش. يتم نقل مجموعة واسعة من
                            البضائع عبر ميناء زايد، بما في ذلك الحاويات والمواد البترولية والمنتجات البتروكيماوية والبضائع
                            العامة.
                        </p>
                        <h3>
                            ميناء خورفكان الشحن البحري من الامارات
                        </h3>
                        <p>
                            يقع ميناء خور الفكان الشحن البحري من الامارات في إمارة رأس الخيمة ويعتبر الميناء الرئيسي
                            للإمارة. يتميز الميناء بموقعه الاستراتيجي على الخليج العربي والبنية التحتية المتطورة. يتم من
                            خلاله نقل مجموعة متنوعة من البضائع بما في ذلك الحاويات والمواد الكيميائية والسلع العامة.
                            هذه بعض الموانئ البحرية الرئيسية في الإمارات العربية المتحدة. يتم استخدام هذه الموانئ بشكل واسع
                            للشحن البحري وتعتبر جزءًا أساسيًا من البنية التحتية اللوجستية في الدولة. توفر هذه الموانئ البنية
                            التحتية اللازمة والمرافق المتطورة للشحن البحري الفعال والآمن وتعزز التجارة الدولية للإمارات
                            العربية المتحدة.مصطلحات تحتاجها في الشحن البحري من الامارات والى كل العالمتسليم المصنع EX WORKS
                            الشحن البحري
                            يتحمل المشتري جميع التكاليف والمخاطر التي ينطوي عليها الشحن البحري للبضائع من مقر البائع إلى
                            الوجهة المطلوبة. ويتمثل التزام البائع في جعل البضاعة متاحة في (المصنع والمستودع). يمثل هذا
                            المصطلح الحد الأدنى من التزام البائع. ويمكن استخدام هذا المصطلح عبر جميع وسائط الشحن ( الشحن
                            البحري. الشحن الجوي. الشحن البري ).

                        </p>
                        <h5>
                            النقل الحر FCA الشحن البحري
                        </h5>
                        <p>
                            ويتمثل التزام البائع في تسليم البضائع، والتخليص عليها للتصدير، وتسليمها للناقل الذي يسميه
                            المشتري في المكان أو النقطة المحددة. وإذا لم يشر المشتري إلى نقطة محددة، يجوز للبائع أن يختار
                            نقطة تسليم داخل المكان أو النطاق الذي يحدد فيه الناقل أن يأخذ البضاعة. عندما يطلب من البائع
                            التعاقد مع الناقل قد تنصرف المخاطر والنفقات على المشتري. يمكن استخدام هذا المصطلح عبر جميع وسائط
                            النقل .
                        </p>
                        <h5>
                            النقل للمكان المسمى للوصول CPT الشحن البحري
                        </h5>
                        <p>
                            وفيه يسدد البائع أجرة الشحن لنقل البضائع إلى الوجهة المحددة. و يتم نقل مخاطر فقدان أو تلف
                            البضائع التي تحدث بعد التسليم إلى الناقل من البائع إلى المشتري. ويتطلب هذا المصطلح من البائع أن
                            يقوم بالتخليص على البضائع للتصدير ويمكن استخدامه في جميع وسائط الشحن ( الشحن البحري. الشحن
                            البري. الشحن الجوي ).
                        </p>
                        <h5>النقل والتأمين للمكان المسمى للوصول CIP الشحن البحري</h5>
                        <p>البائع لديه نفس الالتزامات كما هو الحال في CPT ولكن باضافة مسؤولية التأمين ضد فقدان أو تلف
                            البضائع أثناء الشحن البحري. يلتزم البائع بالتخليص على البضائع للتصدير و التأمين على الحد الأدنى
                            من التغطية. ويمكن استخدامه في جميع وسائط الشحن. ( الشحن البحري. الشحن البري. الشحن الجوي )</p>
                        <h5>تسليم البضاعة في المحطة DAT الشحن البحري</h5>
                        <p>وفيه يعتبر البائع قد نفذ التزامه بمجرد تفريغ البضائع من وسائل النقل ، ووضعها تحت تصرف المشتري في
                            محطة الوصول . "محطة الوصول " تتضمن رصيف الميناء ، مستودع، ساحة الحاويات أو الطريق، السكك
                            الحديدية أو المطار الجوى. وينبغي للطرفين أن يوافقا على المحطة، وإذا أمكن، نقطة داخل المحطة عندئذ
                            تنتقل المخاطر من البائع إلى مشتري البضاعة. إذا كان المقصود من البائع أن يتحمل جميع التكاليف
                            والمسؤوليات من المحطة إلى نقطة أخرى، قد ينطبق مصطلح DAP أو DDP . يمكن استخدامه لجميع وسائط الشحن
                            ( الشحن البحري. الشحن الجوي. الشحن البري )</p>
                        <h5>مسؤوليات البائع :-</h5>
                        <ul>
                            <li>البائع هو المسؤول عن التكاليف والمخاطر لجلب البضاعة إلى النقطة المحددة في العقد .</li>
                            <li>يجب على البائع التأكد من أن عقد النقل يتطابق مع عقد البيع
                            </li>
                            <li> البائع هو المسؤول عن إجراءات التخليص لغرض التصدي</li>
                            <li>المستورد هو المسؤول عن التخليص على البضائع فى مكان الوصول، واتخاذ جميع إلاجراءات الجمركية،
                                وسداد الرسوم الجمركية</li>
                            <li>إذا كان الطرفان يعتزمان أن يتحمل البائع المخاطر والتكاليف المترتبة على نقل البضائع من محطة
                                إلى مكان آخر فى هذه الحالة قد يتم تطبيق مصطلح DAP
                            </li>
                        </ul>
                        <h5>التسليم في المكان DAP الشحن البحري</h5>
                        <p>وفيه يعتبر البائع قد نفذ التزامه عندما يتم وضع البضائع تحت تصرف المشتري عند وصول وسائل النقل
                            جاهزة للتفريغ في المكان المحدد للوجهة. ويجب على الأطراف أن تحدد بأكبر قدر ممكن من الوضوح نقطة
                            الوصول داخل المكان المقصود والمتفق عليه، لأن المخاطر تنتقل عند هذه النقطة من البائع إلى المشتري.
                            وإذا كان البائع مسؤولا عن التخليص على البضائع ودفع الرسوم وما إلى ذلك، ينبغي استخدام مصطلح DDP.
                            يمكن استخدامه لجميع وسائط النقل .</p>
                        <h5>مسؤوليات البائع :-</h5>
                        <ul>
                            <li> يتحمل البائع المسؤولية والمخاطر لتسليم البضاعة إلى المكان المسمى</li>
                            <li>يجب على البائع التأكد من أن عقود النقل تتطابق مع عقد البيع</li>
                            <li> البائع يلتزم بالتخليص على البضائع للتصدير</li>
                            <li>إذا كان البائع يتحمل تكاليف التفريغ في المكان المقصود، (ما لم يكن قد اتفق عليه سابقا ) لا
                                يحق له استرداد أي من هذه التكاليف</li>
                            <li> المستورد هو المسؤول عن التخليص الجمركي، ودفع أي رسوم جمركية</li>
                        </ul>
                        <h3>تسليم البضاعة خالصة الرسوم الجمركية DDP الشحن البحري</h3>
                        <p>البائع هو المسؤول عن تسليم البضاعة فى المكان المسمى في بلد الوصول . بما في ذلك جميع التكاليف
                            والمخاطر في نقل البضائع إلى وجهة الاستيراد كذلك الرسوم والضرائب والجمارك. ويمكن استخدام هذا
                            المصطلح بغض النظر عن وسيلة النقل.</p>
                        <h5>
                            تسليم البضاعة بجانب السفينة بميناء الشحن البحري FAS

                        </h5>
                        <p>
                            يلتزم البائع بوضع البضاعة بجانب السفينة في ميناء الشحن المحدد. كذلك التخليص على البضاعة للتصدير.
                            يعتبر هذا المصطلح مناسب فقط للنقل البحري و ليس للنقل المتعدد الوسائط وهو عادة يستخدم لبضائع
                            المثقلات و البضائع السائبة وغير مناسب فى النقل بالحاويات .
                        </p>
                        <h3>تسليم البضاعة على ظهر السفينة بميناء الشحن البحري FOB</h3>
                        <p>يلتزم البائع بتسليم البضائع على ظهر السفينة المعينة من قبل المشتري. وتنقسم التكلفة والمخاطر عندما
                            تكون البضاعة موجودة فعليا على ظهر السفينة (وهذه القاعدة الجديدة ). يجب على البائع التخليص على
                            البضائع للتصدير.. يجب على المشتري اخطار البائع بتفاصيل السفينة والميناء المحدد لشحن البضائع .
                        </p>
                        <h5>تكلفة البضاعة و الشحن البحري CFR</h5>
                        <p>يلتزم البائع أن يدفع تكاليف الشحن المطلوبة في نقل البضاعة إلى ميناء الوصول المذكور. حيث يتم نقل
                            مخاطر الخسارة أو الضرر من البائع إلى المشتري عند نقل البضاعة حتى السفينة في ميناء الشحن. كذلك
                            يلتزم البائع بالتخليص على البضائع لتصدير.</p>
                        <h3>
                            مقاسات حاويات الشحن البحري وأنواع وأحجام حاويات نقل البضائع
                        </h3>
                        <p>
                            تتعدد مقاسات الحاويات المستخدمة في نقل وشحن البضائع، وبدون تلك المقاسات لم يكن بالإمكان نقل
                            الأنواع والأحجام المختلفة من البضائع. وبشكل عام، قد كان اختراع حاويات نقل البضائع واحد من أفضل
                            وأذكى الاختراعات، والذي وفر الكثير من الوقت والجهد في نقل البضائع مختلفة الأحجام والأشكال من
                            مكان إلى آخر. وقد يكون من الصعب تخيل مدى صعوبة نقل البضائع عبر العالم قبل اختراع حاويات الشحن
                            بمقاساتها المختلفة، وحتى الآن تزال الابتكارات قائمة لدفع صناعة النقل والخدمات اللوجستية إلى
                            الأمام وتسهيل التجارة الدولية. وفي هذه المقالة سوف نعرض لكم كافة التفاصيل حول مقاسات الحاويات،
                            وكذلك نتحدث حول أنواع وأحجام حاويات نقل البضائع المختلفة
                            أنواع حاويات الشحن البحري
                            كما أشرنا، هناك مقاسات حاويات وأنواع متعددة، ولكل نوع وظيفته واستخدامه وفقاً لمقاسه وطبيعة
                            البضائع التي سيتم نقله فيها. وهناك الكثير من مقاسات الحاويات والتي سنتناولها بالتفصيل، كما يختلف
                            أنواع الحاويات ويتوقف كل نوع على عدد من العوامل حيث :-
                            حجم ووزن الحمولة
                            طبيعة البضائع المنقولة (صلبة أم سائلة).
                            درجة التوحيد القياسي للبضائع
                            نوع الرافعة والناشرة المطلوبة لتلك البضائع.
                            لذا فنوع الحاوية نفسها يتوقف على تلك العوامل، فيما يلي أشهر أنواع الحاويات المستخدمة وكافة
                            التفاصيل المتعلقة به
                            :-

                        </p>
                        <h5>1. حاوية شحن بحري التخزين الجافة :</h5>
                        <p>هي أكثر الحاويات شيوعًا المستخدمة في شحن ونقل البضائع، وتأتي بأطوال مقاسات الحاويات الخاصة به تكون 20 و 40 و 45 قدمًا، وهي مصممة لنقل البضائع الجافة. لا تسمح هذه الحاويات بالتحكم في درجة الحرارة، لذا فهي غير مناسبة لنقل المواد الغذائية أو المواد الكيميائية التي تتطلب التبريد.</p>
                        <h5>
                            2. حاوية الرف المسطح الشحن البحري :
                        </h5>
                        <p>
                            لا تحتوي حاوية الرف المسطحة على سطح وجانبين فقط، بل يوجد مساحة للأحمال الثقيلة لتثبيتها على الرف من أعلى أو من الجانب. يبلغ مقاسات الحاويات الخاصة بها إما 20 أو 40 قدمًا، وهي مصنوعة من الفولاذ للقوة والمتانة، كما أن بعض حاويات الرف المسطحة قابلة للطي، وبعضها يأتي بجدران إضافية يمكن ربطها بالإطار.
                        </p>
                        <h5>
                            3. الحاوية المفتوحة من الأعلى الشحن البحري
                        </h5>
                        <p>
                            هذا النوع من الحاويات هو في الأساس نوع التخزين الجاف ولكن بدون قمة، وهذا يسمح بتحميل البضائع السائبة بسهولة. كما يوجد هيكل سقف من البلاستيك يمكن تثبيته بالحبال للحاوية، والذي يوفر الحماية من المطر.
                        </p>
                        <h5>
                            4. الحاوية المفتوحة من الجانبى الشحن البحري
                        </h5>
                        <p>
                            ويكون لهذا النوع جانب طويل يمكن فتحه بالكامل، وهو مفيد للبضائع واسعة النطاق التي قد يكون من الصعب الوصول إليها عبر نهاية حاوية نفق أو حاوية تخزين جافة.
                        </p>
                        <h5>
                            5. حاويات الشحن البحري ISO مبردة
                        </h5>
                        <p>
                            هي عبارة عن حاوية متعددة الوسائط تستخدم في نقل البضائع متعدد الوسائط والتي يتم تبريدها لنقل البضائع الحساسة لدرجة الحرارة. في حين أن المبرد سيكون له وحدة تبريد متكاملة، إلا أنه يعتمد على الطاقة الخارجية، من نقاط الطاقة الكهربائية في موقع بري، أو سفينة أو على الرصيف.كما أنه عند نقلها عبر الطريق على مقطورة أو فوق عربة السكك الحديدية، يمكن تشغيلها من مولدات تعمل بالديزل التي تعلق على الحاوية أثناء الرحلات البرية. يمكن للحاويات المبردة التحكم في درجات الحرارة التي تتراوح من -65 درجة مئوية إلى 40 درجة مئوية.
                        </p>
                        <h5>
                            6. خزانات الشحن البحري ISO
                        </h5>
                        <p>
                            هي أحد أشكال الحاويات والتي تم تصميمها بشكل خاص لحمل السوائل، وعادة ما يتم تصنيعها من مواد مضادة للتآكل بسبب المواد الكيميائية التي تستخدم في حملها. ويمكن أيضًا استخدام الخزانات لتخزين البضائع الجافة مثل السكر، ولكنها غالبًا ما تستخدم حصريًا للسوائل.
                        </p>
                        <h5>
                            7. حاويات شحن بحري نصف ارتفاع
                        </h5>
                        <p>
                            هذه الحاويات مصنوعة في الغالب من الفولاذ، وهي تأخذ نصف ارتفاع الحاويات كاملة الحجم لهذا سُميت بذلك الاسم. ويتم استخدام تلك الحاويات بشكل خاص للتعامل مع البضائع مثل الفحم والأحجار وما إلى ذلك، والتي تحتاج إلى سهولة التحميل والتفريغ.
                        </p>
                        <h5>
                            8. حاويات الشحن البحري الأغراض الخاصة
                        </h5>
                        <p>
                            يمكن صنع الحاويات ذات الأغراض الخاصة بأي شكل أو أبعاد تقريبًا، ويتم استخدامها لنقل العناصر التي تتطلب حاوية مخصصة لها. تتجنب معظم شركات الشحن استخدام حاويات الأغراض الخاصة قدر الإمكان لأنها مكلفة في الإنشاء والنقل، ولكنها في بعض الأحيان تكون ضرورية لأحمال معينة.
                        </p>
                        <h3>
                            مقاسات حاويات الشحن البحري
                        </h3>
                        <p>
                            بعد أن تعرّفنا على أنواع الحاويات المختلفة، سننتقل الآن بالحديث حول مقاسات الحاويات حيث تتعدد تلك المقاسات وفقاً للاحتياجات وطبيعة البضائع المراد نقلها وأيضاً كميتها. وفيما يلي أهم مقاسات الحاويات المختلفة التي تحتاج أن تكون على معرفة بها، حتى تتمكن من تحديد ما يناسبك منها إذا كنت في حيرة من أمرك بشأن مقاسات الحاويات المختلفة:-
                        </p>
                        <h6>1. حاوية شحن بحري 20 قدم </h6>
                        <p>
                            هي الحاوية الأكثر شيوعًا والأكثر استخدامًا من ضمن مقاسات الحاويات المختلفة، كما أنها أصغر مجموعة من الحاويات القياسية وغالبًا ما تستخدم لنقل الآلات الثقيلة والمواد الخام مثل خام الحديد والصخور.
                        </p>
                        <h6>
                            2. حاوية شحن بحري 40 قدم
                        </h6>
                        <p>
                            يمكن للحاوية 40 قدمًا أن تحزم ضعف الحمولة لصندوق 20 قدمًا، ويتم استخدامها في نقل كميات أكبر من السلع الاستهلاكية الأخف وزناً، مثل: القطن والأثاث والملابس والإلكترونيات والمركبات…ولاحظ أنه يمكن فرض غرامة على مستخدمي الحاويات إذا كانت حاوياتهم زائدة، وهذا هو سبب استخدام الحاويات الأكبر حجمًا بشكل عام لنقل المزيد من البضائع.
                        </p>
                        <h6>
                            3. حاوية شحن بحري 40 قدم المكعبة
                        </h6>
                        <p>
                            هي أكبر مقاسات الحاويات المتاحة للشحن البحري حتى الآن، والتي والتي يبلغ ارتفاعها 40 قدمًا، هي نسخة أطول من الحاوية 40 قدمًا. كما أنها من ضمن مقاسات الحاويات المختلفة مناسبة أكثر لشحن البضائع ذات الارتفاع الزائد، يتم استخدامها أيضًا لنقل كميات كبيرة من السلع الاستهلاكية الأخف مثل الأثاث والملابس.
                        </p>
                        <h3>فوائد الشحن البحري</h3>
                        <ul>
                            <li>زيادة السلامة، فقد بدأت البضائع بالسفر بإحكام وآمن في حاويات الشحن البحري.</li>
                            <li>تقليل حوادث السرقة والأضرار في جميع مراحل النقل البحري.</li>
                            <li>تقليل العمالة اليدوية، حيث قللت حاويات الشحن البحري من العمل المطلوب للتحميل والتفريغ.</li>
                            <li>إحلال الرافعات محل القوى العاملة</li>
                            <li>تغيير كبير في طابع مدن الموانئ البحرية في جميع أنحاء العالم.</li>
                            <li>تطوير الموانئ لاستيعاب السفن الكبيرة ومنشآت التحميل في مجال الشحن البحري</li>
                            <li>زيادة الكفاءة من خلال الابتكار في عملية الشحن البحري وتقليل نفقات التجارة الدولية وزيادة سرعتها.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Portfolio Details Section -->




    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.website.sections.ar.footer')

    <!-- End Footer -->
@endsection
