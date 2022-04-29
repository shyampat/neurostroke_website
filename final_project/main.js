var btnContainer = document.getElementById("navbarNavAltMarkup");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("nav-item");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
          
              // If there's no active class
              if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
              }
          
              // Add the active class to the current/clicked button
              this.className += " active";
            });
          }
// document.querySelector("#search-form").onsubmit = function(event) {
//     //event.preventDefault();

//     // Get the user's input
//     // let searchInput = document.querySelector("#search-id").value.trim();
//     // let limitInput = document.querySelector("#limit-id").value;

//     // // Convert spaces and special characters 
//     // let convertedSearchInput = encodeURIComponent(searchInput);

//     // Prepare the endpoint
//     let endpoint = "https://clinicaltrials.gov/api/query/study_fields?expr=stroke&fields=BriefTitle%2CBriefSummary%2CInterventionType%2CPhase%2CIsFDARegulatedDrug%2CIsFDARegulatedDevice%2CEligibilityCriteria%2CCentralContactPhone&min_rnk=1&max_rnk=&fmt=json";
//     console.log(endpoint);

//     // AJAX with jquery

//     $.ajax({
//         method: "GET",
//         url: "https://clinicaltrials.gov/api/query/study_fields?expr=stroke&fields=BriefTitle%2CBriefSummary%2CInterventionType%2CPhase%2CIsFDARegulatedDrug%2CIsFDARegulatedDevice%2CEligibilityCriteria%2CCentralContactPhone&min_rnk=1&max_rnk=&fmt=json",
//         // data is the parameters we are passing to the request
//     })
//     .done(function(results) {
//         console.log(results)
//         displayResults(results);
//     })
//     .fail(function(results){
//         console.log("ERROR");
//         console.log(results);
//     });

// }
// document.querySelector("#title").innerHTML += "Hello SSSSSSSSSSSSSS";
// function displayResults(results) {
//      //Convert the JSON string to JS objects
    
//         let resultsJS = JSON.parse(results);
    
//         // 👇️ This runs
        
//      console.log(resultsJS);

//      document.querySelector("#num-results").innerHTML = resultsJS.StudyFieldsResponse.NStudiesReturned;
//      //document.querySelector("#title").innerHTML = resultsJS.FieldValuesResponse.FieldValues[0].FieldValue;
//         console.log(resultsJS.StudyFieldsResponse.NStudiesReturned);
// //     // Clear the previous search result
//       document.querySelector("#title").replaceChildren();

//       for(let i = 0; i < resultsJS.StudyFieldsResponse.NStudiesReturned; i++) {
//          let htmlString = `
//           <tr>
//                 <td>
//                      ${resultsJS.StudyFieldsResponse.StudyFields[i].BriefTitle}
//               </td>
//              <td>
//                  ${resultsJS.StudyFieldsResponse.StudyFields[i].BriefSummary}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].InterventionType}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].Phase}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].IsFDARegulatedDrug}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].IsFDARegulatedDevice}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].EligibilityCriteria}
//             </td>
//             <td>
//                 ${resultsJS.StudyFieldsResponse.StudyFields[i].CentralContactPhone}
//             </td>
//          </tr>
//          `;
//          if(document.getElementById("title") != null){
//              document.getElementById("title").innerHTML += htmlString;
//          }

//       }
     
//  }
