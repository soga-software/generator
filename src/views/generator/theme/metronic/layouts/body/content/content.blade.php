<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    <!-- begin:: Header -->
    @include('admin.layouts.body.content.webhead')
    <!-- end:: Header -->
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

        <!-- begin:: Subheader -->
        @include('admin.layouts.body.content.subcontent')
        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
            @yield('page')
        </div>
        <!-- end:: Content -->
    </div>

    <!-- begin:: Footer -->
    @include('admin.layouts.body.content.footer')

    <!-- end:: Footer -->
</div>