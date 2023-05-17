@extends('layout.master')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="floating-button btm ctr">
  <a href="/menu">
  <button class="btn btn-kaliper">Order Now</button>
  </a>
</div>
      <!--begin::Row-->
      <div class="row gy-5 g-xl-8">
        <!--begin::Col--> 
        <div class="col-xxl-4">
          <!--begin::Mixed Widget 2-->
          <div class="card card-xxl-stretch">
            <!--begin::Header-->
            <div class="card-header border-0 bg-danger py-5">
              <h3 class="card-title fw-bolder text-white"></h3>
              <div class="card-toolbar">
                <!--begin::Menu-->
                {{-- <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                  +
                </button> --}}
                <!--begin::Menu 3-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                  <!--begin::Heading-->
                  <div class="menu-item px-3">
                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                  </div>
                  <!--end::Heading-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Create Invoice</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i></a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Generate Bill</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                    <a href="#" class="menu-link px-3">
                      <span class="menu-title">Subscription</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Plans</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Billing</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Statements</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div class="menu-content px-3">
                          <!--begin::Switch-->
                          <label class="form-check form-switch form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                            <!--end::Input-->
                            <!--end::Label-->
                            <span class="form-check-label text-muted fs-6">Recuring</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Switch-->
                        </div>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 my-1">
                    <a href="#" class="menu-link px-3">Settings</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 3-->
                <!--end::Menu-->
              </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 border-0"  style="position: relative;">
              <div class="card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px; min-height: 200px;">
                <p class="text-center display-6 fw-bolder text-white pt-2">Total Points</p>
                <p class="text-center display-3 fw-bolder text-white">K150 Points</p>
              </div>
              <!--begin::Stats-->
              <div class="card-p mt-n20 position-relative">
                <!--begin::Row-->
                <div class="row g-0">
                  <!--begin::Col-->
                  <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                        <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-primary fw-bold fs-6">New Projects</a>
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-0">
                  <!--begin::Col-->
                  <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr077.svg-->
                      <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="none"/>
                        <path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="black"/>
                        <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"/>
                        </svg>
                      </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-danger fw-bold fs-6 mt-2">Log Out</a>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col bg-light-success px-6 py-8 rounded-2">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"></path>
                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-success fw-bold fs-6 mt-2">Bug Reports</a>
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Stats-->
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 858px; height: 461px;"></div></div><div class="contract-trigger"></div></div></div>
            <!--end::Body-->
          </div>
          <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-4">
          <!--begin::List Widget 5-->
          <div class="card card-xxl-stretch">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
              <h3 class="card-title align-items-start flex-column">
                <span class="fw-bolder mb-2 text-dark">History</span>
                <span class="text-muted fw-bold fs-7">890,344 Sales</span>
              </h3>
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484bf44f851">
                  <!--begin::Header-->
                  <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Menu separator-->
                  <div class="separator border-gray-200"></div>
                  <!--end::Menu separator-->
                  <!--begin::Form-->
                  <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Status:</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <div>
                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484bf44f851" data-allow-clear="true" data-select2-id="select2-data-10-3xtm" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="select2-data-12-lum2"></option>
                          <option value="1">Approved</option>
                          <option value="2">Pending</option>
                          <option value="2">In Process</option>
                          <option value="2">Rejected</option>
                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-4qz8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-1grv-container" aria-controls="select2-1grv-container"><span class="select2-selection__rendered" id="select2-1grv-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Member Type:</label>
                      <!--end::Label-->
                      <!--begin::Options-->
                      <div class="d-flex">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                          <input class="form-check-input" type="checkbox" value="1">
                          <span class="form-check-label">Author</span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="2" checked="checked">
                          <span class="form-check-label">Customer</span>
                        </label>
                        <!--end::Options-->
                      </div>
                      <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Notifications:</label>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                        <label class="form-check-label">Enabled</label>
                      </div>
                      <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                      <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                      <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
              </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
              <!--begin::Timeline-->
              <div class="timeline-label">
                <!--begin::Item-->
                <div class="timeline-item">
                  <!--begin::Label-->
                  <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-warning fs-1"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
                  <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="timeline-item">
                  <!--begin::Label-->
                  <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-success fs-1"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Content-->
                  <div class="timeline-content d-flex">
                    <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="timeline-item">
                  <!--begin::Label-->
                  <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Desc-->
                  <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                  <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                  <!--end::Desc-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="timeline-item">
                  <!--begin::Label-->
                  <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-primary fs-1"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                  <!--end::Text-->
                </div>
                <!--end::Item-->
              </div>
              <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
          </div>
          <!--end: List Widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-4">
          <!--begin::Mixed Widget 7-->
          <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column p-0" style="position: relative;">
              <!--begin::Stats-->
              <div class="flex-grow-1 card-p pb-0">
                <div class="d-flex flex-stack flex-wrap">
                  <div class="me-2">
                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate Reports</a>
                    <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                  </div>
                  <div class="fw-bolder fs-3 text-primary">$24,500</div>
                </div>
              </div>
              <!--end::Stats-->
              <!--begin::Chart-->
              <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartssv6tqdbl" class="apexcharts-canvas apexchartssv6tqdbl apexcharts-theme-light" style="width: 857px; height: 150px;"><svg id="SvgjsSvg1327" width="857" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1329" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1328"><clipPath id="gridRectMasksv6tqdbl"><rect id="SvgjsRect1332" width="864" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasksv6tqdbl"></clipPath><clipPath id="nonForecastMasksv6tqdbl"></clipPath><clipPath id="gridRectMarkerMasksv6tqdbl"><rect id="SvgjsRect1333" width="861" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1340" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1341" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1349" class="apexcharts-grid"><g id="SvgjsG1350" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1352" x1="0" y1="0" x2="857" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1353" x1="0" y1="15" x2="857" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1354" x1="0" y1="30" x2="857" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1355" x1="0" y1="45" x2="857" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1356" x1="0" y1="60" x2="857" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1357" x1="0" y1="75" x2="857" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1358" x1="0" y1="90" x2="857" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1359" x1="0" y1="105" x2="857" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1360" x1="0" y1="120" x2="857" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1361" x1="0" y1="135" x2="857" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1362" x1="0" y1="150" x2="857" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1351" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1364" x1="0" y1="150" x2="857" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1363" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1334" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1335" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1338" d="M 0 150L 0 112.5C 59.989999999999995 112.5 111.41000000000001 87.5 171.4 87.5C 231.39 87.5 282.81 112.5 342.8 112.5C 402.79 112.5 454.21000000000004 50 514.2 50C 574.19 50 625.61 100 685.6 100C 745.59 100 797.01 25 857 25C 857 25 857 25 857 150M 857 25z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasksv6tqdbl)" pathTo="M 0 150L 0 112.5C 59.989999999999995 112.5 111.41000000000001 87.5 171.4 87.5C 231.39 87.5 282.81 112.5 342.8 112.5C 402.79 112.5 454.21000000000004 50 514.2 50C 574.19 50 625.61 100 685.6 100C 745.59 100 797.01 25 857 25C 857 25 857 25 857 150M 857 25z" pathFrom="M -1 150L -1 150L 171.4 150L 342.8 150L 514.2 150L 685.6 150L 857 150"></path><path id="SvgjsPath1339" d="M 0 112.5C 59.989999999999995 112.5 111.41000000000001 87.5 171.4 87.5C 231.39 87.5 282.81 112.5 342.8 112.5C 402.79 112.5 454.21000000000004 50 514.2 50C 574.19 50 625.61 100 685.6 100C 745.59 100 797.01 25 857 25" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasksv6tqdbl)" pathTo="M 0 112.5C 59.989999999999995 112.5 111.41000000000001 87.5 171.4 87.5C 231.39 87.5 282.81 112.5 342.8 112.5C 402.79 112.5 454.21000000000004 50 514.2 50C 574.19 50 625.61 100 685.6 100C 745.59 100 797.01 25 857 25" pathFrom="M -1 150L -1 150L 171.4 150L 342.8 150L 514.2 150L 685.6 150L 857 150"></path><g id="SvgjsG1336" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1370" r="0" cx="0" cy="0" class="apexcharts-marker wrg0ragn4g no-pointer-events" stroke="#009ef7" fill="#f1faff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1337" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1365" x1="0" y1="0" x2="857" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1366" x1="0" y1="0" x2="857" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1367" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1368" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1369" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1348" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1330" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 75px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              <!--end::Chart-->
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 858px; height: 248px;"></div></div><div class="contract-trigger"></div></div></div>
            <!--end::Body-->
          </div>
          <!--end::Mixed Widget 7-->
          <!--begin::Mixed Widget 10-->
          <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden" style="position: relative;">
              <!--begin::Hidden-->
              <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                <div class="me-2">
                  <span class="fw-bolder text-gray-800 d-block fs-3">Sales</span>
                  <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 21</span>
                </div>
                <div class="fw-bolder fs-3 text-primary">$15,300</div>
              </div>
              <!--end::Hidden-->
              <!--begin::Chart-->
              <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px; min-height: 190px;"><div id="apexchartsdj6k14hg" class="apexcharts-canvas apexchartsdj6k14hg apexcharts-theme-light" style="width: 857px; height: 175px;"><svg id="SvgjsSvg1371" width="857" height="175" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1373" class="apexcharts-inner apexcharts-graphical" transform="translate(42.571990966796875, 40)"><defs id="SvgjsDefs1372"><linearGradient id="SvgjsLinearGradient1377" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1378" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1379" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1380" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskdj6k14hg"><rect id="SvgjsRect1382" width="810.4280090332031" height="94.494" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdj6k14hg"></clipPath><clipPath id="nonForecastMaskdj6k14hg"></clipPath><clipPath id="gridRectMarkerMaskdj6k14hg"><rect id="SvgjsRect1383" width="808.4280090332031" height="96.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1381" width="25.138375282287598" height="92.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1377)" class="apexcharts-xcrosshairs" y2="92.494" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1423" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1424" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1426" font-family="inherit" x="50.276750564575195" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1427">Feb</tspan><title>Feb</title></text><text id="SvgjsText1429" font-family="inherit" x="150.8302516937256" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1430">Mar</tspan><title>Mar</title></text><text id="SvgjsText1432" font-family="inherit" x="251.38375282287598" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1433">Apr</tspan><title>Apr</title></text><text id="SvgjsText1435" font-family="inherit" x="351.93725395202637" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1436">May</tspan><title>May</title></text><text id="SvgjsText1438" font-family="inherit" x="452.49075508117676" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1439">Jun</tspan><title>Jun</title></text><text id="SvgjsText1441" font-family="inherit" x="553.0442562103271" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1442">Jul</tspan><title>Jul</title></text><text id="SvgjsText1444" font-family="inherit" x="653.5977573394775" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1445">Aug</tspan><title>Aug</title></text><text id="SvgjsText1447" font-family="inherit" x="754.1512584686279" y="121.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1448">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG1461" class="apexcharts-grid"><g id="SvgjsG1462" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1464" x1="0" y1="0" x2="804.4280090332031" y2="0" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1465" x1="0" y1="23.1235" x2="804.4280090332031" y2="23.1235" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1466" x1="0" y1="46.247" x2="804.4280090332031" y2="46.247" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1467" x1="0" y1="69.37049999999999" x2="804.4280090332031" y2="69.37049999999999" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1468" x1="0" y1="92.494" x2="804.4280090332031" y2="92.494" stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1463" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1470" x1="0" y1="92.494" x2="804.4280090332031" y2="92.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1469" x1="0" y1="1" x2="0" y2="92.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1384" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1385" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1389" d="M 25.138375282287598 92.494L 25.138375282287598 38.68525Q 25.138375282287598 34.68525 29.138375282287598 34.68525L 44.276750564575195 34.68525Q 48.276750564575195 34.68525 48.276750564575195 38.68525L 48.276750564575195 38.68525L 48.276750564575195 92.494L 48.276750564575195 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 25.138375282287598 92.494L 25.138375282287598 38.68525Q 25.138375282287598 34.68525 29.138375282287598 34.68525L 44.276750564575195 34.68525Q 48.276750564575195 34.68525 48.276750564575195 38.68525L 48.276750564575195 38.68525L 48.276750564575195 92.494L 48.276750564575195 92.494z" pathFrom="M 25.138375282287598 92.494L 25.138375282287598 92.494L 48.276750564575195 92.494L 48.276750564575195 92.494L 48.276750564575195 92.494L 48.276750564575195 92.494L 48.276750564575195 92.494L 25.138375282287598 92.494" cy="34.68525" cx="124.69187641143799" j="0" val="50" barHeight="57.808749999999996" barWidth="25.138375282287598"></path><path id="SvgjsPath1391" d="M 125.69187641143799 92.494L 125.69187641143799 27.123500000000007Q 125.69187641143799 23.123500000000007 129.691876411438 23.123500000000007L 144.8302516937256 23.123500000000007Q 148.8302516937256 23.123500000000007 148.8302516937256 27.123500000000007L 148.8302516937256 27.123500000000007L 148.8302516937256 92.494L 148.8302516937256 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 125.69187641143799 92.494L 125.69187641143799 27.123500000000007Q 125.69187641143799 23.123500000000007 129.691876411438 23.123500000000007L 144.8302516937256 23.123500000000007Q 148.8302516937256 23.123500000000007 148.8302516937256 27.123500000000007L 148.8302516937256 27.123500000000007L 148.8302516937256 92.494L 148.8302516937256 92.494z" pathFrom="M 125.69187641143799 92.494L 125.69187641143799 92.494L 148.8302516937256 92.494L 148.8302516937256 92.494L 148.8302516937256 92.494L 148.8302516937256 92.494L 148.8302516937256 92.494L 125.69187641143799 92.494" cy="23.123500000000007" cx="225.24537754058838" j="1" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><path id="SvgjsPath1393" d="M 226.24537754058838 92.494L 226.24537754058838 15.561750000000004Q 226.24537754058838 11.561750000000004 230.24537754058838 11.561750000000004L 245.38375282287598 11.561750000000004Q 249.38375282287598 11.561750000000004 249.38375282287598 15.561750000000004L 249.38375282287598 15.561750000000004L 249.38375282287598 92.494L 249.38375282287598 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 226.24537754058838 92.494L 226.24537754058838 15.561750000000004Q 226.24537754058838 11.561750000000004 230.24537754058838 11.561750000000004L 245.38375282287598 11.561750000000004Q 249.38375282287598 11.561750000000004 249.38375282287598 15.561750000000004L 249.38375282287598 15.561750000000004L 249.38375282287598 92.494L 249.38375282287598 92.494z" pathFrom="M 226.24537754058838 92.494L 226.24537754058838 92.494L 249.38375282287598 92.494L 249.38375282287598 92.494L 249.38375282287598 92.494L 249.38375282287598 92.494L 249.38375282287598 92.494L 226.24537754058838 92.494" cy="11.561750000000004" cx="325.79887866973877" j="2" val="70" barHeight="80.93225" barWidth="25.138375282287598"></path><path id="SvgjsPath1395" d="M 326.79887866973877 92.494L 326.79887866973877 4Q 326.79887866973877 0 330.79887866973877 0L 345.93725395202637 0Q 349.93725395202637 0 349.93725395202637 4L 349.93725395202637 4L 349.93725395202637 92.494L 349.93725395202637 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 326.79887866973877 92.494L 326.79887866973877 4Q 326.79887866973877 0 330.79887866973877 0L 345.93725395202637 0Q 349.93725395202637 0 349.93725395202637 4L 349.93725395202637 4L 349.93725395202637 92.494L 349.93725395202637 92.494z" pathFrom="M 326.79887866973877 92.494L 326.79887866973877 92.494L 349.93725395202637 92.494L 349.93725395202637 92.494L 349.93725395202637 92.494L 349.93725395202637 92.494L 349.93725395202637 92.494L 326.79887866973877 92.494" cy="0" cx="426.35237979888916" j="3" val="80" barHeight="92.494" barWidth="25.138375282287598"></path><path id="SvgjsPath1397" d="M 427.35237979888916 92.494L 427.35237979888916 27.123500000000007Q 427.35237979888916 23.123500000000007 431.35237979888916 23.123500000000007L 446.49075508117676 23.123500000000007Q 450.49075508117676 23.123500000000007 450.49075508117676 27.123500000000007L 450.49075508117676 27.123500000000007L 450.49075508117676 92.494L 450.49075508117676 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 427.35237979888916 92.494L 427.35237979888916 27.123500000000007Q 427.35237979888916 23.123500000000007 431.35237979888916 23.123500000000007L 446.49075508117676 23.123500000000007Q 450.49075508117676 23.123500000000007 450.49075508117676 27.123500000000007L 450.49075508117676 27.123500000000007L 450.49075508117676 92.494L 450.49075508117676 92.494z" pathFrom="M 427.35237979888916 92.494L 427.35237979888916 92.494L 450.49075508117676 92.494L 450.49075508117676 92.494L 450.49075508117676 92.494L 450.49075508117676 92.494L 450.49075508117676 92.494L 427.35237979888916 92.494" cy="23.123500000000007" cx="526.9058809280396" j="4" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><path id="SvgjsPath1399" d="M 527.9058809280396 92.494L 527.9058809280396 38.68525Q 527.9058809280396 34.68525 531.9058809280396 34.68525L 547.0442562103271 34.68525Q 551.0442562103271 34.68525 551.0442562103271 38.68525L 551.0442562103271 38.68525L 551.0442562103271 92.494L 551.0442562103271 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 527.9058809280396 92.494L 527.9058809280396 38.68525Q 527.9058809280396 34.68525 531.9058809280396 34.68525L 547.0442562103271 34.68525Q 551.0442562103271 34.68525 551.0442562103271 38.68525L 551.0442562103271 38.68525L 551.0442562103271 92.494L 551.0442562103271 92.494z" pathFrom="M 527.9058809280396 92.494L 527.9058809280396 92.494L 551.0442562103271 92.494L 551.0442562103271 92.494L 551.0442562103271 92.494L 551.0442562103271 92.494L 551.0442562103271 92.494L 527.9058809280396 92.494" cy="34.68525" cx="627.4593820571899" j="5" val="50" barHeight="57.808749999999996" barWidth="25.138375282287598"></path><path id="SvgjsPath1401" d="M 628.4593820571899 92.494L 628.4593820571899 15.561750000000004Q 628.4593820571899 11.561750000000004 632.4593820571899 11.561750000000004L 647.5977573394775 11.561750000000004Q 651.5977573394775 11.561750000000004 651.5977573394775 15.561750000000004L 651.5977573394775 15.561750000000004L 651.5977573394775 92.494L 651.5977573394775 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 628.4593820571899 92.494L 628.4593820571899 15.561750000000004Q 628.4593820571899 11.561750000000004 632.4593820571899 11.561750000000004L 647.5977573394775 11.561750000000004Q 651.5977573394775 11.561750000000004 651.5977573394775 15.561750000000004L 651.5977573394775 15.561750000000004L 651.5977573394775 92.494L 651.5977573394775 92.494z" pathFrom="M 628.4593820571899 92.494L 628.4593820571899 92.494L 651.5977573394775 92.494L 651.5977573394775 92.494L 651.5977573394775 92.494L 651.5977573394775 92.494L 651.5977573394775 92.494L 628.4593820571899 92.494" cy="11.561750000000004" cx="728.0128831863403" j="6" val="70" barHeight="80.93225" barWidth="25.138375282287598"></path><path id="SvgjsPath1403" d="M 729.0128831863403 92.494L 729.0128831863403 27.123500000000007Q 729.0128831863403 23.123500000000007 733.0128831863403 23.123500000000007L 748.1512584686279 23.123500000000007Q 752.1512584686279 23.123500000000007 752.1512584686279 27.123500000000007L 752.1512584686279 27.123500000000007L 752.1512584686279 92.494L 752.1512584686279 92.494z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 729.0128831863403 92.494L 729.0128831863403 27.123500000000007Q 729.0128831863403 23.123500000000007 733.0128831863403 23.123500000000007L 748.1512584686279 23.123500000000007Q 752.1512584686279 23.123500000000007 752.1512584686279 27.123500000000007L 752.1512584686279 27.123500000000007L 752.1512584686279 92.494L 752.1512584686279 92.494z" pathFrom="M 729.0128831863403 92.494L 729.0128831863403 92.494L 752.1512584686279 92.494L 752.1512584686279 92.494L 752.1512584686279 92.494L 752.1512584686279 92.494L 752.1512584686279 92.494L 729.0128831863403 92.494" cy="23.123500000000007" cx="828.5663843154907" j="7" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><g id="SvgjsG1387" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1388" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1390" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1392" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1394" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1396" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1398" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1400" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1402" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1404" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1408" d="M 50.276750564575195 92.494L 50.276750564575195 38.68525Q 50.276750564575195 34.68525 54.276750564575195 34.68525L 69.4151258468628 34.68525Q 73.4151258468628 34.68525 73.4151258468628 38.68525L 73.4151258468628 38.68525L 73.4151258468628 92.494L 73.4151258468628 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 50.276750564575195 92.494L 50.276750564575195 38.68525Q 50.276750564575195 34.68525 54.276750564575195 34.68525L 69.4151258468628 34.68525Q 73.4151258468628 34.68525 73.4151258468628 38.68525L 73.4151258468628 38.68525L 73.4151258468628 92.494L 73.4151258468628 92.494z" pathFrom="M 50.276750564575195 92.494L 50.276750564575195 92.494L 73.4151258468628 92.494L 73.4151258468628 92.494L 73.4151258468628 92.494L 73.4151258468628 92.494L 73.4151258468628 92.494L 50.276750564575195 92.494" cy="34.68525" cx="149.8302516937256" j="0" val="50" barHeight="57.808749999999996" barWidth="25.138375282287598"></path><path id="SvgjsPath1410" d="M 150.8302516937256 92.494L 150.8302516937256 27.123500000000007Q 150.8302516937256 23.123500000000007 154.8302516937256 23.123500000000007L 169.96862697601318 23.123500000000007Q 173.96862697601318 23.123500000000007 173.96862697601318 27.123500000000007L 173.96862697601318 27.123500000000007L 173.96862697601318 92.494L 173.96862697601318 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 150.8302516937256 92.494L 150.8302516937256 27.123500000000007Q 150.8302516937256 23.123500000000007 154.8302516937256 23.123500000000007L 169.96862697601318 23.123500000000007Q 173.96862697601318 23.123500000000007 173.96862697601318 27.123500000000007L 173.96862697601318 27.123500000000007L 173.96862697601318 92.494L 173.96862697601318 92.494z" pathFrom="M 150.8302516937256 92.494L 150.8302516937256 92.494L 173.96862697601318 92.494L 173.96862697601318 92.494L 173.96862697601318 92.494L 173.96862697601318 92.494L 173.96862697601318 92.494L 150.8302516937256 92.494" cy="23.123500000000007" cx="250.38375282287598" j="1" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><path id="SvgjsPath1412" d="M 251.38375282287598 92.494L 251.38375282287598 15.561750000000004Q 251.38375282287598 11.561750000000004 255.38375282287598 11.561750000000004L 270.5221281051636 11.561750000000004Q 274.5221281051636 11.561750000000004 274.5221281051636 15.561750000000004L 274.5221281051636 15.561750000000004L 274.5221281051636 92.494L 274.5221281051636 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 251.38375282287598 92.494L 251.38375282287598 15.561750000000004Q 251.38375282287598 11.561750000000004 255.38375282287598 11.561750000000004L 270.5221281051636 11.561750000000004Q 274.5221281051636 11.561750000000004 274.5221281051636 15.561750000000004L 274.5221281051636 15.561750000000004L 274.5221281051636 92.494L 274.5221281051636 92.494z" pathFrom="M 251.38375282287598 92.494L 251.38375282287598 92.494L 274.5221281051636 92.494L 274.5221281051636 92.494L 274.5221281051636 92.494L 274.5221281051636 92.494L 274.5221281051636 92.494L 251.38375282287598 92.494" cy="11.561750000000004" cx="350.93725395202637" j="2" val="70" barHeight="80.93225" barWidth="25.138375282287598"></path><path id="SvgjsPath1414" d="M 351.93725395202637 92.494L 351.93725395202637 4Q 351.93725395202637 0 355.93725395202637 0L 371.07562923431396 0Q 375.07562923431396 0 375.07562923431396 4L 375.07562923431396 4L 375.07562923431396 92.494L 375.07562923431396 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 351.93725395202637 92.494L 351.93725395202637 4Q 351.93725395202637 0 355.93725395202637 0L 371.07562923431396 0Q 375.07562923431396 0 375.07562923431396 4L 375.07562923431396 4L 375.07562923431396 92.494L 375.07562923431396 92.494z" pathFrom="M 351.93725395202637 92.494L 351.93725395202637 92.494L 375.07562923431396 92.494L 375.07562923431396 92.494L 375.07562923431396 92.494L 375.07562923431396 92.494L 375.07562923431396 92.494L 351.93725395202637 92.494" cy="0" cx="451.49075508117676" j="3" val="80" barHeight="92.494" barWidth="25.138375282287598"></path><path id="SvgjsPath1416" d="M 452.49075508117676 92.494L 452.49075508117676 27.123500000000007Q 452.49075508117676 23.123500000000007 456.49075508117676 23.123500000000007L 471.62913036346436 23.123500000000007Q 475.62913036346436 23.123500000000007 475.62913036346436 27.123500000000007L 475.62913036346436 27.123500000000007L 475.62913036346436 92.494L 475.62913036346436 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 452.49075508117676 92.494L 452.49075508117676 27.123500000000007Q 452.49075508117676 23.123500000000007 456.49075508117676 23.123500000000007L 471.62913036346436 23.123500000000007Q 475.62913036346436 23.123500000000007 475.62913036346436 27.123500000000007L 475.62913036346436 27.123500000000007L 475.62913036346436 92.494L 475.62913036346436 92.494z" pathFrom="M 452.49075508117676 92.494L 452.49075508117676 92.494L 475.62913036346436 92.494L 475.62913036346436 92.494L 475.62913036346436 92.494L 475.62913036346436 92.494L 475.62913036346436 92.494L 452.49075508117676 92.494" cy="23.123500000000007" cx="552.0442562103271" j="4" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><path id="SvgjsPath1418" d="M 553.0442562103271 92.494L 553.0442562103271 38.68525Q 553.0442562103271 34.68525 557.0442562103271 34.68525L 572.1826314926147 34.68525Q 576.1826314926147 34.68525 576.1826314926147 38.68525L 576.1826314926147 38.68525L 576.1826314926147 92.494L 576.1826314926147 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 553.0442562103271 92.494L 553.0442562103271 38.68525Q 553.0442562103271 34.68525 557.0442562103271 34.68525L 572.1826314926147 34.68525Q 576.1826314926147 34.68525 576.1826314926147 38.68525L 576.1826314926147 38.68525L 576.1826314926147 92.494L 576.1826314926147 92.494z" pathFrom="M 553.0442562103271 92.494L 553.0442562103271 92.494L 576.1826314926147 92.494L 576.1826314926147 92.494L 576.1826314926147 92.494L 576.1826314926147 92.494L 576.1826314926147 92.494L 553.0442562103271 92.494" cy="34.68525" cx="652.5977573394775" j="5" val="50" barHeight="57.808749999999996" barWidth="25.138375282287598"></path><path id="SvgjsPath1420" d="M 653.5977573394775 92.494L 653.5977573394775 15.561750000000004Q 653.5977573394775 11.561750000000004 657.5977573394775 11.561750000000004L 672.7361326217651 11.561750000000004Q 676.7361326217651 11.561750000000004 676.7361326217651 15.561750000000004L 676.7361326217651 15.561750000000004L 676.7361326217651 92.494L 676.7361326217651 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 653.5977573394775 92.494L 653.5977573394775 15.561750000000004Q 653.5977573394775 11.561750000000004 657.5977573394775 11.561750000000004L 672.7361326217651 11.561750000000004Q 676.7361326217651 11.561750000000004 676.7361326217651 15.561750000000004L 676.7361326217651 15.561750000000004L 676.7361326217651 92.494L 676.7361326217651 92.494z" pathFrom="M 653.5977573394775 92.494L 653.5977573394775 92.494L 676.7361326217651 92.494L 676.7361326217651 92.494L 676.7361326217651 92.494L 676.7361326217651 92.494L 676.7361326217651 92.494L 653.5977573394775 92.494" cy="11.561750000000004" cx="753.1512584686279" j="6" val="70" barHeight="80.93225" barWidth="25.138375282287598"></path><path id="SvgjsPath1422" d="M 754.1512584686279 92.494L 754.1512584686279 27.123500000000007Q 754.1512584686279 23.123500000000007 758.1512584686279 23.123500000000007L 773.2896337509155 23.123500000000007Q 777.2896337509155 23.123500000000007 777.2896337509155 27.123500000000007L 777.2896337509155 27.123500000000007L 777.2896337509155 92.494L 777.2896337509155 92.494z" fill="rgba(228,230,239,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskdj6k14hg)" pathTo="M 754.1512584686279 92.494L 754.1512584686279 27.123500000000007Q 754.1512584686279 23.123500000000007 758.1512584686279 23.123500000000007L 773.2896337509155 23.123500000000007Q 777.2896337509155 23.123500000000007 777.2896337509155 27.123500000000007L 777.2896337509155 27.123500000000007L 777.2896337509155 92.494L 777.2896337509155 92.494z" pathFrom="M 754.1512584686279 92.494L 754.1512584686279 92.494L 777.2896337509155 92.494L 777.2896337509155 92.494L 777.2896337509155 92.494L 777.2896337509155 92.494L 777.2896337509155 92.494L 754.1512584686279 92.494" cy="23.123500000000007" cx="853.7047595977783" j="7" val="60" barHeight="69.37049999999999" barWidth="25.138375282287598"></path><g id="SvgjsG1406" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1407" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1409" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1411" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1413" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1415" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1417" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1419" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1421" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1386" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1405" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1471" x1="0" y1="0" x2="804.4280090332031" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1472" x1="0" y1="0" x2="804.4280090332031" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1473" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1474" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1475" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1449" class="apexcharts-yaxis" rel="0" transform="translate(12.571990966796875, 0)"><g id="SvgjsG1450" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1451" font-family="inherit" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1452">80</tspan><title>80</title></text><text id="SvgjsText1453" font-family="inherit" x="20" y="64.5235" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1454">60</tspan><title>60</title></text><text id="SvgjsText1455" font-family="inherit" x="20" y="87.647" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1456">40</tspan><title>40</title></text><text id="SvgjsText1457" font-family="inherit" x="20" y="110.7705" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1458">20</tspan><title>20</title></text><text id="SvgjsText1459" font-family="inherit" x="20" y="133.894" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1460">0</tspan><title>0</title></text></g></g><g id="SvgjsG1374" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 87.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(228, 230, 239);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              <!--end::Chart-->
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 858px; height: 276px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <!--end::Mixed Widget 10-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->


@endsection
