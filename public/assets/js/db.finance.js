'use strict'

var flot = $.plot('#flotChart', [{
  data: dp3,
  color: '#506fd9',
  lines: {
    lineWidth: 1.8,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.75 } ] }
  }
},{
  data: dp3,
  color: '#506fd9',
  lines: {
    lineWidth: 0,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.21 } ] }
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
    max: 100,
    color: 'rgba(255,255,255,0)'
  },
  xaxis: {
    show: true,
    ticks: [[0,''],[8,'Jan'],[16,'Feb'],[24,'Mar'],[32,'Apr'],[40,'May'],[48,'Jun'],[56,'Jul'],[64,'Aug'],[72,'Sep'],[80,'Oct'],[88,'Nov'],[96,'Dec']],
    color: 'rgba(80,110,216,.08)'
  }
});


var data1 = [[0,10],[1,20],[2,35],[3,30],[4,35],[5,50],[6,30],[7,25],[8,15],[9,20],[10,32],[11,40],[12,55],[13,40],[14,30],[15,20],[16,34],[17,45],[18,35],[19,20],[20,40],[21,20],[22,35],[23,30],[24,35],[25,50],[26,30],[27,25],[28,15],[29,20],[30,32],[31,40],[32,55],[33,40],[34,30],[35,20],[36,34],[37,45],[38,35],[39,20],[40,40]];
var data2 = [[0,50],[1,41],[2,25],[3,30],[4,28],[5,18],[6,35],[7,40],[8,55],[9,50],[10,42],[11,30],[12,20],[13,30],[14,30],[15,40],[16,30],[17,20],[18,30],[19,40],[20,25],[21,40],[22,30],[23,35],[24,30],[25,18],[26,35],[27,38],[28,50],[29,40],[30,30],[31,30],[32,20],[33,30],[34,40],[35,45],[36,35],[37,25],[38,30],[39,45],[40,30]];
var data3 = [[0,32],[1,40],[2,55],[3,40],[4,30],[5,20],[6,34],[7,45],[8,35],[9,20],[10,40],[11,20],[12,35],[13,30],[14,35],[15,50],[16,30],[17,25],[18,15],[19,20],[20,32],[21,40],[22,55],[23,40],[24,30],[25,20],[26,34],[27,45],[28,35],[29,20],[30,40],[31,20],[32,35],[33,30],[34,35],[35,50],[36,30],[37,25],[38,15],[39,20],[40,32]];
var data4 = [[0,42],[1,30],[2,20],[3,30],[4,30],[5,40],[6,30],[7,20],[8,30],[9,40],[10,25],[11,40],[12,30],[13,35],[14,30],[15,18],[16,35],[17,38],[18,50],[19,30],[20,30],[21,30],[22,20],[23,30],[24,40],[25,45],[26,35],[27,25],[28,30],[29,45],[30,30],[31,40],[32,45],[33,40],[34,30],[35,20],[36,34],[37,40],[38,35],[39,35],[40,40]];

var option1 = {
  series: {
    stack: 0,
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      fill: 1,
      barWidth: .6
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
    tickSize: 5,
    color: 'rgba(65,80,95,.08)'
  }
};

// Gross Profit Margin
var flot1 = $.plot('#flotChart1', [{
  data: data1,
  color: '#c1ccf1'
},{
  data: data2,
  color: '#506fd9',
  lines: { show: true },
  bars: { show: false }
}], option1);

// Net Profit Margin
var flot2 = $.plot('#flotChart2', [{
  data: data3,
  color: '#cde1ff'
},{
  data: data4,
  color: '#85b6ff',
  lines: { show: true },
  bars: { show: false }
}], option1);


var data5 = [[0,12],[1,10],[2,7],[3,11],[4,15],[5,20],[6,22],[7,19],[8,18],[9,20],[10,17],[11,19],[12,18],[13,14],[14,9],[15,19],[16,18],[17,20],[18,17],[19,19],[20,18],[21,14],[22,15],[23,7],[24,10],[25,6]];

var option2 = {
  series: {
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      barWidth: .4,
      fill: 1
    }
  },
  grid: {
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
    show: false
  }
};

var flot3 = $.plot('#flotChart3', [{
  data: data5,
  color: '#e5e9f2'
},{
  data: [[0,0],[1,0],[2,1],[3,2],[4,5],[5,7],[6,12],[7,15],[8,10],[9,8],[10,10],[11,12],[12,10],[13,4],[14,2],[15,5],[16,8],[17,4],[18,2],[19,2],[20,1],[21,3],[22,2],[23,1],[24,3]],
  color: '#506fd9'
}], option2);

var flot4 = $.plot('#flotChart4', [{
  data: data5,
  color: '#e5e9f2'
},{
  data: [[0,2],[1,3],[2,5],[3,7],[4,12],[5,17],[6,10],[7,14],[8,15],[9,12],[10,8],[11,6],[12,9],[13,12],[14,5],[15,10],[16,12],[17,16],[18,13],[19,7],[20,4],[21,2],[22,2],[23,2],[24,5],[25,4]],
  color: '#85b6ff'
}], option2);

