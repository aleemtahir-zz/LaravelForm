<!DOCTYPE html>
<html lang="en">
  <head>
    
    
    <link type="text/css" rel="stylesheet" href="{{asset('css/cognito.css')}}">
    <script type="text/javascript" crossorigin="anonymous" src="{{asset('js/cognito.js')}}"></script>

    <meta charset="utf-8">
    <title>Cognito Forms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=no">
   
<!--     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/> -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!--  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->


    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"> 
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

  </head>

	<body class="c-public-form cognito-background" cz-shortcut-listen="true">
		<div id="c-forms-container" class="cognito c-safari c-lrg">
			<form method="post">
				<div class="c-forms-form" tabindex="0">
					<div class="c-forms-confirmation" style="display: block;">
						<div class="c-forms-heading">
							<div class="c-forms-form-title">
								<h2>Property Form</h2>
							</div>
						</div>
						<div class="c-forms-confirmation-message c-html"><span>Thank you for filling out the form. Your response has been recorded.</span></div>
						<div class="c-forms-confirmation-message">
							<!-- <div class="c-forms-document-links">
								<a class="c-forms-document-link" target="_blank" href="">
								<span class="ms-word-file-icon-32x32"></span>
								<span>HMF Property Sales Data Form - 13</span>
								</a>
							</div> -->
							<div class="c-choice-radiobuttons c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12">
	                            <legend class="c-label  ">Merge Data into Documents</legend>
	                            <div class="c-helptext">Choose documents</div>
	                            <div class="c-editor"> <!-- c-columns-0 -->
		                            <div class="c-choice-option">
		                            	<label>
		                            		<input name="doc[]" type="radio" id="c-43-520" value="membership">
		                            		<span>Doc1</span>
		                            	</label>
		                            </div>
		                            <div class="c-choice-option">
		                            	<label>
		                            		<input name="doc[]" type="radio" id="c-43-521" value="template2">
		                            		<span>Doc2</span>
		                            	</label>
		                            </div>
		                            <div class="c-choice-option">
		                            	<label>
		                            		<input name="doc[]" type="radio" id="c-43-522" value="template3">
		                            		<span>Doc3</span>
		                            	</label>
		                            </div>
		                            <div class="c-choice-option">
		                            	<label>
		                            		<input name="doc[]" type="radio" id="c-43-523" value="template4">
		                            		<span>Doc4</span>
		                            	</label>
		                            </div>
		                        </div>
		                        <div class="c-validation"></div>
	                            
	                        </div>
							<div class="c-button-section">
			                    <div class="c-action">
			                    	<button type="submit" class="c-button">Merge</button>
			                    </div>
			                </div>
						</div>
					</div>
					
					<div class="c-footer-terms" >
						<!-- <ul class="terms">
							<li><a href="https://www.cognitoforms.com/reportabuse?form=https%3A%2F%2Fwww.cognitoforms.com%2FMarcusWilliams1%2FHMFPropertySalesDataForm" target="_blank">Report Abuse</a></li>
							<li><a href="https://www.cognitoforms.com/terms" target="_blank">Terms of Service</a></li>
						</ul> -->
					</div>
				</div>
			</form>

		</div>	

	</body>

</html>