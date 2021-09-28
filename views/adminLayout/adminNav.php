
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == $routes->get('admin')->getPath()){echo 'active';}; ?>" aria-current="page" href="<?php echo $routes->get('admin')->getPath() ?>">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapse-link d-flex justify-content-between" href="#" data-bs-toggle="collapse" data-bs-target="#postLink" aria-expanded="false" aria-controls="postLink">
                    <span>
                        <span data-feather="file"></span>
                        Posts
                    </span>
                    <span data-feather="chevron-down"></span>
                </a>
                <ul class="collapse" id="postLink">
                    <li>
                        <a href="#">Post1</a>
                    </li>
                    <li>
                        <a href="#">Post2</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == $routes->get('category')->getPath()){echo 'active';}; ?>" href="<?php echo $routes->get('category')->getPath() ?>">
                    <span data-feather="file-text"></span>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Comments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapse-link d-flex justify-content-between" href="#" data-bs-toggle="collapse" data-bs-target="#userLink" aria-expanded="false" aria-controls="userLink">
                    <span>
                        <span data-feather="users"></span>
                        Users
                    </span>
                    <span data-feather="chevron-down"></span>
                </a>
                <ul class="collapse" id="userLink">
                    <li>
                        <a href="#">User1</a>
                    </li>
                    <li>
                        <a href="#">User2</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Profile
                </a>
            </li>
        </ul>

    </div>
</nav>
