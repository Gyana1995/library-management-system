@include('include.hader')
<div class="mb-4">
    <a href="/add-book" class="btn btn-primary">Add New Book</a>
    <a href="/add-auth-genra" class="btn btn-primary">Add New Author</a>
    <a href="/add-auth-genra#gener" class="btn btn-primary">Add New Genre</a>
</div>

<!-- Book Search and Filter Form -->
<form class="form-inline mb-4">
    <input type="text" class="form-control mr-2" placeholder="Search by Title">
    <select class="form-control mr-2">
        <option value="">Filter by Genre</option>
        <!-- Dynamically add genre options here -->
        <option value="1">Fiction</option>
        <option value="2">Non-Fiction</option>
    </select>
    <select class="form-control mr-2">
        <option value="">Filter by Author</option>
        <!-- Dynamically add author options here -->
        <option value="1">Author A</option>
        <option value="2">Author B</option>
    </select>
    <button type="submit" class="btn btn-secondary">Search</button>
</form>

<!-- Books Table -->
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Published Year</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example row; dynamically generate rows for each book -->
        <tr>
            <td>The Great Gatsby</td>
            <td>F. Scott Fitzgerald</td>
            <td>Fiction</td>
            <td>1925</td>
            <td>
                <a href="/books/edit/1" class="btn btn-sm btn-warning">Edit</a>
                <form action="/books/1" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <!-- Repeat for more books -->
    </tbody>
</table>

<!-- Note: The pages for /books/create, /authors/create, and /genres/create should be created separately -->



@include('include.footer')
