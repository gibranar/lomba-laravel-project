'use strict'

// Product Inventory
var flot1 = $.plot('#flotChart1', [{
  data: [[0,10],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,11],[10,15],[11,17],[12,14],[13,13],[14,15],[15,13],[16,12],[17,10],[18,11],[19,8],[20,5],[21,3],[22,5],[23,6],[24,5],[25,6],[26,8],[27,10],[28,9],[29,8],[30,5],[31,10],[32,8],[33,6]],
  color: '#506fd9'
},{
  data: [[0,.3],[1,.3],[2,.3],[3,.3],[4,.3],[5,.3],[6,.3],[7,.3],[8,.3],[9,.3],[10,.3],[11,.3],[12,.3],[13,.3],[14,.3],[15,.3],[16,.3],[17,.3],[18,.3],[19,.3],[20,.3],[21,.3],[22,.3],[23,.3],[24,.3],[25,.3],[26,.3],[27,.3],[28,.3],[29,.3],[30,.3],[31,.3],[32,.3],[33,.3]],
  color: '#fff'
},{
  data: [[0,8],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,11],[10,15],[11,17],[12,14],[13,13],[14,15],[15,13],[16,12],[17,10],[18,11],[19,8],[20,5],[21,3],[22,5],[23,6],[24,5],[25,6],[26,8],[27,10],[28,9],[29,8],[30,5],[31,10],[32,8],[33,6]],
  color: '#c8ccd4'
}], {
  series: {
    stack: 0,
    bars: {
      show: true,
      align: 'center',
      lineWidth: 0,
      barWidth: .4,
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
    max: 45,
    ticks: [[0,'$0'],[5,'$50K'],[10,'$100K'],[15,'$150K'],[20,'$200K'],[25,'$250K'],[30,'$300K'],[35,'$350K'],[40,'$400K']]
  },
  xaxis: {
    show: true,
    color: 'rgba(6,7,45, .0)',
    tickSize: 3,
    ticks: [[0,'Jan'],[3,'Feb'],[6,'Mar'],[9,'Apr'],[12,'May'],[15,'Jun'],[18,'Jul'],[21,'Aug'],[24,'Sep'],[27,'Oct'],[30,'Nov'],[33,'Dec']]
  }
});

var color2 = '#d9dde7';
var option2 = {
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
    max: 35
  },
  xaxis: {
    show: false
  }
};

// Purchases
var flot2 = $.plot('#flotChart2', [{
  data: [[0,10],[1,6],[2,5],[3,4],[4,6],[5,5],[6,8],[7,10],[8,9],[9,0],[10,0],[11,17],[12,11],[13,15],[14,10],[15,13],[16,12],[17,10],[18,11],[19,8]],
  color: color2
},{
  data: [[9,20],[10,15]],
  color: '#506fd9'
}], option2);

// Product Views
var flot3 = $.plot('#flotChart3', [{
  data: [[0,5],[1,7],[2,10],[3,9],[4,11],[5,14],[6,12],[7,15],[8,16],[9,0],[10,15],[11,17],[12,11],[13,15],[14,10],[15,13],[16,12],[17,10],[18,11],[19,8]],
  color: color2
},{
  data: [[9,21]],
  color: '#4c5366'
}], option2);

// Added to Cart
var flot4 = $.plot('#flotChart4', [{
  data: [[0,3],[1,2],[2,3],[3,4],[4,6],[5,5],[6,8],[7,15],[8,17],[9,0],[10,0],[11,15],[12,11],[13,10],[14,7],[15,8],[16,6],[17,5],[18,3],[19,4]],
  color: color2
},{
  data: [[9,20],[10,10]],
  color: '#85b6ff'
}], option2);

// Total Sales
var flot5 = $.plot('#flotChart5', [{
  data: [
    [-2,95],[-1,70],[0,60],[1,55],[2,62],[3,54],[4,65],[5,66],[6,60],[7,70],[8,60],[9,70],
    [10,65],[11,75],[12,70],[13,65],[14,85],[15,95],[16,95],[17,105],[18,115],[19,110],
    [20,130],[21,140],[22,165],[23,155],[24,120],[25,110],[26,140],[27,150],[28,170],[29,155],
    [30,165],[31,160],[32,110],[33,140],[34,140],[35,115],[36,105],[37,110],[38,100],[39,110],
    [40,140],[41,130],[42,140],[43,150],[44,180],[45,190],[46,220]
  ],
  color: '#506fd9',
  lines: {
    lineWidth: 1.8,
    fill: true,
    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.25 } ] }
  }
},{
  data: [
    [-2,45],[-1,40],[0,20],[1,25],[2,20],[3,24],[4,15],[5,16],[6,20],[7,30],[8,40],[9,40],
    [10,40],[11,50],[12,45],[13,35],[14,45],[15,45],[16,50],[17,55],[18,65],[19,45],
    [20,50],[21,65],[22,65],[23,60],[24,70],[25,85],[26,90],[27,100],[28,60],[29,45],
    [30,10],[31,10],[32,15],[33,25],[34,30],[35,45],[36,55],[37,50],[38,60],[39,65],
    [40,80],[41,85],[42,80],[43,90],[44,85],[45,80],[46,100]
  ],
  color: '#4c5366',
  lines: {
    lineWidth: 1.5,
    fill: 1,
    fillColor: '#fff'
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
    max: 320
  },
  xaxis: {
    show: true,
    tickColor: 'rgba(72,94,144, 0.1)',
    tickSize: 4,
    ticks: [[0,'Jan'],[4,'Feb'],[8,'Mar'],[12,'Apr'],[16,'May'],[20,'Jun'],[24,'Jul'],[28,'Aug'],[32,'Sep'],[36,'Oct'],[40,'Nov'],[44,'Dec']]
  }
});

// Dark skin integration
function switchDark(enabled) {
  var f1 = flot1.getData();
  var f2 = flot2.getData();
  var f3 = flot3.getData();
  var f4 = flot4.getData();
  var f5 = flot5.getData();

  if(enabled) {
    f1[1].color = '#192030';
    f1[2].color = '#222b41';

    f2[0].color = '#222b41';
    f3[0].color = '#222b41';
    f4[0].color = '#222b41';

    f5[1].lines.fill = false;
    f5[1].color = '#ffffff';

    $('.btn-white').addClass('btn-outline-primary').removeClass('btn-white');

  } else {
    f1[1].color = '#ffffff';
    f1[2].color = '#c8ccd4';

    f2[0].color = '#d9dde7';
    f3[0].color = '#d9dde7';
    f4[0].color = '#d9dde7';

    f5[1].lines.fill = 1;
    f5[1].color = '#4c5366';

    $('.btn-outline-primary').addClass('btn-white').removeClass('btn-outline-primary');
  }

  flot1.draw();
  flot2.draw();
  flot3.draw();
  flot4.draw();
  flot5.draw();
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
