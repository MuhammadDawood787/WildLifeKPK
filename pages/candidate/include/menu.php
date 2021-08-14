<style type="text/css">
  @media print{
    .printBlock
    {
      display: none !important;
    }
    .right-side
    {
      margin-left: 0px !important;

    }
    .table
    {
      width: 100%;
    }
    
      .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6,
      .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
           float: left;               
      }

      .col-md-12 {
           width: 100%;
      }

      .col-md-11 {
           width: 91.66666666666666%;
      }

      .col-md-10 {
           width: 83.33333333333334%;
      }

      .col-md-9 {
            width: 75%;
      }

      .col-md-8 {
            width: 66.66666666666666%;
      }

       .col-md-7 {
            width: 58.333333333333336%;
       }

       .col-md-6 {
            width: 50%;
       }

       .col-md-5 {
            width: 41.66666666666667%;
       }

       .col-md-4 {
            width: 33.33333333333333%;
       }

       .col-md-3 {
            width: 25%;
       }

       .col-md-2 {
              width: 16.666666666666664%;
       }

       .col-md-1 {
              width: 8.333333333333332%;
        } 
  }
</style>
<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas printBlock">
    <!-- sidebar: style can be found in sidebar-->
    <section class="sidebar">
      <div id="menu" role="navigation">
        <div class="nav_profile">
          <div class="media profile-left">
            <a class="pull-left profile-thumb" href="javascript:void(0)">
            
            <div class="content-profile">
              <center>
              <p class="media-heading">FBM Brothers</p></center>
            </div>
          </div>
        </div>
        <ul class="navigation">
          <li class="<?php if($curPageName == 'dashboard.php') echo "active" ?>">
            <a href="index.php">
              <i class="fa fa-tachometer"></i>
              <span class="mm-text">Dashboard</span>
            </a>
          </li>
          <li class="menu-dropdown <?php if($curPageName == 'production_add.php' OR $curPageName == 'production_list.php' OR $curPageName == 'production_details.php' OR $curPageName == 'production_edit.php') echo "active" ?>">
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-money"></i>
              <span>Consumption</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="production_add.php">
                  <i class="menu-icon ti-layout-list-large-image"></i>
                  <span class="mm-text <?php if($curPageName == 'production_add.php') echo "text-info" ?>">Consumption</span>
                </a>
              </li>
              <li>
                <a href="production_list.php">
                  <i class="menu-icon ti-layout-list-large-image"></i>
                  <span class="mm-text <?php if($curPageName == 'production_list.php' OR $curPageName == 'production_details.php' OR $curPageName == 'production_edit.php') echo "text-info" ?>">Consumption List</span>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="menu-dropdown <?php if($curPageName == 'purchase_add.php' OR $curPageName == 'purchase_list.php' OR $curPageName == 'purchase_details.php' OR $curPageName == 'purchase_edit.php') echo "active" ?>">
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-shopping-cart"></i>
              <span>Purchase</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="purchase_add.php">
                  <i class="menu-icon ti-layout-list-large-image"></i>
                  <span class="mm-text <?php if($curPageName == 'purchase_add.php') echo "text-info" ?>">Add Purchase</span>
                </a>
              </li>
              <li>
                <a href="purchase_list.php">
                  <i class="menu-icon ti-layout-list-large-image"></i>
                  <span class="mm-text <?php if($curPageName == 'purchase_list.php' OR $curPageName == 'purchase_details.php' OR $curPageName == 'purchase_edit.php') echo "text-info" ?>">Purchase List</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-dropdown <?php if($curPageName == 'add_product_cat.php' OR $curPageName == 'add_product.php' OR $curPageName == 'all_products.php' OR $curPageName == 'update_product.php' OR $curPageName == 'product_cat_report.php') echo "active" ?>">
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-pinterest"></i>
              <span>Product</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="sub-menu">
            <li>
                <a href="add_product_cat.php">
                  <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                  <span class="<?php if($curPageName == 'add_product_cat.php') echo "text-info" ?>">Add Product Cat</span>
                  <small class="badge"></small>
                </a>
              </li>
              <li>
                <a href="add_product.php">
                  <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                  <span class="<?php if($curPageName == 'add_product.php') echo "text-info" ?>">Add Product</span>
                  <small class="badge"></small>
                </a>
              </li>
              <li>
                <a href="all_products.php">
                  <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                  <span class="<?php if($curPageName == 'all_products.php' OR $curPageName == 'update_product.php') echo "text-info" ?>">Products List</span>
                  <small class="badge"></small>
                </a>
              </li>
              <li>
                <a href="product_cat_report.php">
                  <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                  <span class="<?php if($curPageName == 'product_cat_report.php') echo "text-info" ?>">Category Products List</span>
                  <small class="badge"></small>
                </a>
              </li>
            </ul>
          </li>

        <li class="menu-dropdown <?php if($curPageName == 'all_stock_products.php' OR $curPageName == 'alert_zero.php' OR $curPageName == 'alert_product.php') echo "active" ?>">
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-bar-chart"></i>
            <span>
              Stock Reports
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="all_stock_products.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'all_stock_products.php') echo "text-info" ?>">Products in Stock</span>
              </a>
            </li>
            <li>
              <a href="alert_zero.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'alert_zero.php') echo "text-info" ?>">Zero Qty Products</span>
              </a>
            </li>
            <li>
              <a href="alert_product.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'alert_product.php') echo "text-info" ?>">Min Qty Products</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-dropdown <?php if($curPageName == 'report_productionAll_dateWise.php' OR $curPageName == 'report_production_dateWise.php') echo "active" ?>">
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-bar-chart"></i>
            <span>
              Consumption Reports
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="report_productionAll_dateWise.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'report_productionAll_dateWise.php') echo "text-info" ?>">Date Wise Report</span>
              </a>
            </li>
            <li>
              <a href="report_production_dateWise.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'report_production_dateWise.php') echo "text-info" ?>">Product Wise Report</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-dropdown <?php if($curPageName == 'report_purchaseAll_dateWise.php' OR $curPageName == 'report_purchase_dateWise.php' OR $curPageName == 'report_purchase_avg_price.php' OR $curPageName == 'cat_wise_product.php') echo "active" ?>">
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-bar-chart"></i>
            <span>
              Purchase Report
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="report_purchaseAll_dateWise.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'report_purchaseAll_dateWise.php') echo "text-info" ?>">Date Wise Report</span>
              </a>
            </li>
            <li>
              <a href="report_purchase_dateWise.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'report_purchase_dateWise.php') echo "text-info" ?>">Product Wise Report</span>
              </a>
            </li>
            <li>
              <a href="report_purchase_avg_price.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'report_purchase_avg_price.php') echo "text-info" ?>">Product Avg Price</span>
              </a>
            </li>
            <li>
              <a href="cat_wise_product.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'cat_wise_product.php') echo "text-info" ?>">Cat Wise Product</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-dropdown <?php if($curPageName == 'expense_cat.php' OR $curPageName == 'add_expense.php' OR $curPageName == 'view_expenses.php' OR $curPageName == 'expenses_report.php' OR $curPageName == 'update_exp_cat.php' OR $curPageName == 'update_expense.php' OR $curPageName == 'cat_expenses_report.php') echo "active" ?>">
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-usd"></i>
            <span>
              Expenses
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="expense_cat.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'expense_cat.php' OR $curPageName == 'update_exp_cat.php') echo "text-info" ?>">Add Expenses Cat </span>
              </a>
            </li>
            <li>
              <a href="add_expense.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'add_expense.php') echo "text-info" ?>">Add Expenses</span>
              </a>
            </li>
            <li>
              <a href="view_expenses.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'view_expenses.php' OR $curPageName == 'update_expense.php') echo "text-info" ?>">View Expenses</span>
              </a>
            </li>
            <li>
              <a href="expenses_report.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'expenses_report.php') echo "text-info" ?>">Date Wise Expense</span>
              </a>
            </li>
            <li>
              <a href="cat_expenses_report.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="mm-text <?php if($curPageName == 'cat_expenses_report.php') echo "text-info" ?>">Category Wise Expense</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-dropdown <?php if($curPageName == 'dbBackup.php') echo "active" ?>">
          <a href="#">
            <i class="menu-icon fa fa-database"></i>
            <span>Backup</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="dbBackup.php">
                <i class="menu-icon ti-layout-list-large-image"></i>
                <span class="<?php if($curPageName == 'dbBackup.php') echo "text-info" ?>">DB Backup</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-dropdown <?php if($curPageName == 'add_unit.php' OR $curPageName == 'update_unit.php') echo "active" ?>">
          <a href="javascript:void(0)">
            <i class="menu-icon ti-settings"></i>
            <span>Setting</span><span class="fa arrow"></span></a>
            <ul class="sub-menu">
              <li>
                <a href="add_unit.php">
                  <i class="fa fa-fw ti-plug"></i>
                  <span class="<?php if($curPageName == 'add_unit.php') echo "text-info" ?>">Add Unit</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        </div>
    </section>
  </aside>
