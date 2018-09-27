<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
    $page_title = "Manage Student";
    $breadcrumb = "
	<li class='breadcrumb-item'>Student Management</li>
	<li class='breadcrumb-item active'>Manage Student</li>";
    include_once("top-bar.php");

    $student = new Student();

    ?>
    <!-- Start Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <p class="text-muted font-14 m-b-20 pull-right">
                            <a type="button" href="student.php?q=add"
                               class="btn btn-primary waves-effect waves-light btn-lg"> <i class="fa fa-plus m-r-5"></i>
                                <span>Add New Student</span> </a>
                        </p>
                            
                        <div class="pull-left form-row">
                            <div class="form-group">
                                <select name="" id="num-rows-choice" class="custom-select" onchange="loadStudentData()">
                                    <option value="0" selected>Rows Per Page</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" name="key" id="key" onkeyup="searchStudent(this.value)" style="margin-left: 10px;">
                            </div>
                        </div>
                       <div id="student-info"></div>
                    </div>

                </div>

            </div>
            <!-- end row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <?php include_once("footer.php"); ?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->