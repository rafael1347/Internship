
      // Initialize and add the map
      function initMap() {
        // The location of ttcf
        const ttcf = { lat: 33.8906933, lng: -118.1882327 };
        // The map, centered at ttcf headquarter
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: ttcf,
        });
        // The marker, positioned at ttcf
        const marker = new google.maps.Marker({
          position: ttcf,
          map: map,
        });
      }



		///DKNG headquarters 
	 function Dkng() {
        // The location of DraftKings
        const dkng = { lat: 42.3506611, lng: -71.075501 };
        // The map, centered at DKNG headquarter
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: dkng,
        });
        // The marker, positioned at DKNG
        const marker = new google.maps.Marker({
          position: dkng,
          map: map,
        });
      }
	  
  
	 
		//Upwork

	function Upwk() {
        // The location of Upwork
        const upwk = { lat: 37.3829788, lng: -121.9773154 };
        // The map, centered at UPWK headquarter
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: upwk,
        });
        // The marker, positioned at Upwork
        const marker = new google.maps.Marker({
          position: upwk,
          map: map,
        });
      }
  

	///HD headquarters 
	 function Hd() {
        // The location of Home Depot
        const hd = { lat: 33.8654896, lng: -84.483597 };
        // The map, centered at HD headquarter
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: hd,
        });
        // The marker, positioned at DKNG
        const marker = new google.maps.Marker({
          position: hd,
          map: map,
        });
      }









	///KO headquarters 
	 function Ko() {
        // The location of Coca-Cola
        const ko = { lat: 33.7711746, lng: -84.3994603};
        // The map, centered at KO headquarter
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: ko,
        });
        // The marker, positioned at KO
        const marker = new google.maps.Marker({
          position: ko,
          map: map,
        });
      }

		//Chart
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
       


      }
  // REFLOW
    $(window).resize(function(){
        drawChart();
    });




