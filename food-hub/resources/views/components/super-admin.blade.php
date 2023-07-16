<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Today Sales</p>

              <h5 class="font-weight-bolder mb-0">
                £120000
                <span class="text-success text-xs font-weight-bolder">10 shops</span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">This Week Sales</p>

              <h5 class="font-weight-bolder mb-0">
                £30000

              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">This Month Sales</p>
              <h5 class="font-weight-bolder mb-0">
                £3000
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">This Year Sales</p>
              <h5 class="font-weight-bolder mb-0">
                £3000
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- end sales report --}}

<div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card z-index-2">
      <div class="card-header pb-0">
        <h6>Sales overview</h6>
        <p class="text-sm">
          <i class="fa fa-dot-circle-o text-success"></i>
          <span class="font-weight-bold">Year</span> in {{ now()->year }}
        </p>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card mb-3">
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300px"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- end sales overview graph --}}

<div class="row mt-4">
  <div class="col-lg-5 mb-lg-0 mb-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="text-gradient text-primary"><span id="status1"
                countto="21">£3000</span></h3>
            <h6 class="mb-0 font-weight-bolder">Today's Expenses</h6>
            <p class="opacity-8 mb-0 text-sm">All Shops £3000</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="text-gradient text-primary"><span id="status1"
                countto="21">£3000</span>
            </h3>
            <h6 class="mb-0 font-weight-bolder">Weekly Expenses</h6>
            <p class="opacity-8 mb-0 text-sm">All Shops £3000</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="text-gradient text-primary"><span id="status1"
                countto="21">£3000</span>
            </h3>
            <h6 class="mb-0 font-weight-bolder">Monthly Expenses</h6>
            <p class="opacity-8 mb-0 text-sm">All Shops £3000</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="text-gradient text-primary"><span id="status1"
                countto="21">£3000</span>
            </h3>
            <h6 class="mb-0 font-weight-bolder">Yearly Expenses</h6>
            <p class="opacity-8 mb-0 text-sm">All Shops £3000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <div class="d-flex align-items-center">
          <h6 class="mb-0">Device Total Stock <span
              class="badge bg-gradient-primary">£3000</span></h6>
          <button type="button"
            class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
            data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="See the device stock for all shop"
            data-bs-original-title="See the device stock for all shop">
            <i class="fas fa-info" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      {{-- <div class="card-body p-3 stock-card">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Item Name</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Memory</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Shop Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Qty</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($stock_lists as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-0">
                          <span class="badge bg-gradient-primary me-3"> </span>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">£3000
                            </h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-gradient-secondary">£3000</span>
                      </td>
                      <td>
                        <p class="opacity-8 mb-0 text-sm">
                          £3000
                        </p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> £3000 </span>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
<div class="row my-4">
  <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Today Sales Overview</h6>
          </div>

        </div>
      </div>
      {{-- <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shop Name
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee
                  Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Photo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Card Sale
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cash Sale
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Sale
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($today_sale as $sale)
                <tr>
                  <td>
                    <div class="text-center">
                      <h6 class="mb-0 text-sm">{{ $sale->shop->name }}</h6>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> {{ $sale->shop->user->name }} </span>
                  </td>
                  <td>
                    <div class="avatar-group mt-2">
                      @if ($sale->shop->user->photo)
                        <img src="{{ asset('assets/images/' . $sale->shop->user->photo) }}" height="50">
                      @else
                        <img src="../assets/images/user.webp" class="avatar avatar-sm me-3">
                      @endif
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> {{ $sale->card }} </span>
                  </td>

                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> {{ $sale->cash }} </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> {{ $sale->total }} </span>
                  </td>

                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div> --}}
    </div>
  </div>
</div>
@push('dashboard')
  <script>
    const CHART_COLORS = {
      red: 'rgb(255, 99, 132)',
      orange: 'rgb(255, 159, 64)',
      yellow: 'rgb(255, 205, 86)',
      green: 'rgb(75, 192, 192)',
      blue: 'rgb(54, 162, 235)',
      purple: 'rgb(153, 102, 255)',
      grey: 'rgb(201, 203, 207)',
      indigo: 'rgb(75,0,130)',
      salmon: 'rgb(250,128,114)',
      wheat: 'rgb(245,222,179)',
      corn_flower_blue: 'rgb(100,149,237)',
    };

    const NAMED_COLORS = [
      CHART_COLORS.red,
      CHART_COLORS.orange,
      CHART_COLORS.purple,
      CHART_COLORS.green,
      CHART_COLORS.blue,
      CHART_COLORS.grey,
      CHART_COLORS.indigo,
      CHART_COLORS.yellow,
      CHART_COLORS.salmon,
      CHART_COLORS.wheat,
      CHART_COLORS.corn_flower_blue,
    ];




    window.onload = function() {


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Sales Overview",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: month_total,
              maxBarThickness: 6

            },
            // {
            //   label: "Websites",
            //   tension: 0.4,
            //   borderWidth: 0,
            //   pointRadius: 0,
            //   borderColor: "#3A416F",
            //   borderWidth: 3,
            //   backgroundColor: gradientStroke2,
            //   fill: true,
            //   data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            //   maxBarThickness: 6
            // },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }

    const ctx3 = document.getElementById('pie-chart');
    const pieChart = new Chart(ctx3, {
      type: 'pie',
      data: {
        labels: shopName,
        datasets: [{
          label: 'My First Dataset',
          data: shopTotal,
          backgroundColor: NAMED_COLORS,
          hoverOffset: 4
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endpush
