	<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
			<style type="text/css">
				html { height: 100% }
				body { height: 100%; margin: 0; padding: 0 }
				#map_canvas { height: 100% }
			</style>
			<script type="text/javascript"
				src="http://maps.googleapis.com/maps/api/js?sensor=false">
			</script>
			<script src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.1/mootools.js">
			</script>
			<script type="text/javascript"
				src="./markermanager_packed.js">
			</script>

			<script type="text/javascript">
			
				var map;
				var markerManager;

				function initialize() {
				
					// init map
					var myOptions = {
						zoom: 3,
						center: new google.maps.LatLng(44.176295,38.561707),
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						scaleControl: true
					};
					map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

					// add marker manager
					markerManager = new MarkerManager(map);
					google.maps.event.addListener(markerManager, 'loaded', function(){
						setupOverlay();
						google.maps.event.addListener(map, 'zoom_changed', function() {
						updateStatus(markerManager.getMarkerCount(map.getZoom()));
						});
					}); 

				}
				
				function setupOverlay() {

					var blueMarkerImage = new google.maps.MarkerImage('blue-dot.png',
					                                                  new google.maps.Size(32,32),
																	  new google.maps.Point(0,0),
																	  new google.maps.Point(16,32));
					var orangeMarkerImage = new google.maps.MarkerImage('orange-dot.png',
					                                                  new google.maps.Size(32,32),
																	  new google.maps.Point(0,0),
																	  new google.maps.Point(16,32));
					var messageMarkerImage = new google.maps.MarkerImage('text.png',
					                                                  new google.maps.Size(32,37),
																	  new google.maps.Point(0,0),
																	  new google.maps.Point(16,37));
				
					var polyOptions = {
						strokeColor: '#0000FF',
						strokeOpacity: 1.0,
						strokeWeight: 3
					}
					poly = new google.maps.Polyline(polyOptions);
					var path = poly.getPath();				

	var latlng = new google.maps.LatLng(50.8936,-0.3403);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-22T20:41:37.000 \n50.8936,-0.3403", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.25061,0.63967);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T16:22:37.000 \n51.25061,0.63967", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.24525,0.65328);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T16:23:12.000 \n51.24525,0.65328", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09827,1.03119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T16:39:41.000 \n51.09827,1.03119", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09641,1.12103);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T16:49:35.000 \n51.09641,1.12103", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09641,1.12101);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T16:59:36.000 \n51.09641,1.12101", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09634,1.1211);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T17:16:08.000 \n51.09634,1.1211", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.98024,2.22557);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T18:42:30.000 \n50.98024,2.22557", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13463,2.81929);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T19:02:31.000 \n51.13463,2.81929", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13463,2.81938);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T19:12:31.000 \n51.13463,2.81938", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13463,2.81947);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T19:22:31.000 \n51.13463,2.81947", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.12333,3.31592);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T19:33:31.000 \n51.12333,3.31592", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.12324,3.31626);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T19:43:31.000 \n51.12324,3.31626", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.87976,4.25231);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T20:45:01.000 \n50.87976,4.25231", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.89676,4.31917);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T20:54:28.000 \n50.89676,4.31917", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.86731,4.46976);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-23T21:04:36.000 \n50.86731,4.46976", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.23961,6.4694);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T07:03:53.000 \n51.23961,6.4694", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.23687,6.51099);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T07:13:51.000 \n51.23687,6.51099", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.62767,8.90965);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T10:16:37.000 \n50.62767,8.90965", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.70435,9.05265);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T10:23:46.000 \n50.70435,9.05265", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.75563,9.34372);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T10:37:36.000 \n50.75563,9.34372", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79757,9.49028);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T10:47:27.000 \n50.79757,9.49028", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.89217,9.85249);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T10:57:27.000 \n50.89217,9.85249", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.89234,9.85266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:07:27.000 \n50.89234,9.85266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.9626,10.0538);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:17:27.000 \n50.9626,10.0538", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00629,10.17649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:27:30.000 \n51.00629,10.17649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00628,10.17639);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:37:29.000 \n51.00628,10.17639", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00626,10.17632);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:47:28.000 \n51.00626,10.17632", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00628,10.17636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T11:57:27.000 \n51.00628,10.17636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00632,10.17622);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:07:27.000 \n51.00632,10.17622", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.00683,10.18357);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:17:28.000 \n51.00683,10.18357", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.9895,10.45675);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:27:29.000 \n50.9895,10.45675", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.90118,10.69824);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:38:01.000 \n50.90118,10.69824", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.90661,11.01954);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:49:06.000 \n50.90661,11.01954", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.93756,11.37077);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T12:57:39.000 \n50.93756,11.37077", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.93747,11.37128);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:07:39.000 \n50.93747,11.37128", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.90622,12.03158);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:17:30.000 \n50.90622,12.03158", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.90622,12.03192);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:27:30.000 \n50.90622,12.03192", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.90622,12.03226);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:37:30.000 \n50.90622,12.03226", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.86409,12.28319);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:47:46.000 \n50.86409,12.28319", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.82685,12.47334);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T13:56:31.000 \n50.82685,12.47334", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.81046,12.71627);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:05:58.000 \n50.81046,12.71627", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.89302,12.94247);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:15:59.000 \n50.89302,12.94247", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.99147,13.1265);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:26:00.000 \n50.99147,13.1265", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.05868,13.38218);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:37:06.000 \n51.05868,13.38218", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.06339,13.60828);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:46:31.000 \n51.06339,13.60828", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.06339,13.60828);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T14:57:02.000 \n51.06339,13.60828", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04203,13.8087);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:04:06.000 \n51.04203,13.8087", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04203,13.8087);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:14:06.000 \n51.04203,13.8087", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04203,13.8087);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:18:34.000 \n51.04203,13.8087", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04223,13.80939);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:29:42.000 \n51.04223,13.80939", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04223,13.80939);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:39:42.000 \n51.04223,13.80939", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04204,13.80936);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:46:53.000 \n51.04204,13.80936", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04204,13.80936);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T15:56:53.000 \n51.04204,13.80936", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04223,13.80941);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T16:04:50.000 \n51.04223,13.80941", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04223,13.80941);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T16:14:50.000 \n51.04223,13.80941", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04197,13.80934);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T16:23:01.000 \n51.04197,13.80934", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04197,13.80934);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T16:33:01.000 \n51.04197,13.80934", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.04197,13.80934);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-24T16:43:01.000 \n51.04197,13.80934", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.94666,13.87281);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T11:56:07.000 \n50.94666,13.87281", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.81376,13.88391);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:05:04.000 \n50.81376,13.88391", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.71536,13.9836);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:15:04.000 \n50.71536,13.9836", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.61672,13.94706);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:25:01.000 \n50.61672,13.94706", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.59848,13.80417);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:35:03.000 \n50.59848,13.80417", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.52315,13.78387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:45:38.000 \n50.52315,13.78387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.44702,13.7787);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T12:55:06.000 \n50.44702,13.7787", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.34932,13.76879);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:05:05.000 \n50.34932,13.76879", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.28055,13.955);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:16:31.000 \n50.28055,13.955", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.25939,14.01295);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:25:13.000 \n50.25939,14.01295", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.20467,14.13921);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:35:03.000 \n50.20467,14.13921", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.11342,14.28712);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:45:07.000 \n50.11342,14.28712", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.01693,14.19509);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T13:55:03.000 \n50.01693,14.19509", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.9282,14.01343);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:05:13.000 \n49.9282,14.01343", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.85508,13.87196);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:16:41.000 \n49.85508,13.87196", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.81793,13.76385);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:25:02.000 \n49.81793,13.76385", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.80125,13.75254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:26:08.000 \n49.80125,13.75254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.7025,13.43304);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:41:03.000 \n49.7025,13.43304", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.61389,13.32513);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T14:51:30.000 \n49.61389,13.32513", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.61389,13.32513);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T15:01:16.000 \n49.61389,13.32513", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.42448,13.2865);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T15:12:38.000 \n49.42448,13.2865", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.42448,13.2865);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T15:24:33.000 \n49.42448,13.2865", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.33561,13.23016);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-25T15:33:49.000 \n49.33561,13.23016", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.50969,13.29893);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T09:24:55.000 \n49.50969,13.29893", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.58027,13.32743);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T09:34:07.000 \n49.58027,13.32743", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.68518,13.38369);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T09:44:05.000 \n49.68518,13.38369", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.74751,13.55543);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T09:54:07.000 \n49.74751,13.55543", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.80977,13.75838);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T10:04:06.000 \n49.80977,13.75838", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.37808,15.94788);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T12:37:53.000 \n49.37808,15.94788", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.37772,15.94743);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T12:47:41.000 \n49.37772,15.94743", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.37786,15.94756);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T12:57:39.000 \n49.37786,15.94756", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.37786,15.94756);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:07:39.000 \n49.37786,15.94756", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.33457,16.06379);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:17:41.000 \n49.33457,16.06379", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.27178,16.25054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:27:42.000 \n49.27178,16.25054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.18579,16.46196);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:37:46.000 \n49.18579,16.46196", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.1707,16.69557);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:47:43.000 \n49.1707,16.69557", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.21027,16.91549);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T13:57:44.000 \n49.21027,16.91549", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.30595,17.03063);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T14:07:42.000 \n49.30595,17.03063", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.5413,17.17605);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T14:27:44.000 \n49.5413,17.17605", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.55932,17.61789);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T14:37:41.000 \n49.55932,17.61789", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.55949,17.61823);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T14:47:41.000 \n49.55949,17.61823", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.74039,18.05232);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:07:44.000 \n49.74039,18.05232", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.90086,18.30584);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:17:42.000 \n49.90086,18.30584", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.90086,18.30584);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:27:42.000 \n49.90086,18.30584", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.91238,18.33298);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:37:46.000 \n49.91238,18.33298", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.95933,18.40058);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:47:50.000 \n49.95933,18.40058", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.00729,18.47448);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T15:57:43.000 \n50.00729,18.47448", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.07432,18.5213);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:07:54.000 \n50.07432,18.5213", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.11244,18.5467);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:19:16.000 \n50.11244,18.5467", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.19353,18.57305);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:30:06.000 \n50.19353,18.57305", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.25933,18.65554);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:37:41.000 \n50.25933,18.65554", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.25762,18.84179);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:47:42.000 \n50.25762,18.84179", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.22538,19.0843);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T16:58:26.000 \n50.22538,19.0843", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.15919,19.22889);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:07:43.000 \n50.15919,19.22889", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.07964,19.7639);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:17:42.000 \n50.07964,19.7639", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.07964,19.76424);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:27:42.000 \n50.07964,19.76424", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.07964,19.76458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:37:42.000 \n50.07964,19.76458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.08829,19.88716);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:47:42.000 \n50.08829,19.88716", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.05359,19.92871);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-26T17:57:54.000 \n50.05359,19.92871", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.99054,21.26983);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T12:46:31.000 \n49.99054,21.26983", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.03297,21.38972);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T12:55:54.000 \n50.03297,21.38972", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.06221,21.53288);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:05:52.000 \n50.06221,21.53288", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.06219,21.70119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:15:53.000 \n50.06219,21.70119", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.07163,21.88189);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:25:53.000 \n50.07163,21.88189", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.03154,21.97607);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:35:54.000 \n50.03154,21.97607", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.97077,22.02658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:45:54.000 \n49.97077,22.02658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.97077,22.02658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T13:55:54.000 \n49.97077,22.02658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.96211,22.08937);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:05:54.000 \n49.96211,22.08937", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.85259,22.24771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:15:54.000 \n49.85259,22.24771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.85242,22.24762);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:25:54.000 \n49.85242,22.24762", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.82924,22.3711);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:36:05.000 \n49.82924,22.3711", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.80771,22.52026);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:47:20.000 \n49.80771,22.52026", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.79675,22.6395);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T14:56:36.000 \n49.79675,22.6395", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78464,22.74975);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T15:05:55.000 \n49.78464,22.74975", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78287,22.79856);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T15:16:02.000 \n49.78287,22.79856", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78247,22.87332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T15:25:54.000 \n49.78247,22.87332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78247,22.87366);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T15:35:54.000 \n49.78247,22.87366", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.79881,22.9499);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T17:58:59.000 \n49.79881,22.9499", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78518,23.56992);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T19:06:11.000 \n49.78518,23.56992", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.78651,23.67571);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T19:27:49.000 \n49.78651,23.67571", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.80335,23.80714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T19:36:53.000 \n49.80335,23.80714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.83183,23.97404);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-27T19:49:33.000 \n49.83183,23.97404", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.28483,28.47547);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T08:28:50.000 \n49.28483,28.47547", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.95658,28.83971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:06:16.000 \n48.95658,28.83971", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.95658,28.83971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:16:16.000 \n48.95658,28.83971", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.95658,28.83971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:26:16.000 \n48.95658,28.83971", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.87196,29.09412);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:36:14.000 \n48.87196,29.09412", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.87196,29.09429);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:46:14.000 \n48.87196,29.09429", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.83289,29.219);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T09:56:16.000 \n48.83289,29.219", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.80672,29.47791);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:06:14.000 \n48.80672,29.47791", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.80672,29.47808);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:16:14.000 \n48.80672,29.47808", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.80672,29.47825);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:26:14.000 \n48.80672,29.47825", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.80587,29.64377);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:36:18.000 \n48.80587,29.64377", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.78628,29.94867);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:46:19.000 \n48.78628,29.94867", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.78619,29.94884);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T10:56:19.000 \n48.78619,29.94884", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.74688,30.08449);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:06:15.000 \n48.74688,30.08449", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.60838,30.23495);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:17:24.000 \n48.60838,30.23495", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.60817,30.23495);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:27:24.000 \n48.60817,30.23495", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.16312,30.30164);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:36:16.000 \n48.16312,30.30164", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.16291,30.30164);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:46:16.000 \n48.16291,30.30164", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.1627,30.30173);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T11:56:16.000 \n48.1627,30.30173", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.00564,30.30512);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T12:07:02.000 \n48.00564,30.30512", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.16676,30.32059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T12:46:18.000 \n47.16676,30.32059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.1665,30.32059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T12:56:18.000 \n47.1665,30.32059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.16624,30.32068);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T13:06:18.000 \n47.16624,30.32068", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.55355,30.58787);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-07-29T13:56:23.000 \n46.55355,30.58787", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.90521,30.123954);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST09:00:00.000000 \n45.90521,30.123954", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.477797,28.209811);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST10:00:00.000000 \n45.477797,28.209811", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.433735,28.055826);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST11:00:00.000000 \n45.433735,28.055826", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.125761,28.998263);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST11:30:00.000000 \n45.125761,28.998263", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.891299,28.717232);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST12:00:00.000000 \n44.891299,28.717232", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.559179,28.610989);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST12:30:00.000000 \n44.559179,28.610989", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.059539,28.630119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST13:00:00.000000 \n44.059539,28.630119", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.957472,28.605624);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST13:30:00.000000 \n43.957472,28.605624", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.838737,28.575912);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST14:00:00.000000 \n43.838737,28.575912", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.824931,28.581857);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST14:30:00.000000 \n43.824931,28.581857", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.786478,28.577954);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST15:00:00.000000 \n43.786478,28.577954", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.753236,28.571508);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST16:30:00.000000 \n43.753236,28.571508", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.738226,28.558796);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST17:00:00.000000 \n43.738226,28.558796", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.70957,28.54139);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T15:32:46.000 \n43.70957,28.54139", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.6962454933209,28.547647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST17:40:04.000000 \n43.6962454933209,28.547647", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.53722,28.5224);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T15:42:43.000 \n43.53722,28.5224", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.53713,28.52231);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T15:52:43.000 \n43.53713,28.52231", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.47889,28.45942);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:02:44.000 \n43.47889,28.45942", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.4469,28.34803);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:12:43.000 \n43.4469,28.34803", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.42152,28.211);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:22:41.000 \n43.42152,28.211", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.40405,28.07387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:33:03.000 \n43.40405,28.07387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.3322,27.97703);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:42:43.000 \n43.3322,27.97703", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.33211,27.97694);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T16:52:43.000 \n43.33211,27.97694", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.317645338689665,27.961724);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST18:56:52.000000 \n43.317645338689665,27.961724", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.23329,27.96443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T17:03:07.000 \n43.23329,27.96443", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.22740485042849,27.958571);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST19:04:54.000000 \n43.22740485042849,27.958571", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.22130395369646,27.920525);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST19:09:52.000000 \n43.22130395369646,27.920525", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.21383,27.91502);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-02T17:12:43.000 \n43.21383,27.91502", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.204286241688095,27.91136);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-02CEST19:21:17.000000 \n43.204286241688095,27.91136", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.86052382336079,27.881078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST12:26:20.000000 \n42.86052382336079,27.881078", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.78377445253073,27.765176);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST12:43:55.000000 \n42.78377445253073,27.765176", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.69733977889517,27.702463);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST13:01:35.000000 \n42.69733977889517,27.702463", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.65955541194631,27.73362);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST13:36:29.000000 \n42.65955541194631,27.73362", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.64674362649619,27.68071);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST14:41:10.000000 \n42.64674362649619,27.68071", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.6255969805101,27.629769);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:08:27.000000 \n42.6255969805101,27.629769", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.581754714016895,27.606108);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:11:24.000000 \n42.581754714016895,27.606108", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.56498,27.53165);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T13:18:31.000 \n42.56498,27.53165", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.55270819964587,27.479687);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:22:45.000000 \n42.55270819964587,27.479687", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.53144655494957,27.468967);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:25:01.000000 \n42.53144655494957,27.468967", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.51487,27.4628);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T13:27:55.000 \n42.51487,27.4628", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.503600020076114,27.460097);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:30:02.000000 \n42.503600020076114,27.460097", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.47564448677521,27.435192);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:35:01.000000 \n42.47564448677521,27.435192", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.43032,27.48033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T13:37:55.000 \n42.43032,27.48033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.43858710504032,27.482923);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:40:01.000000 \n42.43858710504032,27.482923", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.43023,27.48033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T13:47:55.000 \n42.43023,27.48033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.41059857171105,27.486238);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:50:02.000000 \n42.41059857171105,27.486238", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.40017674541706,27.481508);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST15:52:19.000000 \n42.40017674541706,27.481508", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.36092,27.49007);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T13:57:54.000 \n42.36092,27.49007", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.34000874759187,27.500233);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:00:01.000000 \n42.34000874759187,27.500233", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.281242725300615,27.48904);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:05:01.000000 \n42.281242725300615,27.48904", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.26062,27.48554);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T14:07:55.000 \n42.26062,27.48554", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.24600431104461,27.470301);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:14:43.000000 \n42.24600431104461,27.470301", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.2084119354797,27.434688);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:20:05.000000 \n42.2084119354797,27.434688", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.17359351343472,27.434162);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:25:03.000000 \n42.17359351343472,27.434162", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.16226070146577,27.433818);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:30:02.000000 \n42.16226070146577,27.433818", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.133762174124385,27.430022);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:35:01.000000 \n42.133762174124385,27.430022", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.10598,27.42331);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T14:37:54.000 \n42.10598,27.42331", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.107969601679756,27.422998);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:40:02.000000 \n42.107969601679756,27.422998", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.10598,27.42331);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T14:47:54.000 \n42.10598,27.42331", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.06697828074189,27.428816);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST16:57:37.000000 \n42.06697828074189,27.428816", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.06279,27.42769);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T14:58:09.000 \n42.06279,27.42769", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.05671145073793,27.431982);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:00:02.000000 \n42.05671145073793,27.431982", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.041366704750075,27.451314);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:01:41.000000 \n42.041366704750075,27.451314", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.026739946806664,27.477114);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:05:02.000000 \n42.026739946806664,27.477114", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.00861,27.50238);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:08:07.000 \n42.00861,27.50238", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.992682510153685,27.515006);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:10:01.000000 \n41.992682510153685,27.515006", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.97726276509073,27.524055);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:15:02.000000 \n41.97726276509073,27.524055", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.9774,27.51637);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:17:56.000 \n41.9774,27.51637", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.97540879573756,27.501351);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:20:03.000000 \n41.97540879573756,27.501351", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.97200185205277,27.471744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST17:25:01.000000 \n41.97200185205277,27.471744", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.96822,27.46043);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:28:31.000 \n41.96822,27.46043", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.96822,27.46043);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:38:31.000 \n41.96822,27.46043", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.96816,27.46031);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:47:53.000 \n41.96816,27.46031", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.96816,27.46031);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T15:57:53.000 \n41.96816,27.46031", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.969129899521946,27.458741);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST18:05:02.000000 \n41.969129899521946,27.458741", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.96175,27.39582);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T16:39:37.000 \n41.96175,27.39582", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.90332,27.36169);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T16:46:32.000 \n41.90332,27.36169", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.81201,27.3059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T16:56:12.000 \n41.81201,27.3059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.75336250572096,27.224414);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST19:00:02.000000 \n41.75336250572096,27.224414", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.72899,27.23275);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:06:13.000 \n41.72899,27.23275", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.72327895325893,27.216365);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST19:10:01.000000 \n41.72327895325893,27.216365", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.72232,27.21642);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:16:25.000 \n41.72232,27.21642", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.714490097814966,27.212057);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST19:20:05.000000 \n41.714490097814966,27.212057", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.54869,27.13478);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:26:16.000 \n41.54869,27.13478", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.58947515132233,27.157334);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST19:35:01.000000 \n41.58947515132233,27.157334", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.54852,27.13469);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:36:16.000 \n41.54852,27.13469", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.500135615733136,27.111539);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST19:40:01.000000 \n41.500135615733136,27.111539", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.4826,27.24815);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:47:36.000 \n41.4826,27.24815", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.43134,27.46387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T17:57:24.000 \n41.43134,27.46387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.34286,27.66033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:06:10.000 \n41.34286,27.66033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.23203,27.8703);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:16:09.000 \n41.23203,27.8703", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.19118865994248,28.093365);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST20:25:05.000000 \n41.19118865994248,28.093365", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.18168,28.11208);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:26:11.000 \n41.18168,28.11208", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.12269477405819,28.228906);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST20:35:05.000000 \n41.12269477405819,28.228906", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.12165,28.22892);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:36:10.000 \n41.12165,28.22892", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.1166,28.25585);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:46:11.000 \n41.1166,28.25585", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.07994046872335,28.372927);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST20:55:01.000000 \n41.07994046872335,28.372927", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.06662,28.39627);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T18:56:11.000 \n41.06662,28.39627", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.059370802724246,28.468463);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:00:01.000000 \n41.059370802724246,28.468463", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.10680203235032,28.535346);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:05:01.000000 \n41.10680203235032,28.535346", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.1062,28.55709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T19:06:11.000 \n41.1062,28.55709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.09786517755787,28.621737);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:10:03.000000 \n41.09786517755787,28.621737", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.07576974431783,28.700264);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:15:01.000000 \n41.07576974431783,28.700264", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.05437,28.72195);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T19:16:11.000 \n41.05437,28.72195", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.06463371728053,28.786625);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:20:07.000000 \n41.06463371728053,28.786625", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.055662862917444,28.856956);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:25:03.000000 \n41.055662862917444,28.856956", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.0515,28.87044);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T19:26:12.000 \n41.0515,28.87044", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.02757931866917,28.926569);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:30:01.000000 \n41.02757931866917,28.926569", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.01017160104018,28.952875);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:35:02.000000 \n41.01017160104018,28.952875", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.00593,28.95337);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T19:36:12.000 \n41.00593,28.95337", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.00321871379556,28.975316);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-03CEST21:40:05.000000 \n41.00321871379556,28.975316", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.00463,28.97889);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-03T19:46:14.000 \n41.00463,28.97889", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.01926559890622,28.979521);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-04CEST13:05:02.000000 \n41.01926559890622,28.979521", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.0508892069794,28.952402);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-04CEST13:50:01.000000 \n41.0508892069794,28.952402", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.014554327805094,28.978318);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-04CEST13:55:01.000000 \n41.014554327805094,28.978318", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.00141504819216,29.050372);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-04CEST14:05:01.000000 \n41.00141504819216,29.050372", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.01261745346213,28.978143);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-04CEST14:10:01.000000 \n41.01261745346213,28.978143", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.00548,28.97994);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-04T16:22:31.000 \n41.00548,28.97994\nMessage: hello from a Istanbul rooftop via spot", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(41.02475036456442,28.976536);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:15:01.000000 \n41.02475036456442,28.976536", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.035742186225136,28.99318);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:20:01.000000 \n41.035742186225136,28.99318", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.043795055544585,29.006897);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:25:01.000000 \n41.043795055544585,29.006897", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.0574686396085,29.025082);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:30:01.000000 \n41.0574686396085,29.025082", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.0069586531467,29.070236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:35:02.000000 \n41.0069586531467,29.070236", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.99765280404691,29.13919);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:40:01.000000 \n40.99765280404691,29.13919", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.99893323678575,29.176543);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:45:02.000000 \n40.99893323678575,29.176543", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.97250821164128,29.259608);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:50:01.000000 \n40.97250821164128,29.259608", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.93378883888041,29.330039);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST08:55:01.000000 \n40.93378883888041,29.330039", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.921819032687864,29.350274);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:05:01.000000 \n40.921819032687864,29.350274", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.877877743756656,29.38713);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:10:02.000000 \n40.877877743756656,29.38713", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.86924488338172,29.397406);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:20:01.000000 \n40.86924488338172,29.397406", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.824373895301065,29.463949);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:25:01.000000 \n40.824373895301065,29.463949", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.80143,29.50155);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T07:26:01.000 \n40.80143,29.50155", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.79241,29.51599);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T07:26:58.000 \n40.79241,29.51599", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.78914399900578,29.560908);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:30:01.000000 \n40.78914399900578,29.560908", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.79671304364778,29.627072);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:35:02.000000 \n40.79671304364778,29.627072", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.794699563831685,29.737815);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:40:02.000000 \n40.794699563831685,29.737815", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.77039,29.79226);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T07:41:27.000 \n40.77039,29.79226", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.785487943389846,29.865419);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:45:01.000000 \n40.785487943389846,29.865419", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.801802728629546,29.946397);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:50:02.000000 \n40.801802728629546,29.946397", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.78162,29.97703);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T07:51:09.000 \n40.78162,29.97703", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.77482769660501,30.029386);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST09:55:07.000000 \n40.77482769660501,30.029386", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.72503254928916,30.155243);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:00:01.000000 \n40.72503254928916,30.155243", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.70406,30.19865);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T08:02:07.000 \n40.70406,30.19865", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.70304,30.21302);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T08:02:39.000 \n40.70304,30.21302\nMessage: just did 3k miles #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(40.70315619171736,30.249473);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:05:01.000000 \n40.70315619171736,30.249473", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.73083705175049,30.388589);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:10:02.000000 \n40.73083705175049,30.388589", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.74871274105836,30.494966);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:15:02.000000 \n40.74871274105836,30.494966", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.74609211516354,30.625434);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:20:01.000000 \n40.74609211516354,30.625434", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.7421,30.65984);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T08:20:27.000 \n40.7421,30.65984", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.77937252288831,30.751308);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:25:01.000000 \n40.77937252288831,30.751308", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.809201816690894,30.83362);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:30:03.000000 \n40.809201816690894,30.83362", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.802454962798215,30.84991);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:40:01.000000 \n40.802454962798215,30.84991", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.84623524288015,30.930344);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST10:55:01.000000 \n40.84623524288015,30.930344", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.8600146788167,30.99919);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:00:02.000000 \n40.8600146788167,30.99919", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.85377945169954,31.107176);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:05:01.000000 \n40.85377945169954,31.107176", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.80904285776919,31.235384);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:10:01.000000 \n40.80904285776919,31.235384", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.79797071871578,31.328457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:15:01.000000 \n40.79797071871578,31.328457", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.777118105112805,31.411556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:20:01.000000 \n40.777118105112805,31.411556", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.74056954041111,31.462378);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:25:01.000000 \n40.74056954041111,31.462378", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.72076,31.48997);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T09:26:24.000 \n40.72076,31.48997", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.75608553568931,31.543359);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:30:02.000000 \n40.75608553568931,31.543359", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.76887,31.65558);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T09:35:19.000 \n40.76887,31.65558", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.80373232612713,31.683949);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST11:37:22.000000 \n40.80373232612713,31.683949\nAccuracy 3926 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.74071,31.84198);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T09:45:18.000 \n40.74071,31.84198", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.7648,32.05087);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T09:55:17.000 \n40.7648,32.05087", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.77660633933863,32.132144);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST12:00:01.000000 \n40.77660633933863,32.132144\nAccuracy 3494 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.68119,32.22176);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:05:19.000 \n40.68119,32.22176", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.61277,32.26039);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:15:20.000 \n40.61277,32.26039", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.59526782018864,32.305766);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST12:20:01.000000 \n40.59526782018864,32.305766\nAccuracy 3503 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.47604,32.35197);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:25:19.000 \n40.47604,32.35197", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.3673,32.46417);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:35:21.000 \n40.3673,32.46417", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.26515959310635,32.476368);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST12:45:02.000000 \n40.26515959310635,32.476368\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25454,32.48052);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:45:22.000 \n40.25454,32.48052", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.2411,32.5017);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T10:55:28.000 \n40.2411,32.5017", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24107,32.50179);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:05:24.000 \n40.24107,32.50179", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24112,32.50172);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:15:28.000 \n40.24112,32.50172", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24118,32.50159);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:25:28.000 \n40.24118,32.50159", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24215596048623,32.501499);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST13:35:01.000000 \n40.24215596048623,32.501499\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24114,32.50166);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:35:48.000 \n40.24114,32.50166", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24058,32.50348);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:45:36.000 \n40.24058,32.50348", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.21743535509281,32.560437);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST13:50:03.000000 \n40.21743535509281,32.560437\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.02312,32.64561);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T11:56:19.000 \n40.02312,32.64561", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.0166355529263,32.627888);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:05:02.000000 \n40.0166355529263,32.627888\nAccuracy 20 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.02312,32.64561);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:06:19.000 \n40.02312,32.64561", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.02793337335638,32.660107);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:10:01.000000 \n40.02793337335638,32.660107\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.03668888405711,32.811717);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:15:01.000000 \n40.03668888405711,32.811717\nAccuracy 1803 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.02134,32.82663);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:15:31.000 \n40.02134,32.82663", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.00109079992892,32.942337);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:25:02.000000 \n40.00109079992892,32.942337\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.97204,32.97976);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:25:35.000 \n39.97204,32.97976", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.966845636349376,32.996282);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:30:02.000000 \n39.966845636349376,32.996282\nAccuracy 2433 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.94885962928544,33.043925);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:35:01.000000 \n39.94885962928544,33.043925\nAccuracy 40 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.94807,33.04531);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:35:29.000 \n39.94807,33.04531", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96546136577131,33.10113);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:40:01.000000 \n39.96546136577131,33.10113\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.95932,33.18075);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:45:47.000 \n39.95932,33.18075", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.925139005637234,33.217218);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:50:01.000000 \n39.925139005637234,33.217218\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.9189891031813,33.253173);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST14:55:01.000000 \n39.9189891031813,33.253173\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.94749,33.29793);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T12:55:44.000 \n39.94749,33.29793", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.925786995358685,33.356439);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:00:01.000000 \n39.925786995358685,33.356439\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.93351587275098,33.421613);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:05:01.000000 \n39.93351587275098,33.421613\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.92764,33.42884);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:05:25.000 \n39.92764,33.42884", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.86813790925632,33.454146);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:10:06.000000 \n39.86813790925632,33.454146\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.83874237483339,33.475988);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:15:02.000000 \n39.83874237483339,33.475988\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.83101,33.47854);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:15:30.000 \n39.83101,33.47854", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.82870953367162,33.479828);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:20:04.000000 \n39.82870953367162,33.479828\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77543737650864,33.482049);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:25:01.000000 \n39.77543737650864,33.482049\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.75945,33.50999);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:25:30.000 \n39.75945,33.50999", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.722135218878584,33.562592);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:30:01.000000 \n39.722135218878584,33.562592\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.6680530726117,33.613018);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:35:01.000000 \n39.6680530726117,33.613018\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.66623,33.61351);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:35:20.000 \n39.66623,33.61351", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.606585041758,33.666523);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:40:02.000000 \n39.606585041758,33.666523\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.57057460893944,33.730941);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:45:01.000000 \n39.57057460893944,33.730941\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.55494,33.74395);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:45:26.000 \n39.55494,33.74395", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5047406447407,33.786763);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:50:01.000000 \n39.5047406447407,33.786763\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.472566150434645,33.841548);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST15:55:01.000000 \n39.472566150434645,33.841548\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.47603,33.85727);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T13:55:23.000 \n39.47603,33.85727", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.4728951452655,33.931874);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:00:01.000000 \n39.4728951452655,33.931874\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.43703170853705,33.969508);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:05:01.000000 \n39.43703170853705,33.969508\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.42176,33.98003);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:05:37.000 \n39.42176,33.98003", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.3637358583894,34.010403);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:10:06.000000 \n39.3637358583894,34.010403\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.32121252466675,34.064618);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:15:01.000000 \n39.32121252466675,34.064618\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.31108,34.08872);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:15:22.000 \n39.31108,34.08872", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.258298509328725,34.122706);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:20:01.000000 \n39.258298509328725,34.122706\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.20439,34.14605);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:25:22.000 \n39.20439,34.14605", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.16273800240853,34.158511);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:30:03.000000 \n39.16273800240853,34.158511\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.12423260317089,34.193771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:35:02.000000 \n39.12423260317089,34.193771\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.11977,34.19572);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:35:38.000 \n39.11977,34.19572", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.095517050868764,34.242432);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:40:01.000000 \n39.095517050868764,34.242432\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.06467653138907,34.339512);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:45:01.000000 \n39.06467653138907,34.339512\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.06375,34.3414);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:45:25.000 \n39.06375,34.3414", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.05909061838805,34.401812);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:50:01.000000 \n39.05909061838805,34.401812\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.02118820843101,34.448544);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST16:55:09.000000 \n39.02118820843101,34.448544\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.01622,34.45224);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T14:55:48.000 \n39.01622,34.45224", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.011217363571426,34.463542);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST17:00:02.000000 \n39.011217363571426,34.463542\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.996257596273985,34.498076);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-05CEST17:05:02.000000 \n38.996257596273985,34.498076\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.9538,34.56599);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:05:18.000 \n38.9538,34.56599", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.83768,34.55805);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:16:17.000 \n38.83768,34.55805", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.75224,34.61736);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:26:03.000 \n38.75224,34.61736", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.67333,34.70396);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:35:41.000 \n38.67333,34.70396", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.63069,34.76254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:45:30.000 \n38.63069,34.76254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.6425,34.82864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T15:55:29.000 \n38.6425,34.82864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64181,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:05:29.000 \n38.64181,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64181,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:15:30.000 \n38.64181,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64178,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:25:43.000 \n38.64178,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:35:49.000 \n38.64175,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64172,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:45:50.000 \n38.64172,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.6418,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T16:56:16.000 \n38.6418,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64191,34.82674);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T17:06:01.000 \n38.64191,34.82674", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T17:25:30.000 \n38.64183,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T17:35:30.000 \n38.64183,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T17:45:30.000 \n38.64183,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T17:55:30.000 \n38.64183,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:05:30.000 \n38.64183,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:15:28.000 \n38.64175,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64172,34.82668);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:25:32.000 \n38.64172,34.82668", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:35:25.000 \n38.64175,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:45:35.000 \n38.64183,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64176,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T18:55:47.000 \n38.64176,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64167,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:05:33.000 \n38.64167,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64173,34.82662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:15:36.000 \n38.64173,34.82662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.6419,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:25:36.000 \n38.6419,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.6418,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:36:08.000 \n38.6418,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64182,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:45:29.000 \n38.64182,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64177,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T19:55:48.000 \n38.64177,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64173,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:05:48.000 \n38.64173,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64179,34.82651);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:15:30.000 \n38.64179,34.82651", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64196,34.82625);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:25:26.000 \n38.64196,34.82625", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64186,34.82636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:35:34.000 \n38.64186,34.82636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64174,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:46:51.000 \n38.64174,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.82653);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T20:55:28.000 \n38.64175,34.82653", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64178,34.82647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:05:27.000 \n38.64178,34.82647", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.82657);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:15:24.000 \n38.64175,34.82657", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64179,34.82657);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:25:24.000 \n38.64179,34.82657", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82666);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:35:24.000 \n38.64183,34.82666", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64177,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:45:21.000 \n38.64177,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64164,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T21:55:26.000 \n38.64164,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64174,34.82653);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:05:22.000 \n38.64174,34.82653", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64164,34.82666);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:15:28.000 \n38.64164,34.82666", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64178,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:25:43.000 \n38.64178,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64196,34.82649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:35:23.000 \n38.64196,34.82649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64165,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:45:36.000 \n38.64165,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64182,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T22:55:28.000 \n38.64182,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64185,34.8267);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:06:15.000 \n38.64185,34.8267", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64176,34.8267);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:16:15.000 \n38.64176,34.8267", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64176,34.8267);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:26:15.000 \n38.64176,34.8267", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64174,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:35:24.000 \n38.64174,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64175,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:45:31.000 \n38.64175,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64177,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-05T23:55:22.000 \n38.64177,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64174,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:05:39.000 \n38.64174,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.6417,34.82664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:15:39.000 \n38.6417,34.82664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64182,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:25:37.000 \n38.64182,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64177,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:35:37.000 \n38.64177,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64183,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:45:29.000 \n38.64183,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64174,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T00:55:29.000 \n38.64174,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64186,34.82655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T01:05:38.000 \n38.64186,34.82655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64182,34.8266);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T01:15:36.000 \n38.64182,34.8266", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64185,34.82667);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T01:25:20.000 \n38.64185,34.82667", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64185,34.82658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T01:35:20.000 \n38.64185,34.82658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64293507043757,34.825909);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST03:55:01.000000 \n38.64293507043757,34.825909\nAccuracy 60 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64515603615843,34.839065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST04:05:01.000000 \n38.64515603615843,34.839065\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64301606918743,34.826066);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST06:35:01.000000 \n38.64301606918743,34.826066\nAccuracy 58 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.63379721145687,34.80687);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST10:30:01.000000 \n38.63379721145687,34.80687\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.62553533893337,34.799516);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST10:35:05.000000 \n38.62553533893337,34.799516\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.55084549031538,34.764833);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST10:45:01.000000 \n38.55084549031538,34.764833\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.63176724278039,34.738689);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST12:00:02.000000 \n38.63176724278039,34.738689\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.62926228143139,34.796283);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST12:05:01.000000 \n38.62926228143139,34.796283\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64509003717711,34.829268);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST12:15:01.000000 \n38.64509003717711,34.829268\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.64151209239941,34.845318);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST12:20:01.000000 \n38.64151209239941,34.845318\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.644752042393925,34.83152);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST13:15:01.000000 \n38.644752042393925,34.83152\nAccuracy 77 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.677785532352246,34.839003);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:00:01.000000 \n38.677785532352246,34.839003\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.70469,34.85481);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:02:55.000 \n38.70469,34.85481", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.7252567987458,34.953599);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:10:02.000000 \n38.7252567987458,34.953599\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.73877,34.996);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:12:17.000 \n38.73877,34.996", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.75796778568047,35.020365);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:15:02.000000 \n38.75796778568047,35.020365\nAccuracy 3319 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.73231501514142,35.11556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:20:01.000000 \n38.73231501514142,35.11556\nAccuracy 3364 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.69566,35.15537);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:22:18.000 \n38.69566,35.15537", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.701063172721504,35.252177);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:30:01.000000 \n38.701063172721504,35.252177\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.73525,35.28862);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:32:58.000 \n38.73525,35.28862", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.75214238292776,35.309998);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:35:02.000000 \n38.75214238292776,35.309998\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.764713188421624,35.363521);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:40:03.000000 \n38.764713188421624,35.363521\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.77689,35.37432);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:42:19.000 \n38.77689,35.37432", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.787302838761875,35.471665);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:50:01.000000 \n38.787302838761875,35.471665\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.79364,35.56763);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T12:52:19.000 \n38.79364,35.56763", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.79756567984912,35.590652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST14:55:02.000000 \n38.79756567984912,35.590652\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.81444,35.62066);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:02:17.000 \n38.81444,35.62066", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.82764021396262,35.642269);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST15:05:04.000000 \n38.82764021396262,35.642269\nAccuracy 20 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.84808,35.6622);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:12:17.000 \n38.84808,35.6622", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.86618861636237,35.693961);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST15:15:09.000000 \n38.86618861636237,35.693961\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.91553,35.78165);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:22:19.000 \n38.91553,35.78165", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.97707,35.90281);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:32:19.000 \n38.97707,35.90281", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.04257700443438,35.926126);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST15:35:01.000000 \n39.04257700443438,35.926126\nAccuracy 3535 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.06616,36.00715);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:42:41.000 \n39.06616,36.00715", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.1344,36.08886);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T13:52:41.000 \n39.1344,36.08886", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21743974851808,36.086337);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST16:00:01.000000 \n39.21743974851808,36.086337\nAccuracy 3856 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22757,36.12412);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:02:38.000 \n39.22757,36.12412", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.29367,36.26007);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:12:21.000 \n39.29367,36.26007", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.35443,36.40176);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:22:20.000 \n39.35443,36.40176", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.42776,36.55924);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:33:28.000 \n39.42776,36.55924", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.46476,36.72762);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:42:22.000 \n39.46476,36.72762", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5227,36.87548);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T14:52:31.000 \n39.5227,36.87548", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.57214,37.00732);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:02:31.000 \n39.57214,37.00732", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.58195842968546,37.029517);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST17:05:03.000000 \n39.58195842968546,37.029517\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.67126,37.00875);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:14:04.000 \n39.67126,37.00875", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.68768076288399,37.009567);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST17:20:01.000000 \n39.68768076288399,37.009567\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.7262,37.01367);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:23:01.000 \n39.7262,37.01367", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.7446658629266,37.037545);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST17:25:01.000000 \n39.7446658629266,37.037545\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.788126175840155,37.092321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST17:30:02.000000 \n39.788126175840155,37.092321\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.80604,37.1175);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:32:36.000 \n39.80604,37.1175", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.82813,37.29111);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:42:18.000 \n39.82813,37.29111", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.86298,37.48986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T15:52:30.000 \n39.86298,37.48986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87565,37.6875);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:02:17.000 \n39.87565,37.6875", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.86201,37.90067);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:14:07.000 \n39.86201,37.90067", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.88500264201745,37.977874);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST18:20:01.000000 \n39.88500264201745,37.977874\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.89165,38.01808);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:22:47.000 \n39.89165,38.01808", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.887098608798134,38.029186);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-06CEST18:25:02.000000 \n39.887098608798134,38.029186\nAccuracy 25 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87213,38.10709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:32:18.000 \n39.87213,38.10709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87215,38.10715);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:42:44.000 \n39.87215,38.10715", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87214,38.10709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T16:52:23.000 \n39.87214,38.10709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87127,38.13436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T17:02:21.000 \n39.87127,38.13436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87263,38.16829);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T17:12:37.000 \n39.87263,38.16829", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87262,38.16814);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T17:22:52.000 \n39.87262,38.16814", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87262,38.16814);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-06T17:32:30.000 \n39.87262,38.16814", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.85411,38.39632);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T05:51:07.000 \n39.85411,38.39632", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.89643,38.46365);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:00:29.000 \n39.89643,38.46365", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.93009,38.59044);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:10:30.000 \n39.93009,38.59044", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.94776,38.72327);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:20:30.000 \n39.94776,38.72327", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.91003,38.7709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:30:30.000 \n39.91003,38.7709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.91,38.7709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:40:55.000 \n39.91,38.7709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.91012,38.77082);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T06:51:22.000 \n39.91012,38.77082", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.91003,38.77086);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:01:00.000 \n39.91003,38.77086", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.89883,38.83585);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:10:56.000 \n39.89883,38.83585", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.88681,39.01498);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:20:56.000 \n39.88681,39.01498", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87682,39.13251);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:30:51.000 \n39.87682,39.13251", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.86716,39.27121);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:40:52.000 \n39.86716,39.27121", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.85862,39.29091);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T07:52:08.000 \n39.85862,39.29091", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.83601482052551,39.353055);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST10:00:01.000000 \n39.83601482052551,39.353055\nAccuracy 3272 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.81976,39.35058);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:00:38.000 \n39.81976,39.35058", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77527137913347,39.419526);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST10:05:02.000000 \n39.77527137913347,39.419526\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.74024393280005,39.481192);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST10:10:01.000000 \n39.74024393280005,39.481192\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.73778,39.48354);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:10:31.000 \n39.73778,39.48354", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.74038193061958,39.520388);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST10:15:02.000000 \n39.74038193061958,39.520388\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.7205722435651,39.567447);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST10:20:01.000000 \n39.7205722435651,39.567447\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.71328,39.58473);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:20:31.000 \n39.71328,39.58473", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.64963,39.74495);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:30:35.000 \n39.64963,39.74495", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.58772,39.89157);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:40:38.000 \n39.58772,39.89157", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.55703,40.03798);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T08:50:36.000 \n39.55703,40.03798", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.60159105297197,40.16555);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:00:03.000000 \n39.60159105297197,40.16555\nAccuracy 2794 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.60584,40.18582);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:00:50.000 \n39.60584,40.18582", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.679312701892776,40.185818);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:05:01.000000 \n39.679312701892776,40.185818\nAccuracy 3501 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.73883863033583,40.23342);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:10:01.000000 \n39.73883863033583,40.23342\nAccuracy 3666 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.73481,40.26056);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:10:38.000 \n39.73481,40.26056", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76959546887822,40.305623);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:15:02.000000 \n39.76959546887822,40.305623\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77595,40.39308);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:20:49.000 \n39.77595,40.39308", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.81364978348288,40.448258);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:25:04.000000 \n39.81364978348288,40.448258\nAccuracy 3613 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.802995940612604,40.516991);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:30:01.000000 \n39.802995940612604,40.516991\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.80859,40.53024);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:30:37.000 \n39.80859,40.53024", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.87171236871803,40.564443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:35:04.000000 \n39.87171236871803,40.564443\nAccuracy 3938 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.86725,40.63499);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:42:13.000 \n39.86725,40.63499", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.93684725321078,40.688117);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST11:45:01.000000 \n39.93684725321078,40.688117\nAccuracy 2741 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.94029,40.75653);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T09:52:13.000 \n39.94029,40.75653", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.97032,40.9118);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:00:40.000 \n39.97032,40.9118", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96833,41.09779);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:10:48.000 \n39.96833,41.09779", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96223,41.20787);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:20:48.000 \n39.96223,41.20787", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96232,41.20796);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:30:48.000 \n39.96232,41.20796", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96236,41.20796);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:40:48.000 \n39.96236,41.20796", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96232,41.20792);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T10:50:48.000 \n39.96232,41.20792", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.9572,41.34151);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:00:40.000 \n39.9572,41.34151", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.98172253895877,41.397186);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST13:05:01.000000 \n39.98172253895877,41.397186\nAccuracy 3965 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.97971,41.47277);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:10:40.000 \n39.97971,41.47277", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.97708,41.67003);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:20:32.000 \n39.97708,41.67003", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96651,41.84083);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:30:33.000 \n39.96651,41.84083", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.03067,42.06699);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:42:20.000 \n40.03067,42.06699", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.03792221455654,42.184148);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST13:50:01.000000 \n40.03792221455654,42.184148\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.03205,42.19772);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T11:50:45.000 \n40.03205,42.19772", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.96351,42.28312);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:00:59.000 \n39.96351,42.28312", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.88544,42.35751);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:10:41.000 \n39.88544,42.35751", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.82497,42.443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:20:41.000 \n39.82497,42.443", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.79736,42.57943);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:30:35.000 \n39.79736,42.57943", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.81276170898962,42.682599);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST14:40:02.000000 \n39.81276170898962,42.682599\nAccuracy 2918 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77621,42.76729);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:40:38.000 \n39.77621,42.76729", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.73937,42.955);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T12:50:39.000 \n39.73937,42.955", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.71540632515283,43.011625);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST14:55:01.000000 \n39.71540632515283,43.011625\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.71313736098482,43.082079);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST15:00:01.000000 \n39.71313736098482,43.082079\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.71233,43.0919);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:00:39.000 \n39.71233,43.0919", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.67709,43.27487);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:10:57.000 \n39.67709,43.27487", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.633757613491774,43.412825);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST15:20:01.000000 \n39.633757613491774,43.412825\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.6283,43.44329);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:21:00.000 \n39.6283,43.44329", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5919772718893,43.614785);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST15:30:01.000000 \n39.5919772718893,43.614785\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.59524,43.63293);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:30:42.000 \n39.59524,43.63293", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.604614072812865,43.678894);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST15:35:01.000000 \n39.604614072812865,43.678894\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.60301,43.67847);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:40:49.000 \n39.60301,43.67847", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5868,43.78193);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T13:50:53.000 \n39.5868,43.78193", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54383002990022,43.970661);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST16:00:01.000000 \n39.54383002990022,43.970661\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54229,43.97319);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T14:00:32.000 \n39.54229,43.97319", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.542578049600614,44.037868);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST16:05:02.000000 \n39.542578049600614,44.037868\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.55279,44.06059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T14:11:13.000 \n39.55279,44.06059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5554128476154,44.062303);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST16:15:02.000000 \n39.5554128476154,44.062303\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54724,44.06812);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-07T14:20:42.000 \n39.54724,44.06812", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54911794668706,44.07971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-07CEST16:25:01.000000 \n39.54911794668706,44.07971\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.52095738972777,44.129815);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST08:25:01.000000 \n39.52095738972777,44.129815\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.52004340410278,44.130251);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST08:40:02.000000 \n39.52004340410278,44.130251\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.529585254016474,44.111559);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST08:55:01.000000 \n39.529585254016474,44.111559\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54802,44.08168);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T07:04:42.000 \n39.54802,44.08168", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54802396390326,44.083832);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST09:05:01.000000 \n39.54802396390326,44.083832\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.54873,44.08224);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T07:14:41.000 \n39.54873,44.08224", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.55904379046417,44.117214);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST09:20:02.000000 \n39.55904379046417,44.117214\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.555,44.18987);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T07:24:41.000 \n39.555,44.18987", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.45663,44.27754);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T07:34:42.000 \n39.45663,44.27754", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.41564,44.37223);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T07:44:42.000 \n39.41564,44.37223", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.41353107740583,44.376924);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST09:50:04.000000 \n39.41353107740583,44.376924\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.3991383032257,44.386956);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST11:55:02.000000 \n39.3991383032257,44.386956\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.364161851711664,44.387854);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST12:45:02.000000 \n39.364161851711664,44.387854\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.28536,44.81898);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T11:24:36.000 \n39.28536,44.81898", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21439,44.89587);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T11:34:09.000 \n39.21439,44.89587", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.15247,44.95041);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T11:44:07.000 \n39.15247,44.95041", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.10573,44.95103);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T11:54:09.000 \n39.10573,44.95103", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.99179,45.00502);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:04:09.000 \n38.99179,45.00502", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.90953,45.05004);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:15:21.000 \n38.90953,45.05004", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.86914,45.10686);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:24:08.000 \n38.86914,45.10686", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.84011,45.23747);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:34:09.000 \n38.84011,45.23747", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71299,45.21621);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:44:08.000 \n38.71299,45.21621", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71293,45.21597);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T12:54:36.000 \n38.71293,45.21597", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71296,45.21593);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T13:04:58.000 \n38.71296,45.21593", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71301,45.21584);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T13:14:37.000 \n38.71301,45.21584", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71294,45.21593);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T13:25:09.000 \n38.71294,45.21593", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71297,45.21601);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T13:34:17.000 \n38.71297,45.21601", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.67623,45.21627);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T13:47:12.000 \n38.67623,45.21627\nMessage: IRR is hard to fathom. Lunch 120000!?!", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(38.20874,46.097);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T14:56:31.000 \n38.20874,46.097\nMessage: Driving in Iran is not for the weak heart", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(38.10244,46.26562);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T15:13:15.000 \n38.10244,46.26562", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.08102,46.28338);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T15:30:15.000 \n38.08102,46.28338", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.07461,46.28194);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-08T15:46:55.000 \n38.07461,46.28194", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.07611776440552,46.283065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-08CEST20:50:01.000000 \n38.07611776440552,46.283065\nAccuracy 150 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.05873,46.31482);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T07:29:02.000 \n38.05873,46.31482", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.0323,46.42436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T07:39:01.000 \n38.0323,46.42436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.0323,46.42436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T07:49:01.000 \n38.0323,46.42436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.0323,46.42436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T07:59:01.000 \n38.0323,46.42436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.98518,46.5436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T08:09:02.000 \n37.98518,46.5436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.95467,46.64033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T08:19:00.000 \n37.95467,46.64033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.86021,46.76865);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T08:29:02.000 \n37.86021,46.76865", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.76773,46.84635);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T08:39:00.000 \n37.76773,46.84635", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62454,46.8504);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T08:48:30.000 \n37.62454,46.8504\nMessage: A+ empty toll road to Tehran #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.42418,46.98838);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:03:06.000 \n37.42418,46.98838", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.31235,47.08691);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:12:47.000 \n37.31235,47.08691", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.26117,47.25149);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:22:31.000 \n37.26117,47.25149", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.16483,47.3876);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:32:31.000 \n37.16483,47.3876", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.1283,47.55659);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:42:32.000 \n37.1283,47.55659", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.12926,47.7601);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:52:31.000 \n37.12926,47.7601", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.11563,47.87468);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T09:58:20.000 \n37.11563,47.87468\nMessage: Starting to get really hot as we approach", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.03411,47.9841);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T10:15:03.000 \n37.03411,47.9841", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.97887,48.04501);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T10:24:25.000 \n36.97887,48.04501", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.86329,48.15462);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T10:34:24.000 \n36.86329,48.15462", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.74052,48.26131);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T10:44:25.000 \n36.74052,48.26131", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.66485,48.42713);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T10:54:24.000 \n36.66485,48.42713", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.65372,48.57288);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:04:39.000 \n36.65372,48.57288", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.57637,48.71441);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:14:26.000 \n36.57637,48.71441", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.46076,48.8677);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:24:55.000 \n36.46076,48.8677", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.36468,49.014);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:34:24.000 \n36.36468,49.014", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.26991,49.1636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:44:24.000 \n36.26991,49.1636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.14168,49.30143);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T11:54:38.000 \n36.14168,49.30143", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.04958,49.47931);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:05:07.000 \n36.04958,49.47931", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.04702,49.64943);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:14:27.000 \n36.04702,49.64943", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.15767,49.78506);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:24:25.000 \n36.15767,49.78506", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.26295,49.92977);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:34:23.000 \n36.26295,49.92977", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.29585,49.95554);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:44:25.000 \n36.29585,49.95554", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.31385,49.97382);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T12:54:27.000 \n36.31385,49.97382", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.3138,49.97378);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:04:25.000 \n36.3138,49.97378", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.31382,49.97378);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:14:25.000 \n36.31382,49.97378", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.3138,49.97383);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:24:24.000 \n36.3138,49.97383", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.32912,49.98696);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:34:24.000 \n36.32912,49.98696", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.24807,50.12223);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:44:24.000 \n36.24807,50.12223", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.16754,50.29376);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T13:54:26.000 \n36.16754,50.29376", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.08029,50.46188);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:04:25.000 \n36.08029,50.46188", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.05072,50.52114);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:17:28.000 \n36.05072,50.52114\nMessage: Lots of speed cameras&trappers. We 2slow", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(35.91543,50.80198);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:25:24.000 \n35.91543,50.80198", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.87349,50.89404);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:38:22.000 \n35.87349,50.89404", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.77335,51.0413);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:43:58.000 \n35.77335,51.0413", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.72437,51.19732);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T14:53:46.000 \n35.72437,51.19732", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.72783,51.38119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T15:13:48.000 \n35.72783,51.38119", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.7434,51.4029);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T15:23:49.000 \n35.7434,51.4029", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.73527,51.43309);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T15:34:01.000 \n35.73527,51.43309", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.72845,51.44056);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-09T15:44:01.000 \n35.72845,51.44056", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.59888,51.38999);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T07:30:44.000 \n35.59888,51.38999", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.51299,51.30014);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T07:41:51.000 \n35.51299,51.30014\nMessage: Making a sightseeing detour south to Yazd", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(35.21579,51.08763);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:04:28.000 \n35.21579,51.08763", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.1141,50.93755);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:14:28.000 \n35.1141,50.93755", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.08773,50.89771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:24:28.000 \n35.08773,50.89771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.97334,50.85689);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:34:28.000 \n34.97334,50.85689", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.82122,50.85239);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:44:28.000 \n34.82122,50.85239", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.68342,50.8935);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T08:54:28.000 \n34.68342,50.8935", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.56718,50.98757);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:04:28.000 \n34.56718,50.98757", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.45269,51.10505);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:14:28.000 \n34.45269,51.10505", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.35511,51.25418);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:24:28.000 \n34.35511,51.25418", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.19557,51.25603);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:34:28.000 \n34.19557,51.25603", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.04541,51.31506);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:44:28.000 \n34.04541,51.31506", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.93102,51.38469);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T09:54:28.000 \n33.93102,51.38469", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.85489,51.53953);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:04:28.000 \n33.85489,51.53953", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75157,51.68922);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:14:27.000 \n33.75157,51.68922", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.6634,51.86264);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:24:28.000 \n33.6634,51.86264", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.61184,51.9619);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:34:27.000 \n33.61184,51.9619", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.56309,51.97507);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:44:27.000 \n33.56309,51.97507", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.66966,51.85289);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T10:54:27.000 \n33.66966,51.85289", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75017,51.70089);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:04:27.000 \n33.75017,51.70089", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75004,51.70155);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:14:28.000 \n33.75004,51.70155", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75004,51.70155);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:24:28.000 \n33.75004,51.70155", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75005,51.70153);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:34:28.000 \n33.75005,51.70153", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.75005,51.70153);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:44:28.000 \n33.75005,51.70153", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.76175,51.67039);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T11:54:27.000 \n33.76175,51.67039", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.85183,51.54963);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T12:04:27.000 \n33.85183,51.54963", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.90574,51.43829);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T12:14:28.000 \n33.90574,51.43829", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.98873,51.41831);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T12:24:28.000 \n33.98873,51.41831", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.97573,51.44121);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T12:34:27.000 \n33.97573,51.44121", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.97441,51.44176);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:05:12.000 \n33.97441,51.44176", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.99942,51.46923);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:15:45.000 \n33.99942,51.46923", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.0482,51.47367);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:25:07.000 \n34.0482,51.47367", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.12936,51.4838);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:36:04.000 \n34.12936,51.4838", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.15304,51.49127);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:42:27.000 \n34.15304,51.49127", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.15304,51.49127);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:52:27.000 \n34.15304,51.49127", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.17216,51.50468);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T13:57:34.000 \n34.17216,51.50468", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.17216,51.50468);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T14:06:06.000 \n34.17216,51.50468", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25231,51.62598);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T14:16:41.000 \n34.25231,51.62598", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25231,51.62598);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T14:26:41.000 \n34.25231,51.62598", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25864,51.65349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T15:02:37.000 \n34.25864,51.65349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25864,51.65349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T15:12:37.000 \n34.25864,51.65349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25864,51.65349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T15:22:37.000 \n34.25864,51.65349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.25238,51.62619);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T15:25:06.000 \n34.25238,51.62619\nMessage: Climbed dunes in a Persian desert. :)", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(34.21157,51.52378);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T15:41:43.000 \n34.21157,51.52378", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.05623,51.46931);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:01:39.000 \n34.05623,51.46931", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.00136,51.44391);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:11:37.000 \n34.00136,51.44391", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.99226,51.4658);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:21:37.000 \n33.99226,51.4658", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.97075,51.47492);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:31:37.000 \n33.97075,51.47492", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.88864,51.4761);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:42:26.000 \n33.88864,51.4761", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.83512,51.59412);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T16:53:03.000 \n33.83512,51.59412", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.39502,51.9687);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T17:33:05.000 \n33.39502,51.9687", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.16547,51.78114);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T17:51:21.000 \n33.16547,51.78114", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.15855,51.75902);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T17:52:17.000 \n33.15855,51.75902", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.73027,51.66263);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T18:13:42.000 \n32.73027,51.66263", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.73027,51.66263);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T18:23:42.000 \n32.73027,51.66263", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.73027,51.66263);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-11T18:33:42.000 \n32.73027,51.66263", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.63668952886483,51.655515);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-11CEST21:55:02.000000 \n32.63668952886483,51.655515\nAccuracy 36 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71409,52.36558);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T12:56:27.000 \n32.71409,52.36558", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71549,52.38951);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T12:57:41.000 \n32.71549,52.38951\nMessage: Really missing an A/C #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(32.71622,52.4021);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T12:58:19.000 \n32.71622,52.4021", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71977,52.57233);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:08:21.000 \n32.71977,52.57233", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.74502,52.7351);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:18:20.000 \n32.74502,52.7351", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.73515,52.87981);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:28:20.000 \n32.73515,52.87981", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.81647,53.02478);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:38:20.000 \n32.81647,53.02478", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.81997,53.15252);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:48:20.000 \n32.81997,53.15252", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.72262,53.27165);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T13:58:22.000 \n32.72262,53.27165", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.6375,53.40474);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T14:08:21.000 \n32.6375,53.40474", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.41967,53.744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T14:30:18.000 \n32.41967,53.744", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.41967,53.744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T14:40:18.000 \n32.41967,53.744", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.41967,53.744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T14:50:18.000 \n32.41967,53.744", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.29874,54.02132);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T14:55:04.000 \n32.29874,54.02132", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.29874,54.02132);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T15:05:04.000 \n32.29874,54.02132", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.29874,54.02132);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T15:15:04.000 \n32.29874,54.02132", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.89884,54.34964);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T15:47:44.000 \n31.89884,54.34964", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.89884,54.34964);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T15:57:44.000 \n31.89884,54.34964", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.89884,54.34964);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-12T16:07:44.000 \n31.89884,54.34964", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.902073222405043,54.370449);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-13CEST08:15:01.000000 \n31.902073222405043,54.370449\nAccuracy 40 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.84599,54.30692);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T08:39:24.000 \n31.84599,54.30692", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(31.96104,54.26553);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T08:48:52.000 \n31.96104,54.26553", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.05096,54.19305);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T08:58:52.000 \n32.05096,54.19305", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.13867,54.12157);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:08:51.000 \n32.13867,54.12157", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.27789,54.06664);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:18:52.000 \n32.27789,54.06664", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.34031,53.96334);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:28:52.000 \n32.34031,53.96334", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.38177,53.81172);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:38:54.000 \n32.38177,53.81172", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.44507,53.67465);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:49:17.000 \n32.44507,53.67465", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.54266,53.50951);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T09:59:17.000 \n32.54266,53.50951", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.66275,53.37491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:09:09.000 \n32.66275,53.37491", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.75918,53.22711);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:19:09.000 \n32.75918,53.22711", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.84195,53.11308);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:28:53.000 \n32.84195,53.11308", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.79007,52.9885);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:39:29.000 \n32.79007,52.9885", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71172,52.85392);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:50:25.000 \n32.71172,52.85392", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.74408,52.6955);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T10:58:52.000 \n32.74408,52.6955", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.72218,52.50909);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T11:08:58.000 \n32.72218,52.50909", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71686,52.37884);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T11:28:57.000 \n32.71686,52.37884", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.71411,52.35387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T11:38:53.000 \n32.71411,52.35387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.69369,52.11298);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T11:51:54.000 \n32.69369,52.11298", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.67868,51.99413);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T11:58:51.000 \n32.67868,51.99413", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.67639,51.86234);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T12:08:54.000 \n32.67639,51.86234", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.70596,51.75007);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T12:18:54.000 \n32.70596,51.75007", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.85187,51.58987);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T12:39:37.000 \n32.85187,51.58987", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(32.98163,51.50058);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T12:49:11.000 \n32.98163,51.50058", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.08485,51.59231);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T12:58:53.000 \n33.08485,51.59231", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.16071,51.76766);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:08:52.000 \n33.16071,51.76766", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.28958,51.87806);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:19:05.000 \n33.28958,51.87806", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.40949,51.98791);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:28:53.000 \n33.40949,51.98791", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.55959,51.97529);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:39:43.000 \n33.55959,51.97529", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.60048,51.97417);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:42:07.000 \n33.60048,51.97417", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.69894,51.81206);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T13:51:44.000 \n33.69894,51.81206", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.7926,51.65583);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:01:44.000 \n33.7926,51.65583", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.88158,51.48597);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:11:44.000 \n33.88158,51.48597", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(33.94213,51.3725);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:21:44.000 \n33.94213,51.3725", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.07428,51.30918);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:31:43.000 \n34.07428,51.30918", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.22485,51.25386);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:41:44.000 \n34.22485,51.25386", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.37487,51.23382);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T14:51:44.000 \n34.37487,51.23382", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.5964,50.96463);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T15:11:44.000 \n34.5964,50.96463", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.68676,50.88916);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T15:21:45.000 \n34.68676,50.88916", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.82348,50.85226);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T15:31:43.000 \n34.82348,50.85226", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.86631,50.85552);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T15:41:43.000 \n34.86631,50.85552", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.86628,50.85552);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T15:51:44.000 \n34.86628,50.85552", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.86627,50.8555);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:05:08.000 \n34.86627,50.8555", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.8663,50.85545);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:11:45.000 \n34.8663,50.85545", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.86636,50.85529);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:21:47.000 \n34.86636,50.85529", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(34.86968,50.85494);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:32:15.000 \n34.86968,50.85494", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.01015,50.85563);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:41:44.000 \n35.01015,50.85563", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.12005,50.94865);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T16:51:45.000 \n35.12005,50.94865", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.21061,51.07627);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T17:01:48.000 \n35.21061,51.07627", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.35295,51.19461);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T17:12:36.000 \n35.35295,51.19461", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.49468,51.25772);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T17:22:08.000 \n35.49468,51.25772", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.56794,51.37031);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T17:31:44.000 \n35.56794,51.37031", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.66203,51.34469);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-13T17:41:44.000 \n35.66203,51.34469", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.72984558222437,51.440007);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-13CEST21:05:01.000000 \n35.72984558222437,51.440007\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.49185,51.67213);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T07:12:27.000 \n35.49185,51.67213", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.43373,51.76387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T07:22:30.000 \n35.43373,51.76387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.38234,51.8884);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T07:32:28.000 \n35.38234,51.8884", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.3532,52.05809);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T07:42:28.000 \n35.3532,52.05809", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.26357,52.1819);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T07:52:28.000 \n35.26357,52.1819", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.242,52.34777);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:02:30.000 \n35.242,52.34777", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.27031,52.51476);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:12:30.000 \n35.27031,52.51476", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.25886,52.69994);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:22:27.000 \n35.25886,52.69994", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.26045,52.77847);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:32:30.000 \n35.26045,52.77847", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.29814,52.962);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:42:29.000 \n35.29814,52.962", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.39478,53.08669);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T08:52:29.000 \n35.39478,53.08669", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.46861,53.20086);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:02:28.000 \n35.46861,53.20086", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.54809,53.33227);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:12:28.000 \n35.54809,53.33227", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.58852,53.41879);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:22:28.000 \n35.58852,53.41879", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.63249,53.52088);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:32:46.000 \n35.63249,53.52088", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.70424,53.62225);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:42:46.000 \n35.70424,53.62225", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.76598,53.73458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T09:52:34.000 \n35.76598,53.73458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.86883,53.92178);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:04:07.000 \n35.86883,53.92178", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(35.96523,54.03947);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:12:30.000 \n35.96523,54.03947", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.08038,54.18738);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:23:41.000 \n36.08038,54.18738", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.11938,54.269);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:32:29.000 \n36.11938,54.269", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.1194,54.26903);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:43:07.000 \n36.1194,54.26903", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.1194,54.26903);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:45:11.000 \n36.1194,54.26903\nMessage: Can't find decent place to eat. Hanger.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(36.20843,54.44335);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T10:57:08.000 \n36.20843,54.44335", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.26028,54.63299);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:07:10.000 \n36.26028,54.63299", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.31071,54.79506);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:16:58.000 \n36.31071,54.79506", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.361,54.96559);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:27:00.000 \n36.361,54.96559", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.43545,55.10819);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:36:58.000 \n36.43545,55.10819", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.4412,55.28554);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:47:00.000 \n36.4412,55.28554", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.41994,55.47147);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T11:56:59.000 \n36.41994,55.47147", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.41436,55.66116);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:06:59.000 \n36.41436,55.66116", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.39765,55.82617);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:17:00.000 \n36.39765,55.82617", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.41293,55.94196);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:27:00.000 \n36.41293,55.94196", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.42356,56.07858);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:37:00.000 \n36.42356,56.07858", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.39029,56.25749);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:46:59.000 \n36.39029,56.25749", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.35554,56.38213);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T12:56:58.000 \n36.35554,56.38213", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.35717,56.47569);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:06:58.000 \n36.35717,56.47569", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.36126,56.6572);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:16:59.000 \n36.36126,56.6572", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.35131,56.83595);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:27:01.000 \n36.35131,56.83595", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.32302,57.0131);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:36:59.000 \n36.32302,57.0131", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.26448,57.19828);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:47:01.000 \n36.26448,57.19828", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.22467,57.38755);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T13:57:00.000 \n36.22467,57.38755", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.20871,57.53973);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:07:00.000 \n36.20871,57.53973", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.19417,57.66657);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:16:57.000 \n36.19417,57.66657", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.18998,57.6796);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:26:57.000 \n36.18998,57.6796", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.22783,57.71522);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:36:57.000 \n36.22783,57.71522", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.28284,57.82946);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:46:59.000 \n36.28284,57.82946", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.34882,57.91211);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T14:57:02.000 \n36.34882,57.91211", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.4044,58.04111);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:07:02.000 \n36.4044,58.04111", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.47075,58.10137);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:16:58.000 \n36.47075,58.10137", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.47074,58.10137);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:18:59.000 \n36.47074,58.10137\nMessage: Eyed cultivated land & the moon rising", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(36.61796,58.21771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:35:55.000 \n36.61796,58.21771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.66512,58.33801);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:45:59.000 \n36.66512,58.33801", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.70416,58.43731);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T15:56:02.000 \n36.70416,58.43731", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.76312,58.49089);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:05:44.000 \n36.76312,58.49089", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.84967,58.52981);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:15:44.000 \n36.84967,58.52981", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(36.93331,58.61683);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:25:46.000 \n36.93331,58.61683", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.00195,58.60558);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:36:24.000 \n37.00195,58.60558", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.09585,58.50104);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:46:24.000 \n37.09585,58.50104", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.10838,58.51157);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-14T16:56:36.000 \n37.10838,58.51157", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.10609,58.50926);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T04:10:34.000 \n37.10609,58.50926", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.10961,58.51252);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T04:21:07.000 \n37.10961,58.51252\nMessage: Hungry and heading for the Turkmen border", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.2676,58.49411);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T04:30:15.000 \n37.2676,58.49411", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.37093,58.52044);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T04:40:04.000 \n37.37093,58.52044", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.3902,58.57254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T04:50:04.000 \n37.3902,58.57254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.38908,58.57442);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:00:04.000 \n37.38908,58.57442", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.38908,58.57442);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:08:58.000 \n37.38908,58.57442", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.38906,58.57444);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:09:22.000 \n37.38906,58.57444", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.38906,58.57442);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:19:19.000 \n37.38906,58.57442", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.39429,58.57331);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:29:20.000 \n37.39429,58.57331", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.42739,58.58097);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:39:18.000 \n37.42739,58.58097", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.42155,58.57138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:49:19.000 \n37.42155,58.57138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.41661,58.53962);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T05:59:19.000 \n37.41661,58.53962", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62858,58.40718);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T06:49:20.000 \n37.62858,58.40718", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62899,58.40742);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T06:59:19.000 \n37.62899,58.40742", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62529,58.41428);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:09:37.000 \n37.62529,58.41428", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62724,58.40332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:19:38.000 \n37.62724,58.40332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62828,58.40744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:29:19.000 \n37.62828,58.40744", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62831,58.40744);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:39:19.000 \n37.62831,58.40744", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62829,58.40742);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:49:19.000 \n37.62829,58.40742", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62829,58.40742);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T07:59:19.000 \n37.62829,58.40742", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.6283,58.40742);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T08:09:18.000 \n37.6283,58.40742", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62974,58.40652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T08:57:55.000 \n37.62974,58.40652", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62975,58.40652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T08:58:15.000 \n37.62975,58.40652\nMessage: I think we are in Turkmenistan.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.6298,58.40652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T09:17:45.000 \n37.6298,58.40652", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.6298,58.40649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T09:27:38.000 \n37.6298,58.40649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62978,58.40654);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T09:37:50.000 \n37.62978,58.40654", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62976,58.40652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T09:47:38.000 \n37.62976,58.40652", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62975,58.40654);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T09:57:37.000 \n37.62975,58.40654", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63012,58.40613);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:07:39.000 \n37.63012,58.40613", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62994,58.40607);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:20:25.000 \n37.62994,58.40607", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62994,58.40607);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:30:25.000 \n37.62994,58.40607", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63045,58.40581);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:40:25.000 \n37.63045,58.40581", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63045,58.40579);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:47:37.000 \n37.63045,58.40579", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66488,58.42186);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T10:57:52.000 \n37.66488,58.42186", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.80375,58.36667);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:09:26.000 \n37.80375,58.36667", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.80375,58.36667);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:19:26.000 \n37.80375,58.36667", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.82883,58.37543);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:27:38.000 \n37.82883,58.37543", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.87481,58.30238);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:37:50.000 \n37.87481,58.30238", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.87878,58.35431);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:49:03.000 \n37.87878,58.35431", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.89706,58.35929);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T11:59:03.000 \n37.89706,58.35929", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.9398,58.3768);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T12:09:03.000 \n37.9398,58.3768", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.93989,58.37701);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T12:17:50.000 \n37.93989,58.37701", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.93967,58.37725);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T12:28:07.000 \n37.93967,58.37725", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.93981,58.37714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T12:37:38.000 \n37.93981,58.37714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.93947,58.37731);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-15T12:47:38.000 \n37.93947,58.37731", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.942428799086244,58.377389);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-15CEST15:50:01.000000 \n37.942428799086244,58.377389\nAccuracy 133 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.97627,58.39377);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T08:45:25.000 \n37.97627,58.39377", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.06419,58.39349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T08:54:46.000 \n38.06419,58.39349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.13328,58.36641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T09:00:59.000 \n38.13328,58.36641\nMessage: VeryHot, heading for Darvaza crater alone", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(38.44434,58.49926);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T09:26:02.000 \n38.44434,58.49926", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.59372,58.50188);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T09:36:01.000 \n38.59372,58.50188", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.73785,58.49484);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T09:45:59.000 \n38.73785,58.49484", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.83268,58.48891);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T09:56:01.000 \n38.83268,58.48891", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.94559,58.50848);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:06:12.000 \n38.94559,58.50848", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.07783,58.53986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:17:10.000 \n39.07783,58.53986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.19457,58.54346);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:26:55.000 \n39.19457,58.54346", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.29376,58.58138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:36:02.000 \n39.29376,58.58138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.3762,58.55666);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:46:02.000 \n39.3762,58.55666", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.48729,58.50065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T10:58:21.000 \n39.48729,58.50065", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.6141,58.44881);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:08:21.000 \n39.6141,58.44881", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.68238,58.44701);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:16:00.000 \n39.68238,58.44701", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.80741,58.42724);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:26:01.000 \n39.80741,58.42724", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.92161,58.42295);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:36:01.000 \n39.92161,58.42295", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.00438,58.44034);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:46:00.000 \n40.00438,58.44034", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.05798,58.42652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T11:56:00.000 \n40.05798,58.42652", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.10382,58.41598);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T12:05:59.000 \n40.10382,58.41598", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.21502,58.4004);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T12:16:04.000 \n40.21502,58.4004", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25,58.38787);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T12:26:04.000 \n40.25,58.38787", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25433,58.38845);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T12:54:45.000 \n40.25433,58.38845", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25433,58.38845);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T13:04:45.000 \n40.25433,58.38845", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25433,58.38845);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T13:14:45.000 \n40.25433,58.38845", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.2543,58.38839);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T13:45:24.000 \n40.2543,58.38839", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25426,58.38839);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T13:55:24.000 \n40.25426,58.38839", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.2543,58.38839);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T14:05:24.000 \n40.2543,58.38839", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25433,58.38836);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T15:13:19.000 \n40.25433,58.38836\nMessage: About to start 3 mile desert trek wth gps", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(40.25524,58.39716);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T15:19:50.000 \n40.25524,58.39716", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25617,58.40628);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T15:34:27.000 \n40.25617,58.40628", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25442,58.42364);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T15:59:05.000 \n40.25442,58.42364\nMessage: We see glow of crater on approach :))", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(40.25272,58.43533);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T16:22:37.000 \n40.25272,58.43533\nMessage: We found Hell's Gate!!", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(40.25277,58.43549);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T16:24:45.000 \n40.25277,58.43549", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25119,58.43739);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T16:56:37.000 \n40.25119,58.43739", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.2512,58.43739);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:06:27.000 \n40.2512,58.43739", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25225,58.43373);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:17:12.000 \n40.25225,58.43373", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25314,58.42673);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:26:46.000 \n40.25314,58.42673", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25364,58.41757);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:37:13.000 \n40.25364,58.41757", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25406,58.411);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:46:58.000 \n40.25406,58.411", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25418,58.40467);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T17:56:54.000 \n40.25418,58.40467", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25475,58.39714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T18:07:15.000 \n40.25475,58.39714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25515,58.39154);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T18:16:36.000 \n40.25515,58.39154", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25428,58.38843);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T18:47:05.000 \n40.25428,58.38843", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25434,58.38832);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-16T19:06:41.000 \n40.25434,58.38832", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.21845,58.39693);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T03:22:06.000 \n40.21845,58.39693", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.13047,58.41347);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T03:31:38.000 \n40.13047,58.41347", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.00874,58.43917);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T03:41:37.000 \n40.00874,58.43917", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.90771,58.42156);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T03:51:38.000 \n39.90771,58.42156", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76998,58.43551);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:01:38.000 \n39.76998,58.43551", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.63204,58.44225);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:11:38.000 \n39.63204,58.44225", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50032,58.48619);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:21:37.000 \n39.50032,58.48619", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37717,58.55623);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:31:36.000 \n39.37717,58.55623", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.30947,58.58777);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:41:38.000 \n39.30947,58.58777", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.25259,58.56151);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T04:51:37.000 \n39.25259,58.56151", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21923,58.54816);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T05:01:38.000 \n39.21923,58.54816", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.2042,58.54524);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T05:11:38.000 \n39.2042,58.54524", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.03161,58.52784);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T05:26:35.000 \n39.03161,58.52784\nMessage: Fined for \"speeding\". 15$ bribe", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(38.84882,58.49168);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T05:41:34.000 \n38.84882,58.49168", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.76146,58.48443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T05:51:25.000 \n38.76146,58.48443", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.70366,58.49662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T06:03:01.000 \n38.70366,58.49662\nMessage: Filled up for 15 manat... 5$", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(38.47726,58.50604);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T06:20:10.000 \n38.47726,58.50604", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.34455,58.50864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T06:30:03.000 \n38.34455,58.50864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.23625,58.44815);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T06:40:00.000 \n38.23625,58.44815", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.14531,58.36826);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T06:50:04.000 \n38.14531,58.36826", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.08162,58.38467);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T07:00:41.000 \n38.08162,58.38467", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.89029,58.61457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T09:57:55.000 \n37.89029,58.61457", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.8239,58.75817);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T10:14:13.000 \n37.8239,58.75817", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.72686,59.0134);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T10:34:29.000 \n37.72686,59.0134", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67435,59.11054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T10:44:18.000 \n37.67435,59.11054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.6193,59.22039);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T10:54:19.000 \n37.6193,59.22039", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.56928,59.33827);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:04:18.000 \n37.56928,59.33827", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.51056,59.44221);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:14:19.000 \n37.51056,59.44221", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.43626,59.52991);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:24:17.000 \n37.43626,59.52991", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.37045,59.613);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:34:19.000 \n37.37045,59.613", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.3366,59.70344);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:44:18.000 \n37.3366,59.70344", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.27433,59.81605);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T11:54:18.000 \n37.27433,59.81605", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22668,59.96183);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:04:19.000 \n37.22668,59.96183", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22602,60.13895);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:09:44.000 \n37.22602,60.13895", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22602,60.13895);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:19:44.000 \n37.22602,60.13895", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.23293,60.15469);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:21:06.000 \n37.23293,60.15469", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.23462,60.15854);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:21:41.000 \n37.23462,60.15854", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.28617,60.27323);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:31:42.000 \n37.28617,60.27323", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.29869,60.30123);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:33:56.000 \n37.29869,60.30123\nMessage: East Ashgabat road very poor. N road=B", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.35745,60.43274);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:49:39.000 \n37.35745,60.43274", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.37856,60.48154);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T12:59:28.000 \n37.37856,60.48154", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.36993,60.49081);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:09:28.000 \n37.36993,60.49081", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.36269,60.55636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:19:26.000 \n37.36269,60.55636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.35314,60.62496);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:29:24.000 \n37.35314,60.62496", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.35799,60.72229);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:39:24.000 \n37.35799,60.72229", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.30799,60.77731);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:49:24.000 \n37.30799,60.77731", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.23275,60.86095);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T13:59:43.000 \n37.23275,60.86095", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22908,60.97809);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:09:31.000 \n37.22908,60.97809", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22698,61.0798);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:19:31.000 \n37.22698,61.0798", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22457,61.18775);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:29:40.000 \n37.22457,61.18775", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.22375,61.22131);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:39:24.000 \n37.22375,61.22131", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.27938,61.31605);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:50:13.000 \n37.27938,61.31605", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.32688,61.41471);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T14:59:45.000 \n37.32688,61.41471", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.38196,61.48419);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:09:24.000 \n37.38196,61.48419", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.42729,61.59772);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:19:28.000 \n37.42729,61.59772", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.46681,61.67986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:29:28.000 \n37.46681,61.67986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.52916,61.731);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:39:25.000 \n37.52916,61.731", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.58728,61.79503);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:49:28.000 \n37.58728,61.79503", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.59378,61.83758);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-17T15:59:27.000 \n37.59378,61.83758", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.57248,61.83384);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T05:39:07.000 \n37.57248,61.83384", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63825,62.15219);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:09:54.000 \n37.63825,62.15219", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63825,62.15219);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:19:54.000 \n37.63825,62.15219", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63825,62.15219);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:29:54.000 \n37.63825,62.15219", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.65927,62.14187);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:33:02.000 \n37.65927,62.14187", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66156,62.14839);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:48:45.000 \n37.66156,62.14839", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66364,62.16307);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T06:58:44.000 \n37.66364,62.16307", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67799,62.17139);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:08:35.000 \n37.67799,62.17139", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.678,62.17135);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:18:35.000 \n37.678,62.17135", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67796,62.17135);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:28:35.000 \n37.67796,62.17135", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67621,62.17146);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:38:34.000 \n37.67621,62.17146", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.6704,62.16691);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:48:39.000 \n37.6704,62.16691", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67114,62.16862);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T07:58:36.000 \n37.67114,62.16862", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67226,62.1709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T08:08:39.000 \n37.67226,62.1709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66235,62.18094);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T08:18:39.000 \n37.66235,62.18094", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66626,62.19197);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T08:28:35.000 \n37.66626,62.19197", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.66624,62.19197);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T08:38:33.000 \n37.66624,62.19197", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.65854,62.13979);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T08:58:38.000 \n37.65854,62.13979", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.62254,62.12704);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:08:37.000 \n37.62254,62.12704", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.58369,62.14466);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:18:36.000 \n37.58369,62.14466", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.61008,62.26937);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:28:36.000 \n37.61008,62.26937", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.64872,62.38237);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:39:04.000 \n37.64872,62.38237", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.74356,62.4777);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:48:35.000 \n37.74356,62.4777", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.7775,62.52495);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T09:58:34.000 \n37.7775,62.52495", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.86769,62.60875);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:08:36.000 \n37.86769,62.60875", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.9594,62.65715);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:18:35.000 \n37.9594,62.65715", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.9785,62.68539);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:28:36.000 \n37.9785,62.68539", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.08948,62.79311);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:38:36.000 \n38.08948,62.79311", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.19209,62.8792);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:48:36.000 \n38.19209,62.8792", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.29188,62.96497);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T10:58:35.000 \n38.29188,62.96497", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.40178,63.07798);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T11:08:34.000 \n38.40178,63.07798", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.52979,63.15414);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T11:18:36.000 \n38.52979,63.15414", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.55737,63.16576);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T11:58:24.000 \n38.55737,63.16576", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.55737,63.16576);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:08:24.000 \n38.55737,63.16576", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.55737,63.16576);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:18:24.000 \n38.55737,63.16576", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.55735,63.16568);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:27:47.000 \n38.55735,63.16568", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.63843,63.22312);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:37:46.000 \n38.63843,63.22312", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.63843,63.22312);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:48:09.000 \n38.63843,63.22312", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.97534,63.51078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T12:56:16.000 \n38.97534,63.51078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.97534,63.51078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:06:16.000 \n38.97534,63.51078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.97534,63.51078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:09:07.000 \n38.97534,63.51078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.97534,63.51078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:18:13.000 \n38.97534,63.51078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.04815,63.58844);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:30:25.000 \n39.04815,63.58844", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.05637,63.58101);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:38:05.000 \n39.05637,63.58101", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.05637,63.58101);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:48:05.000 \n39.05637,63.58101", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.07599,63.58672);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T13:58:47.000 \n39.07599,63.58672", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.07599,63.58672);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T14:08:47.000 \n39.07599,63.58672", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.07096,63.58683);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T14:21:12.000 \n39.07096,63.58683", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.05724,63.5885);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-18T14:35:10.000 \n39.05724,63.5885", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.12568,63.5631);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T05:48:06.000 \n39.12568,63.5631", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.12567,63.5631);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T05:51:19.000 \n39.12567,63.5631", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.16883,63.58575);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:05:25.000 \n39.16883,63.58575", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.14363,63.62254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:15:27.000 \n39.14363,63.62254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.15265,63.69841);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:25:57.000 \n39.15265,63.69841", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21093,63.71122);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:36:04.000 \n39.21093,63.71122", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21093,63.71122);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:46:04.000 \n39.21093,63.71122", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.21093,63.71122);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T06:56:04.000 \n39.21093,63.71122", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22185,63.71491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T07:08:49.000 \n39.22185,63.71491", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22185,63.71491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T07:18:49.000 \n39.22185,63.71491", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22185,63.71491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T07:28:49.000 \n39.22185,63.71491", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.35203,63.78422);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T09:52:07.000 \n39.35203,63.78422", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.43475,63.80334);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:02:06.000 \n39.43475,63.80334", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.51393,63.85295);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:12:06.000 \n39.51393,63.85295", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.55884,63.91309);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:22:07.000 \n39.55884,63.91309", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.63408,64.0237);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:30:55.000 \n39.63408,64.0237\nMessage: No internets or roaming in Uzbekistan :(", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(39.6949,64.18052);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:41:57.000 \n39.6949,64.18052", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76097,64.28526);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T10:51:47.000 \n39.76097,64.28526", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77574,64.40877);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:01:47.000 \n39.77574,64.40877", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.78460123159114,64.420902);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-19CEST13:05:01.000000 \n39.78460123159114,64.420902\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77022,64.43078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:11:49.000 \n39.77022,64.43078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.7734,64.42065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:21:49.000 \n39.7734,64.42065", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77343,64.42061);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:31:56.000 \n39.77343,64.42061", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77361,64.42043);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:41:48.000 \n39.77361,64.42043", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77335,64.42069);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T11:51:48.000 \n39.77335,64.42069", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77344,64.42059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T12:03:08.000 \n39.77344,64.42059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77341,64.42063);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T12:11:46.000 \n39.77341,64.42063", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76667,64.4275);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-19T12:21:46.000 \n39.76667,64.4275", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77348240742098,64.420116);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST05:10:02.000000 \n39.77348240742098,64.420116\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76635052018098,64.405705);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST05:40:01.000000 \n39.76635052018098,64.405705\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77219542777025,64.381659);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST05:45:01.000000 \n39.77219542777025,64.381659\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.75907,64.27573);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T03:53:09.000 \n39.75907,64.27573", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.75766765744021,64.264902);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST05:55:01.000000 \n39.75766765744021,64.264902\nAccuracy 20 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.739251948474084,64.199202);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST06:00:04.000000 \n39.739251948474084,64.199202\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.67603,64.1591);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T04:03:09.000 \n39.67603,64.1591", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.61206,63.98725);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T04:13:10.000 \n39.61206,63.98725", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.449440513692686,63.810807);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST06:30:01.000000 \n39.449440513692686,63.810807\nAccuracy 50 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.41314,63.78596);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T04:33:11.000 \n39.41314,63.78596", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.40268624756554,63.777722);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST06:35:01.000000 \n39.40268624756554,63.777722\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.29151,63.75641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T04:43:09.000 \n39.29151,63.75641", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22996,63.71667);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T04:53:38.000 \n39.22996,63.71667", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22867,63.71598);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T05:03:38.000 \n39.22867,63.71598", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.25574,63.72763);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T05:13:08.000 \n39.25574,63.72763", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.38106,63.79906);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T05:23:09.000 \n39.38106,63.79906", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.51725,63.85775);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T05:43:37.000 \n39.51725,63.85775", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5631,63.92155);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T05:53:09.000 \n39.5631,63.92155", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.62943,64.01701);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:03:09.000 \n39.62943,64.01701", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.67538,64.15702);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:13:08.000 \n39.67538,64.15702", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.75384,64.25283);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:23:09.000 \n39.75384,64.25283", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.78345,64.39085);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:33:09.000 \n39.78345,64.39085", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.7822982680129,64.389876);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST08:35:01.000000 \n39.7822982680129,64.389876\nAccuracy 25 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77843032918105,64.408196);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST08:40:02.000000 \n39.77843032918105,64.408196\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77764,64.40788);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:44:55.000 \n39.77764,64.40788", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77744,64.40771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T06:53:38.000 \n39.77744,64.40771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77735,64.40771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:03:38.000 \n39.77735,64.40771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77739,64.40782);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:13:10.000 \n39.77739,64.40782", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77746,64.40777);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:23:08.000 \n39.77746,64.40777", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77746,64.4076);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:33:08.000 \n39.77746,64.4076", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.78347,64.41464);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:43:08.000 \n39.78347,64.41464", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.789067160956705,64.419769);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST09:45:02.000000 \n39.789067160956705,64.419769\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.8537,64.44211);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T07:53:09.000 \n39.8537,64.44211", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.98369,64.50623);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T08:03:09.000 \n39.98369,64.50623", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.01763853698636,64.527235);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST10:10:03.000000 \n40.01763853698636,64.527235\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.07657,64.58257);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T08:13:24.000 \n40.07657,64.58257", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.086002449729186,64.681951);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST10:20:01.000000 \n40.086002449729186,64.681951\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.06460879013907,64.756443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST10:25:01.000000 \n40.06460879013907,64.756443\nAccuracy 35 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.06789873780018,64.900289);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST10:45:01.000000 \n40.06789873780018,64.900289\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.181737703526224,65.342404);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST11:15:01.000000 \n40.181737703526224,65.342404\nAccuracy 3875 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.118365014819595,65.607516);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST11:35:02.000000 \n40.118365014819595,65.607516\nAccuracy 3609 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.95731649506366,66.477247);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST12:40:02.000000 \n39.95731649506366,66.477247\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.95777048785751,66.518955);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST12:45:02.000000 \n39.95777048785751,66.518955\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.93492185044501,66.564941);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST12:50:01.000000 \n39.93492185044501,66.564941\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.66985404419745,66.969899);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST14:00:01.000000 \n39.66985404419745,66.969899\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.66055119095865,66.974062);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST14:20:01.000000 \n39.66055119095865,66.974062\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.651783329253554,66.977562);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-20CEST14:40:01.000000 \n39.651783329253554,66.977562\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.65182,66.97775);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T12:43:10.000 \n39.65182,66.97775", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.65182,66.97759);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T12:53:10.000 \n39.65182,66.97759", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.6519,66.97736);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T13:03:55.000 \n39.6519,66.97736", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.65038,66.97749);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T13:13:08.000 \n39.65038,66.97749", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.65039,66.97733);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-20T13:43:08.000 \n39.65039,66.97733", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.64563942614572,66.998318);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST06:30:07.000000 \n39.64563942614572,66.998318\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.63914652852805,67.021738);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST06:35:01.000000 \n39.63914652852805,67.021738\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.63819,67.034);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T04:36:36.000 \n39.63819,67.034", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.63757055337649,67.040515);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST06:40:01.000000 \n39.63757055337649,67.040515\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.59467622937517,67.032285);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST06:45:01.000000 \n39.59467622937517,67.032285\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.57017,67.00699);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T04:46:37.000 \n39.57017,67.00699", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.46613,67.03001);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T04:56:36.000 \n39.46613,67.03001", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37173,66.99395);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T05:06:35.000 \n39.37173,66.99395", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.31337,66.95206);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T05:16:35.000 \n39.31337,66.95206", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.29412,66.90987);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T05:26:37.000 \n39.29412,66.90987", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.13293,66.8797);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T05:56:38.000 \n39.13293,66.8797", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.09014913452815,66.81384);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST08:05:01.000000 \n39.09014913452815,66.81384\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.06848,66.81458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T06:06:40.000 \n39.06848,66.81458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.94011,66.691);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T06:36:51.000 \n38.94011,66.691", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.85367,66.58859);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T06:46:36.000 \n38.85367,66.58859", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.77552,66.4813);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T06:56:36.000 \n38.77552,66.4813", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.69221,66.3462);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T07:06:38.000 \n38.69221,66.3462", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.59552,66.27968);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T07:16:38.000 \n38.59552,66.27968", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.50093,66.34408);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T07:26:39.000 \n38.50093,66.34408", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.38656901609593,66.468891);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST09:45:01.000000 \n38.38656901609593,66.468891\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.34357767558987,66.517656);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST09:55:05.000000 \n38.34357767558987,66.517656\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.33798076140141,66.565839);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST10:00:04.000000 \n38.33798076140141,66.565839\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.26545,66.79241);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T08:18:09.000 \n38.26545,66.79241", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.22223,66.8876);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T08:28:44.000 \n38.22223,66.8876", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.20679,66.98461);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T08:38:25.000 \n38.20679,66.98461", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.20852974317712,66.984087);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST10:40:01.000000 \n38.20852974317712,66.984087\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.20699,66.98452);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T08:46:39.000 \n38.20699,66.98452", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.20712,66.98452);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T08:56:39.000 \n38.20712,66.98452", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.20764975662947,67.002461);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST11:05:02.000000 \n38.20764975662947,67.002461\nAccuracy 20 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.17755,67.04115);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T09:07:07.000 \n38.17755,67.04115", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.15996948512532,67.10055);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST11:15:04.000000 \n38.15996948512532,67.10055\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.17854,67.13565);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T09:17:07.000 \n38.17854,67.13565", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.19324397681332,67.152783);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST11:20:04.000000 \n38.19324397681332,67.152783\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.18584,67.19247);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T09:27:07.000 \n38.18584,67.19247", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.18061,67.20854);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T09:56:37.000 \n38.18061,67.20854", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.18913203964894,67.265487);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST12:15:26.000000 \n38.18913203964894,67.265487\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.16440541738227,67.311626);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST12:20:03.000000 \n38.16440541738227,67.311626\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.13934,67.33868);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T10:28:00.000 \n38.13934,67.33868", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.05428,67.44453);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T10:39:13.000 \n38.05428,67.44453", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.001159905975705,67.503532);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST12:50:04.000000 \n38.001159905975705,67.503532\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.04826,67.56358);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-21T10:58:07.000 \n38.04826,67.56358", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.275283721943985,67.884411);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST13:35:01.000000 \n38.275283721943985,67.884411\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.43310730148687,67.939775);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST14:00:03.000000 \n38.43310730148687,67.939775\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.368001301004306,68.002261);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST14:10:02.000000 \n38.368001301004306,68.002261\nAccuracy 35 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.501771245795396,68.097275);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-21CEST14:30:04.000000 \n38.501771245795396,68.097275\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.07536,69.3433);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-22T05:31:32.000 \n38.07536,69.3433", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.80307,69.67147);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-22T06:31:34.000 \n37.80307,69.67147", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.93988,70.17171);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-22T09:54:03.000 \n37.93988,70.17171", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.43685,70.91844);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-22T14:13:54.000 \n38.43685,70.91844", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.11205,71.33521);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T04:24:52.000 \n38.11205,71.33521", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.68416,72.48457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T10:33:24.000 \n37.68416,72.48457", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63898,72.53556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T10:42:47.000 \n37.63898,72.53556", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.57079,72.61289);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T10:52:47.000 \n37.57079,72.61289", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.50275,72.68401);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:02:47.000 \n37.50275,72.68401", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.48866,72.74045);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:12:51.000 \n37.48866,72.74045", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.48845,72.74054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:22:51.000 \n37.48845,72.74054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.48783,72.80302);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:32:49.000 \n37.48783,72.80302", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.5271,72.87103);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:42:48.000 \n37.5271,72.87103", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.53787,72.92347);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T11:52:48.000 \n37.53787,72.92347", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.5378,72.9334);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:02:46.000 \n37.5378,72.9334", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.53786,72.93342);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:13:07.000 \n37.53786,72.93342", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.53786,72.93342);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:23:07.000 \n37.53786,72.93342", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.53885,72.93591);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:33:07.000 \n37.53885,72.93591", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.55601,72.97367);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:44:07.000 \n37.55601,72.97367", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.59386,73.01556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T12:54:07.000 \n37.59386,73.01556", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.63218,73.04548);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T13:02:49.000 \n37.63218,73.04548", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.64324,73.06846);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T13:12:46.000 \n37.64324,73.06846", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.67102,73.15809);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T13:22:52.000 \n37.67102,73.15809", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.71909,73.25491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T13:32:52.000 \n37.71909,73.25491", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.74831,73.253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T13:38:24.000 \n37.74831,73.253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.78642,73.36629);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-23T14:03:54.000 \n37.78642,73.36629", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.78636,73.36631);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T02:27:37.000 \n37.78636,73.36631", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.78635,73.36631);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T02:28:34.000 \n37.78635,73.36631\nMessage: Ice cold in yurt. 8C now. Off to border.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(37.79403,73.37142);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T02:46:26.000 \n37.79403,73.37142", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.80441,73.48663);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T02:56:16.000 \n37.80441,73.48663", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.8276,73.6157);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:06:22.000 \n37.8276,73.6157", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.85455,73.72058);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:16:22.000 \n37.85455,73.72058", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.87266,73.81232);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:26:16.000 \n37.87266,73.81232", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(37.96506,73.88116);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:36:16.000 \n37.96506,73.88116", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.01781,73.93608);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:46:17.000 \n38.01781,73.93608", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.12001,73.89389);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T03:56:16.000 \n38.12001,73.89389", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.13157,73.95189);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T04:06:17.000 \n38.13157,73.95189", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.15252,73.96569);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T04:16:17.000 \n38.15252,73.96569", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.17394,73.96747);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T04:26:24.000 \n38.17394,73.96747", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.30963,74.04161);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T04:46:18.000 \n38.30963,74.04161", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.40453,73.99371);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T04:56:28.000 \n38.40453,73.99371", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.48894,73.88226);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:06:16.000 \n38.48894,73.88226", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.53448,73.811);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:17:07.000 \n38.53448,73.811", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.56603,73.71519);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:26:31.000 \n38.56603,73.71519", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.56217,73.61949);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:36:31.000 \n38.56217,73.61949", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.56942,73.55415);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:47:28.000 \n38.56942,73.55415", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.58668,73.54156);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T05:56:16.000 \n38.58668,73.54156", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.61863,73.53004);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:06:19.000 \n38.61863,73.53004", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.71801,73.51248);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:17:02.000 \n38.71801,73.51248", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.79192,73.46946);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:26:18.000 \n38.79192,73.46946", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.89734,73.49594);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:36:16.000 \n38.89734,73.49594", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(38.99268,73.54872);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:46:16.000 \n38.99268,73.54872", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.09237,73.5858);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T06:56:17.000 \n39.09237,73.5858", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.16667,73.48197);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:06:17.000 \n39.16667,73.48197", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.20629,73.43896);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:16:19.000 \n39.20629,73.43896", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.22942,73.42502);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:26:19.000 \n39.22942,73.42502", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.25485,73.39822);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:36:20.000 \n39.25485,73.39822", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.3099,73.33627);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:46:28.000 \n39.3099,73.33627", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.35716,73.33934);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T07:56:17.000 \n39.35716,73.33934", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37261,73.32642);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:06:17.000 \n39.37261,73.32642", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37262,73.32647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:16:22.000 \n39.37262,73.32647", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37264,73.32635);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:26:19.000 \n39.37264,73.32635", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37263,73.32683);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:36:14.000 \n39.37263,73.32683", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37263,73.32683);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:46:14.000 \n39.37263,73.32683", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37264,73.32685);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T08:56:19.000 \n39.37264,73.32685", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37415,73.32716);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:09:54.000 \n39.37415,73.32716", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.37424,73.32714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:16:19.000 \n39.37424,73.32714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.39201,73.30173);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:26:19.000 \n39.39201,73.30173", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.41368,73.26911);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:36:19.000 \n39.41368,73.26911", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.4373,73.24905);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:48:17.000 \n39.4373,73.24905", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.46817,73.26016);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T09:56:22.000 \n39.46817,73.26016", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.47203,73.26083);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:06:27.000 \n39.47203,73.26083", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50763,73.2684);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:18:01.000 \n39.50763,73.2684", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50719,73.26866);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:28:36.000 \n39.50719,73.26866", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50721,73.26864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:36:15.000 \n39.50721,73.26864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50721,73.26864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:46:15.000 \n39.50721,73.26864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.50721,73.26864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T10:56:16.000 \n39.50721,73.26864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.5178,73.26928);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:06:15.000 \n39.5178,73.26928", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53244,73.26479);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:16:16.000 \n39.53244,73.26479", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53251,73.26473);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:26:16.000 \n39.53251,73.26473", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53251,73.26473);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:36:16.000 \n39.53251,73.26473", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53254,73.26478);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:46:15.000 \n39.53254,73.26478", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53252,73.26476);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:56:15.000 \n39.53252,73.26476", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53252,73.26476);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T11:58:54.000 \n39.53252,73.26476", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.53253,73.26476);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:00:36.000 \n39.53253,73.26476", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.66292,73.23663);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:14:20.000 \n39.66292,73.23663", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.72761,73.24765);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:24:13.000 \n39.72761,73.24765", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.72993,73.24731);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:34:13.000 \n39.72993,73.24731", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.73013,73.24727);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:44:09.000 \n39.73013,73.24727", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.74408,73.20471);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T12:54:37.000 \n39.74408,73.20471", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.75065,73.1526);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:04:09.000 \n39.75065,73.1526", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.77182,73.17268);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:14:10.000 \n39.77182,73.17268", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.76955,73.18832);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:24:10.000 \n39.76955,73.18832", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.81204,73.23973);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:34:10.000 \n39.81204,73.23973", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.85519,73.34322);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:44:10.000 \n39.85519,73.34322", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.90304,73.42303);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T13:54:10.000 \n39.90304,73.42303", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(39.98269,73.49519);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:04:15.000 \n39.98269,73.49519", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.04181,73.5348);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:14:10.000 \n40.04181,73.5348", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.14424,73.51134);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:25:26.000 \n40.14424,73.51134", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.21471,73.47765);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:34:33.000 \n40.21471,73.47765", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.29486,73.47386);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:44:31.000 \n40.29486,73.47386", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.30526,73.45755);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T14:54:09.000 \n40.30526,73.45755", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.30531,73.45747);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:04:10.000 \n40.30531,73.45747", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25901,73.41745);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:16:06.000 \n40.25901,73.41745", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.24458,73.36327);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:24:13.000 \n40.24458,73.36327", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.25571,73.30812);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:34:37.000 \n40.25571,73.30812", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.31488,73.22336);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:44:21.000 \n40.31488,73.22336", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.36855,73.12783);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T15:54:09.000 \n40.36855,73.12783", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.45658,73.07211);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:04:11.000 \n40.45658,73.07211", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.51064,72.98553);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:14:08.000 \n40.51064,72.98553", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.54423,72.89622);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:24:11.000 \n40.54423,72.89622", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53925,72.85708);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:34:10.000 \n40.53925,72.85708", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53929,72.85704);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:44:37.000 \n40.53929,72.85704", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53926,72.85704);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T16:54:10.000 \n40.53926,72.85704", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53928,72.85704);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T17:04:09.000 \n40.53928,72.85704", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53922,72.85696);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T17:14:08.000 \n40.53922,72.85696", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53647,72.84142);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T17:24:08.000 \n40.53647,72.84142", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53669,72.79726);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T17:34:10.000 \n40.53669,72.79726", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.53587,72.79311);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-24T17:44:11.000 \n40.53587,72.79311", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.55093,72.84815);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T08:25:07.000 \n40.55093,72.84815", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.56491,72.8847);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T08:34:36.000 \n40.56491,72.8847", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.60539,72.99966);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T08:44:37.000 \n40.60539,72.99966", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.65176,73.11206);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T08:54:35.000 \n40.65176,73.11206", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.70943,73.21922);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:04:35.000 \n40.70943,73.21922", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.76852,73.29207);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:14:35.000 \n40.76852,73.29207", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.7689,73.32589);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:25:06.000 \n40.7689,73.32589", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.81551,73.30366);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:35:06.000 \n40.81551,73.30366", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.82335,73.19111);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:44:31.000 \n40.82335,73.19111\nMessage: 2Bishkek on road that aren't on our maps!", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(40.86472,73.0617);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T09:56:57.000 \n40.86472,73.0617", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.86069,72.98423);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:06:41.000 \n40.86069,72.98423", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.89571,72.95608);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:16:41.000 \n40.89571,72.95608", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(40.94069,72.85583);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:26:41.000 \n40.94069,72.85583", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.035,72.77423);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:37:38.000 \n41.035,72.77423", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.06482,72.67918);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:46:41.000 \n41.06482,72.67918", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.03488,72.55817);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T10:56:54.000 \n41.03488,72.55817", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.04083,72.45249);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:07:02.000 \n41.04083,72.45249", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.06992,72.34458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:18:14.000 \n41.06992,72.34458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.0593,72.20886);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:26:42.000 \n41.0593,72.20886", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.18199,72.18848);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:36:42.000 \n41.18199,72.18848", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.24089,72.21395);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:46:42.000 \n41.24089,72.21395", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.34937,72.23725);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T11:56:44.000 \n41.34937,72.23725", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.44731,72.26152);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:06:41.000 \n41.44731,72.26152", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.49766,72.34647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:16:43.000 \n41.49766,72.34647", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.51152,72.42355);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:26:43.000 \n41.51152,72.42355", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.52737,72.46011);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:37:07.000 \n41.52737,72.46011", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.57458,72.53895);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:46:43.000 \n41.57458,72.53895", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.61307,72.61819);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T12:56:43.000 \n41.61307,72.61819", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.61344,72.61926);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:06:42.000 \n41.61344,72.61926", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.62701,72.67572);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:16:42.000 \n41.62701,72.67572", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.64522,72.72675);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:26:42.000 \n41.64522,72.72675", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.65727,72.83766);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:36:44.000 \n41.65727,72.83766", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.69792,72.9392);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:46:45.000 \n41.69792,72.9392", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.75223,72.92918);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T13:56:44.000 \n41.75223,72.92918", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.77342,73.04474);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:06:43.000 \n41.77342,73.04474", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.7678,73.17349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:16:43.000 \n41.7678,73.17349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.77747,73.2793);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:26:42.000 \n41.77747,73.2793", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.82895,73.17257);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:36:43.000 \n41.82895,73.17257", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.85669,73.0519);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:46:44.000 \n41.85669,73.0519", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.8747,72.96289);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-25T14:57:03.000 \n41.8747,72.96289", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.89221,72.91016);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T01:37:01.000 \n41.89221,72.91016", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.89344,72.90819);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T01:45:44.000 \n41.89344,72.90819", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(41.9836,72.86727);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T01:55:44.000 \n41.9836,72.86727", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.15234,72.83378);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T02:15:45.000 \n42.15234,72.83378", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.17268,72.95855);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T02:25:44.000 \n42.17268,72.95855", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.23326,73.09468);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T02:45:43.000 \n42.23326,73.09468", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20687,73.24669);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T02:55:43.000 \n42.20687,73.24669", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.18756,73.40779);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:05:43.000 \n42.18756,73.40779", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.19103,73.55673);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:15:44.000 \n42.19103,73.55673", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20847,73.63391);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:25:43.000 \n42.20847,73.63391", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20845,73.63397);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:35:44.000 \n42.20845,73.63397", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20848,73.63393);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:45:45.000 \n42.20848,73.63393", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20848,73.63397);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T03:55:50.000 \n42.20848,73.63397", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20847,73.63396);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:06:07.000 \n42.20847,73.63396", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.20847,73.63393);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:07:56.000 \n42.20847,73.63393\nMessage: Ramen for breakfast. Aiming for Almaty.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(42.2162,73.68477);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:22:55.000 \n42.2162,73.68477", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.25076,73.80716);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:30:55.000 \n42.25076,73.80716", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.30825,73.83048);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:41:07.000 \n42.30825,73.83048", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.38083,73.82463);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T04:51:55.000 \n42.38083,73.82463", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.38083,73.82463);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T05:01:55.000 \n42.38083,73.82463", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.42466,73.80119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T05:14:32.000 \n42.42466,73.80119", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.47512,73.84099);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T05:20:56.000 \n42.47512,73.84099", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.55052,73.86185);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T05:30:56.000 \n42.55052,73.86185", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.5674,73.87398);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T05:39:07.000 \n42.5674,73.87398\nMessage: We're all suffering from the bum-wees.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(42.78058,73.88404);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:03:21.000 \n42.78058,73.88404", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.81282,73.88269);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:13:24.000 \n42.81282,73.88269", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.84159,73.98202);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:23:37.000 \n42.84159,73.98202", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.8338,74.09682);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:33:23.000 \n42.8338,74.09682", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.85337,74.20823);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:43:23.000 \n42.85337,74.20823", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.86329,74.32157);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T06:53:22.000 \n42.86329,74.32157", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.87338,74.45504);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T07:03:22.000 \n42.87338,74.45504", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.87467,74.52988);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T07:13:22.000 \n42.87467,74.52988", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.8772,74.57576);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T07:24:02.000 \n42.8772,74.57576", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.88111,74.57464);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T07:34:02.000 \n42.88111,74.57464", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.88494,74.61411);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:03:22.000 \n42.88494,74.61411", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(42.93498,74.63763);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:13:22.000 \n42.93498,74.63763", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.00309,74.6869);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:23:22.000 \n43.00309,74.6869", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02262,74.70033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:33:22.000 \n43.02262,74.70033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02259,74.70033);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:43:22.000 \n43.02259,74.70033", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.0242,74.70177);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T08:53:22.000 \n43.0242,74.70177", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02423,74.70186);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T09:06:28.000 \n43.02423,74.70186\nMessage: Fucking border is retarded :(", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(43.02496,74.70405);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T09:21:25.000 \n43.02496,74.70405", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02523,74.7065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T09:30:49.000 \n43.02523,74.7065", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02525,74.7066);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T09:41:05.000 \n43.02525,74.7066", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02538,74.70654);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T09:52:07.000 \n43.02538,74.70654", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02542,74.70645);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:00:39.000 \n43.02542,74.70645", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02549,74.70637);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:10:45.000 \n43.02549,74.70637", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.02529,74.70684);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:20:44.000 \n43.02529,74.70684", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.0255,74.70709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:30:42.000 \n43.0255,74.70709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.0255,74.70705);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:41:07.000 \n43.0255,74.70705", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.04559,74.7078);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T10:50:40.000 \n43.04559,74.7078", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.08681,74.70461);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T11:00:38.000 \n43.08681,74.70461", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.13415,74.70692);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T11:22:07.000 \n43.13415,74.70692\nMessage: Mudlab and Geekout are in! #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(43.32306,74.93571);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T11:39:02.000 \n43.32306,74.93571", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.4015,75.07481);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T11:49:09.000 \n43.4015,75.07481", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.37575,75.25127);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T11:59:37.000 \n43.37575,75.25127", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.36657,75.32757);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T12:09:37.000 \n43.36657,75.32757", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.36687,75.32748);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T12:19:37.000 \n43.36687,75.32748", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.36687,75.3275);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T12:29:02.000 \n43.36687,75.3275", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.36687,75.32746);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T12:39:02.000 \n43.36687,75.32746", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.36684,75.3275);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T12:49:03.000 \n43.36684,75.3275", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.22071,76.45216);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-26T14:09:04.000 \n43.22071,76.45216", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.25319241380126,76.887652);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-27CEST05:45:01.000000 \n43.25319241380126,76.887652\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.249897469601905,76.942095);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-27CEST07:05:01.000000 \n43.249897469601905,76.942095\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.262729252273466,76.941492);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-27CEST10:30:01.000000 \n43.262729252273466,76.941492\nAccuracy 60 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.249897469601905,76.942095);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-27CEST15:05:02.000000 \n43.249897469601905,76.942095\nAccuracy 75 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.262729252273466,76.941492);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-27CEST19:40:01.000000 \n43.262729252273466,76.941492\nAccuracy 60 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.77096,76.42991);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T03:51:08.000 \n43.77096,76.42991", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.78209,76.41817);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T03:51:58.000 \n43.78209,76.41817", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(43.96578,76.20107);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:08:41.000 \n43.96578,76.20107", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.06317,76.03852);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:18:31.000 \n44.06317,76.03852", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.14779,75.86922);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:28:31.000 \n44.14779,75.86922", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.22401,75.69353);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:38:31.000 \n44.22401,75.69353", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.3205,75.53864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:48:33.000 \n44.3205,75.53864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.33169,75.38557);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T04:58:31.000 \n44.33169,75.38557", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.3634,75.20221);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:08:30.000 \n44.3634,75.20221", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.40577,75.01319);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:18:34.000 \n44.40577,75.01319", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.45564,74.83539);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:28:34.000 \n44.45564,74.83539", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.51325,74.65646);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:38:36.000 \n44.51325,74.65646", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.59117,74.51099);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:48:31.000 \n44.59117,74.51099", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.6894,74.4183);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T05:59:31.000 \n44.6894,74.4183", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(44.76538,74.2776);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T06:08:45.000 \n44.76538,74.2776", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.01609,73.99873);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T06:38:32.000 \n45.01609,73.99873", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.12023,73.9649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T06:48:32.000 \n45.12023,73.9649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.22715,73.84911);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T06:58:32.000 \n45.22715,73.84911", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.34302,73.70065);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:09:14.000 \n45.34302,73.70065", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.44946,73.60349);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:18:33.000 \n45.44946,73.60349", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.55501,73.45293);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:28:50.000 \n45.55501,73.45293", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.71385,73.40116);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:40:26.000 \n45.71385,73.40116", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.81427,73.4369);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:48:31.000 \n45.81427,73.4369", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.91768,73.51958);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T07:58:48.000 \n45.91768,73.51958", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.04484,73.59458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:08:32.000 \n46.04484,73.59458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.16114,73.6132);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:18:34.000 \n46.16114,73.6132", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.29598,73.73493);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:28:50.000 \n46.29598,73.73493", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.30888,73.76165);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:30:23.000 \n46.30888,73.76165\nMessage: Spied camels with two humps #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.467,74.02575);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:47:05.000 \n46.467,74.02575", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.56781,74.2158);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T08:57:12.000 \n46.56781,74.2158", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.66634,74.40961);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:09:00.000 \n46.66634,74.40961", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.72169,74.48321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:17:50.000 \n46.72169,74.48321", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.72169,74.48321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:27:50.000 \n46.72169,74.48321", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.72169,74.48321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:36:06.000 \n46.72169,74.48321", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.72169,74.48321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:46:06.000 \n46.72169,74.48321", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.72169,74.48321);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:47:53.000 \n46.72169,74.48321", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.85558,74.83741);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T09:52:58.000 \n46.85558,74.83741", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.85558,74.83741);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T10:02:58.000 \n46.85558,74.83741", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.86467,74.97364);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T10:13:54.000 \n46.86467,74.97364", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.96044,74.9394);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T10:27:07.000 \n46.96044,74.9394", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.96044,74.9394);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T10:38:57.000 \n46.96044,74.9394", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.7923,74.18761);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T11:15:10.000 \n47.7923,74.18761", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.7923,74.18761);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T11:25:10.000 \n47.7923,74.18761", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.7923,74.18761);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T11:35:10.000 \n47.7923,74.18761", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.86728,74.08931);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T11:42:55.000 \n47.86728,74.08931", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.8011,73.69508);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T12:45:28.000 \n48.8011,73.69508", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.80876,73.69262);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T12:45:58.000 \n48.80876,73.69262", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.92927,73.61241);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T12:55:59.000 \n48.92927,73.61241", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.04943,73.53714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T13:05:59.000 \n49.04943,73.53714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.17976,73.45017);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T13:16:18.000 \n49.17976,73.45017", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.29834,73.42496);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T13:25:59.000 \n49.29834,73.42496", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.44424,73.3385);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T13:35:58.000 \n49.44424,73.3385", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.58208,73.23491);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:02:53.000 \n49.58208,73.23491\nMessage: Odd smell of bleach around here", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(49.64633,73.2024);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:03:17.000 \n49.64633,73.2024", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.74994,73.16717);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:13:05.000 \n49.74994,73.16717", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.79683,73.15749);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:23:09.000 \n49.79683,73.15749", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.84195,73.08874);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:33:07.000 \n49.84195,73.08874", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.87137,73.06486);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:43:12.000 \n49.87137,73.06486", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.87862,73.04632);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T14:53:12.000 \n49.87862,73.04632", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.98522,73.00827);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:03:09.000 \n49.98522,73.00827", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.06109,72.87998);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:13:09.000 \n50.06109,72.87998", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.15027,72.89946);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:23:09.000 \n50.15027,72.89946", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.27182,72.80346);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:33:09.000 \n50.27182,72.80346", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.35438,72.73142);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:43:10.000 \n50.35438,72.73142", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.48986,72.6655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T15:53:10.000 \n50.48986,72.6655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.56006,72.55798);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:03:10.000 \n50.56006,72.55798", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.64202,72.43505);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:13:12.000 \n50.64202,72.43505", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.75051,72.27583);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:23:12.000 \n50.75051,72.27583", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.8329,72.13872);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:33:12.000 \n50.8329,72.13872", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.92981,72.0001);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:43:13.000 \n50.92981,72.0001", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.01834,71.86792);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T16:53:13.000 \n51.01834,71.86792", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09037,71.74046);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T17:03:37.000 \n51.09037,71.74046", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.12959,71.60346);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T17:13:09.000 \n51.12959,71.60346", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.14156,71.48347);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T17:23:09.000 \n51.14156,71.48347", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.14722,71.47153);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-29T17:33:08.000 \n51.14722,71.47153", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.14597,71.46626);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T04:47:07.000 \n51.14597,71.46626", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.1382,71.41686);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T04:56:49.000 \n51.1382,71.41686", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13444,71.41483);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T05:15:37.000 \n51.13444,71.41483", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13444,71.41483);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T05:25:37.000 \n51.13444,71.41483", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.13444,71.41483);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T05:35:37.000 \n51.13444,71.41483", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.16068,71.46784);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T05:45:06.000 \n51.16068,71.46784", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.17931,71.4901);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T05:56:10.000 \n51.17931,71.4901", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.18974,71.49873);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:04:21.000 \n51.18974,71.49873", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.23944,71.56636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:14:21.000 \n51.23944,71.56636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.31599,71.65532);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:24:20.000 \n51.31599,71.65532", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.41657,71.77091);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:34:21.000 \n51.41657,71.77091", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.52362,71.9526);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:44:20.000 \n51.52362,71.9526", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.63818,72.11445);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T06:54:20.000 \n51.63818,72.11445", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.73772,72.30633);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:04:20.000 \n51.73772,72.30633", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.75529,72.57437);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:14:21.000 \n51.75529,72.57437", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.74254,72.80706);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:24:39.000 \n51.74254,72.80706", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.68027,73.01535);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:34:22.000 \n51.68027,73.01535", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.65353,73.07224);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:44:22.000 \n51.65353,73.07224", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.65354,73.07219);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T07:54:22.000 \n51.65354,73.07219", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.65354,73.07236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:04:20.000 \n51.65354,73.07236", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.63989,73.10094);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:14:20.000 \n51.63989,73.10094", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.68976,73.29904);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:24:20.000 \n51.68976,73.29904", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.67752,73.51845);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:34:20.000 \n51.67752,73.51845", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.69189,73.75161);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:44:22.000 \n51.69189,73.75161", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.70337,74.00056);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T08:54:24.000 \n51.70337,74.00056", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.69937,74.28595);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:04:28.000 \n51.69937,74.28595", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.69323,74.54258);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:14:28.000 \n51.69323,74.54258", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.71987,74.73788);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:24:24.000 \n51.71987,74.73788", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.75216,74.98695);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:34:30.000 \n51.75216,74.98695", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.76208,75.04516);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:44:38.000 \n51.76208,75.04516", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.8074,75.27261);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:54:38.000 \n51.8074,75.27261", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.8103,75.30162);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T09:56:13.000 \n51.8103,75.30162\nMessage: Require clean western style toilet please", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(51.90562,75.89746);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T10:19:37.000 \n51.90562,75.89746", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.97985,76.09762);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T10:29:16.000 \n51.97985,76.09762", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.06586,76.30721);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T10:39:16.000 \n52.06586,76.30721", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.12857,76.50304);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T10:49:19.000 \n52.12857,76.50304", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.21494,76.68811);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T10:59:37.000 \n52.21494,76.68811", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.28191,76.80907);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T11:09:22.000 \n52.28191,76.80907", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.32354,76.89445);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T11:19:26.000 \n52.32354,76.89445", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.31121,76.92342);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T11:29:22.000 \n52.31121,76.92342", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.33054,76.98026);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T11:49:16.000 \n52.33054,76.98026", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.38758,77.08847);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T11:59:17.000 \n52.38758,77.08847", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.47701,77.26187);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:09:16.000 \n52.47701,77.26187", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.58923,77.39774);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:19:16.000 \n52.58923,77.39774", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.63959,77.46159);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:29:29.000 \n52.63959,77.46159", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.64227,77.46445);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:39:17.000 \n52.64227,77.46445", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.74158,77.40621);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:49:17.000 \n52.74158,77.40621", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.88487,77.40975);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T12:59:16.000 \n52.88487,77.40975", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.00114,77.43718);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:09:15.000 \n53.00114,77.43718", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.11703,77.5508);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:19:16.000 \n53.11703,77.5508", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.21619,77.70102);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:29:17.000 \n53.21619,77.70102", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.32517,77.76046);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:39:17.000 \n53.32517,77.76046", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.39818,77.70387);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:49:15.000 \n53.39818,77.70387", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.39866,77.70437);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T13:58:21.000 \n53.39866,77.70437", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.39878,77.70486);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T14:24:21.000 \n53.39878,77.70486", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.39891,77.70582);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T14:44:19.000 \n53.39891,77.70582", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.40037,77.70728);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T14:54:19.000 \n53.40037,77.70728", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.40076,77.70754);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:04:19.000 \n53.40076,77.70754", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.40045,77.70636);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:14:19.000 \n53.40045,77.70636", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.45876,77.77148);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:24:20.000 \n53.45876,77.77148", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.46801,77.78587);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:34:19.000 \n53.46801,77.78587", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.46724,77.7851);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:44:19.000 \n53.46724,77.7851", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.46786,77.78484);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T15:54:18.000 \n53.46786,77.78484", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.46786,77.78484);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T16:04:18.000 \n53.46786,77.78484", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.46749,77.78383);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T16:14:19.000 \n53.46749,77.78383", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.4674,77.78426);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-30T16:24:19.000 \n53.4674,77.78426", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.7154,78.02147);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:04:26.000 \n53.7154,78.02147", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.72539,78.04462);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:13:50.000 \n53.72539,78.04462", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.75039,78.09309);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:23:50.000 \n53.75039,78.09309", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.8133,78.28192);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:33:50.000 \n53.8133,78.28192", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.90048,78.44693);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:43:50.000 \n53.90048,78.44693", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.96499,78.67138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T01:53:50.000 \n53.96499,78.67138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.97378,78.91149);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:03:48.000 \n53.97378,78.91149", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.99461,79.16061);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:13:50.000 \n53.99461,79.16061", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.99024,79.2385);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:23:50.000 \n53.99024,79.2385", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.00002,79.23685);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:33:50.000 \n54.00002,79.23685", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.00053,79.24256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:43:49.000 \n54.00053,79.24256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.0009,79.2434);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T02:53:51.000 \n54.0009,79.2434", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.00067,79.24364);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:03:52.000 \n54.00067,79.24364", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.99995,79.24312);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:13:49.000 \n53.99995,79.24312", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.00891,79.46924);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:23:51.000 \n54.00891,79.46924", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.06092,79.69435);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:33:51.000 \n54.06092,79.69435", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.13375,79.90528);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:43:51.000 \n54.13375,79.90528", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.20683,80.13737);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T03:54:25.000 \n54.20683,80.13737", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.28712,80.35246);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:04:25.000 \n54.28712,80.35246", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.34317,80.46782);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:14:25.000 \n54.34317,80.46782", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.36826,80.58639);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:23:49.000 \n54.36826,80.58639", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.39242,80.84131);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:33:49.000 \n54.39242,80.84131", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.36884,81.08398);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:43:50.000 \n54.36884,81.08398", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.37064,81.19547);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T04:53:50.000 \n54.37064,81.19547", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.34931,81.45235);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:03:52.000 \n54.34931,81.45235", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.32133,81.7011);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:13:51.000 \n54.32133,81.7011", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.36084,81.89703);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:24:24.000 \n54.36084,81.89703", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.40891,82.01556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:34:24.000 \n54.40891,82.01556", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.47368,82.16591);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:43:50.000 \n54.47368,82.16591", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.59057,82.29799);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T05:53:51.000 \n54.59057,82.29799", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.69267,82.40948);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:03:51.000 \n54.69267,82.40948", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.78541,82.57256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:13:51.000 \n54.78541,82.57256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.84842,82.71812);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:23:50.000 \n54.84842,82.71812", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.93596,82.81662);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:33:49.000 \n54.93596,82.81662", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.97124,82.86314);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:43:49.000 \n54.97124,82.86314", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.97721,82.89702);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T06:54:14.000 \n54.97721,82.89702", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(55.00965,82.93813);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T07:03:52.000 \n55.00965,82.93813", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(55.0306,82.91914);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T07:13:49.000 \n55.0306,82.91914", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(55.0183,82.88902);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T07:23:50.000 \n55.0183,82.88902", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.99804,82.87103);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-08-31T07:33:50.000 \n54.99804,82.87103", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(55.030438645017604,82.91716);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-08-31CEST13:40:26.000000 \n55.030438645017604,82.91716\nAccuracy 60 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(55.00675,82.93682);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T05:49:19.000 \n55.00675,82.93682\nMessage: Nissan Micra = \"March\" in Russia", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(55.00551014983408,82.944598);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST07:50:06.000000 \n55.00551014983408,82.944598\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.99219841934137,82.980886);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST07:55:01.000000 \n54.99219841934137,82.980886\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.9611520477311,83.053886);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:00:01.000000 \n54.9611520477311,83.053886\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.92664274593161,83.075819);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:05:01.000000 \n54.92664274593161,83.075819\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.869655898256845,83.07547);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:10:01.000000 \n54.869655898256845,83.07547\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.85054,83.06689);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T06:12:21.000 \n54.85054,83.06689", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.830605687421745,83.088255);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:15:01.000000 \n54.830605687421745,83.088255\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.77688777238675,83.095607);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:20:01.000000 \n54.77688777238675,83.095607\nAccuracy 15 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.76455,83.11059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T06:22:22.000 \n54.76455,83.11059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.753475245035546,83.137216);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:25:02.000000 \n54.753475245035546,83.137216\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.703207259377386,83.193201);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST08:30:02.000000 \n54.703207259377386,83.193201\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.669,83.21646);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T06:32:20.000 \n54.669,83.21646", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.56839,83.31564);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T06:42:22.000 \n54.56839,83.31564", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.46384,83.35767);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T06:52:20.000 \n54.46384,83.35767", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.37365,83.30379);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:02:24.000 \n54.37365,83.30379", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.25136,83.30304);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:12:21.000 \n54.25136,83.30304", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.13866,83.35501);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:22:21.000 \n54.13866,83.35501", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(54.02103,83.41058);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:32:20.000 \n54.02103,83.41058", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.88748,83.46007);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:42:20.000 \n53.88748,83.46007", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.80371,83.51251);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T07:52:48.000 \n53.80371,83.51251", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.77429,83.58971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:05:40.000 \n53.77429,83.58971", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.68307,83.70894);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:12:22.000 \n53.68307,83.70894", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.60621,83.75623);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:22:22.000 \n53.60621,83.75623", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.49372,83.89246);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:34:09.000 \n53.49372,83.89246", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.39143,83.99123);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:43:04.000 \n53.39143,83.99123", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.36975,84.05307);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T08:52:53.000 \n53.36975,84.05307", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.30691,84.24516);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:04:25.000 \n53.30691,84.24516", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.26472,84.40981);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:12:20.000 \n53.26472,84.40981", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.22134,84.61458);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:22:19.000 \n53.22134,84.61458", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.12481,84.7142);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:32:21.000 \n53.12481,84.7142", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(53.00156,84.73296);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:42:20.000 \n53.00156,84.73296", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.87551,84.84435);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T09:52:19.000 \n52.87551,84.84435", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.74976,84.93239);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:02:23.000 \n52.74976,84.93239", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.65218,85.06403);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:12:21.000 \n52.65218,85.06403", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.5657,85.18844);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:22:28.000 \n52.5657,85.18844", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.5234,85.24738);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:33:06.000 \n52.5234,85.24738", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.50049,85.30356);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:42:32.000 \n52.50049,85.30356", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.44333,85.47919);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T10:52:22.000 \n52.44333,85.47919", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.42375,85.70572);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:04:27.000 \n52.42375,85.70572", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.36559,85.81138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:12:51.000 \n52.36559,85.81138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.26264,85.85236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:24:02.000 \n52.26264,85.85236", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.18018,85.90392);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:32:23.000 \n52.18018,85.90392", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.09568,85.92083);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:42:20.000 \n52.09568,85.92083", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(52.02205,85.91781);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T11:52:30.000 \n52.02205,85.91781", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.95407,85.84712);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:02:54.000 \n51.95407,85.84712", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.88449,85.8359);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:12:20.000 \n51.88449,85.8359", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.83433,85.73595);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:22:20.000 \n51.83433,85.73595", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.77045,85.7402);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:32:21.000 \n51.77045,85.7402", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.67569,85.78256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:42:22.000 \n51.67569,85.78256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.62793,85.73284);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T12:52:20.000 \n51.62793,85.73284", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.5497,85.57161);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-01T13:12:22.000 \n51.5497,85.57161", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.480096948604675,85.566029);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-01CEST16:40:01.000000 \n51.480096948604675,85.566029\nAccuracy 30 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.47928,85.5648);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T01:11:05.000 \n51.47928,85.5648", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.47789,85.56537);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T01:20:54.000 \n51.47789,85.56537", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.41875,85.61901);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T01:30:54.000 \n51.41875,85.61901", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.32228,85.67059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T01:40:54.000 \n51.32228,85.67059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.28846,85.68377);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T01:50:55.000 \n51.28846,85.68377", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.20541,85.61688);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T02:01:36.000 \n51.20541,85.61688", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(51.09473,85.58916);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T02:11:36.000 \n51.09473,85.58916", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.9325,85.76541);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T02:35:21.000 \n50.9325,85.76541\nMessage: 4hrs from the Mongolian border...", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(50.86109774236987,85.906439);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST04:40:01.000000 \n50.86109774236987,85.906439\nAccuracy 3879 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.8162,85.94274);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T02:45:09.000 \n50.8162,85.94274", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.81646,85.94195);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T02:55:03.000 \n50.81646,85.94195", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79358,86.03522);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:05:00.000 \n50.79358,86.03522", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79371,86.03304);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:14:59.000 \n50.79371,86.03304", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79476,86.03121);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:25:02.000 \n50.79476,86.03121", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79463,86.03095);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:35:02.000 \n50.79463,86.03095", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79379,86.03316);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:45:01.000 \n50.79379,86.03316", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79412,86.0328);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T03:55:02.000 \n50.79412,86.0328", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79553812299897,86.032027);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST06:05:02.000000 \n50.79553812299897,86.032027\nAccuracy 35 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79509,86.03111);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T04:05:31.000 \n50.79509,86.03111", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.79387,86.0426);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T04:15:00.000 \n50.79387,86.0426", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.681900551108846,86.304963);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST06:30:01.000000 \n50.681900551108846,86.304963\nAccuracy 3356 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.6545,86.29671);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T04:45:00.000 \n50.6545,86.29671", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.63841,86.41009);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T04:55:00.000 \n50.63841,86.41009", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.58176,86.52047);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T05:05:00.000 \n50.58176,86.52047", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.49801,86.5657);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T05:15:03.000 \n50.49801,86.5657", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.45153,86.62382);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T05:24:59.000 \n50.45153,86.62382", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.40797,86.74879);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T05:34:59.000 \n50.40797,86.74879", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.40614,86.94709);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T05:45:05.000 \n50.40614,86.94709", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.35263,87.23136);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T06:05:30.000 \n50.35263,87.23136", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.31725925180128,87.544621);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST08:25:01.000000 \n50.31725925180128,87.544621\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.31556,87.54621);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T06:25:01.000 \n50.31556,87.54621", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.26094,87.66084);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T06:35:02.000 \n50.26094,87.66084", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.27429527385158,87.907906);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST09:00:17.000000 \n50.27429527385158,87.907906\nAccuracy 3912 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(50.01046,88.66891);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T07:35:01.000 \n50.01046,88.66891", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.99612,88.65544);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T07:45:00.000 \n49.99612,88.65544", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.99702,88.66641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T07:55:00.000 \n49.99702,88.66641", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.98539,88.67585);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:05:00.000 \n49.98539,88.67585", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.90341,88.76987);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:15:03.000 \n49.90341,88.76987", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.81399,88.96151);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:25:10.000 \n49.81399,88.96151", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.735385272874986,89.153158);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST10:35:01.000000 \n49.735385272874986,89.153158\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.72881,89.16512);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:35:08.000 \n49.72881,89.16512", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.71212971139617,89.200515);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST10:40:02.000000 \n49.71212971139617,89.200515\nAccuracy 5 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.71376,89.19467);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:45:35.000 \n49.71376,89.19467", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.71112,89.19954);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T08:55:01.000 \n49.71112,89.19954", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.71054,89.20139);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T09:25:00.000 \n49.71054,89.20139", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.7105,89.20139);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T09:35:00.000 \n49.7105,89.20139", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.67904,89.25203);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T09:45:00.000 \n49.67904,89.25203", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.64760892724969,89.432244);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-02CEST11:55:01.000000 \n49.64760892724969,89.432244\nAccuracy 10 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.46788,89.75435);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T11:53:01.000 \n49.46788,89.75435", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.45682,89.77808);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T11:54:46.000 \n49.45682,89.77808", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.34085,89.82119);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T12:18:21.000 \n49.34085,89.82119", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.32484,89.78643);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T12:28:20.000 \n49.32484,89.78643", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(49.2677,89.81669);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T12:37:19.000 \n49.2677,89.81669\nMessage: Had a vodka with the 4bikers #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(49.05715,89.90256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T12:53:06.000 \n49.05715,89.90256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.97977,89.96277);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T13:03:02.000 \n48.97977,89.96277", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.96976,89.96049);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-02T13:13:27.000 \n48.96976,89.96049", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.98197760019255,89.957779);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-03CEST04:45:05.000000 \n48.98197760019255,89.957779\nAccuracy 2599 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.968607651795196,89.96169);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "Latitude\n2011-09-03CEST05:25:01.000000 \n48.968607651795196,89.96169\nAccuracy 7 meters", icon: blueMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.95797,89.95762);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T04:25:06.000 \n48.95797,89.95762", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.92111,89.97189);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T04:34:42.000 \n48.92111,89.97189", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.87298,89.96369);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T04:44:43.000 \n48.87298,89.96369", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.82112,89.95393);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T04:54:42.000 \n48.82112,89.95393", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.78699,89.94112);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:04:41.000 \n48.78699,89.94112", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.77441,89.93646);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:14:41.000 \n48.77441,89.93646", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.74064,89.93745);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:24:42.000 \n48.74064,89.93745", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.68169,89.96492);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:34:53.000 \n48.68169,89.96492", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.63993,89.98732);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:45:07.000 \n48.63993,89.98732", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61546,90.03487);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T05:54:40.000 \n48.61546,90.03487", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61402,90.04253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:04:43.000 \n48.61402,90.04253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61401,90.04253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:14:42.000 \n48.61401,90.04253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61402,90.04253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:24:41.000 \n48.61402,90.04253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61405,90.04257);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:34:42.000 \n48.61405,90.04257", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.61402,90.04253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:44:42.000 \n48.61402,90.04253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.59828,90.0727);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:54:41.000 \n48.59828,90.0727", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.59256,90.07368);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T06:55:30.000 \n48.59256,90.07368\nMessage: Lunched with a view of stunning lake :)", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(48.5356,90.14106);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T07:10:11.000 \n48.5356,90.14106", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.49175,90.19655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T07:20:00.000 \n48.49175,90.19655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.4581,90.23721);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T07:30:00.000 \n48.4581,90.23721", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.45248,90.26489);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T07:40:05.000 \n48.45248,90.26489", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.41916,90.3539);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T07:50:09.000 \n48.41916,90.3539\nMessage: Exhaust broke. Will try repair later.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(48.41962,90.37512);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:06:26.000 \n48.41962,90.37512", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.44498,90.41793);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:16:17.000 \n48.44498,90.41793", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.46839,90.47001);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:26:14.000 \n48.46839,90.47001", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.4874,90.53011);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:36:16.000 \n48.4874,90.53011", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.49102,90.54964);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:46:19.000 \n48.49102,90.54964", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.49347,90.60097);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T08:56:14.000 \n48.49347,90.60097", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.508,90.62781);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:06:19.000 \n48.508,90.62781", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.50677,90.67332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:16:16.000 \n48.50677,90.67332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.46215,90.76138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:26:16.000 \n48.46215,90.76138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.38405,90.81473);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:36:15.000 \n48.38405,90.81473", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.40493,90.86097);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:46:15.000 \n48.40493,90.86097", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.41764,90.91978);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T09:56:17.000 \n48.41764,90.91978", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.41453,90.98641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:09:31.000 \n48.41453,90.98641", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.39219,91.05031);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:16:14.000 \n48.39219,91.05031", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.37814,91.13256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:26:14.000 \n48.37814,91.13256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.38622,91.24483);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:36:17.000 \n48.38622,91.24483", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.35499,91.29237);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:46:17.000 \n48.35499,91.29237", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.32133,91.30943);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T10:56:15.000 \n48.32133,91.30943", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.31993,91.31107);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:06:19.000 \n48.31993,91.31107", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.25185,91.36885);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:17:25.000 \n48.25185,91.36885", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.24286,91.41773);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:26:14.000 \n48.24286,91.41773", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.17851,91.45666);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:36:14.000 \n48.17851,91.45666", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.10371,91.58759);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:46:14.000 \n48.10371,91.58759", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.04073,91.61353);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T11:56:15.000 \n48.04073,91.61353", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01593,91.62765);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:06:17.000 \n48.01593,91.62765", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01605,91.62761);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:16:37.000 \n48.01605,91.62761", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01315,91.62806);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:26:38.000 \n48.01315,91.62806", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01318,91.62804);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:36:15.000 \n48.01318,91.62804", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01321,91.62801);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:46:21.000 \n48.01321,91.62801", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01317,91.62806);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T12:56:15.000 \n48.01317,91.62806", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.01315,91.62804);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-03T13:06:16.000 \n48.01315,91.62804", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.99743,91.6455);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T02:39:26.000 \n47.99743,91.6455\nMessage: Getting supplies with Icelanders", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(48.00381,91.644);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T02:55:15.000 \n48.00381,91.644", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.00309,91.64799);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:05:11.000 \n48.00309,91.64799", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.00307,91.64799);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:15:11.000 \n48.00307,91.64799", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.99981,91.64494);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:25:11.000 \n47.99981,91.64494", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(48.00358,91.64555);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:35:13.000 \n48.00358,91.64555", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.98956,91.69597);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:45:09.000 \n47.98956,91.69597", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.96516,91.75403);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T03:55:10.000 \n47.96516,91.75403", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.92589,91.80785);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T04:05:10.000 \n47.92589,91.80785", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.87887,91.81993);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T04:15:10.000 \n47.87887,91.81993", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.83226,91.89059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T04:25:10.000 \n47.83226,91.89059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.79484,91.96936);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T04:35:08.000 \n47.79484,91.96936", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.76821,92.01683);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T04:41:46.000 \n47.76821,92.01683\nMessage: Hardest bit coming up we are told :)", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(47.72665,92.06343);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:09:44.000 \n47.72665,92.06343", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.68557,92.08804);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:19:44.000 \n47.68557,92.08804", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.63201,92.12453);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:30:07.000 \n47.63201,92.12453", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.57854,92.15647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:40:14.000 \n47.57854,92.15647", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.51138,92.18177);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:49:42.000 \n47.51138,92.18177", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46326,92.20355);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T05:59:40.000 \n47.46326,92.20355", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46956,92.21593);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:09:40.000 \n47.46956,92.21593", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46857,92.2233);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:19:42.000 \n47.46857,92.2233", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46724,92.22894);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:29:43.000 \n47.46724,92.22894", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46349,92.2401);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:39:44.000 \n47.46349,92.2401", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.45038,92.31577);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:49:44.000 \n47.45038,92.31577", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.40858,92.40811);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T06:59:42.000 \n47.40858,92.40811", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.40698,92.41103);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:10:52.000 \n47.40698,92.41103", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.34494,92.46965);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:19:43.000 \n47.34494,92.46965", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.28786,92.52656);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:29:44.000 \n47.28786,92.52656", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.2542,92.56698);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:40:07.000 \n47.2542,92.56698", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22827,92.60685);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:49:41.000 \n47.22827,92.60685", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22825,92.60685);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T07:59:41.000 \n47.22825,92.60685", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22823,92.6069);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T08:09:41.000 \n47.22823,92.6069", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22824,92.6068);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T08:19:41.000 \n47.22824,92.6068", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22823,92.60693);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T08:29:41.000 \n47.22823,92.60693", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22815,92.60696);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T08:39:41.000 \n47.22815,92.60696", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.22816,92.60691);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T08:49:40.000 \n47.22816,92.60691", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.19954,92.62202);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:00:10.000 \n47.19954,92.62202", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.17311,92.66255);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:09:44.000 \n47.17311,92.66255", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.152,92.72614);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:19:42.000 \n47.152,92.72614", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.11442,92.79196);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:29:50.000 \n47.11442,92.79196", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.10646,92.8454);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:39:49.000 \n47.10646,92.8454", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.09799,92.88166);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:49:42.000 \n47.09799,92.88166", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.0624,92.96603);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T09:59:41.000 \n47.0624,92.96603", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.05868,92.97004);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T10:10:06.000 \n47.05868,92.97004", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.05735,92.98002);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T10:19:44.000 \n47.05735,92.98002", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.05705,93.06941);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T10:29:44.000 \n47.05705,93.06941", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.0529,93.10036);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T10:39:44.000 \n47.0529,93.10036", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.0529,93.10036);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T10:49:42.000 \n47.0529,93.10036", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.05138,93.16801);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:00:11.000 \n47.05138,93.16801", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.04134,93.28051);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:09:51.000 \n47.04134,93.28051", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.02717,93.3386);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:20:55.000 \n47.02717,93.3386", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.00393,93.4081);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:29:40.000 \n47.00393,93.4081", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.00396,93.40804);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:39:41.000 \n47.00396,93.40804", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.00401,93.40797);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:49:40.000 \n47.00401,93.40797", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.00402,93.40791);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T11:59:41.000 \n47.00402,93.40791", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.00049,93.41868);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:09:41.000 \n47.00049,93.41868", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.99969,93.42115);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:19:42.000 \n46.99969,93.42115", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97729,93.49236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:30:32.000 \n46.97729,93.49236", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97725,93.49236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:39:41.000 \n46.97725,93.49236", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97728,93.49236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:42:45.000 \n46.97728,93.49236\nMessage: Camping with 5 other teams! #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.97762,93.49273);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T12:58:41.000 \n46.97762,93.49273", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97763,93.49273);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T13:08:31.000 \n46.97763,93.49273", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97725,93.49249);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T13:18:30.000 \n46.97725,93.49249", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97726,93.49252);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T13:28:31.000 \n46.97726,93.49252", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97725,93.49254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T13:48:32.000 \n46.97725,93.49254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97722,93.49252);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T13:58:32.000 \n46.97722,93.49252", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97724,93.49254);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-04T14:08:31.000 \n46.97724,93.49254", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.97723,93.49252);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T01:53:01.000 \n46.97723,93.49252", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.95072,93.58455);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:02:23.000 \n46.95072,93.58455", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.93491,93.61493);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:12:25.000 \n46.93491,93.61493", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.93483,93.61504);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:22:22.000 \n46.93483,93.61504", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.93487,93.61506);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:32:23.000 \n46.93487,93.61506", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.93483,93.61504);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:47:39.000 \n46.93483,93.61504\nMessage: Fuel stop, 92 @ 2USD a L! Expensive :/", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.91459,93.62864);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T02:57:33.000 \n46.91459,93.62864", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.88994,93.69634);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:07:22.000 \n46.88994,93.69634", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.87955,93.78756);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:17:21.000 \n46.87955,93.78756", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.909,93.87139);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:27:26.000 \n46.909,93.87139", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.92722,93.96774);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:37:22.000 \n46.92722,93.96774", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.92841,94.03629);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:47:31.000 \n46.92841,94.03629", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.91481,94.1459);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T03:57:31.000 \n46.91481,94.1459", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.88174,94.23332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:07:37.000 \n46.88174,94.23332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.88174,94.23332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:17:37.000 \n46.88174,94.23332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.88172,94.23332);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:27:25.000 \n46.88172,94.23332", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.88174,94.2333);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:37:28.000 \n46.88174,94.2333", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.87564,94.24214);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:47:34.000 \n46.87564,94.24214", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.82587,94.32531);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T04:57:22.000 \n46.82587,94.32531", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.77179,94.44872);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:07:26.000 \n46.77179,94.44872", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.7323,94.56922);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:17:23.000 \n46.7323,94.56922", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.71754,94.7335);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:29:02.000 \n46.71754,94.7335", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.71007,94.78013);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:37:22.000 \n46.71007,94.78013", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.69327,94.88561);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:47:21.000 \n46.69327,94.88561", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.67958,94.96011);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T05:57:21.000 \n46.67958,94.96011", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68002,94.96059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:07:23.000 \n46.68002,94.96059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68004,94.96061);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:17:21.000 \n46.68004,94.96061", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68007,94.96061);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:27:24.000 \n46.68007,94.96061", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68005,94.96059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:37:24.000 \n46.68005,94.96059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68004,94.96059);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:47:22.000 \n46.68004,94.96059", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.68004,94.96069);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T06:57:21.000 \n46.68004,94.96069", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.66365,95.07753);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:07:31.000 \n46.66365,95.07753", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.66291,95.19617);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:17:22.000 \n46.66291,95.19617", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.60592,95.2714);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:27:22.000 \n46.60592,95.2714", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.52571,95.31929);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:37:27.000 \n46.52571,95.31929", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.43701,95.43074);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:47:55.000 \n46.43701,95.43074", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37635,95.52754);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T07:57:22.000 \n46.37635,95.52754", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.36855,95.69441);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:07:31.000 \n46.36855,95.69441", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.36697,95.80679);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:17:26.000 \n46.36697,95.80679", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.367,95.96703);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:27:25.000 \n46.367,95.96703", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39826,96.09949);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:37:26.000 \n46.39826,96.09949", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.38048,96.22646);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:47:27.000 \n46.38048,96.22646", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.3733,96.25542);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T08:57:33.000 \n46.3733,96.25542", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.3733,96.25542);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:07:33.000 \n46.3733,96.25542", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37273,96.25712);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:17:23.000 \n46.37273,96.25712", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37278,96.25732);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:27:29.000 \n46.37278,96.25732", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37275,96.25723);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:37:22.000 \n46.37275,96.25723", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37284,96.25732);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:47:43.000 \n46.37284,96.25732", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.3716,96.25333);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T09:57:55.000 \n46.3716,96.25333", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37168,96.25336);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:07:28.000 \n46.37168,96.25336", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37476,96.25499);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:17:23.000 \n46.37476,96.25499", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37326,96.25542);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:27:23.000 \n46.37326,96.25542", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37427,96.25341);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:37:21.000 \n46.37427,96.25341", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37289,96.2536);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:47:22.000 \n46.37289,96.2536", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39644,96.28423);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T10:57:21.000 \n46.39644,96.28423", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40779,96.31218);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:07:25.000 \n46.40779,96.31218", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39941,96.29585);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:17:55.000 \n46.39941,96.29585", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37514,96.25951);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:27:20.000 \n46.37514,96.25951", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37521,96.25957);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:37:21.000 \n46.37521,96.25957", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37519,96.25952);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:47:20.000 \n46.37519,96.25952", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.3752,96.25952);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T11:57:19.000 \n46.3752,96.25952", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39882,96.2898);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T12:07:23.000 \n46.39882,96.2898", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40949,96.32083);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T12:17:19.000 \n46.40949,96.32083", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40953,96.32074);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T12:27:22.000 \n46.40953,96.32074", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40953,96.32072);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T12:37:23.000 \n46.40953,96.32072", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40953,96.32074);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-05T12:38:15.000 \n46.40953,96.32074", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40921,96.32066);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T01:22:06.000 \n46.40921,96.32066", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.40929,96.35121);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T01:31:38.000 \n46.40929,96.35121", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39397,96.42481);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T01:41:39.000 \n46.39397,96.42481", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39059,96.4726);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T01:51:39.000 \n46.39059,96.4726", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39818,96.57613);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:01:39.000 \n46.39818,96.57613", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.39721,96.65312);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:11:43.000 \n46.39721,96.65312", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.38979,96.75816);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:21:40.000 \n46.38979,96.75816", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.38477,96.81835);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:31:36.000 \n46.38477,96.81835", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37662,96.86504);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:41:36.000 \n46.37662,96.86504", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.37699,96.87094);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T02:51:36.000 \n46.37699,96.87094", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.36705,96.95094);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:01:38.000 \n46.36705,96.95094", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.346,97.05554);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:11:39.000 \n46.346,97.05554", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.33358,97.13253);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:21:43.000 \n46.33358,97.13253", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.31552,97.19988);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:31:39.000 \n46.31552,97.19988", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28658,97.30402);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:41:38.000 \n46.28658,97.30402", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28514,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T03:51:39.000 \n46.28514,97.31037", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28515,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:01:38.000 \n46.28515,97.31037", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28515,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:11:39.000 \n46.28515,97.31037", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28515,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:16:07.000 \n46.28515,97.31037", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28515,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:26:07.000 \n46.28515,97.31037", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28515,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:35:05.000 \n46.28515,97.31037\nMessage: Icelanders crash, airbags blew. All OK :)", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.28514,97.31035);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:44:08.000 \n46.28514,97.31035", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28514,97.31035);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T04:54:07.000 \n46.28514,97.31035", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28514,97.31035);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:04:07.000 \n46.28514,97.31035", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.28514,97.31037);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:10:16.000 \n46.28514,97.31037\nMessage: 2 Swiss teams stopped by to say hello :)", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.23763,97.42197);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:26:14.000 \n46.23763,97.42197", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.19122,97.52096);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:36:04.000 \n46.19122,97.52096", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.14494,97.6032);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:46:04.000 \n46.14494,97.6032", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.13766,97.61436);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T05:56:03.000 \n46.13766,97.61436", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.09761,97.67517);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:06:04.000 \n46.09761,97.67517", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.06696,97.75471);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:16:05.000 \n46.06696,97.75471", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01403,97.80814);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:26:02.000 \n46.01403,97.80814", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01468,97.80768);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:36:03.000 \n46.01468,97.80768", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01553,97.83394);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:46:02.000 \n46.01553,97.83394", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.98603,97.91256);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T06:56:03.000 \n45.98603,97.91256", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.92305,98.01215);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:06:02.000 \n45.92305,98.01215", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.86294,98.12767);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:16:03.000 \n45.86294,98.12767", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.85097,98.15267);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:26:05.000 \n45.85097,98.15267", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.8509,98.1528);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:26:51.000 \n45.8509,98.1528\nMessage: Icelandic car keeps over heating. Waiting", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(45.84953,98.15647);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:43:24.000 \n45.84953,98.15647", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.84953,98.15649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T07:53:12.000 \n45.84953,98.15649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.82807,98.22591);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T08:03:59.000 \n45.82807,98.22591", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.80055,98.52054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T08:12:47.000 \n45.80055,98.52054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.80055,98.52054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T08:22:47.000 \n45.80055,98.52054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.80055,98.52054);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T08:32:47.000 \n45.80055,98.52054", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.84477,99.30319);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T09:47:45.000 \n45.84477,99.30319\nMessage: No hot shower & lots of dust #mongolrally", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(45.84758,99.33806);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:03:41.000 \n45.84758,99.33806", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.85169,99.33222);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:13:30.000 \n45.85169,99.33222", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.85136,99.31422);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:23:31.000 \n45.85136,99.31422", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.84807,99.33741);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:33:30.000 \n45.84807,99.33741", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.85022,99.3363);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:43:30.000 \n45.85022,99.3363", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.87206,99.39492);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T10:53:30.000 \n45.87206,99.39492", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.87425,99.44968);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:03:29.000 \n45.87425,99.44968", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.90714,99.52015);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:13:39.000 \n45.90714,99.52015", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.92083,99.61287);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:23:31.000 \n45.92083,99.61287", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01391,99.89986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:35:31.000 \n46.01391,99.89986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01391,99.89986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:45:31.000 \n46.01391,99.89986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01391,99.89986);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T11:55:31.000 \n46.01391,99.89986", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.03108,99.99095);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:04:51.000 \n46.03108,99.99095", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.03425,100.0443);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:14:52.000 \n46.03425,100.0443", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.03614,100.06693);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:24:51.000 \n46.03614,100.06693", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.0431,100.12148);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:34:51.000 \n46.0431,100.12148", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.04287,100.18759);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:44:52.000 \n46.04287,100.18759", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.02948,100.25557);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T12:54:52.000 \n46.02948,100.25557", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.02032,100.31106);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:04:52.000 \n46.02032,100.31106", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.01506,100.36225);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:14:52.000 \n46.01506,100.36225", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.02182,100.42343);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:24:52.000 \n46.02182,100.42343", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.041,100.48776);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:34:52.000 \n46.041,100.48776", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.07056,100.54602);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:44:51.000 \n46.07056,100.54602", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.08865,100.56301);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:54:52.000 \n46.08865,100.56301", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.08865,100.56301);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T13:55:49.000 \n46.08865,100.56301\nMessage: Cold, hungry & Icelandic car stuck in mud", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.08884,100.56303);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T14:12:30.000 \n46.08884,100.56303", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.08906,100.56352);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T14:21:28.000 \n46.08906,100.56352", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.09532,100.57771);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T14:31:23.000 \n46.09532,100.57771", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.10083,100.58672);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T14:41:24.000 \n46.10083,100.58672", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.13515,100.633);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T14:51:41.000 \n46.13515,100.633", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.17013,100.68034);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T15:01:37.000 \n46.17013,100.68034", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.18402,100.69543);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T15:25:26.000 \n46.18402,100.69543\nMessage: Icelanders are out with broken axel :(", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.19501,100.71925);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-06T15:26:36.000 \n46.19501,100.71925", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.18484,100.71135);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T05:21:25.000 \n46.18484,100.71135", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.18472,100.71124);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T05:22:15.000 \n46.18472,100.71124", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.1848,100.71128);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T05:38:22.000 \n46.1848,100.71128", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.18478,100.71127);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T05:48:12.000 \n46.18478,100.71127", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.1818,100.72242);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T05:58:10.000 \n46.1818,100.72242", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.08622,100.7895);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:08:11.000 \n46.08622,100.7895", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.06737,100.86406);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:18:10.000 \n46.06737,100.86406", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.06692,100.87606);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:26:25.000 \n46.06692,100.87606\nMessage: Said goodbye to our Icelandic friends. :(", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.02649,100.97813);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:35:08.000 \n46.02649,100.97813", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.98938,101.04759);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:44:51.000 \n45.98938,101.04759", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.95076,101.13512);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T06:54:52.000 \n45.95076,101.13512", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.92505,101.207);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:04:51.000 \n45.92505,101.207", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.92939,101.27863);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:14:50.000 \n45.92939,101.27863", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.95103,101.36604);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:24:53.000 \n45.95103,101.36604", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.95596,101.44213);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:34:52.000 \n45.95596,101.44213", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.9367,101.5414);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:45:55.000 \n45.9367,101.5414", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.91041,101.64688);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T07:54:51.000 \n45.91041,101.64688", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.85919,101.75593);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:04:50.000 \n45.85919,101.75593", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.81226,101.77396);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:14:50.000 \n45.81226,101.77396", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.81216,101.89173);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:24:50.000 \n45.81216,101.89173", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.81062,101.98134);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:35:18.000 \n45.81062,101.98134", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.871,102.04138);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:44:52.000 \n45.871,102.04138", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.9388,102.07162);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T08:54:51.000 \n45.9388,102.07162", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(45.9746,102.11681);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:04:52.000 \n45.9746,102.11681", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.00127,102.16281);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:15:00.000 \n46.00127,102.16281", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.03279,102.20813);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:24:50.000 \n46.03279,102.20813", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.05519,102.29121);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:36:54.000 \n46.05519,102.29121", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.03458,102.35816);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:44:53.000 \n46.03458,102.35816", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.02599,102.4038);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T09:59:09.000 \n46.02599,102.4038\nMessage: Odd rock formations here, like cairns", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(46.06106,102.48362);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:07:02.000 \n46.06106,102.48362", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.1151,102.5556);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:16:52.000 \n46.1151,102.5556", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.17786,102.69118);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:26:51.000 \n46.17786,102.69118", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.24972,102.78787);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:36:55.000 \n46.24972,102.78787", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26376,102.77478);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:46:53.000 \n46.26376,102.77478", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26471,102.77641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T10:57:55.000 \n46.26471,102.77641", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26699,102.79236);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T11:06:52.000 \n46.26699,102.79236", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26937,102.77622);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T11:16:52.000 \n46.26937,102.77622", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26761,102.77071);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T11:26:52.000 \n46.26761,102.77071", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26376,102.77465);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T11:36:53.000 \n46.26376,102.77465", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26375,102.7747);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-07T11:46:52.000 \n46.26375,102.7747", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26558,102.77826);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T01:07:35.000 \n46.26558,102.77826", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26562,102.77824);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T01:17:35.000 \n46.26562,102.77824", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26556,102.77821);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T01:27:34.000 \n46.26556,102.77821", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.26563,102.77818);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T01:37:33.000 \n46.26563,102.77818", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.56146,103.04457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T02:10:24.000 \n46.56146,103.04457", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.56146,103.04457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T02:20:24.000 \n46.56146,103.04457", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.56146,103.04457);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T02:30:24.000 \n46.56146,103.04457", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(46.65579,103.16707);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T02:39:41.000 \n46.65579,103.16707", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.35609,104.1656);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T04:13:46.000 \n47.35609,104.1656", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.33754,104.39389);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T04:25:03.000 \n47.33754,104.39389", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.38298,104.5089);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T04:34:25.000 \n47.38298,104.5089", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.46592,104.58802);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T04:43:29.000 \n47.46592,104.58802", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.52522,104.61649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T04:53:25.000 \n47.52522,104.61649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.52518,104.61649);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:03:29.000 \n47.52518,104.61649", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.52522,104.61639);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:13:26.000 \n47.52522,104.61639", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.52522,104.61641);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:23:39.000 \n47.52522,104.61641", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.53181,104.62898);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:34:17.000 \n47.53181,104.62898", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.55036,104.66394);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:36:16.000 \n47.55036,104.66394\nMessage: Lunched and emptied our fuel cans.", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(47.58414,104.73779);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T05:54:07.000 \n47.58414,104.73779", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.6531,104.92368);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:07:07.000 \n47.6531,104.92368", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.70064,105.00428);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:14:55.000 \n47.70064,105.00428", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.79076,105.13633);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:25:08.000 \n47.79076,105.13633", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.86716,105.24821);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:34:05.000 \n47.86716,105.24821", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.89938,105.42015);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:44:03.000 \n47.89938,105.42015", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91158,105.61185);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T06:53:24.000 \n47.91158,105.61185\nMessage: 50 miles from #mongolrally finish line!!", icon: messageMarkerImage}), 7);

