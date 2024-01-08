'use strict'

var flotChartData = [[0,12],[1,10],[2,7],[3,11],[4,15],[5,20],[6,22],[7,19],[8,18],[9,20],[10,17],[11,19],[12,18],[13,14],[14,9]];

var flotChartOption = {
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
    max: 25
  },
  xaxis: {
    show: false
  }
};

var flotChart1 = $.plot('#flotChart1', [{
  data: flotChartData,
  color: '#e5e9f2'
},{
  data: [[0,0],[1,0],[2,0],[3,2],[4,5],[5,2],[6,12],[7,15],[8,10],[9,8],[10,10],[11,7],[12,2],[13,4],[14,0]],
  color: '#506fd9'
}], flotChartOption);

var flotChart2 = $.plot('#flotChart2', [{
  data: flotChartData,
  color: '#e5e9f2'
},{
  data: [[0,2],[1,1],[2,2],[3,4],[4,2],[5,1],[6,0],[7,0],[8,5],[9,2],[10,8],[11,6],[12,9],[13,2],[14,0]],
  color: '#85b6fe'
}], flotChartOption);

var flotChart3 = $.plot('#flotChart3', [{
  data: flotChartData,
  color: '#e5e9f2'
},{
  data: [[0,0],[1,5],[2,2],[3,0],[4,2],[5,7],[6,10],[7,12],[8,8],[9,6],[10,4],[11,2],[12,0],[13,0],[14,0]],
  color: '#0dcaf0'
}], flotChartOption);


// Organic Visit & Conversions
var flotChart4 = $.plot('#flotChart4', [{
  data: [[0,10],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,11],[10,15],[11,17],[12,14],[13,13],[14,15],[15,13],[16,12],[17,10],[18,11],[19,8],[20,5],[21,3],[22,5],[23,6],[24,5],[25,6],[26,8],[27,10],[28,9],[29,8],[30,5]],
  color: '#506fd9'
},{
  data: [[0,.3],[1,.3],[2,.3],[3,.3],[4,.3],[5,.3],[6,.3],[7,.3],[8,.3],[9,.3],[10,.3],[11,.3],[12,.3],[13,.3],[14,.3],[15,.3],[16,.3],[17,.3],[18,.3],[19,.3],[20,.3],[21,.3],[22,.3],[23,.3],[24,.3],[25,.3],[26,.3],[27,.3],[28,.3],[29,.3],[30,.3]],
  color: '#fff'
},{
  data: [[0,8],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,11],[10,15],[11,17],[12,14],[13,13],[14,15],[15,13],[16,12],[17,10],[18,11],[19,8],[20,5],[21,3],[22,5],[23,6],[24,5],[25,6],[26,8],[27,10],[28,9],[29,8],[30,5]],
  color: '#85b6fe'
}], {
  series: {
    stack: 0,
    bars: {
      show: true,
      align: 'center',
      lineWidth: 0,
      barWidth: .35,
      fill: 1
    }
  },
  grid: {
    borderWidth: 0,
    borderColor: '#ededf4',
    labelMargin: 10
  },
  yaxis: {
    show: true,
    color: 'rgba(6,7,45, .04)',
    max: 40,
    ticks: [[0,'$0'],[5,'$50K'],[10,'$100K'],[15,'$150K'],[20,'$200K'],[25,'$250K'],[30,'$300K'],[35,'$350K'],[40,'$400K']]
  },
  xaxis: {
    show: true,
    color: 'rgba(6,7,45, .04)'
  }
});

var flotChart5 = $.plot('#flotChart5', [{
  data: dp3,
  color: '#85b6fe'
},{
  data: dp1,
  color: '#506fd9',
  lines: {
    fill: true,
    fillColor: '#e2e7f8'
  }
}], {
  series: {
    stack: 0,
    shadowSize: 0,
    lines: {
      show: true,
      lineWidth: 1.5
    }
  },
  grid: {
    borderWidth: 0,
    labelMargin: 0
  },
  yaxis: {
    show: false,
    max: 100
  },
  xaxis: {
    show: true,
    min: 0,
    max: 80,
    color: 'rgba(6,7,45, .04)'
  }
});

$('#vmap').vectorMap({
  map: 'world_en',
  backgroundColor: '#fff',
  borderColor: '#fff',
  color: '#d9dde7',
  colors: {
    'us': '#1c96e9',
    'in': '#6984de',
    'au': '#33d685',
    'br': '#fd7e14',
    'cn': '#dc3545',
    'jp': '#0dcaf0',
    'sa': '#ffc107'
  },
  hoverColor: null,
  hoverOpacity: 0.8,
  enableZoom: false,
  showTooltip: true,
  multiSelectRegion: true
});


// Dark skin integration
function switchDark(enabled) {
  var f1 = flotChart1.getData();
  var f2 = flotChart2.getData();
  var f3 = flotChart3.getData();
  var f4 = flotChart4.getOptions();
  var f5 = flotChart5.getData();

  if(enabled) {
    f1[0].color = '#222b41';
    f2[0].color = '#222b41';
    f3[0].color = '#222b41';

    f4.xaxes[0].tickColor = 'rgba(255,255,255,.04)';
    f4.yaxes[0].tickColor = 'rgba(255,255,255,.04)';

    f5[1].lines.fillColor = '#1e273a';

    $('#vmap').vectorMap('set', 'backgroundColor', '#192030');

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');

  } else {
    f1[0].color = '#e5e9f2';
    f2[0].color = '#e5e9f2';
    f3[0].color = '#e5e9f2';

    f4.xaxes[0].tickColor = 'rgba(6,7,45, .04)';
    f4.yaxes[0].tickColor = 'rgba(6,7,45, .04)';

    f5[1].lines.fillColor = '#e2e7f8';

    $('#vmap').vectorMap('set', 'backgroundColor', '#fff');

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
  }

  flotChart1.draw();
  flotChart2.draw();
  flotChart3.draw();

  flotChart4.setupGrid();
  flotChart4.draw();

  flotChart5.draw();
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
