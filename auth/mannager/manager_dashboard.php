<?php session_start(); ?>
<?php
include '../../config/conn.php';
require_once '../../res/link.php';
require_once '../../res/add-ons.php';
include '../../res/function.php';
?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location: ../../login.php');
}
if($_SESSION['userType'] != 'MANAGER'){
    header('Location: ../../login.php');
}

?>

<?php
$manager_id = $_SESSION['user_id'];
$sql="SELECT fuel_station.manager_id, fuel_station.station_id,fuel_stock.fuel_id,fuel_stock.stock,fuel_stock.update_time FROM fuel_station INNER JOIN fuel_stock ON fuel_station.station_id=fuel_stock.station_id WHERE fuel_station.manager_id='{$manager_id}' AND fuel_stock.fuel_id=1";
$sql1="SELECT fuel_station.manager_id, fuel_station.station_id,fuel_stock.fuel_id,fuel_stock.stock,fuel_stock.update_time FROM fuel_station INNER JOIN fuel_stock ON fuel_station.station_id=fuel_stock.station_id WHERE fuel_station.manager_id='{$manager_id}' AND fuel_stock.fuel_id=2";
$sql2="SELECT fuel_station.manager_id, fuel_station.station_id,fuel_stock.fuel_id,fuel_stock.stock,fuel_stock.update_time FROM fuel_station INNER JOIN fuel_stock ON fuel_station.station_id=fuel_stock.station_id WHERE fuel_station.manager_id='{$manager_id}' AND fuel_stock.fuel_id=3";
$sql3="SELECT fuel_station.manager_id, fuel_station.station_id,fuel_stock.fuel_id,fuel_stock.stock,fuel_stock.update_time FROM fuel_station INNER JOIN fuel_stock ON fuel_station.station_id=fuel_stock.station_id WHERE fuel_station.manager_id='{$manager_id}' AND fuel_stock.fuel_id=4";
$sql4="SELECT fuel_station.manager_id, fuel_station.station_id,fuel_stock.fuel_id,fuel_stock.stock,fuel_stock.update_time FROM fuel_station INNER JOIN fuel_stock ON fuel_station.station_id=fuel_stock.station_id WHERE fuel_station.manager_id='{$manager_id}' AND fuel_stock.fuel_id=5";

$result = mysqli_query($connection,$sql);
$result1 = mysqli_query($connection,$sql1);
$result2 = mysqli_query($connection,$sql2);
$result3 = mysqli_query($connection,$sql3);
$result4 = mysqli_query($connection,$sql4);

$data=mysqli_fetch_array($result);
$data1=mysqli_fetch_array($result1);
$data2=mysqli_fetch_array($result2);
$data3=mysqli_fetch_array($result3);
$data4=mysqli_fetch_array($result4);

$petrol92= $data['stock'];
$petrol95= $data1['stock'];
$diesel= $data2['stock'];
$Kerosene= $data3['stock'];
$superDiesel= $data4['stock'];




?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />




  <title>Fual Station Mannagement</title>

  <?php
  require_once('../../res/link.php');
  
  ?>
  
</head>