var latlng = new google.maps.LatLng(47.90112,106.03004);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:13:06.000 \n47.90112,106.03004", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91721,106.23592);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:22:37.000 \n47.91721,106.23592", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.90202,106.41347);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:32:14.000 \n47.90202,106.41347", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.88737,106.59193);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:42:17.000 \n47.88737,106.59193", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.8848,106.63768);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:45:23.000 \n47.8848,106.63768", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.90225,106.73466);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T07:58:42.000 \n47.90225,106.73466", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.90991,106.81655);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:09:12.000 \n47.90991,106.81655", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91244,106.84944);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:18:33.000 \n47.91244,106.84944", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91415,106.8747);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:28:32.000 \n47.91415,106.8747", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91525,106.8971);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:38:34.000 \n47.91525,106.8971", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91753,106.90442);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:48:39.000 \n47.91753,106.90442", icon: orangeMarkerImage}), 9);

var latlng = new google.maps.LatLng(47.91756,106.90437);
path.push(latlng);
markerManager.addMarker(new google.maps.Marker({position: latlng, title: "SPOT\n2011-09-08T08:49:04.000 \n47.91756,106.90437\nMessage: We made it ! #mongolrall", icon: messageMarkerImage}), 7);

			

					poly.setMap(map);
				}
			</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1705326-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		</head>
		<body onload="initialize()">
		<div id="map_canvas" style="width:100%; height:100%"></div>
		<p></p>
		</body>
	</html>