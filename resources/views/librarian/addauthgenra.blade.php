@include('include.hader')<div class="container">
    <div class="container">
        <h2>Master Data Entry</h2>

        <!-- Author Entry Form -->
        <div class="mb-5">
            <h4>Add New Author</h4>
            <form method="POST"> <!-- Update with your route -->
                @csrf
                <div class="form-group">
                    <label for="authorName">Author Name</label>
                    <input type="text" class="form-control" id="authorName" name="name">
                    <input type="hidden" value="1" name="author">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="birthdate">
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality">
                </div>
                <div class="form-group">
                    <label for="biography">Biography</label>
                    <textarea class="form-control" id="biography" name="biography" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Author</button>
                <a href="/add-auth-genra" class="btn btn-secondary">Cancel</a>
            </form>
        </div>

        <!-- Genre Entry Form -->
        <div id="gener">
            <h4>Add New Genre</h4>
            <form method="POST"> <!-- Update with your route -->
                @csrf
                <div class="form-group">
                    <label for="genreName">Genre Name</label>
                    <input type="text" class="form-control" id="genreName" name="name">
                    <input type="hidden" value="0" name="author">
                </div>
                <button type="submit" class="btn btn-primary">Add Genre</button>
                <a href="/add-auth-genra#gener" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
    @include('include.footer')
