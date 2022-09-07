<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css"/>
        <link href="/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
	    <link href="/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <script src="/js/datatables.bundle.js"></script>
    </head>
    @include('admin_header')
    @include('admin_sidebar')
    <body class="bg-gray-200 "  >
        <div class="header-fixed header-tablet-and-mobile-fixed d-flex aside-enabled aside-fixed"  style="margin-left: 10.5%; padding-top: 30px">
            <div class="d-flex flex-column flex-root">
                    <!--begin::Page-->
                    <div class="page d-flex flex-row flex-column-fluid">
                        <!--begin::Wrapper-->
                        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                            
                            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl" style="max-width:100% !important">
                                <!--begin::Post-->
                                <div class="content flex-row-fluid" id="kt_content">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0 pt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center building-relative my-1">
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-building-table-toolbar="base">
                                                    <!--begin::Menu 1-->
                                                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->{{trans('display.filter')}}</button>
                                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                        <!--begin::Header-->
                                                        <div class="px-7 py-5">
                                                            <div class="fs-5 text-dark fw-bolder">
                                                                {{trans('display.filter_options')}}</div>
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Separator-->
                                                        <div class="separator border-gray-200"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::Content-->
                                                        <div class="px-7 py-5" style="max-height: 400px;overflow-y: scroll;" data-kt-building-table-filter="form">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                            <label
                                                                class="form-label fs-6 fw-bold">{{trans('display.code')}}:</label>
                                                            <input type="number"
                                                                class="form-control form-control-lg form-control-solid"
                                                                id="code_search" placeholder="{{trans('display.write')}}"
                                                                value="" />
                                                        </div>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset" id="reset_button" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-building-table-filter="reset">{{trans('display.cancel')}}</button>
                                                                <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-building-table-filter="filter">{{trans('display.search')}}</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Menu 1-->
                                                    <!--begin::Add building-->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_building">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->{{trans('display.add_building')}}</button>
                                                    <!--end::Add building-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-building-table-toolbar="selected">
                                                    <div class="fw-bolder me-5">
                                                    <span class="me-2" data-kt-building-table-select="selected_count"></span>Selected</div>
                                                    <button type="button" class="btn btn-danger" data-kt-building-table-select="delete_selected">Delete Selected</button>
                                                </div>
                                                <!--end::Group actions-->
                                                <!--begin::Modal - Add task-->
                                                <div class="modal fade" id="kt_modal_add_building" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_add_building_header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">{{trans('display.add_building')}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-buildings-modal-action="close">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                            <!--end::Modal header-->
                                                            <!--begin::Modal body-->
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                                <!--begin::Form-->
                                                                <form id="kt_modal_add_building_form" class="form" action="#" method="POST">
                                                                    <!--begin::Scroll-->
                                                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_building_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_building_header" data-kt-scroll-wrappers="#kt_modal_add_building_scroll" data-kt-scroll-offset="300px">
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.building_code')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="number" name="code" id="code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.code')}}" value="{{@$building->code}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.building_name')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.name')}}" value="{{@$building->name}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="mb-8">
                                                                    <div style="min-width: 150px">
                                                                        <label class="required fw-bold fs-6 mb-2">{{trans('display.building_parent_id')}}</label>
                                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.building_address')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="address" id="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.address')}}" value="{{@$building->address}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.phone')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="tel	" name="phone" id="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.phone')}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required value="{{@$building->phone}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.building_report_email')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="report_email" id="report_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.report_email')}}" value="{{@$building->report_email}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-8">
                                                            <div style="min-width: 150px">
                                                            <label class="required fw-bold fs-6 mb-2">{{trans('display.au1')}}</label>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="{{trans('display.au_level1')}}"  data-allow-clear="true" id="au_level11" name="au1" >
                                                                    <option value="0"></option>
                                                                
                                                                </select>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="fv-row mb-8">
                                                                <div style="min-width: 150px">
                                                                <label class="required fw-bold fs-6 mb-2">{{trans('display.au2')}}</label>
                                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="{{trans('display.au_level2')}}"  data-allow-clear="true"  id="level2_div1"  name="au2">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.head_surname')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="head_surname" id="head_surname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.head_surname')}}" value="{{@$building->head_surname}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">{{trans('display.head_firstname')}}</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="head_firstname" id="head_firstname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="{{trans('display.head_firstname')}}" value="{{@$building->head_firstname}}"/>
                                                                    <!--end::Input-->
                                                                </div>
                                                                    </div>
                                                                    <!--end::Scroll-->
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center pt-15">
                                                                        <button type="reset" class="btn btn-light me-3" data-kt-buildings-modal-action="cancel" id="reset-button">{{trans('display.cancel')}}</button>
                                                                        <button type="submit" class="btn btn-primary" data-kt-buildings-modal-action="submit">
                                                                            <span class="indicator-label">{{trans('display.submit')}}</span>
                                                                            <span class="indicator-progress">{{trans('messages.please_wait')}}
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                        </button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </form>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                        </div>
                                                        <!--end::Modal content-->
                                                    </div>
                                                    <!--end::Modal dialog-->
                                                </div>
                                                <div class="modal fade" id="kt_modal_edit_building" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_edit_building_header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bolder">{{trans('display.edit')}}</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-buildings-edit-modal-action="close">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                            <!--end::Modal header-->
                                                            <!--begin::Modal body-->
                                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" id="edit_modal_body">
                                                                <!--begin::Form-->
                                                                
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                        </div>
                                                        <!--end::Modal content-->
                                                    </div>
                                                    <!--end::Modal dialog-->
                                                </div>
                                                <!--end::Modal - Add task-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_buildings">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0" style="border-bottom: 1.5px solid #e5e7eb;">
                                                        <th class="min-w-125px">№</th>
                                                        <th class="min-w-125px">{{trans('display.building_code')}}</th>
                                                        <th class="min-w-125px">{{trans('display.building_name')}}</th>
                                                        <th class="min-w-125px">{{trans('display.building_address')}}</th>
                                                        <th class="min-w-125px">{{trans('display.building_phone')}}</th>
                                                        <th class="min-w-100px">{{trans('display.manage')}}</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-125px">1</th>
                                                        <th class="min-w-125px">ААН 924563</th>
                                                        <th class="min-w-125px">СУКА ПЛАЗА</th>
                                                        <th class="min-w-125px">СХД 13-р хороо 12-р байр</th>
                                                        <th class="min-w-125px">+976 77102356</th>
                                                        <th class="min-w-100px">
                                                            <a href="/settings/formula/'.$formula->id.'/edit"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"s>
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            <a href="#" onclick="deleteFormula('.$formula->id.')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            
                                                        </th>
                                                    </tr>
                                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-125px">2</th>
                                                        <th class="min-w-125px">ААН 924563</th>
                                                        <th class="min-w-125px">СУКА ПЛАЗА</th>
                                                        <th class="min-w-125px">СХД 13-р хороо 12-р байр</th>
                                                        <th class="min-w-125px">+976 77102356</th>
                                                        <th class="min-w-100px">
                                                            <a href="/settings/formula/'.$formula->id.'/edit"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"s>
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            <a href="#" onclick="deleteFormula('.$formula->id.')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            
                                                        </th>
                                                    </tr>
                                                <!--end::Table head-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Post-->
                            </div>
                            <!--end::Container-->
                            <!--begin::Footer-->
                            <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Page-->
                </div>
            </div>
    </body>
</html>