@include('include.hader')



        <h2>Statistics</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">100</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Books</h5>
                        <p class="card-text">250</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Active Loans</h5>
                        <p class="card-text">30</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Recent Activities</h2>
        <ul class="list-group">
            <li class="list-group-item">User John Doe registered.</li>
            <li class="list-group-item">Book "Learn Laravel" added.</li>
            <li class="list-group-item">User Jane Smith borrowed "PHP for Beginners".</li>
        </ul>
    </div>
@include('include.footer')
