import Fetch from "./FetchApi.js";
var FetchApi = new Fetch();

export class geIntegrationApi {

    sendLeadToGrowthEye = async (formName) => {
        if (
                $("#" + formName)
                .parsley()
                .validate()
                ) {
            var formData = this.getFormData(formName);
            await FetchApi.postData("https://growtheye.com/lead_api.php", formData)
                    .then((response) => response.text())
                    .then((responseText) => {
                        console.log(responseText);
                        if (responseText == 'API Hit Success.') {
                            window.location.href = 'thankyoupage.php';
                        //   Redirect to Thank you Page
                           
                        } 
                        else {
                            window.location.href = 'thankyoupage.php';
                            
                        }
                    });
        }
    }

    getFormData = (formName) => {
        const UtmParamsFromURL = this.getUrlParams();
        const formData = new FormData(document.getElementById(formName));
        formData.append("access_code", "630C-68B3-F378-6BFF-2B58-E788"); // Mandatory
        formData.append("source", (!UtmParamsFromURL.get("utm_source")) ? 'Google' : UtmParamsFromURL.get("utm_source")); // Source is Mandatory
        console.log(UtmParamsFromURL.get("utm_campaign"));
        // UTM Parameters //
        formData.append("utm_source", UtmParamsFromURL.get("utm_source"));
        formData.append("utm_network", UtmParamsFromURL.get("utm_network"));
        formData.append("utm_campaign", UtmParamsFromURL.get("utm_campaign"));
        formData.append("utm_keyword", UtmParamsFromURL.get("utm_keyword"));
        formData.append("utm_device", UtmParamsFromURL.get("utm_device"));
        // Append Any Additional Parameters Required Below//
        // formData.append("Agency", '8Views');
        return formData;
    }

    getUrlParams = () => {
        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);
        return urlParams;
    }

}

window.geIntegration = new geIntegrationApi();
