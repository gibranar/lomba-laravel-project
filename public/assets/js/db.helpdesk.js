'use strict'

// Current Ticket Status
var ctx1 = document.getElementById('chartJS1').getContext('2d');
var chart1 = new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      data: [20, 60, 50, 45, 50, 60, 70, 40, 45, 35, 25, 30],
      backgroundColor: '#506fd9',
      barPercentage: 0.5
    }, {
      data: [10, 40, 30, 40, 60, 55, 45, 35, 30, 20, 15, 20],
      backgroundColor: '#85b6ff',
      barPercentage: 0.5
    }, {
      data: [8, 30, 40, 35, 40, 45, 35, 30, 25, 10, 20, 15],
      backgroundColor: '#e2e5ec',
      barPercentage: 0.5
    }]
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    },
    scales: {
      y: {
        beginAtZero:true,
        max: 80,
        ticks: {
          color: '#a1aab3',
          font: {
            size: 10
          }
        },
        grid: {
          borderColor: '#e2e5ec',
          borderWidth: 1.5,
          color: 'rgba(65,80,95,.08)'
        }
      },
      x: {
        ticks: {
          color: '#313c47'
        },
        grid: {
          color: 'rgba(65,80,95,.08)'
        }
      }
    }
  }
});


// Complaints Received
var flot1 = $.plot('#flotChart1', [{
  data: dp3,
  color: '#506fd9',
  lines: {
    lineWidth: 1.8,
    fill: 0.2
  }
}], {
  series: {
    stack: 0,
    shadowSize: 0,
    lines: { show: true }
  },
  grid: {
    borderWidth: 0,
    aboveData: true
  },
  yaxis: {
    show: false,
    min: 0,
    max: 70
  },
  xaxis: {
    show: false,
    min: 2,
    max: 40
  }
});

// Time to Resolved Complaint
$('.peity-donut').peity('donut');

// Tickets By Request Type
var ctx2 = document.getElementById('chartJS2').getContext('2d');
var chart2 = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Modification', 'Code Request', 'Feature Request', 'Bug Fix', 'Integration', 'Production'],
    datasets: [{
      data: [20, 60, 50, 45, 50, 75],
      backgroundColor: ['#506fd9', '#85b6ff', '#33d685', '#ffc107', '#0dcaf0', '#ea4c89'],
      barPercentage: 0.5
    }, {
      data: [10, 40, 30, 40, 60, 55],
      backgroundColor: '#e2e5ec',
      barPercentage: 0.5
    }]
  },
  options: {
    indexAxis: 'y',
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    },
    scales: {
      x: {
        beginAtZero:true,
        max: 100,
        grid: {
          borderColor: '#e2e5ec',
          color: '#f3f5f9'
        },
        ticks: {
          font: {
            size: 11
          }
        }
      },
      y: {
        grid: {
          borderWidth: 0,
          color: '#f3f5f9'
        },
        ticks: {
          color: '#465463',
          font: {
            size: 13
          }
        }
      }
    }
  }
});

// Agent Performance Score
var flot2 = $.plot('#flotChart2', [{
  data: dp3,
  color: '#506fd9',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
  }
}], {
  series: {
    stack: 0,
    shadowSize: 0,
    lines: { show: true }
  },
  grid: {
    borderWidth: 0,
    aboveData: true
  },
  yaxis: {
    show: false,
    min: 0,
    max: 50,
    color: 'rgba(255,255,255,0)'
  },
  xaxis: {
    show: true,
    ticks: [[0,''],[8,'Jan'],[16,'Feb'],[24,'Mar'],[32,'Apr'],[40,'May'],[48,'Jun'],[56,'Jul'],[64,'Aug'],[72,'Sep'],[80,'Oct'],[88,'Nov'],[96,'Dec']],
    color: 'rgba(80,110,216,.08)'
  }
});

// Dark skin integration
function switchDark(enabled) {
  if(enabled) {
    chart1.options.scales['y'].grid.borderColor = '#222b41';
    chart1.options.scales['x'].ticks.color = 'rgba(255,255,255,.65)';

    chart2.options.scales['x'].grid.color = '#222b41';
    chart2.options.scales['x'].ticks.color = 'rgba(255,255,255,.65)';
    chart2.options.scales['x'].grid.borderColor = '#222b41';
    chart2.options.scales['y'].grid.color = '#222b41';
    chart2.options.scales['y'].ticks.color = 'rgba(255,255,255,.65)';

    chart2.data.datasets[1].backgroundColor = '#222b41';

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');

  } else {
    chart1.options.scales['y'].grid.borderColor = '#e2e5ec';
    chart1.options.scales['x'].ticks.color = '#313c47';

    chart2.options.scales['x'].grid.color = '#edeff6';
    chart2.options.scales['x'].ticks.color = '#42484e';
    chart2.options.scales['x'].grid.borderColor = '#edeff6';
    chart2.options.scales['y'].grid.color = '#edeff6';
    chart2.options.scales['y'].ticks.color = '#42484e';

    chart2.data.datasets[1].backgroundColor = '#e2e5ec';

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
  }

  chart1.update();
  chart2.update();
}

if(skinMode) { switchDark(true); }

// Switch between light and dark
$('#skinMode .nav-link').bind('click', function(e){
  var mode = $(this).text().toLowerCase();
  if(mode == 'dark') {
    switchDark(true);
  } else {
    switchDark(false);
  }
});
