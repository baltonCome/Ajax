<main class="row justify-content-center">

    <section class="col-12 col-md-10 col-lg-6 row justify-content-center">
        <div class="h3" id="title">Add Vehicle</div>
        <form class="justify-contents-center" method="post" id="add_form"> 
            <div class="form-group my-2">
                <input placeholder="Brand" type="text" name="brand" id="brand" class="form-control" >
            </div>

            <div class="form-group my-2">
                <input placeholder="Model" type="text" name="model" id="model" class="form-control">
            </div>
            <div class="form-group">
                <input type="button" value="Save" class="btn btn-sm btn-success" id="add">
                <input type="button" value="Update" class="btn btn-sm btn-success" id="update">
                <!--<button type="submit" class = "btn btn-sm btn-success" id="add">Save</button>--->
            </div>
        </form>
    </section>

    <section class="search">
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <form class="card card-sm">
                        <div class="row align-items-center">
                            <div class="col">
                                <input class="form-control form-control-borderless" type="search" placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-success" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="col-12 col-md-10 col-lg-9">
        <p class="h3 text-center">Vehicles List</p>
        <table class = "table text-center">
            <thead class ="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id= "body">
            </tbody>
        </table>
    </section>
</main>