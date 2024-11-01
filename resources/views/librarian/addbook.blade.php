@include('include.hader')
<div class="container">
    <h2>Add New Book</h2>
    <form action="/books" method="POST"> <!-- Update with your route -->
        @csrf
        <div class="form-group">
            <label for="bookTitle">Title</label>
            <input type="text" class="form-control" id="bookTitle" name="title" required>
        </div>
        <div class="form-group">
            <label for="bookAuthor">Author</label>
            <select class="form-control" id="bookAuthor" name="author_id" required>
                <option value="">Select Author</option>
                <!-- Dynamically load authors here -->
                <option value="1">Author A</option>
                <option value="2">Author B</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bookGenre">Genre</label>
            <select class="form-control" id="bookGenre" name="genre_id" required>
                <option value="">Select Genre</option>
                <!-- Dynamically load genres here -->
                <option value="1">Fiction</option>
                <option value="2">Non-Fiction</option>
            </select>
        </div>
        <div class="form-group">
            <label for="publishedYear">Published Year</label>
            <input type="number" class="form-control" id="publishedYear" name="published_year" min="1500" max="2023" required>
        </div>
        <div class="form-group">
            <label for="totalCopies">Total Copies</label>
            <input type="number" class="form-control" id="totalCopies" name="total_copies" min="1" required>
        </div>
        <div class="form-group">
            <label for="isbnNumber">ISBN Number</label>
            <input type="text" class="form-control" id="isbnNumber" name="isbn" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
        <a href="/books" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@include('include.footer')
