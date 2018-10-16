<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>odb.ui-jquery</title>
		<script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="./lib/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./lib/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<!-- VARIABLES  -->
		<script type="text/javascript">
			const odb_server_prod='http://orderdb.prod.ghcg.com/';
			const odb_request_type_byorder='orders/';
			const odb_request_type_byquery='orders?';

			var v_env='prod';
			var v_orderid;
			var v_option_accauntid;
			var v_option_username;
			var v_option_instrument;
			var v_option_status;
			var v_request;
			var v_server;
			var odb_request;
			//odb_request parts block
			var odb_request_server;
			var odb_request_type;

		</script>
		<!-- VARIABLES  -->
		<div class="container">
			<div class="container-box control_env">
				<div class="row al-center">
					<div class="layer ">
						<div class="item">
							<input id="radio-env-demo"  name="environment" type="radio" value="demo"/><br>
							<label for="radio-env-demo">Demo</label>
						</div>
						<div class="item">
							<input id="radio-env-prod"  name="environment" type="radio" value="prod" checked="true"/><br>
							<label for="radio-env-prod">Prod</label>
						</div>
						<div class="item">
							<input id="radio-env-cprod"  name="environment" type="radio" value="cprod"/><br>
							<label for="radio-env-cprod">Cprod</label>
						</div>
<script type="text/javascript">
	$("input[name=environment]:radio").controlgroup();
	$('.control_env input:radio').on('change', function() {
   		v_env=$("input[name=environment]:checked").val();
		console.log(v_env); 
	});
</script>
					</div>
				</div>
			</div>
			<div class="container-box">
				<div class="layer al-center">
					<div class="item">
						<label for="field-orderId">orderId </label>
						<input id="field-orderId" type="text" name="orderId"/>
					</div>
<script type="text/javascript">
	$("#field-orderId").on("change", function() {
		v_orderid=$("#field-orderId").val();
		if (v_orderid=="") {
			$("#checkbox_panel input").prop("disabled", false).hide().show(0);

		} else {
			$("#checkbox_panel input").prop("disabled", true).hide().show(0);	
		}
   	}).on('focus', function() {
		v_orderid=$("#field-orderId").val();
		if (v_orderid=="") {
			$("#checkbox_panel input").prop("disabled", false).hide().show(0);
		} else {
			$("#checkbox_panel input").prop("disabled", true).hide().show(0);
		}
	});
</script>
				</div>
			</div>
			<div id="checkbox_panel" class="container-box grid">
				<div class="layer">
					<div class="item">
						<input id="checkbox-account" type="checkbox"/>
						<label for="checkbox-account">AccountId</label>
						<input id="field-accountId" type="text" name="accountId"/>
					</div>
					<div class="item">
						<input id="checkbox-username" type="checkbox"/>
						<label for="checkbox-username">username</label>
						<input id="field-username" type="text" name="username"/>
					</div>
					<div class="item">
						<input id="checkbox-instrument" type="checkbox"/>
						<label for="checkbox-instrument">instrument</label>
						<input id="field-instrument" type="text" name="instrument"/>
					</div>
				</div>
				<div class="layer">
					<div class="item">
						<input id="checkbox-status" type="checkbox"/>
						<label for="checkbox-status">status</label>
						<input id="field-status" type="text" name="status"/>
					</div>
				</div>
			</div>
		</div>
		<div class="container-box">
			<div class="layer">
				<label id='var_environment'>Env: </label>
			</div>
		<script type="text/javascript">
			$(document).ready(function() {
				v_env=$("input[name=environment]:checked").val();
				console.log(v_env);
				$("#var_environment").html('v_env');
			});
		</script>
	</body>
</html>