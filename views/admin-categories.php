<?php include "adminLayout/adminHeader.php" ?>

    <div class="container-fluid">
        <div class="row">

            <?php include "adminLayout/adminNav.php" ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form method="post">
                            <div class="mb-3">
                                <label for="categoryInput" class="form-label">Add category</label>
                                <input type="text" name="categoryName" class="form-control" id="categoryInput" aria-describedby="showedAlert">
                                <div id="showedAlert" class="form-text"><?php if(isset($showed_alert)){ echo $showed_alert; }; ?></div>
                            </div>
                            <button type="submit" name="catSubmit" class="btn btn-primary">Submit</button>
                        </form>
                        <br>
                        <form method="post">
                            <div class="mb-3">
                                <label for="updatedCategoryInput" class="form-label">Update category</label>
                                <input type="text" name="updatedCategoryInput" value="<?php if (isset($selected_cat)){ echo $selected_cat->getCatName(); }; ?>" class="form-control" id="updatedCategoryInput" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"><?php if(isset($update_alert)){ echo $update_alert; }; ?></div>
                            </div>
                            <button type="submit" name="catUpdate" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-striped table-hover table-primary ">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr>
                                    <td><?php echo $category["cat_id"] ?></td>
                                    <td><?php echo $category["cat_name"] ?></td>
                                    <td>
                                        <a href="<?php echo str_replace('{id}', $category["cat_id"], $routes->get('categoryDelete')->getPath()) ?>" ><span data-feather="trash-2"></span></a>
                                        <a href="<?php echo str_replace('{id}', $category["cat_id"], $routes->get('categoryUpdate')->getPath()) ?>" ><span data-feather="edit"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

<?php include "adminLayout/adminFooter.php" ?>