<x-app-layout>
    @push('style')
    .profile-small-title {
        width: 400px;
    }
    .profile-small-title.normal-size {
        width: 200px;
    }
    .regular {
        font-weight: 300;
        font-size: 1rem;
        color: #000;
    }
    .profile-title {
        background-color: none;
    }
    .table {
        margin: 0 20px;
    }
    .card {
        border-radius: 15px;
    }
    .profile-thumb {
        background-color: #fff;
    }
    @endpush
    <div class="container">
        <div class="row py-12">
            <div class="col-6">
                
                <div class="profile-thumb">
                    <div class="profile-title">
                        <h3 class="mb-0">Applications Summary</h3>
                    </div>
                    <table class="table" id="dataTable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Positions</th>
                            <th scope="col">Applications</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $serialNumber = 1; @endphp
                            @foreach ($open_jobs as $open_job)
                                    <tr>
                                        <th scope="row">{{$serialNumber}}</th>
                                        <td><a href="{{route('designation.jobs', str_replace('/', '-', $open_job->desg_short))}}">{{$open_job->desg_short}}</a></td>
                                        <td>{{$open_job->application_count}}</td>
                                    </tr>
                                    @php $serialNumber++; @endphp
                                @if($loop->last)
                                    @foreach ($vacancy_jobs as $vacancy_job)
                                        @if ($vacancy_job->jobs_count != 0)
                                            <tr>
                                                <th scope="row">{{$serialNumber}}</th>
                                                <td><a href="{{route('designation.jobs',str_replace('/', '-', $vacancy_job->job_description))}}">{{$vacancy_job->job_description}}</a></td>
                                                <td>{{$vacancy_job->jobs_count}}</td>
                                            </tr>
                                            @php $serialNumber++; @endphp
                                        @endif
                                        @continue
                                    @endforeach
                                @endif    
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-body p-3">
                      <div class="chart">
                        <canvas id="myChart" class="chart-canvas" height="207px"></canvas>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')

        function getTableData() {
            let labels = [];
            let data = [];
        
            // Select table rows
            let rows = document.querySelectorAll("#dataTable tbody tr");
        
            rows.forEach(row => {
                let cells = row.querySelectorAll("td");
                labels.push(cells[0].innerText); // First column as labels
                data.push(parseInt(cells[1].innerText)); // Second column as values
            });
        
            return { labels, data };
        }
        let tableData = getTableData();
    
        const ctx = document.getElementById('myChart').getContext('2d');

        // Function to generate random colors
        function getRandomColor() {
            return `#${Math.floor(Math.random() * 16777215).toString(16)}`;
        }
    
        // Generate an array of colors equal to the number of data points
        var barColors = tableData.data.map(() => getRandomColor());

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: tableData.labels,
                datasets: [{
                    label: 'Total Applications Against Each Position',
                    data: tableData.data,
                    backgroundColor: barColors,
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    @endpush

</x-app-layout>

