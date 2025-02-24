<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm" style="border-radius: 20px;">
                <div class="profile-thumb">
                    <div class="profile-title" style="background: #294a70;">
                        <h4 class="mb-0" style="color: #fff;">All Job Applications</h4>
                    </div>
                    <div class="profile-body">
                        <table id="applicants-data" class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Applicant Name</th>
                                <th scope="col">Position Applied</th>
                                <th scope="col">Application Date</th>
                                <th scope="col">Profile Completion</th>
                                <th scope="col">View Application</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td scope="row">{{$job->app_no}}</td>
                                        <td>{{$job->app_name}}</td>
                                        <td>
                                            @if ($job->designation?->desg_short != null)
                                               {{$job->designation->desg_short}} 
                                            @elseif($job->vacancy->job_description != null)
                                                {{$job->vacancy->job_description}}
                                            @else 
                                                N/A  
                                            @endif
                                        </td>
                                        <td>{{date('d-m-Y', strtotime($job->created_at))}}</td>
                                        @if ($job->is_profile_comp == 'N')
                                            <td><span class="badge bg-warning text-dark">No</span></td> 
                                            <td>
                                                <a href="{{route('profile', $job->app_no)}}" class="services-price view-button" id="view-button">
                                                    <div class="services-price-wrap ms-auto">
                                                        <p class="services-price-text mb-0">View</p>
                                                        <div class="services-price-overlay"></div>
                                                    </div>
                                                </a>
                                            </td>
                                        @else
                                            <td><span class="badge bg-success">Yes</span></td>
                                            <td>
                                                <a href="{{route('profile', $job->app_no)}}" class="services-price">
                                                    <div class="services-price-wrap ms-auto">
                                                        <p class="services-price-text mb-0">View</p>
                                                        <div class="services-price-overlay"></div>
                                                    </div>
                                                </a>
                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>



    $(document).ready(function () {
        const viewBtn = document.getElementById('view-button');

        document.querySelectorAll('.view-button').forEach(function (viewBtn){
            viewBtn.addEventListener('click', function (event){
                event.preventDefault();
                Swal.fire({
                    title: "Incomplete Profile",
                    text: "Are you sure you want to open an incomplete profile?",
                    icon: "warning",
                    showCancelButton: true
                }).then((result) => {
                    if (result.isConfirmed){
                        window.location.href = viewBtn.href;
                    }
                })
            });
        });
        let table = $('#applicants-data').DataTable({
            responsive: true,
            order: 'desc',
            paging: true,
            searching: true, // Ensure searching is enabled
            info: true,
        });

        // Check if the search event is being triggered
        $('#dt-search-0').on('keyup', function () {
            console.log("Search Input Value:", this.value);
            table.search(this.value).draw();
        });
    });

</script>
