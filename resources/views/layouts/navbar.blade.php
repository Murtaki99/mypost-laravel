<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand ml-auto" href="/">My Post</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ ($title === "Home")? 'active':'' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ ($title === "About")? 'active':'' }}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{ ($title === "Posts")? 'active':'' }}">
                <a class="nav-link" href="/posts">All Posts</a>
            </li>
             <li class="nav-item {{ ($title === "Categories")? 'active':'' }}">
                 <a class="nav-link" href="/categories">Categories</a>
             </li>
        </ul>
    </div>
</nav>
