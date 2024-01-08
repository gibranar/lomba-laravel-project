'use strict'

// Monthly Growth Revenue
var flot1 = $.plot('#flotChart', [{
  data: dp2,
  color: '#506fd9'
},{
  data: dp1,
  color: '#85b6ff'
},{
  data: dp3,
  color: '#dbdffd'
}], {
  series: {
    stack: 0,
    shadowSize: 0,
    lines: {
      show: true,
      lineWidth: 1.5,
      fill: true,
      fillColor: { colors: [ { opacity: .35 }, { opacity: 0 } ] }
    }
  },
  grid: {
    borderWidth: 0,
    aboveData: true
  },
  yaxis: {
    show: true,
    min: 0,
    max: 200,
    color: 'rgba(255,255,255,0)',
    tickSize: 20
  },
  xaxis: {
    show: true,
    ticks: [[0,''],[8,'Jan'],[16,'Feb'],[24,'Mar'],[32,'Apr'],[40,'May'],[48,'Jun'],[56,'Jul'],[64,'Aug'],[72,'Sep'],[80,'Oct'],[88,'Nov'],[96,'Dec']],
    color: 'rgba(65,80,95,.1)'
  }
});


// Account Retention
var flot2 = $.plot('#flotThresholds', [{
  data: dp4,
  color: '#506fd9',
  threshold: {
    color: '#bed8ff'
  }
},{
  data: dp5,
  color: '#85b6ff',
  threshold: {
    color: '#bdc9f1'
  }
}], {
  series: {
    threshold: {
      below: 0
    },
    bars: {
      show: true,
      lineWidth: 0,
      barWidth: .4,
      fill: 1
    }
  },
  grid: {
    borderWidth: 0
  },
  yaxis: {
    show: false,
    tickColor: '#edeff6',
    ticks: 6
  },
  xaxis: {
    min: 0,
    max: 40,
    tickColor: '#edeff6'
  }
});

// Real Time Sales
var ctx1 = document.getElementById('chartBar1').getContext('2d');
var bar1 = new Chart(ctx1, {
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
          color: '#212830',
          font: {
            size: 10,
            weight: '500'
          }
        }
      },
      y: {
        grid: {
          borderWidth: 0,
          color: '#f3f5f9'
        },
        ticks: {
          color: '#212830',
          font: {
            size: 12
          }
        }
      }
    }
  }
});


// Sales Revenue
$('#vmap').vectorMap({
  map: 'usa_en',
  backgroundColor: '#fff',
  borderColor: '#fff',
  color: '#d9dde7',
  selectedColor: null,
  hoverColor: null,
  hoverOpacity: 0.8,
  enableZoom: false,
  showTooltip: true,
  colors: {
    ca: '#85b6ff',
    tx: '#506fd9',
    mo: '#0dcaf0',
    co: '#33d685',
    ny: '#ea4c89'
  }
});


// Dark skin integration
function switchDark(enabled) {
  var f2 = flot2.getOptions();

  if(enabled) {
    f2.xaxes[0].tickColor = '#222b41';

    bar1.options.scales['x'].grid.color = '#222b41';
    bar1.options.scales['x'].ticks.color = 'rgba(255,255,255,.65)';
    bar1.options.scales['x'].grid.borderColor = '#222b41';
    bar1.options.scales['y'].grid.color = '#222b41';
    bar1.options.scales['y'].ticks.color = 'rgba(255,255,255,.65)';

    $('#vmap').vectorMap('set', 'backgroundColor', '#192030');

  } else {
    f2.xaxes[0].tickColor = '#edeff6';

    bar1.options.scales['x'].grid.color = '#edeff6';
    bar1.options.scales['x'].ticks.color = '#42484e';
    bar1.options.scales['x'].grid.borderColor = '#edeff6';
    bar1.options.scales['y'].grid.color = '#edeff6';
    bar1.options.scales['y'].ticks.color = '#42484e';

    $('#vmap').vectorMap('set', 'backgroundColor', '#fff');
  }

  flot2.setupGrid();
  flot2.draw();

  bar1.update();
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
