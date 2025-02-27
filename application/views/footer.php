<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Tocly.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets_back/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets_back/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets_back/css/bootstrap-dark.min.css" data-appStyle="assets_back/css/app-dark.min.html">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets_back/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets_back/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets_back/libs/jquery/jquery.min.js"></script>
        <script src="assets_back/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets_back/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets_back/libs/simplebar/simplebar.min.js"></script>
        <script src="assets_back/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- apexcharts -->
        <script src="assets_back/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets_back/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets_back/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="assets_back/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets_back/js/app.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    </body>
</html>

<script>
    function get_categories(cate_id){

        $.ajax({
        url: "<?php echo base_url('Category/get_sub_cate'); ?>",
        method : "post",
        data: {cate_id:cate_id },
        success: function (data) {
            // alert(data);
            $('.subcat').html(data);
        }

    });
    }
</script>