'use strict'

// Data Analytics
var flot1 = $.plot('#flotChart1', [{
  data: [[0,10],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,11],[10,15],[11,17],[12,0],[13,0],[14,0],[15,13],[16,12],[17,10],[18,11],[19,8],[20,5],[21,3],[22,5],[23,6],[24,5],[25,6],[26,8],[27,10],[28,9],[29,8],[30,5]],
  color: '#c8ccd4'
},{
  data: [[12,14],[13,20],[14,15]],
  color: '#506fd9'
}], {
  series: {
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      barWidth: .5,
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
    max: 20
  },
  xaxis: {
    show: true,
    ticks: [[0, 'Jan-Feb'], [5, 'Mar-Apr'], [10, 'May-Jun'], [15, 'Jul-Aug'], [20, 'Sep-Oct'], [25, 'Nov-Dec'], [30,'Jan-Feb']],
  }
});


// Daily Trends
var flot2 = $.plot('#flotChart2', [{
  data: [
    [0,50],[1,50],[2,60],[3,50],[4,45],[5,55],[6,55],[7,45],[8,60],[9,25],
    [10,55],[11,60],[12,55],[13,55],[14,55],[15,55],[16,65],[17,55],[18,75],[19,35],
    [20,50],[21,65],[22,35],[23,45],[24,45],[25,45],[26,55],[27,50],[28,55],[29,55],
    [30,55],[31,65],[32,45],[33,40],[34,45],[35,45],[36,55],[37,75],[38,65],[39,65],
    [40,70]
  ],
  color: '#acafb5',
  lines: {
    lineWidth: 1.5,
    fill: false
  }
},{
  data: [
    [0,50],[1,50],[2,60],[3,50],[4,45],[5,55],[6,55],[7,45],[8,60],[9,25],
    [10,55],[11,60],[12,55],[13,55],[14,55],[15,55],[16,65],[17,55],[18,75],[19,35],
    [20,50],[21,65],[22,35],[23,45],[24,45]
  ],
  color: '#506fd9',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.4 } ] }
  }
}], {
  series: {
    shadowSize: 0,
    lines: {
      show: true,
    }
  },
  grid: {
    borderWidth: 0,
    aboveData: true
  },
  yaxis: {
    show: false,
    max: 140
  },
  xaxis: {
    show: true,
    tickColor: 'rgba(72,94,144, 0)',
    tickSize: 4,
    max: 40
  }
});

