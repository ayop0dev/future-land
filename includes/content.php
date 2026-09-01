<?php

function e($value): string
{
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function fl_content(string $lang): array
{
  $content = [
    'en' => [
      'meta' => [
        'home' => ['Future Land | Agricultural & Commercial Opportunities', 'Land and spaces ready for real business across Egypt.'],
        'about' => ['About Future Land', 'A focused Egyptian group creating practical agricultural and commercial opportunities.'],
        'agricultural' => ['Agricultural Projects | Future Land', 'Agricultural opportunities in Wadi El Natrun and El Dabaa Road, Egypt.'],
        'fuel' => ['Wataneya Fuel Station | Future Land', 'Eight commercial units available for lease at Wataneya Fuel Station in Sadat City.'],
        'contact' => ['Contact Future Land', 'Enquire about Future Land agricultural and commercial opportunities.'],
      ],
      'shared' => [
        'skip' => 'Skip to content',
        'brandHome' => 'Future Land home',
        'primaryNav' => 'Primary navigation',
        'mobileNav' => 'Mobile navigation',
        'openMenu' => 'Open menu',
        'closeMenu' => 'Close menu',
        'language' => 'Language',
        'follow' => 'Follow us',
        'scroll' => 'Scroll to discover',
        'success' => 'Thank you. Your enquiry is ready for the Future Land team.',
        'nav' => [
          'home' => 'Home',
          'about' => 'About us',
          'projects' => 'Our projects',
          'agricultural' => 'Agricultural projects',
          'fuel' => 'Fuel station project',
          'contact' => 'Contact',
        ],
        'footer' => [
          'tagline' => 'Creating practical agricultural and commercial opportunities.',
          'explore' => 'Explore',
          'contact' => 'Contact',
          'address' => '12 546',
          'phone' => '01234567891',
          'phoneHref' => '+201234567891',
          'copyright' => '© 2026 Future Land. All rights reserved.',
          'privacy' => 'Privacy Policy',
          'terms' => 'Terms of Use',
        ],
        'buttons' => [
          'explore' => 'Explore our opportunities',
          'talk' => 'Talk to our team',
          'story' => 'Discover our story',
          'submit' => 'Submit enquiry',
          'project' => 'Enquire about this project',
          'viewProjects' => 'View our projects',
          'contact' => 'Contact us',
        ],
        'forms' => [
          'name' => ['Full Name *', 'Your name'],
          'phone' => ['Mobile Number *', '+20'],
          'email' => ['Email (Optional)', 'you@email.com'],
          'company' => ['Company or Activity (Optional)', 'Your business or activity'],
          'interest' => ['I’m Interested In *', 'Select an opportunity'],
          'message' => ['Message (Optional)', 'Tell us the area or unit size you need, and the activity you plan to run.'],
          'method' => 'Preferred Contact Method',
          'methods' => ['Phone', 'WhatsApp', 'Email'],
          'quickOptions' => ['Agricultural Projects', 'Fuel Station Project', 'Future Projects'],
          'contactOptions' => [
            'agri-wadi' => 'Agricultural Land, Wadi El Natrun',
            'agri-dabaa' => 'Agricultural Land, El Dabaa Road (before El Mohra)',
            'fuel' => 'Commercial Unit, Fuel Station',
            'other' => 'Something else',
          ],
        ],
      ],
      'home' => [
        'hero' => ['Future Land', ['Land and', 'spaces', 'ready for real', 'business'], 'An Egyptian joint stock company working in land reclamation and real estate development, creating agricultural and commercial opportunities for business owners and end users.'],
        'about' => ['About Future', 'Land', 'We identify, reclaim and shape land into practical opportunities for investors, operators and growing businesses.', 'Our perspective', 'Our Perspective', 'Future Land was established in 2017 and works across land reclamation and real estate development. Every project is planned around how the land will actually be used: its soil, its water, its access, and the activity it needs to support.', 'Agricultural development'],
        'projects' => ['Our projects', 'Explore today’s opportunities and what comes next.', 'Agricultural and commercial opportunities designed around practical use, infrastructure, and long-term value.', 'Agricultural opportunity', 'Agricultural Projects', 'Agricultural Project', 'Commercial opportunity', 'Fuel Station Project', 'What’s next', "Future\nOpportunities", 'Future Projects'],
        'features' => ['Why Future Land', 'Project features designed around real operational needs.', 'From flexible land and commercial spaces to the facilities that keep each project moving, every detail is planned around day-to-day use.', [
          ['01', 'Flexible Land and Spaces', 'Land divisions from 10 feddans and commercial units of different sizes, so each tenant takes only what the activity requires.', 'Flexible agricultural land divisions', 'home-agriculture.png'],
          ['02', 'Complete Infrastructure', 'Drinking water, electricity, drainage and irrigation are available across our projects, not promised for later.', 'Complete fuel station infrastructure', 'home-feature-1.png'],
          ['03', 'Delivered On Time', 'We commit to the agreed timeline and quality standard, using modern development and construction practices.', 'Completed landscaped development', 'home-feature-2.png'],
          ['04', 'Strategic Locations', 'Sites positioned on or near main routes, chosen for access, surrounding demand, and room to expand.', 'Strategic project planning', 'home-feature-3.png'],
        ]],
        'masterplan' => ['Development masterplan', 'Planning every project around land, access, and operation.', 'Each Future Land project is planned according to its specific use, location, and operational requirements. The masterplan brings together land allocation, access points, internal movement, infrastructure, and service areas within one clear development framework.', [['Integrated Project Planning', 'Agricultural and commercial areas are organized to support practical use, clear circulation, and efficient day-to-day operations.'], ['Designed for Future Growth', 'Infrastructure, service requirements, and potential expansion are considered from the first stage of planning.']], [['2', 'Project', 'Locations'], ['10', 'Feddans', 'Minimum lease'], ['8', 'Commercial', 'Units']]],
        'steps' => ['How it works', 'A clear path from interest to the next step.', 'A short, guided process that keeps the opportunity clear from the first enquiry through to the appropriate next action.', [['01', 'Explore the opportunities', 'Review the available agricultural and commercial opportunities and identify the option that fits your needs.'], ['02', 'Submit your enquiry', 'Share your contact details, area of interest, and any requirements that help our team prepare.'], ['03', 'Speak with our team', 'Receive the available project information and discuss the opportunity directly with Future Land.'], ['04', 'Arrange the next step', 'Move to a site visit, a detailed discussion, or leasing terms according to the selected opportunity.']]],
        'enquiry' => ['Quick enquiry', 'Interested in one of our opportunities?', 'Share your details and our team will contact you to discuss the available agricultural and commercial opportunities.', 'Our team will review your enquiry and contact you within working hours (Sun to Thu, 9:00 to 17:00).'],
      ],
      'about' => [
        'hero' => ['About Future Land', ['Building investment opportunities', 'with long-term value.'], 'An Egyptian joint stock company working in land reclamation and real estate development, creating agricultural and commercial opportunities designed for practical use and lasting value.'],
        'who' => ['Who we are', 'A focused group creating real opportunities for growth.', 'Future Land was established in 2017 as an Egyptian joint stock company specialising in land reclamation and real estate development. We work across two connected tracks: reclaiming and preparing agricultural land, and developing commercial spaces that businesses can operate from. Our clients are business owners looking for a site to run an activity, and end users looking for land and space they can put to work. Today we operate across Lower Egypt, with expansion into additional governorates under planning.'],
        'vision' => ['Vision and mission', 'A clear direction for responsible, long-term growth.', 'Two complementary commitments guide how Future Land evaluates opportunities and builds long-term value.', [['01', 'Vision', 'To build a growing portfolio of agricultural and commercial developments that create practical value across Egypt and beyond.', 'about-vision.png', 'Future Land vision'], ['02', 'Mission', 'To design and deliver land and space that businesses can operate from with confidence, on time, to standard, and with the infrastructure already in place.', 'about-mission.png', 'Future Land mission']]],
        'values' => ['How we create value', 'From opportunity assessment to the right investor.', 'A focused process that keeps every opportunity clear, practical, and prepared for confident decision-making.', [['01', 'Identify promising land', 'We assess soil, water availability, access, and surrounding demand before committing to a site.', 'about-value-1.png', 'Land assessment'], ['02', 'Reclaim and prepare', 'Reclamation, irrigation, utilities and access roads are completed so the land is usable, not theoretical.', 'about-value-2.png', 'Land reclamation'], ['03', 'Prepare the opportunity for leasing', 'We organise the site into workable divisions and set out what each tenant needs to know.', 'about-who-we-are.png', 'Leasing plan'], ['04', 'Connect with the right operator', 'We match each opportunity with the investor or operator whose activity suits the location.', 'about-value-4.png', 'Business operator']]],
        'principles' => ['Our principles', 'The standards behind every opportunity we develop.', 'We focus on clarity, practicality, long-term value, and responsible growth at every stage.', [['01', 'Commitment', 'We hold to the agreed timeline and the agreed quality standard. That commitment is the first thing we are judged on.', 'about-principle-1.png', 'Commitment'], ['02', 'Professional Standards', 'We work to high professional benchmarks and apply modern technology across development and delivery.', 'about-principle-2.png', 'Professional standards'], ['03', 'Practical Opportunities', 'Real, actionable opportunities instead of broad promises. What we publish is what is available.', 'about-principle-3.png', 'Practical opportunities'], ['04', 'Diversity of Projects', 'A varied portfolio across agricultural and commercial development, so we are not tied to a single model.', 'about-principle-4.png', 'Project diversity']]],
        'growth' => ['Explore the opportunities', 'Discover the opportunities currently available with Future Land.', 'Explore agricultural and commercial opportunities shaped for clarity, growth, and long-term value.'],
      ],
      'contact' => [
        'hero' => ['Contact us', "Let's discuss the right opportunity for you.", 'Whether you are looking at agricultural land or a commercial unit, share your details and our team will get back to you with the available information.'],
        'details' => ['Prefer to contact us directly?', 'Reach our team through the channel that works best for you.', 'Shebin El-Kom, Talaat Harb St., Menoufia', 'Sun to Thu, 9:00 AM to 5:00 PM', '01140644448'],
        'note' => 'Our team will review your enquiry and contact you during working hours (Sun to Thu, 9:00 to 17:00).',
      ],
    ],
    'ar' => [
      'meta' => [
        'home' => ['فيوتشر لاند | فرص زراعية وتجارية في مصر', 'شركة مساهمة مصرية لاستصلاح الأراضي والتطوير العقاري. أراضٍ زراعية للاستئجار من 10 أفدنة ووحدات تجارية بمدينة السادات.'],
        'about' => ['عن فيوتشر لاند | استصلاح وتطوير الأراضي منذ 2017', 'تعرّف على كيفية اختيار فيوتشر لاند للأراضي واستصلاحها وتجهيزها للاستخدام الزراعي والتجاري في مصر.'],
        'agricultural' => ['أراضٍ زراعية للاستئجار | وادي النطرون وطريق الضبعة من فيوتشر لاند', 'أراضٍ زراعية مستصلحة للاستئجار من 10 أفدنة، بمياه وكهرباء وطرق وصول جاهزة.'],
        'fuel' => ['وحدات تجارية للإيجار | بنزينة وطنية بمدينة السادات', 'ثماني وحدات تجارية من 60 م² حتى 492 م² للإيجار على طريق رئيسي، بتشغيل 24 ساعة.'],
        'contact' => ['تواصل مع فيوتشر لاند | استفسر عن الفرص المتاحة', 'أرسل استفسارك عن الأراضي الزراعية أو الوحدات التجارية. واتساب: ٠١١٤٠٦٤٤٤٤٨.'],
      ],
      'shared' => [
        'skip' => 'تخطَ إلى المحتوى',
        'brandHome' => 'الصفحة الرئيسية لفيوتشر لاند',
        'primaryNav' => 'القائمة الرئيسية',
        'mobileNav' => 'قائمة الهاتف',
        'openMenu' => 'فتح القائمة',
        'closeMenu' => 'إغلاق القائمة',
        'language' => 'اللغة',
        'follow' => 'تابعنا',
        'scroll' => 'تابع التصفح',
        'success' => 'شكراً لك. تم استلام استفسارك، وسيتواصل معك فريقنا قريباً.',
        'nav' => [
          'home' => 'الرئيسية',
          'about' => 'من نحن',
          'projects' => 'مشاريعنا',
          'agricultural' => 'المشاريع الزراعية',
          'fuel' => 'مشروع محطة الوقود',
          'contact' => 'تواصل معنا',
        ],
        'footer' => [
          'tagline' => 'فرص زراعية وتجارية مدروسة على أرض الواقع.',
          'explore' => 'استكشف',
          'contact' => 'تواصل',
          'address' => 'شبين الكوم، شارع طلعت حرب، المنوفية، مصر',
          'phone' => '٠١١٤٠٦٤٤٤٤٨',
          'phoneHref' => '+201140644448',
          'copyright' => '© 2026 فيوتشر لاند. جميع الحقوق محفوظة.',
          'privacy' => 'سياسة الخصوصية',
          'terms' => 'شروط الاستخدام',
        ],
        'buttons' => [
          'explore' => 'استعرض الفرص المتاحة',
          'talk' => 'تحدث مع فريقنا',
          'story' => 'تعرّف على قصتنا',
          'submit' => 'إرسال الاستفسار',
          'project' => 'استفسر عن المشروع',
          'viewProjects' => 'تصفّح مشاريعنا',
          'contact' => 'تواصل معنا',
        ],
        'forms' => [
          'name' => ['الاسم بالكامل *', 'اكتب اسمك'],
          'phone' => ['رقم الموبايل *', '+٢٠'],
          'email' => ['البريد الإلكتروني (اختياري)', 'you@email.com'],
          'company' => ['الشركة أو النشاط (اختياري)', 'نشاطك أو شركتك'],
          'interest' => ['مجال اهتمامي *', 'اختر الفرصة'],
          'message' => ['رسالتك (اختياري)', 'اذكر المساحة المطلوبة أو حجم الوحدة، والنشاط الذي تخطّط له.'],
          'method' => 'طريقة التواصل المفضلة',
          'methods' => ['هاتف', 'واتساب', 'بريد إلكتروني'],
          'quickOptions' => ['المشاريع الزراعية', 'مشروع محطة الوقود', 'مشاريع مستقبلية'],
          'contactOptions' => [
            'agri-wadi' => 'أرض زراعية بوادي النطرون',
            'agri-dabaa' => 'أرض زراعية بطريق الضبعة (قبل المهرة)',
            'fuel' => 'وحدة تجارية بمحطة الوقود',
            'other' => 'غير ذلك',
          ],
        ],
      ],
      'home' => [
        'hero' => ['فيوتشر لاند', ['أراضٍ ومساحات', 'جاهزة لنشاط حقيقي'], 'شركة مساهمة مصرية تعمل في استصلاح الأراضي والتطوير العقاري، وتوفّر فرصاً زراعية وتجارية لأصحاب الأعمال والمستخدمين النهائيين.'],
        'about' => ['عن فيوتشر', 'لاند', 'نختار الأرض ونستصلحها ونجهّزها لتتحوّل إلى فرصة عملية للمستثمرين والمشغّلين والأنشطة النامية.', 'رؤيتنا للعمل', 'رؤيتنا للعمل', 'تأسست فيوتشر لاند عام 2017 وتعمل في استصلاح الأراضي والتطوير العقاري. كل مشروع يُخطط وفق طبيعة استخدامه الفعلي: التربة، ومصدر المياه، وسهولة الوصول، والنشاط الذي ستحتضنه الأرض.', 'تطوير واستصلاح الأراضي'],
        'projects' => ['مشاريعنا', 'فرص متاحة اليوم، وأخرى قادمة.', 'فرص زراعية وتجارية مصمّمة حول الاستخدام العملي والمرافق والقيمة على المدى الطويل.', 'فرصة زراعية', 'المشاريع الزراعية', 'المشاريع الزراعية', 'فرصة تجارية', 'مشروع محطة الوقود', 'قريباً', "مشاريع\nمستقبلية", 'مشاريع مستقبلية'],
        'features' => ['لماذا فيوتشر لاند', 'مزايا مبنية على احتياجات التشغيل الحقيقية.', 'من مساحات الأراضي والوحدات التجارية إلى المرافق التي تُبقي كل مشروع يعمل، كل تفصيلة مخطّطة وفق الاستخدام اليومي.', [
          ['01', 'مساحات مرنة', 'تقسيمات زراعية تبدأ من 10 أفدنة، ووحدات تجارية بمساحات مختلفة، ليأخذ كل مستأجر ما يحتاجه نشاطه فعلاً.', 'تقسيمات زراعية مرنة', 'home-agriculture.png'],
          ['02', 'مرافق متكاملة', 'مياه شرب وكهرباء وصرف وري متاحة بالفعل في مشاريعنا، وليست وعداً مؤجلاً.', 'بنية تحتية متكاملة لمحطة الوقود', 'home-feature-1.png'],
          ['03', 'التزام بالتوقيت والجودة', 'نلتزم بالمواعيد المتفق عليها ومعايير الجودة، باستخدام أساليب تطوير وتنفيذ حديثة.', 'تطوير منسق ومكتمل', 'home-feature-2.png'],
          ['04', 'مواقع استراتيجية', 'مواقع على الطرق الرئيسية أو قريبة منها، مختارة لسهولة الوصول والطلب المحيط وإمكانية التوسع.', 'تخطيط استراتيجي للمشاريع', 'home-feature-3.png'],
        ]],
        'masterplan' => ['المخطط العام للتطوير', 'تخطيط يبدأ من الأرض والوصول والتشغيل.', 'يُخطط كل مشروع من مشاريع فيوتشر لاند وفق استخدامه وموقعه ومتطلبات تشغيله. ويجمع المخطط العام بين توزيع الأرض، ونقاط الدخول، والحركة الداخلية، والمرافق، ومناطق الخدمات، ضمن إطار تطوير واحد وواضح.', [['تخطيط متكامل', 'تُنظّم المساحات الزراعية والتجارية بما يدعم الاستخدام العملي ووضوح الحركة وكفاءة التشغيل اليومي.'], ['مصمّم لاستيعاب التوسع', 'تُؤخذ المرافق والخدمات وإمكانية التوسع في الحسبان منذ المرحلة الأولى من التخطيط.']], [['2', 'موقع', 'للمشاريع'], ['10', 'أفدنة', 'حد أدنى للاستئجار'], ['8', 'وحدات', 'تجارية']]],
        'steps' => ['كيف نعمل', 'خطوات واضحة من الاهتمام إلى الخطوة التالية.', 'مسار قصير ومنظّم يبقي الفرصة واضحة من أول استفسار وحتى الخطوة المناسبة التالية.', [['01', 'استعرض الفرص', 'اطّلع على الفرص الزراعية والتجارية المتاحة وحدّد الخيار الأنسب لاحتياجك.'], ['02', 'أرسل استفسارك', 'شارك بياناتك ومجال اهتمامك وأي متطلبات تساعد فريقنا على التجهيز.'], ['03', 'تحدّث مع فريقنا', 'استلم معلومات المشروع المتاحة وناقش الفرصة مباشرة مع فيوتشر لاند.'], ['04', 'حدّد الخطوة التالية', 'انتقل إلى زيارة الموقع أو مناقشة تفصيلية أو شروط الاستئجار حسب الفرصة المختارة.']]],
        'enquiry' => ['استفسار سريع', 'مهتم بإحدى الفرص المتاحة؟', 'شاركنا بياناتك وسيتواصل معك فريقنا لمناقشة الفرص الزراعية والتجارية المتاحة.', 'يراجع فريقنا استفسارك ويتواصل معك خلال ساعات العمل (الأحد إلى الخميس، ٩:٠٠ حتى ١٧:٠٠).'],
      ],
      'about' => [
        'hero' => ['عن فيوتشر لاند', ['نبني فرصاً استثمارية', 'ذات قيمة تدوم'], 'شركة مساهمة مصرية تعمل في استصلاح الأراضي والتطوير العقاري، وتوفّر فرصاً زراعية وتجارية مصمّمة للاستخدام العملي وللقيمة طويلة الأجل.'],
        'who' => ['من نحن', 'فريق متخصّص يصنع فرصاً حقيقية للنمو.', 'تأسست فيوتشر لاند عام 2017 كشركة مساهمة مصرية متخصصة في استصلاح الأراضي والتطوير العقاري. نعمل في مسارين مترابطين: استصلاح الأراضي الزراعية وتجهيزها، وتطوير المساحات التجارية التي تُدار منها الأنشطة. عملاؤنا هم أصحاب الأعمال الباحثون عن موقع لتشغيل نشاطهم، والمستخدمون النهائيون الباحثون عن أرض أو مساحة يستثمرونها. نعمل حالياً في نطاق الوجه البحري، مع خطة توسّع قيد الإعداد.'],
        'vision' => ['الرؤية والرسالة', 'اتجاه واضح لنمو مسؤول وطويل الأجل.', 'التزامان متكاملان يوجّهان طريقة تقييمنا للفرص وبنائنا للقيمة على المدى الطويل.', [['01', 'الرؤية', 'أن نبني محفظة متنامية من المشاريع الزراعية والتجارية التي تصنع قيمة عملية في مصر وخارجها.', 'about-vision.png', 'رؤية فيوتشر لاند'], ['02', 'الرسالة', 'أن نطوّر ونسلّم أراضي ومساحات يستطيع أصحاب الأعمال تشغيلها بثقة، في موعدها، وبالجودة المتفق عليها، وبمرافق جاهزة.', 'about-mission.png', 'رسالة فيوتشر لاند']]],
        'values' => ['كيف نصنع القيمة', 'من تقييم الفرصة إلى المستثمر المناسب.', 'منهجية واضحة تجعل كل فرصة مفهومة وعملية وجاهزة لاتخاذ قرار واثق.', [['01', 'اختيار الأرض الواعدة', 'ندرس التربة وتوافر المياه وسهولة الوصول والطلب المحيط قبل الالتزام بأي موقع.', 'about-value-1.png', 'تقييم الأرض'], ['02', 'الاستصلاح والتجهيز', 'نستكمل أعمال الاستصلاح والري والمرافق وطرق الوصول لتصبح الأرض قابلة للاستخدام فعلياً.', 'about-value-2.png', 'استصلاح الأرض'], ['03', 'تجهيز الفرصة للاستئجار', 'نقسّم الموقع إلى مساحات عملية ونوضّح كل ما يحتاج المستأجر معرفته.', 'about-who-we-are.png', 'خطة الاستئجار'], ['04', 'الوصول للمشغّل المناسب', 'نربط كل فرصة بالمستثمر أو المشغّل الذي يناسب نشاطه طبيعة الموقع.', 'about-value-4.png', 'مشغّل النشاط']]],
        'principles' => ['مبادئنا', 'المعايير التي تقف خلف كل فرصة نطوّرها.', 'نركّز على الوضوح والقابلية للتنفيذ والقيمة طويلة الأجل والنمو المسؤول في كل مرحلة.', [['01', 'الالتزام', 'نلتزم بالتوقيت المتفق عليه وبمستوى الجودة المتفق عليه، وهو أول ما نُقاس به.', 'about-principle-1.png', 'الالتزام'], ['02', 'الاحترافية', 'نعمل وفق أعلى معايير الاحترافية ونوظّف التكنولوجيا الحديثة في التطوير والتنفيذ.', 'about-principle-2.png', 'الاحترافية'], ['03', 'فرص عملية', 'فرص حقيقية قابلة للتنفيذ بدل الوعود العامة، فما نعرضه هو ما هو متاح فعلاً.', 'about-principle-3.png', 'فرص عملية'], ['04', 'تنوّع المشاريع', 'محفظة متنوعة بين التطوير الزراعي والتجاري، دون الارتباط بنموذج واحد.', 'about-principle-4.png', 'تنوع المشاريع']]],
        'growth' => ['استكشف الفرص', 'تعرّف على الفرص المتاحة حالياً مع فيوتشر لاند.', 'استعرض فرصاً زراعية وتجارية مصمّمة بوضوح وقابلية للنمو وقيمة طويلة الأجل.'],
      ],
      'contact' => [
        'hero' => ['تواصل معنا', 'لنتحدث عن الفرصة الأنسب لك.', 'سواء كنت تبحث عن أرض زراعية أو وحدة تجارية، شاركنا بياناتك وسيعاود فريقنا التواصل معك بالمعلومات المتاحة.'],
        'details' => ['بيانات التواصل', 'تواصل معنا', 'شبين الكوم، شارع طلعت حرب، المنوفية', 'الأحد إلى الخميس، ٩ صباحاً حتى ٥ مساءً', '٠١١٤٠٦٤٤٤٤٨'],
        'note' => 'يراجع فريقنا استفسارك ويتواصل معك خلال ساعات العمل (الأحد إلى الخميس، ٩:٠٠ حتى ١٧:٠٠).',
      ],
    ],
  ];

  return $content[$lang] ?? $content['en'];
}

function fl_project_content(string $lang, string $projectKey): array
{
  $projects = [
    'en' => [
      'agricultural' => [
        'interestKey' => 'agricultural',
        'interest' => 'Agricultural Projects',
        'type' => 'Agricultural opportunity',
        'eyebrow' => 'Our Agricultural Projects',
        'title' => 'Future Land Agricultural Projects',
        'location' => 'Wadi El Natrun & El Dabaa Road, Egypt',
        'summary' => 'Reclaimed agricultural land in Wadi El Natrun and El Dabaa Road (before El Mohra), available for lease with water, utilities, and road access already in place.',
        'locationLink' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19',
        'hero' => 'assets/images/agri-hero.png',
        'opportunityTitle' => 'A long-term agricultural opportunity shaped around scale, access, and future growth.',
        'aboutHeading' => 'About the Projects',
        'about' => 'Future Land currently develops two agricultural sites. The first is in Wadi El Natrun, on sandy soil, 80% reclaimed, irrigated from available wells and located two kilometres from the Wadi El Natrun to El Alamein road. The second is on El Dabaa Road (before El Mohra), on clay soil, fully reclaimed, with surface irrigation and available water, close to the main routes. Both sites carry full utilities including drinking water and electricity, and complete legal documentation.',
        'aboutMobile' => 'Future Land develops two agricultural sites: Wadi El Natrun (sandy soil, 80% reclaimed, well irrigation, and 2 km from the main road) and El Dabaa Road before El Mohra (clay soil, fully reclaimed, and surface irrigation). Both have water, electricity, and complete legal documentation.',
        'suitableCropsLabel' => 'Suitable Crops:',
        'suitableCrops' => 'Olives, Grapes, Figs, Onions, Garlic, Citrus, and any greenhouse-cultivated crops.',
        'facts' => [['Project sites', '2 Locations'], ['Minimum lease', '10 Feddans'], ['Availability', 'Available now']],
        'secondary' => ['assets/images/agri-hero.png', 'assets/images/agri-secondary.png'],
        'secondaryAlt' => ['Wadi El Natrun agricultural site', 'El Dabaa Road agricultural site'],
        'sitesEyebrow' => 'Two distinct opportunities',
        'sitesTitle' => 'Two agricultural projects in two distinct locations.',
        'sites' => [
          ['number' => 'Project 01', 'name' => 'Wadi El Natrun', 'link' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19', 'facts' => ['Soil' => 'Sandy soil', 'Reclamation' => '80%', 'Irrigation' => 'Wells, water available', 'Access' => '2 km from the main road', 'Minimum lease' => '10 feddans', 'Status' => 'Available now']],
          ['number' => 'Project 02', 'name' => 'El Dabaa Road (Before El Mohra)', 'facts' => ['Soil' => 'Clay soil', 'Reclamation' => 'Fully reclaimed', 'Irrigation' => 'Surface irrigation', 'Access' => 'Close to the main routes', 'Minimum lease' => '10 feddans', 'Status' => 'Available now']],
        ],
        'gallery' => ['assets/images/figma/agri-project-gallery-large.png', 'assets/images/figma/agri-project-gallery-small-left.png', 'assets/images/figma/agri-project-gallery-small-right.png'],
        'detailsEyebrow' => 'Explore the land',
        'detailsTitle' => 'Everything an investor needs to understand the opportunity.',
        'detailsIntro' => 'The essential information that every investor asks about: soil, water, access, road proximity and the terms of use.',
        'details' => [['Land Specifications', 'Wadi El Natrun is sandy soil at 80% reclamation. El Dabaa Road is clay soil, fully reclaimed. Both are prepared for immediate agricultural use.'], ['Location & Accessibility', 'Wadi El Natrun sits two kilometres from the Wadi El Natrun to El Alamein road. El Dabaa Road is directly served by the El Dabaa road network.'], ['Lease Divisions', 'Leasing starts from a minimum of 10 feddans, with a maximum of 50% of the total site area allocated to any single party.'], ['Legal Documentation', 'All legal permits and documents for both sites are complete and available for review.']],
        'facilitiesEyebrow' => 'Facilities & infrastructure',
        'facilitiesTitle' => 'Essential facilities that support day-to-day agricultural operations.',
        'facilitiesIntro' => 'The facilities are in place, not scheduled. Both sites are served with water, electricity and road access so that operations can begin without waiting on infrastructure.',
        'facilities' => [['Water & Irrigation', 'Wells at Wadi El Natrun and surface irrigation at El Dabaa Road, with water available at both sites.', 'assets/images/agri-facility-1.png'], ['Road Access', 'Direct access to the main road network serving each site.', 'assets/images/agri-facility-2.png'], ['Electricity & Utilities', 'Electricity and drinking water are connected across both projects.', 'assets/images/agri-facility-3.png'], ['Legal & Service Support', 'Complete documentation and a team available to answer operational questions during the lease.', 'assets/images/agri-facility-4.png']],
        'facilityGalleryImages' => ['assets/images/agri-facility-3.png', 'assets/images/figma/agri-facilities-gallery-right.png'],
        'faqEyebrow' => 'Frequently asked questions',
        'faqTitle' => 'Questions investors commonly ask.',
        'faqs' => [['What is the minimum area I can lease?', 'Leasing starts from a minimum of 10 feddans. A single party may lease up to 50% of the total site area.'], ['Is water available on site?', 'Yes. Wadi El Natrun is served by available wells, and El Dabaa Road uses surface irrigation with water available.'], ['What is the state of reclamation?', 'Wadi El Natrun is 80% reclaimed. El Dabaa Road is fully reclaimed at 100%.'], ['Which utilities are connected?', 'Both sites carry full utilities, including drinking water and electricity.'], ['What are the lease duration and terms?', 'Duration and terms are agreed according to the area and the intended activity. Contact our team to discuss the details.'], ['Is the land available now?', 'Yes, both sites are available.']],
        'cta' => 'assets/images/agri-hero.png',
        'ctaEyebrow' => 'Start a conversation',
        'ctaTitle' => 'Discuss the opportunity with our team.',
        'ctaCopy' => 'Send us your area and the activity you have in mind, and we will get back to you with the available details.',
      ],
      'fuel' => [
        'interestKey' => 'fuel',
        'interest' => 'Fuel Station Project',
        'type' => 'Commercial opportunity',
        'eyebrow' => 'Our Commercial Project',
        'title' => 'Wataneya Fuel Station, Sadat City',
        'titleLines' => ['Wataneya Fuel', 'Station,', 'Sadat City'],
        'location' => 'Sadat City, main road',
        'summary' => 'Eight commercial units on a main road in Sadat City, available for lease within an operating fuel station, with full utilities and 24-hour operation.',
        'locationLink' => 'https://maps.app.goo.gl/NR13FQJ5zmwBfthY6',
        'hero' => 'assets/images/fuel-hero.png',
        'opportunityTitle' => 'A commercial location built around constant traffic and 24-hour operation.',
        'aboutHeading' => 'About the Project',
        'about' => 'Wataneya is a national fuel station located on a main road in Sadat City. The project is currently at finishing stage and includes eight commercial units of varying sizes, offered for lease only. All activities are permitted, entrances, exits and parking are in place, and the station operates around the clock.',
        'facts' => [['Location', 'Sadat City, main road'], ['Status', 'Finishing stage'], ['Units', '8 Units']],
        'secondary' => ['assets/images/fuel-secondary-a.png', 'assets/images/fuel-secondary-b.png'],
        'secondaryAlt' => ['Wataneya fuel station site', 'Commercial units at Wataneya'],
        'sites' => [],
        'gallery' => ['assets/images/fuel-gallery-large.png', 'assets/images/fuel-gallery-small.png', 'assets/images/fuel-gallery-tall.png'],
        'detailsEyebrow' => 'Explore the units',
        'detailsTitle' => 'Everything a tenant needs to understand the opportunity.',
        'detailsIntro' => 'Unit sizes, handover condition, permitted activities and operating terms, all set out clearly before you enquire.',
        'details' => [['Units and Areas', 'Six units at 60 m² each, one unit at 492 m², and one unit at 360 m². The range suits retail, food and service activities of different scales.'], ['Permitted Activities', 'All commercial activities are permitted. Fit-out requirements and the grace period vary according to the activity.'], ['Handover Condition', 'Units are handed over core and shell, for lease only. Tenants complete the internal fit-out to suit their operation.'], ['Access and Parking', 'Dedicated entrances, exits and parking are already in place to handle continuous traffic.']],
        'facilitiesEyebrow' => 'Facilities & infrastructure',
        'facilitiesTitle' => 'Infrastructure ready for continuous commercial operation.',
        'facilitiesIntro' => 'The station is equipped with the utilities and access arrangements a commercial tenant needs from day one.',
        'facilities' => [['Water and Electricity', 'Water and electricity connections are in place across the units.', 'assets/images/fuel-facility-1.png'], ['Drainage', 'A complete drainage network serves the station and its commercial units.', 'assets/images/fuel-facility-2.png'], ['Entrances, Exits and Parking', 'Vehicle circulation, access points and parking areas are planned for constant flow.', 'assets/images/fuel-facility-3.png'], ['24-Hour Operation', 'The station operates around the clock, extending trading hours for tenants.', 'assets/images/fuel-gallery-tall.png']],
        'facilityGallery' => [1, 2],
        'faqEyebrow' => 'Frequently asked questions',
        'faqTitle' => 'Questions investors commonly ask.',
        'faqs' => [['What unit sizes are available?', 'Six units measure 60 m², one unit measures 492 m², and one unit measures 360 m².'], ['Are the units for sale or for lease?', 'Lease only.'], ['What condition are units handed over in?', 'Core and shell. The tenant completes the internal fit-out.'], ['Which activities are allowed?', 'All commercial activities are permitted. Fit-out requirements and grace period vary by activity.'], ['When will the station open?', 'The project is currently at finishing stage. Contact our team for the latest timeline.'], ['What are the operating hours?', 'The station operates 24 hours a day.']],
        'cta' => 'assets/images/fuel-cta.png',
        'ctaEyebrow' => 'Start a conversation',
        'ctaTitle' => 'Discuss the opportunity with our team.',
        'ctaCopy' => 'Send us the unit size and the activity you plan to operate, and we will get back to you with the available details.',
      ],
    ],
    'ar' => [
      'agricultural' => [
        'interestKey' => 'agricultural',
        'interest' => 'المشاريع الزراعية',
        'type' => 'فرصة زراعية',
        'eyebrow' => 'مشاريعنا الزراعية',
        'title' => 'المشاريع الزراعية لفيوتشر لاند',
        'location' => 'وادي النطرون وطريق الضبعة (قبل المهرة)',
        'summary' => 'أراضٍ زراعية مستصلحة في وادي النطرون وطريق الضبعة (قبل المهرة)، متاحة للاستئجار بمياه ومرافق وطرق وصول جاهزة.',
        'locationLink' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19',
        'hero' => 'assets/images/agri-hero.png',
        'opportunityTitle' => 'فرصة زراعية طويلة الأجل قائمة على المساحة وسهولة الوصول وإمكانية النمو.',
        'aboutHeading' => 'عن المشاريع',
        'about' => 'تطوّر فيوتشر لاند حالياً موقعين زراعيين. الأول في وادي النطرون، تربته رملية، ونسبة الاستصلاح فيه 80%، ويُروى من آبار متاحة، ويبعد كيلومترين عن طريق وادي النطرون العلمين. الموقع: https://maps.app.goo.gl/vw4UDUp5UZyMftQ19. الثاني على طريق الضبعة (قبل المهرة)، تربته طينية، ونسبة الاستصلاح فيه 100%، ويعتمد على الري السطحي مع توافر المياه، ويقع قريباً من الطرق الرئيسية. الموقعان مزوّدان بكامل المرافق، بما فيها مياه الشرب والكهرباء، وبمستندات قانونية كاملة.',
        'suitableCropsLabel' => 'المحاصيل المناسبة:',
        'suitableCrops' => 'الزيتون، العنب، التين، البصل والثوم، الموالح، وأي زراعات داخل الصوب.',
        'facts' => [['مواقع المشاريع', '2 موقع'], ['الحد الأدنى', '10 أفدنة'], ['التوافر', 'متاحة الآن']],
        'secondary' => ['assets/images/agri-hero.png', 'assets/images/agri-secondary.png'],
        'secondaryAlt' => ['موقع وادي النطرون الزراعي', 'موقع طريق الضبعة الزراعي'],
        'sitesEyebrow' => 'بطاقة سريعة',
        'sitesTitle' => 'وادي النطرون وطريق الضبعة (قبل المهرة)',
        'sites' => [
          ['number' => 'مشروع 01', 'name' => 'وادي النطرون', 'link' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19', 'facts' => ['التربة' => 'رملية', 'الاستصلاح' => '80%', 'الري' => 'آبار متاحة', 'الطرق' => '٢ كم من طريق وادي النطرون العلمين', 'الحد الأدنى' => '١٠ أفدنة', 'التوافر' => 'متاحة الآن']],
          ['number' => 'مشروع 02', 'name' => 'طريق الضبعة (قبل المهرة)', 'facts' => ['التربة' => 'طينية', 'الاستصلاح' => '100%', 'الري' => 'ري سطحي والمياه متاحة', 'الطرق' => 'قريبة من الطرق الرئيسية', 'الحد الأدنى' => '١٠ أفدنة', 'التوافر' => 'متاحة الآن']],
        ],
        'gallery' => ['assets/images/figma/agri-project-gallery-large.png', 'assets/images/figma/agri-project-gallery-small-left.png', 'assets/images/figma/agri-project-gallery-small-right.png'],
        'detailsEyebrow' => 'تفاصيل الأرض',
        'detailsTitle' => 'كل ما يحتاج المستثمر لفهم الفرصة.',
        'detailsIntro' => 'المعلومات الأساسية التي يسأل عنها كل مستثمر: التربة والمياه والوصول وقرب الطرق وشروط الاستخدام.',
        'details' => [['مواصفات الأرض', 'وادي النطرون تربة رملية بنسبة استصلاح 80%، وطريق الضبعة تربة طينية مستصلحة بالكامل. كلاهما جاهز للاستخدام الزراعي.'], ['الموقع وسهولة الوصول', 'وادي النطرون على بعد كيلومترين من طريق وادي النطرون العلمين، وطريق الضبعة (قبل المهرة) متصل مباشرة بشبكة طرق الضبعة.'], ['تقسيمات الاستئجار', 'يبدأ الاستئجار من حد أدنى 10 أفدنة، وبحد أقصى 50% من إجمالي مساحة الموقع لأي جهة واحدة.'], ['المستندات القانونية', 'جميع التراخيص والمستندات القانونية للموقعين مستوفاة ومتاحة للاطلاع.']],
        'facilitiesEyebrow' => 'المرافق والبنية التحتية',
        'facilitiesTitle' => 'مرافق أساسية تدعم التشغيل الزراعي اليومي.',
        'facilitiesIntro' => 'المرافق متاحة بالفعل وليست مجدولة. الموقعان مزوّدان بالمياه والكهرباء وطرق الوصول، بما يتيح بدء التشغيل دون انتظار البنية التحتية.',
        'facilities' => [['المياه والري', 'آبار في وادي النطرون وري سطحي في طريق الضبعة، مع توافر المياه في الموقعين.', 'assets/images/agri-facility-1.png'], ['الطرق', 'وصول مباشر لشبكة الطرق الرئيسية الخادمة لكل موقع.', 'assets/images/agri-facility-2.png'], ['الكهرباء والمرافق', 'الكهرباء ومياه الشرب متصلة في المشروعين.', 'assets/images/agri-facility-3.png'], ['الدعم القانوني والتشغيلي', 'مستندات كاملة وفريق متاح للرد على الاستفسارات التشغيلية طوال مدة الاستئجار.', 'assets/images/agri-facility-4.png']],
        'facilityGalleryImages' => ['assets/images/agri-facility-3.png', 'assets/images/figma/agri-facilities-gallery-right.png'],
        'faqEyebrow' => 'FAQ',
        'faqTitle' => 'المشاريع الزراعية',
        'faqs' => [['ما الحد الأدنى للمساحة التي يمكن استئجارها؟', 'يبدأ الاستئجار من 10 أفدنة كحد أدنى، ويمكن لجهة واحدة استئجار ما يصل إلى 50% من إجمالي مساحة الموقع.'], ['هل المياه متاحة في الموقع؟', 'نعم. وادي النطرون يعتمد على آبار متاحة، وطريق الضبعة على ري سطحي مع توافر المياه.'], ['ما نسبة الاستصلاح؟', 'وادي النطرون 80%، وطريق الضبعة مستصلح بالكامل بنسبة 100%.'], ['ما المرافق المتوفرة؟', 'الموقعان مزوّدان بكامل المرافق، بما فيها مياه الشرب والكهرباء.'], ['ما مدة الاستئجار وشروطه؟', 'تُحدّد المدة والشروط وفق المساحة والنشاط المطلوب. تواصل مع فريقنا لمناقشة التفاصيل.'], ['هل الأرض متاحة الآن؟', 'نعم، الموقعان متاحان.']],
        'cta' => 'assets/images/agri-hero.png',
        'ctaEyebrow' => 'ابدأ الحوار',
        'ctaTitle' => 'ناقش الفرصة مع فريقنا.',
        'ctaCopy' => 'أرسل لنا المساحة المطلوبة والنشاط الذي تخطّط له، وسنعاود التواصل معك بالتفاصيل المتاحة.',
      ],
      'fuel' => [
        'interestKey' => 'fuel',
        'interest' => 'مشروع محطة الوقود',
        'type' => 'فرصة تجارية',
        'eyebrow' => 'مشروعنا التجاري',
        'title' => 'محطة بنزينة وطنية، مدينة السادات',
        'titleLines' => ['محطة بنزينة وطنية،', 'مدينة السادات'],
        'location' => 'مدينة السادات، طريق رئيسي',
        'summary' => 'ثماني وحدات تجارية على طريق رئيسي بمدينة السادات، متاحة للإيجار داخل محطة وقود، بمرافق متكاملة وتشغيل على مدار 24 ساعة. الموقع: https://maps.app.goo.gl/NR13FQJ5zmwBfthY6',
        'locationLink' => 'https://maps.app.goo.gl/NR13FQJ5zmwBfthY6',
        'hero' => 'assets/images/fuel-hero.png',
        'opportunityTitle' => 'موقع تجاري قائم على حركة مستمرة وتشغيل على مدار الساعة.',
        'aboutHeading' => 'عن المشروع',
        'about' => 'بنزينة وطنية هي محطة وقود وطنية تقع على طريق رئيسي بمدينة السادات. الموقع: https://maps.app.goo.gl/NR13FQJ5zmwBfthY6. المشروع حالياً في مرحلة التشطيب ويضم ثماني وحدات تجارية بمساحات متنوعة، متاحة للإيجار فقط. جميع الأنشطة مسموح بها، والمداخل والمخارج ومواقف السيارات متاحة، والمحطة تعمل على مدار 24 ساعة.',
        'facts' => [['الموقع', 'مدينة السادات، طريق رئيسي'], ['الحالة', 'تحت التشطيب'], ['الوحدات', '8']],
        'secondary' => ['assets/images/fuel-secondary-a.png', 'assets/images/fuel-secondary-b.png'],
        'secondaryAlt' => ['موقع محطة بنزينة وطنية', 'الوحدات التجارية في بنزينة وطنية'],
        'sites' => [],
        'gallery' => ['assets/images/fuel-gallery-large.png', 'assets/images/fuel-gallery-small.png', 'assets/images/fuel-gallery-tall.png'],
        'detailsEyebrow' => 'تفاصيل الوحدات',
        'detailsTitle' => 'كل ما يحتاج المستأجر لفهم المساحة.',
        'detailsIntro' => 'المساحات وحالة التسليم والأنشطة المسموح بها وشروط التشغيل، موضّحة قبل الاستفسار.',
        'details' => [['الوحدات والمساحات', 'ست وحدات بمساحة 60 م² لكل منها، ووحدة بمساحة 492 م²، وأخرى بمساحة 360 م². وهذه المساحات تناسب أنشطة التجزئة والمطاعم والخدمات بأحجام مختلفة.'], ['الأنشطة المسموح بها', 'جميع الأنشطة التجارية مسموح بها، وتختلف متطلبات التجهيز ومدة السماح حسب طبيعة النشاط.'], ['حالة التسليم', 'تُسلّم الوحدات على المحارة، للإيجار فقط، ويتولى المستأجر أعمال التشطيب الداخلي بما يناسب نشاطه.'], ['المداخل والمواقف', 'مداخل ومخارج ومواقف سيارات جاهزة لاستيعاب حركة مستمرة.']],
        'facilitiesEyebrow' => 'المرافق والبنية التحتية',
        'facilitiesTitle' => 'بنية تحتية جاهزة لتشغيل تجاري مستمر.',
        'facilitiesIntro' => 'المحطة مجهّزة بالمرافق وترتيبات الوصول التي يحتاجها المستأجر التجاري من اليوم الأول.',
        'facilities' => [['المياه والكهرباء', 'توصيلات المياه والكهرباء متاحة في جميع الوحدات.', 'assets/images/fuel-facility-1.png'], ['الصرف', 'شبكة صرف متكاملة تخدم المحطة ووحداتها التجارية.', 'assets/images/fuel-facility-2.png'], ['المداخل والمخارج والمواقف', 'حركة المركبات ونقاط الدخول ومواقف السيارات مخطّطة لاستيعاب تدفق مستمر.', 'assets/images/fuel-facility-3.png'], ['تشغيل 24 ساعة', 'تعمل المحطة على مدار الساعة، مما يمدّ ساعات العمل أمام المستأجرين.', 'assets/images/fuel-gallery-tall.png']],
        'facilityGallery' => [1, 2],
        'faqEyebrow' => 'FAQ',
        'faqTitle' => 'مشروع محطة الوقود',
        'faqs' => [['ما المساحات المتاحة؟', 'ست وحدات بمساحة 60 م²، ووحدة 492 م²، وأخرى 360 م².'], ['هل الوحدات للإيجار أم للبيع؟', 'للإيجار فقط.'], ['ما حالة تسليم الوحدات؟', 'تُسلّم على المحارة، ويتولى المستأجر التشطيب الداخلي.'], ['ما الأنشطة المسموح بها؟', 'جميع الأنشطة التجارية مسموح بها، وتختلف متطلبات التجهيز ومدة السماح حسب النشاط.'], ['متى يبدأ التشغيل؟', 'المشروع حالياً تحت التشطيب. تواصل مع فريقنا لمعرفة آخر تحديث للموعد.'], ['ما ساعات التشغيل؟', 'تعمل المحطة على مدار 24 ساعة.']],
        'cta' => 'assets/images/fuel-cta.png',
        'ctaEyebrow' => 'ابدأ الحوار',
        'ctaTitle' => 'ناقش الفرصة مع فريقنا.',
        'ctaCopy' => 'أرسل لنا المساحة المطلوبة والنشاط الذي تخطّط لتشغيله، وسنعاود التواصل معك بالتفاصيل المتاحة.',
      ],
    ],
  ];

  return $projects[$lang][$projectKey] ?? $projects['en'][$projectKey];
}

function fl_bootstrap(string $route, string $lang = 'en'): void
{
  global $content, $dir, $basePath, $assetBase, $currentRoute, $pageTitle, $pageDescription, $activePage, $pageClass;

  $lang = $lang === 'ar' ? 'ar' : 'en';
  $GLOBALS['lang'] = $lang;
  $content = fl_content($lang);
  $dir = $lang === 'ar' ? 'rtl' : 'ltr';
  $basePath = $lang === 'ar' ? '../' : '';
  $assetBase = $basePath;
  $currentRoute = $route;
  $meta = $content['meta'][$route] ?? $content['meta']['home'];
  $pageTitle = $pageTitle ?? $meta[0];
  $pageDescription = $pageDescription ?? $meta[1];
  $activePage = $activePage ?? ($route === 'agricultural' || $route === 'fuel' ? 'projects' : $route);
  $pageClass = $pageClass ?? $route;
}

function fl_asset(string $path): string
{
  global $assetBase;
  return ($assetBase ?? '') . $path;
}

function fl_page_url(string $route, ?string $lang = null): string
{
  $lang = $lang ?? ($GLOBALS['lang'] ?? 'en');
  $map = [
    'home' => 'index.php',
    'about' => 'about.php',
    'agricultural' => 'agricultural-projects.php',
    'fuel' => 'fuel-station-project.php',
    'contact' => 'contact.php',
  ];
  $file = $map[$route] ?? 'index.php';

  if ($lang === 'ar') {
    return $file;
  }

  return $file;
}

function fl_language_url(string $targetLang): string
{
  global $currentRoute, $lang;
  $map = [
    'home' => 'index.php',
    'about' => 'about.php',
    'agricultural' => 'agricultural-projects.php',
    'fuel' => 'fuel-station-project.php',
    'contact' => 'contact.php',
  ];
  $file = $map[$currentRoute ?? 'home'] ?? 'index.php';

  if ($targetLang === 'ar') {
    return ($lang ?? 'en') === 'ar' ? $file : 'ar/' . $file;
  }

  return ($lang ?? 'en') === 'ar' ? '../' . $file : $file;
}

function fl_contact_interest_selected(string $selectedInterest, string $key): bool
{
  $aliases = [
    'agricultural' => ['agricultural', 'Agricultural Projects'],
    'fuel' => ['fuel', 'Fuel Station Project'],
  ];

  return in_array($selectedInterest, $aliases[$key] ?? [$key], true);
}
