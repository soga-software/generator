<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    @include('admin.layouts.body.head.mobile')
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            @include('admin.layouts.body.head.aside')
            <!-- end:: Aside -->

            <!-- begin:: Content -->
            @include('admin.layouts.body.content.content')
            <!-- end:: Content -->
        </div>
    </div>
    <!-- end:: Page -->

    <!-- begin::Quick Panel -->
    @include('admin.layouts.body.panel.panel')
    <!-- end::Quick Panel -->

    <!-- begin::GoTop -->
    @include('admin.layouts.body.panel.gotop')
    <!-- end::GoTop -->

    <!-- begin::Sticky Toolbar -->
    @include('admin.layouts.body.panel.toolbar')
    <!-- end::Sticky Toolbar -->

    <!-- begin::Scroll Panel -->
    @include('admin.layouts.body.panel.scroll')
    <!-- end::Scroll Panel -->

    <!--Begin:: Chat-->
    @include('admin.layouts.body.panel.chatbox')
    <!--ENd:: Chat-->

    @include('admin.layouts.js.default')

</body>