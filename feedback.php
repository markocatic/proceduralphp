<?php
	@session_start();
	include ('konekcija.inc');
?>
	<div class="cont2"> 
		<div class="trap">
	<h1>
							Rate our site if you liked it:
						</h1>
						
		<form action="" method="post" name="feedbackform" id="feedBF">
							<table class="feedbackTable">
								<tbody>
								<tr>
									<td class="feedCell">Site appearance</td>
									<td>
										<input type="radio" name="visual">&nbsp;Poor &nbsp;
										<input type="radio" name="visual">&nbsp;OK &nbsp;
										<input type="radio" name="visual">&nbsp;Good &nbsp;
										<input type="radio" name="visual">&nbsp;Excellent&nbsp;
										<span id="visualGreska"></span>
									</td>
								</tr>
								<tr>
									<td class="feedCell">Organization of the site: </td>
									<td>
										<input type="radio" name="organization">&nbsp;Poor &nbsp;
										<input type="radio" name="organization">&nbsp;OK &nbsp;
										<input type="radio" name="organization">&nbsp;Good &nbsp;
										<input type="radio" name="organization">&nbsp;Excellent&nbsp;
										<span id="organizationGreska"></span>
									</td>
								</tr>
								<tr>
									<td class="feedCell">The quality of the content: </td>
									<td>
										<input type="radio" name="quality">&nbsp;Poor &nbsp;
										<input type="radio" name="quality">&nbsp;OK &nbsp;
										<input type="radio" name="quality">&nbsp;Good &nbsp;
										<input type="radio" name="quality">&nbsp;Excellent&nbsp;
										<span id="qualityGreska"></span>
									</td>
								</tr>
								<tr>
									<td class="feedCell">Overall: </td>
									<td>
										<input type="radio" name="overall">&nbsp;Poor &nbsp;
										<input type="radio" name="overall">&nbsp;OK &nbsp;
										<input type="radio" name="overall">&nbsp;Good &nbsp;
										<input type="radio" name="overall">&nbsp;Excellent&nbsp;
										<span id="overallGreska"></span>
									</td>
								</tr>
							</tbody></table>
							<h3>
								Please use the space below to provide any additional comments:
							</h3>
							<table class="feedbackTable">
								<tbody>
								<tr>
									<td>
										<input type="button" class="buttonLog" name="feedbackSubmit" id="feedbackSubmit" value="Post" onclick="proveraFeedback();">
									</td>
								</tr>
							</tbody></table>
						</form>
		</div>
		</div>
	