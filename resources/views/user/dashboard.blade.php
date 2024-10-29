@include('include.hader')


<h2>Your Borrowed Books</h2>
<ul class="list-group mb-4">
    <li class="list-group-item">"The Great Gatsby" - Due on: 2024-10-30</li>
    <li class="list-group-item">"1984" - Due on: 2024-11-05</li>
</ul>

<h2>Available Books</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The Catcher in the Rye</td>
            <td>J.D. Salinger</td>
            <td><button class="btn btn-success">Borrow</button></td>
        </tr>
        <tr>
            <td>To Kill a Mockingbird</td>
            <td>Harper Lee</td>
            <td><button class="btn btn-success">Borrow</button></td>
        </tr>
        <tr>
            <td>Pride and Prejudice</td>
            <td>Jane Austen</td>
            <td><button class="btn btn-success">Borrow</button></td>
        </tr>
    </tbody>
</table>
</div>
@include('include.footer')
