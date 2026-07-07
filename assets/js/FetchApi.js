class FetchApi {
    postData = async (url = "", data) => {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams(data)
        });
        return response;
    }

    getData = async (url = "", data) => {
        const response = await fetch(url, {
            method: "GET"
        });
        return response.json();
    }

}

export default FetchApi;
