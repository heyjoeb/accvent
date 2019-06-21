<?php
/*
 * Template Name: table
 */
?>
<?php get_header(); ?> 

<section class="section-main my-5 generic generic--table">
  <div class="container-fluid">
    <div class="row">
      <aside class="mt-5 mt-xl-0 col-12 col-xl-3 order-last order-xl-first">
        <div class="row">
          <div class="col-12 col-sm-6 col-xl-12">
            <?php include("components/co-sidebar-forecast.php");?>
          </div>
          <div class="col-12 col-sm-6 col-xl-12">
            <?php include("components/co-sidebar-user-info.php");?>
          </div>
        </div>
      </aside>
      <div class="col-12 col-xl-9 tools order-first order-xl-last">
        <div class="row">
          <div class="col-12">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">Action</th>
                  <th scope="col">Interested on brands</th>
                  <th scope="col">Oportunity name</th>
                  <th scope="col">Account name</th>
                  <th scope="col">Close date</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Stage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" data-title="Action"><a href="">View</a></td>
                  <td data-title="Interested on brands">Nexxt Solutions INFRAESTRUCTURE</td>
                  <td data-title="Oportunity Name">NXTC XGT - Celasa Universidad Guatemala 0718</td>
                  <td data-title="Account name">Celasa</td>
                  <td data-title="Close date">31-07-2018</td>
                  <td data-title="Amount">$20,000.00</td>
                  <td data-title="Stage">Presentation</td>
                </tr>
                <tr>
                  <td scope="row" data-title="Action"><a href="">View</a></td>
                  <td data-title="Interested on brands">Nexxt Solutions INFRAESTRUCTURE</td>
                  <td data-title="Oportunity Name">NXTC XGT - Celasa Universidad Guatemala 0718</td>
                  <td data-title="Account name">Celasa</td>
                  <td data-title="Close date">31-07-2018</td>
                  <td data-title="Amount">$20,000.00</td>
                  <td data-title="Stage">Presentation</td>
                </tr>
                <tr>
                  <td scope="row" data-title="Action"><a href="">View</a></td>
                  <td data-title="Interested on brands">Nexxt Solutions INFRAESTRUCTURE</td>
                  <td data-title="Oportunity Name">NXTC XGT - Celasa Universidad Guatemala 0718</td>
                  <td data-title="Account name">Celasa</td>
                  <td data-title="Close date">31-07-2018</td>
                  <td data-title="Amount">$20,000.00</td>
                  <td data-title="Stage">Presentation</td>
                </tr>
                <tr>
                  <td scope="row" data-title="Action"><a href="">View</a></td>
                  <td data-title="Interested on brands">Nexxt Solutions INFRAESTRUCTURE</td>
                  <td data-title="Oportunity Name">NXTC XGT - Celasa Universidad Guatemala 0718</td>
                  <td data-title="Account name">Celasa</td>
                  <td data-title="Close date">31-07-2018</td>
                  <td data-title="Amount">$20,000.00</td>
                  <td data-title="Stage">Presentation</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 mt-4">
            <nav aria-label="Page navigation" class="d-flex justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>






<?php get_footer();?>
