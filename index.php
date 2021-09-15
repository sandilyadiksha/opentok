<html>
<head></head>
<body>
	<div>
		<h2 style="color: blue; font-weight: bolder;">My First Open Tok Hello World Programme</h2>
	</div>
<!-- OpenTok.js library -->
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>

// credentials
var apiKey = '45828062';
var sessionId = '1_MX40NTgyODA2Mn5-MTYzMTYzNzcwNDI0M35tcDZtb1kveVZrU1lxRFNIeG5OdlQ1OXB-UH4';
var token = 'T1==cGFydG5lcl9pZD00NTgyODA2MiZzaWc9YTBhNThjZDA4MjA3NjQ3MmQwMWE2MTYwYjQwYmU2MTUzZmVmYjY3NjpzZXNzaW9uX2lkPTFfTVg0ME5UZ3lPREEyTW41LU1UWXpNVFl6Tnpjd05ESTBNMzV0Y0RadGIxa3ZlVlpyVTFseFJGTkllRzVPZGxRMU9YQi1VSDQmY3JlYXRlX3RpbWU9MTYzMTYzODExNCZub25jZT0wLjc3ODQxMTE4MjMzMDA0MzUmcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTYzMTcyNDUxNA==';

// connect to session
var session = OT.initSession(apiKey, sessionId);

// create publisher
var publisher = OT.initPublisher();
session.connect(token, function(err) {
   // publish publisher
   session.publish(publisher);
   
});

  
// create subscriber
session.on('streamCreated', function(event) {
   session.subscribe(event.stream);
});

</script>
</body>
</html>