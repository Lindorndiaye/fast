<?php $__env->startSection('content'); ?>

    <h2>Read Data</h2>
    <hr/>
<!-- <a class="btn btn-primary" href="generate-pdf" style="margin-bottom: 15px; float:right">contrat</a> -->

    <!-- <a class="btn btn-primary" href="students/create" style="margin-bottom: 15px;">Ajouter un étudiant</a> -->
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Retourner</a>


    <?php if(Session::has('message')): ?>
    <div class="alert-custom">
        <p><?php echo Session('message'); ?></p>
    </div>
    <?php endif; ?>
    
   
    
    <!-- Begin page -->
    <div id="wrapper">
            
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="http://ocpdakar.org/" target="_blank" class="logo"><img style="width:60px"  src="<?php echo e(asset('assets/images/logo.png')); ?>"> </a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container" >
                    <div class="">
                        
                        

                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect"><i class="md md-crop-free"></i></a>
                            </li>
                            <li >
                                
                               
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->                      
        <div class="content-page" style="margin-left:15px; margin-top:-100px;">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                   

                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">L'apprenant: <?php echo $student->prenom; ?> <?php echo $student->nom; ?></h3>
                                </div>

                                <div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nom : <?php echo $student->nom; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Prenom : <?php echo $student->prenom; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Age : <?php echo $student->age; ?> ans</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Telephone : <?php echo $student->mobile; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Email : <?php echo $student->email; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Specialité : <?php echo $student->specialite; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Region : <?php echo $student->region; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Ville : <?php echo $student->ville; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Diplome : <?php echo $student->diplome; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Diplome en mode: <?php echo $student->diplomem; ?></th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Adresse Domicile: <?php echo $student->adressed; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Adresse Atelier ou Entreprise: <?php echo $student->adressea; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Niveau langue francaise: <?php echo $student->nf; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>participation a un evenement de mode( defilé ou fashion-week ): <?php echo $student->em; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Numero d'identité national: <?php echo $student->nin; ?></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Intitule du dernier diplome obtenu: <?php echo $student->nd; ?></th>
                                                    </tr>
                                                    
                                                </thead>

                                         
                                                <tbody>
                                                   
          
     

                                                </tbody>
                                            </table>

                                        </div>
                                   
                            </div>
                        </div>
                        
                    </div> <!-- End Row -->





                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- End Row -->


                 


                </div> <!-- container -->
                           
            </div> <!-- content -->


        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">Chat</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="">
                            </div>
                            <span class="name">Chadengle</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-2.jpg" alt="">
                            </div>
                            <span class="name">Tomaslau</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-3.jpg" alt="">
                            </div>
                            <span class="name">Stillnotdavid</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-4.jpg" alt="">
                            </div>
                            <span class="name">Kurafire</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="">
                            </div>
                            <span class="name">Shahedk</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-6.jpg" alt="">
                            </div>
                            <span class="name">Adhamdannaway</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-7.jpg" alt="">
                            </div>
                            <span class="name">Ok</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-8.jpg" alt="">
                            </div>
                            <span class="name">Arashasghari</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-9.jpg" alt="">
                            </div>
                            <span class="name">Joshaustin</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-10.jpg" alt="">
                            </div>
                            <span class="name">Sortino</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                </ul>  
            </div>
        </div>
        <!-- /Right-bar -->
 <!-- MODAL -->
 <div id="dialog" class="modal-block mfp-hide">
    <section class="panel panel-info panel-color">
        <header class="panel-heading">
            <h2 class="panel-title">Are you sure?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>

            <div class="m-t-20">
                <div class="text-right">
                    <button type="button" id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                    <button type="button" id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                </div>
            </div>
        </div>
        
    </section>
</div>
<!-- end Modal -->


    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>