var flot5 = $.plot('#flotChart5', [{
  data: dp3,
  color: '#506fd9',
  lines: {
    lineWidth: 0,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: .75 } ] }
  }
},{
  data: dp3,
  color: '#85b6ff',
  lines: {
    lineWidth: 0,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: .75 } ] }
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
    max: 60
  },
  xaxis: {
    show: false,
    min: 20,
    max: 30
  }
});

// Income and Expenses
$.plot('#flotChart6', [{
  data: [[0,2],[1,3],[2,7],[3,8],[4,2],[5,25],[6,12],[7,3],[8,5],[9,6],[10,1],[11,8],[12,18],[13,7],[14,3],[15,2],[16,3],[17,19],[18,10],[19,10],[20,11],[21,7],[22,5],[23,4],[24,17],[25,11],[26,16],[27,12],[28,3],[29,7],[30,6],[31,4],[32,1],[33,7],[34,2],[35,6],[36,10],[37,3],[38,10],[39,9],[40,2],[41,3],[42,7],[43,8],[44,2],[45,25],[46,12],[47,3],[48,5],[49,6],[50,1],[51,8],[52,18],[53,7],[54,3],[55,2],[56,3],[57,19],[58,10],[59,10],[60,11],[61,8],[62,18],[63,7],[64,3]],
  color: '#506fd9'
},{
  data: [[0,-2],[1,-3],[2,-7],[3,-2],[4,-3],[5,-9],[6,-7],[7,-5],[8,-3],[9,-5],[10,-4],[11,-6],[12,-4],[13,-2],[14,-5],[15,-4],[16,-9],[17,-8],[18,-5],[19,-6],[20,-2],[21,-3],[22,-2],[23,-3],[24,-8],[25,-4],[26,-3],[27,-6],[28,-5],[29,-6],[30,-4],[31,-3],[32,-4],[33,-3],[34,-4],[35,-7],[36,-6],[37,-5],[38,-8],[39,-5],[40,-3],[41,-5],[42,-4],[43,-5],[44,-2],[45,-8],[46,-6],[47,-4],[48,-5],[49,-7],[50,-3],[51,-4],[52,-9],[53,-5],[54,-2],[55,-3],[56,-2],[57,-8],[58,-6],[59,-7],[60,-5],[61,-4],[62,-2],[63,-5],[64,-3]],
  threshold: {
    color: '#85b6ff'
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
    show: true,
    color: 'rgba(72, 94, 144, .06)',
    ticks: [[-10,'-$5000'],[0,'0'],[10,'$5000'],[20,'$10000'],[30,'$15000']],
    min: -12,
    max: 32,
    labelWidth: 45
  },
  xaxis: {
    show: true,
    ticks: [[0,''],[5,'Jan'],[10,'Feb'],[15,'Mar'],[20,'Apr'],[25,'May'],[30,'Jun'],[35,'Jul'],[40,'Aug'],[45,'Sep'],[50,'Oct'],[55,'Nov'],[60,'Dec']],
    color: 'rgba(72, 94, 144, .1)',
    min: -1
  }
});

// Expense Analytics
var flot7 = $.plot('#flotChart7', [{
  data: [[0,12],[1,10],[2,7],[3,11],[4,15],[5,20],[6,22],[7,19],[8,18],[9,20],[10,15]],
  color: '#e5e9f2'
},{
  data: [[0,0],[1,0],[2,1],[3,2],[4,5],[5,7],[6,12],[7,15],[8,10],[9,8],[10,4]],
  color: '#506fd9'
}], {
  series: {
    shadowSize: 0,
    bars: {
      show: true,
      lineWidth: 0,
      barWidth: .4,
      fill: 1
    }
  },
  grid: {
    color: '#e5e9f2',
    borderWidth: 0,
    labelMargin: 5
  },
  yaxis: {
    show: true,
    max: 25
  },
  xaxis: {
    show: true,
    min: -.5,
    max: 11,
    ticks: [[0,'Oct 5'],[2,'Oct 10'],[4,'Oct 15'],[6,'Oct 20'],[8,'Oct 25'],[10,'Oct 30']],
  }
});

// Billed Opportunities
// Donut chart
$('.peity-donut').peity('donut');

// Dark skin integration
function switchDark(enabled) {
  var f1 = flot1.getData();
  var f2 = flot2.getData();
  var f3 = flot3.getData();
  var f4 = flot4.getData();

  var f6 = flot7.getData();
  var f7 = flot7.getOptions();


  if(enabled) {
    f1[0].color = '#506fd9';
    f2[0].color = '#85b6ff';
    f3[0].color = '#222b41';
    f4[0].color = '#222b41';

    f6[0].color = '#222b41';

    f7.xaxes[0].tickColor = 'rgba(255,255,255,.04)';
    f7.yaxes[0].tickColor = 'rgba(255,255,255,.04)';

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');

  } else {
    f1[0].color = '#c1ccf1';
    f2[0].color = '#cde1ff';
    f3[0].color = '#e5e9f2';
    f4[0].color = '#e5e9f2';

    f6[0].color = '#e5e9f2';

    f7.xaxes[0].tickColor = 'rgba(6,7,45, .04)';
    f7.yaxes[0].tickColor = 'rgba(6,7,45, .04)';

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
  }

  flot1.draw();
  flot2.draw();
  flot3.draw();
  flot4.draw();

  flot7.setupGrid();
  flot7.draw();
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
