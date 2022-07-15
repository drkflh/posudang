<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/light-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <title>PT. BARTUH</title>
</head>

<body>

    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper">
            <div class="sidebar-header">
                <div></div>
                    <img src="assets/images/logo-fix.png" class="logo-icon">
                </div>
                <div>
                </div>
            </div>
            <!--navigation-->
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <b>
                    <div class="breadcrumb-title pe-3">PT. BARTUH</div>
                </b>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Penerimaan Luar Tab A
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <form method="post" action="{{route('posa.index')}}">   
                @csrf
            <div class="card">
                <div class="card-header py-3">
                    <div class="row g-3 align-items-center">
                    <div class="col-12 col-lg-3 col-6 col-md-3">
                            {{-- <select class="form-select">
                                <option>Supplier</option>
                                <option>Nelayan A</option>
                                <option>Nelayan B</option>
                                <option>Nelayan C</option>
                                <option>Nelayan D</option>
                                <option>Nelayan E</option>
                            </select> --}}
                        </div>
                        <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="/"  >TAB A</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/2"  >TAB B</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/3" >TAB C</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/4" >TAB D</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">

                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="card border shadow-none radius-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0" id="myTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>       </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            
                                                <tr>
                                                    <td>
                                                    <div class="input-group button-container">
                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-minus" onclick="myFunctions()">-</button>
                                                                <div class="product-box">
                                                                    <img src="assets/images/merah.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <p  class="merah mt-5" style="text-align:center">Merah</p>
                                                                </div>
                                                            <input type="number" min="0" max="" id="myText"  value="0" name="jmlh_merah"
                                                                class="quantity-field qty" hidden>
                                                                
                                                            <button type="button" value="-"
                                                                class="button-plus cart-qty-plus" onclick="myFunction()">+</button>

                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-clear" onclick="myFunctionx()">x</button><br>
                                                                <input type=" text" value="1" class="price"
                                                                disabled hidden>
                                                        </div>
                                                    </td>                                                     
                                                </tr>

                                                <tr>
                                                    <td>
                                                    <div class="input-group button-container">
                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-minus" onclick="myFunction11()">-</button>
                                                                <div class="product-box">
                                                                    <img src="assets/images/pth.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <p  class="merah mt-5" style="text-align:center">Putih</p>
                                                                </div>
                                                            <input type="number" min="0" max="" id="myText1" value="0" name="jmlh_putih"
                                                                class="quantity-field qty" hidden>
                                                                
                                                            <button type="button" value="-"
                                                                class="button-plus cart-qty-plus" onclick="myFunction1()">+</button>

                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-clear" onclick="myFunction111()">x</button><br>
                                                                
                                                            <input type=" text" value="1" class="price"
                                                                disabled hidden>
                                                                                                        
                                                        </div>
                                                    </td>                                                     
                                                </tr>

                                                <tr>
                                                    <td>
                                                    <div class="input-group button-container">
                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-minus" onclick="myFunction22()">-</button>
                                                                <div class="product-box">
                                                                    <img src="assets/images/tigr.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                <p  class="merah mt-5" style="text-align:center">Tiger</p>
                                                                </div>
                                                            <input type="number" min="0" max="" id="myText2"  value="" name="jmlh_tiger"
                                                                class="quantity-field qty" hidden>
                                                            <button type="button" value="-"
                                                                class="button-plus cart-qty-plus" onclick="myFunction2()" >+</button>
                                                            <button type="button" value="-"
                                                                class="button-minus cart-qty-clear" onclick="myFunction222()">x</button>
                                                            <input type=" text" value="1" class="price"
                                                                disabled hidden>
                                                                
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div>                                            
                                           
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>                                            
                                            <p class="mb-0">Merah</p>
                                        </div>
                                        <div class="ms-auto">
                                        <h5 class="mb-0" id="demo">0</h5>

                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div>                                            
                                            <p class="mb-0">Putih</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0" id="demo1">0</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div>                                            
                                            <p class="mb-0">Tiger</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0"  id="demo2">0</h5>
                                        </div>
                                    </div>
                                   
                                    <div class="d-flex align-items-center mb-3">
                                        <div>                                            
                                            <p class="mb-0">Total</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0" name="total" id="total">0</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning text-white cart-qty-save"><i
                                        class="bi bi-printer-fill"></i> Print</button>
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>

                        </div>

                    </div>
                    <!--end row-->

                </div>
            </div>
            </form>

        </main>
        <!--end page main-->

        

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->


        <!--end switcher-->

    </div>


    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="{{ asset('assets/js/shop.js') }}"></script>


</body>

</html>
