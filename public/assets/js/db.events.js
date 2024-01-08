'use strict'

var d1 = [[0,38],[1,32],[2,31],[3,33],[4,34],[5,35],[6,38],[7,37],[8,39],[9,34],[10,33],[11,32],[12,34],[13,38],[14,42],[15,43],[16,45],[17,43],[18,45],[19,48],[20,45],[21,46],[22,44],[23,42],[24,46],[25,48],[26,55],[27,54],[28,58],[29,69]];
var d2 = [[0,12],[1,11],[2,9],[3,10],[4,15],[5,9],[6,11],[7,12],[8,7],[9,16],[10,18],[11,24],[12,16],[13,10],[14,9],[15,16],[16,15],[17,28],[18,20],[19,15],[20,20],[21,12],[22,15],[23,12],[24,10],[25,12],[26,14],[27,18],[28,20],[29,21],];

// Ticket Earnings
var flot1 = $.plot('#flotChart1', [{
  data: d1,
  color: '#85b6fe',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.75 } ] }
  }
},{
  data: d2,
  color: '#506fd9',
  lines: {
    lineWidth: 1.5,
    fill: 0.1
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
    show: true,
    color: 'rgba(255,255,255,0.3)',
    min: 0,
    max: 150
  },
  xaxis: {
    show: true,
    color: 'rgba(255,255,255,0.3)',
    tickSize: 3
  }
});

// Tickets Available
var flot2 = $.plot('#flotChart2', [{
  data: [[0,1],[1,3],[2,7],[3,9],[4,15],[5,13],[6,15],[7,19],[8,17],[9,19],[10,18],[11,15],[12,11],[13,6],[14,3],[15,4],[16,3],[17,3.5],[18,2],[19,2],[20,2],[21,1.5],[22,1.5],[23,1.5],[24,1],[25,.5],[26,.5],[27,.5],[28,.5],[29,.5],[30,.5],[31,.5],[32,.5],[33,.5],[34,.5],[35,.5],[36,.5]],
  color: '#e5e9f2'
},{
  data: [[0,0],[1,1],[2,4],[3,6],[4,11],[5,10],[6,12],[7,16],[8,14],[9,16],[10,15],[11,12],[12,8],[13,4],[14,2],[15,3],[16,1],[17,2],[18,1],[19,1],[20,1],[21,.5],[22,.5],[23,.5],[24,0]],
  color: '#506fd9'
}], {
  series: {
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      barWidth: .45,
      fill: 1
    }
  },
  grid: {
    aboveData: true,
    color: '#e5e9f2',
    borderWidth: 0,
    labelMargin: 0
  },
  yaxis: {
    show: false,
    min: 0,
    max: 25
  },
  xaxis: {
    show: false
  }
});

// Tickets Sold
var flot3 = $.plot('#flotChart3', [{
  data: d1,
  color: '#506fd9',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.75 } ] }
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
    max: 160
  },
  xaxis: {
    show: false,
    max: 20
  }
});

// Tickets Unsold
var flot4 = $.plot('#flotChart4', [{
  data: d1,
  color: '#85b6fe',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.85 } ] }
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
    max: 160
  },
  xaxis: {
    show: false,
    min: 10
  }
});

var flot5 = $.plot('#flotChart5', [{
  data: [[0,10],[1,20],[2,35],[3,30],[4,35],[5,50],[6,30],[7,25],[8,15],[9,20],[10,32],[11,40],[12,55],[13,40],[14,30],[15,20],[16,34],[17,45],[18,35],[19,20],[20,40],[21,20],[22,35],[23,30],[24,35],[25,50],[26,30],[27,25],[28,15],[29,20],[30,32],[31,40],[32,55],[33,40],[34,30],[35,20],[36,34],[37,45],[38,35],[39,20],[40,40]],
  color: '#506fd9'
},{
  data: [[0,50],[1,41],[2,25],[3,30],[4,28],[5,18],[6,35],[7,40],[8,55],[9,50],[10,42],[11,30],[12,20],[13,30],[14,30],[15,40],[16,30],[17,20],[18,30],[19,40],[20,25],[21,40],[22,30],[23,35],[24,30],[25,18],[26,35],[27,38],[28,50],[29,40],[30,30],[31,30],[32,20],[33,30],[34,40],[35,45],[36,35],[37,25],[38,30],[39,45],[40,30]],
  color: '#e5e9f2',
  lines: { show: true },
  bars: { show: false }
}], {
  series: {
    stack: 0,
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      fill: 1,
      barWidth: .45
    },
    lines: {
      lineWidth: 1.5,
      fill: true,
      fillColor: { colors: [ { opacity: 0 }, { opacity: 0.1 } ] }
    }
  },
  grid: {
    borderWidth: 0,
    aboveData: true
  },
  yaxis: {
    show: false,
    min: 0,
    max: 100
  },
  xaxis: {
    show: true,
    max: 40,
    tickSize: 4,
    color: 'rgba(65,80,95,.08)'
  }
});

// Events Categories
var ctx1 = document.getElementById('chartJS1').getContext('2d');
var chart1 = new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Performing Arts', 'Festivals', 'Conferences', 'Sports', 'Community', 'Concerts', 'Politics'],
    datasets: [{
      data: [20, 60, 50, 45, 50, 75, 40],
      backgroundColor: '#506fd9',
      barPercentage: 0.45
    }, {
      data: [10, 40, 30, 40, 60, 55, 50],
      backgroundColor: '#85b6ff',
      barPercentage: 0.45
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
        max: 80,
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
          color: '#212830',
          font: {
            size: 14
          }
        }
      }
    }
  }
});

// Events By Category
var ctx2 = document.getElementById('chartDonut');
var myDonutChart = new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['Festivals', 'Sports', 'Concerts', 'Performing Arts'],
    datasets: [{
      data: [40,25,20,15],
      backgroundColor: ['#506fd9', '#85b6ff','#50586d','#b9bdc9']
    }]
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      legend: {
        display: false,
      }
    },
    animation: {
      animateScale: true,
      animateRotate: true
    }
  }
});


// Dark skin integration
function switchDark(enabled) {
  var f1 = flot1.getOptions();
  var f2 = flot2.getData();

  if(enabled) {
    f1.xaxes[0].tickColor = 'rgba(255,255,255,.02)';
    f1.yaxes[0].tickColor = 'rgba(255,255,255,.02)';

    f2[0].color = '#222b41';

    chart1.options.scales['x'].grid.color = '#222b41';
    chart1.options.scales['x'].ticks.color = 'rgba(255,255,255,.65)';
    chart1.options.scales['x'].grid.borderColor = '#222b41';
    chart1.options.scales['y'].grid.color = '#222b41';
    chart1.options.scales['y'].ticks.color = 'rgba(255,255,255,.65)';

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');
    $('.text-primary-dark').addClass('text-primary');

  } else {
    f1.xaxes[0].tickColor = 'rgba(255,255,255,0.3)';
    f1.yaxes[0].tickColor = 'rgba(255,255,255,0.3)';

    f2[0].color = '#e5e9f2';

    chart1.options.scales['x'].grid.color = '#edeff6';
    chart1.options.scales['x'].ticks.color = '#42484e';
    chart1.options.scales['x'].grid.borderColor = '#edeff6';
    chart1.options.scales['y'].grid.color = '#edeff6';
    chart1.options.scales['y'].ticks.color = '#42484e';

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
    $('.text-primary-dark').removeClass('text-primary');
  }

  flot1.setupGrid();
  flot1.draw();
  flot2.draw();

  chart1.update();
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
