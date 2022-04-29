
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trials Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
</head>
<body id = "clinical_trial_page">
    <?php include 'navigation.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let endpoint = "https://clinicaltrials.gov/api/query/study_fields?expr=stroke&fields=BriefTitle%2CBriefSummary%2CInterventionType%2CPhase%2CIsFDARegulatedDrug%2CIsFDARegulatedDevice%2CEligibilityCriteria%2CCentralContactPhone&min_rnk=1&max_rnk=&fmt=json";
        console.log(endpoint);

        // AJAX with jquery

        $.ajax({
        method: "GET",
        url: "https://clinicaltrials.gov/api/query/study_fields?expr=stroke&fields=BriefTitle%2CBriefSummary%2CInterventionType%2CPhase%2CIsFDARegulatedDrug%2CIsFDARegulatedDevice%2CEligibilityCriteria%2CCentralContactPhone&min_rnk=1&max_rnk=&fmt=json",
        // data is the parameters we are passing to the request
        })
        .done(function(results) {
            console.log(results)
            displayResults(results);
        })
        .fail(function(results){
            console.log("ERROR");
            console.log(results);
        });
    </script>
    <div class = "container-fluid">
        
        <div>
            <h1 id = "prevention_heading">List of Stroke Clinical Trials</h1>
            <h2 id = "trials_gov">From the ClinicalTrials.gov Database</h2>
        </div>
            <div class="col-12 mt-4 number_of_results">
                Showing <span id="num-results" class="font-weight-bold">1</span> result(s).
            </div>
        <div class = "table-responsive">
            <table class="table table-dark table-bordered table-striped">
                
                <thead class="thead-light">
                    <tr>
                        <th >Trial Name</th>
                        <th  >Summary</th>
                        <th >Intervention Type</th>
                        <th >Phase</th>
                        <th > Eligibility Criteria</th>
                        <th >Central Contact Phone</th>
                    </tr>
                </thead>
                <tbody id = "title">

                    <tr >
                        <td >Hello</td>
                        <td>The Beatles</td>
                        <td >Here Comes the Sun</td>
                        <td >Abbey Road</td>
                        <td >Hi</td>
                        <td >Hi</td>
                    </tr>

                </tbody>
            </table>
     </div>

    </div> <!-- .container-fluid -->
    <script>
        
function displayResults(results) {
     //Convert the JSON string to JS objects
    
        let resultsJS = JSON.parse(results);
    
        // 👇️ This runs
        
     console.log(resultsJS);

     document.querySelector("#num-results").innerHTML = resultsJS.StudyFieldsResponse.NStudiesReturned;
     //document.querySelector("#title").innerHTML = resultsJS.FieldValuesResponse.FieldValues[0].FieldValue;
        console.log(resultsJS.StudyFieldsResponse.NStudiesReturned);
//     // Clear the previous search result
      document.querySelector("#title").replaceChildren();

      for(let i = 0; i < resultsJS.StudyFieldsResponse.NStudiesReturned; i++) {
                 
                 let htmlString = `
                  <tr>
                    <td >
                        ${resultsJS.StudyFieldsResponse.StudyFields[i].BriefTitle}
                    </td>
                    <td >
                         ${resultsJS.StudyFieldsResponse.StudyFields[i].BriefSummary}
                    </td>
                    <td >
                        ${resultsJS.StudyFieldsResponse.StudyFields[i].InterventionType}
                    </td>
                    <td >
                        ${resultsJS.StudyFieldsResponse.StudyFields[i].Phase}
                    </td>
                    <td >
                        ${resultsJS.StudyFieldsResponse.StudyFields[i].EligibilityCriteria}
                    </td>
                    <td >
                        ${resultsJS.StudyFieldsResponse.StudyFields[i].CentralContactPhone}
                    </td>
                 </tr>
                 `;
                 
                 if(document.getElementById("title") != null){
                     document.getElementById("title").innerHTML += htmlString;
                 }
        

      }
     
 }

    </script>
    <?php include 'footer.php'; ?> 
	
</body>
</html>