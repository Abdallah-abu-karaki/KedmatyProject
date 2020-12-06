@extends('layouts.adminSide')


@section('content')

    <!-- statistics -->
    <div class="container mt-3">
        <div class="row">
            <h2 class=" col-12 text-capitalize custom-display-medium text-center text-dark-blue">our statistics</h2>
        </div>
        <div class="row p-4 mb-3 mt-2">
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg-dark-blue p-2 media-middle">
                                <i class="fa fa-user text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4> Users </h4>
                                <span class="text-muted">Total Users</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">1,22,356</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg_pink p-2 media-middle">
                                <i class="fa fa-edit text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Posts</h4>
                                <span  class="text-muted">Total Users Posts</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">18,000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg_pink p-2 media-middle">
                                <i class="fa fa-bell text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Follows </h4>
                                <span  class="text-muted">Total Subscribers</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">90,754</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg-dark-blue p-2 media-middle">
                                <i class="fa fa-shopping-bag text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Sales </h4>
                                <span  class="text-muted">Total Sales</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">100,745</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. statistics -->

    <!-- edit slider -->

    <div class="container-fluid bg-light">
        <div class="container  my-5 px-5 pb-3 rounded">
            <div class="row rounded-bottom ">
                <h2 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium mb-4">edit home slider</h2>
                <p class="col-12 text-center text-muted font-italic">Choose 3 photos and write caption for each photo to edit the slider :</p>
            </div>

            <form action="/home-admin.php">
                <div class="row">
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">1st photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" id="photo1" name="filename" accept="image/png, image/jpeg" class="custom-file-input overflow-hidden">
                            <label class="custom-file-label overflow-hidden" for="photo1">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption1" for="photo1" name="first-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">2nd  photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input overflow-hidden" id="photo2" name="filename" accept="image/png, image/jpeg">
                            <label class="custom-file-label overflow-hidden" for="photo2">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption2" for="photo2" name="second-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">3rd photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input overflow-hidden" id="photo3" name="filename" accept="image/png, image/jpeg">
                            <label class="custom-file-label overflow-hidden" for="photo3">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption3" for="photo3" name="third-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                </div>
                <div class="row mt-3 justify-content-end">
                    <button type="reset" class="btn btn-primary bg-dark-blue border-secondary px-3 py-2 mx-2" ><i class="fa fa-times" style="font-size:18px"></i> cancel captions </button>
                    <button type="submit" class="btn btn-primary bg_pink border-secondary px-3 py-2 mx-2" id="save all"><i class="fa fa-check" style="font-size:18px"></i> Save </button>
                </div>
            </form>

            <script>
                // Add the following code if you want the name of the file appear on select (for input type file)
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>

        </div>
    </div>
    <!-- /. edit slider -->


    <div class="container-fluid my-3 p-3">
        <!-- resent admins -->
        <div class="row mb-2">
            <h3 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium">recent joined admins(<a href="#" class="text_pink" style="font-size: smaller;">Edit</a>)</h3>
        </div>
        <div class="row mb-3 justify-content-center p-4">
            <div class="col-md-3 my-1">
                <div class="card mb-2 h-100">
                    <img class="card-img-top" style="height: 200px;" src="https://media.istockphoto.com/photos/smiling-man-outdoors-in-the-city-picture-id1179420343?k=6&m=1179420343&s=612x612&w=0&h=y7GrwxrbixTWvJfaeiu55rWXMGYr6oP583uzJJ4-Kis=" alt="admin 1">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">admin name</h5>
                        <p class="card-text">admin1@domain.com</p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card mb-2 h-100">
                    <img class="card-img-top" style="height: 200px;" src="https://media.istockphoto.com/photos/portrait-of-casual-smiling-man-picture-id1138562953?k=6&m=1138562953&s=612x612&w=0&h=FzSLV-RtbFTz7z_VCbmuSCfEWpd4kYbnPxZ5d_mdDgg=" alt="admin 2">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">admin name</h5>
                        <p class="card-text">admin1@domain.com</p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card mb-2 h-100">
                    <img style="height: 200px;" class="card-img-top" src="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f711d3badb2322f10cfbefb%2F0x0.jpg%3FcropX1%3D0%26cropX2%3D2700%26cropY1%3D395%26cropY2%3D2420"
                         alt="admin 3">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">admin name</h5>
                        <p class="card-text">admin1@domain.com</p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card mb-2 h-100">
                    <img style="height: 200px;" class="card-img-top" src="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f711d3badb2322f10cfbefb%2F0x0.jpg%3FcropX1%3D0%26cropX2%3D2700%26cropY1%3D395%26cropY2%3D2420"
                         alt="admin 3">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">admin name</h5>
                        <p class="card-text">admin1@domain.com</p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>

        </div>
        <div class="row col-12 mt-1 justify-content-end mb-2">
            <button class="btn bg_pink text-white px-4 py-2 custom-display-small border-secondary" id="see-more">See more</button>
        </div>
    </div>
    <!-- /. resent admins -->

    <!-- resent users -->
    <div class="container-fluid bg-light pb-5">
        <div class="row">
            <h3 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium">recent joined users(<a href="#" class="text_pink" style="font-size: smaller;">Edit</a>)</h3>
        </div>
        <div class="row mb-3 justify-content-center p-4 bg-light">
            <div class="col-md-3 my-1">
                <div class="card h-100">
                    <img style="height: 200px;" src="https://cdn.sixtyandme.com/wp-content/uploads/2017/03/Sixty-and-Me_Which-Old-Woman-Will-You-Be-How-to-Become-the-Nice-One.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">user name</h5>
                        <p class="card-text">
                            user1@domain.com <br>
                            (111) 122-445-333<br>
                            address(street-city-contry)
                        </p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-1">
                <div class="card h-100">
                    <img style="height: 200px;" src="https://static.wikia.nocookie.net/dreamfiction/images/d/db/TanyaKasis.jpg/revision/latest?cb=20181031054946" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">user name</h5>
                        <p class="card-text">
                            user1@domain.com <br>
                            (111) 122-445-333<br>
                            address(street-city-contry)
                        </p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card h-100">
                    <img style="height: 200px;" src="https://media.istockphoto.com/photos/smiling-man-outdoors-in-the-city-picture-id1179420343?k=6&m=1179420343&s=612x612&w=0&h=y7GrwxrbixTWvJfaeiu55rWXMGYr6oP583uzJJ4-Kis=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">user name</h5>
                        <p class="card-text">
                            user1@domain.com <br>
                            (111) 122-445-333<br>
                            address(street-city-contry)
                        </p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-1">
                <div class="card h-100">
                    <img style="height: 200px;" src="https://media.istockphoto.com/photos/smiling-man-outdoors-in-the-city-picture-id1179420343?k=6&m=1179420343&s=612x612&w=0&h=y7GrwxrbixTWvJfaeiu55rWXMGYr6oP583uzJJ4-Kis=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">user name</h5>
                        <p class="card-text">
                            user1@domain.com <br>
                            (111) 122-445-333<br>
                            address(street-city-contry)
                        </p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in 10/10/2020</small>
                    </div>
                </div>
            </div>

@endsection
