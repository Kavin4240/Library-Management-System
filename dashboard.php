<?php
session_start();
$name = $_SESSION['user_name'];
$id = $_SESSION['id'];
include 'connection.php';
if(empty($name))
{
    header("Location: index.php"); 
}

$select_book = mysqli_query($conn,"select count(*) from tbl_book where availability=1");
 $total_book = mysqli_fetch_row($select_book);

$issued_book = mysqli_query($conn,"select count(*) from tbl_issue where user_id='$id'  and status=1");
 $issued_book = mysqli_fetch_row($issued_book);




include('include/header.php'); ?>

  <div id="wrapper">

    <?php include('include/side-bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          
        </ol>

        <div class="row">
  <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body total">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-book"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Books</h4>
              <div class="info">
                <strong class="amount"><?php echo $total_book[0]; ?></strong><br>
                 
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body issued">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-book"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Book Issued</h4>
              <div class="info">
                <strong class="amount"><?php echo $issued_book[0]; ?></strong><br>
                 
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>
</div>
</div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include('include/footer.php'); ?>