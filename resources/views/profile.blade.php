@extends('app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile-thumb">
                    <div class="profile-title">
                        <h4 class="mb-0">Application Status</h4>
                    </div>

                    <div class="profile-body">
                        <p>
                            <span class="profile-small-title">Status</span> 
                            <span id="selection-status">  
                                @if($job->status == 'C')
                                    Cancelled
                                @elseif($job->status == NULL)
                                    Pending Review
                                @elseif($job->status == 'S')
                                    Shortlisted
                                @endif
                            </span>
                        </p>
                        <p>
                            <span class="profile-small-title">Selection</span> 
                            <span style="display: inline-block;">
                                <select id="selection" class="form-select" aria-label="Default select example">
                                    <option value="" disabled selected>Change the Status</option>
                                    <option value="S">Select the Applicant</option>
                                    <option value="">Keep it in Job Bank</option>
                                    <option value="C">Reject the Applicant</option>
                                </select>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>    
            {{-- <div class="col-lg-4 col-md-6 col-12 ps-lg-0">
                <div class="contact-info d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">Applicant Name</strong>

                    <p class="mb-2">{{ $job->app_name }}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Father Name</strong>

                    <p>{{$job->f_name}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Mobile Number</strong>

                    <p>{{$job->mbl_no}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Email Address</strong>

                    <p>{{$job->email}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Date of Birth</strong>

                    <p class="mb-0">{{date('d-m-Y', strtotime($job->dob))}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CNIC</strong>

                    <p class="mb-0">{{$job->cnic}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CITY</strong>

                    <p class="mb-0">{{$job->city}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">ADDRESS</strong>

                    <p class="mb-0">{{$job->per_adrr}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 ps-lg-0">
                <div class="contact-info d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">Application Date</strong>

                    <p class="mb-2">{{ date('d-m-Y', strtotime($job->created_at)) }}</p>

                    <strong class="site-footer-title d-block mb-3">Application For</strong>

                    <p class="mb-2">{{ $job->designation?->desg_short ?? 'CV Bank' }}</p>

                    <strong class="site-footer-title d-block mb-3">Expected Salary</strong>

                    <p class="mb-2">{{ $job->expt_sal }}</p>

                    <strong class="site-footer-title d-block mb-3">Last Salary</strong>

                    <p class="mb-2">{{ number_format($job->last_sal) }}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Religion</strong>

                    <p>{{$job->app_religion}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Sect</strong>

                    <p>{{$job->app_sect}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">cast</strong>

                    <p class="mb-0">{{$job->app_cast}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CNIC</strong>

                    <p class="mb-0">{{$job->cnic}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CITY</strong>

                    <p class="mb-0">{{$job->city}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 ps-lg-0">
                <div class="contact-info d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">PMDC Number</strong>

                    <p class="mb-2">{{$job->pmdc_no ?? 'N/A' }}</p>

                    <strong class="site-footer-title d-block mb-3">Profile Completion</strong>

                    <p class="mb-2">{{ $job->is_profile_comp == 'Y' ? 'Yes' : 'No' }}</p>

                    <strong class="site-footer-title d-block mb-3">Application Status</strong>

                    <p class="mb-2">
                        @if($job->status == 'C')
                            Closed
                        @elseif($job->status == NULL)
                            Open
                        @elseif($job->status == 'S')
                            Shortlisted
                        @endif
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="row mt-5">
            <div class="col-lg-6 col-12">
                <div class="services-thumb">
                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                        <h3 class="mb-0">Personal Data</h3>
                    </div>
                    <strong class="site-footer-title d-block mb-3">Applicant Name</strong>

                    <p class="mb-2">{{ $job->app_name }}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Father Name</strong>

                    <p>{{$job->f_name}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Mobile Number</strong>

                    <p>{{$job->mbl_no}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Email Address</strong>

                    <p>{{$job->email}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Date of Birth</strong>

                    <p class="mb-0">{{date('d-m-Y', strtotime($job->dob))}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CNIC</strong>

                    <p class="mb-0">{{$job->cnic}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">CITY</strong>

                    <p class="mb-0">{{$job->city}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">ADDRESS</strong>

                    <p class="mb-0">{{$job->per_adrr}}</p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Religion</strong>

                    <p>{{$job->app_religion}}</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="services-thumb">
                    <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                        <h3 class="mb-0">Application Data</h3>
                    </div>
                    <strong class="site-footer-title d-block mb-3">Application Number</strong>

                    <p class="mb-2">{{ $job->app_no }}</p>

                    <strong class="site-footer-title d-block mb-3">Application Date</strong>

                    <p class="mb-2">{{ date('d-m-Y', strtotime($job->created_at)) }}</p>

                    <strong class="site-footer-title d-block mb-3">Application For</strong>

                    <p class="mb-2">{{ $job->designation?->desg_short ?? 'CV Bank' }}</p>

                    <strong class="site-footer-title d-block mb-3">Expected Salary</strong>

                    <p class="mb-2">{{ $job->expt_sal }}</p>

                    <strong class="site-footer-title d-block mb-3">Last Salary</strong>

                    <p class="mb-2">{{ number_format($job->last_sal) }}</p>

                    <strong class="site-footer-title d-block mb-3">PMDC Number</strong>

                    <p class="mb-2">{{$job->pmdc_no ?? 'N/A' }}</p>

                    <strong class="site-footer-title d-block mb-3">Profile Completion</strong>

                    <p class="mb-2">{{ $job->is_profile_comp == 'Y' ? 'Yes' : 'No' }}</p>

                    {{-- <strong class="site-footer-title d-block mb-3">Application Status</strong>

                    <p class="mb-2">
                        @if($job->status == 'C')
                            Cancelled
                        @elseif($job->status == NULL)
                            Review Pending
                        @elseif($job->status == 'S')
                            Shortlisted
                        @endif
                    </p> --}}
                    <div class="d-flex flex-wrap align-items-center border-top border-bottom mb-4 mt-4">
                        <h5 class="mt-2 d-block">Applicant Documents</h5>
                    </div>
                    <p class="mb-1" style="display: inline-block;">
                        <a class="custom-btn btn" href="{{ asset('applications/'.$job->app_no.'/'.$job->cv_id) }}" target="_blank">View CV</a>  
                    </p>
                    <p class="mb-1" style="display: inline-block;">
                        <a class="custom-btn btn" href="{{ asset('applications/'.$job->app_no.'/'.$job->cnic_front) }}" target="_blank">CNIC Front</a>  
                    </p>
                    <p class="mb-1" style="display: inline-block;">
                        <a class="custom-btn btn" href="{{ asset('applications/'.$job->app_no.'/'.$job->cnic_back) }}" target="_blank">CNIC Back</a>
                    </p>
                    <div class="d-flex flex-wrap align-items-center border-top border-bottom mb-4 mt-4">
                        <h5 class="mt-2 d-block">Educational Documents</h5>
                    </div>
                    @if ($job->education)
                        @foreach ($job->education as $edu)
                            <p class="mb-1" style="display: inline-block;">
                                <a data-gallery="manual" class="custom-btn btn" href="{{ asset('applications/'.$edu->app_no.'/'.$edu->edu_doc) }}">{{$edu->edu_dgr_name}} Degree</a>  
                            </p>
                        @endforeach
                    @else 
                        <p class="mb-2">No Record Found.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-auto" style="margin: 0 auto;">
                <a href="{{ route('dashboard') }}" class="custom-btn btn back-btn">Back To Dashboard</a>
            </div>
        </div>
    </div>

@endsection

@push('script')

document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById("selection");
    const statusLabel = document.getElementById('selection-status');

    selectElement.addEventListener("change", function () {
        if (selectElement.value === 'S') {
            Swal.fire({
                title: "Are you sure?",
                text: "You want to select the applicant!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#294a70",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm!"
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url: '{{route('change.status', ['app_no' => $job->app_no])}}',
                        type: 'POST',
                        data: {
                            _token: '{{csrf_token()}}',
                            status: 'S'
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    title: "Status Changed!",
                                    text: "The applicant is selected!",
                                    icon: "success"
                                })
                                statusLabel.innerHTML = 'Shortlisted';
                            }
                            else {
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occured while chnaging the status.",
                                    icon: "error"
                                })
                            }
                        },
                        error: function () {
                            Swal.fire({
                                title: "Error!",
                                text: "An error occured while chnaging the status.",
                                icon: "error"
                            });
                        }
                    })
                }
            });
        } 
        else if (selectElement.value === 'C') {
            Swal.fire({
                title: "Are you sure?",
                text: "You want to reject the applicant!",
                icon: "warning",               
                showCancelButton: true,
                confirmButtonColor: "#294a70",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm!"
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url: '{{route('change.status', ['app_no' => $job->app_no])}}',
                        type: 'POST',
                        data: {
                            _token: '{{csrf_token()}}',
                            status: 'C'
                        },
                        success: function (response) {
                            if(response.success) {
                                Swal.fire({
                                    title: "Status Changed!",
                                    text: "The applicant has been rejected.",
                                    icon: "success"
                                })
                                statusLabel.innerHTML = 'Cancelled';
                            }
                            else {
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occured while changing the status.",
                                    icon: "error"
                                })
                            }
                        },
                        error: function(){
                            Swal.fire({
                                title: "Error!",
                                text: "An error occured while changing the status.",
                                icon: "error"
                            })
                        }
                    })
                }
            });
        } 
        else {
            Swal.fire({
                title: "Are you sure?",
                text: "You want to keep the applicant on hold!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#294a70",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm!"
            }).then(result => {
                if(result.isConfirmed){
                    $.ajax({
                        url: '{{route('change.status', ['app_no' => $job->app_no])}}',
                        type: 'POST',
                        data: {
                            _token: '{{csrf_token()}}',
                            status: ""
                        },
                        success: function (response) {
                            if(response.success){
                                Swal.fire({
                                    title: "Status Changed!",
                                    text: "The status of the application changed successfully.",
                                    icon: "success"
                                })   
                                statusLabel.innerHTML = 'Pending Review';
                            }
                            else {
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occured while changing the status.",
                                    icon: "error"
                                })
                            } 
                        },
                        error: function(){
                            Swal.fire({
                                title: "Error!",
                                text: "An error occured while changing the status.",
                                icon: "error"
                            })
                        }
                    })
                }
            });
        }
    });
});



$(document).ready(function () {
    $('[data-gallery=manual]').click(function (e) {
        e.preventDefault();

        var items = [];
        var clickedIndex = 0;

        $('[data-gallery=manual]').each(function (index) {
            let src = $(this).attr('href');
            items.push({
                src: src
            });

            if ($(this).is(e.currentTarget)) {
                clickedIndex = index;
            }
        });

        if (items.length === 0) {
            console.error('No items found for the gallery.');
            return;
        }

        if (clickedIndex < 0 || clickedIndex >= items.length) {
            console.error('Clicked index is out of bounds.');
            return;
        }

        let viewer = new PhotoViewer(items, {
            index: clickedIndex,
            footerToolbar: [
                'zoomIn',
                'zoomOut',
                'prev',
                'next',
                'fullscreen',
                'download',
                'close'
            ],
            customButtons: {
                download: {
                    text: '<img src="{{ asset('icons/download.png') }}" style="width: 20px; height: 20px;"/>',
                    title: 'Download Image',
                    click: function (context) {
                        // Fallback to options.index if getIndex is not available
                        const currentIndex = context.index ?? context.options.index;
                        const currentItem = items[currentIndex];

                        if (!currentItem) {
                            console.error('Invalid item at index:', currentIndex);
                            return;
                        }

                        const imageUrl = currentItem.src;

                        const a = document.createElement('a');
                        a.href = imageUrl;
                        a.download = imageUrl.split('/').pop();
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    }
                }
            }
        });
    });
});


@endpush