// Total Space/Used Space
var ctx1 = document.getElementById('chartDonut');
var myDonutChart = new Chart(ctx1, {
  type: 'doughnut',
  data: {
    labels: ['Used Space','System Space', 'Available Space'],
    datasets: [{
      data: [45,55],
      backgroundColor: ['#506fd9','#d3dbf6']
    },{
      data: [40,60],
      backgroundColor: ['#6e7985','#dbdde1']
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

// Network In/Out
var ctx2 = document.getElementById('chartPolar');
var myPolarChart = new Chart(ctx2, {
  type: 'polarArea',
  data: {
    datasets: [{
      data: [50,25,60,80,20],
      backgroundColor: ['#506fd9','#85b6ff','#d3dbf6','#6e7985','#dbdde1']
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

// Volume Read/Write Ops
var ctx3 = document.getElementById('chartRadar');
var myRadarChart = new Chart(ctx3, {
  type: 'radar',
  data: {
    labels: ['January','February','March','April','May','June','July'],
    datasets: [{
      data: [65, 59, 90, 81, 56, 55, 40],
      fill: true,
      backgroundColor: 'rgba(80, 111, 217, 0.2)',
      borderColor: '#506fd9',
      borderWidth: 1.5,
      pointBackgroundColor: '#506fd9',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: '#506fd9'
    },{
      data: [28, 48, 40, 19, 96, 27, 100],
      fill: true,
      backgroundColor: 'rgba(133, 182, 255, 0.2)',
      borderColor: '#85b6ff',
      borderWidth: 1.5,
      pointBackgroundColor: '#85b6ff',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: '#85b6ff'
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

// CPU Utilization
var ctx4 = document.getElementById('chartLine');
var myLineChart = new Chart(ctx4, {
  type: 'line',
  data: {
    labels: ['1H', '12H', '24H', '1W', '1M', '1Y'],
    datasets: [{
      data: [50,25,60,80,20,30],
      borderColor: '#506fd9',
      borderWidth: 1.5,
      stepped: true
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
    },
    scales: {
      y: {
        beginAtZero:true,
        max: 100,
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
        grid: {
          color: 'rgba(65,80,95,.08)'
        },
        ticks: {
          color: '#6e7985',
          font: {
            size: 10,
            weight: '500'
          }
        }
      }
    }
  }
});

// Backend Error Distribution
var flot3 = $.plot('#flotChart3', [{
  data: [
    [0,45],[1,45],[2,55],[3,45],[4,40],[5,50],[6,50],[7,40],[8,45],[9,10],
    [10,40],[11,55],[12,50],[13,50],[14,50],[15,50],[16,60],[17,35],[18,50],[19,20],
    [20,40],[21,55],[22,20],[23,40],[24,40],[25,40],[26,45],[27,45],[28,50],[29,40],
    [30,50],[31,55],[32,40],[33,35],[34,40],[35,40],[36,50],[37,60],[38,55],[39,60],
    [40,60],[41,50],[42,45],[43,40],[44,45],[45,40],[46,42],[47,30],[48,40],[49,40],
    [50,45],[51,45],[52,45],[53,40],[54,50],[55,50]
  ],
  color: '#85b6ff',
  lines: {
    lineWidth: 2,
    fill: 0.1
  }
},{
  data: [
    [0,50],[1,50],[2,60],[3,50],[4,45],[5,55],[6,55],[7,45],[8,60],[9,25],
    [10,55],[11,60],[12,55],[13,55],[14,55],[15,55],[16,65],[17,55],[18,75],[19,35],
    [20,50],[21,65],[22,35],[23,45],[24,45],[25,45],[26,55],[27,50],[28,55],[29,55],
    [30,55],[31,65],[32,45],[33,40],[34,45],[35,45],[36,55],[37,75],[38,65],[39,65],
    [40,70],[41,55],[42,50],[43,45],[44,55],[45,50],[46,55],[47,35],[48,50],[49,45],
    [50,55],[51,50],[52,50],[53,45],[54,55],[55,55]
  ],
  color: '#506fd9',
  lines: {
    lineWidth: 2,
    fill: false
  }
},{
  data: [
    [0,10],[1,8],[2,20],[3,10],[4,15],[5,5],[6,12],[7,5],[8,10],[9,5],
    [10,15],[11,10],[12,5],[13,7],[14,5],[15,15],[16,20],[17,15],[18,10],[19,5],
    [20,5],[21,15],[22,10],[23,5],[24,10],[25,5],[26,5],[27,2],[28,3],[29,10],
    [30,5],[31,2],[32,2],[33,5],[34,8],[35,10],[36,10],[37,12],[38,10],[39,15],
    [40,5],[41,25],[42,12],[43,5],[44,10],[45,15],[46,10],[47,20],[48,10],[49,8],
    [50,5],[51,5],[52,2],[53,10],[54,3],[55,1]
  ],
  color: '#506fd9',
  bars: {
    show: true,
    lineWidth: 0,
    barWidth: .5,
    fill: 1
  },
  lines: { show: false }
}], {
  series: {
    shadowSize: 0,
    lines: {
      show: true,
    }
  },
  grid: {
    borderWidth: 0,
    aboveData: true,
    labelMargin: 10
  },
  yaxis: {
    show: true,
    tickColor: 'rgba(72,94,144, 0.06)',
    tickSize: 20,
    ticks: [[0,''],[20,'$20,000'],[40,'$40,000'],[60,'$60,000'],[80,'$80,000'],[100,'$100,000']],
    min: 0,
    max: 100
  },
  xaxis: {
    show: true,
    tickColor: 'rgba(72,94,144, 0.06)',
    tickSize: 5,
    ticks: [[0,'Jan'],[5,'Feb'],[10,'Mar'],[15,'Apr'],[20,'May'],[25,'Jun'],[30,'Jul'],[35,'Aug'],[40,'Sep'],[45,'Oct'],[50,'Nov'],[55,'Dec']],
    max: 55
  }
});

// Dark skin integration
function switchDark(enabled) {
  var f1 = flot1.getOptions();
  var f2 = flot1.getData();

  if(enabled) {
    f1.xaxes[0].tickColor = 'rgba(255,255,255,.02)';
    f2[0].color = '#222b41';

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');

  } else {
    //f1.xaxes[0].tickColor = 'rgba(255,255,255,0.3)';
    f2[0].color = '#c8ccd4';

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
  }

  flot1.setupGrid();
  flot1.draw();
  flot2.draw();
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
