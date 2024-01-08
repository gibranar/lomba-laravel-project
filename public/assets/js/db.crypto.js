'use strict'

// Cryptocurrency Watchlist
$.plot('#flotChart1', [{
    data: dp3,
    color: '#0dcaf0',
    lines: {
      lineWidth: 1.2
    }
  },{
    data: dp3,
    color: '#85b6fe',
    lines: {
      lineWidth: 1.5
    }
  },{
    data: dp3,
    color: '#506fd9'
  }], {
  series: {
    stack: 0,
    shadowSize: 0,
    lines: {
      show: true,
      lineWidth: 1.7,
      fill: true,
      fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
    }
  },
  grid: {
    borderWidth: 0,
    labelMargin: 5,
    hoverable: true
  },
  yaxis: {
    show: true,
    color: 'rgba(72, 94, 144, .1)',
    min: 0,
    max: 140,
    font: {
      size: 10,
      color: '#8392a5'
    }
  },
  xaxis: {
    show: true,
    color: 'rgba(72, 94, 144, .1)',
    ticks: [[0, '08:00'], [20, '09:00'], [40, '10:00'], [60, '11:00'], [80, '12:00'], [100, '13:00']],
    font: {
      size: 10,
      family: 'Arial, sans-serif',
      color: '#8392a5'
    },
    min: -2,
    reserveSpace: false,
  }
});

// Volume By Currency
var datapie = {
  labels: ['USD', 'EUR', 'CNY', 'GBP', 'JPY', 'KRW', 'SGD'],
  datasets: [{
    data: [25,15,10,12,9,13,16],
    backgroundColor: ['#506fd9', '#85b6ff','#33d685','#0dcaf0','#1c96e9','#6e7985','#ccd2da']
  }]
};

var optionpie = {
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
};

var ctx2 = document.getElementById('chartDonut');
var myDonutChart = new Chart(ctx2, {
  type: 'doughnut',
  data: datapie,
  options: optionpie
});

// Portfolio
$.plot('#flotChart2', [{
  data: dp1,
  color: '#506fd9',
  lines: {
    lineWidth: 1.5,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.4 } ] }
  }
},{
  data: dp2,
  color: '#85b6ff',
  lines: {
    lineWidth: 1,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
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
    labelMargin: 10,
    aboveData: true
  },
  yaxis: {
    show: false,
    max: 150
  },
  xaxis: {
    show: true,
    tickColor: 'rgba(72,94,144, 0.07)',
    ticks: [[15,'mar 10'],[30,'mar 11'],[45,'mar 12'],[60,'mar 13'],[75,'mar 14']],
    min: 5,
    max: 90
  }
});

function flotOption(min, max) {
  return {
    series: {
      stack: 0,
      shadowSize: 0,
      lines: {
        show: true,
        lineWidth: 1.5,
        fill: true,
        fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
      }
    },
    grid: { borderWidth: 0 },
    yaxis: {
      show: false,
      max: 80
    },
    xaxis: {
      tickColor: 'rgba(72,94,144, 0.07)',
      min: min,
      max: max
    }
  }
}

// Ethereum
$.plot('#flotChart3', [{
  data: dp3,
  color: '#fd7e14'
}], flotOption(5,55));

$.plot('#flotChart4', [{
  data: dp3,
  color: '#1c96e9'
}], flotOption(45,95));

$.plot('#flotChart5', [{
  data: dp3,
  color: '#0cb785'
}], flotOption(15,75));

$.plot('#flotChart6', [{
  data: dp3,
  color: '#506fd9'
}], flotOption(35,85));


// Dark skin integration
function switchDark(enabled) {
  if(enabled) {
    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');
    $('.bg-gray-300').addClass('bg-ui-03').removeClass('bg-gray-300');
  } else {
    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
    $('.bg-ui-03').addClass('bg-gray-300').removeClass('bg-ui-03');
  }
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
