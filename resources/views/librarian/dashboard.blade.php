@include('include.hader')



<h2>Statistics</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Books</h5>
                <p class="card-text">150</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Borrowed Books</h5>
                <p class="card-text">50</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Active Users</h5>
                <p class="card-text">80</p>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Recent Borrowing Activities</h2>
<ul class="list-group">
    <li class="list-group-item">User John Doe borrowed "The Great Gatsby".</li>
    <li class="list-group-item">User Jane Smith returned "1984".</li>
    <li class="list-group-item">User Robert Brown borrowed "To Kill a Mockingbird".</li>
</ul>
</div>
@include('include.footer')
