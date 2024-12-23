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
                        <?php if($this->session->flashdata('SuccMsg')){ ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('SuccMsg'); ?>   
                            </div>
                        <?php } ?>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex pb-0">
                                    <h4 class="card-title mb-0 flex-grow-1">Category</h4>
                                        <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div> 
                                                
                                </div>
                                <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <?= form_open(); ?>                                            
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="parent_id" >
                                                        <label for="floatingSelectGrid">Parent Category</label>
                                                        <?php foreach($categories as $cat){ ?>
                                                            <option value="<?= $cat->cate_id ?>" selected><?= $cat->cate_name ?></option>  
                                                        <?php } ?>               
                                                            <option value="" selected>Select</option>                 
                                                        </select>
                                                        <label for="floatingSelectGrid">Parent Category</label>
                                                    </div>
                                                </div>
                                            

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingSelectGrid" name="cate_name" placeholder="Category Name">
                                                        <label >Category Name</label>
                                                    </div>
                                                    <medium class="text-danger"><?= form_error('cate_name'); ?></medium>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status" >
                                                            <option value="" selected>Open this select menu</option>
                                                            <option value="0">Active</option>
                                                            <option value="1">Deactive</option>                                                        
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