<body>
  <div class="wrapper">
    <!-- Sidenav -->
    
      <?php
      require_once('../mannager/res/sideNav_mannager.php');
      ?>
    
    <!-- END Sidenav -->

    <!-- Top nav -->
    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <?php
        require_once('../mannager/res/TopNav.php');
        ?>

      </nav>
      <!-- End Navbar -->

      <!-- Main Content -->
      <main class="content">

          <div class="container-fluid p-0">
              <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>



              <div class="row">
                  <div class="col-xl-6 col-xxl-5 d-flex">
                      <div class="w-100">
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col mt-0">
                                                  <h5 class="card-title">Sales</h5>
                                              </div>

                                              <div class="col-auto">
                                                  <div class="stat text-primary">
                                                      <i
                                                              class="align-middle"
                                                              data-feather="truck"
                                                      ></i>
                                                  </div>
                                              </div>
                                          </div>
                                          <h1 class="mt-1 mb-3">2.382</h1>
                                          <div class="mb-0">
                            <span class="text-danger">
                              <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
                            </span>
                                              <span class="text-muted">Since last week</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col mt-0">
                                                  <h5 class="card-title">Visitors</h5>
                                              </div>

                                              <div class="col-auto">
                                                  <div class="stat text-primary">
                                                      <i
                                                              class="align-middle"
                                                              data-feather="users"
                                                      ></i>
                                                  </div>
                                              </div>
                                          </div>
                                          <h1 class="mt-1 mb-3">14.212</h1>
                                          <div class="mb-0">
                            <span class="text-success">
                              <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                            </span>
                                              <span class="text-muted">Since last week</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col mt-0">
                                                  <h5 class="card-title">Earnings</h5>
                                              </div>

                                              <div class="col-auto">
                                                  <div class="stat text-primary">
                                                      <i
                                                              class="align-middle"
                                                              data-feather="dollar-sign"
                                                      ></i>
                                                  </div>
                                              </div>
                                          </div>
                                          <h1 class="mt-1 mb-3">$21.300</h1>
                                          <div class="mb-0">
                            <span class="text-success">
                              <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                            </span>
                                              <span class="text-muted">Since last week</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col mt-0">
                                                  <h5 class="card-title">Orders</h5>
                                              </div>

                                              <div class="col-auto">
                                                  <div class="stat text-primary">
                                                      <i
                                                              class="align-middle"
                                                              data-feather="shopping-cart"
                                                      ></i>
                                                  </div>
                                              </div>
                                          </div>
                                          <h1 class="mt-1 mb-3">64</h1>
                                          <div class="mb-0">
                            <span class="text-danger">
                              <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                            </span>
                                              <span class="text-muted">Since last week</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl-6 col-xxl-7">
                      <div class="card flex-fill w-100">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Recent Movement</h5>
                          </div>
                          <div class="card-body py-3">
                              <div class="chart chart-sm">
                                  <canvas id="chartjs-pie"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                      <div class="card flex-fill w-100">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Browser Usage</h5>
                          </div>
                          <div class="card-body d-flex">
                              <div class="align-self-center w-100">
                                  <div class="py-3">
                                      <div class="chart chart-xs">
                                          <canvas id="chartjs-dashboard-pie"></canvas>
                                      </div>
                                  </div>

                                  <table class="table mb-0">
                                      <tbody>
                                      <tr>
                                          <td>Chrome</td>
                                          <td class="text-end">4306</td>
                                      </tr>
                                      <tr>
                                          <td>Firefox</td>
                                          <td class="text-end">3801</td>
                                      </tr>
                                      <tr>
                                          <td>IE</td>
                                          <td class="text-end">1689</td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div
                          class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2"
                  >
                      <div class="card flex-fill w-100">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Real-Time</h5>
                          </div>
                          <div class="card-body px-4">
                              <div id="world_map" style="height: 350px"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                      <div class="card flex-fill">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Calendar</h5>
                          </div>
                          <div class="card-body d-flex">
                              <div class="align-self-center w-100">
                                  <div class="chart">
                                      <div id="datetimepicker-dashboard"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                      <div class="card flex-fill">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Latest Projects</h5>
                          </div>
                          <table class="table table-hover my-0">
                              <thead>
                              <tr>
                                  <th>Name</th>
                                  <th class="d-none d-xl-table-cell">Start Date</th>
                                  <th class="d-none d-xl-table-cell">End Date</th>
                                  <th>Status</th>
                                  <th class="d-none d-md-table-cell">Assignee</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Project Apollo</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-success">Done</span></td>
                                  <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                              </tr>
                              <tr>
                                  <td>Project Fireball</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-danger">Cancelled</span></td>
                                  <td class="d-none d-md-table-cell">William Harris</td>
                              </tr>
                              <tr>
                                  <td>Project Hades</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-success">Done</span></td>
                                  <td class="d-none d-md-table-cell">Sharon Lessman</td>
                              </tr>
                              <tr>
                                  <td>Project Nitro</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td>
                                      <span class="badge bg-warning">In progress</span>
                                  </td>
                                  <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                              </tr>
                              <tr>
                                  <td>Project Phoenix</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-success">Done</span></td>
                                  <td class="d-none d-md-table-cell">William Harris</td>
                              </tr>
                              <tr>
                                  <td>Project X</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-success">Done</span></td>
                                  <td class="d-none d-md-table-cell">Sharon Lessman</td>
                              </tr>
                              <tr>
                                  <td>Project Romeo</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td><span class="badge bg-success">Done</span></td>
                                  <td class="d-none d-md-table-cell">Christina Mason</td>
                              </tr>
                              <tr>
                                  <td>Project Wombat</td>
                                  <td class="d-none d-xl-table-cell">01/01/2021</td>
                                  <td class="d-none d-xl-table-cell">31/06/2021</td>
                                  <td>
                                      <span class="badge bg-warning">In progress</span>
                                  </td>
                                  <td class="d-none d-md-table-cell">William Harris</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                      <div class="card flex-fill w-100">
                          <div class="card-header">
                              <h5 class="card-title mb-0">Monthly Sales</h5>
                          </div>
                          <div class="card-body d-flex w-100">
                              <div class="align-self-center chart chart-lg">
                                  <canvas id="chartjs-dashboard-bar"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  new Chart(document.getElementById("chartjs-pie"), {
                      type: "pie",
                      data: {
                          labels: ["octane-92 Petrol", "octane-95 Petrol", "Diesel", "Super-Diesel","kerosene"],
                          datasets: [{
                              data: [<?php echo $petrol92; ?>,<?php echo $petrol95; ?>,<?php echo $diesel; ?>,<?php echo $superDiesel; ?>,<?php echo $Kerosene ;  ?>],
                              backgroundColor: [
                                  window.theme.primary,
                                  window.theme.success,
                                  window.theme.warning,
                                    window.theme.danger,
                                  "#dee2e6"
                              ],
                              borderColor: "transparent"
                          }]
                      },
                      options: {
                          maintainAspectRatio: false,
                          cutoutPercentage: 0,
                      }
                  });
              });
          </script>
          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  // Pie chart
                  new Chart(document.getElementById("chartjs-dashboard-pie"), {
                      type: "pie",
                      data: {
                          labels: ["Chrome", "Firefox", "IE"],
                          datasets: [
                              {
                                  data: [4306, 3801, 1689],
                                  backgroundColor: [
                                      window.theme.primary,
                                      window.theme.warning,
                                      window.theme.danger,
                                  ],
                                  borderWidth: 5,
                              },
                          ],
                      },
                      options: {
                          responsive: !window.MSInputMethodContext,
                          maintainAspectRatio: false,
                          legend: {
                              display: false,
                          },
                          cutoutPercentage: 75,
                      },
                  });
              });
          </script>
          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  // Bar chart
                  new Chart(document.getElementById("chartjs-dashboard-bar"), {
                      type: "bar",
                      data: {
                          labels: [
                              "Jan",
                              "Feb",
                              "Mar",
                              "Apr",
                              "May",
                              "Jun",
                              "Jul",
                              "Aug",
                              "Sep",
                              "Oct",
                              "Nov",
                              "Dec",
                          ],
                          datasets: [
                              {
                                  label: "This year",
                                  backgroundColor: window.theme.primary,
                                  borderColor: window.theme.primary,
                                  hoverBackgroundColor: window.theme.primary,
                                  hoverBorderColor: window.theme.primary,
                                  data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                                  barPercentage: 0.75,
                                  categoryPercentage: 0.5,
                              },
                          ],
                      },
                      options: {
                          maintainAspectRatio: false,
                          legend: {
                              display: false,
                          },
                          scales: {
                              yAxes: [
                                  {
                                      gridLines: {
                                          display: false,
                                      },
                                      stacked: false,
                                      ticks: {
                                          stepSize: 20,
                                      },
                                  },
                              ],
                              xAxes: [
                                  {
                                      stacked: false,
                                      gridLines: {
                                          color: "transparent",
                                      },
                                  },
                              ],
                          },
                      },
                  });
              });
          </script>
          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  var markers = [
                      {
                          coords: [31.230391, 121.473701],
                          name: "Shanghai",
                      },
                      {
                          coords: [28.70406, 77.102493],
                          name: "Delhi",
                      },
                      {
                          coords: [6.524379, 3.379206],
                          name: "Lagos",
                      },
                      {
                          coords: [35.689487, 139.691711],
                          name: "Tokyo",
                      },
                      {
                          coords: [23.12911, 113.264381],
                          name: "Guangzhou",
                      },
                      {
                          coords: [40.7127837, -74.0059413],
                          name: "New York",
                      },
                      {
                          coords: [34.052235, -118.243683],
                          name: "Los Angeles",
                      },
                      {
                          coords: [41.878113, -87.629799],
                          name: "Chicago",
                      },
                      {
                          coords: [51.507351, -0.127758],
                          name: "London",
                      },
                      {
                          coords: [40.416775, -3.70379],
                          name: "Madrid ",
                      },
                  ];
                  var map = new jsVectorMap({
                      map: "world",
                      selector: "#world_map",
                      zoomButtons: true,
                      markers: markers,
                      markerStyle: {
                          initial: {
                              r: 9,
                              strokeWidth: 7,
                              stokeOpacity: 0.4,
                              fill: window.theme.primary,
                          },
                          hover: {
                              fill: window.theme.primary,
                              stroke: window.theme.primary,
                          },
                      },
                      zoomOnScroll: false,
                  });
                  window.addEventListener("resize", () => {
                      map.updateSize();
                  });
              });
          </script>
          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
                  var defaultDate =
                      date.getUTCFullYear() +
                      "-" +
                      (date.getUTCMonth() + 1) +
                      "-" +
                      date.getUTCDate();
                  document.getElementById("datetimepicker-dashboard").flatpickr({
                      inline: true,
                      prevArrow: '<span title="Previous month">&laquo;</span>',
                      nextArrow: '<span title="Next month">&raquo;</span>',
                      defaultDate: defaultDate,
                  });
              });
          </script>
      </main>
      <!-- End Main Content -->

      <!-- Footer -->
      <footer class="footer"></footer>
      <!--End Footer -->
    </div>
  </div>
</body>

</html>