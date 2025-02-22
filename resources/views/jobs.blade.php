@extends('app')
@section('content')
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile-thumb">
                        <div class="profile-title" style="background: #294a70;">
                            <h4 class="mb-0" style="color: #fff;">All Job Applications</h4>
                        </div>
                        <div class="profile-body">
                            <table id="applicants-data" class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Sr#</th>
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
                                            <td>{{ $job->designation?->desg_short ?? 'N/A' }}</td>
                                            <td>{{date('d-m-Y', strtotime($job->created_at))}}</td>
                                            @if ($job->is_profile_comp == 'N')
                                                <td><span class="badge bg-warning text-dark">No</span></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="services-price">
                                                        <div class="services-price-wrap ms-auto">
                                                            <p class="services-price-text mb-0">View</p>
                                                            <div class="services-price-overlay"></div>
                                                        </div>
                                                    </a>
                                                </td>    
                                            @else
                                                <td><span class="badge bg-success">Yes</span></td>
                                                <td>
                                                    <a href="{{route('jobs.show', $job->app_no)}}" class="services-price">
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
    </section>

    <script>
        $(document).ready(function () {
        // Check if DataTable is initialized
            console.log("Initializing DataTable...");
            
            let table = $('#applicants-data').DataTable({
                responsive: true,
                order: 'desc',
                paging: true,
                searching: true, // Ensure searching is enabled
                info: true,
            });

            console.log("DataTable initialized:", table);

            // Check if the search event is being triggered
            $('#dt-search-0').on('keyup', function () {
                console.log("Search Input Value:", this.value);
                table.search(this.value).draw();
            });
        });

    </script>

@endsection