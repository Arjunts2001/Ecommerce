
<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        <base href="<?=base_url()?>">

        <?php $this->load->view('links'); ?>



    </head>
    <?php $this->load->view('header'); ?>


            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <?php if($this->session->flashdata('succMsg')){ ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('succMsg'); ?>   
                            </div>
                        <?php } ?>

                        <?php if($this->session->flashdata('errMsg')){ ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('errMsg'); ?>   
                            </div>
                        <?php } ?>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex pb-0">
                                    <h4 class="card-title mb-0 flex-grow-1">Product</h4>
                                        <div class="text-center mt-4"><a href="javascript: void(0);" 
                                        class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div> 
                                                
                                </div>
                                <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <?= form_open_multipart(); ?>                                            
                                            <div class="row">

                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" readonly value="<?= set_value('pro_id',$pro_id)?>" id="" name="pro_id" placeholder="Product ID">
                                                        <label >Product ID</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('pro_id'); ?></medium>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" onchange="get_categories(this.value)" name="category" >
                                                            <option value="" selected> select </option>
                                                            <?php foreach($categories as $value){ ?>
                                                                <option value="<?=$value->cate_id ?>" ><?=$value->cate_name ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <label for="floatingSelectGrid">Category</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('category'); ?></medium>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select subcat" id="floatingSelectGrid" name="sub_category" >
                                                            <option value="" selected> select </option>

                                                        </select>
                                                        <label for="floatingSelectGrid">Sub Category</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('sub_category'); ?></medium>
                                                </div>


                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="pro_name" placeholder="product name ">
                                                        <label >Product Name</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('pro_name'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="brand" placeholder="brand ">
                                                        <label >Brand</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('brand'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="featured" placeholder="Featured">
                                                        <option value="" selected>select </option>
                                                            <option value="1">Deal of the month</option>
                                                            <option value="2">New arrival</option>                                                        
                                                        </select>
                                                        <label for="floatingSelectGrid">Featured</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('featured'); ?></medium>
                                                </div>

                                            
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" id="floatingSelectGrid" name="highlight" >   
                                                        </textarea>                                               
                                                        <label for="floatingSelectGrid">Highlights</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('status'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" id="floatingSelectGrid" name="description" >   
                                                        </textarea>                                               
                                                        <label for="floatingSelectGrid">Description</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('description'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingSelectGrid" name="stock" placeholder="Product Stock">
                                                        <label >Product Stock</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('stock'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingSelectGrid" name="mrp" placeholder="Product MRP">
                                                        <label >Product MRP</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('mrp'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingSelectGrid" name="selling_price" placeholder="Product Selling Price">
                                                        <label >Product Selling Price</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('selling_price'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="meta_title" placeholder="Meta title ">
                                                        <label >Meta title </label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('meta_title'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="meta_keyboard" placeholder="Meta keyboard ">
                                                        <label >Meta keyboard</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('meta_keyboard'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="meta_desc" placeholder="Meta Desc ">
                                                        <label >Meta description</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('meta_desc'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="floatingSelectGrid" name="pro_main_image">
                                                        <label >Product Main Image</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('pro_main_image'); ?></medium>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="floatingSelectGrid" name="gallery_image">
                                                        <label >Product Gallery Image</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('gallery_image'); ?></medium>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status" placeholder="brand ">
                                                            <option value="" selected>Open this select menu</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Deactive</option>                                                        
                                                        </select>
                                                        <label for="floatingSelectGrid">Status</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('status'); ?></medium>
                                                </div>


                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                            </div>
                                        <?= form_close();  ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php $this->load->view('footer'); ?>
